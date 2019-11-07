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

                <!--Reg Block-->

                <div class="reg-block">
                    <div class="reg-block-header">
                        <h2>Sign in to Hrms</h2>
                    </div>
                    <!-- <form id='form-new' class ='form-new' action="{{ route('front.login_step_2') }}"> -->
                    <!-- <form id='form-new' class ='form-new' action="{{ route('front.login_step') }}"> -->
                    <form method="post" action="{{ route('front.login_step_2') }}">
                        {{ csrf_field() }}

                        <div class="form-group rem margin-bottom-20">

                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                <input type="hidden" class="form-control" name="email" value="{{$email}}">                                
                                
                                <input type="hidden" class="form-control" name="role" value="{{$role}}">

                                <input type="password" class="form-control" name="password" placeholder="Password" required>
                            </div>
                        </div>
                        <!-- <button type="submit" class="btn-u btn-block input-group" id="submitbutton" onclick="login(); return false;">Continue</button> -->
                        <button type="submit" class="btn-u btn-block input-group" id="submitbutton">Login</button>
                    </form>


                    <div class="fgt-password">
                        <a href="#">Forgot password</a>
                    </div>

                </div>
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

        {{--
        <script>

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
                                </script>
--}}
