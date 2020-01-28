<!DOCTYPE html>
<html lang="en" class="">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <title> Destinations Details</title>
    <meta name="description" content="" />
    <link href="{{ asset('frontend/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/libs/font-awesome/css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/libs/ionicons/css/ionicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/libs/icofont/icofont.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/libs/daterange/daterangepicker.css') }}">
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel='stylesheet' id='google-font-css-css' href='https://fonts.googleapis.com/css?family=Poppins%3A400%2C500%2C600&display=swap' type='text/css' media='all' />
    <link href="{{ asset('frontend/css/destination-details.css') }}" rel="stylesheet">
    <link rel="icon" type="image/png" href="images/Najaf Logo (1).png" />
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

    <link href="{{ asset('frontend/css/tour.css')}}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/libs/ion_rangeslider/css/ion.rangeSlider.min.css') }}" />

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


        @include('Frontend.nav')

     
        <div class="bravo_search_tour">
            <div class="bravo_banner">
                <img src="{{ asset('storage/tmp/uploads/'.\App\Images::find($destinations_details['img'])->file_path) }}" width="1900px" height="400px" alt="">
                <div class="container">
                    <h1>

                    </h1>
                </div>
            </div>

            <div class="container">


                <div class="content">
                    <div class="container">
                        <h3>{{ $destinations_details['name'] }} </h3>
                        {!!  $destinations_details['description'] !!}
                    </div>

                </div>

                <div class="row">

                    <div class="col-lg-9 col-md-12">
                        <div class="bravo-list-item">
                            <div class="topbar-search">
                                <div class="text">
                                    3 Hotel found
                                </div>
                                <div class="control">

                                </div>
                            </div>


                            <div class="list-item">
                                <div class="row">


                     @foreach($hotels as $value)

                                    <div class="col-lg-4 col-md-6">
                                        <div class="item-tour ">
                                            <div class="thumb-image ">
                                                <a target="_blank" href="sofitel-taksim.html">

                                                    <img class='img-responsive lazy' data-src="{{ asset('storage/tmp/uploads/'.\App\Images::find($value['images'][0])->file_path) }}" alt=''>
                                                </a>
                                            </div>
                                            <div class="location">
                                                <i class="icofont-paper-plane"></i> Istanbul
                                            </div>
                                            <div class="item-title">
                                                <a target="_blank" href="sofitel-taksim.html">

                                                {{ $value['name'] }}
                                                </a>
                                            </div>
                                            <div class="service-review tour-review">
                                                <div class="list-star">
                                                    <ul class="booking-item-rating-stars">
                                                        <li><i class="fa fa-star-o"></i></li>
                                                        <li><i class="fa fa-star-o"></i></li>
                                                        <li><i class="fa fa-star-o"></i></li>
                                                        <li><i class="fa fa-star-o"></i></li>
                                                        <li><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                    <div class="booking-item-rating-stars-active" style="">
                                                        <ul class="booking-item-rating-stars">
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>

                                            </div>

                                        </div>
                                    </div>



@endforeach

                                </div>
                            </div>
                            <div class="bravo-pagination">

                                <span class="count-string">Showing 1 - of Hotel</span>
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

                            <p>Copyright &copy; 2020 cvctravel.tech</p>

                            <div class="f-visa">

                                <p>TAREEK AL OFUK</p>

                            </div>
                        </div>
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
        <script src="{{ asset('frontend/libs/jquery-3.3.1.min.js') }}">
        </script>
        <script src="{{ asset('frontend/libs/vue/vue.js') }}"></script>
        <script src="{{ asset('frontend/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('frontend/module/media/js/browser.js') }}"></script>
        <script src="{{ asset('frontend/libs/carousel-2/owl.carousel.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('frontend/libs/daterange/moment.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('frontend/libs/daterange/daterangepicker.min.js') }}"></script>
        <script src="{ asset('frontend/js/functions.js') }}"></script>
        <script src="{ asset('frontend/js/home.js') }}"></script>
        <script src="{ asset('frontend/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    </div>
</body>

</html>