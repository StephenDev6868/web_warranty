<?php

namespace App\View\Components;

use App\Models\Program;
use Illuminate\View\Component;

class IntroProgram extends Component
{
    public $programs = [];

    /**
     * Create a new component instance.
     *
     * @param mixed $programs Programs
     *
     * @return void
     */
    public function __construct($programs)
    {
        $this->programs = $programs;
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
