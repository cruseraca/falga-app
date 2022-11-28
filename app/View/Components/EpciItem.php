<?php

namespace App\View\Components;

use Illuminate\View\Component;

class EpciItem extends Component
{

    public $title;
    public $description;
    public $reverse;
    public $color;
    public $image;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title, $description, $image = '', $color = '#5063A1', $reverse = false)
    {
        $this->title = $title;
        $this->description = $description;
        $this->reverse = $reverse;
        $this->color = $color;
        $this->image = $image;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.epci-item');
    }
}
