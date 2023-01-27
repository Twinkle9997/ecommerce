<?php

namespace App\View\Components\common;

use Illuminate\View\Component;

class iconButton extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $url;
    public $title;
    public $icon;
    public function __construct($url, $title, $icon)
    {
        $this->url = $url;
        $this->title = $title;
        $this->icon = $icon;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.common.icon-button');
    }
}