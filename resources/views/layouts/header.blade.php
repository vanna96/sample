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
                <a class="navbar-brand logo_h" href="{{ url('/')}}"><img src="{{ asset('images/logo1.png') }}" alt=""></a>
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
                        <li class="nav-item submenu dropdown" id="testing-list">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                             aria-expanded="false"> <i class="fa fa-list-alt" aria-hidden="true"></i>Testing</a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('sub-domain.create') }}">Sub Domain</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('sms.create') }}">SMS</a>
                                </li>
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
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>
<br>
<br>
<br>
<br>
<br>