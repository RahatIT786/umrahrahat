<?php

namespace App\Livewire;

use App\Models\Package;
use App\Models\PackageRequest;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Livewire\Attributes\Layout;
use Livewire\Component;

class PackageUserView extends Component
{
    // this livewire file name is package / path =livewire/user_front/package.blade.php

    use HasFactory;
    public $packages;
    public $selectedPackageId;
    public $selectedPackage;

    public $includesContent;

    public $sortedData;

    public $type;

    public $departurePlace;

    public $showPopup;

    public $customerChoosenPackage;


    // package enquiry form submission variables
    public $customerName;
    public $cutomerMobile;
    public $packageId;  

    public $groupedByMonth;

    public function mount(){
        $this->packages =  Package::where('delete_status',false)->get();
        $this->includesContent=$this->selectedPackage->note ?? 'Click to Explore';
        $this->sortedData=$this->selectedPackage->sharing ??'no sorted data';
       
      
    }

    public function updateContent($type){
       $this->type=$type;
       if($type==='sharing'){
        $this->includesContent=[
           'sharing'=>$this->selectedPackage->sharing,
           'quint' => $this->selectedPackage->quint,
           'quad' => $this->selectedPackage->quad,
           'triple' => $this->selectedPackage->triple,
           'double' => $this->selectedPackage->double,
           'single' => $this->selectedPackage->single,
        ];

       }
    
       elseif(isset($this->selectedPackage[$type]) && $type=== 'wednesday_dates'){
        // elseif( $type=== 'wednesday_dates'){
        $this->includesContent=$this->selectedPackage->wednesday_dates;

        //     $this->groupedByMonth = [];
        //     foreach ($includesContent as $date) {
        //     $month = \Carbon\Carbon::parse($date)->format('Y-m');  // Extract month in Y-m format
        //     $this->groupedByMonth[$month][] = $date;
        //         }

        // $this->includesContent= json_decode($this->selectedPackage[$type], true);
        $this->departurePlace=['DUBAI','SHARJAH','ABU DHABI'];
       }
   



       else{

        $this->includesContent=$this->selectedPackage->$type ?? " Content for {$type} is not available.";
        // dd($this->includesContent);
       }
    
    }

    public function bookHerePopUp(){
        $this->showPopup=true;
        $this->customerChoosenPackage=$this->selectedPackage->package_name;
    } 
    public function closeBookHerePopUp(){
        $this->showPopup=false;
        $this->customerChoosenPackage=null;
        $this->selectedPackage=null;
        $this->type=null;
        $this->includesContent=null;
    }

    public function packageEnquirySubmitForm(){
        // dd(
        //     $this->customerName,
        //     $this->cutomerMobile,
        //     $this->customerChoosenPackage,
        // );
        PackageRequest::create([
            'customer_name'=>$this->customerName,
            'mobile'=>$this->cutomerMobile,
            'package_name'=>$this->customerChoosenPackage,

        ]);

        $this->showPopup=false;
    }








    //sort the departure dates function
    public  function formatData($jsonData){
        $formatted=[];
        

        foreach($jsonData as $data){
            $month =date("M",strtotime($data['month']));
            $dates=array_map(function($date){
                return (int) date("d",strtotime($date));
            },$data['wednesdays']);

            $formatted[$month]=$dates;
        }
        ksort($formatted);
        return $formatted;
    }










    public function showPackageDetails($packageId){
       
        $this->selectedPackageId = $packageId;
        $this->selectedPackage = Package::find($packageId);
    }

    public function closePackageDetails(){
        $this->selectedPackage = null;
        $this->selectedPackageId = null;
    }






   
    public function render()
    {
        return view('livewire.user_front.package')->layout('user.layouts.app');
    }
}
