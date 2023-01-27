<?php

namespace App\View\Components\common;

use Illuminate\View\Component;

class heading extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $title;
    public $class;
    public function __construct($title, $class = null)
    {
        $this->title = $title;
        $this->class = $class;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.common.heading');
    }
}