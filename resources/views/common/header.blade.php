<header>
            <div class="header-banner">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-xs-12 col-sm-6 col-md-6">
                            <div class="assetBlock">
                                <div style="height: 20px; overflow: hidden;" id="slideshow">
                                    <p style="display: none;">You can <span>Book</span> an Appointment for free</p>
                                    <p style="display: block;">Hot deals! - <span>Get</span> what you deserve </p>
                                    <p style="display: none;">Save up to <span>20%</span> Hurry limited offer!</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-lg-6 col-xs-12 col-sm-6 col-md-6 call-us">
                            <i class="fa fa-clock-o"></i> Sunday- Friday : 9am to 6pm
                            <i class="fas fa-phone-volume"></i> 01-6638444</div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div id="header">
                        <div class="header-container">
                            <div class="header-logo">
                                <a href="{{ route('service') }}" title="Car HTML" class="logo">
                                    <div>
                                        <img src="asset/images/logo.png" alt="AutoPoint">
                                    </div>
                                </a>
                            </div>
                            <div class="header__nav">

                                <div class="fl-header-right ">
                                    <div class="fl-links">
                                        <div class="no-js">
                                            <a title="" class="clicker fas fa-bars">
                                            </a>
                                            <div class="fl-nav-links">
                                                <h3>My Account</h3>
                                                <ul class="navbar-nav ml-auto">
                                                    <!-- Authentication Links -->
                                                    @guest
                                                        @if (Route::has('login'))
                                                            <li class="nav-item">
                                                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                                            </li>
                                                        @endif
                                                        <br>
                                                        @if (Route::has('register'))
                                                            <li class="nav-item">
                                                                <a class="nav-link" href="{{ route('login') }}">{{ __('Register') }}</a>
                                                            </li>
                                                        @endif
                                                    @else
                                                        <li class="nav-item dropdown">
                                                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                                {{ Auth::user()->name }}
                                                            </a>
                                                        <br>
                                                        @if(Auth::User()->userType=="main")
                                                            <a href="{{ route('superAdmin') }}">
                                                                Dashboard
                                                            </a>
                                                        @else
                                                            <a href="{{ route('dashboard') }}">
                                                                Dashboard
                                                            </a>
                                                        @endif
                                                        <br>
                                                            <div class="" aria-labelledby="navbarDropdown">
                                                                <a class="dropdown-item" href="{{ route('logout') }}"
                                                                   onclick="event.preventDefault();
                                                                                 document.getElementById('logout-form').submit();">
                                                                    {{ __('Logout') }}
                                                                </a>
                                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                                    @csrf
                                                                </form>
                                                            </div>
                                                        </li>
                                                    @endguest
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!--<div class="collapse navbar-collapse">
                                        <form class="navbar-form" role="search">
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="Search">
                                                <span class="input-group-btn">
                                                    <button type="submit" class="search-btn">
                                                        <span class="glyphicon glyphicon-search">
                                                        <span class="sr-only fas fa-search">Search
                                                        </span>
                                                        </span>
                                                    </button>
                                                </span>
                                            </div>
                                        </form>
                                    </div>-->
                                    <!--links-->
                                </div>
                                <div class="fl-nav-menu">
                                    <nav>
                                        <div class="mm-toggle-wrap">
                                            <div class="mm-toggle"><i class="fa fa-bars"></i><span class="mm-label">Menu</span> </div>
                                        </div>
                                        <div class="nav-inner">
                                            <!-- BEGIN NAV -->
                                            <ul id="nav" class="hidden-xs">
                                                <!--<li class="active"> <a class="level-top" href="{{route('default')}}"><span>Home</span></a></li>-->
                                                <li class="active"> <a class="level-top" id="serviceHeader" href="{{route('service')}}"><span>Servicing</span></a></li>
                                                <li class="active"> <a class="level-top" id="evaluateHeader" href="{{route('evaluate')}}"><span>Evaluate</span></a></li>
                                                <!--
                                                <li class="level0 parent drop-menu">
                                                    <a class="level-top" href="#"><span>Blog</span></a>
                                                    <ul class="level1">
                                                        <li class="level1 first"><a href="blog.html"><span>Blog List</span></a></li>
                                                        <li class="level1 nav-10-2"> <a href="blog-detail.html"> <span>Blog Detail</span> </a> </li>
                                                    </ul>
                                                </li>-->

                                                <!--<li class="mega-menu hidden-sm"> <a class="level-top" href="compare.html"><span>Compare Vehicles‎</span></a> </li>-->
                                                <!--<li class="level0 parent drop-menu">
                                                    <a href="#"><span>Pages</span> </a>
                                                    
                                                    <ul class="level1">
                                                        <li class="level1"> <a href="about-us.html"> <span>About us</span> </a> </li>
                                                        <li class="level1 nav-10-4"> <a href="wishlist.html"> <span>Wishlist</span> </a> </li>
                                                        <li class="level1"> <a href="dashboard.html"> <span>Dashboard</span> </a> </li>
                                                        <li class="level1"><a href="contact-us.html"><span>Contact us</span></a> </li>
                                                        <li class="level1"><a href="404error.html"><span>404 Error Page</span></a> </li>
                                                        <li class="level1"><a href="login.html"><span>Login Page</span></a> </li>
                                                        <li class="level1"><a href="newsletter.html"><span>Newsletter</span></a> </li>
                                                    </ul>
                                                </li>

                                                <li class="fl-custom-tabmenulink mega-menu">
                                                    <a href="#" class="level-top"> <span>Offers</span> </a>
                                                    <div class="level0-wrapper fl-custom-tabmenu" style="left: 0px; display: none;">
                                                        <div class="container">
                                                            <div class="header-nav-dropdown-wrapper clearer">
                                                                <div class="grid12-3">
                                                                    <div><img src="../images/custom-img1.jpg" alt="custom-image"></div>
                                                                    <h4 class="heading">SALE UP TO 30% OFF</h4>
                                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                                                </div>
                                                                <div class="grid12-3">
                                                                    <div><img src="../images/custom-img2.jpg" alt="custom-image"></div>
                                                                    <h4 class="heading">SALE UP TO 30% OFF</h4>
                                                                    <p>Sed et quam lacus. Fusce condimentum eleifend enim a feugiat.</p>
                                                                </div>
                                                                <div class="grid12-3">
                                                                    <div><img src="../images/custom-img3.jpg" alt="custom-image"></div>
                                                                    <h4 class="heading">SALE UP TO 30% OFF</h4>
                                                                    <p>Sed et quam lacus. Fusce condimentum eleifend enim a feugiat.</p>
                                                                </div>
                                                                <div class="grid12-3">
                                                                    <div><img src="../images/custom-img4.jpg" alt="custom-image"></div>
                                                                    <h4 class="heading">SALE UP TO 30% OFF</h4>
                                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>-->
                                            </ul>
                                            <!--nav-->
                                        </div>
                                    </nav>
                                </div>
                            </div>

                            <!--row-->

                        </div>
                    </div>
                </div>
            </div>
        </header>
