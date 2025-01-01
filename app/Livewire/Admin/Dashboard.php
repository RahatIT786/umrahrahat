<?php

namespace App\Livewire\Admin;

use App\Models\Package;
use App\Models\PackageRequest;
use Livewire\Attributes\Layout;
use Livewire\Component;
use App\Models\VisaDetail;
use App\Models\userVisaEnquiry;
use Illuminate\Support\Facades\DB;

class Dashboard extends Component
{
    public $totalVisa;
    public $userVisaEnquiry;
    public $totalPackage;
    public $packageRequest;
    public $visaRequests;
    public $packageRequests;

    public function mount(){
        $this->totalVisa = VisaDetail::where('delete_status', 1)->count();
        $this->userVisaEnquiry = UserVisaEnquiry::where('delete_status', 1)->count();
        $this->totalPackage = Package::where('delete_status', false)->count();
        $this->packageRequest = PackageRequest::where('delete_status', false)->count();

        // Get monthly enquiry count for Visa Enquiries, returning zero for missing months
        $this->visaRequests = $this->getMonthlyEnquiries(UserVisaEnquiry::class);
        //dump($this->visaRequests);
        // Get monthly package request count for Package Requests, returning zero for missing months
        $this->packageRequests = $this->getMonthlyEnquiries(PackageRequest::class);
    }

    // Helper function to fetch the monthly count for a given model
    private function getMonthlyEnquiries($model)
    {
      if (!is_string($model) || !class_exists($model)) {
            return [];  // Return empty if the model is invalid
        }
        //dump((new $model)->getTable());
        //dump(now()->year);
    // Get the count of enquiries by month for the current year
    $monthlyData = DB::table((new $model)->getTable())  // Dynamically get the table from the model
        ->whereYear('created_at', now()->year) // Filter records for the current year
        ->selectRaw('MONTH(created_at) as month, count(*) as count')
        ->groupBy(DB::raw('MONTH(created_at)')) // Group by month
        ->pluck('count', 'month') // Get the counts and group by month
        ->toArray();
       // dump($monthlyData);

    // Initialize an array with 0 values for all 12 months (January to December)
    $monthlyEnquiries = array_fill(0, 12, 0); 

    // Map the data from the database into the correct months (1-12) to fill the array
    foreach ($monthlyData as $month => $count) {
        // Adjust the array index (month is 1-indexed, so subtract 1 to get the correct array index)
        $monthlyEnquiries[$month - 1] = $count;
    }

    // Return the result as an array where each value corresponds to the enquiries for a month
    return $monthlyEnquiries;
    }

    #[Layout('admin.Layouts.app')]
    public function render()
    {
        //dump($this->visaRequests);
        //dump($this->packageRequests);
        return view('livewire.admin.dashboard', [
            'totalVisa' => $this->totalVisa,
            'userVisaEnquiry' => $this->userVisaEnquiry,
            'visaRequests' => $this->visaRequests,
            'packageRequests' => $this->packageRequests,
        ]);
    }
}