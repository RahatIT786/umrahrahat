<?php

namespace App\Livewire\Admin\Components;

use Livewire\Component;
use Livewire\Attributes\Layout;
use App\Models\userVisaEnquiry;
use Livewire\WithPagination;
class VisaRequest extends Component
{
    use WithPagination; 
    public $showModal = false;
    public $requestId;
    public $visaRequestStatus;
    public $VisaRequestId;
    public function confirmDelete($id)
    {
        $this->requestId = $id; // Set the visa ID
        $this->showModal = true; // Show the modal
    }
    public function closeModal()
    {
        $this->showModal = false; // Close the modal
    }
    public function deleteData()
    {
        if ($this->requestId) {
            $visaDetails = userVisaEnquiry::findOrFail($this->requestId);
            $visaDetails->update(['delete_status' => 2]);
            session()->flash('message', 'Visa request successfully  deleted.');
            $this->showModal = false; // Close the modal
        }
    }
    public function updateStatus($id){
        $this->VisaRequestId = $id;
        $this->visaRequestStatus=userVisaEnquiry::findOrFail($id);
        $nextStatus=$this->getNextStatus($this->visaRequestStatus->status);

        userVisaEnquiry::where('id',$this->VisaRequestId)->update(['status'=>$nextStatus]);
        // $this->visaRequestStatus=userVisaEnquiry::where('delete_status',false)->get();
    }


 // Get the next status in the cycle (pending -> responded -> no responded)
    private function getNextStatus($currentStatus){
        switch ($currentStatus) {
            case 1:
                return 2;
            case 2:
                return 3;
            case 3:
                return 1;
        }
    }
    #[Layout('admin.layouts.app')]
    public function render()
    {
        $userVisaRequest = userVisaEnquiry::where('delete_status', 1)->paginate(10);
        return view('livewire.admin.components.visa-request',['userVisaRequests' => $userVisaRequest]);
    }
}
