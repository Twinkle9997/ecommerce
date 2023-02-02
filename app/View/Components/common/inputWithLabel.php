<?php

namespace App\View\Components\common;

use Illuminate\View\Component;

class inputWithLabel extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $name;
    public $label;
    public $placeholder;
    public $warningText;
    public $type;
    public $value ;
    public function __construct($name, $label, $placeholder, $warningText, $type, $value=null)
    {
        $this->name = $name;
        $this->label = $label;
        $this->placeholder = $placeholder;
        $this->warningText = $warningText;
        $this->type = $type;
        $this->value = $value;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.common.input-with-label');
    }
}
