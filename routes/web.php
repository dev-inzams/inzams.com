<?php

use App\Models\BlogCategory;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\ReachController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\BlogCategoryController;
use App\Http\Controllers\ProjectCategoryController;

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

    // blog
    Route::get('/dashboard/blogs', [BlogController::class, 'index'])->name('dashboard.blogs');
    Route::post('/dashboard/blogs/store', [BlogController::class, 'store'])->name('blog.store');
    Route::get('/dashboard/blogs/delete/{id}', [BlogController::class, 'delete'])->name('blog.delete');

    // blog category
    Route::post('/dashboard/blogs/category/store', [BlogCategoryController::class, 'store'])->name('blog.category.store');

    // projects category
    Route::post('/dashboard/projects/category/store', [ProjectCategoryController::class, 'store'])->name('project.category.store');
});



Route::get('/', [homeController::class, 'index'])->name('home');


Route::get('/service', function () {
    return view('public.services');
})->name('services');


Route::get('/projects', [ProjectController::class, 'allIndex'])->name('projects');


Route::get('/blogs', [BlogController::class, 'allIndex'])->name('blogs');

Route::get('/about', function () {
    return view('public.about');
})->name('about');


Route::get('/contact', function () {
    return view('public.contact');
})->name('contact');

Route::get('/project-details/{slug}', [ProjectController::class, 'show'])->name('project-details');
Route::get('/blog-details/{slug}', [BlogController::class, 'show'])->name('blog-details');

// reach store
Route::post('posts/{id}/like', [ReachController::class, 'likePost'])->name('posts.like');




require __DIR__.'/auth.php';
