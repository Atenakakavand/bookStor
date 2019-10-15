<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8" />
    <title>مرجع تخصصی برنامه نویسان</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="spookynet.org, webdesignlab.org " />
    <link rel='stylesheet' href='/bellum/css/bootstrap.css' type='text/css' />
    <link rel='stylesheet' href='/bellum/css/shortco
    des.css' type='text/css' />
    <link rel='stylesheet' href='/bellum/css/fonts/font-awesome.css' type='text/css' />
    <link rel='stylesheet' href='/bellum/css/revslider.css' type='text/css' />
    <link rel='stylesheet' href='/bellum/css/style.css' type='text/css' />
    <link rel='stylesheet' href='/bellum/css/bootstrap-responsive.css' type='text/css' />
    <link rel='stylesheet' href='/bellum/css/media-queries.css' type='text/css' />
    <link rel='stylesheet' href='/bellum/css/skins/switcher.php?default=black.css' type='text/css' />
    <script type='text/javascript' src='http://html5shim.googlecode.com/svn/trunk/html5.js?ver=3.5.1'></script>
    <!-- Google Webfonts -->
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300" rel="stylesheet" type="text/css" />
    <link href="/bellum/images/favicon.ico" rel="shortcut icon" />
</head>
<body class="home">
<div id="wrapper">


    @include('auth.section.header')

    <section id="main" class="container">

        @yield('slider')
        <!-- end homeSlider -->
        @yield('content')
        <!-- end main-content -->
    </section>


    <!-- end main -->
    @include('auth.section.footer')
</div>
<!-- end wrapper -->
<!-- Le javascript==================================================- -> -->
Placed at the end of the document so the pages load faster -->
<script type='text/javascript' src='<?=url('/bellum/js/libs/jquery.js')?>'></script>
<script type='text/javascript' src='/bellum/js/merged-scripts.js'></script>
<script type='text/javascript' src='/bellum/js/bootstrap.min.js'></script>
<script type='text/javascript' src='/bellum/js/jquery.themepunch.plugins.min.js'></script>
<script type='text/javascript' src='/bellum/js/jquery.themepunch.revolution.min.js'></script>
<script type='text/javascript' src='http://maps.google.com/maps/api/js?sensor=true&ver=3.5.1'></script>
<script type='text/javascript' src='/bellum/js/jquery.tweet.js'></script>
<script type='text/javascript' src='/bellum/js/scripts.js'></script>
<script type="text/javascript" src="http://mcstudiosmx.com/preview/mcstudios-switcher.js"></script>
<script language="JavaScript" type="/bellum/text/javascript">
    var themeTitle = "0Bellum";
</script>
<script type="text/javascript">
    $(document).ready(function(){
        $(".navbar-toggler").click(function(){
            $("#nav-content").toggle();
        });
    });
</script>

<script src="{{url('js/front.js')}}"></script>
<script
    src="https://code.jquery.com/jquery-3.3.1.min.js">
</script>

</body>

</html>

