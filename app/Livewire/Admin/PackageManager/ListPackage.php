<?php

namespace App\Livewire\Admin\PackageManager;

use App\Models\Package;
use Livewire\Attributes\Layout;
use Livewire\Component;

class ListPackage extends Component
{
    public $packages;

    public function mount()
{
    $this->packages = Package::all();
}







        #[Layout('admin.layouts.app')]
        public function render()
    {
        return view('livewire.admin.components.list-package');
    }
}
