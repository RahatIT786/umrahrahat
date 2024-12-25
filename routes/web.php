<?php

use App\Livewire\Package;
use Illuminate\Support\Facades\Route;
use App\Livewire\UserHome;


Route::get('/', UserHome::class)->name('layouts.app');

Route::get('/package',Package::class)->name('package');
