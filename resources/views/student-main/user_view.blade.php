@extends('student-main.layouts.master')

@section('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.7.2/flexslider.min.css" />
<style>
    .flexslider {
        margin: 0 auto;
        max-width: 100%;
        border-radius: 0;
        box-shadow: none;
        background: transparent;
    }

    .flexslider .slides img {
        width: 100%;
        height: auto;
        display: block;
        border-radius: 0;
    }

    .flex-control-nav {
        text-align: center;
        margin-top: 10px;
    }

    .flex-control-nav li {
        display: inline-block;
        margin: 0 6px;
    }

    .flex-control-nav li a {
        width: 12px;
        height: 12px;
        display: block;
        background: #ccc;
        border-radius: 50%;
        cursor: pointer;
        text-indent: -9999px;
    }

    .flex-control-nav li a.flex-active {
        background: #024b86;
    }
</style>
@endsection

@section('content')
<section class="w-100 py-3" style="background-color: #f6f8fa;">
    <div class="flexslider">
        <ul class="slides">
            <li>
                <img src="{{ asset('images/logo/f8867082398b4908337dd5ac10f4dcf7.png') }}" alt="Selection">
            </li>
            <li>
                <img src="images/logo/06666a1d788eb07909781a4112f048ea.png" alt="NORCET 2023">
            </li>
            <li>
                <img src="images/logo/ff66a07d74aee4b76ae18e7a656d9994.png" alt="NORCET 2023">
            </li>
        </ul>
    </div>
</section>




@endsection

@section('scripts')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.7.2/jquery.flexslider-min.js"></script>
<script>
    $(window).on('load', function () {
        $('.flexslider').flexslider({
            animation: "slide",
            controlNav: true,
            directionNav: false,
            slideshow: true,
            slideshowSpeed: 4000,
            animationSpeed: 700,
            pauseOnHover: true
        });
    });
</script>
@endsection
