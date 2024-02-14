<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class sidebar extends Component
{
    /**
     * Create a new component instance.
     */
    public $admin;
    public $members;
    public $medias;
    public function __construct($admin, $members, $medias)
    {
        $this->admin = $admin;
        $this->members = $members;
        $this->medias = $medias;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.sidebar');
    }
}
