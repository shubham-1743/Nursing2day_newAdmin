<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Nursing2Day</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    
    <!-- Font Awesome -->
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
@yield('styles')

<style>
    * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
    }

    body {
        font-family: Arial, sans-serif;
        background: #f5f5f5;
        padding-top: 120px; /* Prevent content from hiding behind fixed header */
    }

    /* Topbar Styles */
    .topbar {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        background: #024b86;
        color: white;
        padding: 5px 20px;
        font-size: 14px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-wrap: wrap;
        z-index: 9999;
    }

    .topbar i {
        margin-right: 5px;
    }

    .topbar a {
        color: white;
        margin-left: 10px;
        text-decoration: none;
        font-weight: 500;
    }

    .topbar .shop {
        color: white;
        font-size: 16px;
        position: relative;
    }

    .topbar .cart-count {
        background: #aaa;
        color: #fff;
        font-size: 13px;
        border-radius: 50%;
        padding: 2px 6px;
        position: absolute;
        top: -8px;
        right: -10px;
    }

    /* Header Styles */
    .header {
        position: fixed;
        top: 38px; /* Height of topbar */
        left: 0;
        width: 100%;
        background: white;
        padding: 10px 20px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        border-bottom: 1px solid #ddd;
        z-index: 9998;
    }

    .header img {
        height: 40px;
    }

    /* Navigation */
    ul.menu {
        list-style: none;
        display: flex;
        gap: 15px;
        margin: 0;
        padding: 0;
        align-items: center;
    }

    ul.menu li {
        position: relative;
    }

    ul.menu li a {
        color: #024b86;
        text-decoration: none;
        font-weight: 500;
    }

    ul.menu li ul.submenu {
        display: none;
        position: absolute;
        top: 100%;
        left: 0;
        background: white;
        border: 1px solid #ccc;
        padding: 10px;
        z-index: 1000;
    }

    ul.menu li:hover ul.submenu {
        display: block;
    }

    ul.submenu li {
        padding: 5px 0;
    }

    /* Form Container */
    .container {
        width: 100%;
        max-width: 500px;
        margin: 40px auto;
        background: white;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        border-radius: 8px;
        overflow: hidden;
    }

    .tab {
        display: flex;
    }

    .tab button {
        flex: 1;
        padding: 15px;
        border: none;
        cursor: pointer;
        font-size: 16px;
        font-weight: bold;
        background: #0099ff;
        color: white;
    }

    .tab button.active {
        background: #024b86;
    }

    .tabcontent {
        display: none;
        padding: 20px;
    }

    input, textarea {
        width: 100%;
        padding: 10px;
        margin: 10px 0;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    input[type="file"] {
        padding: 5px;
    }

    button.submit-btn {
        width: 100%;
        padding: 12px;
        background-color: #0066cc;
        color: white;
        border: none;
        border-radius: 4px;
        font-size: 16px;
        cursor: pointer;
    }

    button.submit-btn:hover {
        background-color: #004a99;
    }

    a {
        color: #0066cc;
        text-decoration: none;
        font-size: 14px;
    }

    a:hover {
        text-decoration: underline;
    }

    @media (max-width: 600px) {
        .nav {
            flex-direction: column;
            gap: 10px;
        }
    }
</style>

</head>

<body>
    <!-- Top Bar -->
    <div class="topbar">
        <div>
            <i class="fa fa-phone"></i> 9529488883 &nbsp;
            <i class="fa fa-envelope"></i> info@nursing2day.com &nbsp;
            <i class="fa fa-facebook"></i> <a href="#">Follow on Facebook</a>
        </div>
        <div>
            <a class="shop">
                <i class="fa fa-shopping-bag"></i>
                <span class="cart-count">0</span>
            </a>
        </div>
    </div>

    <!-- Header with Logo and Navigation -->
    <div class="header">
        <img src="{{ asset('images/logo/98e5acbba985d1fa655d2f0d0910d3ff.png') }}" alt="Nursing2Day Logo" />
        <nav>
            <ul id="frontMenu" class="menu">
                <li><a href=""><i class="fa fa-home"></i> Home</a></li>
                <li><a href=""><i class="fa fa-globe"></i> About</a></li>
                <li>
                    <a href="#"><i class="fa fa-shopping-cart"></i> Packages <span class="caret"></span></a>
                    <ul class="submenu">
                        <li><a href=""> Videos</a></li>
                        <li><a href=""> Study Material</a></li>
                        <li><a href=""> Exams</a></li>
                        <li><a href=""> Membership</a></li>
                        <li><a href=""> Books</a></li>
                    </ul>
                </li>
                <li class="active"><a href="{{route('student.login')}}"><i class="fa fa-user"></i> Register/Login</a></li>
                <li><a href=""><i class="fa fa-globe"></i> Delete account request</a></li>
            </ul>
        </nav>
    </div>

    <!-- Main Content Area -->
    @yield('content')

    <!-- Footer Include -->
    @include('student-main.layouts.footer')
    @yield('scripts')
</body>
</html>
