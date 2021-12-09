<?php

namespace App\View\Components;

use App\Models\News;
use Illuminate\View\Component;

class Home extends Component
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
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
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
            ->limit(4)
            ->orderBy('created_at', 'desc')
            ->get(['*']);
    }
}
