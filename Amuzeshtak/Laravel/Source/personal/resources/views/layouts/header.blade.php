
<header id="topnav" class="defaultscroll sticky">
    <div class="container">
        <!-- Logo container-->
        <div>
            <a class="logo" href="index.html">
                <span class="text-dark">Learnpars</span>
            </a>
        </div>
        <div class="buy-button">

            @auth()
              <form action="{{route('logout')}}" method="post">
                  @csrf
                  <button type="submit" class="btn btn-danger">خروج</button>

              </form>
            @else
                <a href="{{route('login')}}">
                    <div class="btn btn-primary login-btn-primary">ورود</div>
                    <div class="btn btn-light login-btn-light">ورود</div>
                </a>
            @endauth


        </div><!--end login button-->
        <!-- End Logo container-->
        <div class="menu-extras">
            <div class="menu-item">
                <!-- Mobile menu toggle-->
                <a class="navbar-toggle">
                    <div class="lines">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </a>
                <!-- End mobile menu toggle-->
            </div>
        </div>

        <div id="navigation">
            <!-- Navigation Menu-->
            <ul class="navigation-menu nav-light">
                <li><a href="index.html">خانه</a></li>
                <li><a href="index.html">برنامه نویسی</a></li>
                <li><a href="index.html">تکنولوژی</a></li>
                <li><a href="index.html">خانه</a></li>
            </ul><!--end navigation menu-->
            <div class="buy-menu-btn d-none">
                <a href="{{route('login')}}" target="_blank" class="btn btn-primary">ورود</a>
            </div><!--end login button-->
        </div><!--end navigation-->
    </div><!--end container-->
</header><!--end header-->
<!-- Navbar End -->


