<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\UserDoc;
use App\Models\UserProgramRegister;
use App\Models\Wallet;
use App\Services\Upload\UploadService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProgramController extends Controller
{
    //
    private $folderUpload = 'user-info';
    private $userDocUpload = 'user-doc';

    public function getRegisterProgram(Request $request, $id)
    {
        $program_id = Crypt::decrypt($id);
        $params = [
            'id' => $program_id,
        ];
        $validator = Validator::make($params, [
            'id' => 'required|exists:programs,id',
        ]);
        if ($validator->fails()) {
            return redirect()->route('home');
        }
        return view('components.register-program', ['program_id' =>$id]);
    }

    public function postRegisterProgram(Request $request, $id)
    {
        $program_id = Crypt::decrypt($id);
        $params = [
            'id_card_image_front' => $request->file('id_card_image_front'),
            'id_card_image_back' => $request->file('id_card_image_back'),
            'program_id' => $program_id
        ];
        $validator = Validator::make($params, [
            'id_card_image_front' => 'required|max:5120|mimes:jpeg,jpg,png',
            'id_card_image_back' => 'required|max:5120|mimes:jpeg,jpg,png',
            'program_id' => 'required|exists:programs,id'
        ], [
            'id_card_image_front.max' => 'Dung lượng tối đa 5Mb',
            'id_card_image_back.max' => 'Dung lượng tối đa 5Mb'
        ]);
        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator);
        }

        // save db get id, save id in session to process next step
        $front_img_file_name = $this->folderUpload . '/' . UploadService::upload($this->folderUpload, $params['id_card_image_front']);
        $back_img_file_name = $this->folderUpload . '/' . UploadService::upload($this->folderUpload, $params['id_card_image_back']);
        // user have login
        if (Auth::guard('user')->user()) {
            $user = User::find(Auth::guard('user')->user()->id);
            $user->update([
                'id_card_image_front' =>  $front_img_file_name,
                'id_card_image_back' =>  $back_img_file_name,
            ]);
        } else {
            if ($request->session()->get('user_id')) {
                $user = User::find($request->session()->get('user_id'));
                $user->update([
                    'id_card_image_front' =>  $front_img_file_name,
                    'id_card_image_back' =>  $back_img_file_name,
                ]);
            } else {
                $user_register = User::create([
                    'id_card_image_front' => $front_img_file_name,
                    'id_card_image_back' => $back_img_file_name
                ]);
                $request->session()->put('user_id', $user_register->id);
            }
        }
        return redirect()->route('register-program-step-one', $id);
    }

    public function getRegisterStep1(Request $request, $id)
    {
        $program_id = Crypt::decrypt($id);
        $validator = Validator::make([
            'id' => $program_id
        ], [
            'id' => 'required|exists:programs,id',
        ]);
        if ($validator->fails()) {
            return redirect()->route('home');
        }

        if ($request->session()->get('user_id') || (Auth::guard('user')->user())) {
            return view('components.register-program-step-one', ['program_id' =>$id]);
        } else {
            return redirect()->route('home');
        }
    }

    public function postRegisterStep1(Request $request, $id)
    {
        $program_id = Crypt::decrypt($id);
        $params = [
            'portrait_image' => $request->file('portrait_image'),
            'program_id'=> $program_id
        ];
        $validator = Validator::make($params, [
            'portrait_image' => 'required|max:5120|mimes:jpeg,jpg,png',
            'program_id' => 'required|exists:programs,id',
        ], [
            'portrait_image.max' => 'Dung lượng tối đa 5Mb',
        ]);
        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator);
        }
        // user have login
        if (Auth::guard('user')->user()) {
            $user = User::find(Auth::guard('user')->user()->id);
            $portrait_image_file_name = $this->folderUpload . '/' . UploadService::upload($this->folderUpload, $params['portrait_image']);
            $user->update(['portrait_image' =>  $portrait_image_file_name]);
            return redirect()->route('register-program-step-two', $id);
        } else {
            if ($request->session()->get('user_id')) {
                //
                $user = User::find($request->session()->get('user_id'));
                $portrait_image_file_name = $this->folderUpload . '/' . UploadService::upload($this->folderUpload, $params['portrait_image']);
                $user->update(['portrait_image' =>  $portrait_image_file_name]);
                return redirect()->route('register-program-step-two', $id);
            } else {
                return redirect()->route('register-program');
            }
        }
    }

    public function getRegisterStep2(Request $request, $id)
    {
        $program_id = Crypt::decrypt($id);
        $validator = Validator::make([
            'id' => $program_id
        ], [
            'id' => 'required|exists:programs,id',
        ]);
        if ($validator->fails()) {
            return redirect()->route('home');
        }

        if (($request->session()->get('user_id') && $request->id) || (Auth::guard('user')->user() && $request->id)) {
            return view('components.register-program-step-two', ['program_id' =>$id]);
        } else {
            return redirect()->route('home');
        }
    }

    public function postRegisterStep2(Request $request, $id)
    {
        $program_id = Crypt::decrypt($id);
        $files_data = [];
        $files_data = $request->file('file_data');
        $params = [
            'program_id' => $program_id,
            'user_name' => $request->user_name,
            'phone_nums' => $request->phone_nums,
            'email' => $request->email,
            'birthday' => $request->birthday,
            'id_card_num' => $request->id_card_num,
            'hi_card_num' => $request->hi_card_num,
            'phone_num_parent' => $request->phone_num_parent,
            'sex' =>  $request->sex
        ];
        $validator = Validator::make($params, [
            'program_id' => 'required|exists:programs,id',
            'user_name' => 'required',
            'phone_nums' => 'required|string|size:10',
            'email' => 'nullable',
            'birthday' => 'required',
            'id_card_num' => 'required',
            'hi_card_num' => 'nullable',
            'phone_num_parent' => 'nullable',
        ], [
            'user_name.required' => 'Yêu cầu nhập họ tên',
            'phone_nums.required' => 'Yêu cầu nhập số điện thoại',
            'phone_nums.size' => 'Số điện thoại gồm 10 chữ số',
            'birthday.required' => 'Yêu cầu nhập ngày sinh',
            'id_card_num.required' => 'Yêu cầu nhập số CCCD/CMND',
        ]);
        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator);
        }
        if ($files_data) {
            foreach ($files_data as $key => $value) {
                $validator2 = Validator::make(['file_data' => $value], [
                    'file_data' => 'required|max:10240|mimes:jpeg,jpg,png,xlsx,pdf,docx',
                ]);
                if ($validator2->fails()) {
                    return Redirect::back()->withErrors($validator);
                }
            }
        }

        $user_id = '';
        if (Auth::guard('user')->user()) {
            $user_id = Auth::guard('user')->user()->id;
        } elseif ($request->session()->get('user_id')) {
            $user_id = $request->session()->get('user_id');
        }
        try {
            if ($user_id) {
                $user = User::find($user_id);
                $user->update($params);
                // create data user_doc table
                if ($files_data) {
                    foreach ($files_data as $key => $value) {
                        $file_name = UploadService::upload($this->userDocUpload, $value);
                        try {
                            UserDoc::create(['file_name' => $file_name, 'user_id'=> $user_id]);
                        } catch (\Exception $e) {
                            Log::error($e->getMessage());
                        }
                    }
                }

                //create User program register
                $userProgramRes = UserProgramRegister::where(['user_id'=> $user_id, 'program_id' => $program_id])->first();
                if (! $userProgramRes) {
                    UserProgramRegister::create(
                        [
                            'user_id' => $user_id,
                            'program_id' => $program_id,
                            'status' => 1,
                        ]
                    );
                }

                // create wallet for user
                $wallet = Wallet::where('user_id', $user_id)->first();
                if (! $wallet) {
                    Wallet::create([
                        'user_id' => $user_id,
                    ]);
                }
                return redirect()->back()->with('response', true);
            }
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return Redirect::back()->withErrors('Đã xảy ra lỗi khi đăng ký!');
        }
    }

    public function getMyProgram(Request $request)
    {
        try {
            $id_detail = $request->id;
            $user_id = Auth::guard('user')->user()->id;
            if ($user_id) {
                $programs = DB::table('programs')
                ->join('user_program_registers', 'user_program_registers.program_id', '=', 'programs.id')
                ->join('users', 'user_program_registers.user_id', '=', 'users.id')
                ->select(['programs.*'])
                ->groupBy('programs.id')
                ->get();

                $wallet = Wallet::where('user_id', $user_id)->first();
                return view('components.my-program', ['programs' =>$programs, 'wallet' => $wallet, 'id_detail' => $id_detail]);
            }
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            // return Redirect::back();
        }
    }
}
