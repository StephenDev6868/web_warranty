<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Program;

class AssuranceController extends Controller
{
    /**
     * Index
     *
     * @return mixed
    */
    public function index()
    {
        return view('components.assurance', [
            'programs' => $this->programs(),
        ]);
    }

    /**
     * Programs
     *
     * @return mixed
    */
    public function programs()
    {
        return Program::query()
            ->limit(3)
            ->orderBy('created_at', 'desc')
            ->get(['*']);
    }
}
