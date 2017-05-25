<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <title>Dashboard | @yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <meta name="description" content="">
    <meta name="keywords" content="coco bootstrap template, coco admin, bootstrap,admin template, bootstrap admin,">
    <meta name="author" content="Huban Creative">

    <!-- Base Css Files -->
    <link href="{{URL::to('admin/coco/assets/libs/jqueryui/ui-lightness/jquery-ui-1.10.4.custom.min.css')}}"
          rel="stylesheet"/>
    <link href="{{URL::to('admin/coco/assets/libs/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet"/>
    <link href="{{URL::to('admin/coco/assets/libs/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet"/>
    <link href="{{URL::to('admin/coco/assets/libs/fontello/css/fontello.css')}}" rel="stylesheet"/>
    <link href="{{URL::to('admin/coco/assets/libs/animate-css/animate.min.css')}}" rel="stylesheet"/>
    <link href="{{URL::to('admin/coco/assets/libs/nifty-modal/css/component.css')}}" rel="stylesheet"/>
    <link href="{{URL::to('admin/coco/assets/libs/magnific-popup/magnific-popup.css')}}" rel="stylesheet"/>
    <link href="{{URL::to('admin/coco/assets/libs/ios7-switch/ios7-switch.css')}}" rel="stylesheet"/>
    <link href="{{URL::to('admin/coco/assets/libs/pace/pace.css')}}" rel="stylesheet"/>
    <link href="{{URL::to('admin/coco/assets/libs/sortable/sortable-theme-bootstrap.css')}}" rel="stylesheet"/>
    <link href="{{URL::to('admin/coco/assets/libs/bootstrap-datepicker/css/datepicker.css')}}" rel="stylesheet"/>
    <link href="{{URL::to('admin/coco/assets/libs/jquery-icheck/skins/all.css')}}" rel="stylesheet"/>
    <!-- Code Highlighter for Demo -->
    <link href="{{URL::to('admin/coco/assets/libs/prettify/github.css')}}" rel="stylesheet"/>

    <!-- Extra CSS Libraries Start -->
@yield('styles')
<!-- Extra CSS Libraries End -->
    <link href="{{URL::to('admin/coco/assets/css/style-responsive.css')}}" rel="stylesheet"/>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <link rel="shortcut icon" href="{{URL::to('admin/coco/assets/img/favicon.ico')}}">
    <link rel="apple-touch-icon" href="{{URL::to('admin/coco/assets/img/apple-touch-icon.png')}}"/>
    <link rel="apple-touch-icon" sizes="57x57" href="{{URL::to('admin/coco/assets/img/apple-touch-icon-57x57.png')}}"/>
    <link rel="apple-touch-icon" sizes="72x72" href="{{URL::to('admin/coco/assets/img/apple-touch-icon-72x72.png')}}"/>
    <link rel="apple-touch-icon" sizes="76x76" href="{{URL::to('admin/coco/assets/img/apple-touch-icon-76x76.png')}}"/>
    <link rel="apple-touch-icon" sizes="114x114"
          href="{{URL::to('admin/coco/assets/img/apple-touch-icon-114x114.png')}}"/>
    <link rel="apple-touch-icon" sizes="120x120"
          href="{{URL::to('admin/coco/assets/img/apple-touch-icon-120x120.png')}}"/>
    <link rel="apple-touch-icon" sizes="144x144"
          href="{{URL::to('admin/coco/assets/img/apple-touch-icon-144x144.png')}}"/>
    <link rel="apple-touch-icon" sizes="152x152"
          href="{{URL::to('admin/coco/assets/img/apple-touch-icon-152x152.png')}}"/>


</head>
<body class="fixed-left">
<!-- Modal Start -->

<!-- Modal Logout -->
<div class="md-modal md-just-me" id="logout-modal">
    <div class="md-content">
        <h3><strong>Logout</strong> Confirmation</h3>
        <div>
            <p class="text-center">Are you sure want to logout from this system?</p>
            <p class="text-center">
                <button class="btn btn-danger md-close">Nope!</button>
                <a href="{{ url('/logout') }}"
                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                   class="btn btn-success md-close">Yeah, I'm sure</a>

                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </p>
        </div>
    </div>
</div>

{{--Modal to delete--}}
<!-- Modal fade in scale up -->
<div class="md-modal md-fade-in-scale-up" id="confirmDeleteModal">
    <div class="md-content">
        <h3>Delete</h3>
        <div>
            <p>Are you sure to delete data?</p>
            <ul>
                <li><strong>Note:</strong> If once deleted it will be removed permanently.</li>
            </ul>
            <p>
                <button class="btn btn-danger md-close">Close me!</button>
                <button class="btn btn-success md-close">Some button</button>
            </p>
        </div>
    </div>
</div>

<!-- Modal End -->

<!-- Begin page -->
<div id="wrapper">

    <!-- Top Bar Start -->
@include('admin.includes.header')

<!-- Top Bar End -->
    <!-- Left Sidebar Start -->
@include('admin.includes.navigation')
<!-- Left Sidebar End -->

@yield('contents')
<!-- End right content -->

</div>
<div id="contextMenu" class="dropdown clearfix">
    <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu"
        style="display:block;position:static;margin-bottom:5px;">
        <li><a tabindex="-1" href="javascript:;" data-priority="high"><i class="fa fa-circle-o text-red-1"></i> High
                Priority</a></li>
        <li><a tabindex="-1" href="javascript:;" data-priority="medium"><i class="fa fa-circle-o text-orange-3"></i>
                Medium Priority</a></li>
        <li><a tabindex="-1" href="javascript:;" data-priority="low"><i class="fa fa-circle-o text-yellow-1"></i> Low
                Priority</a></li>
        <li><a tabindex="-1" href="javascript:;" data-priority="none"><i class="fa fa-circle-o text-lightblue-1"></i>
                None</a></li>
    </ul>
</div>
<!-- End of page -->
<!-- the overlay modal element -->
<div class="md-overlay"></div>
<!-- End of eoverlay modal -->
<script>
    var resizefunc = [];
</script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="{{URL::to('admin/coco/assets/libs/jquery/jquery-1.11.1.min.js')}}"></script>
<script src="{{URL::to('admin/coco/assets/libs/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{URL::to('admin/coco/assets/libs/jqueryui/jquery-ui-1.10.4.custom.min.js')}}"></script>
<script src="{{URL::to('admin/coco/assets/libs/jquery-ui-touch/jquery.ui.touch-punch.min.js')}}"></script>
<script src="{{URL::to('admin/coco/assets/libs/jquery-detectmobile/detect.js')}}"></script>
<script src="{{URL::to('admin/coco/assets/libs/jquery-animate-numbers/jquery.animateNumbers.js')}}"></script>
<script src="{{URL::to('admin/coco/assets/libs/ios7-switch/ios7.switch.js')}}"></script>
<script src="{{URL::to('admin/coco/assets/libs/fastclick/fastclick.js')}}"></script>
<script src="{{URL::to('admin/coco/assets/libs/jquery-blockui/jquery.blockUI.js')}}"></script>
<script src="{{URL::to('admin/coco/assets/libs/bootstrap-bootbox/bootbox.min.js')}}"></script>
<script src="{{URL::to('admin/coco/assets/libs/jquery-slimscroll/jquery.slimscroll.js')}}"></script>
<script src="{{URL::to('admin/coco/assets/libs/jquery-sparkline/jquery-sparkline.js')}}"></script>
<script src="{{URL::to('admin/coco/assets/libs/nifty-modal/js/classie.js')}}"></script>
<script src="{{URL::to('admin/coco/assets/libs/nifty-modal/js/modalEffects.js')}}"></script>
<script src="{{URL::to('admin/coco/assets/libs/sortable/sortable.min.js')}}"></script>
<script src="{{URL::to('admin/coco/assets/libs/bootstrap-fileinput/bootstrap.file-input.js')}}"></script>
<script src="{{URL::to('admin/coco/assets/libs/bootstrap-select/bootstrap-select.min.js')}}"></script>
<script src="{{URL::to('admin/coco/assets/libs/bootstrap-select2/select2.min.js')}}"></script>
<script src="{{URL::to('admin/coco/assets/libs/magnific-popup/jquery.magnific-popup.min.js')}}"></script>
<script src="{{URL::to('admin/coco/assets/libs/pace/pace.min.js')}}"></script>
<script src="{{URL::to('admin/coco/assets/libs/bootstrap-datepicker/js/bootstrap-datepicker.js')}}"></script>
<script src="{{URL::to('admin/coco/assets/libs/jquery-icheck/icheck.min.js')}}"></script>

<!-- Demo Specific JS Libraries -->
<script src="{{URL::to('admin/coco/assets/libs/prettify/prettify.js')}}"></script>

<script src="{{URL::to('admin/coco/assets/js/init.js')}}"></script>

<!--ajax csrf token set-->
<script>
    var js_base_url = "<?php echo URL::to('/') ?>";
    var csrf_token = $('meta[name="csrf-token"]').attr('content');

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>
<!--/ajax csrf token set-->

@yield('scripts')
</body>
</html>