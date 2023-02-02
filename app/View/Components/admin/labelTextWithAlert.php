<?php

namespace App\View\Components\admin;

use Illuminate\View\Component;

class labelTextWithAlert extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    
    public $label;
    public $type;
    public $name;
    public $placeholder;
    public $tooltip;
    public $peerName;
    public $peerCondition;

    public function __construct($label, $type, $name, $placeholder, $tooltip, $peerName, $peerCondition)
    {
        $this->label = $label;
        $this->type = $type;
        $this->name = $name;
        $this->placeholder = $placeholder;
        $this->tooltip = $tooltip;
        $this->peerName = $peerName;
        $this->peerCondition = $peerCondition;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.admin.label-text-with-alert');
    }
}