@php
use Illuminate\Support\Facades\Auth;
@endphp

<!doctype html>
<html class="no-js" lang="en">
    <head>
        <title>Litho – The Multipurpose HTML5 Template</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="author" content="ThemeZaa">
        <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
        <meta name="description" content="Litho is a clean and modern design, BootStrap 5 responsive, business and portfolio multipurpose HTML5 template with 37+ ready homepage demos.">
        <!-- favicon icon -->
        <link rel="shortcut icon" href="../images/favicon.png">
        <link rel="apple-touch-icon" href="../images/apple-touch-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="72x72" href="../images/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="114x114" href="../images/apple-touch-icon-114x114.png">
        <!-- style sheets and font icons  -->
        <link rel="stylesheet" type="text/css" href="../css/font-icons.min.css">
        <link rel="stylesheet" type="text/css" href="../css/theme-vendors.min.css">
        <link rel="stylesheet" type="text/css" href="../css/style.css" />
        <link rel="stylesheet" type="text/css" href="../css/responsive.css" />
    </head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>    </head>

    <body data-mobile-nav-style="classic">
        <!-- start header -->
        <header>
            <!-- start navigation -->
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent header-light fixed-top header-reverse-scroll">
                <div class="container-lg nav-header-container">
                    <div class="col-auto col-sm-6 col-lg-2 me-auto ps-lg-0">
                        <a class="navbar-brand" href="index.html">
                            <img src="../images/logo-fast-blue-black.png" data-at2x="images/logo-fast-blue-black@2x.png" class="default-logo" alt="">
                            <img src="../images/logo-fast-blue-black.png" data-at2x="images/logo-fast-blue-black@2x.png" class="alt-logo" alt="">
                            <img src="../images/logo-fast-blue-black.png" data-at2x="images/logo-fast-blue-black@2x.png" class="mobile-logo" alt="">
                        </a>
                    </div>
                    <div class="col-auto col-lg-8 menu-order px-lg-0">
                        <button class="navbar-toggler float-end" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-label="Toggle navigation">
                            <span class="navbar-toggler-line"></span>
                            <span class="navbar-toggler-line"></span>
                            <span class="navbar-toggler-line"></span>
                            <span class="navbar-toggler-line"></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
                            @guest <ul></ul>@endguest
                            @auth <div class="justify-content-start fw-bolder text-dark text-uppercase ">Welcomeback, {{auth::user()->nama}} </div> @endauth
                            <ul class="navbar-nav alt-font">
                                <li class="nav-item dropdown simple-dropdown">
                                    <a href="{{route('index')}}" class="nav-link">Home</a>
                                    <i class="fa fa-angle-down dropdown-toggle" data-bs-toggle="dropdown" aria-hidden="true"></i>
                                </li>
                                <li class="nav-item dropdown simple-dropdown">
                                    <a href="{{route('addtocart')}}" class="nav-link">View Cart</a>
                                    <i class="fa fa-angle-down dropdown-toggle" data-bs-toggle="dropdown" aria-hidden="true"></i>
                                </li>
                                @auth<li class="nav-item dropdown simple-dropdown">
                                    <a href="{{route('adm')}}" class="nav-link">Setting</a>
                                    <i class="fa fa-angle-down dropdown-toggle" data-bs-toggle="dropdown" aria-hidden="true"></i>
                                </li>@endauth

                            </ul>
                        </div>
                        
                    </div>
                    <div class="col-auto text-end pe-0 font-size-0">
                        @auth
                        <a href="{{route('logout')}} " class="btn btn-small btn-danger">Logout</a>
                    @else
                        <a href="{{route('login')}} " class="btn btn-small btn-fast-blue">Login</a>
                    @endauth

                        <div class="header-search-icon search-form-wrapper">
                            <a href="javascript:void(0)" class="search-form-icon header-search-form"><i class="feather icon-feather-search"></i></a>
                            <!-- start search input -->
                            <div class="form-wrapper">
                                <button title="Close" type="button" class="search-close alt-font">×</button>
                                <form id="search-form" role="search" method="get" class="search-form text-start" action="search-result.html">
                                    <div class="search-form-box">
                                        <span class="search-label alt-font text-small text-uppercase text-medium-gray">What are you looking for?</span>
                                        <input class="search-input alt-font" id="search-form-input5e219ef164995" placeholder="Enter your keywords..." name="s" value="" type="text" autocomplete="off">
                                        <button type="submit" class="search-button">
                                            <i class="feather icon-feather-search" aria-hidden="true"></i>
                                        </button>
                                    </div>
                                </form>
                            </div>
                            <!-- end search input -->
                        </div>
                    </div>
                </div>
            </nav>
            <!-- end navigation -->
        </header>
<!-- end header -->
        @yield('body')
        <!-- start scroll to top -->
        <a class="scroll-top-arrow" href="javascript:void(0);"><i class="feather icon-feather-arrow-up"></i></a>
        <!-- end scroll to top -->
        <!-- javascript -->
        <script type="text/javascript" src="../js/jquery.min.js"></script>
        <script type="text/javascript" src="../js/theme-vendors.min.js"></script>
        <script type="text/javascript" src="../js/main.js"></script>
    </body>
</html>