<?php

namespace App\Http\Controllers\StudentMain;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MailController extends Controller
{
    public function mail() {
        return view('student-main.menu-page.mails.index');
    }

    public function compose() {
        return view('student-main.menu-page.mails.compose');
    }
}
