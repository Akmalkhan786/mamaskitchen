<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
    <div class="container-fluid">
        <div class="navbar-wrapper">
            <a class="navbar-brand" href="">Dashboard</a>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end">
            {{--<form class="navbar-form">--}}
                {{--<div class="input-group no-border">--}}
                    {{--<input type="text" value="" class="form-control" placeholder="Search...">--}}
                    {{--<button type="submit" class="btn btn-white btn-round btn-just-icon">--}}
                        {{--<i class="material-icons">search</i>--}}
                        {{--<div class="ripple-container"></div>--}}
                    {{--</button>--}}
                {{--</div>--}}
            {{--</form>--}}
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{route('admin.dashboard')}}">
                        {{--<i class="material-icons">dashboard</i>--}}
                        <i class="fa fa-dashboard"></i>
                        <p class="d-lg-none d-md-block">
                            Stats
                        </p>
                    </a>
                </li>
                {{--<li class="nav-item dropdown">--}}
                    {{--<a class="nav-link" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
                        {{--<i class="material-icons">notifications</i>--}}
                        {{--<span class="notification">5</span>--}}
                        {{--<p class="d-lg-none d-md-block">--}}
                            {{--Some Actions--}}
                        {{--</p>--}}
                    {{--</a>--}}
                    {{--<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">--}}
                        {{--<a class="dropdown-item" href="#">Mike John responded to your email</a>--}}
                        {{--<a class="dropdown-item" href="#">You have 5 new tasks</a>--}}
                        {{--<a class="dropdown-item" href="#">You're now friend with Andrew</a>--}}
                        {{--<a class="dropdown-item" href="#">Another Notification</a>--}}
                        {{--<a class="dropdown-item" href="#">Another One</a>--}}
                    {{--</div>--}}
                {{--</li>--}}
                <li class="nav-item">
                    <a class="nav-link" href="">
                        {{--<i class="material-icons">person</i>--}}
                        <i class="fa fa-user"></i>
                        <p class="d-lg-none d-md-block">
                            Account
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                        {{--<i class="material-icons">exit_to_app</i>--}}
                        <i class="fa fa-sign-out"></i>
                        <p class="hidden-lg hidden-md">Logout</p>
                    </a>
                    <form id="logout-form" method="POST" action="{{ route('logout') }}" style="display: none">
                        @csrf
                    </form>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- End Navbar -->