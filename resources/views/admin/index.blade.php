<!DOCTYPE html>
<!--[if IE 8]>
<html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]>
<html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8"/>
    <title>Metronic Admin Theme #1 | Admin Dashboard</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport"/>
    <meta content="Preview page of Metronic Admin Theme #1 for statistics, charts, recent events and reports"
          name="description"/>
    <meta content="" name="author"/>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="{{ asset('bower_components/demo-bower/confession/admin/css/font-awesome.min.css') }}" rel="stylesheet"
          type="text/css"/>
    <link href="{{ asset('bower_components/demo-bower/confession/admin/css/simple-line-icons/simple-line-icons.min.css') }}"
          rel="stylesheet" type="text/css"/>
    <link href="{{ asset('bower_components/demo-bower/confession/admin/css/bootstrap/css/bootstrap.min.css') }}"
          rel="stylesheet"
          type="text/css"/>
    <link href="{{ asset('bower_components/demo-bower/confession/admin/css/bootstrap-switch/css/bootstrap-switch.min.css') }}"
          rel="stylesheet" type="text/css"/>
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN THEME GLOBAL STYLES -->
    <link href="{{ asset('bower_components/demo-bower/confession/admin/css/components.min.css') }}" rel="stylesheet"
          id="style_components" type="text/css"/>
    <link href="{{ asset('bower_components/demo-bower/confession/admin/css/plugins.min.css') }}" rel="stylesheet"
          type="text/css"/>
    <!-- END THEME GLOBAL STYLES -->

    <!-- BEGIN THEME LAYOUT STYLES -->
    <link href="{{ asset('bower_components/demo-bower/confession/admin/css/layout.min.css') }}" rel="stylesheet"
          type="text/css"/>
    <link href="{{ asset('bower_components/demo-bower/confession/admin/css/themes/darkblue.min.css') }}"
          rel="stylesheet"
          type="text/css" id="style_color"/>
    <link href="{{ asset('bower_components/demo-bower/confession/admin/css/custom.min.css') }}" rel="stylesheet"
          type="text/css"/>
    <!-- END THEME LAYOUT STYLES -->

    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css"/>
</head>


<body class="page-header-fixed page-sidebar-closed-hide-logo page-content-white">
<div class="page-wrapper">
{{--nav_top_header--}}
@include('admin.nav_top')

<!-- BEGIN HEADER & CONTENT DIVIDER -->
    <div class="clearfix"></div>
    <!-- END HEADER & CONTENT DIVIDER -->

    <!-- BEGIN CONTAINER -->
    <div class="page-container">
        <!-- BEGIN SIDEBAR -->
        <div class="page-sidebar-wrapper">
            @include('admin.nav_left')
        </div>
        <!-- END SIDEBAR -->

        <!-- BEGIN CONTENT -->
        <div class="page-content-wrapper">
            <!-- BEGIN CONTENT BODY -->
            <div class="page-content">

                @yield('content')

            </div>
            <!-- END CONTENT BODY -->
        </div>
        <!-- END CONTENT -->
    </div>
    <!-- END CONTAINER -->
    <!-- BEGIN FOOTER -->
    <div class="page-footer">
        @include('admin.footer');
    </div>
    <!-- END FOOTER -->
</div>
<!-- BEGIN CORE PLUGINS -->
<script src="{{ asset('bower_components/demo-bower/confession/admin/js/plugins/jquery.min.js') }}"
        type="text/javascript"></script>
<script src="{{ asset('bower_components/demo-bower/confession/admin/js/plugins/bootstrap/js/bootstrap.min.js') }}"
        type="text/javascript"></script>
<script src="{{ asset('bower_components/demo-bower/confession/admin/js/plugins/js.cookie.min.js') }}"
        type="text/javascript"></script>
<script src="{{ asset('bower_components/demo-bower/confession/admin/js/plugins/jquery-slimscroll/jquery.slimscroll.min.js') }}"
        type="text/javascript"></script>
<script src="{{ asset('bower_components/demo-bower/confession/admin/js/plugins/jquery.blockui.min.js') }}"
        type="text/javascript"></script>
<script src="{{ asset('bower_components/demo-bower/confession/admin/js/plugins/bootstrap-switch/js/bootstrap-switch.min.js') }}"
        type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="{{ asset('bower_components/demo-bower/confession/admin/js/plugins/moment.min.js') }}"
        type="text/javascript"></script>
<script src="{{ asset('bower_components/demo-bower/confession/admin/js/plugins/bootstrap-daterangepicker/daterangepicker.min.js') }}"
        type="text/javascript"></script>
<script src="{{ asset('bower_components/demo-bower/confession/admin/js/plugins/morris/morris.min.js') }}"
        type="text/javascript"></script>
<script src="{{ asset('bower_components/demo-bower/confession/admin/js/plugins/morris/raphael-min.js') }}"
        type="text/javascript"></script>
<script src="{{ asset('bower_components/demo-bower/confession/admin/js/plugins/counterup/jquery.waypoints.min.js') }}"
        type="text/javascript"></script>
<script src="{{ asset('bower_components/demo-bower/confession/admin/js/plugins/counterup/jquery.counterup.min.js') }}"
        type="text/javascript"></script>
<script src="{{ asset('bower_components/demo-bower/confession/admin/js/plugins/fullcalendar/fullcalendar.min.js') }}"
        type="text/javascript"></script>
<script src="{{ asset('bower_components/demo-bower/confession/admin/js/plugins/horizontal-timeline/horizontal-timeline.js') }}"
        type="text/javascript"></script>
<script src="{{ asset('bower_components/demo-bower/confession/admin/js/plugins/flot/jquery.flot.min.js') }}"
        type="text/javascript"></script>
<script src="{{ asset('bower_components/demo-bower/confession/admin/js/plugins/flot/jquery.flot.resize.min.js') }}"
        type="text/javascript"></script>
<script src="{{ asset('bower_components/demo-bower/confession/admin/js/plugins/flot/jquery.flot.categories.min.js') }}"
        type="text/javascript"></script>
<script src="{{ asset('bower_components/demo-bower/confession/admin/js/plugins/jquery-easypiechart/jquery.easypiechart.min.js') }}"
        type="text/javascript"></script>
<script src="{{ asset('bower_components/demo-bower/confession/admin/js/plugins/jquery.sparkline.min.js') }}"
        type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN THEME GLOBAL SCRIPTS -->
<script src="{{ asset('bower_components/demo-bower/confession/admin/js/scripts/app.min.js') }}"
        type="text/javascript"></script>
<!-- END THEME GLOBAL SCRIPTS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="{{ asset('bower_components/demo-bower/confession/admin/js/scripts/dashboard.min.js') }}"
        type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<!-- BEGIN THEME LAYOUT SCRIPTS -->
<script src="{{ asset('bower_components/demo-bower/confession/admin/js/layout.min.js') }}"
        type="text/javascript"></script>
<script src="{{ asset('bower_components/demo-bower/confession/admin/js/demo.min.js') }}"
        type="text/javascript"></script>
<script src="{{ asset('bower_components/demo-bower/confession/admin/js/quick-sidebar.min.js') }}"
        type="text/javascript"></script>
<script src="{{ asset('bower_components/demo-bower/confession/admin/js/quick-nav.min.js') }}"
        type="text/javascript"></script>
<!-- END THEME LAYOUT SCRIPTS -->
</body>
</html>
