<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ManagingPartnerItem extends Component
{
    public $name;
    public $position;
    public $image;
    public $description;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name, $position, $image, $description)
    {
        $this->name = $name;
        $this->position = $position;
        $this->image = $image;
        $this->description = $description;
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
