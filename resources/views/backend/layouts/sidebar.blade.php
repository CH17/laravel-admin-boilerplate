<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element text-center">
                    <img alt="image" class="rounded-circle" src="images/profile_small.png"/>
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <span class="block m-t-xs font-bold">Jhon Doe</span>
                        <span class="text-muted m-t-xs text-xs block">Adminstrator <b class="caret"></b></span>
                    </a>
                    <ul class="dropdown-menu animated fadeInRight m-t-xs">
                        <li><a class="dropdown-item" href="{{ route('change.password')}}">Change Password</a></li>
                        <li class="dropdown-divider"></li>
                        <li>
                            <a class="dropdown-item" href="{{ route('logout') }}" 
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                        </li>


                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                        style="display: none;">
                    @csrf
                </form>

                    </ul>
                </div>
                <div class="logo-element">
                    +
                </div>
            </li>

            <li class="active">
            <a href=" {{ route('dashboard') }}"><i class="fa fa-th-large"></i> <span class="nav-label">Dashboards</span></a>
            </li>
            <li>
                <a href="#"><i class="fa fa-diamond"></i> <span class="nav-label">Layouts</span></a>
            </li>
            <li>
                <a href="#"><i class="fa fa-pie-chart"></i> <span class="nav-label">Metrics</span> </a>
            </li>
            <li>
                <a href="#"><i class="fa fa-edit"></i> <span class="nav-label">Forms</span>
                    <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li><a href="#">Basic form</a></li>
                    <li><a href="#">Advanced Plugins</a></li>
                    <li><a href="#">Wizard</a></li>
                    <li><a href="#">File Upload</a></li>
                    <li><a href="#">Text Editor</a></li>
                    <li><a href="#">Markdown</a></li>
                </ul>
            </li>

            <li>
                <a href="#"><i class="fa fa-laptop"></i> <span class="nav-label">Grid options</span></a>
            </li>
            <li>
                <a href="#"><i class="fa fa-sitemap"></i> <span class="nav-label">Menu Levels </span><span
                        class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">

                    <li><a href="#">Second Level Item</a></li>
                    <li>
                        <a href="#">Second Level Item</a></li>
                    <li>
                        <a href="#">Second Level Item</a></li>
                </ul>
            </li>

        </ul>

    </div>
</nav>
