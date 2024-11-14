<?php

namespace App\Livewire\Components\Nav;

use Livewire\Component;

class LanguageDropdown extends Component
{
    public $languageSelector;
    public function render()
    {
        return view('livewire.components.nav.language-dropdown');
    }
}
