<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class users extends Component
{
    public $users;
    public $roles;

    /**
     * Create a new component instance.
     */
    public function __construct($users, $roles)
    {
        $this->users = $users;
        $this->roles = $roles;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.users');
    }
}
