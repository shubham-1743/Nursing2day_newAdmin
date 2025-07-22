<?php

namespace App\Http\Controllers\StudentMain;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ResultController extends Controller
{
    public function Result() {
        return view('student-main.menu-page.result.Result');
    }

    public function View()
    {
        return view('student-main.menu-page.result.view');
    }
    
}
