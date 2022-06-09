<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Icon extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

     public $src;

    public function __construct($src)
    {
        $this->src = asset("icons/" . $src);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.icon');
    }
}
