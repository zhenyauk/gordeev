
<body class="bordered">

<!-- Preloader Two -->
<div id="preloader">
    <div class="spinner">
        <div class="rect1"></div>
        <div class="rect2"></div>
        <div class="rect3"></div>
        <div class="rect4"></div>
        <div class="rect5"></div>
    </div>
</div>
<div id="wrapper" class="main-wrapper">
    <header id="head" class="navbar-default sticky-header">
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-6">
                        <nav class="top-nav">
                            <ul>
                                <li><a href="mailto:zhenyauk@gmail.com"><i class="fa fa-envelope-o"></i> zhenyauk@gmail.com</a></li>
                                <li><a href="#"><i class="fa fa-phone"></i> +38(097)538-33-35</a></li>
                                <li><a href="#"><i class="fa fa-clock-o"></i>  9:00-17:00 </a></li>
                            </ul>
                        </nav>
                    </div>

                    <div class="col-sm-6 col-md-6">
                        <nav class="top-nav">

                            <ul class="text-right">
                                @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                    <li>
                                        <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                            {{ $properties['native'] }}
                                        </a>
                                    </li>
                                @endforeach
                                <li><a href="#"><i class="fa fa-key"></i> Регистрация</a></li>
                                <li><a href="#"><i class="fa fa-lock"></i> Вход</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <div class="slide-top">
            <div class="container">
                <span class="hide-top"><i class="fa fa-angle-up"></i></span>
            </div>
        </div>

        <div class="container">
            <div class="mega-menu-wrapper no-beaf nav22 clear">
                <div class="navbar-header">
                    <!-- responsive nav button -->
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- /responsive nav button -->
                    <a href="/" class="navbar-brand">
                        <img src="/storage/{{setting('site.logo')}}" alt="{{setting('site.title')}}">
                    </a>
                </div>
                <!-- main nav -->
                <nav class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li class=" mega-menu">
                            <a href="/">Главная</a>

                        </li>


                        <li class="mega-menu">
                            <a href="/blog">Блог</a>


                            <!--
                            <ul>
                                @php $i=0 @endphp
                                @foreach($top_menu as $m)
                                    <li>
                                        <a href="/{{$m->slug}}">{{$m->title}}</a>
                                        <ul>
                                            @foreach($m->getChilds as $sub)
                                                @foreach($sub->getBlogs as $blogs)
                                                    @php $i++ @endphp
                                                    @if($i > 15)
                                                        <a href="/{{$m->slug}}" style="font-size:17px;"> Далее... ></a>
                                                        @break
                                                    @endif
                                                    <li><a href="/{{$m->slug}}/{{$sub->slug}}/{{$blogs->slug}}">{{$blogs->title}}</a></li>

                                                @endforeach
                                            @endforeach
                                        </ul>

                                    </li>
                                    @endforeach


                            </ul>
                            -->
                        </li>



                        <li>
                            <a href="/contacts">Связь</a>

                        </li>


                        <li class="current mega-menu">
                            <a href="#promoPopup3" class="popup-inline magazin">Заказать сайт</a>

                        </li>

                    </ul>
                </nav>
                <!-- /main nav -->
            </div>
        </div>
    </header>
