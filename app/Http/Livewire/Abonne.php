<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class Abonne extends Component
{
    public $newUser= [];
    public function render()
    {
     return view('livewire.secretaires.index', [
            "users" => User::latest()->paginate(10)
        ])
        ->extends("layouts.master")
        ->section("contenu");
    }


   public function goToAddUser(){
        return view('livewire.secretaires.index');
    }
}
