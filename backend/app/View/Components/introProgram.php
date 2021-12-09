<?php

namespace App\View\Components;

use App\Models\Program;
use Illuminate\View\Component;

class IntroProgram extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Programs
     *
     * @return mixed|array
     */
    public function programs()
    {
        return Program::query()
            ->limit(4)
            ->orderBy('created_at', 'desc')
            ->get(['*']);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.intro-program');
    }
}
