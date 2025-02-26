<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Counter;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'welcome']);


Route::get('/counter', Counter::class);

Route::get('/page-name', [HomeController::class, 'page'])->name('page');