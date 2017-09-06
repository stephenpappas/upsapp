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
            <a class="navbar-brand" href="{{ url('/home') }}">
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
                            <li> <a href="{{ url('/home/') }}"> Dashboard</a></li>
                            <li role="separator" class="divider"></li> 
                            <li> <a href="{{ url('/home/editprofile') }}"> Edit Profile</a></li>
                             <li role="separator" class="divider"></li>  
                            <li> <a href="{{ url('/home/editaccount') }}"> Edit Account Info</a></li>
                            <li> <a href="{{ url('/home/edithours') }}"> Edit Business Hours</a></li>
                            <li> <a href="{{ url('/home/editcontacts') }}"> Edit Business Contacts</a></li>
                            <li role="separator" class="divider"></li>
                            <li>                                    
                                <a href="{{ route('home.logout') }}"
                                    onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                    Logout 
                                </a>

                                <form id="logout-form" action="{{ route('home.logout') }}" method="GET" style="display: none;">
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