<?php

namespace App\Http\Controllers\StudentMain;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ChangePasswordController extends Controller
{
    public function changepass() {
        return view('student-main.changepass');
    }
}
