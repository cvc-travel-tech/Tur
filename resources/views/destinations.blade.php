<!DOCTYPE html>
<html lang="en" class="">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->

    <title>Destinations </title>
    <meta name="description" content="" />


    <link href="{{ asset('frontend/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/libs/font-awesome/css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/libs/ionicons/css/ionicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/libs/icofont/icofont.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/destination.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/destination.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/libs/daterange/daterangepicker.css') }}">
    <link rel="icon" type="image/png" href="images/Najaf Logo (1).png" />
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


    <style id="custom-css">
        body {
            font-family: ;
            color: ;
            font-size: ;
            line-height: ;
            font-weight: ;
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

        <style>
            .bravo_wrap .bravo_header {
                background: #1a2b48;
                height: 34px;
            }
            
            .bravo_wrap .bravo_topbar {
                padding: 15px 0;
                color: #333;
                padding-left: 10px;
            }
            
            .bravo_wrap .bravo_topbar .content .topbar-right {
                font-size: 12px;
                margin-left: 10px;
                padding: 20px;
            }
            
            .bravo_wrap .bravo_header .content .header-left .bravo-menu {
                padding-left: 90px;
                /* color: #fff; */
            }
            
            .bravo_wrap .bravo_header .content {
                background: #1a2b48;
                display: flex;
                align-items: center;
                height: 32px;
                font-size: 12px;
                font-weight: 300;
                text-align: center;
                margin-left: 222px;
                color: #fff;
            }
            
            .bravo_wrap .bravo_topbar {
                background-color: #fff;
            }
            
            .bravo_wrap .bravo_topbar {
                padding: 15px 0;
                color: #333;
                padding-left: 10px;
                /* margin-left: 10px; */
                height: 78px;
            }
            
            .bravo_wrap .bravo_topbar .content .socials {
                display: inline-block;
                /* border-right: 1px solid #374969; */
            }
            
            .bravo_wrap .bravo_topbar .content .topbar-items li a {
                color: #666;
                font-weight: 400;
                font-size: 12px;
                text-decoration: none;
            }
            
            .bravo_wrap .bravo_header .content .header-left .bravo-menu ul li a {
                padding: 35px 13px;
                display: inline-block;
                font-size: 12px;
                font-weight: 200;
                text-transform: uppercase;
                color: #fff;
                transition: all .3s;
            }
            
            .bravo_wrap .bravo_topbar .content .topbar-right {
                font-size: 12px;
                padding: 10px;
            }
            
            .bravo_wrap .bravo_header .content .header-left .bravo-menu ul li>.menu-dropdown li a {
                padding: 15px 0;
                display: block;
                font-size: 14px;
                color: #888;
            }
            
            .bravo_topbar .topbar-left .slogin {
                display: inline-block;
                font-weight: bolder;
                color: #d1d4da;
                font-size: 13px;
            }
        </style>


@include('Frontend.nav')



       
        <div class="page-template-content">
            <div class="container">
                <div class="bravo-list-locations">
                    <div class="title">
                        Destinations
                    </div>
                    <div class="list-item">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="destination-item ">
                                    <a href="destination-details.html">
                                        <div class="image" style="background: url('images/hagia-sophia-and-blue-mosque-sunset-istanbul-ISTGUIDE0219.jpg')">
                                            <div class="effect"></div>
                                            <div class="content">
                                                <h4 class="title">Istanbul</h4>
                                                <div class="desc">8 Hotels</div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="destination-item ">
                                    <a href="destination-details.html">
                                        <div class="image" style="background: url('images/Holidayme_Antalya_shutterstock_597156353.jpg')">
                                            <div class="effect"></div>
                                            <div class="content">
                                                <h4 class="title">Istanbul</h4>
                                                <div class="desc">3 Hotels</div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="destination-item ">
                                    <a href="destination-details.html">
                                        <div class="image" style="background: url(images/0e.jpg)">
                                            <div class="effect"></div>
                                            <div class="content">
                                                <h4 class="title">Istanbul</h4>
                                                <div class="desc">3 Hotels</div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="destination-item ">
                                    <a href="destination-details.html">
                                        <div class="image" style="background: url('images/images.jpg')">
                                            <div class="effect"></div>
                                            <div class="content">
                                                <h4 class="title">Istanbul</h4>
                                                <div class="desc">3 Hotels</div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="destination-item ">
                                    <a href="destination-details.html">
                                        <div class="image" style="background: url(images/78412032.jpg)">
                                            <div class="effect"></div>
                                            <div class="content">
                                                <h4 class="title">Istanbul</h4>
                                                <div class="desc">3 Hotels</div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="destination-item ">
                                    <a href="destination-details.html">
                                        <div class="image" style="background: url('images/CITY-IST-1.jpg')">
                                            <div class="effect"></div>
                                            <div class="content">
                                                <h4 class="title">Istanbul</h4>
                                                <div class="desc">3 Hotel</div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container " style="padding-top: 40px;padding-bottom: 40px;">
            <div class="blog-content">



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
                                            <img src="images/watercolor-football-clipart-2.png" style="
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
                                    <form action="http://cvc.vacations/newsletter/subscribe" class="subcribe-form bravo-subscribe-form bravo-form">
                                        <input type="hidden" name="_token" value="rpIsegRg9AWQquQ8f0S0UzRjdI51mdPWVAwziRyx">
                                        <div class="form-group">
                                            <input type="text" name="email" class="form-control email-input" placeholder="Your Email">
                                            <button type="submit" class="btn-submit">Subscribe
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
                                                <img src="images/facebook.png" style="width: 10%;">
                                            </a>
                                            <a href="#">
                                                <img src="images/whatsapp.png" style="width: 10%;">
                                            </a>
                                            <a href="#">
                                                <img src="images/skype.png" style="width:10%">
                                            </a>
                                            <a href="#">
                                                <img src="images/twitter.png" style="width:10%">
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

                                        <li><a href="index.html">Home</a></li>
                                        <li><a href="destinations.html">Destinations</a></li>
                                        <li><a href="tour.html">Turkey Packages</a></li>
                                        <li><a href="about.html">About Us</a></li>
                                        <li><a href="contact-us.html">Contact Us</a></li>
                                        <li><a href="blogo.html">Blog</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copy-right">
                <div class="container context">
                    <div class="row">
                        <div class="col-md-12">
                            <!DOCTYPE html>
                            <html>

                            <head>
                            </head>

                            <body>
                                <p>Copyright &copy; 2020 cvctravel.tech</p>
                            </body>

                            </html>
                            <div class="f-visa">
                                <!DOCTYPE html>
                                <html>

                                <head>
                                </head>

                                <body>
                                    <p>TAREEK AL OFUK</p>
                                </body>

                                </html>
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
                <input type="checkbox" name="remember" id="remember-me" value="1"> Remember me <span class="checkmark fcheckbox"></span>
            </label>
                                    <a href="http://cvc.vacations/password/reset">Forgot Password?</a>
                                </div>
                            </div>
                            <div class="error message-error invalid-feedback"></div>
                            <div class="form-group">
                                <button class="btn btn-primary form-submit" type="submit">
            Login
            <span class="spinner-grow spinner-grow-sm icon-loading" role="status" aria-hidden="true"></span>
        </button>
                            </div>
                            <div class="c-grey font-medium f14 text-center"> Do not have an account? <a href="" data-target="#register" data-toggle="modal">Sign Up</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="register" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content relative">
                    <div class="modal-header">
                        <h4 class="modal-title">Sign Up</h4>
                        <span class="c-pointer" data-dismiss="modal" aria-label="Close">
                    <i class="input-icon field-icon fa">
                        <img src="http://cvc.vacations/images/ico_close.svg" alt="close">
                    </i>
                </span>
                    </div>
                    <div class="modal-body">
                        <form class="form bravo-form-register" method="post">
                            <input type="hidden" name="_token" value="rpIsegRg9AWQquQ8f0S0UzRjdI51mdPWVAwziRyx">
                            <div class="row">
                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="first_name" autocomplete="off" placeholder="First Name">
                                        <i class="input-icon field-icon fa"><img src="http://cvc.vacations/images/ico_fullname_signup.svg"></i>
                                        <span class="invalid-feedback error error-first_name"></span>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="last_name" autocomplete="off" placeholder="Last Name">
                                        <i class="input-icon field-icon fa"><img src="http://cvc.vacations/images/ico_fullname_signup.svg"></i>
                                        <span class="invalid-feedback error error-last_name"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="company_name" autocomplete="off" placeholder="Company Name">
                                        <i class="input-icon field-icon fa"><img src="http://cvc.vacations/images/ico_fullname_signup.svg"></i>
                                        <span class="invalid-feedback error error-company_name"></span>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="company_url" autocomplete="off" placeholder="Company Url">
                                        <i class="input-icon field-icon fa"><img src="http://cvc.vacations/images/ico_fullname_signup.svg"></i>
                                        <span class="invalid-feedback error error-company_url"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="city" autocomplete="off" placeholder="City">
                                        <i class="input-icon field-icon fa"><img src="http://cvc.vacations/images/ico_fullname_signup.svg"></i>
                                        <span class="invalid-feedback error error-city"></span>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="phone" autocomplete="off" placeholder="Phone">
                                        <i class="input-icon field-icon fa"><img src="http://cvc.vacations/images/ico_fullname_signup.svg"></i>
                                        <span class="invalid-feedback error error-phone"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="address" autocomplete="off" placeholder="Address">
                                        <i class="input-icon field-icon fa"><img src="http://cvc.vacations/images/ico_fullname_signup.svg"></i>
                                        <span class="invalid-feedback error error-address"></span>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="address2" autocomplete="off" placeholder="Address 2">
                                        <i class="input-icon field-icon fa"><img src="http://cvc.vacations/images/ico_fullname_signup.svg"></i>
                                        <span class="invalid-feedback error error-address2"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" autocomplete="off" placeholder="Email *">
                                <i class="input-icon field-icon fa"><img src="http://cvc.vacations/images/ico_email_login_form.svg"></i>
                                <span class="invalid-feedback error error-email"></span>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="password" autocomplete="off" placeholder="Password *">
                                <i class="input-icon field-icon fa"><img src="http://cvc.vacations/images/ico_pass_login_form.svg"></i>
                                <span class="invalid-feedback error error-password"></span>
                            </div>
                            <div class="form-group">
                                <label for="term">
            <input id="term" type="checkbox" name="term" class="mr5">
            I have read and accept the Terms and Privacy Policy
            <span class="checkmark fcheckbox"></span>
        </label>
                                <div><span class="invalid-feedback error error-term"></span></div>
                            </div>
                            <div class="error message-error invalid-feedback"></div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary form-submit">
            Sign Up
            <span class="spinner-grow spinner-grow-sm icon-loading" role="status" aria-hidden="true"></span>
        </button>
                            </div>
                            <div class="c-grey f14 text-center">
                                Already have an account?
                                <a href="#" data-target="#login" data-toggle="modal">Log In</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div id="cdn-browser-modal" class="modal fade">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div id="cdn-browser" class="cdn-browser d-flex flex-column" v-cloak>
                        <div class="files-nav flex-shrink-0">
                            <div class="d-flex justify-content-between">
                                <div class="col-left d-flex align-items-center">
                                    <div class="filter-item">
                                        <input type="text" placeholder="Search file name...." class="form-control" v-model="filter.s" @keyup.enter="filter.page = 1;reloadLists()">
                                    </div>
                                    <div class="filter-item">
                                        <button class="btn btn-default" @click="filter.page = 1;reloadLists()">
                                    <i class="fa fa-search"></i> Search</button>
                                    </div>
                                    <div class="filter-item">
                                        <small><i>Total: total files</i></small>
                                    </div>
                                </div>
                                <div class="col-right">
                                    <i class="fa-spin fa fa-spinner icon-loading"></i>
                                    <button class="btn btn-success btn-pick-files">
                                <span><i class="fa fa-upload"></i> Upload</span>
                                <input multiple type="file" name="files[]" ref="files">
                            </button>
                                </div>
                            </div>
                        </div>
                        <div class="upload-new" v-show="showUploader" display="none">
                            <input type="file" name="filepond[]" class="my-pond">
                        </div>
                        <div class="files-list">
                            <div class="files-wraps " :class="'view-'+viewType">
                                <file-item v-for="(file,index) in files" :key="index" :view-type="viewType" :selected="selected" :file="file" v-on:select-file="selectFile"></file-item>
                            </div>
                            <p class="no-files-text text-center" v-show="!total && apiFinished" style="display: none">No file found</p>
                            <div class="text-center" v-if="totalPage > 1">
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination">
                                        <li class="page-item" :class="{disabled:filter.page <= 1}">
                                            <a class="page-link" v-if="filter.page <=1">Previous</a>
                                            <a class="page-link" href="#" v-if="filter.page > 1" v-on:click="changePage(filter.page-1,$event)">Previous</a>
                                        </li>
                                        <li class="page-item" v-if="p >= (filter.page-3) && p <= (filter.page+3)" :class="{active: p == filter.page}" v-for="p in totalPage" @click="changePage(p,$event)">
                                            <a class="page-link" href="#">p</a></li>
                                        <li class="page-item" :class="{disabled:filter.page >= totalPage}">
                                            <a v-if="filter.page >= totalPage" class="page-link">Next</a>
                                            <a href="#" class="page-link" v-if="filter.page < totalPage" v-on:click="changePage(filter.page+1,$event)">Next</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="browser-actions d-flex justify-content-between flex-shrink-0" v-if="selected.length">
                            <div class="col-left" v-show="selected.length">
                                <div v-if="selected && selected.length">
                                    <div class="count-selected">selected.length file selected</div>
                                    <div class="clear-selected" @click="selected=[]"><i>unselect</i></div>
                                </div>
                            </div>
                            <div class="col-right" v-show="selected.length">
                                <button class="btn btn-primary" :class="{disabled:!selected.length}" @click="sendFiles">Use file</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script type="text/x-template" id="file-item-template">
            <div class="file-item" :class="fileClass(file)">
                <div class="inner" :class="{active:selected.indexOf(file.id) !== -1 }" @click="selectFile(file)" :title="file.file_name">
                    <div class="file-thumb" v-if="viewType=='grid'" v-html="getFileThumb(file)">
                    </div>
                    <div class="file-name">file.file_name</div>
                    <span class="file-checked-status" v-show="selected.indexOf(file.id) !== -1">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M186.301 339.893L96 249.461l-32 30.507L186.301 402 448 140.506 416 110z"/></svg>
            </span>
                </div>
            </div>
        </script>


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