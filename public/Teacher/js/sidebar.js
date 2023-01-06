var sider_bar = `<header>
                <div class="image-text">
                <div class="text logo-text">
                    <img src="asset/logo/left Menu@2x.png">
                </div>
                <span class="image">
                <img class="side_images" src="asset/toggle-logo.png">
            </span>
                </div>
                <img class="bx bx-chevron-right toggle" src="asset/Artboard.svg">
            </header>
            <div class="menu-bar">
                <div class="menu">
                    <ul class="menu-links">
                        <li class="nav-link">
                            <a class="dashboard" href="dashboard.html">
                                <img class=" icon" src="asset/teacher/Dashboard.svg">
                                <span class="text nav-text"> My Dashboard</span>
                            </a>
                        </li>
                        <li class="nav-link">
                            <a class="myclass"  href="myclass.html">
                                <img class="icon" src="asset/teacher/My Classes.svg">
                                <span class="text nav-text">My Classes</span>
                            </a>
                        </li>
                        <li class="nav-link">
                            <a class="student" href="student.html">
                                <img class="icon" src="asset/teacher/Students.svg">
                                <span class="text nav-text">Student </span>
                            </a>
                        </li>
                        <li class="nav-link">
                            <a class="parent" href="parent.html">
                                <img class=" icon" src="asset/teacher/parent.svg">
                                <span class="text nav-text">Parent Communication</span>
                            </a>
                        </li>
                        <li class="nav-link">
                            <a class="content" href="content.html">
                                <img class=" icon" src="asset/teacher/Content.svg">
                                <span class="text nav-text">Content Management</span>
                            </a>
                        </li>
                        <li class="nav-link">
                            <a class="exam" href="exam.html">
                                <img class=" icon" src="asset/teacher/Exams.svg">
                                <span class="text nav-text">Exam Management</span>
                            </a>
                        </li>
                        <li class="nav-link">
                            <a class="leave" href="leave.html">
                                <img class=" icon" src="asset/teacher/Leave.svg">
                                <span class="text nav-text">Leave Management</span>
                            </a>
                        </li>
                        <li class="nav-link">
                            <a class="announce" href="announcement.html">
                                <img class=" icon" src="asset/teacher/Announcements.svg">
                                <span class="text nav-text">Announcement </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <img src="asset/bg.svg" class="bottom_wave">`;


            $('.sidebar').html(sider_bar);


//             const currentLocation = location.href;
//             const menuItems = document.querySelectorAll ('.nav-link');
//             const menuLength = menuItems.length;
// //            console.log(menuLength)
//               for (let i = 0; i < menuLength; i++){
// //                console.log(i);
//                 if(menuItems[i].href === currentLocation) {
// //                  console.log(i);
//                   menuItems[i].classList.add ("active-sidemenu");
//                   }
//               }
