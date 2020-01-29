<!DOCTYPE html>
<html lang="en" class="">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="rpIsegRg9AWQquQ8f0S0UzRjdI51mdPWVAwziRyx">

    <link rel="icon" type="image/png" href="images/Najaf Logo (1).png" />

    <meta name="google-site-verification" content="cXQuYnA8XdF73KGgCE2FnWcYKDIMB-Cgny1cP6M-QCw" />

    <title>Contact Us</title>
    <meta name="description" content="" />
    <link href="{{ asset('frontend/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/font-awesome/css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/libs/ionicons/css/ionicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/libs/icofont/icofont.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/libs/daterange/daterangepicker.css') }}">
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel='stylesheet' id='google-font-css-css' href='https://fonts.googleapis.com/css?family=Poppins%3A400%2C500%2C600&display=swap' type='text/css' media='all' />
    <script>
        var bookingCore = {
            url: 'http://cvc.vacations',
            booking_decimals: 0,
            thousand_separator: '.',
            decimal_separator: ',',
            currency_position: 'left',
            currency_symbol: '$',
            date_format: 'MM/DD/YYYY',
            map_provider: 'gmap',
            map_gmap_key: '',
        };
    </script>
    <!-- Styles -->
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-154435778-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-154435778-1');
    </script>

    <link href="{{ asset('frontend/css/contact.css') }}" rel="stylesheet">

    <style id="custom-css">
        body {
            /* font-family: ;
            color: ;
            font-size: ;
            line-height: ;
            font-weight: ; */
        }
        
        .bravo_topbar .topbar-left .slogin {
            display: inline-block;
            font-weight: bolder;
            color: #d1d4da;
            font-size: 13px;
        }
    </style>
    <link href="{{ asset('frontend/libs/carousel-2/owl.carousel.css') }}" rel="stylesheet">

    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API = Tawk_API || {},
            Tawk_LoadStart = new Date();
        (function() {
            var s1 = document.createElement("script"),
                s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/5df2121a43be710e1d21c40f/default';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
    </script>
    <!--End of Tawk.to Script-->
</head>

<body class="">
    <div class="bravo_wrap">



        <div class="bravo_topbar">
            <div class="container">
                <div class="content">
                    <div class="topbar-left">

                        <a href="index.html" class="bravo-logo">
                            <img src="{{ asset('frontend/images/Najaf Logo (1).png') }}" alt="">
                        </a>
                        <h5 class="slogin"> Your Luxury DMC in Egypt </h5>
                    </div>

                    <div>



                    </div>
                    <div class="topbar-right">

                        <div>

                            <div class="st-list socials">
                                <a href="#" target="_blank">
                                    <i class="fa fa-facebook"></i>
                                </a>
                                <a href="#" target="_blank">
                                    <i class="fa fa-linkedin"></i>
                                </a>
                                <a href="#" target="_blank">
                                    <i class="fa fa-google-plus"></i>
                                </a>
                            </div>

                            <ul class="topbar-items">
                                <li class="hidden-xs hidden-sm"><a href="#" target="">info@to-istanbultours.com</a>
                                </li>
                            </ul>
                            <ul class="topbar-items">
                                <li class="login-item">
                                    <a href="#login" data-toggle="modal" data-target="#login" class="login">Login</a>
                                </li>
                                <li class="signup-item">
                                    <a href="#register" data-toggle="modal" data-target="#register" class="signup">Sign
                                        Up</a>
                                </li>
                            </ul>

                            </li>
                        </div>

                        </ul>
                    </div>
                </div>
            </div>
        </div>



        <div class="bravo_header">
            <div class="container">
                <div class="content">
                    <div class="header-left">

                        <div class="bravo-menu">
                            <ul class="main-menu menu-generated">
                                <li class=""><a target="" href="{{ url('/') }}">Home</a></li>
                                <li class="   "><a target="" href="{{ url('destinations') }}">Destinations</a>
                                   
                                </li>
                                <li class="    "><a target="" href="{{ url('Pack')  }}">Turkey Packages</a></li>
                                <li class="  "><a target="" href="{{ url('about') }}">About Us</a></li>
                                <li class=""><a target="" href="{{ url('contact')  }}">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>




                    <div class="header-right">
                        <button class="bravo-more-menu">
                            <i class="fa fa-bars"></i>
                        </button>
                    </div>
                </div>
            </div>



            <div class="bravo-menu-mobile">
                <div class="user-profile">
                    <div class="b-close"><i class="icofont-scroll-left"></i></div>
                    <div class="avatar">
                        <i class="icofont-user-alt-2"></i>
                    </div>
                    <ul class="topbar-items">
                        <li class="login-item">
                            <a href="#login" data-toggle="modal" data-target="#login" class="login">Login</a>
                        </li>
                        <li class="signup-item">
                            <a href="#register" data-toggle="modal" data-target="#register" class="signup">Sign Up</a>
                        </li>
                    </ul>
                </div>
                <div class="g-menu">
                    <ul class="main-menu menu-generated">
                        <li class=""><a target="" href="{{ url('/') }}">Home</a></li>
                        <li class="   "><a target="" href="{{ url('destinations') }}">Destinations <i
                                    class="fa fa-angle-down"></i></a>
                            <ul class="main-menu menu-generated">
                                <li class=""><a target="" href="{{ url('/') }}">Home</a></li>
                                <li class="   "><a target="" href="{{ url('destinations') }}">Destinations 

                                </li>
                                <li class="    "><a target="" href="{{ url('Pack')  }}">Turkey Packages</a></li>
                                <li class="  "><a target="" href="{{ url('about') }}">About Us</a></li>
                                <li class=""><a target="" href="{{ url('contact')  }}">Contact Us</a></li>
                            </ul>
                        </li>
                        <li class="    "><a target="" href="{{ url('Pack')  }}">Turkey Packages</a></li>
                        <li class="  "><a target="" href="{{ url('about') }}">About Us</a></li>
                        <li class=""><a target="" href="{{ url('contact')  }}">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div id="bravo_content-wrapper">
            <div class="bravo_content">
                <div class="container">
                    <div class="row section">
                        <div class="col-md-5">
                            <div role="form" class="form_wrapper" lang="en-US" dir="ltr">
                                <form method="post" action=" class="bookcore-form">
                                    <input type="hidden" name="_token" value="rpIsegRg9AWQquQ8f0S0UzRjdI51mdPWVAwziRyx">
                                    <div style="display: none;">
                                        <input type="hidden" name="g-recaptcha-response" value="">
                                    </div>
                                    <div class="contact-form">
                                        <div class="contact-header">
                                            <h3>We&#039;d love to hear from you </h3>
                                            <p>Send us a message and we&#039;ll respond as soon as possible </p>

                                        </div>

                                        <div class="contact-form">
                                            <div class="form-group">
                                                <input type="text" value="" placeholder=" Name " name="name" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" value="" placeholder="Email" name="email" class="form-control">
                                            </div>

                                            <div class="form-group">
                                                <textarea name="message" cols="40" rows="10" class="form-control textarea" placeholder="Message"></textarea>
                                            </div>
                                            <div class="form-group">

                                            </div>
                                            <p><input type="submit" value="SEND MESSAGE" class="form-control submit btn btn-primary send-btn"></p>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="offset-md-2 col-md-5">
                            <div class="contact-info">
                                <div class="info-bg">

                                    <img src="{{ asset('frontend/images/contact.jpg') }}" class="img-responsive" alt="Background Contact Info">
                                </div>
                                <div class="info-content">
                                    <h3>TAREEK AL OFUK</h3>
                                    <div class="sub">
                                        <p></p>
                                        <p>Tell. +90 536 434 7663</p>
                                        <p>Email. info@to-istanbultours.com</p>
                                        <p class="address"> addess.HALASKARGAZİ CD. MISIRLI PLAZA 51/2 HARBİYE İSTANBUL
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


  
        <div class="bravo_footer">
            <div class="mailchimp">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-lg-10 col-lg-offset-1">
                            <div class="row">
                                <div class="col-xs-12  col-md-12 col-lg-6">
                                    <div class="media ">
                                        <div class="media-left hidden-xs col-lg-3" style="
    /* width: 98px; */
">
                                            <img src="{{ asset('frontend/images/watercolor-football-clipart-2.png') }}" style="
    width: 100%;
">
                                        </div>
                                        <div class="media-body">
                                            <div class="col-md-12">
                                                <h4 class="media-heading">Get Updates &amp; More</h4>
                                                <p>Thoughtful thoughts to your inbox</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-md-5 col-lg-6">
                                    <form action="" class="subcribe-form  ">
                                        <div class="form-group">
                                            <input type="text" name="email" class="form-control email-input" placeholder="Your Email">
                                            <button type="" class="btn-submit">Subscribe
                                        <i class="fa fa-spinner fa-pulse fa-fw"></i>
                                    </button>
                                        </div>
                                        <div class="form-mess"></div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <div class="main-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="nav-footer">
                                <div class="title">
                                    NEED HELP?
                                </div>
                                <div class="context">
                                    <div class="contact">
                                        <div class="c-title">
                                            Call Us
                                        </div>
                                        <div class="sub">
                                            +90 536 434 7663

                                        </div>
                                    </div>
                                    <div class="contact">
                                        <div class="c-title">
                                            Email for Us
                                        </div>
                                        <div class="sub">
                                            info@to-istanbultours.com


                                        </div>
                                    </div>
                                    <div class="contact">
                                        <div class="c-title">
                                            Follow Us
                                        </div>
                                        <div class="sub">
                                            <a href="#">
                                                <img src="{{ asset('frontend/images/facebook.png') }}" style="width: 10%;">
                                            </a>
                                            <a href="#">
                                                <img src="{{ asset('frontend/images/whatsapp.png') }}" style="width: 10%;">
                                            </a>
                                            <a href="#">
                                                <img src="{{ asset('frontend/images/skype.png') }}" style="width:10%">
                                            </a>
                                            <a href="#">
                                                <img src="{{ asset('frontend/images/twitter.png') }}" style="width:10%">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="nav-footer">
                                <div class="title">
                                    Services
                                </div>
                                <div class="context">
                                    <div class="contact">
                                        <div class="c-title">
                                            Call Us
                                        </div>
                                        <div class="sub">
                                            +90 212 231 0069 (5ext)

                                        </div>
                                    </div>
                                    <div class="contact">
                                        <div class="c-title">
                                            Skype
                                        </div>
                                        <div class="sub">
                                        istanbultours
                                        </div>
                                    </div>
                                    <div class="contact">
                                        <div class="c-title">
                                            Whats App
                                        </div>
                                        <div class="sub">
                                            +90 536 434 7663
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="nav-footer">
                                <div class="title">
                                    SUPPORT
                                </div>
                                <div class="context">
                                    <ul>

                                        <li><a href="{{ url('/') }}">Home</a></li>
                                        <li><a href="{{ url('destinations') }}">Destinations</a></li>
                                        <li><a href="{{ url('Pack')  }}">Turkey Packages</a></li>
                                        <li><a href="{{ url('about') }}">About Us</a></li>
                                        <li><a href="{{ url('contact')  }}">Contact Us</a></li>
                                        <li><a href="{{ url('blog') }}">Blog</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>



            
        </div>

        <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content relative">
                    <div class="modal-header">
                        <h4 class="modal-title">Log In</h4>
                        <span class="c-pointer" data-dismiss="modal" aria-label="Close">
                            <i class="input-icon field-icon fa">
                                <img src="http://cvc.vacations/images/ico_close.svg" alt="close">
                            </i>
                        </span>
                    </div>
                    <div class="modal-body relative">
                        <form class="bravo-form-login" method="POST" action="http://cvc.vacations/login">
                            <input type="hidden" name="_token" value="rpIsegRg9AWQquQ8f0S0UzRjdI51mdPWVAwziRyx">
                            <div class="form-group">
                                <input type="text" class="form-control" name="email" autocomplete="off" placeholder="Email address">
                                <i class="input-icon fa fa-envelope-o"></i>
                                <span class="invalid-feedback error error-email"></span>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="password" autocomplete="off" placeholder="Password">
                                <i class="input-icon fa fa-lock"></i>
                                <span class="invalid-feedback error error-password"></span>
                            </div>
                            <div class="form-group">
                                <div class="d-flex justify-content-between">
                                    <label for="remember-me" class="mb0">
                                        <input type="checkbox" name="remember" id="remember-me" value="1"> Remember me
                                        <span class="checkmark fcheckbox"></span>
                                    </label>
                                    <a href="http://cvc.vacations/password/reset">Forgot Password?</a>
                                </div>
                            </div>
                            <div class="error message-error invalid-feedback"></div>
                            <div class="form-group">
                                <button class="btn btn-primary form-submit" type="submit">
                                    Login
                                    <span class="spinner-grow spinner-grow-sm icon-loading" role="status"
                                        aria-hidden="true"></span>
                                </button>
                            </div>
                            <div class="c-grey font-medium f14 text-center"> Do not have an account? <a href="" data-target="#register" data-toggle="modal">Sign Up</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>









    


        <script src="{{ asset('frontend/libs/lazy-load/intersection-observer.js') }}"></script>
        <script async src="{{ asset('frontend/libs/lazy-load/lazyload.min.js') }}"></script>
        <script>
            // Set the options to make LazyLoad self-initialize
            window.lazyLoadOptions = {
                elements_selector: ".lazy",
                // ... more custom settings?
            };

            // Listen to the initialization event and get the instance of LazyLoad
            window.addEventListener('LazyLoad::Initialized', function(event) {
                window.lazyLoadInstance = event.detail.instance;
            }, false);
        </script>
        <script src="{{ asset('frontend/libs/jquery-3.3.1.min.js') }}"></script>
        <script src="{{ asset('frontend/libs/vue/vue.js') }}"></script>
        <script src="{{ asset('frontend/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('frontend/module/media/js/browser.js') }}"></script>
        <script src="{{ asset('frontend/libs/carousel-2/owl.carousel.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('frontend/libs/daterange/moment.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('frontend/libs/daterange/daterangepicker.min.js') }}"></script>
        <script src="{{ asset('frontend/js/functions.js') }}"></script>
        <script src="{{ asset('frontend/js/home.js') }}"></script>
        <script src="{{ asset('frontend/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>




    </div>
</body>

</html>