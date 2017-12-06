 <div class="col s12 l12 m12 black largenav " style="height: 27px;">
        <div class="row">
            <div class="col l4 m4"></div>
            <div class="col l8 m8 s12 right">
                <?php $en = "en"; $am = "am"; $ti = "ti"; $so = "so"; $om = "om";?>
                    <div style="float: right; padding-right: 5%;" >
                        <a class="language white-text"  href='{{url("/language/{$en}")}}' style="color: #f5f5f5;">[ English ]</a>&nbsp;&nbsp;&nbsp;&nbsp;
                        <a class="language white-text"  href='{{url("/language/{$am}")}}'>[ አማርኛ ]</a>&nbsp;&nbsp;&nbsp;&nbsp;
                        <a class="language white-text"  href='{{url("/language/{$ti}")}}'>[ ትግርኛ ]</a>&nbsp;&nbsp;&nbsp;&nbsp;
                        <a class="language white-text"  href='{{url("/language/{$so}")}}'>[ Soomaali ]</a>&nbsp;&nbsp;&nbsp;&nbsp;
                        <a class="language white-text"  href='{{url("/language/{$om}")}}'>[ Afaan Oromoo ]</a>
                    </div>
            </div>
        </div>
    </div>
    <nav class="white hide-on-med-and-down">
        <div class="nav-wrapper">
            <div class="row row2">
                <div class="col m3 s2">
                    <a href='{{url("/")}}' class="brand-logo" style="float: left;  padding-left: 2.5%; ">
                        <img src="{{asset("/img/logo.png")}}" style="height: 64px; width: 128px;" alt="logo of Niqugebere">
                    </a>
                </div>
                <div class="flipkart-navbar-search smallsearch col m5 s12 center">
                    <div class="row">
                        <input class="flipkart-navbar-input col m10 s10 z-depth-1-half" type="search" placeholder="Search for Products, Brands and more" name="">
                        <button class="flipkart-navbar-button col m1 s1  green lighten-1 white-text" style="width: 50px;  fill: currentColor;">
                            <svg width="25px" height="25px" id="svg" style="text-align: center;">
                                <path d="M11.618 9.897l4.224 4.212c.092.09.1.23.02.312l-1.464 1.46c-.08.08-.222.072-.314-.02L9.868 11.66M6.486 10.9c-2.42 0-4.38-1.955-4.38-4.367 0-2.413 1.96-4.37 4.38-4.37s4.38 1.957 4.38 4.37c0 2.412-1.96 4.368-4.38 4.368m0-10.834C2.904.066 0 2.96 0 6.533 0 10.105 2.904 13 6.486 13s6.487-2.895 6.487-6.467c0-3.572-2.905-6.467-6.487-6.467 "></path>
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="cart largenav col m4 s4 right-align">
                    @if (Auth::guest())
                        <a class="signinButton btn" href="{{url('/login')}}">Login</a>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <a class="signinButton btn" href="{{url('/register')}}">register</a>
                    @else
                        <li>
                            <a  href="{{ route('logout') }}"
                                onclick="event.preventDefault();
           document.getElementById('logout-form').submit();">
                                Logout
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    @endif
                </div>
            </div>
        </div>
    </nav>
    <nav class="green darken-3">
        <div class="nav-wrapper">
            <a href='{{url("/")}}' class="brand-logo smallnav" style="float: left; padding-top: 0.5%; padding-left: 2.5%; ">
                <img src="{{asset("/img/logo-white.png")}}" style="height: 50px;" alt="logo of Nuexchange">
            </a>
            <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons" style="color: #FBFBFB;">menu</i></a>
            <div style="padding-left: 5%;">
                <ul id="navmenu" class="hide-on-med-and-down ">
                    <li><a href="{{url('/buyer')}}" class="menu">seeds</a></li>
                    <li><a href="{{url('/buyer/stock')}}" class="menu">fertilizers</a></li>
                    <li><a href="{{url('/buyer/stock')}}" class="menu">feeds</a></li>
                    <li><a href="{{url('/buyer/watch-list')}}" class="menu">aggro-chemical</a></li>
                    <li><a href="{{url('/buyer/cart')}}" class="menu">Agricultural Equipments</a></li>
                    <li><a href="{{url('/buyer/pre-order')}}"  class="menu">Veterinary drugs</a></li>
                    <li><a href="{{url('/buyer/help')}}" class="menu">services</a></li>
                    <li><a href="{{url('/buyer/help')}}" class="menu">others</a></li>
                </ul>
            </div>
            <ul class="side-nav green darken-3" id="mobile-demo">
                <li><a href="{{url('/buyer')}}" class="menu">seeds</a></li>
                <li><a href="{{url('/buyer/stock')}}" class="menu">fertilizers</a></li>
                <li><a href="{{url('/buyer/watch-list')}}" class="menu">aggro-chemical</a></li>
                <li><a href="{{url('/buyer/cart')}}" class="menu">Agricultural Equipments</a></li>
                <li><a href="{{url('/buyer/pre-order')}}"  class="menu">Veterinary drugs</a></li>
                <li><a href="{{url('/buyer/help')}}" class="menu">services</a></li>
                <li><a href="{{url('/buyer/help')}}" class="menu">others</a></li>
                <li class="navMenus">
                    <a class="menu" href="{{ url('/logout') }}"
                       onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">Logout</a></li>
                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
                </li>
            </ul>
        </div>
    </nav>
