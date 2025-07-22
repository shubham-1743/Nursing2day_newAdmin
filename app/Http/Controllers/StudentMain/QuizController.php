<?php

namespace App\Http\Controllers\StudentMain;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    public function Quiz() {
        return view('student-main.menu-page.quiz.Quiz');
    }

    public function quiz_start() {
        return view('student-main.menu-page.quiz.Quiz_start');
    }

    public function start() {
        return view('student-main.menu-page.quiz.startQuiz');
    }
}
