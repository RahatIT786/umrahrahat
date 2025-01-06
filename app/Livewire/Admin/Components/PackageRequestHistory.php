<?php

namespace App\Livewire\Admin\Components;

use Livewire\Component;
use Livewire\Attributes\Layout;

class PackageRequestHistory extends Component
{
    #[Layout('admin.Layouts.app')]
    public function render()
    {
        return view('livewire.admin.components.package-request-history');
    }
}
