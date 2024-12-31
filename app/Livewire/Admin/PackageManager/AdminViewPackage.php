<?php

namespace App\Livewire\Admin\PackageManager;
use App\Models\Package;
use Livewire\Component;
use Livewire\Attributes\Layout;
class AdminViewPackage extends Component
{
    public $package_id;
    public $package_name;
    public $description;
    public $sharing;
    public $quint;
    public $quad;
    public $triple;
    public $double;
    public $single;
    public $startYear;
    public $endYear;
    public $startMonth;
    public $endMonth;
    public $note;
    public $includes;
    public $photo;
    public function mount($id = null){
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
        $this->startYear = $package->startYear;
        $this->endYear = $package->endYear;
        $this->startMonth = $package->startMonth;
        $this->endMonth = $package->endMonth;
        $this->note = $package->note;
        $this->includes = $package->includes;
        $this->photo = $package->photo_path;

    }
    #[Layout('admin.layouts.app')]  
    public function render()
    {
        return view('livewire.admin.package-manager.admin-view-package');
    }
}
