<div class="bravo_topbar">
    <div class="container">
        <div class="content">
            <div class="topbar-left">

                <a href="{{ url('/') }}" class="bravo-logo">
                    <img src="{{ asset('storage/tmp/uploads/'.\App\Images::find($setting['site[logo]'])->file_path) }}" alt="sandpad">


                </a>


                <h6 class="slogin"> Your Luxury DMC in Turkey </h6>
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
                        <li class="hidden-xs hidden-sm"><a href="mailto:info@cvc.vacations" target="">info@to-istanbultours.com
                            </a>
                        </li>
                    </ul>
                    <ul class="topbar-items">
                        <ul class="topbar-items">
                            <li class="login-item">
                                <a href="#login" data-toggle="modal" data-target="#login" class="login  btn btn-info">Login</a>
                            </li>

                        </ul>
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
                        <li class="   "><a target="" href="{{ url('destinations') }}">Destinations </a>
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
            <ul>
                <li>
                    <a href="">
                        <i class="icofont-user-suited"></i> Hi,
                    </a>
                </li>
                <li>
                    <a href="">
                        <i class="icon ion-md-construct"></i> My profile
                    </a>
                </li>
                <li>
                    <a href=""><i class="icon ion-ios-ribbon"></i> Dashboard</a>
                </li>
                <li>
                    <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="fa fa-sign-out"></i> Logout
                    </a>
                    <form id="logout-form" action="" method="POST" style="display: none;">
                        <input type="hidden" name="_token" value="rpIsegRg9AWQquQ8f0S0UzRjdI51mdPWVAwziRyx">
                    </form>
                </li>
            </ul>
        </div>
        <div class="g-menu">
            <ul class="main-menu menu-generated">
                <li class=""><a target="" href="/">Home</a></li>
                <li class="   "><a target="" href="/page/destinations">Destinations <i class="fa fa-angle-down"></i></a>
                    <ul class="children-menu menu-dropdown">
                        <li class=" "><a target="" href="">Cairo</a></li>
                        <li class="  "><a target="" href="">Luxor</a></li>
                        <li class="  "><a target="" href="">Aswan</a></li>
                        <li class=" "><a target="" href="">Alexandria</a></li>
                        <li class=" "><a target="" href="">Sharm
                                El-Sheikh</a></li>
                        <li class=" "><a target="" href="">Sahl Hasheesh</a>
                        </li>
                    </ul>
                </li>
                <li class="    ">
                    <a target="" href="/tour"></a>
                </li>
                <li class="  "><a target="" href="">About Us</a></li>
                <li class=""><a target="" href="/contact">Contact Us</a></li>
            </ul>
        </div>
    </div>
</div>
