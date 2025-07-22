<?php

namespace App\Http\Controllers\StudentMain;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BookmarkController extends Controller
{
    public function Bookmark() {
        return view('student-main.menu-page.Bookmark');
    }
}
