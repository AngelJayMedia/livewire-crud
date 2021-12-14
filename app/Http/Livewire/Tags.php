<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Tags extends Component
{
    public $listeners = ['updated' => '$refresh'];

    public function render()
    {
        return view('livewire.tags')
            ->layout('layouts.guest');
    }
}
