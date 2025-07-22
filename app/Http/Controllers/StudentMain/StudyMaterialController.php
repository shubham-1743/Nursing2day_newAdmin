<?php

namespace App\Http\Controllers\StudentMain;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudyMaterialController extends Controller
{
    public function StudyMaterial() {
        return view('student-main.menu-page.StudyMaterial');
    }
}
