<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
    <meta charset="UTF-8" />
    <title>داشبورد </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />
    <!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <![endif]-->
    <!-- GLOBAL STYLES -->
    <link rel="stylesheet" href="<?=Url('/assets/plugins/bootstrap/css/bootstrap.rtl.css')?>" />
    <link rel="stylesheet" href="<?=Url('/assets/css/main.css')?>" />
    <link rel="stylesheet" href="<?=Url('/assets/css/theme.css')?>" />
    <link rel="stylesheet" href="<?=Url('/assets/css/MoneAdmin.css')?>" />
    <link rel="stylesheet" href="<?=Url('/assets/plugins/Font-Awesome/css/font-awesome.css')?>" />
    <!--END GLOBAL STYLES -->

    <!-- PAGE LEVEL STYLES -->
    <link href="<?=Url('assets/css/layout2.css')?>" rel="stylesheet" />
    <link href="<?=Url('assets/plugins/flot/examples/examples.css')?>" rel="stylesheet" />
    <link rel="stylesheet" href="<?=Url('>assets/plugins/timeline/timeline.css')?>" />
    <!-- END PAGE LEVEL  STYLES -->
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    @yield('styles')
</head>

<!-- END HEAD -->

<!-- BEGIN BODY -->
<body class="padTop53 " >

<!-- MAIN WRAPPER -->
<div id="wrap" >


    <!-- HEADER SECTION -->
    <div id="top">

        <nav class="navbar navbar-inverse navbar-fixed-top " style="padding: 10px;">
            <a data-original-title="Show/Hide Menu" data-placement="bottom" data-tooltip="tooltip" class="accordion-toggle btn btn-primary btn-sm visible-xs" data-toggle="collapse" href="#menu" id="menu-toggle">
                <i class="icon-align-justify"></i>
            </a>
            <!-- LOGO SECTION -->
            <header class="navbar-header">

                <a href="index.html" class="navbar-brand">
                    <img src="<?=Url('assets/img/logo.png')?>" alt="" height="30" />
                    <h1 class="site-title">کتابخانه مرکزی</h1>
                </a>
            </header>
            <!-- END LOGO SECTION -->
            <ul class="nav navbar-top-links navbar-left">


                <!--ADMIN SETTINGS SECTIONS -->

                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="icon-user "></i>&nbsp; <i class="icon-chevron-down "></i>
                    </a>

                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="icon-user"></i> مشاهده پروفایل </a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="{{ url('/logout') }}"
                               onclick="event.preventDefault();document.getElementById('login-form').submit()"><i class="icon-signout"></i> خروج </a>
                            <form id="login-form" action="{{ url('/logout') }}" method="POST" style="display:none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>

                </li>
                <!--END ADMIN SETTINGS -->
            </ul>

        </nav>

    </div>
    <!-- END HEADER SECTION -->



    <!-- MENU SECTION -->
    <div id="right">
        <div class="media user-media well-small">
            <a class="user-link" href="#">
                <img class="media-object img-thumbnail user-img" alt="User Picture" src="<?=Url('assets/img/user.gif')?>" />
            </a>
            <br />
            <div class="media-body">
                <h5 class="media-heading"> محمدرضا</h5>
                <ul class="list-unstyled user-info">

                    <li>
                        <a class="btn btn-success btn-xs btn-circle" style="width: 10px;height: 12px;"></a> آنلاین

                    </li>

                </ul>
            </div>
            <br />
        </div>

        <ul id="menu" class="collapse">


            <li class="panel active">
                <a href="index.html" >
                    <i class="icon-table"></i> داشبورد


                </a>
            </li>



            <li class="panel ">
                <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#component-nav">
                    <i class="icon-book"> </i>مدیریت کتاب ها
                </a>
                <ul class="collapse" id="component-nav">

                    <li class=""><a href="{{route('book.create')}}"><i class="icon-angle-left"></i> افزودن </a></li>
                    <li class="active"><a href="{{ route('book.index') }}"><i class="icon-angle-left"></i> لیست کتاب ها</a></li>

                </ul>
            </li>
            <li class="panel ">
                <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle collapsed" data-target="#form-nav">
                    <i class="icon-table"></i>مدیریت دسته ها

                </a>
                <ul class="collapse" id="form-nav">
                    <li class=""><a href="{{route('category.create')}}"><i class="icon-angle-left"></i> افزودن </a></li>
                    <li class=""><a href="{{route('category.index')}}"><i class="icon-angle-left"></i> لیست دسته ها </a></li>

                </ul>
            </li>

            <li class="panel">
                <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#pagesr-nav">
                    <i class="icon-user"></i> مدیریت کاربران
                </a>
                <ul class="collapse" id="pagesr-nav">
                    <li><a href="{{route('user.create')}}"><i class="icon-angle-left"></i> افزودن کاربر </a></li>
                    <li><a href="{{route('user.index')}}"><i class="icon-angle-left"></i> لیست کاربران </a></li>
                </ul>
            </li>

            <li class="panel">
                <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#pagesr-nav">
                    <i class="icon-comment"></i> مدیریت نظرات
                </a>
                <ul class="collapse" id="pagesr-nav">
                    <li><a href="{{ route('comment.show') }}"><i class="icon-angle-left"></i> لیست نظرات </a></li>
                    <li><a href="pages_timeline.html"><i class="icon-angle-left"></i> افزودن نظر </a></li>
                </ul>
            </li>


        </ul>


    </div>
    <!--END MENU SECTION -->



    <!--PAGE CONTENT -->
    <div id="content">

        <div class="inner" style="min-height: 700px;">
   @yield('content')

        </div>

    </div>
    <!--END PAGE CONTENT -->

</div>

<!--END MAIN WRAPPER -->

<!-- FOOTER -->
<div id="footer">
    <p>کلیه حقوق سایت متعلق به <a href="http://www.i-nahad.ir">ایران نهاد</a> می باشد.</p>
</div>
<!--END FOOTER -->


<!-- GLOBAL SCRIPTS -->
<script src="<?=Url('assets/plugins/jquery-2.0.3.min.js')?>"></script>
<script src="<?=Url('assets/plugins/bootstrap/js/bootstrap.rtl.js')?>"></script>
<script src="<?=Url('assets/plugins/modernizr-2.6.2-respond-1.1.0.min.js')?>"></script>
<!-- END GLOBAL SCRIPTS -->

<!-- PAGE LEVEL SCRIPTS -->
<script src="<?=Url('assets/plugins/flot/jquery.flot.js')?>"></script>
<script src="<?=Url('assets/plugins/flot/jquery.flot.resize.js')?>"></script>
<script src="<?=Url('assets/plugins/flot/jquery.flot.time.js')?>"></script>
<script  src="<?=Url('assets/plugins/flot/jquery.flot.stack.js')?>"></script>
<script src="<?=Url('assets/js/for_index.js')?>"></script>

<!-- END PAGE LEVEL SCRIPTS -->


</body>
<script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'article-ckeditor' );
</script>
<!-- END BODY -->

@yield('scripts')
</html>


