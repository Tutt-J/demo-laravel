<?php

use App\Http\Controllers\DomainsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServicesController;
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
    Route::get(
        '/dashboard',
        function () {
            return view('admin.dashboard');
        }
    )->middleware(['auth', 'verified'])->name('admin.dashboard');
    
    Route::middleware('auth')->group(
        function () {
            Route::get('/domains', [DomainsController::class, 'list'])->name('domains.list');
            Route::get('/domains/create', [DomainsController::class, 'create'])->name('domains.create');
            Route::post('/domains/store', [DomainsController::class, 'store'])->name('domains.store');
            Route::delete('/domains/destroy', [DomainsController::class, 'destroy'])->name('domains.destroy');
            Route::get('/domains/update/{id}', [DomainsController::class, 'edit'])->name('domains.update.edit');
            Route::patch('/domains/store-update/{id}', [DomainsController::class, 'update'])->name('domains.update.store');
        }
    );

    Route::middleware('auth')->group(
        function () {
            Route::get('/services', [ServicesController::class, 'list'])->name('services.list');
            Route::get('/services/create', [ServicesController::class, 'create'])->name('services.create');
            Route::post('/services/store', [ServicesController::class, 'store'])->name('services.store');
            Route::delete('/services/destroy', [ServicesController::class, 'destroy'])->name('services.destroy');
            Route::get('/services/update/{id}', [ServicesController::class, 'edit'])->name('services.update.edit');
            Route::patch('/services/store-update/{id}', [ServicesController::class, 'update'])->name('services.update.store');
        }
    );

    Route::middleware('auth')->group(
        function () {
            Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
            Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
            Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
        }
    );
});


require __DIR__ . '/auth.php';