<?php

namespace App\Livewire\Admin\Components;

use Livewire\Component;
use Livewire\Attributes\Layout;
class SaudivisaManager extends Component
{
    #[Layout('admin.layouts.app')]
    public function render()
    {
        return view('livewire.admin.components.saudivisa-manager');
    }
}
