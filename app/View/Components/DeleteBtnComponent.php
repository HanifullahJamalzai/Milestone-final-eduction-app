<?php

namespace App\View\Components;

use Illuminate\View\Component;

class DeleteBtnComponent extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $route;
    public $routeKey;
    public $keyValue;

    public function __construct($route, $routeKey, $keyValue)
    {
        $this->route      = $route;
        $this->routeKey   = $routeKey;
        $this->keyValue   = $keyValue;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.delete-btn-component');
    }
}
