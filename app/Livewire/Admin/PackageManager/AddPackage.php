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


    public $package_id;

    public $temp_photo_path;

    public $wednesdays;
   
        
    protected $rules = [
        'package_name' => 'required|string|max:25',
        'description' => 'required|string|max:50',
        'sharing' => 'required|integer|min:0',
        'quint' => 'required|integer|min:0',
        'quad' => 'required|integer|min:0',
        'triple' => 'required|integer|min:0',
        'double' => 'required|integer|min:0',
        'single' => 'required|integer|min:0',
        'note' => 'required|string|max:1000',
        'includes' => 'required|string|max:1000',
        'startMonth'=>'required|date_format:Y-m',
        'endMonth'=> 'required|date_format:Y-m',
        
        // 'photo' => 'required|image|mimes:jpeg,png,jpg',
        
    ];














    public function mount($id=null){

        // dd('Package id: '.$id);
        if($id){
            $package=Package::findOrFail($id);
            $this->package_id = $package->id;
            $this->package_name = $package->package_name;
            $this->description = $package->description;
            $this->sharing = $package->sharing;
            $this->quint = $package->quint;
            $this->quad = $package->quad;
            $this->triple = $package->triple;
            $this->double = $package->double;
            $this->single = $package->single;
            $this->note = $package->note;
            $this->includes = $package->includes;
           
            $this->photo_path=$package->photo_path;
        


           $dates=collect($package->wednesday_dates); 
           $minDate = $dates->min();  // Get the earliest date
           $maxDate = $dates->max();  // Get the latest date
            
           // Set the start and end month using the minimum and maximum dates
           $this->startMonth = \Carbon\Carbon::parse($minDate)->format('Y-m');  // Format as Y-m
           $this->endMonth = \Carbon\Carbon::parse($maxDate)->format('Y-m');  // Format as Y-m
            

        }
       

    }


    public function updatePackage(){
      
     
        $photoPath=$this->photo ? $this->photo-> store("package_photos","public") : null;
      $oldPackageData=Package::findOrFail($this->package_id);

        $oldPackageData->update([
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

      CalculateWednesdaysJob::dispatch($oldPackageData, $this->startYear, $this->endYear, $this->startMonth, $this->endMonth);

      // Optionally, you can return a success message or redirect
      session()->flash('message', 'Package Update Successfully');
    

      $this->resetForm();
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




    public function packageSubmit()
    {
        $this->validate([
            'photo'=>$this->photo_path ?'nullable|image|mimes:jpeg,png,jpg|max:2048': 'required|image|mimes:jpeg,png,jpg|max:2048'
        ]);
        $this->validate();

        $this->photo_path=null;

        if($this->photo){
            $this->photo_path=$this->photo->store('package_photos','public');
        }
       
       if($this->package_id){

        $package=Package::findOrFail($this->package_id);
        $this->photo_path=$package->photo_path;

        $package->update([
            'package_name'=>$this->package_name ?: $package->package_name,
            'description'=>$this->description?: $package->description,
        'sharing'=>$this->sharing?? $package->sharing,
        'quint'=>$this->quint?? $package->quint,
        'quad'=>$this->quad ?? $package->quad,
        'triple'=>$this->triple  ?? $package->triple,
        'double'=>$this->double  ?? $package-> double,
        'single'=>$this->single  ?? $package->single,
        // 'months'=>$this->months  ?: $package->months,
        'wednesday_dates'=>$this->wednesdays  ?: $package->wednesday_dates,
        'note'=>$this->note ?: $package->note,
        'includes'=>$this->includes  ?: $package->includes,
        'photo_path'=>$this->photo_path  ?: $package->photo_path,

        ]);
        //   CalculateWednesdaysJob::dispatch($package, $this->startYear, $this->endYear, $this->startMonth, $this->endMonth);

      // Optionally, you can return a success message or redirect
      session()->flash('message', 'Package Update Successfully');
      
      return redirect()->route('admin.package-manager');


       }
       else{
         // Validate if needed
        // $photoPath = $this->photo->store('public/packages'); // Store the photo in storage and get the path
         $getWednesday =  $this->getWednesdays($this->startMonth, $this->endMonth);
        $packageData= Package::create([
        'package_name' => $this->package_name,
        'description' => $this->description,
        'sharing' => $this->sharing,
        'quint' => $this->quint,
        'quad' => $this->quad,
        'triple' => $this->triple,
        'double' => $this->double,
        'single' => $this->single,
        
        'note' => $this->note,
        'wednesday_dates'=> $getWednesday,
        'includes' => $this->includes,
        'photo_path' => $this->photo_path,// Save the photo path
    ]);

    // $packageData=[
    //     'package_name' => $this->package_name,
    //     'description' => $this->description,
    //     'sharing' => $this->sharing,
    //     'quint' => $this->quint,
    //     'quad' => $this->quad,
    //     'triple' => $this->triple,
    //     'double' => $this->double,
    //     'single' => $this->single,
    //     'months' => $this->months,
    //     'note' => $this->note,
    //     'includes' => $this->includes,
    //     'photo_path' => $this->photo_path,// Save the photo path
    // ];
        
        // Dispatch the job to calculate Wednesdays and store the package
        // CalculateWednesdaysJob::dispatch($packageData, $this->startYear, $this->endYear, $this->startMonth, $this->endMonth);

        // Optionally, you can return a success message or redirect
        session()->flash('message', 'Package Added Successfully');
      

        $this->resetForm();
       }
    }

    public function getWednesdays($startMonth,$endMonth)
    {
        
        // // Validate inputs
        // $this->validate([
        //     'startMonth' => 'required|date_format:Y-m',
        //     'endMonth' => 'required|date_format:Y-m|after_or_equal:startMonth',
        // ]);

        // Convert to Carbon instances
        $start = Carbon::createFromFormat('Y-m', $startMonth)->startOfMonth();
        $end = Carbon::createFromFormat('Y-m', $endMonth)->endOfMonth();

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
       return $this->wednesdays;
    }



















   public function deletePackage($id){
    $package = Package::findOrFail($id);

    $package->delete_status=true;
    $package->save();
    session()->flash('message','Package Deleted Successfully');
    $this->emit('refreshPackages');
   }


    public function updatPackage(){

        // Find the existing package by ID
        $package=Package::findOrFail($this->package_id);

        // Handle photo upload if a new photo is provided
        $photo_path=$this->photo_path ? $this->photo_path->store('package_photos','public'):  $package->photo_path;


        $package->update([
            'package_name'=>$this->package_name,
            'description'=>$this->description,
        'sharing'=>$this->sharing,
        'quint'=>$this->quint,
        'quad'=>$this->quad,
        'triple'=>$this->triple,
        'double'=>$this->double,
        'single'=>$this->single,
        'months'=>$this->months,
        'wednesday_dates',
        'note'=>$this->note,
        'includes'=>$this->includes,
        'photo_path'=>$this->photo_path,

        ]);


    }


     // Method for filling the form with existing data when editing
     public function edit($packageId)
     {
         // Find the package by ID
         $package = Package::findOrFail($packageId);
 
         // Set form fields to the package data
         $this->package_id = $package->id;
         $this->package_name = $package->package_name;
         $this->description = $package->description;
         $this->sharing = $package->sharing;
         $this->quint = $package->quint;
         $this->quad = $package->quad;
         $this->triple = $package->triple;
         $this->double = $package->double;
         $this->single = $package->single;
         $this->note = $package->note;
         $this->includes = $package->includes;
         $this->startYear = $package->start_year;
         $this->endYear = $package->end_year;
        //  $this->startMonth = $package->start_month;
        //  $this->endMonth = $package->end_month;
      
     }


     // Reset form fields after saving or updating
    public function resetForm()
    {
        $this->reset(['package_id', 'package_name', 'description', 'sharing', 'quint', 'quad', 'triple', 'double', 'single', 'note', 'includes', 'photo', 'startYear', 'endYear', 'startMonth', 'endMonth']);
       
    }






















    #[Layout('admin.layouts.app')]
    public function render()
    {
        return view('livewire.admin.components.add-package');
    }
}
