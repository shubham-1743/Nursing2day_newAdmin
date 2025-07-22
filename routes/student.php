<?php

use App\Http\Controllers\StudentMain\BookmarkController;
use App\Http\Controllers\StudentMain\ChangePasswordController;
use App\Http\Controllers\StudentMain\CurrentAffairController;
use App\Http\Controllers\StudentMain\ExamController;
use App\Http\Controllers\StudentMain\GroupperformanceController;
use App\Http\Controllers\StudentMain\HelpController;
use App\Http\Controllers\StudentMain\LeaderboardController;
use App\Http\Controllers\StudentMain\LoginController;
use App\Http\Controllers\StudentMain\MailController;
use App\Http\Controllers\StudentMain\PackageController;
use App\Http\Controllers\StudentMain\PaymentController;
use App\Http\Controllers\StudentMain\ProfileController;
use App\Http\Controllers\StudentMain\QuizController;
use App\Http\Controllers\StudentMain\ResultController;
use App\Http\Controllers\StudentMain\StudyMaterialController;
use App\Http\Controllers\StudentMain\StudyVideoController;
use Illuminate\Support\Facades\Route;

Route::get('/', [LoginController::class, 'index']);

Route::prefix('student')->group(function () {
   
    Route::get('login', [LoginController::class, 'Student'])->name('student.login');
    Route::post('login', [LoginController::class, 'student_login'])->name('student.login.submit');

    Route::middleware('auth:student')->group(function () {
        Route::get('dashboard', [LoginController::class, 'dashboard'])->name('student.dashboard');
        Route::post('logout', [LoginController::class, 'logout'])->name('student.logout');
        Route::get('leaderboard',[LeaderboardController::class,'leaderboard'])->name('student.leaderboard');
        Route::get('exam', [ExamController::class,'exam'])->name('student.exam');
        Route::get('exam_start',[ExamController::class,'exam_start'])->name('student.exam_start');
        Route::get('startEx',[ExamController::class,'startEx'])->name('student.startEx');
        Route::get('Quiz',[QuizController::class, 'Quiz'])->name('student.Quiz');
        Route::get('quiz_start', [QuizController::class,'quiz_start'])->name('student.quiz_start');
        Route::get('start',[QuizController::class,'start'])->name('student.start_qu');
        Route::get('StudyMaterial',[StudyMaterialController::class, 'StudyMaterial'])->name('student.StudyMaterial');
        Route::get('video', [StudyVideoController::class,'video'])->name('student.video');
        Route::get('CurrentAffair',[CurrentAffairController::class,'CurrentAffair'])->name('student.CurrentAffair');
        Route::get('Result',[ResultController::class,'Result'])->name('student.Result');
        Route::get('View', [ResultController::class,'View'])->name('student.view');

        Route::get('Bookmark',[BookmarkController::class,'Bookmark'])->name('student.Bookmark');
        Route::get('Groupperformance',[GroupperformanceController::class,'Groupperformance'])->name('student.Groupperformance');
        Route::get('Payment',[PaymentController::class,'Payment'])->name('student.Payment');
        Route::get('mail',[MailController::class,'mail'])->name('student.mail');
        Route::get('compose',[MailController::class,'compose'])->name('student.compose');
        Route::get('Help',[HelpController::class,'Help'])->name('student.Help');
        Route::get('Package', [PackageController::class,'Package'])->name('student.Package');

        //profile//
        Route::get('profile', [ProfileController::class,'profile'])->name('student.profile');

        //changepassword//
        Route::get('changepass',[ChangePasswordController::class,'changepass'])->name('student.changepass');
    });
});



?>