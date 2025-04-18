<?php
use App\Http\Controllers\backend\home\banner\BannerController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\DashboardController;

Route::get('admin/dashboard',[DashboardController::class,'index'])->middleware(['auth', 'verified'])->name('dashboard');



/**-------  home banner route start here ---- */








Route::get('home-banner/all',[BannerController::class ,'index'])->name('home.all');
Route::get('home-banner/add',[BannerController::class ,'add'])->name('home.add');
Route::get('home-banner/view',[BannerController::class ,'view'])->name('home.view');
Route::get('home-banner/edit',[BannerController::class ,'edit'])->name('home.edit');