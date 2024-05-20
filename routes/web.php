<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('dashboard');
});


Route::get('/dashboard', [ProfileController::class, 'dashboard'])->name('dashboard');
Route::get('/products', [ProfileController::class, 'products'])->name('products.index');
Route::get('/products/show', [ProfileController::class, 'productsShow'])->name('products.show');

Route::get('/contact', [ProfileController::class, 'contact'])->name('contact.index');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
