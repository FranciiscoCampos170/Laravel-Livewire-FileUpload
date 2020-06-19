<?php

namespace App\Http\Livewire;

use App\Student;
use Livewire\Component;
use Livewire\WithFileUploads;

class StudentsController extends Component
{
    use WithFileUploads;

    public $name, $email, $photo;

    public function save()
    {
        $this->validate([
            'photo' => 'image|max:1024',
            'name' => 'required',
            'email' => 'required'
        ]);
        
        $name = $this->name;
        $email = $this->email;
        $file_name = md5($this->photo . microtime()). '.'.$this->photo->extension();

        $this->photo->storeAs('photos', $file_name);

        Student::create([
            'name'=> $name,
            'email'=>$email,
            'photo'=> $file_name
        ]);
    }

    public function render()
    {
        return view('livewire.students-controller');
    }

}
