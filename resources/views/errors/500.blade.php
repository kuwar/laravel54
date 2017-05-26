<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>500 Internal Server Error | {{ env('SITE_TITLE') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <meta name="description" content="">
    <meta name="keywords" content="coco bootstrap template, coco admin, bootstrap,admin template, bootstrap admin,">
    <meta name="author" content="Huban Creative">

    <!-- Base Css Files -->
    <link href="{{URL::to('admin/coco/assets/libs/jqueryui/ui-lightness/jquery-ui-1.10.4.custom.min.css')}}" rel="stylesheet" />
    <link href="{{URL::to('admin/coco/assets/libs/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{URL::to('admin/coco/assets/libs/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" />
    <link href="{{URL::to('admin/coco/assets/libs/fontello/css/fontello.css')}}" rel="stylesheet" />
    <link href="{{URL::to('admin/coco/assets/libs/animate-css/animate.min.css')}}" rel="stylesheet" />
    <link href="{{URL::to('admin/coco/assets/libs/nifty-modal/css/component.css')}}" rel="stylesheet" />
    <link href="{{URL::to('admin/coco/assets/libs/magnific-popup/magnific-popup.css')}}" rel="stylesheet" />
    <link href="{{URL::to('admin/coco/assets/libs/ios7-switch/ios7-switch.css')}}" rel="stylesheet" />
    <link href="{{URL::to('admin/coco/assets/libs/pace/pace.css')}}" rel="stylesheet" />
    <link href="{{URL::to('admin/coco/assets/libs/sortable/sortable-theme-bootstrap.css')}}" rel="stylesheet" />
    <link href="{{URL::to('admin/coco/assets/libs/bootstrap-datepicker/css/datepicker.css')}}" rel="stylesheet" />
    <link href="{{URL::to('admin/coco/assets/libs/jquery-icheck/skins/all.css')}}" rel="stylesheet" />
    <!-- Code Highlighter for Demo -->
    <link href="{{URL::to('admin/coco/assets/libs/prettify/github.css')}}" rel="stylesheet" />

    <!-- Extra CSS Libraries Start -->
    <link href="{{URL::to('admin/coco/assets/css/style.css')}}" rel="stylesheet" type="text/css" />
    <!-- Extra CSS Libraries End -->
    <link href="{{URL::to('admin/coco/assets/css/style-responsive.css')}}" rel="stylesheet" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <link rel="shortcut icon" href="{{URL::to('admin/coco/assets/img/favicon.ico')}}">
    <link rel="apple-touch-icon" href="{{URL::to('admin/coco/assets/img/apple-touch-icon.png')}}" />
    <link rel="apple-touch-icon" sizes="57x57" href="{{URL::to('admin/coco/assets/img/apple-touch-icon-57x57.png')}}" />
    <link rel="apple-touch-icon" sizes="72x72" href="{{URL::to('admin/coco/assets/img/apple-touch-icon-72x72.png')}}" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{URL::to('admin/coco/assets/img/apple-touch-icon-76x76.png')}}" />
    <link rel="apple-touch-icon" sizes="114x114" href="{{URL::to('admin/coco/assets/img/apple-touch-icon-114x114.png')}}" />
    <link rel="apple-touch-icon" sizes="120x120" href="{{URL::to('admin/coco/assets/img/apple-touch-icon-120x120.png')}}" />
    <link rel="apple-touch-icon" sizes="144x144" href="{{URL::to('admin/coco/assets/img/apple-touch-icon-144x144.png')}}" />
    <link rel="apple-touch-icon" sizes="152x152" href="{{URL::to('admin/coco/assets/img/apple-touch-icon-152x152.png')}}" />
</head>
<body class="fixed-left full-content">

<!-- Begin page -->
<div class="container">
    <div class="full-content-center animated flipInX">
        <h1>500</h1>
        <h2>We are unable to show this page to you correctly!</h2><br>
        <p class="text-lightblue-2">You better try our awesome search:</p>
        <div class="row">
            <div class="icon-added input-group col-sm-8 col-sm-offset-2">
                <i class="fa fa-search"></i>
                <input type="text" class="form-control">
                <span class="input-group-btn">
				        <button class="btn btn-success searchbtn" type="button">Search</button>
				      </span>
            </div>
        </div><br>
        <a class="btn btn-primary btn-sm backbtn" href="index.html"><i class="fa fa-angle-left"></i> Back to Dashboard</a>
    </div>
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
<script src="{{URL::to('admin/coco/assets/libs/jquery-sparkline/jquery-sparkline.js')}}')}}"></script>
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
</body>
</html>