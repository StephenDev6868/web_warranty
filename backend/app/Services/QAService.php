<?php

namespace App\Services;

use App\Exceptions\BusinessException;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;
use App\Models\QA;

class QAService
{
    /**
     */
    public function __construct()
    { }

    public function listAll()
    {
        return QA::orderBy('id', 'desc')->get();
    }

    public function create(array $attributes)
    {
        $validator = Validator::make($attributes, [
            'question' => 'required',
            'answer' => 'required',
        ]);
        if ($validator->fails()) {
            throw new ValidationException($validator);
        }

        $qa = QA::create($attributes);
        return $qa;

    }

    public function showDetail($id)
    {
        $attributes = ['id' => $id];
        $validator = Validator::make($attributes, [
            'id' => 'required|numeric|exists:qas,id',
        ]);

        if ($validator->fails()) {
            throw new ValidationException($validator);
        }
        return QA::find($id);
    }
}
