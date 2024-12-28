<?php

namespace App\Livewire\Admin\Components;
use Livewire\Attributes\Layout;
use Livewire\Component;
use App\Models\VisaDetail;
use Illuminate\Support\Facades\Log;

class ListAllVisa extends Component
{
    public $visaDetails;
    public function mount(){
        $this->visaDetails = VisaDetail::all();
    }
    public function editVisa($visaId)
    {
        //Log::info('Editing visa with ID: ' . $visaId);
        $this->dispatchBrowserEvent('editVisa', ['visaId' => $visaId]); // Emitting an event to the AddVisa component
    }

    #[Layout('admin.layouts.app')]
    public function render()
    {
        return view('livewire.admin.components.list-all-visa',['visaDetails' => $this->visaDetails]);
    }
}
