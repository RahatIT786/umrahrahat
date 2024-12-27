<?php

namespace App\Livewire\Admin\Components;

use Livewire\Component;

class PackageRequest extends Component
{
    public function render()
    {
        return view('livewire.admin.components.package-request')->layout('admin.layouts.app');
    }
}
