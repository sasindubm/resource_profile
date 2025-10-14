<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/env', function () {
    return view('EnvironmentalInformation');
});

Route::get('/basicinfo', function () {
    return view('basic_information_page');
})->name('Basic Information Page');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

<<<<<<< HEAD

=======
Route::get('/basic', function () {
    return view('basic_information_page');
})->name('basic');
>>>>>>> 7890e3b6a09143d4ee1ab5c05e7bb1df19da750e

require __DIR__.'/auth.php';
