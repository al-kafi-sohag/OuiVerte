<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomePageController;

Route::get('/', [HomePageController::class, 'index'])->name('home');
Route::get('/infographics/the-future-is-fractional', [HomePageController::class, 'test1'])->name('infographics.1');
Route::get('/infographics/the-european-sovereign-cloud-opportunity', [HomePageController::class, 'test2'])->name('infographics.2');
Route::get('/infographics/future-proofing-the-european-grid', [HomePageController::class, 'test3'])->name('infographics.3');
