<?php

namespace App\Services;

use App\Exceptions\BusinessException;
use App\Models\News;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;
use App\Models\QA;
use App\Services\Upload\UploadService;

class NewsService
{
    private $folderUpload = 'news';
    /**
     */
    public function __construct()
    {
    }

    public function search($request)
    {
        $params = [
            'per_page' => $request->per_page,
            'page' => $request->page,
            'key_word' => $request->key_word
        ];
        $validator = Validator::make($params, [
            'per_page' => 'numeric',
            'page' => 'numeric',
        ]);
        if ($validator->fails()) {
            throw new ValidationException($validator);
        }
        $news = DB::table('news');
        if (!empty($request->key_word)) {
            $news = $news->where('title', 'like', "%{$request->key_word}%")
                ->orWhere('content', 'like', "%{$request->key_word}%");
        }
        if (!empty($request->order_by) && !empty($request->direction)) {
            $news = $news->orderBy($request->order_by, $request->direction);
        } else {
            $news = $news->orderBy('created_at', 'desc');
        }
        return $news->paginate($request->per_page);
    }

    public function create($request)
    {
        $params = [
            'title' => $request->title,
            'preview_content' => $request->preview_content,
            'content' => $request->content,
            'thumbnail' => $request->thumbnail
        ];
        $validator = Validator::make($params, [
            'title' => 'required',
            'preview_content' => 'required',
            'content' => 'required',
            'thumbnail' => 'required|max:2048|mimes:jpeg,jpg,png,gif',
        ]);
        if ($validator->fails()) {
            throw new ValidationException($validator);
        }

        if ($request->hasFile('thumbnail')) {
            $new_file_name = UploadService::upload($this->folderUpload, $request->thumbnail);
            $params['thumbnail_url'] = $this->folderUpload . '/' . $new_file_name;
        }
        $result  = News::create($params);
        return $result;
    }

    public function show($id)
    {
        $params = [
            'id' => $id,
        ];
        $validator = Validator::make($params, [
            'id' => 'required|numeric|exists:news,id',
        ]);
        if ($validator->fails()) {
            throw new ValidationException($validator);
        }
        return News::find($id);
    }

    public function update($request, $id)
    {
        $params = [
            'id' => $id,
            'title' => $request->title,
            'preview_content' => $request->preview_content,
            'content' => $request->content,
            'thumbnail' => $request->thumbnail
        ];
        $validator = Validator::make($params, [
            'id' => 'required|numeric|exists:news,id',
            'title' => 'required',
            'preview_content' => 'required',
            'content' => 'required',
            'thumbnail' => 'nullable|max:2048|mimes:jpeg,jpg,png,gif',
        ]);
        if ($validator->fails()) {
            throw new ValidationException($validator);
        }
        $news = News::find($id);
        if ($news && $request->hasFile('thumbnail')) {
            $arr_file_name = explode('/', $news->thumbnail_url);
            $file_name = end($arr_file_name);
            UploadService::deleteFile($this->folderUpload, $file_name);
            $new_file_name = UploadService::upload($this->folderUpload, $request->thumbnail);
            $params['thumbnail_url'] = $this->folderUpload . '/' . $new_file_name;
        }
        return $news->update($params);
    }

    public function delete($id)
    {
        $params = ['id' => $id];
        $validator = Validator::make($params, [
            'id' => 'required|numeric|exists:news,id',
        ]);
        if ($validator->fails()) {
            throw new ValidationException($validator);
        }
        $news = News::find($id);
        return $news->delete();
    }
}
