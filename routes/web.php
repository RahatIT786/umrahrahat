<?php

use App\Livewire\Blog;
use App\Livewire\Package;
use App\Livewire\SaudiVisa;
use Illuminate\Support\Facades\Route;
use App\Livewire\UserHome;


Route::get('/', UserHome::class)->name('layouts.app');

Route::get('/package',Package::class)->name('package');

Route::get('/blog',Blog::class)->name('blog');
Route::get('/saudi-visa',SaudiVisa::class)->name('saudi-visa'); 