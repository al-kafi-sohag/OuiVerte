<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomePageController;

Route::get('/', [HomePageController::class, 'index'])->name('home');
Route::get('/the-future-is-fractional', [HomePageController::class, 'test1'])->name('test1');
Route::get('/the-european-sovereign-cloud-opportunity', [HomePageController::class, 'test2'])->name('test2');
Route::get('/future-proofing-the-european-grid', [HomePageController::class, 'test3'])->name('test3');
