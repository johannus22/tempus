<?php

namespace App\Livewire\Layouts;

use Livewire\Component;

class AdminNavbar extends Component
{
    public $appName = "Tempus";
    public function render()
    {
        return view('livewire.layouts.admin-navbar');
    }
}

