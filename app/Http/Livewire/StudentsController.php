<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;

class StudentsController extends Component
{
    use WithFileUploads;

    public $photo;

    public function save()
    {
        $this->validate([
            'photo' => 'image|max:1024',
        ]);

        $this->photo->store('photos');
    }

    public function render()
    {
        return view('livewire.students-controller');
    }
}
