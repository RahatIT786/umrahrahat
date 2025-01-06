<?php

namespace App\Livewire;

use Livewire\Component;

class Blog extends Component
{
    public function render()
    {
        return view('livewire.user_front.blog')->layout('user.Layouts.app');
    }
}
