<?php

namespace App\Services;

use App\Exceptions\BusinessException;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;

class AdminService
{
    // /**
    // */
    // public function __construct()
    // {
    // }

    /**
     * Login admin
     *
     * @param array $attributes Attributes
     *
     * @return mixed|\Illuminate\Http\JsonResponse
     * @throws ValidationException
     * @throws BusinessException
     */
    public function login(array $attributes)
    {
        $validator = Validator::make($attributes, [
           'login_id' => 'required|min:8|max:255',
           'password' => 'required|min:8|max:255',
        ]);

        if ($validator->fails()) {
            throw new ValidationException($validator);
        }

        if (Auth::attempt($attributes)) {
            $admin = Auth::user();

            $admin->api_token = (string) Str::random(60);
            $admin->save();

            return $admin;
        }

        throw new BusinessException(trans('auth.unauthorized'), trans('auth.failed'));
    }

    /**
     * Logout
     *
     * @return void
    */
    public function logout()
    {
        if (Auth::guest()) {
            $admin = Auth::user();
            $admin->token = null;
            $admin->save();

            Auth::logout();
        }
    }

    /**
     * List all admin
     *
     * @return mixed
    */
    public function listAll()
    {
        return Admin::all();
    }

    /**
     * Show detail
     *
     * @param Admin $admin Admin
     *
     * @return mixed
    */
    public function showDetail(Admin $admin)
    {
    }
}
