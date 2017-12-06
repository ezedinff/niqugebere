<nav class="top-nav col-md-offset-2 " style="background-color: #fff;">
    <div class="nav-wrapper">
        <a href="{{url('/')}}"  class="brand-logo" style="padding-left: 7%;">
            <img src="{{asset('img/logo.png')}}" height="40">
        </a>
        <a href="#" data-activates="nav-mobile" class="button-collapse top-nav full hide-on-large-only"><i class="material-icons blue-text">menu</i></a>
        <ul class="right hide-on-med-and-down" style="width: 75.6%; position: relative;">
            <li  style="min-width: 50.6% !important; ">
                <form  style="width: 100%; height: 50px;">
                    <div class="input-field z-depth-1" style="background-color: #f5f5f5; top: 7px;">
                        <input class="form-control" id="search" type="search" required>
                        <label class="label-icon" for="search" style="top: -17px; left: 10px;"><i class="fa fa-search" style="color: #66BB6A; font-size: 1.5em;"></i></label>
                    </div>
                </form>
            </li>
            <li><a href=""><i class="fa fa-bell " style="color: #66BB6A; font-size: 1.5em;"></i></a></li>
            <li><a href=""><i class="fa fa-comments " style="color: #66BB6A; font-size: 1.5em;"></i></a></li>
            <li class="">
                <a  class="dropdown-button" href="#!" data-activates="dropdown1">

                    <span class=" fa fa-angle-down"></span>
                </a>
            </li>
        </ul>
    </div>
</nav>

            <ul id="nav-mobile" class="collapsible side-nav fixed" style="background-color: #2A3F54 !important;">

                <li>
                    <div class="user-view">
                        <a><img class="circle" src="{{asset('img/default_pic.png')}}"></a>
                        <a><span class="name"></span></a>
                        <a ><span class="email" style="text-transform: uppercase;">smart farmer Admin</span></a>
                    </div>
                </li>
                <li >
                    <a class="collapsible-header" href="{{url('/admin/dashboard')}}">
                        <i class="fa fa-dashboard"></i> Dashboard
                    </a>
                </li>
                    <li><a class="collapsible-header" ><i class="fa fa-gear"></i> Manage Details <span class="fa fa-chevron-down"></span></a>
                        <ul class="collapsible-body">
                            <li><a href="{{url('admin/zoneTranslation/create')}}">Add zone</a></li>
                            <li><a href="{{url('/admin/add-woreda')}}">Add wordeda</a></li>
                        </ul>
                    </li>
                <li><a class="collapsible-header"><i class="fa fa-users"></i> Manage users<span class="fa fa-chevron-down"></span></a>
                    <ul class="collapsible-body">
                        <li><a href="{{url('/admin/users')}}">users</a></li>
                        <li><a href="{{url('/admin/add-user')}}">add user</a></li>
                    </ul>
                </li>
                <li >
                    <a class="collapsible-header" href="{{url('/admin/dashboard')}}">
                        <i class="fa fa-file-o"></i> Generate Report
                    </a>
                </li>
            </ul>


<ul id="dropdown1" class="dropdown-content"  >
    <li><a href="javascript:;" id="drop"> Profile</a></li>
    <li>
        <a id="drop" href="javascript:;">
            <span class="badge bg-red pull-right">50%</span>
            <span>Settings</span>
        </a>
    </li>
    <li><a href="javascript:;" id="drop">Help</a></li>
    <li>
        <a id="drop" href="{{ route('logout') }}"
           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
            <i class="fa fa-sign-out pull-right"></i> Logout
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
        </form>
    </li>

</ul>