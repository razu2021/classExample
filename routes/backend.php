<?php
use Illuminate\Support\Facades\Route;
//================== my custom controller user start here 
use App\Http\Controllers\backend\banner\bannerController;



Route::middleware('auth')->prefix('banner')->name('banner.')->group(function(){
    Route::get('/all', [bannerController::class,'index'])->name('index');
    Route::get('/add', [bannerController::class,'add'])->name('add');
    Route::get('/view', [bannerController::class,'view'])->name('view');
    Route::get('/edit', [bannerController::class,'edit'])->name('edit');
    Route::post('/submit', [bannerController::class,'submit'])->name('submit');
});



