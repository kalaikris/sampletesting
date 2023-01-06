let domain = "http://43.204.125.59:8000"
var sider_bar = `<header>
                <div class="image-text">
                    <span class="image">
                        <!--<img src="logo.png" alt="">-->
                         <img class="side_images" src="${domain}/School/asset/logo/collapse menu logo@2x.png">
                    </span>
                    <div class="text logo-text">
                       <img src="${domain}/School/asset/logo/left Menu@2x.png"
                    </div>
                </div>
                
                  <img class=" bx bx-chevron-right toggle" src="${domain}/School/asset/Artboard.svg">
            </header>
            <div class="menu-bar">
                <div class="menu">
                    <ul class="menu-links">
                        <li class="nav-item">
                            <a class="nav-link" href="${domain}/school/index">
                                <img class=" icon" src="${domain}/School/asset/left-menu/My Dashboard.svg">
                                <span class="text nav-text"> My Dashboard</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="${domain}/school/school_configuration">
                                <img class=" icon" src="${domain}/School/asset/left-menu/School Configuration.svg">
                                <span class="text nav-text">School Configuration</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="${domain}/school/class_management">
                                <img class=" icon" src="${domain}/School/asset/left-menu/Class Management.svg">
                                <span class="text nav-text">Class Management</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="${domain}/school/student_management">
                                <img class=" icon" src="${domain}/School/asset/left-menu/Student Management.svg">
                                <span class="text nav-text">Student Management</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="${domain}/school/teacher_management">
                                <img class=" icon" src="${domain}/School/asset/left-menu/Teacher Management.svg">
                                <span class="text nav-text">Teacher Management</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="${domain}/school/parent_management">
                                <img class=" icon" src="${domain}/School/asset/left-menu/Parent Management.svg">
                                <span class="text nav-text">Parent Management</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="${domain}/school/admission_management">
                                <img class=" icon" src="${domain}/School/asset/left-menu/Admission Management.svg">
                                <span class="text nav-text">Admission Management</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="${domain}/school/user_management">
                                <img class=" icon" src="${domain}/School/asset/left-menu/User Management.svg">
                                <span class="text nav-text">User Management</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="${domain}/school/content_management">
                                <img class=" icon" src="${domain}/School/asset/left-menu/Content Management.svg">
                                <span class="text nav-text">Content Management</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="${domain}/school/exam_management">
                                <img class=" icon" src="${domain}/School/asset/left-menu/Exam Management.svg">
                                <span class="text nav-text">Exam Management</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="${domain}/school/fee_management">
                                <img class=" icon" src="${domain}/School/asset/left-menu/Fee Management.svg">
                                <span class="text nav-text">Fee Management</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="${domain}/school/report_management">
                                <img class=" icon" src="${domain}/School/asset/left-menu/Report Management.svg">
                                <span class="text nav-text">Report Management</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="${domain}/school/announcement_management">
                                <img class=" icon" src="${domain}/School/asset/left-menu/Announcement Management.svg">
                                <span class="text nav-text">Announcement Management</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="${domain}/school/legal_management">
                                <img class=" icon" src="${domain}/School/asset/left-menu/Legal Management.svg">
                                <span class="text nav-text">Legal Management</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <img src="${domain}/School/asset/bg.svg" class="bottom_wave">`;


            $('.sidebar').html(sider_bar);






            const currentLocation = location.href;
            const menuItems = document.querySelectorAll ('.nav-link');
            const menuLength = menuItems.length;
//            console.log(menuLength)
              for (let i = 0; i < menuLength; i++){
//                console.log(i);
                if(menuItems[i].href === currentLocation) {
//                  console.log(i);
                  menuItems[i].classList.add ("active-sidemenu");
                  }
              }
































