<!DOCTYPE html>
<html>
<head>
	<title>HRM</title>
	<meta charset="UTF-8">
	  <meta name="description" content="">
	  <meta name="keywords" content="">
	  <meta name="author" content="">
	  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	      {{-- {!! HTML::style("https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all", array("name" => "core"))!!} --}}
    {!! HTML::style("https://fonts.googleapis.com/css?family=Nunito:300,400,600,700,800,900&display=swap", array("name" => "core"))!!}
    {!! HTML::style('front_assets/plugins/bootstrap/css/bootstrap.min.css') !!}
    {!! HTML::style('front_assets/css/style.css?v=1') !!}
    {!! HTML::style('front_assets/plugins/line-icons/line-icons.css') !!}
    {!! HTML::style('front_assets/plugins/font-awesome/css/font-awesome.min.css') !!}
    {!! HTML::style('assets/global/plugins/uniform/css/uniform.default.min.css')!!}
    {!! HTML::style('assets/global/plugins/froiden-helper/helper.css') !!}
    {!! HTML::style('front_assets/css/pages/page_log_reg_v2.css') !!}
    {!! HTML::style('front_assets/css/custom.css') !!}
    {!! HTML::style('assets/global/plugins/bootstrap-toastr/toastr.min.css') !!}
    {!! HTML::style('front_assets/css/profileentry.css') !!}
</head>
<body>


<!-- #START custom Header -->
	<div class="header">
	        <!-- Navbar -->
	        <div class="navbar navbar-default mega-menu dashboard-inner-navbar" role="navigation">
	            <div class="container">
	                <div class="navbar-header">
	                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
	                        <span class="sr-only">Toggle navigation</span>
	                        <span class="fa fa-bars"></span>
	                    </button>
	                    <a class="navbar-brand" href="{{ route('dashboard.index')}}">
	                        <span class="logo">
	                          <img src="{{ asset('assets/site/images/logo.png') }}" alt="">
	                        </span>
	                    </a>
	                </div>
	                <div class="collapse navbar-collapse navbar-responsive-collapse">
	                    <ul class="nav navbar-nav">
	                            <li class="active">
	                                <a href="{{ route('dashboard.index')}}">Home</a>
	                            </li>
	                            <li class="active">
	                                <a href="{{ route('front.employee_profile')}}">Profile</a>
	                            </li>
	                                <li class="dropdown ">
	                                    <a href="{{route('leaves.index')}}" class="dropdown-toggle" data-toggle="dropdown">Leaves</a>
	                                    <ul class="dropdown-menu">
	                                        <li><a href="" onclick="leaveModal();return false;"> Apply Leave</a></li>
	                                        <li><a href="{{route('leaves.index')}}"> My Leaves</a></li>
	                                    </ul>
	                                </li>
	                            <li class=" ">
	                                 <a href="{{ route('front.salary')}}">Payroll</a>
	                            </li>
	                            <li class="">
	                                    <a href="{{ route('front.attendance.index')}}">Attendance</a>
	                                </li>
<li class="dropdown ">
	                            <a href="" class="dropdown-toggle" data-toggle="dropdown">My Account</a>
	                            <ul class="dropdown-menu">
	                                                                    <li>
	                                        <a href="{{ route('front.logout')}}">Logout</a>
	                                    </li>
	                                     </ul>
	                        </li>
	                        </ul>
	                </div>
	            </div>
	        </div>
</div>

			<!-- # custom Header -->


			<!-- #START - Disabling the below header -->
	<!-- <nav class="navbar navbar-default dashboard-navbar">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">
            <span class="logo">
              <img src="{{ asset('assets/site/images/logo.png') }}" alt="">
            </span>
          </a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
          	<li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Websoft <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Create/Manage Companies</a></li>
                <li><a href="#">Websoft</a></li>
              </ul>
            </li>
            <li class="active"><a href="#">Profiles</a></li>
            <li><a href="{{ route('front.salary')}}">Payroll</a></li>
            <li><a href="{{route('leaves.index')}}">Leave</a></li>
            <li><a href="#">Integrations</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#" class="trail">30 Days left in Trial (SUITE)</a></li>
            <li><a href="#"><i class="fa fa-credit-card"></i> Billing</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Admin <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Account Settings</a></li>
                <li><a href="{{route('front.logout')}}">Sign out of HRM</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav> -->
<!-- #END - Disabling the below header -->
    <section class="fixed-dashboard">
    	<div class="container">
    		<div class="row">
    			<div class="col-md-12">
    				<div class="emp-item">
    					<ul class="">
	    					<li class="item-box"><a href="{{ route('front.employee_profile')}}"><img src="https://img.icons8.com/bubbles/100/000000/user.png"><h3>Profiles</h3></a></li>
	    					<li class="item-box"><a href="{{ route('front.salary')}}"><img src="https://img.icons8.com/bubbles/100/000000/money-bag.png"><h3>Payroll</h3></a></li>
	    					<li class="item-box"><a href="{{route('leaves.index')}}"><img src="https://img.icons8.com/bubbles/100/000000/planner.png"><h3>Leave</h3></a></li>
	    				</ul>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>


{!! HTML::script('front_assets/plugins/jquery/jquery.min.js')!!}
{!! HTML::script('front_assets/plugins/bootstrap/js/bootstrap.min.js')!!}

<script>
  AOS.init();
</script>
</body>
</html>
