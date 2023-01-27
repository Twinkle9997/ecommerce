<?php

namespace App\View\Components\common;

use Illuminate\View\Component;

class labelInput extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $type;
    public $inputClass = null;
    public $name;
    public $id;
    public $placeholder;
    public $label;

    public function __construct($type, $inputClass=null, $name, $id, $placeholder, $label)
    {
        $this->type = $type;
        $this->inputClass = $inputClass;
        $this->name = $name;
        $this->id = $id;
        $this->placeholder = $placeholder;
        $this->label = $label;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.common.label-input');
    }
}