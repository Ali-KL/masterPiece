<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Panacea</title>
    <!-- custom-theme -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords"
        content="Medicate Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- //custom-theme -->
    <script type="text/javascript" src="{{ asset('mainTemplate/js/jquery-1.11.1.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('mainTemplate/js/bootstrap.js') }}"></script>
    <!-- stylesheet -->
    <link href="{{ asset('mainTemplate/css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ asset('mainTemplate/css/easy-responsive-tabs.css') }}" rel='stylesheet' type='text/css' />
    <link href="{{ asset('mainTemplate/css/style.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ asset('mainTemplate/css/gallery.css') }}" rel="stylesheet" type="text/css" media="all" />
    <!-- gallery css -->
    <!-- //stylesheet -->
    <!-- online fonts -->
    <link href="//fonts.googleapis.com/css?family=Titillium+Web:200,200i,300,300i,400,400i,600,600i,700,700i,900"
        rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
    <!-- //online fonts -->
    <!-- font-awesome-icons -->
    <link href="{{ asset('mainTemplate/css/font-awesome.css') }}" type="text/css" rel="stylesheet">
    <!-- //font-awesome-icons -->
    <script src="{{ asset('mainTemplate/js/modernizr.custom.js') }}"></script>
    <script type="text/javascript" src="{{ asset('mainTemplate/js/modernizr.custom.79639.js') }}"></script>
    <link rel="stylesheet" type="text/css" href="mainTemplate/css/custom.css" />
    <!-- for smooth scrolling -->
    <script type="text/javascript" src="{{ asset('mainTemplate/js/move-top.js') }}"></script>
    <script type="text/javascript" src="{{ asset('mainTemplate/js/easing.js') }}"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event) {
                event.preventDefault();
                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 1000);
            });
        });
    </script>
    <!-- //for smooth scrolling -->
    <link rel="stylesheet" href="{{ asset('mainTemplate/css/login&register.css') }}" type="text/css">
</head>

<body>
    <div class="agileits_main">
        <!-- header -->
        <div class="container">
            <div class="w3_agile_logo">
                <h1><a href="/"><i class="agileits-logo fa fa-plus" aria-hidden="true"></i>Panacea</a></h1>
            </div>
            <div class="agileits_w3layouts_nav">
                <div id="toggle_m_nav">
                    <div id="m_nav_menu" class="m_nav">
                        <div class="m_nav_ham w3_agileits_ham" id="m_ham_1"></div>
                        <div class="m_nav_ham" id="m_ham_2"></div>
                        <div class="m_nav_ham" id="m_ham_3"></div>
                    </div>
                </div>
                <div id="m_nav_container" class="m_nav wthree_bg">
                    <nav class="menu menu--sebastian">
                        <ul id="m_nav_list" class="m_nav menu__list">
                            <li class="m_nav_item menu__item menu__item--current" id="m_nav_item_1"> <a href="/"
                                    class="menu__link"><i class="menu-icon fa fa-home" aria-hidden="true"></i> Home </a>
                            </li>
                            <li class="m_nav_item menu__item" id="moble_nav_item_2"> <a href="/about"
                                    class="menu__link"><i class="menu-icon fa fa-info-circle"
                                        aria-hidden="true"></i>About Us </a> </li>
                            <li class="m_nav_item menu__item" id="moble_nav_item_3"> <a href="/services"
                                    class="menu__link"><i class="menu-icon fa fa-cog"
                                        aria-hidden="true"></i>Services</a> </li>

                            <li class="m_nav_item menu__item" id="moble_nav_item_5"> <a href="/lab"
                                    class="menu__link"><i class="menu-icon fa fa-file-image-o"
                                        aria-hidden="true"></i>lab</a> </li>
                            <li class="m_nav_item menu__item" id="moble_nav_item_6"> <a href="/contact"
                                    class="menu__link"><i class="menu-icon fa fa-map-marker" aria-hidden="true"></i>
                                    Contact </a> </li>


                            @guest
                                @if (Route::has('login'))
                                    <li class="m_nav_item menu__item" id="moble_nav_item_4"> <a href="/login"
                                            class="menu__link"><i class="menu-icon fa fa-users"
                                                aria-hidden="true"></i>Login</a>
                                    </li>
                                @endif
                                @if (Route::has('register'))
                                    <li class="m_nav_item menu__item" id="moble_nav_item_4"> <a href="/register"
                                            class="menu__link"><i class="menu-icon fa fa-users"
                                                aria-hidden="true"></i>Register</a>
                                    </li>
                                @endif
                            @else
                                <li class="m_nav_item menu__item" id="moble_nav_item_4">

                                    <a href="/profile" class="menu__link">
                                        <i class="menu-icon fa fa-users"
                                            aria-hidden="true"></i>{{ Auth::user()->firstName }}
                                    </a>
                                </li>


                                @if (Auth::user()->role !== 'patient')
                                    <li class="m_nav_item menu__item" id="moble_nav_item_4"> <a
                                            href="{{ route('dashboard') }}" class="menu__link"><i
                                                class="menu-icon fa fa-users" aria-hidden="true"></i>Dashboard</a>
                                    </li>
                                @endif

                                <li class="m_nav_item menu__item" id="moble_nav_item_4">
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                    Logout</a>
                                        @csrf
                                    </form>
                                </li>



                            @endguest
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!-- menu -->
        <script type="text/javascript" src="{{ asset('mainTemplate/js/main.js') }}"></script>
        <!-- //menu -->
        <!-- banner -->
        <div class="w3_banner">
            <div class="container">
                <div class="slider">
                    <div class="callbacks_container">
                        <ul class="rslides callbacks callbacks1" id="slider4">
                            <li>
                                <div class="banner_text_w3layouts">
                                    <h3>Nam tellus nec enim tempus</h3>
                                    <p>Nam tellus nec enim tempus</p>
                                </div>
                            </li>
                            <li>
                                <div class="banner_text_w3layouts">
                                    <h3>Tellus nec enim tempus Nam </h3>
                                    <p>Nam tellus nec enim tempus</p>
                                </div>
                            </li>
                            <li>
                                <div class="banner_text_w3layouts">
                                    <h3>Nam tellus nec enim tempus </h3>
                                    <p>Nam tellus nec enim tempus</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <script src="{{ asset('mainTemplate/js/responsiveslides.js') }}"></script>
                    <script>
                        // You can also use "$(window).load(function() {"
                        $(function() {
                            // Slideshow 4
                            $("#slider4").responsiveSlides({
                                auto: false,
                                pager: true,
                                nav: true,
                                speed: 750,
                                namespace: "callbacks",
                                before: function() {
                                    $('.events').append("<li>before event fired.</li>");
                                },
                                after: function() {
                                    $('.events').append("<li>after event fired.</li>");
                                }
                            });

                        });
                    </script>
                </div>
            </div>
        </div>
    </div>
    <!-- //banner -->

    <!-- Tooltip -->
    <div class="tooltip-content">
        <div class="modal fade features-modal" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-md">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"
                            aria-hidden="true">&times;</button>
                        <h4 class="modal-title text-center">Panacea</h4>
                    </div>
                    <div class="modal-body">
                        <img src="{{ asset('mainTemplate/images/1.jpg') }}" class="img-responsive" alt="image">
                        <p>Fusce et congue nibh, ut ullamcorper magna. Donec ac massa tincidunt, fringilla sapien vel,
                            tempus massa. Vestibulum felis leo, tincidunt sit amet tristique accumsan. In vitae dapibus
                            metus. Donec nec massa non nulla mattis aliquam egestas et mi.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- //Tooltip -->
