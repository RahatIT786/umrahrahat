<?php

use App\Livewire\Package;
use App\Livewire\UserAbout;
use Illuminate\Support\Facades\Route;
use App\Livewire\UserHome;


Route::get('/', UserHome::class)->name('layouts.app');
Route::get('/about',UserAbout::class)->name('about');

