@extends('welcome')

@section('content')
       <nav>
            <div class="navbar">
                <div class="logo">
                    <a href="/">
                        <img width="140px" src={{ url(asset('images/logo.svg')) }} alt="Company Logo">
                    </a>
                </div>
                    <div class="nav-links">
                        <li><a href="#">Book Appointment</a></li>
                        <li><a href="#">Make Withdrawal</a></li>
                        <li><a href="#">Get Statement</a></li>
                        <li><a class="started" href={{ route('profile', Auth::user())}}>{{ Auth::user()->username }}</a></li>
                    </div>
            </div>
        </nav>
        <div style="height: 4.5rem;">

        </div>
        <div class="landing">
            <p>test</p>
            @yield('business')
        </div>
@endsection