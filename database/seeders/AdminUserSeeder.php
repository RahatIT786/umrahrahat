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
           
            "email"=> "sam55@gmail.com",
            // "password"=> 'root',
            "password"=> Hash::make('sam'),
            "role"=>'admin',
        ]);
    }
}
