<header class="header-banner-top">

  <div class="main-navigation">
    <input type="checkbox" name="mobile-menu-toggle" id="mobile-menu-toggle" class="mobile-menu-box" />
    <nav class="horizontal-nav primary-wrapper" role='navigation'>
      <ul>
        <li ><a href="{{url('/')}}">Home</a></li>
        <li class="active-link"><a href="{{url('/home')}}">Dashboard</a></li>
        <li class="folder"> 
          <input type="checkbox" name="folder-toggle-1" id="folder-toggle-1" class="folder-toggle-box hidden" />
          <label for="folder-toggle-1" class="folder-toggle-label"><a id="active-pro">Products</a></label>
          <ul>
            <li id="list-product"><a href="{{ route('product_index') }}" id="active-pro-list">List</a></li>
            <li id="create-product"><a href="{{ route('product_create') }}" id="active-pro-create">Create</a></li>
          </ul>
        </li>
        <li class="folder"> 
          <input type="checkbox" name="folder-toggle-2" id="folder-toggle-2" class="folder-toggle-box hidden" />
          <label for="folder-toggle-2" class="folder-toggle-label"><a id="active-cat">Categories</a></label>
          <ul>
            <li id="list-category"><a href="{{ route('category_index') }}" id="active-cat-list">List</a></li>
            <li id="create-category" ><a href="{{ route('category_create') }}" id="active-cat-create">Create</a></li>
          </ul>
        </li>
        <li class="folder"> 
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
            <li class="folder"> 
                <input type="checkbox" name="folder-toggle-3" id="folder-toggle-3" class="folder-toggle-box hidden" />
                <label for="folder-toggle-3" class="folder-toggle-label"><a>{{ Auth::user()->name }}</a></label>
                <ul>
                    <li>
                        <a href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                </ul>
                </li>
        @endguest
        </li>
      </ul>
    </nav>
    <label for="mobile-menu-toggle" class="mobile-menu-label hidden"></label>
  </div>  
</header>
