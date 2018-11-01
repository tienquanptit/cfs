<!DOCTYPE html>
<!--[if IE 8]>
<html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]>
<html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->

<head>
    <meta charset="utf-8"/>
    <title>{{ trans('message.login_admin_title') }}</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('images/icon.png') }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport"/>
    <meta content="Preview page of Metronic Admin Theme #1 for " name="description"/>
    <meta content="" name="author"/>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet"
          type="text/css"/>
    <link href="{{ asset('bower_components/demo-bower/confession/admin/assets/global/plugins/font-awesome/css/font-awesome.min.css') }}"
          rel="stylesheet" type="text/css"/>
    <link href="{{ asset('bower_components/demo-bower/confession/admin/assets/global/plugins/simple-line-icons/simple-line-icons.min.css') }}"
          rel="stylesheet" type="text/css"/>
    <link href="{{ asset('bower_components/demo-bower/confession/admin/assets/global/plugins/bootstrap/css/bootstrap.min.css') }}"
          rel="stylesheet" type="text/css"/>
    <link href="{{ asset('bower_components/demo-bower/confession/admin/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css') }}"
          rel="stylesheet" type="text/css"/>
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <link href="{{ asset('bower_components/demo-bower/confession/admin/assets/global/plugins/select2/css/select2.min.css') }}"
          rel="stylesheet" type="text/css"/>
    <link href="{{ asset('bower_components/demo-bower/confession/admin/assets/global/plugins/select2/css/select2-bootstrap.min.css') }}"
          rel="stylesheet" type="text/css"/>
    <!-- END PAGE LEVEL PLUGINS -->
    <!-- BEGIN THEME GLOBAL STYLES -->
    <link href="{{ asset('bower_components/demo-bower/confession/admin/assets/global/css/components.min.css') }}"
          rel="stylesheet" id="style_components" type="text/css"/>
    <link href="{{ asset('bower_components/demo-bower/confession/admin/assets/global/css/plugins.min.css') }}"
          rel="stylesheet" type="text/css"/>
    <!-- END THEME GLOBAL STYLES -->
    <!-- BEGIN PAGE LEVEL STYLES -->
    <link href="{{ asset('bower_components/demo-bower/confession/admin/assets/pages/css/login-3.min.css') }}"
          rel="stylesheet" type="text/css"/>
    <!-- END PAGE LEVEL STYLES -->
    <!-- END HEAD -->

<body class=" login">
<!-- BEGIN LOGO -->
<div class="logo">
    <a href="#">
        <img src="{{ asset(config('common.img').'logo.png') }}" alt=""/> </a>
</div>
<!-- END LOGO -->
<!-- BEGIN LOGIN -->
<div class="content">
    @if (Session::has('danger'))
        <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <strong>Title!</strong> {{Session::get( 'danger' )}}
        </div>
    @endif
    <div class="clearfix"></div>
    <!-- BEGIN LOGIN FORM -->
    {!! Form::open(['method' => 'POST', 'route' => ['loginAdmin'], 'class' => 'login-form']) !!}
    <h3 class="form-title">{{ trans('message.title_form_login') }}</h3>
    <div class="alert alert-danger display-hide">
        <button class="close" data-close="alert"></button>
        <span> {{ trans('message.alert_null_email_password') }} </span>
    </div>
    <div class="form-group">
        <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
        <label class="control-label visible-ie8 visible-ie9">{{ trans('message.label_email') }}</label>
        <div class="input-icon">
            <i class="fa fa-user"></i>
            <input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Email"
                   name="email"/></div>
{{--        {{ Form::text('email', old('email'), ['class' => 'form-control placeholder-no-fix margin_bottom', 'autocomplete' => 'off', 'placeholder' => 'Email']) }}--}}
    </div>
    <div class="form-group">
        <label class="control-label visible-ie8 visible-ie9">{{ trans('message.label_password') }}</label>
        <div class="input-icon">
            <i class="fa fa-lock"></i>
            <input class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="Password"
                   name="password"/></div>
{{--        {{ Form::password('password', ['class' => 'form-control placeholder-no-fix margin_bottom', 'autocomplete' => 'off', 'placeholder' => 'Password']) }}--}}
    </div>
    <div class="form-actions">
        <label class="rememberme mt-checkbox mt-checkbox-outline">
            <input type="checkbox" name="remember" value="1"/> {{ trans('message.remember_me') }}
            <span></span>
        </label>
        {!! Form::submit(trans('message.btn_login'), ['class' => 'btn green pull-right']) !!}
    </div>
    <div class="login-options">
        <h4>{{ trans('message.label_login_with') }}</h4>
        <ul class="social-icons">
            <li>
                <a class="facebook" data-original-title="facebook" href="javascript:;"> </a>
            </li>
            <li>
                <a class="twitter" data-original-title="Twitter" href="javascript:;"> </a>
            </li>
            <li>
                <a class="googleplus" data-original-title="Goole Plus" href="javascript:;"> </a>
            </li>
            <li>
                <a class="linkedin" data-original-title="Linkedin" href="javascript:;"> </a>
            </li>
        </ul>
    </div>
    <div class="forget-password">
        <h4>{{ trans('message.forgot_password') }}</h4>
        <p> {{ trans('message.no_worries') }}
            <a href="javascript:;"
               id="forget-password"> {{ trans('message.here') }} </a> {{ trans('message.to_reset') }} </p>
    </div>
    <div class="create-account">
        <p> {{ trans('message.title_account') }}&nbsp;
            <a href="javascript:;" id="register-btn"> {{trans('message.create_account')}} </a>
        </p>
    </div>
{!! Form::close() !!}
<!-- END LOGIN FORM -->
    <!-- BEGIN FORGOT PASSWORD FORM -->
    <form class="forget-form" action="#" method="post">
        <h3>{{ trans('message.forget_password') }}</h3>
        <p> {{ trans('message.forget_password_email') }} </p>
        <div class="form-group">
            <div class="input-icon">
                <i class="fa fa-envelope"></i>
                <input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Email"
                       name="email"/></div>
        </div>
        <div class="form-actions">
            <button type="button" id="back-btn"
                    class="btn grey-salsa btn-outline"> {{ trans('message.btn_back') }}</button>
            <button type="submit" class="btn green pull-right"> {{ trans('message.btn_submit') }}</button>
        </div>
    </form>
    <!-- END FORGOT PASSWORD FORM -->

    <!-- BEGIN REGISTRATION FORM -->
    <form class="register-form" action="#" method="post">
        <h3>{{ trans('message.title_signup') }}</h3>
        <p> {{ trans('message.title_details') }} </p>
        <div class="form-group">
            <label class="control-label visible-ie8 visible-ie9">{{ trans('message.label_fullname') }}</label>
            <div class="input-icon">
                <i class="fa fa-font"></i>
                <input class="form-control placeholder-no-fix" type="text" placeholder="Full Name" name="name"/>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label visible-ie8 visible-ie9">{{ trans('message.label_nickname') }}</label>
            <div class="input-icon">
                <i class="fa fa-font"></i>
                <input class="form-control placeholder-no-fix" type="text" placeholder="Nick Name" name="nick_name"/>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label visible-ie8 visible-ie9">{{ trans('message.label_address') }}</label>
            <div class="input-icon">
                <i class="fa fa-check"></i>
                <input class="form-control placeholder-no-fix" type="text" placeholder="Address" name="address"/></div>
        </div>
        <div class="form-group">
            <label class="control-label visible-ie8 visible-ie9">{{ trans('message.label_phone') }}</label>
            <div class="input-icon">
                <i class="fa fa-phone"></i>
                <input class="form-control placeholder-no-fix" type="text" placeholder="Telephone" name="phone"/></div>
        </div>
        <div class="form-group">
            <label class="control-label visible-ie8 visible-ie9">{{ trans('message.label_gender') }}</label>
            <select name="gender" id="gender_list" class="select2 form-control">
                <option value="">{{ trans('message.select_gender') }}</option>
                <option value="male">{{ trans('message.male') }}</option>
                <option value="female">{{ trans('message.female') }}</option>
            </select>
        </div>
        <p> {{ trans('message.details_account') }} </p>
        <div class="form-group">
            <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
            <label class="control-label visible-ie8 visible-ie9">{{ trans('message.label_email') }}</label>
            <div class="input-icon">
                <i class="fa fa-envelope"></i>
                <input class="form-control placeholder-no-fix" type="text" placeholder="Email" name="email"/></div>
        </div>
        <div class="form-group">
            <label class="control-label visible-ie8 visible-ie9">{{ trans('message.label_password') }}</label>
            <div class="input-icon">
                <i class="fa fa-lock"></i>
                <input class="form-control placeholder-no-fix" type="password" autocomplete="off" id="register_password"
                       placeholder="Password" name="password"/></div>
        </div>
        <div class="form-actions">
            <button id="register-back-btn" type="button"
                    class="btn grey-salsa btn-outline">{{ trans('message.btn_back') }}</button>
            <button type="submit" id="register-submit-btn"
                    class="btn green pull-right">{{ trans('message.btn_signup') }}</button>
        </div>
    </form>
    <!-- END REGISTRATION FORM -->
</div>
<!-- END LOGIN -->
<!-- BEGIN COPYRIGHT -->
<div class="copyright"> 2018 &copy; Framgia - Admin Dashboard Confession.</div>
<!-- END COPYRIGHT -->
<!-- BEGIN CORE PLUGINS -->
<script src="{{ asset('bower_components/demo-bower/confession/admin/assets/global/plugins/jquery.min.js') }}"
        type="text/javascript"></script>
<script src="{{ asset('bower_components/demo-bower/confession/admin/assets/global/plugins/bootstrap/js/bootstrap.min.js') }}"
        type="text/javascript"></script>
<script src="{{ asset('bower_components/demo-bower/confession/admin/assets/global/plugins/js.cookie.min.js') }}"
        type="text/javascript"></script>
<script src="{{ asset('bower_components/demo-bower/confession/admin/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js') }}"
        type="text/javascript"></script>
<script src="{{ asset('bower_components/demo-bower/confession/admin/assets/global/plugins/jquery.blockui.min.js') }}"
        type="text/javascript"></script>
<script src="{{ asset('bower_components/demo-bower/confession/admin/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js') }}"
        type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="{{ asset('bower_components/demo-bower/confession/admin/assets/global/plugins/jquery-validation/js/jquery.validate.min.js') }}"
        type="text/javascript"></script>
<script src="{{ asset('bower_components/demo-bower/confession/admin/assets/global/plugins/jquery-validation/js/additional-methods.min.js') }}"
        type="text/javascript"></script>
<script src="{{ asset('bower_components/demo-bower/confession/admin/assets/global/plugins/select2/js/select2.full.min.js') }}"
        type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN THEME GLOBAL SCRIPTS -->
<script src="{{ asset('bower_components/demo-bower/confession/admin/assets/global/scripts/app.min.js') }}"
        type="text/javascript"></script>
<!-- END THEME GLOBAL SCRIPTS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="{{ asset('bower_components/demo-bower/confession/admin/assets/pages/scripts/login.min.js') }}"
        type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<!-- BEGIN THEME LAYOUT SCRIPTS -->
<!-- END THEME LAYOUT SCRIPTS -->
<script>
    $(document).ready(function () {
        $('#clickmewow').click(function () {
            $('#radio1003').attr('checked', 'checked');
        });
    })
</script>
</body>

</html>