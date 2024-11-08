<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class director extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        protected string $role,
        protected string $name
    ) {

    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string {
        return view("components.director", [
            "role" => $this->role,
            "name" => $this->name
        ]);
    }
}
