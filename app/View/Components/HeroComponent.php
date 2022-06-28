<?php

namespace App\View\Components;

use Illuminate\View\Component;

class HeroComponent extends Component
{

    public $titleSliceOne;
    public $titleSliceTwo;
    public $text;
    public $buttonPrimary;
    public $buttonGhost;
    public $imageElement;

    protected $imageId;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($titleSliceOne, $titleSliceTwo, $text, $buttonPrimary, $buttonGhost, $imageId = null)
    {
        $this->titleSliceOne = $titleSliceOne;
        $this->titleSliceTwo = $titleSliceTwo;
        $this->text = $text;
        $this->buttonPrimary = $buttonPrimary;
        $this->buttonGhost = $buttonGhost;
        $this->imageId = $imageId;
        $this->imageElement = $this->getImage();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.hero-component');
    }

    /**
     * Get the image for the component.
     *
     * @return string
     */
    protected function getImage()
    {
        if (!is_numeric($this->imageId)) {
            return false;
        }
        
        return wp_get_attachment_image($this->imageId, 'medium_large');
    }
}
