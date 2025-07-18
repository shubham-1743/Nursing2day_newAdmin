<?php


use App\Http\Controllers\AdminMain\CouponController;
use App\Http\Controllers\AdminMain\CouresController;
use App\Http\Controllers\AdminMain\Current_affair;
use App\Http\Controllers\AdminMain\CustomNotificationController;
use App\Http\Controllers\AdminMain\ExamController;
use App\Http\Controllers\AdminMain\Group;
use App\Http\Controllers\AdminMain\LiveUrlController;
use App\Http\Controllers\AdminMain\MailController;
use App\Http\Controllers\AdminMain\PackageController;
use App\Http\Controllers\AdminMain\PassageController;
use App\Http\Controllers\AdminMain\QuestionController;
use App\Http\Controllers\AdminMain\ResultController;
use App\Http\Controllers\AdminMain\SalereportController;
use App\Http\Controllers\AdminMain\StudentController;
use App\Http\Controllers\AdminMain\StudyMaterialsController;
use App\Http\Controllers\AdminMain\SubjectController;
use App\Http\Controllers\AdminMain\SubtopicController;
use App\Http\Controllers\AdminMain\TopicController;
use App\Http\Controllers\AdminMain\UserController;
use App\Http\Controllers\AdminMain\VideoController;
use App\Http\Controllers\Configuration\Certificate_signature;
use App\Http\Controllers\Configuration\CurrencyController;
use App\Http\Controllers\Configuration\Diffculty_level;
use App\Http\Controllers\Configuration\GeneralController;
use App\Http\Controllers\Configuration\LanguagesController;
use App\Http\Controllers\Configuration\MenuName;
use App\Http\Controllers\Configuration\Organisation_logo;
use App\Http\Controllers\Configuration\PaymentSettingController;
use App\Http\Controllers\Configuration\Question_type;
use App\Http\Controllers\Content\AdvertisementController;
use App\Http\Controllers\Content\HelpcontentController;
use App\Http\Controllers\Content\HomecontentController;
use App\Http\Controllers\Content\HomesliderController;
use App\Http\Controllers\Content\NewsController;
use App\Http\Controllers\Content\PageController;
use App\Http\Controllers\Content\SeoController;
use App\Http\Controllers\Content\TestimonialController;
use App\Http\Controllers\EmailSetting\EmailsettingController;
use App\Http\Controllers\EmailSetting\EmailtemplateController;
use App\Http\Controllers\EmailSetting\SendemailController;
use App\Http\Controllers\EmailSetting\SendsmController;
use App\Http\Controllers\EmailSetting\SmssettingController;
use App\Http\Controllers\EmailSetting\SmstemplateController;
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
    
   
    
    Route::get('/users/assign-rights', [UserController::class, 'assignrights'])->name('users.assignrights');
    Route::get('/users/assign-create',[UserController::class,'assign_create']);
    Route::get('/users/assign-premission',[UserController::class,'assign_premission'])->name('users.assign_premission');
    Route::get('/users/assign_edit/{id}', [UserController::class, 'assign_edit'])->name('users.assign_edit');

    // Admin Route
    Route::group(['prefix' => 'admin'], function () {

         // users controller//
         Route::resource('users', UserController::class);
 

        Route::resource('transaction_reports', TransactionReport::class);

        // group controller//
        Route::resource('groups', Group::class);
        
        //courses controller//
        Route::resource('courses', CouresController::class);

       

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

        //current_affair//
       Route::resource('current_affairs', Current_affair::class);

       //CustomNotifications//
       Route::resource('CustomNotifications', CustomNotificationController::class);

       //Results//
       Route::resource('results', ResultController::class);

       //liveurl//
       Route::resource('lives', LiveUrlController::class);

       //student//
       Route::resource('students', StudentController::class);

       //Coupons//
       Route::resource('Coupons',CouponController::class);

       //video//
       Route::resource('videos', VideoController::class);

       //salereport//
       Route::resource('sale_reports', SalereportController::class);

       // mails//
       Route::resource('mails',MailController::class);

       // configuration menus//
       //General//
       Route::resource('general', GeneralController::class);

       //paymentsettings
       Route::resource('paymentsettings', PaymentSettingController::class);

       //Languages//
       Route::resource('Languages', LanguagesController::class);

       //currency//
       Route::resource('currency', CurrencyController::class);

       //organisation_logo//
       Route::resource('Weblogos', Organisation_logo::class);

       //certificate_signature//
       Route::resource('Signatures', Certificate_signature::class);

       //diffculty_leval//
       Route::resource('diffcultys', Diffculty_level::class);

       //question type//
       Route::resource('qtypes', Question_type::class);

       //menuname//
       Route::resource('Menunames', MenuName::class);

       // content//
       //news//
       Route::resource('news', NewsController::class);

       //page//
       Route::resource('pages', PageController::class);

       //home slider//
       Route::resource('Slides',HomesliderController::class);

       //home content//
       Route::resource('Homesections', HomecontentController::class);

       //help content//
       Route::resource('Helpcontents',HelpcontentController::class);

       //Testimonials//
       Route::resource('Testimonials',TestimonialController::class);

       //Advertisements//
       Route::resource('Advertisements',AdvertisementController::class);

       //seo//
       Route::resource('seos', SeoController::class);

       //EmailSetting//
       Route::resource('Emailsettings', EmailsettingController::class);

       //Emailtemplate//
       Route::resource('Emailtemplates', EmailtemplateController::class);

       //Sendemails//
       Route::resource('Sendemails',SendemailController::class);

       //Smssettings//
       Route::resource('Smssettings',SmssettingController::class);

       //Smstemplates//
       Route::resource('Smstemplates',SmstemplateController::class);

       //Sendsms//
       Route::resource('Sendsms',SendsmController::class);



       



    
        
    });

    

    







  

   




    
   
    
   
    
   
    
    
    
    
    
    
   
    
    
    
    
    
    
   
    
    

    
});

require __DIR__.'/auth.php';
require __DIR__.'/student.php';