<?php

namespace App\Services;

use App\Models\Bank;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class BankService
{
    /**
     */
    public function __construct()
    {
    }

    public function all()
    {
        return Bank::all();
    }

    public function create($request)
    {
        $params = [
            'name' => $request->name,
            'sort_name' => $request->sort_name,
        ];
        $validator = Validator::make($params, [
            'name' => 'required|max:255',
            'sort_name' => 'required|max:255',
        ]);
        if ($validator->fails()) {
            throw new ValidationException($validator);
        }

        $bank = Bank::create($params);
        return $bank;
    }

    public function detail($id)
    {
        $params = [
            'id' => $id,
        ];
        $validator = Validator::make($params, [
            'id' => 'required|numeric|exists:banks,id',
        ]);
        if ($validator->fails()) {
            throw new ValidationException($validator);
        }
        return Bank::find($id);
    }
    public function update($request, $id)
    {
        $params = [
            'id' => $id,
            'name' => $request->name,
            'sort_name' => $request->sort_name,
        ];
        $validator = Validator::make($params, [
            'id' => 'required|numeric|exists:banks,id',
            'name' => 'required|max:255',
            'sort_name' => 'required|max:255',
        ]);
        if ($validator->fails()) {
            throw new ValidationException($validator);
        }
        return Bank::find($id)->update($params);
    }
    public function delete($id)
    {
        $params = [
            'id' => $id,
        ];
        $validator = Validator::make($params, [
            'id' => 'required|numeric|exists:banks,id',
        ]);
        if ($validator->fails()) {
            throw new ValidationException($validator);
        }
        return Bank::find($id)->delete();
    }
}
