<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\RoutingController;
use App\Livewire\Admin\Components\AddVisa;
use App\Livewire\Admin\Components\ListAllVisa;
use App\Livewire\Admin\Components\PackageRequest;



use App\Livewire\Admin\Components\VisaRequest;
use App\Livewire\Admin\PackageManager\AdminViewPackage;
use App\Livewire\Blog;
use App\Livewire\Admin\Dashboard;
use App\Livewire\Admin\PackageManager\ListPackage;
use App\Livewire\Admin\PackageManager\AddPackage;
use App\Livewire\Package;
use App\Livewire\PackageUserView;
use App\Livewire\UserAbout;
use App\Livewire\SaudiVisa;

use Illuminate\Support\Facades\Route;
use App\Livewire\UserHome;
use Livewire\Livewire;

//USER ROUTES START
Route::get('/', UserHome::class)->name('layouts.app');
Route::get('/about',UserAbout::class)->name('about');
Route::get('/package',PackageUserView::class)->name('package');
Route::get('/blog',Blog::class)->name('blog');
Route::get('/saudi-visa',SaudiVisa::class)->name('saudi-visa'); 
//USER ROUTES END


Route::get('/login',[AuthController::class,'adminLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('admin.login.submit');

// ADMIN ROUTES START
Route::middleware(['auth:admins'])->group(function () {
Route::get('/admin',Dashboard::class)->name('admin.dashboard');
Route::get('/admin/package', ListPackage::class)->name('admin.package-manager');
Route::get('/admin/package-request', PackageRequest::class)->name('admin.package-request');
Route::get('/admin/package/add', AddPackage::class)->name('admin.package-add');
Route::get('/admin/saudivisa',ListAllVisa::class)->name('admin.saudi-visa');
Route::get('/admin/saudivisa-request',VisaRequest::class)->name('admin.visa-request');
Route::get('/admin/saudivisa/add',AddVisa::class)->name('admin.visa-add');
Route::get('/editdata/{id}', AddVisa::class)->name('editdata');
Route::get('/editPackage/{id}',AddPackage::class)->name('editPackage');
Route::get('/viewPackage/{id}',AdminViewPackage::class)->name('viewPackage');
Route::post('/admin/logout',[AuthController::class,'logout'])->name('admin.logout');
});

//ADMIN ROUTES END
