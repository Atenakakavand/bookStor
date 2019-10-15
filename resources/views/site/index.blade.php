@extends('site.layouts.master')

@section('slider')
    <section id="homeSlider" class="revslider" data-speed="6000" data-height="440">
        <div class="bannercontainer" style="background:transparent !important;">
            <div class="banner">
                <ul>
                    <!-- BOXFADE -->
                    <li data-transition="boxfade" data-slotamount="5">
                        <img src="<?=url('bellum/img/template/a.jpg')?>">
                        <div class="caption lft big_white" data-x="70" data-y="140" data-speed="500" data-start="900" data-easing="easeOutBack">
                          کتابخانه مرکزی
                        </div>
                        <div class="caption lft small_white" data-x="70" data-y="230" data-speed="500" data-start="1200" data-easing="easeOutBack">
                        </div>
                    </li>
                    <li data-transition="boxfade" data-slotamount="5">
                        <img src="<?=url('/bellum/img/template/aa.jpg')?>">
                        <div class="caption lft big_white" data-x="209" data-y="64" data-speed="900" data-start="900" data-easing="easeOutBack">
                            کتابخانه مرکزی</div>
                    </li>
                    <li data-transition="boxfade" data-slotamount="5">
                        <img src="<?=url('/bellum/img/template/slide1.jpg')?>">
                        <div class="caption lfr big_white" data-x="494" data-y="140" data-speed="500" data-start="900" data-easing="easeOutBack">

                            کتابخانه مرکزی
                        </div>
                    </li>
                    <li data-transition="fade" data-slotamount="5">
                        <img src="<?=url('/bellum/img/template/a1.jpg')?>">
                        <div class="caption lfr" data-x="359" data-y="26" data-speed="400" data-start="800" data-easing="easeOutExpo">
                            <img src="<?=url('/bellum/img/slides/tra6.png')?>">
                        </div>
                        <div class="caption lfb big_white" data-x="66" data-y="140" data-speed="500" data-start="900" data-easing="easeOutBack">
                            کتابخانه مرکزی</div>
                        <div class="caption lfb small_white" data-x="70" data-y="230" data-speed="500" data-start="1200" data-easing="easeOutBack">
                        </div>
                    </li>
                </ul>
                <div class="tp-bannertimer"></div>
            </div>
        </div>
    </section>
@endsection


@section('content')
    <section id="main-content">
        <div class="row-fluid">
            <div class="row-fluid intro ">

                <!-- end span8 -->
                <div class="hsocial span4">
                    <div class="pull-left">
                        <p>ما اجتماعی هستیم</p>
                        <div class="clear"></div><a class="social_icn twitter" href="http://twitter.com/#" target="_blank"><span>Twitter</span></a><a class="social_icn face" href="#" target="_blank"><span>Facebook</span></a>
                        <a class="social_icn dribble" href="#" target="_blank">
                            <span>Dribble</span>
                        </a><a class="social_icn vimeo" href="#" target="_blank"><span>Vimeo</span></a>

                        <a class="social_icn tumblr" href="#" target="_blank"><span>Tumblr</span></a><a class="social_icn rss" href="#"><span>RSS</span></a>
                    </div>
                </div>
                <!-- end social -->
            </div>
            <!-- end row- fluid -->
            <div class="clear"></div>
            <div class="double-line" style="margin-top: 10px; margin-bottom: 10px;"></div>
            <div class="row-fluid numbered">
                <div class="col span4"><span class="number">1</span>
                    <h3>درباره ما</h3>
                    <p>امروزه پیشرفت تکنولوژی و عصر اطلاعات الکترونیکی موجب گردیده است تا کتابخانه های دیجیتالی جایگاهی ویژه را در علم اطلاعات و دانش شناسی پیدا کنند، جایگاهی که هر روز بر محبوبیت آن افزوده و استقبال از آن دوچندان شده است...
                        <br>
                        <br>
                        <br>
                        <a href="{{Url('about')}}"><strong>
                                اطلاعات بیشتر
                            </strong> <span class="icon-plus"></span></a>
                    </p>
                </div>
                <!-- end col -->
                <div class="col span4"><span class="number">2</span>
                    <h3>
                        درباره سایت کتابخانه
                    </h3>
                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد
                        <br />
                        <br />لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است
                        <br />
                        <br />
                        <a href="#"><strong>
                                اطلاعات بیشتر
                            </strong> <span class="icon-plus"></span></a>
                    </p>
                </div>
                <!-- end col -->
                <div class="col span4"><span class="number">3</span>
                    <h3>
                       تصاویری از کتابخانه
                    </h3>
                    <p>تصاویری از کتابخانه که تصویر نمای بیرون و قسمت هایی از داخل کتابخانه در این صفحه موجود است...
                        <br />
                        <br />
                        <br />
                        <a href="{{url('imgOfLib')}}"><strong>
                                اطلاعات بیشتر
                            </strong> <span class="icon-plus"></span></a>
                    </p>
                </div>
                <!-- end col -->
            </div>
            <!-- end row-fluid -->
            <div class="clear"></div>
            <div class="double-line" style="margin-top: 10px; margin-bottom: 10px;"></div>
            <section class="recent-works">
                <h3>آخرین کتاب  ها</h3><a class="more" href="index.html#">
                </a>
                <div class="clear"></div>
                <div class="row-fluid">

                    @foreach($lastBook as $lastBook)
                        <div class="project span3">
                            <a href="portfolio-single-1.html">
                                <div class="post-thumbnail">
                                    <div class="plus">+</div> <span class="hover color-hover"></span>
                                    <img src="{{url('upload/images').'/'.$lastBook->image}}" alt="" width="650" height="420" />
                                </div>
                                <!-- end post-thumbnail -->
                                <h3 class="project-title post-title">{{$lastBook->name}}</h3>
                                <span class="georgia project-categories">{{$lastBook->auther}}</span>
                            </a>
                            <a class="btn btn-warning btn-block" href="{{$lastBook->pathSlug()}}">ادامه مطلب</a>
                        </div>
                    @endforeach

                </div>
                <!-- end row -->
            </section>
            <!-- end recent-works -->
        </div>
        <!-- end row-fluid -->
    </section>
@endsection
