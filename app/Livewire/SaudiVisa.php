<?php

namespace App\Livewire;

use App\Models\Package;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Livewire\Component;
use PhpParser\Node\Expr\FuncCall;

class SaudiVisa extends Component
{

    use HasFactory;

   
    public function render()
    {
        return view('livewire.user_front.saudi-visa')->layout('user.layouts.app');
    }
}
