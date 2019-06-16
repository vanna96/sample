<!--Main Navigation-->
<header style="background-color: #2f5f92; padding: 4px">
    <div class="container-fluid" style="padding: 0px">
        
        <div class="col-sm-12" style="padding: 0px">
            <nav class="navbar navbar-expand-lg navbar-dark default-color">
                <a class="navbar-brand" href="{{url('/')}}"><b>@lang('sample.home')</b></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active" id="active_dashboard">
                            <a class="nav-link" href="{{url('/home')}}">@lang('sample.dashboard')</a>
                        </li>
                        <li class="nav-item dropdown" id="active_product">
                          <a class="nav-link dropdown-toggle" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            @lang('sample.products')
                          </a>
                          <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{ route('product.index') }}">list</a>
                            <a class="dropdown-item" href="{{ route('product.create') }}">Create</a>
                          </div>
                        </li>

                        <li class="nav-item dropdown" id="active_category">
                          <a class="nav-link dropdown-toggle" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            @lang('sample.categories')
                          </a>
                          <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{ route('category.index') }}">@lang('sample.list')</a>
                            <a class="dropdown-item" href="{{ route('category.create') }}">@lang('sample.create')</a>
                          </div>
                        </li>
                    </ul>
                    <ul class="navbar-nav nav-flex-icons">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                            <span class="fa fa-language"></span>
                            @if (App::isLocale('en'))
                            English
                            @else
                            ខ្មែរ
                            @endif
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="{{url('locale/en')}}">@lang('sample.english')</a>
                                <a class="dropdown-item" href="{{url('locale/kh')}}">@lang('sample.khmer')</a>
                            </div>
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
                        <ul class="navbar-nav nav-flex-icons">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                {{ Auth::user()->name }}
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                    {{ __('sample.logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        </ul>
                        @endguest
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</header>
<!--Main Navigation-->