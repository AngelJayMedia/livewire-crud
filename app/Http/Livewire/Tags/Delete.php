<?php

namespace App\Http\Livewire\Tags;

use Livewire\Component;

class Delete extends Component
{
    public $tag;
    public $openModal = false;

    public function openModalToDeleteTag()
    {
        $this->resetErrorBag();
        $this->openModal = true;
    }

    public function delete()
    {
        $this->tag->delete();

        $this->dispatchBrowserEvent('tagDeleted', [
            'title'         => 'Tag Deleted!',
            'icon'          => 'warning',
            'iconColor'     => 'red',
        ]);

        $this->emitUp('saved');

        $this->reset();
    }

    public function render()
    {
        return view('livewire.tags.delete');
    }
}
