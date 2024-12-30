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

    public function mount(){
        $this->packageRequest =ModelsPackageRequest::where('delete_status',false)->get();
    }


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
    public function render()
    {
        return view('livewire.admin.components.package-request');
    }
}
