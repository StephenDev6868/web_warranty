<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Services\Upload\UploadService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Crypt;

class ProgramController extends Controller
{
    //
    private $folderUpload = 'user-info';

    public function getRegisterProgram(Request $request, $id)
    {
        $program_id = Crypt::decrypt($id); //1
        // dd(Crypt::encrypt($request->id));
        //eyJpdiI6IkMvUlVBeWlXN2hYeWZiQTFQSFJQbGc9PSIsInZhbHVlIjoiQXVWdEVaMUJZa1g5Rkl2U3FaYXV6Zz09IiwibWFjIjoiYTgzY2U2NGU1YTE1ZTZkZGQwOTZkYzJlYmEyZTBmODhlNWM0YWM1NTUzMzJkMjE3YjkyOWZlYTI1ZDRmM2VkZiIsInRhZyI6IiJ9
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
        $front_img_file_name = UploadService::upload($this->folderUpload, $params['id_card_image_front']);
        $back_img_file_name = UploadService::upload($this->folderUpload, $params['id_card_image_back']);
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

        if ($request->session()->get('user_id')) {
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

        if ($request->session()->get('user_id')) {
            //
            $user = User::find($request->session()->get('user_id'));
            $portrait_image_file_name = UploadService::upload($this->folderUpload, $params['portrait_image']);
            $user->update(['portrait_image' =>  $portrait_image_file_name]);
            return redirect()->route('register-program-step-two', $id);
        // return view('components.post-register-program-step-two', ['program_id' =>$id]);
        } else {
            return redirect()->route('register-program');
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

        if ($request->session()->get('user_id') && $request->id) {
            // return redirect()->route('register-program-step-two', $id);
            return view('components.register-program-step-two', ['program_id' =>$id]);
        } else {
            return redirect()->route('home');
        }
    }

    public function postRegisterStep2(Request $request, $id)
    {
        // dd($request->all());
        $program_id = Crypt::decrypt($id);
        $params = [
            'program_id' => $program_id,
            'user_name' => $request->user_name,
            'phone_nums' => $request->phone_nums,
            'email' => $request->email,
            'birthday' => $request->birthday,
            'id_card_num' => $request->id_card_num,
            'hi_card_num' => $request->hi_card_num,
            'phone_num_parent' => $request->phone_num_parent,

        ];
        $validator = Validator::make($params, [
            'program_id' => 'required|exists:programs,id',
            'user_name' => 'required',
            'phone_nums' => 'required|numeric',
            'email' => 'nullable',
            'birthday' => 'required',
            'id_card_num' => 'required',
            'hi_card_num' => 'nullable',
            'phone_num_parent' => 'nullable',
        ]);
        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator);
        }

        if ($request->session()->get('user_id')) {
            $user = User::find($request->session()->get('user_id'));
            $user->update($params);
        }
    }
}
