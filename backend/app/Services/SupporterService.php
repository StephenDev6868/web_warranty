<?php
namespace App\Services;

use App\Models\Supporter;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class SupporterService
{
    /**
     */
    public function __construct()
    {
    }

    public function search($request)
    {
        $params = [
            'per_page' => $request->per_page,
            'page' => $request->page,
            'province_id' => $request->province_id,
            'field_operator_id' => $request->field_operator_id,
            'job_id' => $request->job_id,
        ];
        $validator = Validator::make($params, [
            'per_page' => 'numeric|required',
            'page' => 'numeric|required',
        ]);
        if ($validator->fails()) {
            throw new ValidationException($validator);
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
        //search namne, province, job, field
        if (!empty($request->name)) {
            $supporters = $supporters->where('supporters.name', 'like', "%{$request->name}%");
        }
        if ($request->province_id != 0 && !empty($request->province_id)) {
            $supporters = $supporters->where('province_id', $request->province_id);
        }
        if ($request->field_operator_id != 0 && !empty($request->field_operator_id)) {
            $supporters = $supporters->where('field_operator_id', $request->field_operator_id);
        }
        if ($request->job_id != 0 && !empty($request->job_id)) {
            $supporters = $supporters->where('job_id', $request->job_id);
        }
        // sort
        if (!empty($request->order_by) && !empty($request->direction)) {
            $supporters = $supporters->orderBy($request->order_by, $request->direction);
        } else {
            $supporters = $supporters->orderBy('created_at', 'desc');
        }
        return $supporters->paginate($request->per_page);
    }

    public function create($request)
    {
        $params = [
        'name' => $request->name,
        'process_work' => $request->process_work,
        'info_contact' => $request->info_contact,
        'thumbnail' => $request->thumbnail,
        'province_id' => $request->province_id,
        'job_id' => $request->job_id,
        'field_operator_id' => $request->field_operator_id,
    ];
        $validator = Validator::make($params, [
        'name' => 'required',
        'process_work' => 'required',
        'info_contact' => 'required',
        'thumbnail' => 'required',
        'province_id' => 'required|exists:provinces,id',
        'job_id' => 'required|exists:jobs_operators,id',
        'field_operator_id' => 'required|exists:field_operators,id',
    ]);
        if ($validator->fails()) {
            throw new ValidationException($validator);
        }

        $result  = Supporter::create($params);
        return $result;
    }

    public function show($id)
    {
        $params = [
            'id' => $id,
        ];
        $validator = Validator::make($params, [
            'id' => 'required|numeric|exists:supporters,id',
        ]);
        if ($validator->fails()) {
            throw new ValidationException($validator);
        }
        return Supporter::find($id);
    }


    public function update($request, $id)
    {
        $params = [
            'id' => $request->id,
            'name' => $request->name,
            'process_work' => $request->process_work,
            'info_contact' => $request->info_contact,
            'thumbnail' => $request->thumbnail,
            'province_id' => $request->province_id,
            'job_id' => $request->job_id,
            'field_operator_id' => $request->field_operator_id,
        ];
        $validator = Validator::make($params, [
            'id' => 'required|exists:supporters,id',
            'name' => 'required',
            'process_work' => 'required',
            'info_contact' => 'required',
            'thumbnail' => 'required',
            'province_id' => 'required|exists:provinces,id',
            'job_id' => 'required|exists:jobs_operators,id',
            'field_operator_id' => 'required|exists:field_operators,id',
        ]);
        if ($validator->fails()) {
            throw new ValidationException($validator);
        }
        $supporter = Supporter::find($id);
        $supporter->update($params);
    }


    public function destroy($id)
    {
        $params = [
            'id' => $id,
        ];
        $validator = Validator::make($params, [
            'id' => 'required|numeric|exists:supporters,id',
        ]);
        if ($validator->fails()) {
            throw new ValidationException($validator);
        }
        return Supporter::find($id)->delete();
    }
}
