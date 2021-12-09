<?php

namespace App\Services;

use App\Models\UserAuthOtp;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;

class UserAuthOtpService
{
    /**
     * Get list otps
     *
     * @param array $inputs Input
     *
     * @return mixed|array
     * @throws ValidationException
     */
    public function getListOtps(array $inputs)
    {
        $validator = Validator::make($inputs, [
           'phone_nums' => 'nullable|string',
           'monthly'    => 'nullable|date_format:m-Y',
        ]);

        if ($validator->fails()) {
            throw new ValidationException($validator);
        }

        $query = UserAuthOtp::query();

        if (! empty($inputs['phone_nums'])) {
            $query->where('phone_nums', $inputs['phone_nums']);
        }

        if (! empty($inputs['monthly'])) {
            $monthly = Carbon::parse('01-' . $inputs['monthly']);
            $start_at = $monthly->firstOfMonth()->format('Y-m-d H:i:s');
            $end_at = $monthly->endOfMonth()->format('Y-m-d H:i:s');
            $query->whereBetween('created_at', [$start_at, $end_at]);
        }

        return $query->orderBy('created_at', 'desc')
            ->paginate(!empty($inputs['page_limit']) ? $inputs['page_limit'] : 10);
    }
}
