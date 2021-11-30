<?php

namespace App\Services;

use App\Models\Bank;
use App\Models\CompensationDoc;
use App\Models\HistoryCompensation;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class CompensationService
{
    private $folderUpload = 'compensations-doc';
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
            'user_name' => $request->user_name,
            'phone_nums' => $request->phone_nums,
            'date_start' => $request->date_start,
            'status' => $request->status
        ];
        $validator = Validator::make($params, [
            'per_page' => 'required|numeric',
            'page' => 'required|numeric',
            'date_start' => 'nullable|date_format:Y-m-d',
            'status' => 'nullable|numeric',
        ]);
        if ($validator->fails()) {
            throw new ValidationException($validator);
        }
        
        try {
            $compensations = DB::table('compensations')
        ->join('provinces', 'compensations.province_id', '=', 'provinces.id')
        ->join('history_compensations', 'compensations.id', '=', 'history_compensations.compensation_id')
        ->join('users', 'history_compensations.user_id', '=', 'users.id')
        ->select(['compensations.*', 'provinces.name', 'history_compensations.status', 'users.user_name', 'users.phone_nums'])
        ->whereNull('compensations.deleted_at');
            if (!empty($request->user_name)) {
                $compensations = $compensations->where('users.user_name', 'like', "%{$request->user_name}%");
            }
            if (!empty($request->phone_nums)) {
                $compensations = $compensations->where('users.phone_nums', 'like', "%{$request->phone_nums}%");
            }
            if (!empty($request->date_start)) {
                $compensations = $compensations->whereDate('compensations.date_start', "%{$request->date_start}%");
            }
            if (!empty($request->status)) {
                $compensations = $compensations->where('history_compensations.history_compensations', "%{$request->status}%");
            }
            if (!empty($request->order_by) && !empty($request->direction)) {
                $compensations = $compensations->orderBy($request->order_by, $request->direction);
            } else {
                $compensations = $compensations->orderBy('created_at', 'desc');
            }
            return $compensations->paginate($request->per_page);
        } catch (\Exception $exception) {
            throw new \Exception($exception);
        }
    }

    public function detail($id)
    {
        $params = [
            'id' => $id
        ];
        $validator = Validator::make($params, [
            'id' => 'required|numeric|exists:compensations,id',
        ]);
        if ($validator->fails()) {
            throw new ValidationException($validator);
        }

        try {
            $compensation = DB::table('compensations')
        ->join('provinces', 'compensations.province_id', '=', 'provinces.id')
        ->join('history_compensations', 'compensations.id', '=', 'history_compensations.compensation_id')
        ->join('users', 'history_compensations.user_id', '=', 'users.id')
        ->select([
            'compensations.*',
            'notify_date', 'mount_request', 'doc_code', 'assurance_type', 'mount_pay', 'reason_reduce', 'status',
            'phone_nums', 'user_name', 'email', 'sex',
            'provinces.name'
            ])
        ->whereNull('compensations.deleted_at')
        ->where('compensations.id', $id)
        ->first();
            $compensation_docs = CompensationDoc::where('compensation_id', $id)->get();
            $compensation->compensation_docs = $compensation_docs;
            return $compensation;
        } catch (\Exception $exception) {
            throw new \Exception($exception);
        }
    }


    public function update($request, $id)
    {
        $params = [
            'id' => $request->id,
            'assurance_type' => $request->assurance_type,
            'doc_code' => $request->doc_code,
            'mount_pay' => $request->mount_pay,
            'reason_reduce' => $request->reason_reduce,
            'status' => $request->status
        ];
        $validator = Validator::make($params, [
            'id' => 'required|numeric|exists:compensations,id',
            'assurance_type' => 'nullable|numeric',
            'doc_code' => 'nullable',
            'mount_pay' => 'nullable|numeric',
            'reason_reduce' => 'nullable',
            'status' => 'required|numeric',
        ]);
        if ($validator->fails()) {
            throw new ValidationException($validator);
        }
        try {
            $history = HistoryCompensation::where('compensation_id', $id)->first();
            // return $history;
            return $history->update($params);
        } catch (\Exception $exception) {
            throw new \Exception($exception);
        }
    }

    public function download($doc_id)
    {
        $params = [
            'id' => $doc_id,
        ];
        $validator = Validator::make($params, [
            'id' => 'required|numeric|exists:compensation_docs,id',
        ]);
        if ($validator->fails()) {
            throw new ValidationException($validator);
        }
        try {
            ///
            $doc = CompensationDoc::find($doc_id);
            $path = public_path('upload/' . $this->folderUpload.'/'.$doc->file_name);
            $headers = [
                // 'Content-Type: application/pdf'
            ];
            return response()->file($path, $headers);
        } catch (\Exception $exception) {
            throw new \Exception($exception);
        }
    }
}
