<?php

namespace App\View\Components\common;

use Illuminate\View\Component;

class labelCheckbox extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $type;
    public $name;
    public $value;
    public $label;
    public function __construct($type, $name, $value, $label)
    {
        $this->type = $type;
        $this->name = $name;
        $this->value = $value;
        $this->label = $label;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.common.label-checkbox');
    }
}