<?php
namespace App\Services;

use App\Models\User;
use App\Services\Upload\UploadService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;

class UserService
{
    protected $folderUpload = 'user-info';

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
     * @param Request $request Request
     * @param User    $user    User
     * @param array   $inputs  Inoputs
     *
     * @return mixed
     * @throws ValidationException
     * @throws \Exception
     */
    public function update(Request $request, User $user, array &$inputs)
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
            'front_img'        => 'nullable|max:5120|mimes:jpeg,jpg,png,gif',
            'back_img'         => 'nullable|max:5120|mimes:jpeg,jpg,png,gif',
            'portrait_img'     => 'nullable|max:5120|mimes:jpeg,jpg,png,gif',

        ]);

        if ($validator->fails()) {
            throw new ValidationException($validator);
        }

        try {
            if ($request->hasFile('front_img')) {
                $inputs['id_card_image_front'] = $this->handleFile($user->id_card_image_front, $inputs['front_img']);
            } else {
                $inputs['id_card_image_front'] = $user->id_card_image_front;
            }

            if ($request->hasFile('back_img')) {
                $inputs['id_card_image_back'] = $this->handleFile($user->id_card_image_back, $inputs['back_img']);
            } else {
                $inputs['id_card_image_back'] = $user->id_card_image_back;
            }

            if ($request->hasFile('portrait_img')) {
                $inputs['portrait_image'] = $this->handleFile($user->portrait_image, $inputs['portrait_img']);
            } else {
                $inputs['portrait_image'] = $user->portrait_image;
            }

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

    /**
     * Handle file image
     *
     * @param string $oldFile Old File
     * @param string $newFile New File
     *
     * @return mixed
    */
    protected function handleFile($oldFile, $newFile)
    {
        $arr_file_name = explode('/', $oldFile);
        $file_name = end($arr_file_name);
        UploadService::deleteFile($this->folderUpload, $file_name);
        $new_file_name = UploadService::upload($this->folderUpload, $newFile);
        return $this->folderUpload . '/' . $new_file_name;
    }
}
