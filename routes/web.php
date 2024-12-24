<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\UserHome;
// Route::get('/', function () {
//     return view('index');
// });


Route::get('/',UserHome::class)->name('user.home');
Route::get('/about',UserHome::class)->name('user.about');

Route::get('/',UserHome::class)->name('user.layouts.app');

