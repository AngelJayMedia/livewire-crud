<?php

namespace App\Http\Livewire\Tags;

use Livewire\Component;

class Edit extends Component
{
    public $tag;
    public $openModal = false;
    public $formId;

    public function mount($tag)
    {
        $this->formId = $tag->id();
    }

    protected $rules = [
        'tag.name'      => ['required', 'unique:tags,name', 'max:10'],
    ];

    public function updated($property)
    {
        $this->validateOnly($property);
    }

    public function openModalToUpdateTag()
    {
        $this->resetErrorBag();
        $this->openModal = true;
    }

    public function update()
    {
        $this->tag->update([
            'name'  => $this->tag->name,
        ]);

        $this->dispatchBrowserEvent('updated', [
            'title'     => 'Tag Updated!',
            'icon'      => 'success',
            'iconColor' => 'green',
        ]);

        $this->emit('saved');

        $this->reset();
    }

    public function render()
    {
        return view('livewire.tags.edit');
    }
}
