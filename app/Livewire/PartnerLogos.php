<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Layout;
class PartnerLogos extends Component
{
    #[Layout('user.Layouts.app')]
    public function render()
    {
        return view('livewire.user_front.components.partner-logos');
    }
}
