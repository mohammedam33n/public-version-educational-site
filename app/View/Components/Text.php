<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Text extends Component
{

    
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct( public $name,
    public $label,
    public $value = null,
    public $class = null,
    public $id = null,
    public $labelClass = null)
    {
       
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.text');
    }
}
