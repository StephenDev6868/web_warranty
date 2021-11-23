<?php

namespace App\Services;

use App\Models\Disease;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class DiseaseService
{
    /**
     */
    public function __construct()
    {
    }

    public function all()
    {
        return Disease::orderBy('name', 'asc')->get();
    }

    public function create($request)
    {
        $params = [
            'name' => $request->name,
            'description' => $request->description,
        ];
        $validator = Validator::make($params, [
            'name' => 'required|max:255',
            'description' => 'required|max:255',
        ]);
        if ($validator->fails()) {
            throw new ValidationException($validator);
        }

        $disease = Disease::create($params);
        return $disease;
    }

    public function detail($id)
    {
        $params = [
            'id' => $id,
        ];
        $validator = Validator::make($params, [
            'id' => 'required|numeric|exists:diseases,id',
        ]);
        if ($validator->fails()) {
            throw new ValidationException($validator);
        }
        return Disease::find($id);
    }
    public function update($request, $id)
    {
        $params = [
            'id' => $id,
            'name' => $request->name,
            'description' => $request->description,
        ];
        $validator = Validator::make($params, [
            'id' => 'required|numeric|exists:diseases,id',
            'name' => 'required|max:255',
            'description' => 'required|max:255',
        ]);
        if ($validator->fails()) {
            throw new ValidationException($validator);
        }
        return Disease::find($id)->update($params);
    }
    public function delete($id)
    {
        $params = [
            'id' => $id,
        ];
        $validator = Validator::make($params, [
            'id' => 'required|numeric|exists:diseases,id',
        ]);
        if ($validator->fails()) {
            throw new ValidationException($validator);
        }
        return Disease::find($id)->delete();
    }
}
