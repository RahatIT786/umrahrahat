<?php

use App\Http\Controllers\RoutingController;
use App\Livewire\Blog;
use App\Livewire\Dashboard;
use App\Livewire\Package;
use App\Livewire\UserAbout;
use App\Livewire\SaudiVisa;

use Illuminate\Support\Facades\Route;
use App\Livewire\UserHome;


//USER ROUTES START
Route::get('/', UserHome::class)->name('layouts.app');
Route::get('/about',UserAbout::class)->name('about');
Route::get('/package',Package::class)->name('package');
Route::get('/blog',Blog::class)->name('blog');
Route::get('/saudi-visa',SaudiVisa::class)->name('saudi-visa'); 
//USER ROUTES END



// ADMIN ROUTES START
Route::get('/admin',Dashboard::class)->name('admin.dashboard');
//ADMIN ROUTES END
