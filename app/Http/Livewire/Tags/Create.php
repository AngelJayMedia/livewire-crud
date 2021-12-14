<?php

namespace App\Http\Livewire\Tags;

use App\Models\Tag;
use Livewire\Component;
use Illuminate\Support\Str;

class Create extends Component
{
    public $name;
    public $openModal = false;

    protected $rules = [
        'name'      => ['required', 'unique:tags,name', 'min:5', 'max:10'],
    ];

    public function updated($property)
    {
        $this->validateOnly($property);
    }

    public function openModalToCreateTag()
    {
        $this->resetErrorBag();
        $this->openModal = true;
    }

    public function store()
    {
        Tag::create([
            'name'  => $this->name,
            'slug'  => Str::slug($this->name),
        ]);

        session()->flash('success', 'Tag Created!');

        $this->reset();
    }

    public function render()
    {
        return view('livewire.tags.create');
    }
}
