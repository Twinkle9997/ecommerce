<?php

namespace App\View\Components\common;

use Illuminate\View\Component;

class button extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $title;
    public $url;
    public function __construct($title, $url)
    {
        $this->title = $title;
        $this->url = $url;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.common.button');
    }
}