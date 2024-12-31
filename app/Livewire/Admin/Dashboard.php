<?php

namespace App\Livewire\Admin;
use App\Models\Package;
use App\Models\PackageRequest;
use Livewire\Attributes\Layout;
use Livewire\Component;
use App\Models\VisaDetail;
use App\Models\userVisaEnquiry;

class Dashboard extends Component
{
    public $totalVisa;
    public $userVisaEnquiry;

    public $totalPackage;
    public $packageRequest;
    public function mount(){
        $this->totalVisa = VisaDetail::where('delete_status', 1)->count();
        $this->userVisaEnquiry = UserVisaEnquiry::where('delete_status', 1)->count();
        $this->totalPackage=Package::where('delete_status',false)->count();
        $this->packageRequest=PackageRequest::where('delete_status',false)->count();
    }

    #[Layout('admin.Layouts.app')]
    public function render()
    {
        return view('livewire.admin.dashboard',
        [
            'totalVisa' => $this->totalVisa,
            'userVisaEnquiry'=> $this->userVisaEnquiry
        ]);
    }
}
