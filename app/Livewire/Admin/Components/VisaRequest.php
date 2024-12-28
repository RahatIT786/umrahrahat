<?php

namespace App\Livewire\Admin\Components;

use Livewire\Component;
use Livewire\Attributes\Layout;
class VisaRequest extends Component
{
    #[Layout('admin.layouts.app')]
    public function render()
    {
        return view('livewire.admin.components.visa-request');
    }
}
