@extends('Frontend.main')

@section('content')    
    

    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-154435778-1');
    </script>


    <style id="custom-css">
  
    </style>
    <link href="http://cvc.vacations/libs/carousel-2/owl.carousel.css" rel="stylesheet">

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
                    <img src="{{ asset('storage/tmp/uploads/'.\App\Images::find($setting['about[imgAbout]'])->file_path) }}" width="2000px" height="500px" alt="">

                </div>

                <div class="container ">
                    <div class="blog-content ">
                    {!! $setting['about[content]'] !!}
                       
                        
                        


                    </div>
                </div>
                @endsection
