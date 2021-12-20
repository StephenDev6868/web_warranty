<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\News;
use App\Models\Program;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Get all
     *
     * @return mixed
    */
    public function index()
    {
        return view('components.home', [
            'news' => $this->news(),
            'programs' => $this->programs(),
        ]);
    }

    /**
     * News
     *
     * @return mixed|array
     */
    public function news()
    {
        return News::query()
            ->limit(3)
            ->orderBy('created_at', 'desc')
            ->get(['*']);
    }

    /**
     * Programs
     *
     * @return mixed|array
     */
    public function programs()
    {
        $programs =  Program::query()
            ->limit(4)
            ->orderBy('created_at', 'desc')
            ->get(['title', 'content']);

        $programs = array_map(function ($program) {
            $program['content'] = str_replace("\r\n", '\n', $program['content']);
            return [
                'title'   => $program['title'],
                'content' => strlen($program['content']) >= 200
                    ? mb_substr($program['content'], 0, 200, 'UTF-8') . '...'
                    : $program['content'],
            ];
        }, $programs->toArray());

        return $programs;
    }
}
