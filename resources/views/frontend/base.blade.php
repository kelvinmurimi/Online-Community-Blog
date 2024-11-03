<!DOCTYPE html>
<html lang="en">

<head>
    <title> {{ config('app.name', 'Laravel') }}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{-- <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300, 400,700|Inconsolata:400,700" rel="stylesheet"> --}}


    @stack('scripts')

    <link rel="stylesheet" href="{{ asset('wordify/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('wordify/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('wordify/css/owl.carousel.min.css') }}">

    <link rel="stylesheet" href="{{ asset('wordify/fonts/ionicons/css/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('wordify/fonts/fontawesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('wordify/fonts/flaticon/font/flaticon.css') }}">

    <!-- Theme Style -->
    <link rel="stylesheet" href="{{ asset('wordify/css/style.css') }}">
    <style>
        h5 {
            color: #fff !important;
        }

        .text-white {
            color: #fff !important;
        }


        h1 {
            color: rgb(87, 83, 83);
            font-size: 15px;
            font-weight: bold;
        }

        .article-link {
            color: rgb(61, 56, 56);
        }

        .main {
            color: #6610f2 !important;
            font-weight: 900;
        }

        .active {
            color: green !important;
            font-weight: 900;
        }
    </style>
</head>

<body>


    <div class="wrap">

        <header role="banner">
            <div class="top-bar" style="background-color: blue !important;">
                <div class="container">
                    <div class="row">
                        <div class="col-9 social">
                            <a href="#"><span class="fa fa-twitter"></span></a>
                            <a href="#"><span class="fa fa-facebook"></span></a>
                            <a href="#"><span class="fa fa-instagram"></span></a>
                            <a href="#"><span class="fa fa-youtube-play"></span></a>
                        </div>
                        <div class="col-3 search-top">
                            <!-- <a href="#"><span class="fa fa-search"></span></a> -->
                            <form action="#" class="search-top-form">
                                <span class="icon fa fa-search"></span>
                                <input type="text" id="s" placeholder="Type keyword to search...">
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container logo-wrap">
                <div class="row pt-5">
                    <div class="col-12 text-center">
                        <a class="absolute-toggle d-block d-md-none" data-toggle="collapse" href="#navbarMenu"
                            role="button" aria-expanded="false" aria-controls="navbarMenu"><span
                                class="burger-lines"></span></a>
                        <h5 class="site-logo"><a
                                href="{{ route('pages.home') }}">{{ config('app.name', 'Laravel') }}</a></h5>
                        <livewire:articlecounter />
                    </div>
                </div>
            </div>

            <nav class="navbar navbar-expand-md  navbar-light bg-light">
                <div class="container">


                    <div class="collapse navbar-collapse" id="navbarMenu">
                        <ul class="navbar-nav mx-auto">
                            <li class="nav-item">
                                <a class="nav-link  @if (Route::currentRouteName() == 'pages.home') active @endif "
                                    href="{{ route('pages.home') }}">Home</a>
                            </li>

                            <!---- <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="category.html" id="dropdown04"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Travel</a>
                                <div class="dropdown-menu" aria-labelledby="dropdown04">
                                    <a class="dropdown-item" href="category.html">Asia</a>
                                    <a class="dropdown-item" href="category.html">Europe</a>
                                    <a class="dropdown-item" href="category.html">Dubai</a>
                                    <a class="dropdown-item" href="category.html">Africa</a>
                                    <a class="dropdown-item" href="category.html">South America</a>
                                </div>

                            </li> --->


                            <li class="nav-item">
                                <a class="nav-link @if (Route::currentRouteName() == 'articles.index') active @endif"
                                    href="{{ route('articles.index') }}">Articles</a>
                            </li>
                            @auth
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('dashboard') }}">Dashboard</a>
                                </li>
                            @endauth
                            @guest
                                <li class="nav-item">
                                    <a class="nav-link main " href="{{ route('login') }}">Login</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">Register</a>
                                </li>
                            @endguest

                            <li class="nav-item">
                                <a class="nav-link @if (Route::currentRouteName() == 'pages.contact') active @endif"
                                    href="{{ route('pages.contact') }}">Contact</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="dropdown05"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Categories</a>
                                <div class="dropdown-menu" aria-labelledby="dropdown05">
                                    @php
                                        $navcategories = App\Models\Category::latest()->get();
                                    @endphp
                                    @foreach ($navcategories as $navcategory)
                                        <a class="dropdown-item"
                                            href="{{ route('categories.articles', $navcategory->id) }}">{{ $navcategory->name }}</a>
                                    @endforeach


                                </div>

                            </li>
                        </ul>

                    </div>
                </div>
            </nav>
        </header>
        <!-- END header -->

        @yield('content')

        <footer class="site-footer" style="background-color: blue !important; color:#fff !important;">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-md-4">
                        <h3>Qoute Of The Day.</h3>
                        <p class="mb-4">
                            <img src="{{ asset('wordify/images/img_1.jpg') }}" alt="Image placeholder"
                                class="img-fluid">
                        </p>

                        <p>Lorem ipsum dolor sit amet sa ksal sk sa, consectetur adipisicing elit. Ipsa harum inventore
                            reiciendis. <a href="#">Read More</a></p>
                    </div>
                    <div class="col-md-6 ml-auto">
                        <div class="row">
                            <div class="col-md-7">
                                <h3>We Are Social</h3>
                                <div class="post-entry-sidebar">
                                    <ul>

                                        <li><a href="#"><span class="fa fa-twitter"></span> Twitter</a></li>
                                        <li><a href="#"><span class="fa fa-facebook"></span> Facebook</a></li>
                                        <li><a href="#"><span class="fa fa-instagram"></span> Instagram</a></li>
                                        <li><a href="#"><span class="fa fa-vimeo"></span> Vimeo</a></li>
                                        <li><a href="#"><span class="fa fa-youtube-play"></span> Youtube</a></li>
                                        <li><a href="#"><span class="fa fa-snapchat"></span> Snapshot</a></li>

                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-1"></div>

                            <div class="col-md-4">

                                <div class="mb-5">
                                    <h3>Quick Links</h3>
                                    <ul class="list-unstyled">
                                        <li><a href="{{ route('register') }}">Join Us</a></li>
                                        <li><a href="{{ route('login') }}">Login</a></li>
                                        <li><a href="{{ route('pages.contact') }}">Contat Us</a></li>
                                        <li><a href="#">Tags</a></li>
                                        <li><a href="#">Categories</a></li>
                                    </ul>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 text-center">
                        <p class="small">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0.
                            Copyright &copy;
                            <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>-->
                            {{ config('app.name', 'Laravel') }}
                            <script>
                                document.write(new Date().getFullYear());
                            </script> All Rights Reserved | This template is made with <i
                                class="fa fa-heart text-danger" aria-hidden="true"></i> by <a href=""
                                target="_blank">Colorlib </a>
                            <span class="text-white">powered by Murimicodes</span>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- END footer -->

    </div>

    <!-- loader -->
    <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4"
                stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4"
                stroke-miterlimit="10" stroke="#f4b214" />
        </svg></div>

    <script src="{{ asset('wordify/js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('wordify/js/jquery-migrate-3.0.0.js') }}"></script>
    <script src="{{ asset('wordify/js/popper.min.js') }}"></script>
    <script src="{{ asset('wordify/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('wordify/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('wordify/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('wordify/js/jquery.stellar.min.js') }}"></script>

    {{-- -add like without Page reload
<script>
    $(document).ready(function() {
        $('#articlelikes').on('submit', function(event) {
            //alert('liked');
             event.preventDefault();
             jQuery.ajax({
               // url:"{{ route('article.likes',$article->slug) }}"
                data:jQuery('#articlelikes').serialize(),
                method:'post',
                success:function(result){
                 jQuery('articlelikes')[0].reset();
                }

             });

        });



    });
</script> --}}

    <script src="{{ asset('wordify/js/main.js') }}"></script>
    <livewire:scripts />
</body>

</html>
