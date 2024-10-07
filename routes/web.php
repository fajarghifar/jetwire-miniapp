<?php

use App\Http\Controllers\ListingController;
use App\Http\Controllers\RegisterStepTwoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::group(['middleware' => ['auth', 'verified']], function () {
    Route::group(['middleware' => ['registration_completed']], function () {
        Route::get('/dashboard', function () {
            return view('dashboard');
        })->name('dashboard');

        Route::get('listings/{listingId}/photos/{photoId}/delete', [ListingController::class, 'deletePhoto'])->name('listings.deletePhoto');
        Route::resource('listings', ListingController::class);
    });

    Route::get('register-step2', [RegisterStepTwoController::class, 'create'])->name('register-step2.create');
    Route::post('register-step2', [RegisterStepTwoController::class, 'store'])->name('register-step2.post');
});
