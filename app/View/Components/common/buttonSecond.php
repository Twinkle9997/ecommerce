<?php

namespace App\View\Components\common;

use Illuminate\View\Component;

class buttonSecond extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $type;
    public $title;
    public function __construct($type, $title)
    {
        $this->type = $type;
        $this->title = $title;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.common.button-second');
    }
}
