<?php

namespace App\Services;

use App\Models\Banner;
use App\Services\Upload\UploadService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;

class BannerService
{

    /**
     * Folder name
     *
     * @var string
    */
    private $folderUpload = 'banners';

    /**
     * Create Banner
     *
     * @param array $attributes Attributes
     *
     * @return mixed
     * @throws ValidationException
     */
    public function create(array &$attributes)
    {
        $validator = Validator::make($attributes, [
           'title'        => 'required|string|min:10|max:255',
           'content'      => 'required|string|min:10|max:255',
           'file_image'   => 'required|max:5120|mimes:jpeg,jpg,png,gif',
        ]);

        if ($validator->fails()) {
            throw new ValidationException($validator);
        }

        $new_file_name = UploadService::upload($this->folderUpload, $attributes['file_image']);
        $attributes['file_image'] = $this->folderUpload . '/' . $new_file_name;

        return Banner::query()->create($attributes);
    }

    /**
     * List all banner
     *
     * @param array $attributes Attributes
     *
     * @return mixed|array
    */
    public function list(array $attributes)
    {
        $query = Banner::query();

        if (! empty($attributes['title'])) {
            $query->where('title', 'like', '%'. $attributes['title'] . '%');
        }

        if (! empty($attributes['content'])) {
            $query->where('content', 'like', '%'. $attributes['content'] . '%');
        }

        return $query->orderBy('created_at', 'desc')
            ->paginate(isset($attributes['limit']) ? $attributes['limit'] : 3);
    }

    /**
     * Update banner service
     *
     * @param Request $request    Request
     * @param Banner  $banner     BannerB
     * @param array   $attributes Attributes
     *
     * @return mixed
     * @throws ValidationException
     */
    public function updateBanner(Request $request, Banner $banner, array &$attributes)
    {
        $validator = Validator::make($attributes, [
            'title'        => 'required|string|min:10|max:255',
            'content'      => 'required|string|min:10|max:255',
            'file_image'   => 'nullable|max:5120|mimes:jpeg,jpg,png,gif',
        ]);

        if ($validator->fails()) {
            throw new ValidationException($validator);
        }

        if ($request->hasFile('file_image')) {
            $arr_file_name = explode('/', $banner->file_image);
            $file_name = end($arr_file_name);
            UploadService::deleteFile($this->folderUpload, $file_name);
            $new_file_name = UploadService::upload($this->folderUpload, $attributes['file_image']);
            $attributes['file_image'] = $this->folderUpload . '/' . $new_file_name;
        } else {
            $attributes['file_image'] = $banner->file_image;
        }


        return $banner->update($attributes);
    }
}
