<!doctype html>
<html lang="lt">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>BRANGINU.LT</title>

    <meta name="author" content="Arthur Khachtryan">
    <!-- END Icons -->
    <link rel="stylesheet" href="/js/plugins/simplemde/simplemde.min.css">
    <!-- Stylesheets -->
    <!-- Fonts and OneUI framework -->
    <link rel="stylesheet" href="/js/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css">
    <link rel="stylesheet" href="/js/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
    <link rel="stylesheet" href="/js/plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="/js/plugins/ion-rangeslider/css/ion.rangeSlider.css">
    <link rel="stylesheet" href="/js/plugins/ion-rangeslider/css/ion.rangeSlider.skinHTML5.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400italic,600,700%7COpen+Sans:300,400,400italic,600,700">
    <link rel="stylesheet" id="css-main" href="/css/oneui.min.css">

</head>
<body>
<!-- Page Container -->

<div id="page-container" class="sidebar-o sidebar-dark enable-page-overlay side-scroll page-header-fixed">
    <nav id="sidebar" aria-label="Main Navigation">
        <!-- Side Header -->
        <div class="content-header bg-white-5">
            <!-- Logo -->
            <a class="font-w600 text-dual" href="{{route('landing.dashboard')}}">
                <span class="smini-hide">
                   <span class="font-w600 font-size-h5">CONTRACTS CRUD</span>
                </span>
            </a>
            <!-- END Logo -->
            <div>
                <!-- Close Sidebar, Visible only on mobile screens -->
                <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                <a class="d-lg-none text-dual ml-3" data-toggle="layout" data-action="sidebar_close" href="javascript:void(0)">
                    <i class="fa fa-times"></i>
                </a>
                <!-- END Close Sidebar -->
            </div>
        </div>
        <!-- END Side Header -->

        <!-- Side Navigation -->
        <div class="content-side content-side-full">
            <ul class="nav-main">
                <li class="nav-main-item">
                    <a class="nav-main-link {{Request::path() === '/' ? 'active' : ''}}" href="{{route('landing.dashboard')}}">
                        <i class="nav-main-link-icon si si-speedometer"></i>
                        <span class="nav-main-link-name">Dashboard</span>
                    </a>
                </li>
                <li class="nav-main-item">
                    <a class="nav-main-link nav-main-link {{Request::path() === '/contracts' ? 'active' : ''}}" aria-haspopup="true" aria-expanded="false" href="{{route('contracts.index')}}">
                        <i class="nav-main-link-icon si si-grid"></i>
                        <span class="nav-main-link-name">Sutarties</span>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- END Sidebar -->
    <!-- Main Container -->
    <main id="main-container">
        @yield('content')
    </main>
    <!-- END Main Container -->

    <!-- Footer -->
    <footer id="page-footer" class="bg-body-light">
        <div class="content py-3">
            <div class="row font-size-sm">
                <div class="col-sm-6 order-sm-2 py-1 text-center text-sm-right">
                    Crafted with <i class="fa fa-heart text-danger"></i> by <a class="font-w600" href="https://branginu.lt/?utm_expid=.09wozsHzS_S2VpDiSr4zZA.0&utm_referrer=https%3A%2F%2Fbranginu.lt%2F" target="_blank">BRANGINU.LT</a>
                </div>
                <div class="col-sm-6 order-sm-1 py-1 text-center text-sm-left">
                    <a class="font-w600"  href="https://branginu.lt/?utm_expid=.09wozsHzS_S2VpDiSr4zZA.0&utm_referrer=https%3A%2F%2Fbranginu.lt%2F" target="_blank">BRANGINU.LT</a> &copy;
                    <span data-toggle="year-copy" class="yearCopyRight">
                        2020
                    </span>
                </div>
            </div>
        </div>
    </footer>
    <!-- END Footer -->
</div>
<!-- END Page Container -->


<script src="/js/oneui.core.min.js"></script>


<script src="/js/oneui.app.min.js"></script>
<!-- Page JS Plugins -->
<script src="/js/plugins/ckeditor/ckeditor.js"></script>
<script src="/js/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
<script src="/js/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
<script src="/js/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js"></script>
<script src="/js/plugins/select2/js/select2.full.min.js"></script>
<script src="/js/plugins/jquery.maskedinput/jquery.maskedinput.min.js"></script>
<script src="/js/plugins/ion-rangeslider/js/ion.rangeSlider.min.js"></script>
<script src="/js/plugins/simplemde/simplemde.min.js"></script>
<!-- Page JS Code -->
<script src="/js/pages/be_pages_dashboard.min.js"></script>

<script>jQuery(function(){ One.helpers(['summernote', 'ckeditor', 'simplemde']); });</script>

<!-- Page JS Helpers (BS Datepicker + BS Colorpicker + BS Maxlength + Select2 + Masked Inputs + Ion Range Slider plugins) -->
<script>jQuery(function(){ One.helpers(['datepicker', 'colorpicker', 'maxlength', 'select2', 'masked-inputs', 'rangeslider']); });</script>
</body>
</html>
