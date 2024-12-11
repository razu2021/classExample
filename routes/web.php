<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// our controller start here ---------------------
use App\Http\Controllers\exampleController;



Route::get('/',[exampleController::class,'myindex']);

Route::get('product',[exampleController::class,'myproduct']);







// Route::get('normal-page',function(){
//     return "this is normal page";
// });


// index page 
// Route::get('index',function(){
//     return view('index');
// });

// about  paage 
// Route::get('about/about-our-organization',function(){
//     return view('about_page');
// });

// data paass with route 
// Route::get('contact/{name}',function($name){
//     return view('contact',['myname'=>$name]);
// });


// route redirect   user lending here or there 
// Route::redirect('service','about/about-our-organization');




// route for nested view 
// Route::get('page-about',function(){
//     return view('pages.about');
// });
// Route::get('page-service',function(){
//     return view('pages.service');
// });
// Route::get('page-contact',function(){
//     return view('pages.contact');
// });



// route 






// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
