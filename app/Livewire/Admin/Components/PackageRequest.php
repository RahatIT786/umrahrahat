<?php

namespace App\Livewire\Admin\Components;

use App\Models\PackageRequest as ModelsPackageRequest;
use Livewire\Component;
use Livewire\Attributes\Layout;

class PackageRequest extends Component
{

    public $packageRequest;
    public $package;
    public $packageStatus;
  
    public $status;
    public $requestId;

    public $perPage=10;
    public $search;
    public $pagination;
    public $showModal = false;




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
    public function closeModal()
    {
        $this->showModal = false; // Close the modal
    }
    public function deleteData()
    {
        if ($this->requestId) {
             $this->package=ModelsPackageRequest::findOrFail($$this->requestId);
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
  

    public function updateStatus($id){
        $this->requestId=   $id;
        $this->packageStatus=ModelsPackageRequest::findOrFail($id);
        $nextStatus=$this->getNextStatus($this->packageStatus->call_status);
        ModelsPackageRequest::where('id',$this->requestId)->update(['call_status'=>$nextStatus]);
        $this->packageRequest=ModelsPackageRequest::where('delete_status',false)->get();
    }
  

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
  

    #[Layout('admin.layouts.app')]
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
