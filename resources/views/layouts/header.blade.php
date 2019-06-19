<style type="text/css">
    .nav-link{
        font-size: 14px !important;
    }
    input.form-Inputsearch{
        border: 0px solid #eadbdb00 !important;
        border-bottom: 2px solid #f39c12 !important;
        border-radius: 0px;
    }
    input.form-Inputsearch:focus {
        outline: 0px !important;
    }
</style>
<header class="header_area sticky-header">
    <div class="main_menu ">
        <nav class="navbar navbar-expand-lg navbar-light main_box">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <a class="navbar-brand logo_h" href="{{ url('/')}}"><img src="{{ asset('logo1.png') }}" alt=""></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                    <ul class="nav navbar-nav menu_nav ml-auto">
                        <li class="nav-item" id="dashboard-list"><a class="nav-link" href="{{url('/home')}}"><i class="fa fa-tachometer" aria-hidden="true"></i> @lang('sample.dashboard')</a></li>
                        <li class="nav-item submenu dropdown" id="product-list">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                             aria-expanded="false"><i class="fa fa-product-hunt" aria-hidden="true"></i> @lang('sample.products')</a>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a class="nav-link" href="{{ route('product.index') }}">@lang('sample.list')</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ route('product.create') }}">@lang('sample.create')</a></li>
                            </ul>
                        </li>
                        <li class="nav-item submenu dropdown" id="category-list">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                             aria-expanded="false"> <i class="fa fa-list-alt" aria-hidden="true"></i> @lang('sample.categories')</a>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a class="nav-link" href="{{ route('category.index') }}">@lang('sample.list')</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ route('category.create') }}">@lang('sample.create')</a></li>
                            </ul>
                        </li>
                        <li class="nav-item submenu dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                             aria-expanded="false"><i class="fa fa-language" aria-hidden="true"></i>   @if (App::isLocale('en'))
                                    English
                                @else
                                    ខ្មែរ
                                @endif</a>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a class="nav-link" href="{{url('locale/en')}}">@lang('sample.english')</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{url('locale/kh')}}">@lang('sample.khmer')</a></li>
                            </ul>
                        </li>
                        @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                        @endif
                        @else
                        <li class="nav-item submenu dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                             aria-expanded="false"> <i class="fa fa-user"></i> {{ Auth::user()->name }}</a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                    {{ __('sample.logout') }}
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    @endguest
                    <!-- <li class="nav-item active">
                        <form class="form-inline">
                            <input class="form-control form-control-sm mr-3 w-75 form-Inputsearch" type="text" placeholder="Search"
                            aria-label="Search">
                            <i class="fa fa-search" aria-hidden="true"></i>
                        </form>
                    </li> -->
                    </ul>
                    <!-- <ul class="nav navbar-nav navbar-right">
                        <li class="nav-item">
                            <button class="search">
                                <span class="fa fa-search lnr lnr-magnifier" id="search"></span>
                            </button>                         
                        </li>
                    </ul> -->
                </div>
            </div>
        </nav>
    </div>
    <!-- <div class="search_input" id="search_input_box">
        <div class="container">
            <form class="d-flex justify-content-between">
                <input type="text" class="form-control" id="search_input" placeholder="Search Here">
                <button type="submit" class="btn"></button>
                <span class="fa fa-search lnr lnr-cross" id="close_search" title="Close Search"></span>
            </form>
        </div>
    </div> -->
</header>
<br>
<br>
<br>