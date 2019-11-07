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



{{-- Request::get('email') --}}


  {!!  Form::open(array('id'=>'login-form-new', 'class'=>'login-form-new', 'method'=>'get'))  !!}

<input type="hidden" class="form-control" name="email" value="{{ Request::get('email') }}">
<!-- <input type="hidden" class="form-control" name="role" value="{{ Request::get('role') }}"> -->


<div class="form-group rem margin-bottom-20">
    <div>
        <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-lock"></i></span>
            <input type="password" class="form-control" name="password"
                   placeholder="{{ trans('core.password') }}"
                   required>
        </div>
    </div>
</div>


<div class="row">
    <div class="col-md-12">
                <button type="submit" class="btn-u btn-block input-group" id="submitbutton"
                        onclick="ajax_common_login_trigger(); return false;">{{trans('core.btnLogin')}}</button>

    </div>
</div>

<hr>
<div class="forget-password">
    <h4>Forgot your password?</h4>

    <p>
        no worries, click <a href="javascript:;" id="forget-password">
            here </a>
        to reset your password.
    </p>
</div>


  {!!  Form::close()!!}

</body>


<script>

function ajax_common_login_trigger(){
  $.easyAjax({
      url: "{!! route('front.ajax_common_login') !!}",
      type: "POST",
      data: $(".login-form-new").serialize(),
      container: ".login-form",
      messagePosition: "inline"
  });
}

</script>
