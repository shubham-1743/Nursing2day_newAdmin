<?php

namespace App\Http\Controllers\StudentMain;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudyVideoController extends Controller
{
    public function video() {
        return view('student-main.menu-page.video');
    }
}
