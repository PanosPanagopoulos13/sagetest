<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ButtonPrimaryComponent extends Component
{

    public $buttonPrimary;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($buttonPrimary)
    {
        $this->buttonPrimary = $buttonPrimary;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.button-primary-component');
    }
}
