<?php

use App\Livewire\About;
use App\Livewire\Category;
use App\Livewire\Contact;
use App\Livewire\Home;
use App\Livewire\Post;
use App\Livewire\Posts;
use App\Livewire\User;
use Illuminate\Support\Facades\Route;

Route::get('/', Home::class)->name('home');
Route::get('/posts', Posts::class)->name('posts');
Route::get('/post/{post:slug}', Post::class)->name('post');
Route::get('/authors/{user:username}', User::class)->name('authors');
Route::get('/categories/{category:slug}', Category::class)->name('categories');
Route::get('/about', About::class)->name('about');
Route::get('/contact', Contact::class)->name('contact');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
