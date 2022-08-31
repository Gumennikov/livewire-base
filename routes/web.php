<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Auth\Register;
use Illuminate\Support\Facades\Storage;

//Route::get('/', function () {return view('welcome');})->name('counter');

//Livewire routes
Route::get('/', \App\Http\Livewire\Counter::class)->name('counter');
Route::get('/todo-list', \App\Http\Livewire\TodoList::class)->name('todo-list');
Route::get('/cascading-dropdown', \App\Http\Livewire\CascadingDropdown::class)->name('cascading-dropdown');
Route::get('/products', \App\Http\Livewire\ProductSearch::class)->name('products');
Route::get('/image-upload', \App\Http\Livewire\ImageUpload::class)->name('image-upload');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
