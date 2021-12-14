<?php

namespace App\Http\Livewire\Posts;

use App\Models\Post;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;

    public $image;
    public $title;
    public $imageId = 1;

    protected $rules = [
        'image' => ['required', 'image', 'max:1048'],
        'title' => ['required', 'min:10'],
    ];

    public function cleanUp()
    {
        $this->image = null;
        $this->imageId++;
    }

    public function save()
    {
        $this->validate();

        Post::create([
            'image'     => $this->image->store('images', 'public'),
            'title'     => $this->title,
        ]);

        $this->dispatchBrowserEvent('post-created', [
            'title'         => 'Post Created!',
            'icon'          => 'success',
            'iconColor'     => 'green',
        ]);

        $this->reset();

        $this->cleanUp();
    }

    public function render()
    {
        return view('livewire.posts.create');
    }
}
