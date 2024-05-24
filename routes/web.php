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

// Front 
Route::prefix('/')->name('front.')->group(function () {
    Route::view('','front.index')->name('index'); //INDEX PAGE
    Route::view('about','front.about')->name('about'); //About PAGE
    Route::view('contact','front.contact')->name('contact'); //CONTACT PAGE
    Route::view('services','front.services')->name('services'); //SERVICES PAGE
    Route::view('projects','front.projects')->name('projects'); //PROJECTS PAGE
    Route::view('team','front.team')->name('team'); //TEAM PAGE
     Route::view('testimonials','front.testimonials')->name('testimonials'); //PROJECTS PAGE
});

// Admin Dashboard
Route::prefix('admin')->name('admin.')->group(function () {
    Route::middleware('admin')->group(function(){

        Route::view('','admin.index')->name('index'); //INDEX PAGE
        Route::view('/setting','admin.settings.index')->name('setting'); //INDEX PAGE
        Route::view('/skill','admin.skills.index')->name('skill'); //INDEX PAGE
    });
    Route::view('/login','admin.auth.login')->middleware('guest:admin')->name('login'); //INDEX PAGE

});