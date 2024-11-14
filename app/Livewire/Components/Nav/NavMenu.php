<?php

namespace App\Livewire\Components\Nav;

use Livewire\Component;

class NavMenu extends Component
{
    public $menuItemName;
    public $isActive = false;
    public function render()
    {
        return view('livewire.components.nav.nav-menu');
    }
}
