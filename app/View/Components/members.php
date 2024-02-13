<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class members extends Component
{
    public $members;
    /**
     * Create a new component instance.
     */
    public function __construct($members)
    {
        $this->members = $members;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.members');
    }
}
