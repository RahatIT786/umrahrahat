<?php

namespace App\Livewire\Admin\Components;

use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithPagination; // Import the WithPagination trait
use App\Models\VisaDetail;

class ListAllVisa extends Component
{
    use WithPagination; // Use the WithPagination trait

    public $showModal = false;
    public $visaId;

    public function confirmDelete($id)
    {
        $this->visaId = $id; // Set the visa ID
        $this->showModal = true; // Show the modal
    }

    public function closeModal()
    {
        $this->showModal = false; // Close the modal
    }

    public function deleteData()
    {
        if ($this->visaId) {
            $visaDetails = VisaDetail::findOrFail($this->visaId);
            $visaDetails->update(['delete_status' => 2]);
            session()->flash('message', 'Visa details successfully marked as deleted.');
            $this->showModal = false; // Close the modal
        }
    }

    #[Layout('admin.layouts.app')]
    public function render()
    {
        // Use pagination instead of fetching all records
        $visaDetails = VisaDetail::where('delete_status', 1)->paginate(10);

        return view('livewire.admin.components.list-all-visa', [
            'visaDetails' => $visaDetails,
        ]);
    }
}
