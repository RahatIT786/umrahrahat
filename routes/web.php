<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\UserHome;
// Route::get('/', function () {
//     return view('index');
// });

<<<<<<< HEAD
Route::get('/',UserHome::class)->name('user.home');
Route::get('/about',UserHome::class)->name('user.about');
=======
Route::get('/',UserHome::class)->name('user.layouts.app');
>>>>>>> 58ed0575dd483bd89de4237e38bd9835d7217530
