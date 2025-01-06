<?php

namespace App\Livewire\Admin\Components;

use App\Models\PackageRequest as ModelsPackageRequest;
use App\Models\PackageCommand;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\Attributes\Layout;

class PackageRequest extends Component
{

    public $packageRequest;
    public $packageRequestId;
    public $package;
    public $packageStatus;
    public $showCommantModal = false;
    public $status;
    public $requestId;
    public $userCommandId;
    public $userCommand;
    public $perPage=10;
    public $search;
    public $pagination;
    public $showModal = false;
    public $packageRequestStatus;
    public $action;

    public function mount(){
        $this->packageRequest =ModelsPackageRequest::where('delete_status',false)->paginate(50)->getCollection();
        // $this->pagination = ModelsPackageRequest::where('delete_status', false)
        //                                      ->paginate(10);
        // $this->packageRequest =ModelsPackageRequest::where('delete_status',false)->get();
        // $this->loadPackageRequest();
    }
    public function confirmDelete($id)
    {
        $this->requestId = $id; // Set the visa ID
        $this->showModal = true; // Show the modal
    }
    public function command($id)
    {
        $this->showCommantModal = true;
        $this->userCommandId = $id;
       // dump($this->userCommandId);
        // $this->updateStatus($id);
    }
    public function closeCommandModal()
    {
        $this->showCommantModal = false;
        //dump($command);
    }
   
    private function getUserName($id){
        $this->packageRequestId = $id;
        $this->packageRequestStatus=ModelsPackageRequest::findOrFail($id);
        //dump($this->packageRequestStatus->customer_name);
        return $this->packageRequestStatus->customer_name;
    }
    private function getUserMobileNumber($id){
        $this->packageRequestId = $id;
        $this->packageRequestStatus=ModelsPackageRequest::findOrFail($id);
        //dump($this->packageRequestStatus->mobile);
        return $this->packageRequestStatus->mobile;
    }
    private function getStatus($id){
        $this->packageRequestId = $id;
        $this->packageRequestStatus=ModelsPackageRequest::findOrFail($id);
        //dump($this->packageRequestStatus->call_status);
        return $this->packageRequestStatus->call_status;
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
        
        $this->action = PackageCommand::create([
            'command' => $command ? $command : 'No command',
            'status' => 1,                     
            'previous_status' => $previous_status,    
            'username' => $user_name,
            'mobile_number' => $user_mobile_number,       
        ]);

        if($this->action){
            dump('passs');
        }
        $this->updateStatus($this->userCommandId);
        $this->userCommand = '';
        $this->showCommantModal = false;
        
    }

    public function closeModal()
    {
        $this->showModal = false; // Close the modal
    }
    public function deleteData()
    {
        if ($this->requestId) {
             $this->package=ModelsPackageRequest::findOrFail($this->requestId);
             $this->package->delete_status=true;
             $this->package->save();
             $this->packageRequest=ModelsPackageRequest::where('delete_status',false)->get();
            $this->showModal = false; // Close the modal
        }
    }
  
  
    public function updatedSearch(){
     $this->packageRequest = ModelsPackageRequest::where('delete_status', false)
        ->where(function($query){
        $query ->where('customer_name', 'like', '%' . $this->search.'%')
        ->orWhere('mobile', 'like', '%' . $this->search.'%')
        ->orWhere('package_name', 'like', '%' . $this->search.'%')
        ->orWhere('call_status', 'like', '%' . $this->search.'%')
        ->paginate(10)->getCollection();
          })->get();
       }


    // public function loadPackageRequest(){
    //     $packageRequest= ModelsPackageRequest::where('delete_status', false)
    //     ->where(function ($query) {
    //         $query->where('customer_name', 'like', '%' . $this->search . '%')
    //               ->orWhere('mobile', 'like', '%' . $this->search . '%')
    //               ->orWhere('package_name', 'like', '%' . $this->search . '%')
    //               ->orWhere('call_status', 'like', '%' . $this->search . '%');
    //     })
    //     ->paginate($this->perPage)->toArray();
    //     $this->packageRequest=$packageRequest;
    //     // $this->paginationLinks=$packageRequest->links();

    // }



//         $this->packageRequest = ModelsPackageRequest::where('delete_status',false)->get();
    

    public function deletePackageRequest($packageId){
             $this->package=ModelsPackageRequest::findOrFail($packageId);
             $this->package->delete_status=true;
             $this->package->save();
             $this->packageRequest=ModelsPackageRequest::where('delete_status',false)->get();
    }
  

    // public function updateStatus($id){
    //     $this->requestId=   $id;
    //     $this->packageStatus=ModelsPackageRequest::findOrFail($id);
    //     $nextStatus=$this->getNextStatus($this->packageStatus->call_status);
    //     ModelsPackageRequest::where('id',$this->requestId)->update(['call_status'=>$nextStatus]);
    //     $this->packageRequest=ModelsPackageRequest::where('delete_status',false)->get();
    // }
  

     // Get the next status in the cycle (pending -> responded -> no responded)
    private function getNextStatus($currentStatus){
        switch ($currentStatus) {
            case 'pending':
                return 'responded';
            case 'responded':
                return 'no responded';
            case 'no responded':
                return 'pending';
        }
    }



    public $startmonth = '2025-01'; // Default to January
    public $endmonth = '2025-12';   // Default to March
    public $wednesdays = [];


    public function getWednesdays()
    {
        
        // // Validate inputs
        // $this->validate([
        //     'startMonth' => 'required|date_format:Y-m',
        //     'endMonth' => 'required|date_format:Y-m|after_or_equal:startMonth',
        // ]);

        // Convert to Carbon instances
        $start = Carbon::createFromFormat('Y-m', $this->startmonth)->startOfMonth();
        $end = Carbon::createFromFormat('Y-m', $this->endmonth)->endOfMonth();

        // Get all Wednesdays
        $this->wednesdays = [];
       
        $currentDate = $start->copy();

        // Adjust to the first Wednesday within the range
        if (!$currentDate->isWednesday()) {
            $currentDate->next(Carbon::WEDNESDAY);
        }

        // Collect all Wednesdays by jumping a week at a time
        while ($currentDate->lte($end)) {
            $this->wednesdays[] = $currentDate->toDateString();
            $currentDate->addWeek();
        }
        dd($this->wednesdays);
    }











  

    #[Layout('admin.Layouts.app')]
    public function render(){
        // $this->loadPackageRequest();
        // return view('livewire.admin.components.package-request',[
        //     'packageRequest',$this->packageRequest,
        //     'paginationLinks'=>$this->paginationLinks,
        // ]);


        return view('livewire.admin.components.package-request',[
            'packageRequest' => $this->packageRequest,  // Only the data
            // 'pagination' => $this->pagination,  // Pagination info
        ]);
 
         // return view('livewire.admin.components.package-request');
      }

  
  
  
  
  


}
