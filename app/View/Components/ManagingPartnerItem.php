<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ManagingPartnerItem extends Component
{
    public $name;
    public $position;
    public $image;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name, $position, $image)
    {
        $this->name = $name;
        $this->position = $position;
        $this->image = $image;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.managing-partner-item');
    }
}
