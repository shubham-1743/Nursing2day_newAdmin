<?php

namespace App\Http\Controllers\StudentMain;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GroupperformanceController extends Controller
{
    public function Groupperformance() {
        return view('student-main.menu-page.Groupperformance');
    }
}
