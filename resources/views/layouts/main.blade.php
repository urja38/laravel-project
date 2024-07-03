<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> @yield('title')</title>
</head>
<body id="body-pd">
    <header class="header" id="header">
        <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
        <div class="header_img"> <img src="https://i.imgur.com/hczKIze.jpg" alt=""> </div>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
        <link rel="stylesheet" href="{{asset('assets/css/coustom.css')}}">
    </header>
@include('layouts.header')
<div class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div> <a href="{{url('sidebar')}}" class="nav_logo"> <i class='bx bx-layer nav_logo-icon'></i> <span class="nav_logo-name">Main content</span> </a>
                <div class="nav_list">
                     <a href="#" class="nav_link active"> 

                     <a href="{{url('index')}}" class="nav_link">
                  <i class='bx bx-home nav_icon'></i>
                  <span class="nav_name">Home</span>
        </a>

        <a href="{{url('emails')}}" class="nav_link">
        <i class=" bx bx-phone nav_icon"></i>

                  <span class="nav_name">email</span>
        </a>
    
        <a href="{{ route('about.index') }}" class="nav_link">
                  <i class='bx bx-user nav_icon'></i>
                  <span class="nav_name">About</span>
        </a>

        <a href="{{ route('addblog.index') }}" class="nav_link">
                  <i class='bx bx-book nav_icon'></i>
                 Blog
        </a>

        <a href="{{ route('contacts.index') }}" class="nav_link">
                  <i class='bx bx-phone nav_icon'></i>
                  <span class="nav_name">Contact</span>
        </a>

        <a href="{{ route('faq.index') }}" class="nav_link">
                  <i class='bx bx-question-mark nav_icon'></i>
                  <span class="nav_name">FAQ</span>
        </a>

        <a href="{{ route('slides.index') }}" class="nav_link">
                  <i class='bx bx-question-mark nav_icon'></i>
                  <span class="nav_name">Slider</span>
        </a>
</div>
</nav>
</div>
    </div>
    <br><br>
    @yield('content')
@include('layouts.footer')
</body>
</html>