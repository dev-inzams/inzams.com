<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/home', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



Route::get('/', function () {
    return view('public.index');
})->name('home');


Route::get('/service', function () {
    return view('public.services');
})->name('services');


Route::get('/projects', function () {
    return view('public.projects');
})->name('projects');


Route::get('/blogs', function () {
    return view('public.blogs');
})->name('blogs');

Route::get('/about', function () {
    return view('public.about');
})->name('about');


Route::get('/contact', function () {
    return view('public.contact');
})->name('contact');







require __DIR__.'/auth.php';
