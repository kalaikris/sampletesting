<header id="main-dash-header" class="dash-header">
        <div class="back-drop hidden"></div>
        <div class="nav-menu">
        <ul class="nav-links">
            <li id="profile">
            <div class="dropdown-logout">
                <a class="logout-toggle" href="#" role="button" id="logoutdropdownMenuLink" aria-expanded="false">
                <span id="profile-pic">
                    <img src="{{ asset('SuperAdmin/asset/profile.png') }}" alt="">
                </span>
                <span class="profile-name">
                    <p>Welcome</p>
                    <h2>Jerry Higgins</h2>
                    </span>
                </a>
                <div class="dropdown-menu">
                <a class="dropdown-item" onclick="logout()">Logout</a>
                </div>
            </div>
            </li>
        </ul>
        </div>
</header>