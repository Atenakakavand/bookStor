@extends('site.layouts.master')


@section('content')
    <section id="main-content">
        <div class="row-fluid">
            <div class="row-fluid intro ">
                <div class="span8">
                    <h1>

                        Bellum حق بیمه وردپرس
                    </h1>
                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد</p>
                </div>
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
                    <h3>طراحی ریسپانسیو</h3>
                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است
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
                <div class="col span4"><span class="number">2</span>
                    <h3>
                        ویژگی های شگفت انگیز
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
                        طراحی تمیز & حداقل
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
            </div>
            <!-- end row-fluid -->
            <div class="clear"></div>
            <div class="double-line" style="margin-top: 10px; margin-bottom: 10px;"></div>
            <section class="recent-works">
                <h3 class="card-title text-right m-2">{{$menu2->name}}</h3>
                <div class="clear"></div>
                <div class="row-fluid">
                    @foreach($books as $books)
                        <div class="project span3">
                            <a href="portfolio-single-1.html">
                                <div class="post-thumbnail">
                                    <div class="plus">+</div> <span class="hover color-hover"></span>
                                    <img src="bellum/img/portfolio/2.jpg" alt="" width="650" height="420" />
                                </div>
                                <!-- end post-thumbnail -->
                                <h3 class="project-title post-title">{{$books->name}}</h3>
                                <span class="georgia project-categories">{{$books->auther}}</span>
                            </a>
                            <a class="btn btn-warning btn-block" href="">ادامه مطلب</a>
                        </div>
                @endforeach
                <!-- end project -->

                </div>
                <!-- end row -->
            </section>
            <!-- end recent-works -->
        </div>
        <!-- end row-fluid -->
    </section>
@endsection


