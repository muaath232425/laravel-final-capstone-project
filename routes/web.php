<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BrandController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
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

require __DIR__.'/auth.php';


Route::get('/test', function () {
    return view('pages.supplier.create');
})->name('test');



Route::resource('brands', BrandController::class);


// or

    // Route::get('/create', [BrandController::class, 'create'])->name('brands.create');
    // Route::get('/index', [BrandController::class, 'index'])->name('brands.index');
    // Route::post('/store', [BrandController::class, 'store'])->name('brands.store');
    // Route::get('/{id}/edit', [BrandController::class, 'edit'])->name('brands.edit');
    // Route::put('/{id}', [BrandController::class, 'update'])->name('brands.update');
    // Route::delete('/{id}', [BrandController::class, 'destroy'])->name('brands.destroy');
