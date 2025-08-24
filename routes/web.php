<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ContactFormController;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
  return view('home');
})->name('home');

Route::resource('/articles', PostController::class)->names([
  'index' => 'posts.index',
  'create' => 'posts.create',
  'store' => 'posts.store',
  'delete' => 'posts.delete',
]);

Route::get('/articles/{post}', [PostController::class, 'show'])->name('posts.show');

#Route::get('/', [PagesController::class, 'index'])->name('home');
Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/about', [PagesController::class, 'about'])->name('about');
#Route::get('/contact', [PagesController::class, 'contact'])->name('contact');

Route::get('/contact', [ContactFormController::class, 'create'])->name('contact.create');
Route::post('/contact', [ContactFormController::class, 'store'])->name('contact.store');