<?php

namespace App\Livewire\Admin\PackageManager;
use Livewire\Attributes\Layout;
use Livewire\Component;

class ListPackage extends Component
{
        public function render()
    {
        return view('livewire.admin.components.list-package')->layout('admin.layouts.app');
    }
}
