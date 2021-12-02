<?php

namespace App\View\Components;

use App\Models\Banner;
use Illuminate\View\Component;

class Banners extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get banners
     *
     * @return array|mixed
    */
    public function banners()
    {
        return Banner::query()
            ->limit(3)
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
        return view('components.layouts.banner');
    }
}
