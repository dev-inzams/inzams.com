<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;

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


    // project routes
    Route::get('/dashboard/projects', [ProjectController::class, 'index'])->name('dashboard.projects');
    Route::post('/dashboard/projects/store', [ProjectController::class, 'store'])->name('project.store');
    Route::get('/dashboard/projects/delete/{id}', [ProjectController::class, 'delete'])->name('project.delete');
});



Route::get('/', [homeController::class, 'index'])->name('home');


Route::get('/service', function () {
    return view('public.services');
})->name('services');


Route::get('/projects', [ProjectController::class, 'allIndex'])->name('projects');


Route::get('/blogs', function () {
    return view('public.blogs');
})->name('blogs');

Route::get('/about', function () {
    return view('public.about');
})->name('about');


Route::get('/contact', function () {
    return view('public.contact');
})->name('contact');

Route::get('/project-details/{slug}', [ProjectController::class, 'show'])->name('project-details');







require __DIR__.'/auth.php';
