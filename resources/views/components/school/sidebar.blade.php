<nav class="sidebar"> 
<header>
                <div class="image-text">
                    <span class="image">
                        <!--<img src="logo.png" alt="">-->
                         <img class="side_images" src="{{ asset('School/asset/logo/collapse menu logo@2x.png') }}">
                    </span>
                    <div class="text logo-text">
                       <img src="{{ asset('School/asset/logo/left Menu@2x.png') }}">
                    </div>
                </div>
                
                  <img class=" bx bx-chevron-right toggle" src="{{ asset('School/asset/Artboard.svg') }}">
            </header>
            <div class="menu-bar">
                <div class="menu">
                    <ul class="menu-links">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('school/index') }}">
                                <img class=" icon" src="{{ asset('School/asset/left-menu/My Dashboard.svg') }}">
                                <span class="text nav-text"> My Dashboard</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('school/school_configuration') }}">
                                <img class=" icon" src="{{ asset('School/asset/left-menu/School Configuration.svg') }}">
                                <span class="text nav-text">School Configuration</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('school/class_management') }}">
                                <img class=" icon" src="{{ asset('School/asset/left-menu/Class Management.svg') }}">
                                <span class="text nav-text">Class Management</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('school/student_management') }}">
                                <img class=" icon" src="{{ asset('School/asset/left-menu/Student Management.svg') }}">
                                <span class="text nav-text">Student Management</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('school/teacher_management') }}">
                                <img class=" icon" src="{{ asset('School/asset/left-menu/Teacher Management.svg') }}">
                                <span class="text nav-text">Teacher Management</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('school/parent_management') }}">
                                <img class=" icon" src="{{ asset('School/asset/left-menu/Parent Management.svg') }}">
                                <span class="text nav-text">Parent Management</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('school/admission_management') }}">
                                <img class=" icon" src="{{ asset('School/asset/left-menu/Admission Management.svg') }}">
                                <span class="text nav-text">Admission Management</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('school/user_management') }}">
                                <img class=" icon" src="{{ asset('School/asset/left-menu/User Management.svg') }}">
                                <span class="text nav-text">User Management</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('school/content_management') }}">
                                <img class=" icon" src="{{ asset('School/asset/left-menu/Content Management.svg') }}">
                                <span class="text nav-text">Content Management</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('school/exam_management') }}">
                                <img class=" icon" src="{{ asset('School/asset/left-menu/Exam Management.svg') }}">
                                <span class="text nav-text">Exam Management</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('school/fee_management') }}">
                                <img class=" icon" src="{{ asset('School/asset/left-menu/Fee Management.svg') }}">
                                <span class="text nav-text">Fee Management</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('school/report_management') }}">
                                <img class=" icon" src="{{ asset('School/asset/left-menu/Report Management.svg') }}">
                                <span class="text nav-text">Report Management</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('school/announcement_management') }}">
                                <img class=" icon" src="{{ asset('School/asset/left-menu/Announcement Management.svg') }}">
                                <span class="text nav-text">Announcement Management</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('school/legal_management') }}">
                                <img class=" icon" src="{{ asset('School/asset/left-menu/Legal Management.svg') }}">
                                <span class="text nav-text">Legal Management</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <img src="{{ asset('School/asset/bg.svg') }}" class="bottom_wave">
        </nav>