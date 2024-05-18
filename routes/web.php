<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

// require __DIR__.'/auth.php';
Route::prefix('/')->name('front.')->group(function () {
    Route::view('','front.index')->name('index'); //INDEX PAGE
    Route::view('about','front.about')->name('about'); //About PAGE
    Route::view('contact','front.contact')->name('contact'); //CONTACT PAGE
    Route::view('services','front.services')->name('services'); //SERVICES PAGE
    Route::view('projects','front.projects')->name('projects'); //PROJECTS PAGE
    Route::view('team','front.team')->name('team'); //TEAM PAGE
     Route::view('testimonials','front.testimonials')->name('testimonials'); //PROJECTS PAGE
});