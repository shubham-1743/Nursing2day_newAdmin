<?php

namespace App\Http\Controllers\StudentMain;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CurrentAffairController extends Controller
{
    public function CurrentAffair() {
        return view('student-main.menu-page.CurrentAffair');
    }
}
