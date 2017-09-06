<nav class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-header">

            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Branding Image -->
            <a class="navbar-brand" href="{{ url('/superadmin') }}">
                {{ config('app.name', 'Laravel') }}
            </a>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav">
                &nbsp;
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                @if (Auth::guest())
                    <li><a href="{{ route('login') }}">Login</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->firstname }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li> <a href="{{ url('/superadmin') }}"> Dashboard</a></li>
                            <li role="separator" class="divider"></li> 
                            <li> <a href="{{ url('/superadmin/editprofile') }}"> Edit Profile</a></li> 
                            <li> <a href="{{ url('/superadmin/createaccount') }}"> Create Account</a></li> 
                            <li> <a href="{{ url('/superadmin/editaccount') }}"> Edit Accounts</a></li>
                            <li> <a href="{{ url('/superadmin/createadmin') }}"> Create Admin</a></li>
                            <li role="separator" class="divider"></li> 
                            <li> <a href="{{ url('/superadmin/uploadschedule') }}"> Upload Schedules</a></li>
                            <li role="separator" class="divider"></li>                                     
                            <li>
                                <a href="{{ route('superadmin.logout') }}"
                                    onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ route('superadmin.logout') }}" method="GET" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>