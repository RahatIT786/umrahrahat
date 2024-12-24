<?php

namespace App\Livewire;

use Livewire\Component;

class UserHome extends Component
{
    public function render()
    {
        return view('livewire.user-home')->layout('user.Layouts.app');
    }
}
