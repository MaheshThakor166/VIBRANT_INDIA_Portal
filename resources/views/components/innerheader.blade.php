    <header>
    <section class="header-top">
        <div class="left-part">
            <div class="logo-container">
                <a href="/">
                    <img src="{{ asset('images/company-logo.png') }}" alt="company logo">
                </a>
            </div>
        </div>
        <div class="d-lg-block d-md-block d-sm-none d-none">
        {{-- <div class="right-part d-sm-none d-md-block">
         
            <a href="{{route('login')}}" class="primary-btn">Sign in</a>
        </div> --}}
    </div>
    </section>

    <div class="header-bottom header-scroll">
        <button class="menu-btn d-lg-none d-sm-block d-md-none" id="menu-btn">
            <i class="fa-solid fa-bars"></i>
        </button>

        <nav class="nav-container">
            <span class="close-btn" id="close-btn">&times;</span>

            <ul class="nav-view">
                <li class="nav-item mobile-logo py-4 px-1 d-lg-none d-sm-block d-md-none">
                    <div class="logo-container d-md-block d-sm-block d-lg-none">
                        <a href="">
                            <img src="{{ asset('images/mobile-logo.png') }}" alt="company logo" style="height: 100%; width:187px;">
                        </a>
                    </div>
                </li>
                <li class="nav-item">
                    <a href="{{ route('innertopcategory') }}" class="nav-link">Top Category</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('newarrival') }}" class="nav-link">New Arrival</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('alltrendingcategory') }}" class="nav-link">Trending Products</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('innertopcategory') }}" class="nav-link">Blogs</a>
                </li>
                <li class="s-box d-none d-lg-block d-md-block">
                        <form action="" class="search-box">
                            <input type="text" id="search-bar" placeholder="Search here ...">
                            <i class="fa fa-search magnifier"></i>
                          </form>
                          <ul id="suggestions"></ul>

                </li>
                <li class="s-box d-lg-none d-md-none d-sm-block">
                <div class="right-part mt-5">

                    <!--login-btn-->
                  
                    <!--inqury btn-->
                   
                </div>
                </li>
            </ul>


           
        </nav>
     

        <div class="s-box d-md-none d-sm-block d-lg-none d-xl-none">
            <form action="" class="search-box">
                <input type="text" id="search-bar" placeholder="Search here ...">
                <i class="fa fa-search magnifier"></i>
              </form>
              <ul id="suggestions"></ul>

            </div>
    </div>
</header>
