<?php

namespace App\View\Components\common;

use Illuminate\View\Component;

class submitButton extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $value;
    public $class;
    public function __construct($value, $class)
    {
        $this->value = $value;
        $this->class = $class;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.common.submit-button');
    }
}