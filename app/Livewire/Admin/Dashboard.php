<?php

namespace App\Livewire\Admin;
use Livewire\Attributes\Layout;
use Livewire\Component;
use App\Models\VisaDetail;
use App\Models\userVisaEnquiry;

class Dashboard extends Component
{
    public $totalVisa;
    public $userVisaEnquiry;
    public function mount(){
        $this->totalVisa = VisaDetail::where('delete_status', 1)->count();
        $this->userVisaEnquiry = UserVisaEnquiry::where('delete_status', 1)->count();
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
