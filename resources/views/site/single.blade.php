@extends('site.layouts.master')

@section('content')



    <section id="main" class="container page-content">
        <!-- end page-header -->
        <div class="row-fluid">
            <section id="main-content" class="span12">
                <section id="services" class="blog">
                    <div class="row-fluid htabs">
                      <div class="widget widget_categories">
                        <ul class="nav nav-tabs span3 horizontal-tabs" id="myTab">
                            <aside id="sidebar" class="span4">
                            <li><a href="{{Url('/about')}}">درباره ما</a>
                            </li>
                            <li><a href="{{Url('/contact')}}">تماس با ما</a>
                            </li>
                            <li><a href="{{ url('/register') }}">ثبت نام</a>
                            </li>
                            <li><a href="{{ url('/login') }}">ورود</a>
                            </li>
                        </ul>
                        <div class="tab-content span9">
                            <!-- Service -->
                            <div class="tab-pane service-block active" id="service1">
                                <div class="row-fluid">
                                    <div class="clear"></div>
                                    <div class="line"></div>
                                    <div class="clear"></div>
                                    <div class="double-line" style="margin-top: 10px; margin-bottom: 10px;"></div>
                                    <section class="recent-works">
                                        <h3>آخرین کتاب  ها</h3><a class="more" href="index.html#">
                                        </a>
                                        <div class="clear"></div>
                                        <div class="row-fluid">

                                            @foreach($book as $book)
                                                <div class="project span3">
                                                    <a href="portfolio-single-1.html">
                                                        <div class="post-thumbnail">
                                                            <div class="plus">+</div> <span class="hover color-hover"></span>
                                                            <img src="{{url('/upload/images').'/'.$book->image}}" alt="" width="650" height="420" />
                                                        </div>
                                                    </a>
                                                </div>
                                            <!-- end post-thumbnail -->
                                            <h3 class="project-title post-title">{{$book->name}}</h3>
                                            <p>{{$book->auther}}</p>
                                                <span>{{$book->abstract}}</span>


                                    </div>
                                @endforeach
                                    </section>
                                </div>
                            </div>
                        </div>
                      </div>
                    </div>
                </section>
                <!-- comment -->
                <!-- type comment -->
            @include('layouts.comment')
            <!-- /type comment -->
                <section id="respond">
                    <div id="comments-add-bubble"><span></span>
                    </div>
                    <h2>
                        ارسال نظر
                    </h2>
                    @if(auth()->check())
                        <form method="post" action="/comment">
                            {{csrf_field()}}
                            @include('layouts.errors')
                            <p>
                                <input type="text" name="name" value="" placeholder="نام*" />
                            </p>
                            <p>
                                <textarea name="context" placeholder="نظر شما*"></textarea>
                            </p>
                            <p>
                                <button class="nbtn black" type="submit"><span>
اضافه کردن نظر
</span>
                                </button>
                            </p>
                        </form>
                    @else
                        <label>برای گذاشتن نظر در سایت عضو شوید یا لاگین کنید</label>
                    @endif
                </section>
                <!-- end respond -->

            <!-- /comment -->

            </section>
        </div>
    </section>
    <div class="line"></div>


    <!-- end main-content -->
    <div class="clear"></div>
</div>
<!-- end row-fluid -->

<!-- end main -->

@endsection


<!--  <span class="glyphicon glyphicon-time">ارسال شده در تاریخ</span> -->
