<?php
namespace App\Services;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;

class UserService
{
    /**
     * Get list user with conditions
     *
     * @param array $inputs Input
     *
     * @return mixed
     * @throws ValidationException
     */
    public function getList($inputs)
    {
        $validator = Validator::make($inputs, [
           'phone_nums'  => 'nullable|string',
           'user_name'   => 'nullable|string',
           'email'       => 'nullable|email',
           'id_card_num' => 'nullable|numeric',
           'hi_card_num' => 'nullable|numeric',
           'limit'       => 'nullable|numeric',
        ]);

        if ($validator->fails()) {
            throw new ValidationException($validator);
        }

        $results = User::query()->select(['*']);

        if (! empty($inputs['phone_nums'])) {
            $results->where('phone_nums', $inputs['phone_nums']);
        }

        if (! empty($inputs['user_name'])) {
            $results->where('user_name', 'like', '%'. $inputs['user_name'] . '%');
        }

        if (! empty($inputs['email'])) {
            $results->where('user_name', 'like', '%'. $inputs['email'] . '%');
        }

        if (! empty($inputs['id_card_num'])) {
            $results->where('id_card_num', $inputs['id_card_num']);
        }

        if (! empty($inputs['hi_card_num'])) {
            $results->where('hi_card_num', $inputs['hi_card_num']);
        }

        return $results->paginate($inputs['limit'] ? $inputs['limit'] : 10);
    }

    /**
     * Update User
     *
     * @param User  $user   User
     * @param array $inputs Inoputs
     *
     * @return mixed
     * @throws ValidationException
     * @throws \Exception
     */
    public function update(User $user, array $inputs)
    {
        $validator = Validator::make($inputs, [
            'phone_nums'       => 'required|string|unique:users,phone_nums,' . $inputs['id'],
            'phone_num_parent' => 'required|string|unique:users,phone_num_parent,' . $inputs['id'],
            'user_name'        => 'required|string',
            'email'            => 'required|email',
            'id_card_num'      => 'required|numeric|unique:users,id_card_num,' . $inputs['id'],
            'hi_card_num'      => 'required|numeric|unique:users,hi_card_num,' . $inputs['id'],
            'birthday'         => 'nullable|date_format:Y-m-d',
            'sex'              => 'nullable|numeric',
        ]);

        if ($validator->fails()) {
            throw new ValidationException($validator);
        }

        try {
            return $user->update($inputs);
        } catch (\Exception $exception) {
            throw new \Exception($exception);
        }
    }


    /**
     * Delete User
     *
     * @param User $user User
     *
     * @return mixed
    */
    public function delete(User $user)
    {
        return $user->delete();
    }
}
