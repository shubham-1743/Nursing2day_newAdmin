<?php

namespace App\Http\Controllers\StudentMain;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ExamController extends Controller
{
    public function exam() {
        return view('student-main.menu-page.exam.exam');
    }


    public function exam_start() {
        return view('student-main.menu-page.exam.exam_start');
    }

    public function startEx() {
        return view('student-main.menu-page.exam.startExam');
    }
}
