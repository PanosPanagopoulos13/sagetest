<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ButtonGhostComponent extends Component
{
    public $buttonGhost;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($buttonGhost)
    {
        $this->buttonGhost = $buttonGhost;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.button-ghost-component');
    }
}
