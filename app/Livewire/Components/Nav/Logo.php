<?php

namespace App\Livewire\Components\Nav;

use Livewire\Component;

class Logo extends Component
{
    public $appName;
    public function render()
    {
        return view('livewire.components.nav.logo');
    }
}
