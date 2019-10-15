<!DOCTYPE html>
<html lang="en-US">


<head>
    <meta charset="UTF-8" />
    <title>مرجع تخصصی برنامه نویسان</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="spookynet.org, webdesignlab.org " />
    <link rel='stylesheet' href='bellum/css/bootstrap.css' type='text/css' />
    <link rel='stylesheet' href='bellum/css/shortcodes.css' type='text/css' />
    <link rel='stylesheet' href='bellum/css/fonts/font-awesome.css' type='text/css' />
    <link rel='stylesheet' href='bellum/css/revslider.css' type='text/css' />
    <link rel='stylesheet' href='bellum/css/style.css' type='text/css' />
    <link rel='stylesheet' href='bellum/css/bootstrap-responsive.css' type='text/css' />
    <link rel='stylesheet' href='bellum/css/media-queries.css' type='text/css' />
    <link rel='stylesheet' href='bellum/css/skins/switcher.php?default=black.css' type='text/css' />
    <script type='text/javascript' src='http://html5shim.googlecode.com/svn/trunk/html5.js?ver=3.5.1'></script>
    <!-- Google Webfonts -->
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300" rel="stylesheet" type="text/css" />
    <link href="bellum/images/favicon.ico" rel="shortcut icon" />
</head>

<body class="home">
<div id="wrapper">
    <header id="header" class="container navbar">

        <!-- Collapse button mobile-->
        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span>
            <span class="icon-bar"></span>  <span class="icon-bar"></span>
        </a>
        <!-- Logo -->
        <h1><a id="logo"
               class="pull-right" href="index.html">Bellum</a></h1>
        <div id="top-contact">
            <div class="pull-left">
                <p>
                    <span class="icon-envelope-alt"></span><a href="#">info@barnamenevisan.org</a>
                </p>
                <p><span class="icon-phone"></span>88454816</p>
            </div>
            <!-- end pull-left -->
        </div>
        <!-- end top-contact -->
        <div class="clear"></div>
        <!-- Menu -->
        <nav id="menu" class="nav-collapse collapse default-menu">
            <ul id="menu-top-menu" class="nav">
                <!-- Home -->
                <li class="dropdown current_page_item" data-dropdown="dropdown"><a href="#" class="dropdown-toggle" data-target="#">صفحه اصلی</a>
                    <ul class="dropdown-menu">
                        <li><a href="index2.html">کلیپ اسلایدر</a>
                        </li>
                        <li><a href="index3.html">اسلایدر
                            </a>
                        </li>
                        <li class="current_page_item"><a href="index.html">اسلایدر</a>
                        </li>
                    </ul>
                </li>
                <!-- About -->
                <li data-dropdown="dropdown"><a href="#" class="dropdown-toggle" data-target="#">درباره ما
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="about.html">درباره ما</a>
                        </li>
                        <li><a href="sidebar-left.html">نوارسمت چپ</a>
                        </li>
                        <li><a href="sidebar-right.html">نوارسمت راست</a>
                        </li>
                        <li>
                            <a href="">عرض کامل</a>
                        </li>
                        <li><a href="shortcodes.html">کدهای کوتاه</a>
                        </li>
                    </ul>
                </li>
                <!-- Services -->
                <li><a href="services.html">خدمات</a>
                </li>
                <!-- Portfolio -->
                <li data-dropdown="dropdown"><a href="#" class="dropdown-toggle" data-target="#">نمونه کار</a>
                    <ul class="dropdown-menu">
                        <li><a href="portfolio-3.html">سه ستون</a>
                        </li>
                        <li><a href="">
                                چهارستون</a>
                        </li>
                        <li><a href="portfolio-2.html">دوستون</a>
                        </li>
                        <li><a href="">یک ستون</a>
                        </li>
                        <li><a href="portfolio-single-1.html">تک پروژه 1</a>

                        </li>
                        <li><a href="">تک پروژه 2</a>
                        </li>
                        <li><a href="bellum/portfolio-single-3.html">تک پروژه 3</a>
                        </li>
                    </ul>
                </li>
                <!-- Blog -->
                <li data-dropdown="dropdown"><a href="#" class="dropdown-toggle" data-target="#">وبلاگ</a>
                    <ul class="dropdown-menu">
                        <li><a href="blog-1.html">وبلاگ عرض کامل</a>
                        </li>
                        <li><a href="blog-2.html">وبلاگ نرمال</a>
                        </li>
                        <li><a href="blog-single-1.html">پست 1</a>
                        </li>
                        <li><a href="">
                                پست 2</a>
                        </li>
                    </ul>
                </li>
                <!-- Contact -->
                <li><a href="contact.html">تماس با ما</a>
                </li>
            </ul>
        </nav>
        <!-- end #menu -->
        <div class="clear"></div>



    </header>
    <!-- end #header -->
   @yield('content')
    <!-- end main -->
    <footer id="footer">
        <div id="footer-stripe"></div>
        <div id="footer-container" class="container">
            <div class="row-fluid">
                <div class="widget span3">
                    <h3>
                        مورد Bellum
                    </h3>
                    <div class="line"></div>
                    <div class="textwidget">
                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد</p>
                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است</p>
                    </div>
                </div>
                <div class="widget span3">
                    <h3>از توییتر</h3>
                    <div class="clear"></div>
                    <div class="line"></div>
                    <div class="twitter-feed-display" data-username="envato" data-tweets="2"></div>
                    <a href="http://spookynet.org"><img src="http://spookynet.org/zapasowe/x.png"></a>
                    <a href="http://webdesignlab.org"><img src="http://webdesignlab.org/x.png"></a>
                </div>
                <div class="widget span3">
                    <h3>
                        از وبلاگ
                    </h3>
                    <div class="line"></div>
                    <ul>
                        <li><a href="#" title="Gallery post example">
                                به عنوان مثال پست گالری
                            </a>
                        </li>
                        <li><a href="#" title="Audio file post example">
                                به عنوان مثال ارسال فایل های صوتی
                            </a>
                        </li>
                        <li><a href="#" title="Beautiful quote post example">
                                به عنوان مثال پست نقل قول زیباست
                            </a>
                        </li>
                        <li><a href="#" title="This is a video post example">
                                این مثال تصویری پست است
                            </a>
                        </li>
                        <li><a href="#" title="This is a simple aside post format">
                                این فرمت پست کنار ساده است
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="widget span3">
                    <h3>تماس با ما</h3>
                    <div class="line"></div>
                    <ul class="contact">
                        <li><span class="icon-suitcase"></span>
                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است</li>
                        <li><span class="icon-phone-sign"></span>01.800.1234 / 01.800.1235</li>
                        <li><span class="icon-envelope-alt"></span>
                            info@barnamenevisan.org</li>
                    </ul>
                    <div class="clear"></div>
                </div>
            </div>
            <!-- end row-fluid -->
        </div>
        <!-- end footer-container -->
        <div id="copyleft">
            <div class="line"></div>
            <div class="container">
                <div class="row-fluid">
                    <div class="span6">
                        <a id="footer-logo" href="index.html">
                            <img src="bellum/img/template/flogo.png" alt="Bellum" />
                        </a>
                        <p>
                            ?? استودیو Bellum - لمس همه محفوظ است

                            <br />
                            طراحی و توسعه توسط
                            <a href="index.html#">برنامه نویسان</a>
                        </p>
                    </div>
                    <!-- end span6 -->
                    <div class="span6">
                        <div class="pull-left"><a class="social_icn twitter" href="#" target="_blank"><span>
Twitter</span></a><a class="social_icn face" href="#" target="_blank"><span>Facebook</span></a><a class="social_icn rss" href="#" target="_blank"><span>RSS</span></a><a class="social_icn dribble" href="#" target="_blank"><span>Dribble</span></a><a class="social_icn vimeo"
                                                                                                                                                                                                                                                        href="#" target="_blank"><span>Vimeo</span></a><a class="social_icn tumblr" href="#" target="_blank"><span>Tumblr
</span></a>
                        </div>
                    </div>
                </div>
                <!-- end row-fluid -->
            </div>
            <!-- end container -->
        </div>
        <!-- end copyleft -->
    </footer>
</div>
<!-- end wrapper -->
<!-- Le javascript==================================================- -> <!--
Placed at the end of the document so the pages load faster -->
<script type='text/javascript' src='bellum/js/libs/jquery.js'></script>
<script type='text/javascript' src='bellum/js/merged-scripts.js'></script>
<script type='text/javascript' src='bellum/js/bootstrap.min.js'></script>
<script type='text/javascript' src='bellum/js/jquery.themepunch.plugins.min.js'></script>
<script type='text/javascript' src='bellum/js/jquery.themepunch.revolution.min.js'></script>
<script type='text/javascript' src='http://maps.google.com/maps/api/js?sensor=true&ver=3.5.1'></script>
<script type='text/javascript' src='bellum/js/jquery.tweet.js'></script>
<script type='text/javascript' src='bellum/js/scripts.js'></script>
<script type="text/javascript" src="http://mcstudiosmx.com/preview/mcstudios-switcher.js"></script>
<script language="JavaScript" type="bellum/text/javascript">
    var themeTitle = "0Bellum";
</script>
</body>

</html>
