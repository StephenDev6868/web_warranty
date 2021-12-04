<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Compensation;
use App\Models\CompensationDoc;
use App\Models\Package;
use App\Models\Province;
use App\Services\Upload\UploadService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class CompensationController extends Controller
{
    private $folderUpload = 'compensations-doc';

    public function getRegisterReceive()
    {
        $packages = Package::orderBy('package_name', 'desc')->get();
        $provinces = Province::orderBy('name', 'desc')->get();
        return view('components.register-receive', ['packages' => $packages, 'provinces' => $provinces]);
    }
    //
    public function registerReceive(Request $request)
    {
        $params = [
            'package_id' => $request->package_id,
            'treatment_type' => $request->treatment_type,
            'date_start' => $request->date_start,
            'date_end' => $request->date_end,
            'province_id' => $request->province_id,
            'hospital' => $request->hospital,
            'disease'=> $request->disease,
        ];
        $files_data = [];
        $files_data = $request->file('file_data');
        $validator = Validator::make($params, [
            'package_id' => 'required|numeric|exists:packages,id',
            'treatment_type' => 'required|numeric',
            'date_start' => 'required|date_format:Y-m-d',
            'date_end' => 'required|date_format:Y-m-d',
            'province_id' => 'required|numeric|exists:provinces,id',
            'hospital' => 'required',
            'disease' => 'required',
        ]);
        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator);
        }
        $compensation = Compensation::create($params);
        // dd($compensation->id);
        foreach ($files_data as $key => $value) {
            $validator2 = Validator::make(['file_data' => $value], [
                'file_data' => 'required|max:10240|mimes:jpeg,jpg,png,gif,xlsx,csv,pdf,docx',
            ]);
            if ($validator2->fails()) {
                return Redirect::back()->withErrors($validator);
            }
        }

        /**
         * validate success
         * upload file
         * */
        // dd($files_data);
        foreach ($files_data as $key => $value) {
            $file_name = UploadService::upload($this->folderUpload, $value);
            // DB::beginTransaction();
            try {
                $doc = CompensationDoc::create(['file_name' => $file_name, 'compensation_id'=> $compensation->id]);
                // DB::commit();
            } catch (\Exception $e) {
                Log::error($e->getMessage());
                // DB::rollBack();
            }
        }
        return redirect()->back()->with('message', 'Đăng ký thành công');
    }
}
