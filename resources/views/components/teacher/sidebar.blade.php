<nav class="sidebar">  
    <header>
        <div class="image-text">
        <div class="text logo-text">
            <img src="{{ asset('Teacher/asset/logo/left Menu@2x.png') }}">
        </div>
        <span class="image">
            <img class="side_images" src="{{ asset('Teacher/asset/toggle-logo.png') }}">
        </span>
        </div>
        <img class="bx bx-chevron-right toggle" src="{{ asset('Teacher/asset/Artboard.svg') }}">
    </header>
    <div class="menu-bar">
        <div class="menu">
            <ul class="menu-links">
                <li class="nav-link">
                    <a class="dashboard" href="dashboard.html" hidden>
                        <img class=" icon" src="{{ asset('Teacher/asset/teacher/Dashboard.svg') }}">
                        <span class="text nav-text"> My Dashboard</span>
                    </a>
                </li>
                <li class="nav-link">
                    <a class="myclass"  href="myclasses">
                        <img class="icon" src="{{ asset('Teacher/asset/teacher/My Classes.svg') }}">
                        <span class="text nav-text">My Classes</span>
                    </a>
                </li>
                <li class="nav-link">
                    <a class="student" href="student.html" hidden>
                        <img class="icon" src="{{ asset('Teacher/asset/teacher/Students.svg') }}">
                        <span class="text nav-text">Student </span>
                    </a>
                </li>
                <li class="nav-link">
                    <a class="parent" href="parent.html" hidden>
                        <img class=" icon" src="{{ asset('Teacher/asset/teacher/parent.svg') }}">
                        <span class="text nav-text">Parent Communication</span>
                    </a>
                </li>
                <li class="nav-link">
                    <a class="content" href="content.html" hidden>
                        <img class=" icon" src="{{ asset('Teacher/asset/teacher/Content.svg') }}">
                        <span class="text nav-text">Content Management</span>
                    </a>
                </li>
                <li class="nav-link">
                    <a class="exam" href="exam.html" hidden>
                        <img class=" icon" src="{{ asset('Teacher/asset/teacher/Exams.svg') }}">
                        <span class="text nav-text">Exam Management</span>
                    </a>
                </li>
                <li class="nav-link">
                    <a class="leave" href="leave.html" hidden>
                        <img class=" icon" src="{{ asset('Teacher/asset/teacher/Leave.svg') }}">
                        <span class="text nav-text">Leave Management</span>
                    </a>
                </li>
                <li class="nav-link">
                    <a class="announce" href="announcement.html" hidden>
                        <img class=" icon" src="{{ asset('Teacher/asset/teacher/Announcements.svg') }}">
                        <span class="text nav-text">Announcement </span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <img src="{{ asset('Teacher/asset/bg.svg') }}" class="bottom_wave">
</nav>