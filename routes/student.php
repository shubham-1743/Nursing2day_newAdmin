<?php

use App\Http\Controllers\StudentMain\ExamController;
use App\Http\Controllers\StudentMain\LeaderboardController;
use App\Http\Controllers\StudentMain\LoginController;
use Illuminate\Support\Facades\Route;

Route::prefix('student')->group(function () {
    Route::get('login', [LoginController::class, 'Student'])->name('student.login');
    Route::post('login', [LoginController::class, 'student_login'])->name('student.login.submit');

    Route::middleware('auth:student')->group(function () {
        Route::get('dashboard', [LoginController::class, 'dashboard'])->name('student.dashboard');
        Route::post('logout', [LoginController::class, 'logout'])->name('student.logout');
        Route::get('leaderboard',[LeaderboardController::class,'leaderboard'])->name('student.leaderboard');
        Route::get('exam', [ExamController::class,'exam'])->name('student.exam');
    });
});



?>