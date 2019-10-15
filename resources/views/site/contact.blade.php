@extends('site.layouts.master')

@section('content')
    <section id="main" class="container page-content mt-lg-auto">
        <section id="page-header">

        <!-- end page-header -->
        <div class="row-fluid" id="contactpage-map">
            <div class="map-holder span12">
                <!--Edit the data- target attribute with the fulladdress that you want to display -->
                <div id="contactmappagetop" class="gmap" data-target="New York" data-zoom="18" style="width: 100%; height: 290px;"></div>
            </div>
        </div>
        <!-- end row-fluid -->
        <div class="row-fluid">
            <section id="main-content" class="span8">
                <h1>

                    ارتباط با ما
                </h1>
                <p>کتابخانه مرکزی در راستای تکمیل و کارآمد تر نمودن پایگاه، آماده دریافت پیشنهاد، انتقاد و اشکال شما می باشد. از طریق ایمیل می توانید به صورت مستقیم با ادمین در ارتباط باشید. </p>
                <div class="clear"></div>
                <br />
                <div id="contact">
                    <div id="message"></div>
                    <form method="post" name="contactform" id="contactform" action="send-email.php">
                        <fieldset>
                            <p>
                                <label for="name">نام:
                                    <span>(اجباری)</span>
                                </label>
                                <input name="name" type="text" id="name-input" size="30" value="" />
                            </p>
                            <p>
                                <label for="name">ایمیل: <span>(اجباری)</span>
                                </label>
                                <input name="email" type="text" id="email-input" size="30" value="" />
                            </p>
                            <p>
                                <label for="name">عنوان: <span>(اجباری)</span>
                                </label>
                                <input name="subject" type="text" id="subject-input" size="30" value="" />
                            </p>
                            <p>
                                <label for="name">پیام: <span>(اجباری)</span>
                                </label>
                                <textarea name="message" cols="60" rows="10" id="message-textarea" class="mcinput yes"></textarea>
                            </p>
                            <p>
                                <button class="nbtn black"><span>
ارسال پیام</span>
                                </button>
                            <div id="form-loader"></div>
                            </p>
                        </fieldset>
                    </form>
                </div>
                <div class="clear"></div>
            </section>
            <!-- end main-content -->
            <aside id="sidebar" class="span4">

                <div class="widget">

                    <h4 class="title">کتاب های ما</h4>
                    <div class="double-line"></div>
                    <div class="clear"></div>
                    <div class="accordion" id="accordionservices">
                        <div class="accordion-group">

                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion5172495f56ae0" href="index.html#collapse3"> <span class="tab-icon"></span>

                                    کتاب های ما
                                </a>
                            </div>
                            <div id="collapse3" class="accordion-body collapse ">
                                <?php
                                use App\Category;
                                $menu = Category::with('getChild')->where('parent_id',0)->get();
                                ?>
                                @foreach($menu as $menu)
                                    <li data-dropdown="dropdown">
                                        <a href="{{url('category/'.$menu->id)}}" class="dropdown-toggle" data-target="#">{{$menu->name}}
                                        </a>
                                        @if($menu->getChild->count()>0)
                                            <ul class="dropdown-menu">
                                                @foreach($menu->getChild as $submenu)
                                                    <li><a href="about.html">{{$submenu->name}}</a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        @endif
                                    </li>
                                @endforeach
                            </div>
                        </div>
                    </div>


                <div class="widget">
                    <h4 class="title">
                        شبکه های اجتماعی
                    </h4>
                    <div class="double-line"></div>
                    <div class="clear"></div>
                    <div class="textwidget"><a class="social_icn twitter" href="http://twitter.com/#" target="_blank"><span>
</span>Twitter</a><a class="social_icn face" href="index.html#" target="_blank"><span></span>
                            Facebook</a><a class="social_icn rss" href=""><span></span>Telegram</a><a class="social_icn dribble" href="index.html#" target="_blank"><span></span>Dribble</a><a class="social_icn vimeo" href="index.html#" target="_blank"><span></span>Vimeo</a><a class="social_icn tumblr"
                                                                                                                                                                                                                                                                               href="index.html#" target="_blank"><span></span>Tumblr</a>
                    </div>
                    <div class="clear"></div>
                </div>
            </aside>
            <div class="clear"></div>
        </div>
        <!-- end row-fluid -->
    </section>
    </section>
    <!-- end main -->
@endsection

