<!DOCTYPE html>
<html lang="en" class="">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="w1XuYo8pQUNLhOdXlMegxKHODEb1l5wpFpKRtE2v">
    <link rel="icon" type="image/png" href="images/Najaf Logo (1).png"/>

    <meta name="google-site-verification" content="cXQuYnA8XdF73KGgCE2FnWcYKDIMB-Cgny1cP6M-QCw"/>

    <title>Checkout </title>
    <meta name="description" content=""/>
    <link href="{{ asset('frontend/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/libs/font-awesome/css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/libs/ionicons/css/ionicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/libs/icofont/icofont.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/libs/daterange/daterangepicker.css') }}">
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel='stylesheet' id='google-font-css-css'
          href='https://fonts.googleapis.com/css?family=Poppins%3A400%2C500%2C600&display=swap' type='text/css'
          media='all'/>
    <script>
        var bookingCore = {
            url: 'https://cvc.vacations',
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

    <link href="{{ asset('frontend/module/booking/css/checkout.css') }}" rel="stylesheet">

    <style id="custom-css">
        body {
            font-family: ;
            color: ;
            font-size: ;
            line-height: ;
            font-weight: ;
        }

        a,
        .bravo-news .btn-readmore,
        .bravo_wrap .bravo_header .content .header-left .bravo-menu ul li:hover > a,
        .bravo_wrap .bravo_search_tour .bravo_form_search .bravo_form .field-icon,
        .bravo_wrap .bravo_search_tour .bravo_form_search .bravo_form .render,
        .bravo_wrap .bravo_search_tour .bravo_form_search .bravo_form .field-detination #dropdown-destination .form-control,
        .bravo_wrap .bravo_search_tour .bravo_filter .g-filter-item .item-content .btn-apply-price-range,
        .bravo_wrap .bravo_search_tour .bravo_filter .g-filter-item .item-content .btn-more-item,
        .input-number-group i,
        .bravo_wrap .page-template-content .bravo-form-search-tour .bravo_form_search_tour .field-icon,
        .bravo_wrap .page-template-content .bravo-form-search-tour .bravo_form_search_tour .field-detination #dropdown-destination .form-control,
        .bravo_wrap .page-template-content .bravo-form-search-tour .bravo_form_search_tour .render {
            color: #5191fa
        }

        .bravo-pagination ul li.active a,
        .bravo-pagination ul li.active span {
            color: #5191fa !important;
        }

        .bravo-news .widget_category ul li span,
        .bravo_wrap .bravo_search_tour .bravo_form_search .bravo_form .g-button-submit button,
        .bravo_wrap .bravo_search_tour .bravo_filter .filter-title:before,
        .bravo_wrap .bravo_search_tour .bravo_filter .g-filter-item .item-content .bravo-filter-price .irs--flat .irs-bar,
        .bravo_wrap .bravo_search_tour .bravo_filter .g-filter-item .item-content .bravo-filter-price .irs--flat .irs-from,
        .bravo_wrap .bravo_search_tour .bravo_filter .g-filter-item .item-content .bravo-filter-price .irs--flat .irs-to,
        .bravo_wrap .bravo_search_tour .bravo_filter .g-filter-item .item-content .bravo-filter-price .irs--flat .irs-single,
        .bravo_wrap .bravo_search_tour .bravo_filter .g-filter-item .item-content .bravo-filter-price .irs--flat .irs-handle > i:first-child,
        .bravo-news .header .cate ul li,
        .bravo_wrap .page-template-content .bravo-form-search-tour .bravo_form_search_tour .g-button-submit button,
        .bravo_wrap .page-template-content .bravo-list-locations .list-item .destination-item .image .content .desc {
            background: #5191fa;
        }

        .bravo-pagination ul li.active a,
        .bravo-pagination ul li.active span {
            border-color: #5191fa !important;
        }

        .bravo_wrap .bravo_search_tour .bravo_filter .g-filter-item .item-content .bravo-filter-price .irs--flat .irs-from:before,
        .bravo_wrap .bravo_search_tour .bravo_filter .g-filter-item .item-content .bravo-filter-price .irs--flat .irs-to:before,
        .bravo_wrap .bravo_search_tour .bravo_filter .g-filter-item .item-content .bravo-filter-price .irs--flat .irs-single:before,
        .bravo-reviews .review-form .form-wrapper,
        .bravo_wrap .bravo_detail_tour .bravo_content .bravo_tour_book {
            border-top-color: #5191fa;
        }

        .bravo_wrap .bravo_footer .main-footer .nav-footer .context .contact {
            border-left-color: #5191fa;
        }

        .bravo_wrap .page-template-content .bravo-form-search-tour .bravo_form_search_tour .field-detination {
            padding: 0 0 10px 0;
        }

        .bravo_wrap .page-template-content .bravo-form-search-tour .bravo_form_search_tour .form-date-search {
            padding: 0 0 10px 0;
        }

        .bravo_wrap .page-template-content .bravo-form-search-tour .bravo_form_search_tour .g-button-submit {
            min-height: 62px;
        }

        .bravo_wrap .page-template-content .bravo-form-search-tour {
            padding: 230px 0 !important;
        }

        .bravo_wrap .bravo_header .content .header-left {
            width: 100% !important;
        }

        .bravo_wrap .bravo_header .content .header-right {
            width: 0% !important;
        }

        a.bravo-logo img {
            width: 166px !important;
        }

        .bravo_wrap .bravo_topbar {
            height: auto !important;
        }
    </style>
    <link href="{{ asset('frontend/libs/carousel-2/owl.carousel.css') }}" rel="stylesheet">

    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API = Tawk_API || {},
            Tawk_LoadStart = new Date();
        (function () {
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

        .bravo_wrap .bravo_header .content .header-left .bravo-menu ul li > .menu-dropdown li a {
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

        .label-acc {
            margin-left: 25px !important;
        }

        .rooms-select {
            margin-bottom: 15px;
        }

        .booking-review-content {
            position: fixed;
            background: white;
            z-index: 999;
        }
    </style>
    @include('Frontend.nav')

    <div style="display: none" class="clone_div">
        <div class="row">
            <div class="col-md-6 field-country">
                <div class="form-group">
                    <label>Tourguide Gender </label>
                    <select name="gender[]" class="form-control" required>
                        <option value="">-- Select --</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>
                </div>
            </div>

            {{--<div class="col-md-6 field-country">--}}
            {{--<div class="form-group">--}}
            {{--<label>Tourguide Langugae </label>--}}
            {{--<select name="language" class="form-control">--}}
            {{--<option value="">-- Select --</option>--}}
            {{--<option value="0">English</option>--}}
            {{--<option value="1">German</option>--}}
            {{--</select>--}}
            {{--</div>--}}
            {{--</div>--}}

            <div class="col-md-6">
                <div class="form-group">
                    <label>First Name <span class="required">*</span></label>
                    <input type="text" placeholder="First Name"
                           class="form-control" required
                           value="" name="first_name[]">
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label>Last Name <span class="required">*</span></label>
                    <input type="text" placeholder="Last Name"
                           class="form-control" required
                           value=""
                           name="last_name[]">
                </div>
            </div>

            {{--<div class="col-md-6 field-email">--}}
            {{--<div class="form-group">--}}
            {{--<label>Email <span class="required">*</span></label>--}}
            {{--<input type="email" placeholder="email@domain.com"--}}
            {{--class="form-control"--}}
            {{--value="admin@admin.com" name="email">--}}
            {{--</div>--}}
            {{--</div>--}}

            <div class="col-md-6">
                <div class="form-group">
                    <label> CellPhone <span class="required">*</span></label>
                    <input type="text" placeholder="Your Phone"
                           class="form-control" required
                           value="" name="phone[]">
                </div>
            </div>

            {{--<div class="col-md-6 field-city">--}}
            {{--<div class="form-group">--}}
            {{--<label>City </label>--}}
            {{--<input type="text" class="form-control" value="" name="city"--}}
            {{--placeholder="Your City">--}}
            {{--</div>--}}
            {{--</div>--}}

            <div class="col-md-6 field-city">
                <div class="form-group">
                    <label>Natinality </label>
                    <input type="text" class="form-control" value=""
                           name="nationality[]" required
                           placeholder="Nationality">
                </div>
            </div>

            {{--<div class="col-md-12">--}}
            {{--<label>Special Requirements </label>--}}
            {{--<textarea name="special_requirements" cols="30" rows="6"--}}
            {{--class="form-control"--}}
            {{--placeholder="Special Requirements"></textarea>--}}
            {{--</div>--}}
        </div>
    </div>

    <div class="bravo-booking-page padding-content">
        <div class="container">
            <div id="bravo-checkout-page">
                <div class="row">
                    <div class="col-md-8">
                        <h3 class="form-title">Booking Submission</h3>
                        <form method="POST" action="{{route('front.booking.save')}}">
                            @csrf

                            <input type="hidden" name="package_id" value="{{$package->id}}">

                            <div class="booking-form">
                                <div class="form-checkout " id="form-checkout">
                                    <div class="form-section">

                                        <div class="row">

                                            <div class="col s6">
                                                <h6>Accommodation Details</h6>
                                                <hr>

                                                {{--<div class="input-field ">--}}
                                                {{--<select class="browser-default  form-control rooms-select"--}}
                                                {{--name="no_of_adults" required>--}}
                                                {{--<option value="" disabled selected>No of adults</option>--}}
                                                {{--<option value="1">1</option>--}}
                                                {{--<option value="2">2</option>--}}
                                                {{--<option value="3">3</option>--}}
                                                {{--<option value="4">4</option>--}}
                                                {{--<option value="5">5</option>--}}
                                                {{--<option value="6">6</option>--}}
                                                {{--</select>--}}
                                                {{--</div>--}}

                                                <div class="input-field ">
                                                    <select class="browser-default form-control rooms-select"
                                                            id="nrGames"
                                                            name="no_of_rooms" required>
                                                        <option value="" disabled selected>No of Rooms</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>

                                                    </select>
                                                </div>

                                                <div class="input-field " id="games">


                                                </div>


                                                {{--<div class="input-field ">--}}
                                                {{--<select class="browser-default  form-control rooms-select"--}}
                                                {{--name="no_of_children">--}}
                                                {{--<option value="" disabled selected>No of childrens</option>--}}
                                                {{--<option value="1">1</option>--}}
                                                {{--<option value="2">2</option>--}}
                                                {{--<option value="3">3</option>--}}
                                                {{--<option value="4">4</option>--}}
                                                {{--<option value="5">5</option>--}}
                                                {{--<option value="6">6</option>--}}
                                                {{--</select>--}}
                                                {{--</div>--}}

                                            </div>

                                            <div class="bedding col s6">
                                                <img src="images/bed1.jpg" width="300px" alt="">
                                            </div>

                                        </div>


                                        <div class="col-sm-6">

                                            <h4>Optional Tours</h4>
                                            <div style="overflow-x:auto;">
                                                <table
                                                    class="table table-striped table-condensed dates-tabel table-bordered">

                                                    <tbody>
                                                    <tr>
                                                        <td>Tour Name</td>
                                                        <td>Price</td>
                                                        <td>Total per PAX
                                                        </td>
                                                    </tr>
                                                    @foreach($package->package_options as $value)
                                                        <tr>

                                                            <td>


                                                                <input name="package_options[]" multiple
                                                                       value="{{$value->id}}" type="checkbox"
                                                                       class="form-check-input"
                                                                       id="chkPasspo" style="margin-top:1px">
                                                                <a href="#"
                                                                   style="margin-left:25px"> {{$value->name}}</a>

                                                            </td>
                                                            <td>${{$value->price}}</td>
                                                            <td>
                                                                <div class="input-field ">
                                                                    <select
                                                                        class="browser-default  form-control rooms-select"
                                                                        name="no_of_pax[]" multiple>
                                                                        <option value="" disabled selected>No of PAX
                                                                        </option>
                                                                        <option value="1">1</option>
                                                                        <option value="2">2</option>
                                                                        <option value="3">3</option>
                                                                        <option value="4">4</option>
                                                                        <option value="5">5</option>
                                                                        <option value="6">6</option>
                                                                    </select>
                                                                </div>
                                                            </td>

                                                        </tr>
                                                    @endforeach

                                                    </tbody>
                                                </table>
                                            </div>

                                        </div>

                                        <div class="row">


                                            <div class="room_1">

                                            </div>

                                            <div class="room_2">

                                            </div>

                                            <div class="room_3">

                                            </div>

                                            <div class="room_4">

                                            </div>


                                        </div>
                                    </div>
                                    <div class="form-section">
                                        <h4 class="form-section-title">Select Payment Method</h4>
                                        <div class="gateways-table accordion" id="accordionExample">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h4 class="mb-0">
                                                        <label class="" data-toggle="collapse"
                                                               data-target="#gateway_offline_payment">
                                                            <input type="radio" name="payment_method"
                                                                   value="1">
                                                            Payment upon Arrival
                                                        </label>
                                                    </h4>
                                                </div>
                                                <div id="gateway_offline_payment" class="collapse"
                                                     aria-labelledby="headingOne" data-parent="#accordionExample">
                                                    <div class="card-body">
                                                        <div class="gateway_name">
                                                            Offline Payment
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label class="term-conditions-checkbox">
                                            <input type="checkbox" name="term_conditions"> I have read and accept the <a
                                                target="_blank" href="https://cvc.vacations/page/about-us">terms and
                                                conditions</a>
                                        </label>
                                    </div>
                                    <div class="form-group">

                                    </div>
                                    <div class="html_before_actions"></div>

                                    <p class="alert-text mt10" v-show=" message.content" v-html="message.content"
                                       :class="{'danger':!message.type,'success':message.type}"></p>

                                    <div class="form-actions">
                                        <button class="btn btn-danger" @click="doCheckout">Submit
                                            <i class="fa fa-spin fa-spinner" v-show="onSubmit"></i>
                                        </button>
                                    </div>
                                </div>

                            </div>
                        </form>
                    </div>
                    <div class="col-md-4">
                        <div class="booking-detail">
                            <div class="booking-review">
                                <h4 class="booking-review-title">Your Booking</h4>
                                <div class="booking-review-content">
                                    <div class="review-section">
                                        <div class="service-info">
                                            <div>
                                                <h3 class="service-name"><a href="#">{{$package->name}}</a></h3>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="review-section">
                                        <ul class="review-list">
                                            <li>
                                                <div class="label">Start date:</div>
                                                <div class="val">
                                                    &nbsp;{{$package->package_prices->first()->date}}
                                                </div>
                                            </li>
                                            <li>
                                                <div class="label">Duration:</div>
                                                <div class="val">
                                                    {{$package->duration}}
                                                </div>
                                            </li>
                                            <!--   <li>
                                                  <div class="label">Guests:</div>
                                                  <div class="val">
                                                      1
                                                  </div>
                                              </li> -->

                                        </ul>
                                    </div>

                                    <div class="review-section total-review">
                                        <ul class="review-list">
                                            <li>
                                                <div class="label">Guests: 1 * $0</div>
                                                <div class="val">
                                                    $0
                                                </div>
                                            </li>
                                            <li class="final-total">
                                                <div class="label">Total:</div>
                                                <div class="val total_label">$0</div>
                                            </li>
                                        </ul>
                                    </div>
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
                            <div class="col-xs-12  col-md-7 col-lg-6">
                                <div class="media ">
                                    <div class="media-left hidden-xs">
                                        <i class="icofont-hill"></i>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading">Get Updates &amp; More</h4>
                                        <p>Thoughtful thoughts to your inbox</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-5 col-lg-6">
                                <form action="https://cvc.vacations/newsletter/subscribe"
                                      class="subcribe-form bravo-subscribe-form bravo-form">
                                    <input type="hidden" name="_token" value="w1XuYo8pQUNLhOdXlMegxKHODEb1l5wpFpKRtE2v">
                                    <div class="form-group">
                                        <input type="text" name="email" class="form-control email-input"
                                               placeholder="Your Email">
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
                        <img src="https://cvc.vacations/images/ico_close.svg" alt="close">
                    </i>
                </span>
                </div>
                <div class="modal-body relative">
                    <form class="bravo-form-login" method="POST" action="https://cvc.vacations/login">
                        <input type="hidden" name="_token" value="w1XuYo8pQUNLhOdXlMegxKHODEb1l5wpFpKRtE2v">
                        <div class="form-group">
                            <input type="text" class="form-control" name="email" autocomplete="off"
                                   placeholder="Email address">
                            <i class="input-icon fa fa-envelope-o"></i>
                            <span class="invalid-feedback error error-email"></span>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password" autocomplete="off"
                                   placeholder="Password">
                            <i class="input-icon fa fa-lock"></i>
                            <span class="invalid-feedback error error-password"></span>
                        </div>
                        <div class="form-group">
                            <div class="d-flex justify-content-between">
                                <label for="remember-me" class="mb0">
                                    <input type="checkbox" name="remember" id="remember-me" value="1"> Remember me <span
                                        class="checkmark fcheckbox"></span>
                                </label>
                                <a href="https://cvc.vacations/password/reset">Forgot Password?</a>
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
                        <div class="c-grey font-medium f14 text-center"> Do not have an account? <a href=""
                                                                                                    data-target="#register"
                                                                                                    data-toggle="modal">Sign
                                Up</a>
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
                        <img src="https://cvc.vacations/images/ico_close.svg" alt="close">
                    </i>
                </span>
                </div>
                <div class="modal-body">
                    <form class="form bravo-form-register" method="post">
                        <input type="hidden" name="_token" value="w1XuYo8pQUNLhOdXlMegxKHODEb1l5wpFpKRtE2v">
                        <div class="row">
                            <div class="col-lg-6 col-md-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="first_name" autocomplete="off"
                                           placeholder="First Name">
                                    <i class="input-icon field-icon fa"><img
                                            src="https://cvc.vacations/images/ico_fullname_signup.svg"></i>
                                    <span class="invalid-feedback error error-first_name"></span>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="last_name" autocomplete="off"
                                           placeholder="Last Name">
                                    <i class="input-icon field-icon fa"><img
                                            src="https://cvc.vacations/images/ico_fullname_signup.svg"></i>
                                    <span class="invalid-feedback error error-last_name"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="company_name" autocomplete="off"
                                           placeholder="Company Name">
                                    <i class="input-icon field-icon fa"><img
                                            src="https://cvc.vacations/images/ico_fullname_signup.svg"></i>
                                    <span class="invalid-feedback error error-company_name"></span>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="company_url" autocomplete="off"
                                           placeholder="Company Url">
                                    <i class="input-icon field-icon fa"><img
                                            src="https://cvc.vacations/images/ico_fullname_signup.svg"></i>
                                    <span class="invalid-feedback error error-company_url"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="city" autocomplete="off"
                                           placeholder="City">
                                    <i class="input-icon field-icon fa"><img
                                            src="https://cvc.vacations/images/ico_fullname_signup.svg"></i>
                                    <span class="invalid-feedback error error-city"></span>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="phone" autocomplete="off"
                                           placeholder="Phone">
                                    <i class="input-icon field-icon fa"><img
                                            src="https://cvc.vacations/images/ico_fullname_signup.svg"></i>
                                    <span class="invalid-feedback error error-phone"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="address" autocomplete="off"
                                           placeholder="Address">
                                    <i class="input-icon field-icon fa"><img
                                            src="https://cvc.vacations/images/ico_fullname_signup.svg"></i>
                                    <span class="invalid-feedback error error-address"></span>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="address2" autocomplete="off"
                                           placeholder="Address 2">
                                    <i class="input-icon field-icon fa"><img
                                            src="https://cvc.vacations/images/ico_fullname_signup.svg"></i>
                                    <span class="invalid-feedback error error-address2"></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" autocomplete="off"
                                   placeholder="Email *">
                            <i class="input-icon field-icon fa"><img
                                    src="https://cvc.vacations/images/ico_email_login_form.svg"></i>
                            <span class="invalid-feedback error error-email"></span>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password" autocomplete="off"
                                   placeholder="Password *">
                            <i class="input-icon field-icon fa"><img
                                    src="https://cvc.vacations/images/ico_pass_login_form.svg"></i>
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
                                <span class="spinner-grow spinner-grow-sm icon-loading" role="status"
                                      aria-hidden="true"></span>
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
                                    <input type="text" placeholder="Search file name...." class="form-control"
                                           v-model="filter.s" @keyup.enter="filter.page = 1;reloadLists()">
                                </div>
                                <div class="filter-item">
                                    <button class="btn btn-default" @click="filter.page = 1;reloadLists()">
                                        <i class="fa fa-search"></i> Search
                                    </button>
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
                            <file-item v-for="(file,index) in files" :key="index" :view-type="viewType"
                                       :selected="selected" :file="file" v-on:select-file="selectFile"></file-item>
                        </div>
                        <p class="no-files-text text-center" v-show="!total && apiFinished" style="display: none">No
                            file found</p>
                        <div class="text-center" v-if="totalPage > 1">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination">
                                    <li class="page-item" :class="{disabled:filter.page <= 1}">
                                        <a class="page-link" v-if="filter.page <=1">Previous</a>
                                        <a class="page-link" href="#" v-if="filter.page > 1"
                                           v-on:click="changePage(filter.page-1,$event)">Previous</a>
                                    </li>
                                    <li class="page-item" v-if="p >= (filter.page-3) && p <= (filter.page+3)"
                                        :class="{active: p == filter.page}" v-for="p in totalPage"
                                        @click="changePage(p,$event)">
                                        <a class="page-link" href="#">p</a></li>
                                    <li class="page-item" :class="{disabled:filter.page >= totalPage}">
                                        <a v-if="filter.page >= totalPage" class="page-link">Next</a>
                                        <a href="#" class="page-link" v-if="filter.page < totalPage"
                                           v-on:click="changePage(filter.page+1,$event)">Next</a>
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
                            <button class="btn btn-primary" :class="{disabled:!selected.length}" @click="sendFiles">Use
                                file
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/x-template" id="file-item-template">
        <div class="file-item" :class="fileClass(file)">
            <div class="inner" :class="{active:selected.indexOf(file.id) !== -1 }" @click="selectFile(file)"
                 :title="file.file_name">
                <div class="file-thumb" v-if="viewType=='grid'" v-html="getFileThumb(file)">
                </div>
                <div class="file-name">ile.file_name</div>
                <span class="file-checked-status" v-show="selected.indexOf(file.id) !== -1">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path
                        d="M186.301 339.893L96 249.461l-32 30.507L186.301 402 448 140.506 416 110z"/></svg>
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
        window.addEventListener('LazyLoad::Initialized', function (event) {
            window.lazyLoadInstance = event.detail.instance;
        }, false);
    </script>
    <script src="{{ asset('frontend/libs/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('frontend/libs/vue/vue.js') }}"></script>
    <script src="{{ asset('frontend/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('frontend/module/media/js/browser.js') }}"></script>
    <script src="{{ asset('frontend/libs/carousel-2/owl.carousel.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/libs/daterange/moment.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/libs/daterange/daterangepicker.min.js') }}"></script>
    <script src="{{ asset('frontend/js/functions.js') }}"></script>
    <script src="{{ asset('frontend/js/home.js') }}"></script>

    <script src="{{ asset('frontend/module/booking/js/checkout.js') }}"></script>

    <script type="text/javascript">

        var room_number = 0;
        var total = 0;

        var solo_price = '{{ $package_price->solo }}';
        var p_p = '{{ $package_price->p_p }}';
        var three_person = '{{ $package_price->three_person }}';
        var sgl = '{{ $package_price->sgl }}';

        jQuery(function () {
            $.ajax({
                'url': bookingCore.url + '/booking/b8402bb9a01e4b021fbd627686dbe691/check-status',
                'cache': false,
                'type': 'GET',
                success: function (data) {
                    if (data.redirect !== undefined && data.redirect) {
                        window.location.href = data.redirect
                    }
                }
            });
        });

        $(document).delegate('#nrGames', 'change', function () {
            room_number = $(this).val();
            var value = +$(this).val();
            var nr = 0;
            var elem = $("#games").empty();
            while (nr < value) {
                $('.room_1').html('');
                $('.room_2').html('');
                $('.room_3').html('');
                $('.room_4').html('');

                elem.append(
                    $(
                        '<select data-number="' + parseInt(nr + 1) + '" name="room_type[]" class="browser-default form-control rooms-select room_type ff' + parseInt(nr + 1) + '"> <option value="" disabled selected>Room Type</option><option value="1">Single</option><option value="2">Double</option><option value="3">Triple</option> </select>', {
                            name: "Team1Player" + nr
                        }
                    )
                );
                nr++;
            }
        });

        $(document).delegate('.room_type', 'change', function () {
            $('.room_' + $(this).data('number')).html('');
            for (var i = 0; i < $(this).val(); i++) {
                $('.room_' + $(this).data('number')).append($('.clone_div').html());
            }
            calculate();
        });

        function calculate() {
            total = 0;

            if (room_number == 1 && $('.ff1').val() == 1) {
                total = solo_price;
            } else {
                for (var i = 1; i < 5; i++) {
                    f($('.ff' + i).val());
                }
            }

            $('.total_label').text('$ ' + total);
        }

        function f(val) {

            if (val > 0) {

                if (val == 1) {
                    total = parseInt(sgl) + parseInt(total);
                } else if (val == 2) {
                    total = parseInt(p_p) * 2 + parseInt(total);
                } else {
                    total = parseInt(three_person) * 3 + parseInt(total);
                }

            }
        }
    </script>
</div>
</body>

</html>
