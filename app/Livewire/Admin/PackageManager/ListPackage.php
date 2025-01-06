<?php

namespace App\Livewire\Admin\PackageManager;

use App\Models\Package;

use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithFileUploads;

class ListPackage extends Component
{
    public $packages;
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
    public $type;
    // this is for month wise get wednesdays
    public $startYear;
    public $endYear;
    public $startMonth;
    public $endMonth;
    public $monthsWithWednesdays;
    public $package_id;
    public $includesContent;
    public $actionButton='Save';
    protected $listeners = ['packageDeleted'=>'refreshPackageList'];
    //this variable for show package details in form 
    public $viewPackageId;
    public $selectedPackage;
    public $showPopup;


    public $showModal;
    

    public function mount()
{
    $this->packages = Package::where('delete_status',false)->get();
}
public function refreshPackageList(){
    $this->packages=Package::where('delete_status',false)->get();
}
public function updatePackage(){

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
    $this->actionButton = 'Update'; // Change button text to "Update"
}
    public function viewPackageDetails($id){
        // dd($packageId);
        // $this->showPopup = true;
        $package = Package::findOrFail($id);
        $this->viewPackageId= $package->id;
        $this->selectedPackage= Package::findOrFail($id);

    }

    public function closePackageDetails(){
        $this->selectedPackage = null;
        $this->viewPackageId = null;
    }


    // BELOW FUNCTION ARE CONFIRM DELETE FUNCTION
    public function confirmDelete($id)
    {
        $this->package_id = $id;
        $this->showModal = true;
      
    }
    public function closeConfirmDeletPopup(){
        $this->showModal = false;

    }

    public function deletePackage(){
        $package = Package::findOrFail($this->package_id);
    
        $package->delete_status=true;
        $package->save();

        $this->showModal = false;

        
        //refresh the package list
        $this->packages=Package::where('delete_status',false)->get();
        session()->flash('message','Package Deleted Successfully');
        
       }











    #[Layout('admin.Layouts.app')]
    public function render()
    {
        return view('livewire.admin.components.list-package');
    }
}
