<!DOCTYPE html>
<!--[if IE 8]>
<html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]>
<html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en"> <!--<![endif]-->
    <head>
        <title> HRM - Login Page</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

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
        {!! HTML::style('front_assets/css/custom-login-styles.css') !!}
    </head>

    <body>
        {{-----------------MAINTENANCE CHECK----------------}}
        @include('maintenance_check')
        {{----------------MAINTENANCE CHECK----------------}}
        <!--=== Content Part ===-->
        <section class="login-wrapper">

            <div id="stripes-login" aria-hidden="true">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>



            <div class="container">




                @if(session()->get( 'login_type' ) == 'incorrect')
                <!-- BEGIN FORGOT PASSWORD FORM -->
                <div class="reg-block">
                    <div class="reg-block-header">
                        {!! Form::open(['url' => '', 'method' => 'post','class'=>'forget-form']) !!}
                        <h3>Forgot Password?</h3>

                        <p>
                            Enter your e-mail address below to reset your password.
                        </p>

                        <div id="alert_forget">

                        </div>
                        <div class="form-group">
                            <div>
                                <div class="input-group ">
                                    <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                    <input type="email" class="form-control" name="email"
                                           placeholder="{{trans('core.email')}}" required>
                                </div>
                            </div>
                        </div>

                        <div class="form-actions rem">
                            <!--                            <button type="button" id="back-btn" class="btn">
                                                            <i class="m-icon-swapleft"></i> Back
                                                        </button>-->
                            <a href="{{ route('login') }}">Back</a>
                            <button type="submit" class="btn-u blue pull-right" id="submitbutton_forget"
                                    onclick="forgetPassword(); return false;">
                                Submit <i class="m-icon-swapright m-icon-white"></i>
                            </button>
                        </div>                    </div>
                </div>

                {!! Form::close() !!}

                <!-- # BEGIN FORGOT PASSWORD FORM -->
                @else
                <div class="reg-block">
                    <div class="reg-block-header">
                        <h2>Sign in to HRMS</h2>
                    </div>
                    <!-- <form id='form-new' class ='form-new' action="{{ route('front.login_step_2') }}"> -->
                    <!-- <form id='form-new' class ='form-new' action="{{ route('front.login_step') }}"> -->
                    <form method="post" action="{{ route('front.login_step') }}">
                        {{ csrf_field() }}

                        <div class="form-group rem margin-bottom-20">

                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                <input type="email" class="form-control" name="email" placeholder="{{ trans('core.email') }}" required @if(session()->get( 'login_type' ) == 'incorrect') value="{{session()->get( 'email' )}} @endif">
                            </div>
                        </div>
                        <!-- <button type="submit" class="btn-u btn-block input-group" id="submitbutton" onclick="login(); return false;">Continue</button> -->
                        <button type="submit" class="btn-u btn-block input-group" id="submitbutton">Continue</button>
                    </form>
                    <div class="alert">
                        {{-- @if(session()->get( 'login_type' ) == 'incorrect') --}}
<!--                        <p>Username OR Password Incorret ! You can reset it by clicking</p>
                        <a href="{{ route('front.forget_password') }}">Forgot Password</a>-->
                        {{-- @else --}}
                        <p>If your account has not been activated before, you should activate it through the activation email we sent you. If you did not receive the email, you may request for a new activation email.</p>
                        {{-- @endif --}}
                    </div>
                </div>
                @endif








                <!--Reg Block-->




                <!-- <div class="notification-container" style="position: relative; top: 45%; left: 50%;">
                    @if($status == 'new')
                    <a href="{{route('signup')}}">Sign Up</a>
                    @else
                    {{-- No Match --}}
                    @endif
                </div> -->
            </div>
        </section>

        {!! HTML::script('front_assets/plugins/jquery/jquery.min.js')!!}
        {!! HTML::script('front_assets/plugins/jquery/jquery-migrate.min.js')!!}
        {!! HTML::script('front_assets/plugins/bootstrap/js/bootstrap.min.js')!!}
        {!! HTML::script('assets/global/plugins/uniform/jquery.uniform.min.js')!!}
        {!! HTML::script('front_assets/plugins/back-to-top.js')!!}
        {!! HTML::script('front_assets/plugins/backstretch/jquery.backstretch.min.js')!!}
        {!! HTML::script('assets/global/plugins/jquery.blockui.min.js') !!}
        {!! HTML::script('assets/global/plugins/bootstrap-toastr/toastr.min.js') !!}
        {!! HTML::script('assets/global/plugins/froiden-helper/helper.js')!!}

        <!--[if lt IE 9]>
        {!!  HTML::script('front_assets/plugins/respond.js') !!}
        {!!  HTML::script('front_assets/plugins/html5shiv.js')   !!}
        {!!  HTML::script('front_assets/js/plugins/placeholder-IE-fixes.js')!!}


        <![endif]-->
        <!-- JS Customization -->


        <script>
            {{--
                    function login() {
                    console.log('clicked!');
                    $.easyAjax({
                    url: "{!! route('front.login_step_1') !!}",
                            type: "POST",
                            data: $(".form-new").serialize(),
                            container: ".form-new",
                            messagePosition: "inline"
                    });
                    console.log('clicked-end!')
                    }
            --}}



            function forgetPassword() {
            $.easyAjax({
            url: "{!! route('front.forget_password') !!}",
                    type: "POST",
                    data: $(".forget-form").serialize(),
                    container: ".forget-form",
                    messagePosition: "inline",
                    removeElements: true
            });
            }


        </script>



