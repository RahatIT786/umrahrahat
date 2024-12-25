<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Component;

class Package extends Component
{
   
    public function render()
    {
        return view('livewire.package')->layout('user.layouts.app');
    }
}
