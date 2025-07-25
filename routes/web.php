<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomePageController;

Route::get('/', [HomePageController::class, 'index'])->name('home');
Route::get('/infographics/the-future-is-fractional', [HomePageController::class, 'info1'])->name('infographics.1');
Route::get('/infographics/the-european-sovereign-cloud-opportunity', [HomePageController::class, 'info2'])->name('infographics.2');
Route::get('/infographics/future-proofing-the-european-grid', [HomePageController::class, 'info3'])->name('infographics.3');
Route::get('/infographics/germany-grid-infographic', [HomePageController::class, 'info4'])->name('infographics.4');
