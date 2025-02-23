<?php
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
// our controller start here ---------------------
 use App\Http\Controllers\website\websiteController;



 /**====  website route strat here ======== */

 Route::get('/',[websiteController::class,'index'])->name('index');
 Route::get('/about',[websiteController::class,'about'])->name('about');




 /**====  website route end  here ======== */


















// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});




require __DIR__.'/auth.php';
// backend route file 
require __DIR__.'/backend.php';