<?php

namespace App\Http\Controllers\StudentMain;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LeaderboardController extends Controller
{
    public function leaderboard() {
        return view('student-main.menu-page.leaderboard');
    }
}
