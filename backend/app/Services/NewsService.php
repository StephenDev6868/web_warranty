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

class NewsService
{
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
}
