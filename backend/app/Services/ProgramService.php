<?php
namespace App\Services;

use App\Models\Program;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;

class ProgramService
{
    /**
     * Attributes
     *
     * @param array $inputs Inputs
     *
     * @return mixed|array
     * @throws ValidationException
     */
    public function list(array $inputs)
    {
        $validator = Validator::make($inputs, [
            'name'             => 'nullable|string',
            'title'            => 'nullable|string',
            'status'           => 'nullable|numeric',
            'started_at_from'  => 'nullable|date_format:Y-m-d',
            'started_at_to'    => 'nullable|date_format:Y-m-d',
            'end_at_from'      => 'nullable|date_format:Y-m-d',
            'end_at_to'        => 'nullable|date_format:Y-m-d',
        ]);

        if ($validator->fails()) {
            throw new ValidationException($validator);
        }

        $query = Program::query();

        if (! empty($inputs['name'])) {
            $query->where('name', 'like', '%' . $inputs['name'] . '%');
        }

        if (! empty($inputs['status'])) {
            $query->where('status', $inputs['status']);
        }
        if (! empty($inputs['started_at_from']) && ! empty($inputs['started_at_to'])) {
            $query->whereBetween('started_at', [$inputs['started_at_from'], $inputs['started_at_to']]);
        }

        if (! empty($inputs['end_at_from']) && ! empty($inputs['end_at_to'])) {
            $query->whereBetween('end_at', [$inputs['end_at_from'], $inputs['end_at_to']]);
        }

        return $query->orderBy('created_at', 'desc')
            ->paginate(! empty($inputs['page_limit']) ? $inputs['page_limit'] : 10);
    }

    /**
     * Attributes
     *
     * @param array $attributes Attributes
     *
     * @return mixed|array
     * @throws ValidationException
     */
    public function add(array $attributes)
    {
        $validator = Validator::make($attributes, [
            'name'             => 'required|string|min:10|max:255',
            'title'            => 'required|string|min:10|max:255',
            'content'          => 'required|string|min:10|max:255',
            'term'             => 'required|string|min:10|max:255',
            'requirement'      => 'required|string|min:10|max:255',
            'protection_range' => 'required|string|min:10|max:255',
            'customer_rule'    => 'required|string|min:10|max:255',
            'auth_rule'        => 'required|string|min:10|max:255',
            'status'           => 'required|numeric',
            'started_at'       => 'required|date_format:Y-m-d',
            'end_at'           => 'required|date_format:Y-m-d',
        ]);

        if ($validator->fails()) {
            throw new ValidationException($validator);
        }

        return Program::query()
            ->create($attributes);
    }

    /**
     * Attributes
     *
     * @param Program $program    Program
     * @param array   $attributes Attributes
     *
     * @return mixed|array
     * @throws ValidationException
     */
    public function update(Program $program, array $attributes)
    {
        $validator = Validator::make($attributes, [
            'name'             => 'required|string|min:10|max:255',
            'title'            => 'required|string|min:10|max:255',
            'content'          => 'required|string|min:10',
            'term'             => 'required|string|min:10',
            'requirement'      => 'required|string|min:10',
            'protection_range' => 'required|string|min:10',
            'customer_rule'    => 'required|string|min:10',
            'auth_rule'        => 'required|string|min:10',
            'status'           => 'required|numeric',
            'started_at'       => 'required|date_format:Y-m-d|before:end_at',
            'end_at'           => 'required|date_format:Y-m-d',
        ]);

        if ($validator->fails()) {
            throw new ValidationException($validator);
        }

        return $program->update($attributes);
    }

    public function getAll()
    {
        return Program::select(['id', 'title'])->whereNull('deleted_at')->orderBy('title')->get();
    }
}
