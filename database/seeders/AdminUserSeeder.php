<?php

namespace Database\Seeders;

use App\Models\SuperAdmin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SuperAdmin::create([
           
            "email"=> "info@rahat.in",
            // "password"=> 'root',
            "password"=> Hash::make('info@rahat.in'),
            "role"=>'admin',
        ]);
    }
}
