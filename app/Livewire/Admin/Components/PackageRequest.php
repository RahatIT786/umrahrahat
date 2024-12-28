<?php

namespace App\Livewire\Admin\Components;

use Livewire\Component;
use Livewire\Attributes\Layout;

class PackageRequest extends Component
{
    #[Layout('admin.layouts.app')]
    public function render()
    {
        return view('livewire.admin.components.package-request');
    }
}
