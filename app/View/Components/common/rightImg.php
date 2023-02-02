<?php

namespace App\View\Components\common;

use Illuminate\View\Component;

class rightImg extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $title;
    public $text;
    public $buttonTextOne;
    public $buttonTextTwo;
    public $urlOne;
    public $urlTwo;
    public $img;
    public $dir;
    
    public function __construct($title, $text, $buttonTextOne, $buttonTextTwo, $urlOne, $urlTwo, $img, $dir="")
    {
        $this->title = $title;
        $this->text = $text;
        $this->buttonTextOne = $buttonTextOne;
        $this->buttonTextTwo = $buttonTextTwo;
        $this->urlOne = $urlOne;
        $this->urlTwo = $urlTwo;
        $this->img = $img;
        $this->dir = $dir;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.common.right-img');
    }
}