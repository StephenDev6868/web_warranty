<?php

namespace App\Http\Controllers\User;

use App\Models\User;
use App\Models\UserAuthOtp;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function login(Request $request)
    {
        try {
            $attributes = $request->only([
                'phone_number',
            ]);

            $validator = Validator::make($attributes, [
                'phone_number' => 'required|regex:/(84|0[3|5|7|8|9])+([0-9]{8})\b/g|exists:user,phone_nums',
            ]);

            if ($validator->fails()) {
                return Redirect::to('/')->with('error', $validator->errors()->first());
            }

            $user = User::query()
                ->where('phone_nums', $attributes['phone_number'])
                ->first(['id']);

            if (app()->environment('dev') || app()->environment('local')) {
                $otpCode = 000000;
            } else {
                $otpCode = rand(100000, 999999);
            }

            UserAuthOtp::query()
                ->create([
                    'user_id'       => $user->getKey(),
                    'verified_code' => $otpCode,
                    'status'        => 1,
                    'expired_at'    => Carbon::now()->addMinute(),
                ]);

            return view('components.shared.signin', [
                'success' => true,
                'error'   => null
            ]);
        } catch (\Exception $exception) {
            throw new \Exception($exception);
        }
    }
}
