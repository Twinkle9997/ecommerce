<?php

namespace App\View\Components\common;

use Illuminate\View\Component;

class labelRadioButton extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $inputClass;
    public $labelClass;
    public function __construct($inputClass, $labelClass)
    {
        $this->inputClass = $inputClass;
        $this->labelClass = $labelClass;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.common.label-radio-button');
    }
}