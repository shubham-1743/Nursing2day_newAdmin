<?php

namespace App\Http\Controllers\StudentMain;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\studentM\Student;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function dashboard() {
        return view('student-main.dashboard');
    }

    public function Student() {
        return view('student-main.login');
    }

    public function student_login(Request $request) {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $student = Student::where('email', $request->email)->first();

        if (!$student) {
            return back()->withErrors(['email' => 'Email not found']);
        }
        // dd($student);
        // die();

        if (hash('sha256', $request->password) !== $student->password) {
            return back()->withErrors(['password' => 'Incorrect password']);
        }

        
        Auth::guard('student')->login($student);

        return redirect()->route('student.dashboard')->with('success', 'Login successful!');
    }

    public function logout(Request $request)
{
    Auth::guard('student')->logout();

    $request->session()->invalidate();
    $request->session()->regenerateToken();

    return redirect()->route('student.login')->with('success', 'Logged out successfully.');
}
}
