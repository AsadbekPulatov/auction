<!DOCTYPE html>
<html lang="en">
<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>pro</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <!-- style css -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <!-- Responsive-->
    <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">
    <!-- fevicon -->
    <link rel="icon" href="{{asset('assets/images/fevicon.png')}}" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/jquery.mCustomScrollbar.min.css')}}">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!-- body -->
<body class="main-layout">
<!-- loader  -->
<div class="loader_bg">
    <div class="loader"><img src="{{asset('assets/images/loading.gif')}}" alt="#"/></div>
</div>
<!-- end loader -->

<!-- header -->
<header>
    <!-- header inner -->
    <div class="header">

        <div class="header_full_bg">
            <div class="header_top">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="logo">
                                <a href="{{route('auctions.index')}}"><img src="{{asset('assets/images/logo.png')}}" alt="#"/></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="banner">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="banner_text">
                                <h1>Pro<br> Body Builder Protien</h1>
                                <a class="get_btn" href="#about" role="button" >About Protien</a> <a class="get_btn" href="#contact" role="button">Contact Us</a>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <img class="bann_img" src="{{asset('assets/images/banner_ing.png')}}" alt="#"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</header>
<!-- end header inner -->
<!-- end header -->

@yield('content')

<!--  footer -->
<footer>
    <div class="footer">
        <div class="daih_bg">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <ul class="conta">
                            <li><i class="fa fa-phone" aria-hidden="true"></i> Call Now  +01 123467890</li>
                            <li><i class="fa fa-map-marker" aria-hidden="true"></i> Location</li>
                            <li> <i class="fa fa-envelope" aria-hidden="true"></i><a href="#"> demo@gmail.com</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <img class="tex_left" src="{{asset('assets/images/logo2.png')}}" alt="#"/>
                </div>
                <div class=" col-md-3 col-sm-6">
                    <p class="variat">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim Lorem ipsum </p>
                </div>
                <div class="col-lg-2 offset-lg-1 col-md-3 col-sm-6">
                    <h3>Information  </h3>
                    <ul class="link_menu">
                        <li> There are many </li>
                        <li> variations of pas</li>
                        <li> sages of Lorem </li>
                        <li> Ipsum available, </li>
                        <li>but the majority </li>
                        <li>have suffered  </li>
                    </ul>
                </div>
                <div class="col-lg-2 offset-lg-1 col-md-3 col-sm-6">
                    <h3>Helpful Links</h3>
                    <ul class="link_menu">
                        <li> There are many </li>
                        <li> variations of pas</li>
                        <li> sages of Lorem </li>
                        <li> Ipsum available, </li>
                        <li>but the majority </li>
                        <li>have suffered  </li>
                    </ul>
                </div>
                <div class="col-lg-2 offset-lg-1 col-md-3 col-sm-6">
                    <h3>Supported</h3>
                    <ul class="link_menu">
                        <li> There are many </li>
                        <li> variations of pas</li>
                        <li> sages of Lorem </li>
                        <li> Ipsum available, </li>
                        <li>but the majority </li>
                        <li>have suffered  </li>
                    </ul>
                </div>
{{--                <div class="col-sm-12">--}}
{{--                    <ul class="social2_icon">--}}
{{--                        <li><a href="javascript:void(0)"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>--}}
{{--                        <li><a href="javascript:void(0)"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>--}}
{{--                        <li><a href="javascript:void(0)"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>--}}
{{--                        <li><a href="javascript:void(0)"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
            </div>
        </div>

    </div>
</footer>
<!-- end footer -->
<!-- Javascript files-->
<script src="{{asset('assets/js/jquery.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/js/jquery-3.0.0.min.js')}}"></script>
<!-- sidebar -->
<script src="{{asset('assets/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
<script src="{{asset('assets/js/custom.js')}}"></script>
<script>
    function openNav() {
        document.getElementById("myNav").style.width = "100%";
    }

    function closeNav() {
        document.getElementById("myNav").style.width = "0%";
    }
</script>
</body>
</html>
