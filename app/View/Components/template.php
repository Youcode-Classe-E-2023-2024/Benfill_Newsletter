<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class template extends Component
{
    /**
     * Create a new component instance.
     */
    public $templates;
    public function __construct($templates)
    {
        $this->templates = $templates;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.template');
    }
}
