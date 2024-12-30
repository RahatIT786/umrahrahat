<?php

namespace App\Livewire;


use App\Models\Package;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use PhpParser\Node\Expr\FuncCall;

use App\Models\userVisaEnquiry;
use Livewire\Component;
use Livewire\Attributes\Layout;
use App\Models\VisaDetail;
use Illuminate\Support\Facades\Log;

class SaudiVisa extends Component
{
    use HasFactory;
  
    public $name;
    public $phone;
    public $message;
    public $visaDetails;
    public $getVisaType;
    public $data;
    public $visaType;

    public $showModal = false;
    public function mount(){
        $this->visaDetails = VisaDetail::where('delete_status', 1)->get();
    }
    public function UserRequestVisaType($id)
    {
        $this->getVisaType = VisaDetail::find($id);
        if ($this->getVisaType) {
            $this->visaType = $this->getVisaType->visa_type;
        } else {
            $this->visaType = 'Royal'; // Default value if no visa type is found
        }
        $this->showModal = true; // Show the modal
    }
    
    public function closeModal()
    {
        $this->showModal = false; // Close the modal
    }
    protected $rules = [
        'name'=> 'required|string',
        'phone'=> 'required|numeric',
        'visaType' => 'required|string',
    ];

    public function uservisaEnquiry(){
    
        // Create the enquiry
        $this->data = userVisaEnquiry::create([
            'name'=> $this->name,
            'phone'=> $this->phone,
            'message'=> $this->message,
            'visaType' => $this->visaType,
            'delete_status' => 1,
            'status' => 1,
        ]);
        $this->showModal = false;
    
        // Check if data is correctly created
        //Log::info('Enquiry created:', $this->data->toArray());
    
        // Display flash message and reset fields
        session()->flash('message', 'Your Visa Enquiry Send Successfully!');
        $this->reset(['name','phone','message']);
    }
    
    #[Layout('user.layouts.app')]

    public function render()
    {
        return view('livewire.user_front.saudi-visa',['visaDetails' => $this->visaDetails]);
    }
}
