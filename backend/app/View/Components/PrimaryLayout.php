<?php

namespace App\View\Components;

use Illuminate\View\Component;

class PrimaryLayout extends Component
{
    /**
     * Path style css
     *
     * @var $pathStyle PathStyle
    */
    public $pathStyle;

    /**
     * General class name
     *
     * @var $pathStyle PathStyle
    */
    public $generalClass;

    /**
     * Create a new component instance.
     *
     * @param string $pathStyle    pathStyle
     * @param string $generalClass generalClass
     *
     * @return void
     */
    public function __construct(string $pathStyle, string $generalClass)
    {
        $this->pathStyle    = $pathStyle;
        $this->generalClass = $generalClass;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.layouts.PrimaryLayout');
    }
}
