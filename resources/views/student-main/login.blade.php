@extends('student-main.layouts.header')

@section('content')

<div class="container">
    <div class="tab">
        <button class="tablinks active" onclick="openTab(event, 'Login')" id="defaultOpen">Login</button>
        <button class="tablinks" onclick="openTab(event, 'Register')">Register</button>
    </div>

    <div id="Login" class="tabcontent" style="display:block;">



        <form action="{{ route('student.login.submit') }}" method="post">
            @csrf

            <input type="email" name="email" class="form-control" placeholder="Email" value="{{ old('email') }}">
            @error('email')
            <small class="text-danger">{{ $message }}</small>
            @enderror

            <input type="password" name="password" class="form-control" placeholder="Password">
            @error('password')
            <small class="text-danger">{{ $message }}</small>
            @enderror

            <a href="#">Re-Send Email Verification</a><br>

            <button class="submit-btn">Log in</button><br><br>

            <a href="#">Forgot Password</a><br><br>

            <p>Don't have an account? <a href="#" onclick="openTab(event, 'Register')">Create Account</a></p>
        </form>
    </div>


    <div id="Register" class="tabcontent">
        <form>
            <input type="email" placeholder="Email" required>
            <textarea placeholder="B. Sc. Nursing 4th Year Students, MAD GURU'S, NURSING EXAM"></textarea>
            <input type="text" placeholder="Name" required>
            <input type="password" placeholder="Password" required>
            <input type="text" placeholder="Address" required>
            <input type="text" placeholder="Mobile Number" required>
            <input type="text" placeholder="Alternate Number">
            <input type="file">
            <input type="text" placeholder="Answer simple math: 11 + 19 = ?" required>
            <input type="text" placeholder="Enter security code shown above" required>
            <button class="submit-btn">Submit</button>
        </form>
    </div>
</div>
@endsection
