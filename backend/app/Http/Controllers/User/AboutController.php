<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Program;
use App\Models\QA;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Get all
     *
     * @return mixed
     */
    public function index()
    {
        return view('components.about', [
            'programs' => $this->programs(),
            'qaList' => $this->getQA(),
        ]);
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
            return [
                'title'   => $program['title'],
                'content' => strlen($program['content']) >= 200
                    ? substr($program['content'], 1, 200) . '...'
                    : $program['content'],
            ];
        }, $programs->toArray());

        return $programs;
    }

    /**
     * QA
     *
     * @return mixed|array
     */
    public function getQA()
    {
        return QA::all(['*']);
    }
}
