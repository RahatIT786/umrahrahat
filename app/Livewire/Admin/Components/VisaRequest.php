<?php

namespace App\Livewire\Admin\Components;

use Livewire\Component;
use Livewire\Attributes\Layout;
use App\Models\userVisaEnquiry;
use Livewire\WithPagination;
use App\Models\RequestCommand;
class VisaRequest extends Component
{
    use WithPagination; 
    public $showModal = false;
    public $showCommantModal = false;
    public $userCommand;
    public $userCommandId;
    public $requestId;
    public $visaRequestStatus;
    public $previous_status;
    public $user_name;
    public $user_mobile_number;
    public $search = null;
    public $VisaRequestId;

    protected $rules = [
        'userCommand' => 'required|min:5', // For example, it must be at least 5 characters long
    ];
    public function confirmDelete($id)
    {
        $this->requestId = $id; // Set the visa ID
        $this->showModal = true; // Show the modal
    }
    public function command($id)
    {
        $this->showCommantModal = true;
        $this->userCommandId = $id;
       // $this->updateStatus($id);
    }
    public function closeCommandModal()
    {
        $this->showCommantModal = false;
        //dump($command);
    }
    public function saveCommand()
    {
        
       // $this->showCommantModal = false;
        $command = $this->userCommand;
        $previous_status = $this->getStatus($this->userCommandId);
        $user_name = $this->getUserName($this->userCommandId);
        $user_mobile_number = $this->getUserMobileNumber($this->userCommandId);
        
        //dump($this->userCommandId);
        //dump($command);
        
        RequestCommand::create([
            'command' => $command ? $command : 'No command',
            'status' => 1,                     
            'previous_status' => $previous_status,    
            'username' => $user_name,
            'mobile_number' => $user_mobile_number,       
        ]);
        $this->updateStatus($this->userCommandId);
        $this->userCommand = '';
        $this->showCommantModal = false;
        
    }
    private function getUserName($id){
        $this->VisaRequestId = $id;
        $this->visaRequestStatus=userVisaEnquiry::findOrFail($id);
        return $this->visaRequestStatus->name;
    }
    private function getUserMobileNumber($id){
        $this->VisaRequestId = $id;
        $this->visaRequestStatus=userVisaEnquiry::findOrFail($id);
        return $this->visaRequestStatus->phone;
    }
    private function getStatus($id){
        $this->VisaRequestId = $id;
        $this->visaRequestStatus=userVisaEnquiry::findOrFail($id);
        return $this->visaRequestStatus->status;
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
        $this->visaRequestStatus=userVisaEnquiry::where('delete_status',false)->get();
        
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
    #[Layout('admin.Layouts.app')]
    public function render()
    {
        $userVisaRequest = userVisaEnquiry::where('delete_status', 1)
            ->where(function($query){
                $query->where('name', 'like', '%'.$this->search.'%')
                  ->orWhere('phone', 'like', '%'.$this->search.'%')
                  ->orWhere('visaType', 'like', '%'.$this->search.'%')
                  ->orWhere('status', 'like', '%'.$this->search.'%');
            })
            ->paginate(10);
       
        return view('livewire.admin.components.visa-request',['userVisaRequests' => $userVisaRequest]);
    }
}
