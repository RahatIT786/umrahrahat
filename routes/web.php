<?php

use App\Http\Controllers\RoutingController;

use App\Livewire\Admin\Components\PackageRequest;



use App\Livewire\Blog;
use App\Livewire\Admin\Dashboard;
use App\Livewire\Admin\PackageManager\ListPackage;
use App\Livewire\Admin\PackageManager\AddPackage;
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
Route::get('/admin/package', ListPackage::class)->name('admin.package-manager');
Route::get('/admin/package-request', PackageRequest::class)->name('admin.package-request');
//ADMIN ROUTES END
