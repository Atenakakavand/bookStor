<header id="header" class="container navbar">
    <!-- Collapse button mobile-->
    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span>
        <span class="icon-bar"></span>  <span class="icon-bar"></span>
    </a>
    <!-- Logo -->
    <h1><a id="logo"
           class="pull-right" href="{{url('/')}}">Markazi</a></h1>
    <div id="top-contact">
        <p>
        <div style="padding-left: 523px;" class="top-right links">
            @auth
                <a href="{{ url('/admin') }}">{{ Auth::user()->name }}سلام</a>****
                <a href="{{ url('/logout') }}"
                   onclick="event.preventDefault();document.getElementById('login-form').submit()">خروج</a>
                <form id="login-form" action="{{ url('/logout') }}" method="POST" style="display:none;">
                    {{ csrf_field() }}
                </form>
                @if(!\Auth::user()->admin())
                    <div>
                        <a href="{{ url('/user') }}">{{ Auth::user()->name }}سلام</a>****
                        <a href="{{ url('/logout') }}"
                           onclick="event.preventDefault();document.getElementById('login-form').submit()">خروج</a>
                        <form id="login-form" action="{{ url('/logout') }}" method="POST" style="display:none;">
                            {{ csrf_field() }}
                        </form>
                    </div>
                @endif
            @else
                <a id="login" rel="#overlay" href="{{ route('login') }}">ورود</a>
                <a href="{{ route('register') }}">ثبت نام</a>
            @endauth

        </div>
        </p>
        <div class="pull-left">
            <p>
                <span class="icon-envelope-alt"></span><a href="#">info@markazi.org</a>
            </p>
            <p><span class="icon-phone"></span>12345678</p>
        </div>
        <!-- end pull-left -->
    </div>
    <!-- end top-contact -->
    <div class="clear"></div>
    <!-- Menu -->
    <nav id="menu" class="nav-collapse collapse default-menu">
        <ul id="menu-top-menu" class="nav">
            <!-- Home -->
            <li class="dropdown current_page_item" data-dropdown="dropdown"><a href="{{url('/')}}" class="dropdown-toggle" data-target="#">صفحه اصلی</a>
            </li>
            <!-- About -->
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
                                <li><a href="{{url('category/'.$menu->id.'/'.$submenu->id)}}">{{$submenu->name}}</a>
                                </li>
                            @endforeach
                        </ul>
                    @endif
                </li>
        @endforeach
        <!-- Services -->

            <!-- Contact -->
            <li><a href="{{Url('/contact')}}">تماس با ما</a>
            </li>

        </ul>
    </nav>
    <!-- end #menu -->

    <div class="clear"></div>
    <!-- end #header -->
</header>
