<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\dashboardController;
use App\Models\BlogCategory;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\ReachController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\SubscriberController;
use App\Http\Controllers\BlogCategoryController;
use App\Http\Controllers\ProjectCategoryController;

Route::get('/home', function () {
    return view('welcome');
});

Route::get('/dashboard', [dashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    // project routes
    Route::get('/dashboard/projects', [ProjectController::class, 'index'])->name('dashboard.projects');
    Route::post('/dashboard/projects/store', [ProjectController::class, 'store'])->name('project.store');
    Route::get('/dashboard/projects/delete/{id}', [ProjectController::class, 'delete'])->name('project.delete');
    // projects category
    Route::post('/dashboard/projects/category/store', [ProjectCategoryController::class, 'store'])->name('project.category.store');

    // blog
    Route::get('/dashboard/blogs', [BlogController::class, 'index'])->name('dashboard.blogs');
    Route::post('/dashboard/blogs/store', [BlogController::class, 'store'])->name('blog.store');
    Route::get('/dashboard/blogs/delete/{id}', [BlogController::class, 'delete'])->name('blog.delete');
    // blog category
    Route::post('/dashboard/blogs/category/store', [BlogCategoryController::class, 'store'])->name('blog.category.store');

    // company
    Route::get('/dashboard/companies', [CompanyController::class, 'index'])->name('dashboard.companies');
    Route::post('/dashboard/companies/store', [CompanyController::class, 'store'])->name('company.store');
    Route::get('/dashboard/companies/delete/{id}', [CompanyController::class, 'delete'])->name('companies.delete');
});



Route::get('/', [homeController::class, 'index'])->name('home');


Route::get('/service', [homeController::class, 'services'])->name('services');

// projects
Route::get('/projects', [ProjectController::class, 'allIndex'])->name('projects');
Route::get('/project-details/{slug}', [ProjectController::class, 'show'])->name('project-details');
// blog
Route::get('/blogs', [BlogController::class, 'blogs'])->name('blogs');
Route::get('/blog-details/{slug}', [BlogController::class, 'show'])->name('blog-details');
Route::get('/blog-archive/{id}', [BlogController::class, 'blogArchive'])->name('blog-archive');
Route::post('/blog/search', [BlogController::class, 'blogSearch'])->name('blog-search');

// blog comment
Route::post('/blog/comment/store', [CommentController::class, 'store'])->name('blog.comment.store');
// about
Route::get('/about', [homeController::class, 'about'])->name('about');


// contact
Route::get('/contact', function () {
    return view('public.contact');
})->name('contact');
Route::post('/contact/store', [ContactController::class, 'store'])->name('contact.store');



// subscriber
Route::post('subscribe/store', [SubscriberController::class, 'store'])->name('subscriber.store');



require __DIR__.'/auth.php';
