<?php

namespace App\Livewire\Admin\Components;

use App\Models\PackageCommand;
use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\WithPagination;

class PackageRequestHistory extends Component
{
    use WithPagination; 
    public $search;
    #[Layout('admin.Layouts.app')]
    public function render()
    {
        $RequestHistoryData = PackageCommand::where('status', 1)
        ->where(function($query){
            $query->where('username', 'like', '%'.$this->search.'%')
                  ->orWhere('mobile_number', 'like', '%'.$this->search.'%')
                  ->orWhere('command', 'like', '%'.$this->search.'%');
        })
        ->paginate(10);
        return view('livewire.admin.components.package-request-history',['CommandDatas'=> $RequestHistoryData]);
    }
}
