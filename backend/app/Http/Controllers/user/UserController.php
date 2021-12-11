<?php

namespace App\Http\Controllers\User;

use App\Models\User;
use App\Models\UserAuthOtp;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class UserController extends Controller
{
    /**
     * Login
     *
     * @param Request $request Request
     *
     * @return mixed
     * @throws \Exception
     */
    public function login(Request $request)
    {
        try {
            $attributes = $request->only([
                'phone_number',
            ]);
            //regex:/(84|0[3|5|7|8|9])+([0-9]{8})\b/g
            $validator = Validator::make($attributes, [
                'phone_number' => 'required|exists:users,phone_nums',
            ], [
                'phone_number.required' => 'Vui lòng nhập số điện thoại.',
                'phone_number.exists' => 'Số điện thoại này không hợp lệ.',
            ]);

            if ($validator->fails()) {
                return $this->responseError('', $validator->errors()->first());
            }

            $user = User::query()
                ->where('phone_nums', $attributes['phone_number'])
                ->first(['id']);

            if (app()->environment('dev') || app()->environment('local')) {
                $otpCode = '000000';
            } else {
                $otpCode = sprintf('%s', rand(100000, 999999));
            }

            UserAuthOtp::query()
                ->create([
                    'user_id'       => $user->getKey(),
                    'verified_code' => $otpCode,
                    'phone_nums'    => $attributes['phone_number'],
                    'status'        => 1,
                    'expired_at'    => Carbon::now()->addMinute(),
                ]);

            return $this->response('success', [
                'success' => true,
                'error'   => null
            ]);
        } catch (\Exception $exception) {
            throw new \Exception($exception);
        }
    }

    /**
     * Auth Otp
     *
     * @param Request $request Request
     *
     * @return mixed
    */
    public function authOtp(Request $request)
    {
        $attributes = $request->only([
            'phone_number',
            'otp',
        ]);

        $validator = Validator::make($attributes, [
            'otp'          => 'required|string',
            'phone_number' => 'required|exists:users,phone_nums',
        ], [
            'phone_number.required' => 'Vui lòng nhập số điện thoại.',
            'phone_number.exists'   => 'Số điện thoại này không hợp lệ.',
            'otp.required'          => 'Vui lòng nhập mã OTP.',
        ]);

        if ($validator->fails()) {
            return $this->responseError('', $validator->errors()->first());
        }

        $otp = UserAuthOtp::query()
            ->where('phone_nums', $attributes['phone_number'])
            ->where('verified_code', $attributes['otp'])
            ->first();

        if (! $otp) {
            return $this->responseError('Xác thực OTP thất bại', 'Mã OTP không chính xác vui lòng nhập lại');
        }

        if (Carbon::parse($otp->expired_at)->diffInSeconds(Carbon::now()) <= 0) {
            return $this->responseError('Xác thực OTP thất bại', 'Mã OTP đã hết hạn');
        }
        // Update status otp
        $otp->status = 2;
        $otp->save();

        $user = User::query()
            ->where('id', $otp->user_id)
            ->first();
        $user->token = Str::random(60);
        $user->save();
        $user['wallet'] = $user->wallet()->first(['coin']);

        return $this->response('', $user);
    }

    /**
     * Sign Out
     *
     * @param Request $request Request
     *
     * @return mixed
     */
    public function logout(Request $request)
    {
        dd(Auth::user());
    }
}
