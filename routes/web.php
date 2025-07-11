<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

use App\Http\Controllers\W3crmAdminController;
// Super Admin 






Route::controller(W3crmAdminController::class)->group(function () {

    Route::middleware(['auth'])->group(function() {
        
        Route::get('/admin/dashboard','dashboard_2')->name('dashboard');
        Route::get('/super-admin/dashboard', 'dashboard');
        
        Route::get('/page-error-400 ','page_error_400');
        Route::get('page-error-403 ','page_error_403');
        Route::get('page-error-404 ','page_error_404');
        Route::get('page-error-500 ','page_error_500');
        Route::get('page-error-503 ','page_error_503');
        
        Route::get('/logout', 'logout')->name('logout');
    });

    Route::get('page-forgot-password ','page_forgot_password');
    Route::get('/','page_login')->name('login');
    Route::get('register ','page_register');
    
    
});

Route::post('/admin/login', [W3crmAdminController::class, 'login'])->name('admin.login');

Route::get('/admin/dashboard',[W3crmAdminController::class, 'dashboard_2'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    
   
    
    
    // Admin Route
    Route::group(['prefix' => 'admin'], function () {
    
        
    });

    

    







  

   




    
   
    
   
    
   
    
    
    
    
    
    
   
    
    
    
    
    
    
   
    
    

    
});

require __DIR__.'/auth.php';
