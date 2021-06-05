<aside id="leftsidebar" class="sidebar">
    <!-- User Info -->
    <div class="user-info">
        <div class="image">
            <img src="assets/images/xs/avatar1.jpg" width="48" height="48" alt="User" />
        </div>
        <div class="info-container">
            <div class="name" data-toggle="dropdown" style="width: 150px;">{{ Auth::guard('admin')->user()->name }}</div>
            <div class="btn-group user-helper-dropdown">
                <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" role="button"> keyboard_arrow_down </i>
                <ul class="dropdown-menu slideUp">
                    <li><a href="profile.html"><i class="material-icons">person</i>Profile</a></li>
                    <li class="divider"></li>
                    <li class="divider"></li>
                    <li>
                        <a class="dropdown-item" href="{{ route('admin.logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Sign Out
                                    </a>

                                    <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                    </li>
                </ul>
            </div>
            <div class="email">{{ Auth::guard('admin')->user()->email }}</div>
        </div>
    </div>
    <!-- #User Info --> 
    <!-- Menu -->
    <div class="menu">
        <ul class="list">
            <li class="header">MAIN NAVIGATION</li>
            <li><a href="{{route('admin.home')}}"><i class="zmdi zmdi-home"></i><span>Dashboard</span> </a></li>
            <li><a href="{{route('branch.index')}}"><i class="zmdi zmdi-blogger"></i><span>Branche</span> </a></li>          
            <li><a href="{{route('studio.index')}}"><i class="zmdi zmdi-delicious"></i><span>Studio</span> </a></li>
            <li><a href="{{route('movie.index')}}"><i class="zmdi zmdi-email"></i><span>Movie</span> </a></li>
            <li><a href="{{route('schedule.index')}}"><i class="zmdi zmdi-time-restore"></i><span>Schedule</span> </a></li>
            <li><a href="{{route('admin.index')}}" class="demo-google-material-icon"><i class="material-icons">people</i><span> Admin</span> </a></li>
            <li><a href="{{route('users.index')}}" class="demo-google-material-icon"><i class="material-icons">people</i><span> Users</span> </a></li>
        </ul>
    </div>
    <!-- #Menu --> 
</aside>