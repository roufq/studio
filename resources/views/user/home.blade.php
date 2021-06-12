<!DOCTYPE html>
<html>
    <head>
        <title>user @yield('title')</title>
        <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
        @stack('css')
    </head>
    <body>
        <div class="topbar">
            <div class="row">
                <div class="logo" style="text-align: center; margin: 2px;">
                    <h2>User Schedule</h2>
                </div>
            </div>
            <a
                class="dropdown-item"
                href="{{ route('user.logout') }}"
                onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                Sign Out
            </a>

            <form
                id="logout-form"
                action="{{ route('user.logout') }}"
                method="POST"
                class="d-none">
                @csrf
            </form>
        </div>
        <div class="sidebar">
            <div class="profile">
                <div class="name" data-toggle="dropdown">{{ Auth::guard('user')->user()->name }}</div>
                <div class="email">{{ Auth::guard('user')->user()->email }}</div>
            </div>
            <ul>
                <li>
                    <a href="{{route('user.home')}}">
                        <p>Dashboard</p>
                    </a>
                </li>
                <li>
                    <a href="{{route('user.schedul.index')}}">
                        <p>Schedule</p>
                    </a>
                </li>
            </ul>
        </div>

        <div class="content">
            @yield('content')

        </div>
    </body>
    @stack('js')
</html>