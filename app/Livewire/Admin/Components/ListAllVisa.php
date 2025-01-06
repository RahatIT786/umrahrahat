<?php
namespace App\Livewire\Admin\Components;

use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithPagination; 
use App\Models\VisaDetail;

class ListAllVisa extends Component
{
    use WithPagination; 

    public $showModal = false;
    public $visaId;
    public $search = null;
    public function confirmDelete($id)
    {
        $this->visaId = $id;
        $this->showModal = true;
    }

    public function closeModal()
    {
        $this->showModal = false;
    }

    public function deleteData()
    {
        if ($this->visaId) {
            $visaDetails = VisaDetail::findOrFail($this->visaId);
            $visaDetails->update(['delete_status' => 2]);
            session()->flash('message', 'Visa details successfully marked as deleted.');
            $this->showModal = false;
        }
    }

    #[Layout('admin.Layouts.app')]
    public function render()
    {
       //dump($this->search);
       // logger($this->search); // Log the search term for debugging

        $visaDetails = VisaDetail::where('delete_status', 1)
                        ->where(function($query){
                            $query->where('visa_type', 'like', '%'.$this->search.'%')
                                  ->orWhere('documents_required', 'like', '%'.$this->search.'%')
                                  ->orWhere('processing_time', 'like', '%'.$this->search.'%')
                                  ->orWhere('price', 'like', '%'.$this->search.'%');
                        })
                        ->paginate(10);

        return view('livewire.admin.components.list-all-visa', [
            'visaDetails' => $visaDetails,
        ]);
    }
}
