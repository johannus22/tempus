<?php

namespace App\Livewire\Components\Modals;

use Livewire\Component;

class View extends Component
{
    public $showModal = false;
    public $event = [];

    protected $listeners = ['openModal' => 'show'];

    public function show($eventData)
    {
        $this->event = $eventData;
        $this->showModal = true;
    }

    public function close()
    {
        $this->showModal = false;
    }

    public function render()
    {
        return view('livewire.components.modals.view');
    }
}
