<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\FieldOperator;
use App\Models\JobOperator;
use App\Models\Province;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class SupporterController extends Controller
{
    //
    public function search(Request $request)
    {
        $params = [
            'job_id' => $request->job_id,
            'field_id' => $request->field_id,
            'province_id' => $request->province_id,
            'supporter_id' => $request->supporter_id
        ];
        $validator = Validator::make($params, [
            'job_id' => 'nullable|exists:jobs_operators,id',
            'field_id' => 'nullable|exists:field_operators,id',
            'province_id' => 'nullable|exists:provinces,id',
        ]);
        if ($validator->fails()) {
            return redirect()->route('supporter');
        }

        $supporters = DB::table('supporters')
        ->leftJoin('provinces', 'supporters.province_id', '=', 'provinces.id')
        ->leftJoin('jobs_operators', 'supporters.job_id', '=', 'jobs_operators.id')
        ->leftJoin('field_operators', 'supporters.field_operator_id', '=', 'field_operators.id')
        ->select([
            'supporters.id', 'supporters.name', 'thumbnail', 'process_work', 'info_contact', 'province_id', 'field_operator_id', 'job_id',
            'provinces.name as province_name',
            'jobs_operators.name as job_name',
            'field_operators.name as field_job_name',
            ])
        ->whereNull('supporters.deleted_at');
        $provinces = Province::all();
        $jobs = JobOperator::all();
        $fields = FieldOperator::all();

        if (!empty($request->job_id)) {
            $supporters = $supporters->where('supporters.job_id', "$request->job_id");
        }
        if (!empty($request->field_id)) {
            $supporters = $supporters->where('supporters.field_operator_id', "$request->field_id");
        }
        if (!empty($request->province_id)) {
            $supporters = $supporters->where('supporters.province_id', "$request->province_id");
        }
        $supporters = $supporters->orderBy('supporters.name', 'asc')->get();
        return view('components.supporter', ['supporters' => $supporters, 'provinces' => $provinces, 'jobs' => $jobs, 'fields' => $fields, 'params'=> $params]);
    }
}
