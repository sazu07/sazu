<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Shazahan') }}</title>
    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{ asset('contents/admin') }}/assets/css/app.min.css">
    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('contents/admin') }}/assets/css/style.css">
    <link rel="stylesheet" href="{{ asset('contents/admin') }}/assets/css/components.css">
    <link rel="stylesheet" href="{{ asset('contents/admin') }}/assets/bundles/jqvmap/dist/jqvmap.min.css">
    <!-- push css style CSS -->
     <link rel="stylesheet" href="{{ asset('contents/admin') }}/assets/bundles/bootstrap-social/bootstrap-social.css">
     <link rel="stylesheet" href="{{ asset('contents/admin') }}/assets/bundles/summernote/summernote-bs4.css">
    <!-- Custom style CSS -->
    <link rel="stylesheet" href="{{ asset('contents/admin') }}/assets/css/custom.css">
    <link rel='shortcut icon' type='image/x-icon' href="{{ asset('contents/admin') }}/assets/img/favicon.ico" />
</head>

<body>
    <div class="loader"></div>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            <div class="navbar-bg"></div>
            <nav class="navbar navbar-expand-lg main-navbar sticky">
                <div class="form-inline me-auto">
                    <ul class="navbar-nav mr-3">
                        <li><a href="#" data-bs-toggle="sidebar" class="nav-link nav-link-lg
                                    collapse-btn"> <i data-feaher="menu"></i></a></li>
                        <li>
                            <form class="form-inline me-auto">
                                <div class="search-element d-flex">
                                    <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                                    <button class="btn" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </div>
                            </form>
                        </li>
                    </ul>
                </div>

                <ul class="navbar-nav navbar-right">
                    <li><a href="#" class="nav-link nav-link-lg fullscreen-btn">
                            <i data-feather="maximize"></i>
                        </a></li>
                    <li class="dropdown dropdown-list-toggle"><a href="#" data-bs-toggle="dropdown" class="nav-link nav-link-lg message-toggle"><i data-feather="mail" class="mailAnim"></i>
                            <span class="badge headerBadge1">
                            </span> </a>
                        <div class="dropdown-menu dropdown-list dropdown-menu-right pullDown">
                            <div class="dropdown-header">
                                Messages
                                <div class="float-right">
                                    <a href="#">Mark All As Read</a>
                                </div>
                            </div>
                            <div class="dropdown-list-content dropdown-list-message">
                                <a href="#" class="dropdown-item"> <span class="dropdown-item-avatar
                                            text-white"> <img alt="image" src="{{ asset('contents/admin') }}/assets/img/users/user-1.png" class="rounded-circle">
                                    </span> <span class="dropdown-item-desc"> <span class="message-user">John
                                            Deo</span>
                                        <span class="time messege-text">Please check your mail !!</span>
                                        <span class="time">2 Min Ago</span>
                                    </span>
                                </a> <a href="#" class="dropdown-item"> <span class="dropdown-item-avatar text-white">
                                        <img alt="image" src="{{ asset('contents/admin') }}/assets/img/users/user-2.png" class="rounded-circle">
                                    </span> <span class="dropdown-item-desc"> <span class="message-user">Sarah
                                            Smith</span> <span class="time messege-text">Request for leave
                                            application</span>
                                        <span class="time">5 Min Ago</span>
                                    </span>
                                </a> <a href="#" class="dropdown-item"> <span class="dropdown-item-avatar text-white">
                                        <img alt="image" src="{{ asset('contents/admin') }}/assets/img/users/user-5.png" class="rounded-circle">
                                    </span> <span class="dropdown-item-desc"> <span class="message-user">Jacob
                                            Ryan</span> <span class="time messege-text">Your payment invoice is
                                            generated.</span> <span class="time">12 Min Ago</span>
                                    </span>
                                </a> <a href="#" class="dropdown-item"> <span class="dropdown-item-avatar text-white">
                                        <img alt="image" src="{{ asset('contents/admin') }}/assets/img/users/user-4.png" class="rounded-circle">
                                    </span> <span class="dropdown-item-desc"> <span class="message-user">Lina
                                            Smith</span> <span class="time messege-text">hii John, I have upload
                                            doc
                                            related to task.</span> <span class="time">30
                                            Min Ago</span>
                                    </span>
                                </a> <a href="#" class="dropdown-item"> <span class="dropdown-item-avatar text-white">
                                        <img alt="image" src="{{ asset('contents/admin') }}/assets/img/users/user-3.png" class="rounded-circle">
                                    </span> <span class="dropdown-item-desc"> <span class="message-user">Jalpa
                                            Joshi</span> <span class="time messege-text">Please do as specify.
                                            Let me
                                            know if you have any query.</span> <span class="time">1
                                            Days Ago</span>
                                    </span>
                                </a> <a href="#" class="dropdown-item"> <span class="dropdown-item-avatar text-white">
                                        <img alt="image" src="{{ asset('contents/admin') }}/assets/img/users/user-2.png" class="rounded-circle">
                                    </span> <span class="dropdown-item-desc"> <span class="message-user">Sarah
                                            Smith</span> <span class="time messege-text">Client Requirements</span>
                                        <span class="time">2 Days Ago</span>
                                    </span>
                                </a>
                            </div>
                            <div class="dropdown-footer text-center">
                                <a href="#">View All <i class="fas fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </li>
                    <li class="dropdown dropdown-list-toggle"><a href="#" data-bs-toggle="dropdown" class="nav-link notification-toggle nav-link-lg"><i data-feather="bell"></i>
                        </a>
                        <div class="dropdown-menu dropdown-list dropdown-menu-right pullDown">
                            <div class="dropdown-header">
                                Notifications
                                <div class="float-right">
                                    <a href="#">Mark All As Read</a>
                                </div>
                            </div>
                            <div class="dropdown-list-content dropdown-list-icons">
                                <a href="#" class="dropdown-item dropdown-item-unread"> <span class="dropdown-item-icon l-bg-orange text-white"> <i class="far fa-envelope"></i>
                                    </span> <span class="dropdown-item-desc"> You got new mail, please check. <span class="time">2 Min
                                            Ago</span>
                                    </span>
                                </a> <a href="#" class="dropdown-item"> <span class="dropdown-item-icon l-bg-purple text-white"> <i class="fas fa-bell"></i>
                                    </span> <span class="dropdown-item-desc"> Meeting with <b>John Deo</b> and <b>Sarah Smith </b> at
                                        10:30 am <span class="time">10 Hours
                                            Ago</span>
                                    </span>
                                </a> <a href="#" class="dropdown-item"> <span class="dropdown-item-icon l-bg-green text-white"> <i class="far fa-check-circle"></i>
                                    </span> <span class="dropdown-item-desc"> Sidebar Bug is fixed by Kevin <span class="time">12
                                            Hours
                                            Ago</span>
                                    </span>
                                </a> <a href="#" class="dropdown-item"> <span class="dropdown-item-icon bg-danger text-white"> <i class="fas fa-exclamation-triangle"></i>
                                    </span> <span class="dropdown-item-desc"> Low disk space error!!!. <span class="time">17 Hours
                                            Ago</span>
                                    </span>
                                </a> <a href="#" class="dropdown-item"> <span class="dropdown-item-icon bg-info text-white"> <i class="fas
                                                fa-bell"></i>
                                    </span> <span class="dropdown-item-desc"> Welcome to Gati
                                        template! <span class="time">Yesterday</span>
                                    </span>
                                </a>
                            </div>
                            <div class="dropdown-footer text-center">
                                <a href="#">View All <i class="fas fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </li>
                    <li class="dropdown"><a href="#" data-bs-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user"> <img alt="image" src="{{asset('uploads/users/'.Auth::user()->photo) }}" class="user-img-radious-style"> <span class="d-sm-none d-lg-inline-block"></span></a>
                        <div class="dropdown-menu dropdown-menu-right pullDown">
                            <div class="dropdown-title">Hello Sarah Smith</div>
                            <a href="{{url('profile')}}" class="dropdown-item has-icon"> <i class="far
                                        fa-user"></i> Profile
                            </a> <a href="timeline.html" class="dropdown-item has-icon"> <i class="fas fa-bolt"></i>
                                Activities
                            </a> <a href="#" class="dropdown-item has-icon"> <i class="fas fa-cog"></i>
                                Settings
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();" class="dropdown-item has-icon text-danger"> 
                                <i class="fas fa-sign-out-alt"></i>
                                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form> 
                                Logout
                            </a>
                        </div>
                    </li>
                </ul>
            </nav>

            <div class="main-sidebar sidebar-style-2">
                <aside id="sidebar-wrapper">
                    <div class="sidebar-brand">
                        <a href="index-2.html"> <img alt="image" src="{{asset('contents/admin')}}/assets/img/logo.png" class="header-logo" /> <span class="logo-name">Shazahan</span>
                        </a>
                    </div>
                    <div class="sidebar-user">
                        <div class="sidebar-user-picture">
                            <img alt="image" src="{{asset('uploads/users/'.Auth::user()->photo) }}">
                        </div>
                        <div class="sidebar-user-details">
                            <div class="user-name"> {{Auth::user()->name}} <div>
                            <div class="user-role">{{Auth::user()->role_id}}</div>
                            <div class="sidebar-userpic-btn">
                                <a href="{{url('profile')}}" data-bs-toggle="tooltip" title="Profile">
                                    <i data-feather="user"></i>
                                </a>
                                <a href="email-inbox.html" data-bs-toggle="tooltip" title="Mail">
                                    <i data-feather="mail"></i>
                                </a>
                                <a href="chat.html" data-bs-toggle="tooltip" title="Chat">
                                    <i data-feather="message-square"></i>
                                </a>
                               <a href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();" >
                                    <i data-feather="log-out"></i>
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>                           
                                 </div>
                        </div>
                    </div>


                     @include('layouts.parts.sidebar')

                </aside>
            </div>
           

               @yield('contents')


            <footer class="main-footer">
                <div class="footer-left">
                    Copyright &copy; 2020 <div class="bullet"></div> Design By <a href="#">Shazahan</a>
                </div>
                <div class="footer-right">
                </div>
            </footer>



        </div>
    </div>
    <!-- General JS Scripts -->
    <script data-cfasync="false" src="{{ asset('contents/admin') }}/../../../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="{{ asset('contents/admin') }}/assets/js/app.min.js"></script>
    <!-- JS Libraies -->
    <script src="{{ asset('contents/admin') }}/assets/bundles/apexcharts/apexcharts.min.js"></script>
    <script src="{{ asset('contents/admin') }}/assets/bundles/amcharts4/core.js"></script>
    <script src="{{ asset('contents/admin') }}/assets/bundles/amcharts4/charts.js"></script>
    <script src="{{ asset('contents/admin') }}/assets/bundles/amcharts4/animated.js"></script>
    <!-- Page Specific JS File -->
    <script src="{{ asset('contents/admin') }}/assets/js/page/index2.js"></script>
    <!-- Template JS File -->
    <script src="{{ asset('contents/admin') }}/assets/js/scripts.js"></script>
    <!-- Custom JS File -->
    <script src="{{ asset('contents/admin') }}/assets/js/custom.js"></script>
    <!-- puss JS File -->
    <script src="{{ asset('contents/admin') }}/assets/bundles/summernote/summernote-bs4.js"></script>
</body>
</html>