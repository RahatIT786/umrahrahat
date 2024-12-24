<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\UserHome;


Route::get('/', UserHome::class)->name('layouts.app');


