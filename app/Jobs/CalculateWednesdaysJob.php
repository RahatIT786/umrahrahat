<?php

namespace App\Jobs;

use App\Models\Package;
use Carbon\Carbon;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Support\Facades\Log;
use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;

class CalculateWednesdaysJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;


    protected $packageData;
    public $startYear;
    public $endYear;
    public $startMonth;
    public $endMonth;


    /**
     * Create a new job instance.
     */
    public function __construct($packageData,$startYear,$endYear,$startMonth,$endMonth)
    {
        $this->startYear = $startYear;
        $this->endYear = $endYear;
        $this->startMonth = $startMonth;
        $this->endMonth = $endMonth;
        $this->packageData = $packageData;
       
    }

    /**
     * Execute the job.
     */
    public function handle()
    {
        $currentYear = $this->startYear;
        $currentMonth = $this->startMonth;
        $monthsWithWednesdays = [];

         // Loop through months to calculate Wednesdays
         while ($currentYear <= $this->endYear || ($currentYear == $this->endYear && $currentMonth <= $this->endMonth)) {
            $wednesdays = [];
            $startDate = Carbon::createFromDate($currentYear, $currentMonth, 1);
            $endDate = $startDate->copy()->endOfMonth();

            $monthName=$startDate->format('F Y');

            Log::info("Processing month: $monthName");
            // Loop through the month and get all Wednesdays
            while ($startDate->lte($endDate)) {
                if ($startDate->isWednesday()) {
                    $wednesdays[] = $startDate->toDateString(); // Store Wednesday dates
                }
                $startDate->addDay(); // Move to the next day
            }

            $monthsWithWednesdays[] = [
                'month' => $monthName, // Full month name with year (e.g., "November 2024")
                'wednesdays' => $wednesdays
            ];

            // Move to the next month
            $currentMonth++;
            if ($currentMonth > 12) {
                $currentMonth = 1;
                $currentYear++;
            }
        }

        Log::info("Final months with Wednesdays: " . json_encode($monthsWithWednesdays));

        Package::create([
            'package_name' => $this->packageData['package_name'],
            'description' => $this->packageData['description'],
            'sharing' => $this->packageData['sharing'],
            'quint' => $this->packageData['quint'],
            'quad' => $this->packageData['quad'],
            'triple' => $this->packageData['triple'],
            'double' => $this->packageData['double'],
            'single' => $this->packageData['single'],
            'months' => implode(',', $this->packageData['months']), // convert array to comma-separated string
            'wednesday_dates' => json_encode($monthsWithWednesdays), // Store Wednesdays as JSON
            'note' => $this->packageData['note'],
            'includes' => $this->packageData['includes'],
            'photo_path'=> $this->packageData['photo_path']
        ]);



    }

    
}
