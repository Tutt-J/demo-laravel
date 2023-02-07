<?php

use App\Http\Controllers\DomainsController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->middleware(['auth', 'verified'])->name('admin.dashboard');

    Route::get('/domains', [DomainsController::class, 'list'])->name('domains.list')->middleware(['auth', 'verified']);

    Route::get('/domains/create', [DomainsController::class, 'create'])->name('domains.create')->middleware(['auth', 'verified']);

    Route::post('/domains/store', [DomainsController::class, 'store'])->name('domains.store')->middleware(['auth', 'verified']);

    Route::delete('/domains/destroy/{id}', [DomainsController::class, 'destroy'])->name('domains.destroy')->middleware(['auth', 'verified']);

    
    Route::middleware('auth')->group(function () {
        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    });
});


require __DIR__.'/auth.php';
