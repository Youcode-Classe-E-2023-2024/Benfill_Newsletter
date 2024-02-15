<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class mailForm extends Component
{
    /**
     * Create a new component instance.
     */
    public $medias;
    public $templates;
    public function __construct($templates, $medias)
    {
        $this->medias = $medias;
        $this->templates = $templates;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.mail-form');
    }
}
