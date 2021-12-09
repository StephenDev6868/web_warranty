<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\News;
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
            'news' => $this->news()
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
}
