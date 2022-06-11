<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Alert extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
     
     public $type;

     public $dismissible;

     protected $types = [
         "success",
         "danger",
         "warning",
         "info"
     ];

    public function __construct($type = "info", $dismissible=false)
    {
       $this->dismissible = $dismissible;
        $this->type = $type;
    }

    public function validType()
    {
     return in_array($this->type, $this->types) ? $this->type : 'info';
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.alert');
    }
}
