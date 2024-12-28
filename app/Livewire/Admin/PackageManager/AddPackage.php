<?php

namespace App\Livewire\Admin\PackageManager;

use App\Jobs\CalculateWednesdaysJob;
use App\Models\Package;
use Carbon\Carbon;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithFileUploads;

class AddPackage extends Component
{
    use WithFileUploads;

    public $package_name;
    public $description;
    public $sharing;
    public $quint;
    public $quad;
    public $triple;
    public $double;
    public $single;
    public $months=[];
    public $note;
    public $includes;
    public $photo_path;


    public $photo;

    // this is for month wise get wednesdays
    public $startYear;
    public $endYear;
    public $startMonth;
    public $endMonth;
    public $monthsWithWednesdays;


    public function savePackage(){
      
     
        $photoPath=$this->photo ? $this->photo-> store("package_photos","public") : null;
      

      Package::create([
        'package_name'=>$this->package_name,
        'description'=> $this->description,
        'sharing'=> $this->sharing,
        'quint'=> $this->quint,
        'quad'=> $this->quad,
        'triple'=> $this->triple,
        'double'=> $this->double,
        'single'=> $this->single,
        'months'=> implode(',',$this->months),// convert array to comma-seperated string
        'wednesday_dates'=> json_encode($this->claculateWednesdays($this->months)),
        'note'=> $this->note,
        'includes'=> $this->includes,
        'photo_path'=> $photoPath
      ]);

      session()->flash('message','Packa Saved Successfully ! ');
    }









   
    public $availableMonths=[
        'January', 'February', 'March', 'April', 'May', 'June',
        'July', 'August', 'September', 'October', 'November', 'December'
    ];

    // public function claculateWednesdays($selectedMonths){
    //     $currentYear=$this->startYear; //get current year
    //     $currentMonth=$this->startMonth;
    //     $monthsWithWednesdays=[];

    //     // Get the first day of the current month and end of the month using Carbon
    //     while($currentYear <=$this->endYear && ($currentYear <$this->endYear || $currentMonth <= $this->endMonth)){
    //         $wednesdays=[];

    //         $startDate=Carbon::createFromDate($currentYear,$currentMonth,1);
    //         $endDate=$startDate->copy()->endOfMonth();


    //     }
    //      // Loop through the month and get all Wednesdays
    //     while($startDate -> lte($endDate)){
    //         if($startDate->isWednesday()){
    //                // Store Wednesday dates
    //             $wednesdays[]=$startDate->toDateString();
    //         }
    //         $startDate->addDay();// Move to the next day
    //     }

    //     $monthsWithWednesdays[]=[
    //         'month'=>$startDate->format('F Y'),// Full month name with year (e.g., "November 2024")
    //         'wednesdays'=>$wednesdays


    //     ];

    //      // Move to the next month
    //      $currentMonth++;
    //      if($currentMonth > 12){
    //         $currentMonth =1;
    //         $currentYear++;
    //      }

    //    $this->monthsWithWednesdays=$monthsWithWednesdays;
       

    //     // foreach($selectedMonths as $month){

    //     //     $wednesdays=[];


    //     //      //get the first days of the month 
    //     //     $startDate=Carbon::createFromDate($year,Carbon::parse($month)->month,1);
    //     //     $endDate=$startDate->copy()->endOfMonth();


    //     //     while($startDate->lte($endDate)){
    //     //         if($startDate->isWednesday()){
    //     //             $wednesdays=$startDate->toDateString();
    //     //         }
    //     //         $startDate->addDay();//move to next day
                
    //     //     }
    //     //     $monthsWithWednesdays[]=[
    //     //         'month'=>$month,
    //     //         'wednesdays'=>$wednesdays
    //     //     ];
    //     // }
    //     // return $monthsWithWednesdays;


    // }




    public function storePackage()
    {
        // Validate if needed
        // $photoPath = $this->photo->store('public/packages'); // Store the photo in storage and get the path
        $photoPath=$this->photo ? $this->photo-> store("package_photos","public") : null;
        $packageData = [
            'package_name' => $this->package_name,
            'description' => $this->description,
            'sharing' => $this->sharing,
            'quint' => $this->quint,
            'quad' => $this->quad,
            'triple' => $this->triple,
            'double' => $this->double,
            'single' => $this->single,
            'months' => $this->months,
            'note' => $this->note,
            'includes' => $this->includes,
            'photo_path' => $photoPath // Save the photo path
        ];

        // Dispatch the job to calculate Wednesdays and store the package
        CalculateWednesdaysJob::dispatch($packageData, $this->startYear, $this->endYear, $this->startMonth, $this->endMonth);

        // Optionally, you can return a success message or redirect
        session()->flash('message', 'Package created and job dispatched for processing!');
      

        $this->reset();
    }
    public function savePackageImage(){

    }














    #[Layout('admin.layouts.app')]
    public function render()
    {
        return view('livewire.admin.components.add-package');
    }
}
