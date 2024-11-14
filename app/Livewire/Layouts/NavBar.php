<?php

namespace App\Livewire\Layouts;

use Livewire\Component;

class NavBar extends Component
{
    public $appName = "Tempus";
    public function render()
    {
        return view('livewire.layouts.nav-bar');
    }
}
