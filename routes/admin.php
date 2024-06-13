<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;

/*Route::get('/admin', function(){
    
    return 'hello Admin';
}
)
*/
Route::view('/admin/register','back.pages.admin.auth.register'); 

Route::post('/admin/register',[AdminController::class,'admRegister'])->name('admRegister');

Route::prefix('admin')->name('admin.')->group(function(){

    //the route group has guest middleware whose routes will be accessible only when admin not authenticated
    Route::middleware(['guest:admin','preventBackHistory'])->group(function(){
        
        Route::view('/login','back.pages.admin.auth.login')->name('login');
        Route::post('/login_Handler',[AdminController::class,'loginHandler'])->name('login_handler');
        Route::view('/forgot-password','back.pages.admin.auth.forgot-password')->name('forgot-password');
        Route::post('/send-password-reset-link',[AdminController::class,'sendPasswordResetLink'])->name
        ('send-password-reset-link');
        Route::get('/password/reset/{token}',[AdminController::class,'resetPassword'])->name('reset-password');
    });

     //the route group has guest middleware whose routes will be accessible only when admin authenticated
   
    Route::middleware(['auth:admin','preventBackHistory'])->group(function(){

        Route::view('/home','back.pages.admin.home')->name('home');
        

        // admin log out route
        Route::post('logout_handler',[AdminController::class,'logoutHandler'])->name
        ('logout_handler');
    });
});
