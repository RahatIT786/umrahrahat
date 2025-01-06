<?php

namespace App\Livewire\Admin\Components;

use App\Models\RequestCommand;
use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\WithPagination;
class RequestHistory extends Component
{
    use WithPagination; 
    public $search = null;

    #[Layout('admin.Layouts.app')]
    public function render()
    {
        
        $RequestHistoryData = RequestCommand::where('status', 1)
                        ->where(function($query){
                            $query->where('username', 'like', '%'.$this->search.'%')
                                  ->orWhere('mobile_number', 'like', '%'.$this->search.'%')
                                  ->orWhere('command', 'like', '%'.$this->search.'%');
                        })
                        ->paginate(10);
        return view('livewire.admin.components.request-history',['CommandDatas'=>$RequestHistoryData]);
    }
}
