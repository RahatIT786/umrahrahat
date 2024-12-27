<?php

namespace App\Livewire\Admin\PackageManager;
use Livewire\Attributes\Layout;
use Livewire\Component;

class AddPackage extends Component
{
    #[Layout('admin.layouts.app')]
    public function render()
    {
        return view('livewire.admin.components.add-package');
    }
}
