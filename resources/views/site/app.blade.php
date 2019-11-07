<!DOCTYPE html>
<html lang="en" xmlns:og="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content=""/>

    <meta name="keywords" content=""/>
    {{-- <title>{{$setting->main_name}}</title> --}}
    <title>HRMS</title>
	<!-- core CSS -->
    <link href="{{ asset('https://fonts.googleapis.com/css?family=Nunito:300,400,600,700,800,900&display=swap') }}" rel="stylesheet">
    <link href="{{ asset('assets/site/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/site/css/animate.min.css') }}" rel="stylesheet">
    {{--<link href="{{ asset('assets/site/css/prettyPhoto.css') }}" rel="stylesheet">--}}
    <link href="{{ asset('assets/site/css/main.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/site/css/responsive.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/site/css/style.css') }}" rel="stylesheet">

{!! HTML::style('https://unpkg.com/aos@2.3.1/dist/aos.css') !!}
    <!--[if lt IE 9]>
    <script src="{{ asset('assets/site/js/html5shiv.js') }}"></script>
    <script src="{{ asset('assets/site/js/respond.min.js') }}"></script>
    <![endif]-->
    {{-- <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ asset('assets/site/images/ico/apple-touch-icon-144-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ asset('assets/site/images/ico/apple-touch-icon-114-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ asset('assets/site/images/ico/apple-touch-icon-72-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" href="{{ asset('assets/site/images/ico/apple-touch-icon-57-precomposed.png') }}">

    <meta property="og:title" content="HRMS" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ isset($_SERVER["HTTPS"]) ? 'https' : 'http' }}://{{ $_SERVER['HTTP_HOST'] }}" />
    <meta property="og:image" content="{{ asset("assets/site/images/ogimage.png") }}" />
    <meta property="og:site_name" content="HRMS" />
    <meta property="og:description" content="Cloud based HR Management solution for small and medium businesses with which you can manage leaves, attendance, payroll, expenses, awards and employee information"/> --}}

    @yield("css")
</head><!--/head-->

<body class="homepage">

    <div class="navbar-wrapper my-navbar">
      <div class="container">

        <nav class="navbar navbar-inverse navbar-static-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="{{ route('home')}}">
                <span class="logo">
                  <img src="{{ asset('assets/site/images/logo.png') }}" alt="">
                </span>
                <span class="logo-dark">
                  <img src="{{ asset('assets/site/images/logo-dark.png') }}" alt="">
                </span>
              </a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li class="active"><a href="{{ route('home')}}">Home</a></li>
                <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Products <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                            <li><a href="{{ route('profilesfront')}}">Profiles</a></li>
                            <li><a href="{{ route('payrollfront')}}">Payroll</a></li>
                            <li><a href="{{ route('leavefront')}}">Leave</a></li>
                    </ul>
                </li>
                <li><a href="{{ route('pricingfront')}}">Pricing</a></li>
                <li><a href="#">Integrations</a></li>
                <li><a href="{{ route('contactfront')}}">Help</a></li>
                <li><a href="#try-plan">Try Free Plan</a></li>
                <li><a href="{{ route('login') }}" class="btn btn-style-1">Login</a></li>
              </ul>
            </div>
          </div>
        </nav>

      </div>
    </div>


@yield("content")

<footer class="ptb-60">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <h3>HOW CAN WE HELP?</h3>
                <ul>
                    <li><a href="#">Knowledge Centre</a></li>
                    <li><a href="#">Contact Us</a></li>
                </ul>
            </div>
            <div class="col-md-3">
                <h3>ONLINE TOOLS & CALCULATORS</h3>
                <ul>
                    <li><a href="#">CPF Calculator</a></li>
                    <li><a href="#">MPF Calculator</a></li>
                    <li><a href="#">Salary Proration Calculator</a></li>
                    <li><a href="#">Foreign Worker Levy Calculator</a></li>
                </ul>
            </div>
            <div class="col-md-3">
                <h3>ABOUT HRM</h3>
                <ul>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Media</a></li>
                </ul>
            </div>
            <div class="col-md-3">
                <h3>COLLABORATION</h3>
                <ul>
                    <li><a href="#">Partners Program</a></li>
                    <li><a href="#">Payroll Experts</a></li>
                    <li><a href="#">Affiliates</a></li>
                    <li><a href="#">Apply as a Partner</a></li>
                </ul>
            </div>
        </div>

        <div class="row footer-social">
            <div class="col-md-12">
                <h3>CONNECT WITH US</h3>
                <div class="social-icon">
                    <i class="fa fa-twitter"></i>
                    <i class="fa fa-facebook"></i>
                    <i class="fa fa-linkedin"></i>
                    <i class="fa fa-slideshare"></i>
                </div>
            </div>
        </div>
    </div>
</footer>

<div class="copyright">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="copy">© 2019 HRMS PTE LTD</div>
                    <div class="privacy">
                        <a href="#">Privacy Policy</a>
                        <a href="#">Terms of Service</a>
                    </div>
            </div>
        </div>
    </div>
</div>

<!-- <section id="bottom">
        <div class="container" data-wow-duration="1000ms" data-wow-delay="600ms">
            <div class="row">
                 <div class="col-md-6 col-sm-12">
                    <img src="{{$setting->logo_image_url}}" height="50px">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="widget">
                                <p style="padding: 15px 0;">{{ $setting->main_name }} is an HR Management solution designed to make common tasks faster and your life easier.</p>
                            </div>
                        </div>

                        <div class="col-md-6 col-sm-12">
                            <em class="bg-warning">...while extraordinary products and unique services still afford a competitive advantage, the one advantage that stands the test of time...is people.<br/><br/>
                                &horbar; Mark Salsbury</em>

                        </div>
                    </div>
                </div> 

                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <h3>{{ $setting->main_name }}</h3>
                        <ul>
                            <li><a href="{{-- route("pricing") --}}">Pricing</a></li>
                            <li><a href="{{-- route("features") --}}">Features</a></li>
                        </ul> 
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <h3>Support</h3>
                         <ul>
                            <li><a href="{{-- route("termsOfService") --}}">Terms of Service</a></li>
                            <li><a href="{{-- route("privacyPolicy") --}}">Privacy Policy</a></li>
                            <li><a href="{{-- route("support") --}}">Contact Us</a></li>
                        </ul> 
                    </div>
                </div>

            </div>
        </div>
    </section>  -->


    <script src="{{ asset('assets/site/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/site/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/site/js/main.min.js') }}"></script>
    <script src="{{ asset('assets/site/js/wow.min.js') }}"></script>
    <script src="{{ asset('assets/site/js/jquery.blockui.min.js') }}"></script>
    <script src="{{ asset('assets/site/js/custom.min.js') }}"></script>
    <script src="{{ asset('assets/site/js/style.js') }}"></script>
    {!! HTML::script("https://unpkg.com/aos@2.3.1/dist/aos.js")!!}
<script>
  AOS.init();
</script>
<script>
    $(document).ready(function(){
        // if($('.front-inner-banner.grey').length >0){
        //     $(this).addClass('blue-header');
        // }
        $('.front-inner-banner.grey').parent('.homepage').addClass('blue');
    });
</script>
    @yield("javascript")
</body>
</html>
