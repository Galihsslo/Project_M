<?php

namespace App\Livewire;

use Livewire\Component;

class Employe extends Component
{
    public $nama = 'Galih Susilo';
    public function render()
    {
        return view('livewire.employe');
    }
}
