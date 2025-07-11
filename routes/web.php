<?php


use App\Http\Controllers\AdminMain\CouresController;
use App\Http\Controllers\AdminMain\ExamController;
use App\Http\Controllers\AdminMain\Group;
use App\Http\Controllers\AdminMain\PackageController;
use App\Http\Controllers\AdminMain\PassageController;
use App\Http\Controllers\AdminMain\QuestionController;
use App\Http\Controllers\AdminMain\StudyMaterialsController;
use App\Http\Controllers\AdminMain\SubjectController;
use App\Http\Controllers\AdminMain\SubtopicController;
use App\Http\Controllers\AdminMain\TopicController;
use App\Http\Controllers\AdminMain\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

use App\Http\Controllers\W3crmAdminController;
use App\Http\Controllers\AdminMain\TransactionReport;
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

        Route::resource('transaction_reports', TransactionReport::class);

        // group controller//
        Route::resource('groups', Group::class);
        
        //courses controller//
        Route::resource('courses', CouresController::class);

        // users controller//
        Route::resource('users', UserController::class);

        // packages controller//
        Route::resource('packages', PackageController::class);

        // subject controller//
        Route::resource('subjects', SubjectController::class);

        //passage controller//
        Route::resource('passages', PassageController::class);

        //topic controller//
        Route::resource('topices', TopicController::class);

        // sub-topic controller//
        Route::resource('subtopices', SubtopicController::class);

        //question controller//
        Route::resource('questions', QuestionController::class);

        //exam controller//
        Route::resource('exams',ExamController::class);

        // studymaterials//
        Route::resource('studymaterials',StudyMaterialsController::class);
       



    
        
    });

    

    







  

   




    
   
    
   
    
   
    
    
    
    
    
    
   
    
    
    
    
    
    
   
    
    

    
});

require __DIR__.'/auth.php';
