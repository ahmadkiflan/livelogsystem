<?php

use App\Http\Controllers\DashboardController;
use App\Livewire\About;
use App\Livewire\Category;
use App\Livewire\Contact;
use App\Livewire\Home;
use App\Livewire\Post;
use App\Livewire\Posts;
use App\Livewire\User;
use Illuminate\Support\Facades\Route;

// Front End
Route::get('/', Home::class)
    ->name('home');
Route::get('/posts', Posts::class)
    ->name('posts');
Route::get('/post/{post:slug}', Post::class)
    ->name('post');
Route::get('/authors/{user:username}', User::class)
    ->name('authors');
Route::get('/categories/{category:slug}', Category::class)
    ->name('categories');
Route::get('/about', About::class)
    ->name('about');
Route::get('/contact', Contact::class)
    ->name('contact');

// Back End
Route::middleware(['auth', 'verified'])
    ->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])
            ->name('dashboard');
        Route::post('/dashboard', [DashboardController::class, 'store'])
            ->name('dashboard.store');
        Route::get('/dashboard/create', [DashboardController::class, 'create'])
            ->name('dashboard.create');
        Route::get('/dashboard/{post:slug}/edit', [DashboardController::class, 'edit'])
            ->name('dashboard.edit');
        Route::patch('/dashboard/{post:slug}', [DashboardController::class, 'update'])
            ->name('dashboard.update');
        Route::get('/dashboard/{post:slug}', [DashboardController::class, 'show'])
            ->name('dashboard.show');
        Route::delete('/dashboard/{post:slug}', [DashboardController::class, 'destroy'])
            ->name('dashboard.destroy');
    });

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
