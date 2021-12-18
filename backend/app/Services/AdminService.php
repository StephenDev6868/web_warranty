<?php

namespace App\Services;

use App\Exceptions\BusinessException;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
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
     * Update Info Admin
     *
     * @param Admin $admin      Admin
     * @param array $attributes Attributes
     *
     * @return mixed
     * @throws ValidationException
     */
    public function updateInfoAdmin(Admin $admin, array $attributes)
    {
        $validator = Validator::make($attributes, [
           'name'     => 'required|min:8|max:255',
           'login_id' => 'required|unique:admins,login_id,' . $admin->getKey(),
           'email'    => 'required|email',
        ]);

        if ($validator->fails()) {
            throw new ValidationException($validator);
        }

        return $admin->update($attributes);
    }

    /**
     * Update Info Admin
     *
     * @param Admin $admin      Admin
     * @param array $attributes Attributes
     *
     * @return mixed
     * @throws ValidationException
     * @throws BusinessException
     */
    public function updatePassword(Admin $admin, array $attributes)
    {
        $validator = Validator::make($attributes, [
            'current_password'     => 'required|min:8|max:255',
            'new_password'         => 'required|min:8|max:255',
            'confirm_new_password' => 'required|min:8|max:255|same:new_password',
        ], [
            'confirm_new_password.same' => 'Mật khẩu mới và mật khẩu xác minh không khớp',
        ]);

        if ($validator->fails()) {
            throw new ValidationException($validator);
        }

        if (! Hash::check($attributes['current_password'], $admin->password)) {
            throw new BusinessException('', 'Mật khẩu cũ không chính xác');
        }

        return $admin->update([
            'password'            => Hash::make($attributes['new_password']),
            'password_changed_at' => now(),
        ]);
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
