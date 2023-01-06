<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Student Management</title>
    <link rel="icon" href="{{ asset('School/asset/logo/top-iocn.png') }}"  />
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="{{ asset('School/css/boxicons.min.css') }}">
    <!-- <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'> -->

    <link rel="stylesheet" href="{{ asset('School/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('School/css/jquery_dataTables_min.css') }}">
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="{{ asset('School/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('School/css/dashboard.css') }}">
    <link rel="stylesheet" href="{{ asset('School/css/student_management.css') }}">
    <link rel="stylesheet" href="{{ asset('School/css/class_management.css') }}">
</head>

<body>
    <div class="mani">
        <!-- ......sidebar.... -->
        <!-- <nav class="sidebar"> </nav> -->
        <x-school.sidebar/>
        <!-- .....main..... -->
        <main class="home">
            <header class="nav_cont">
                <div class="sub_content">
                    <img src="{{ asset('School/asset/Rectangle@2x.png') }}">
                    <div class="text_titel" id="community">
                        <p>Welcome</p>
                        <h4>Jerry Higgins</h4>
                        <div class="community_box">
                            <ul class="community_list">
                                <li style="border-bottom:unset;"><a href="#">Logout</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </header>
            <div class="boder_bottom"></div>
            <div class="Student_details">
                <div class="header_titel">
                    <div>
                        <h4>Student Management</h4>
                        <!-- <p>Total Years - 4</p> -->
                    </div>
                    <div class="text_titels" id="communitys">
                        <button class="download_btn">Download</button>
                        <div class="community_boxs">
                            <ul class="community_list">
                                <li><a href="#">PDF</a></li>
                                <li><a href="#">XLS</a></li>
                                <li><a href="#">CSV</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="navbar-contens">
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-home-tab" data-toggle="pill" data-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Student List</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-profile-tab" data-toggle="pill" data-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Dropout List</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                            <div class="titel_conts">
                                <div class="">
                                    <div class="academic_text">
                                        <h4>Student List</h4>
                                        <p>Total Students - 4098</p>
                                    </div>
                                    <div class="select_addemics_con">
                                        <div class="select_contern">
                                            <p>Academic Year</p>
                                            <select>
                                                <option>2021-2022</option>
                                                <option>2020-2021</option>
                                            </select>
                                        </div>
                                        <div class="select_contern">
                                            <p>Choose Class</p>
                                            <select>
                                                <option>All</option>
                                                <option>A</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <button class="year_btn"><img src="{{ asset('School/asset/icons/add student.svg') }}">Add Student</button>
                                </div>
                            </div>
                            <div class="main_table">
                                <table class="display data--table" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>S.No</th>
                                            <th>Student ID</th>
                                            <th>Name</th>
                                            <th>Gender</th>
                                            <th>Date of Birth</th>
                                            <th>Age</th>
                                            <th>Standard</th>
                                            <th>Section</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>6C001</td>
                                            <td>Eddie Drake</td>
                                            <td>Male</td>
                                            <td>14 Oct 2022</td>
                                            <td>11</td>
                                            <td>Class 6</td>
                                            <td>A</td>
                                            <td class="edit_text" onclick="student_view()"><img src="{{ asset('School/asset/icons/view.svg') }}"><a href="javascript:void(0)">View</a></td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>6C002</td>
                                            <td>Randy Martinez</td>
                                            <td>Male</td>
                                            <td>08 Jul 2022</td>
                                            <td>11</td>
                                            <td>Class 6</td>
                                            <td>A</td>
                                            <td class="edit_text" onclick="student_view()"><img src="{{ asset('School/asset/icons/view.svg') }}"><a href="#">View</a></td>
                                        </tr>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                            <div class="titel_conts">
                                <div class="">
                                    <div class="academic_text">
                                        <h4>Dropout List</h4>
                                        <p>Total Students - 4098</p>
                                    </div>
                                    <div class="select_addemics_con">
                                        <div class="select_contern">
                                            <p>Academic Year</p>
                                            <select>
                                                <option>2021-2022</option>
                                                <option>2020-2021</option>
                                            </select>
                                        </div>
                                        <div class="select_contern">
                                            <p>Class</p>
                                            <select>
                                                <option>Select Class</option>
                                                <option>A</option>
                                            </select>
                                        </div>
                                        <div class="select_contern">
                                            <p>Section</p>
                                            <select>
                                                <option>Select Section</option>
                                                <option>A</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <!--    <div>
                                    <button class="year_btn" data-toggle="modal" data-target="#exampleModal"><img src="asset/icons/add year.svg">Add Student</button>
                                </div> -->
                            </div>
                            <div class="main_table">
                                <table class="display data--table" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>S.No</th>
                                            <th>Student ID</th>
                                            <th>Name</th>
                                            <th>Gender</th>
                                            <th>Date of Birth</th>
                                            <th>Age</th>
                                            <th>Standard</th>
                                            <th>Section</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>6C001</td>
                                            <td>Eddie Drake</td>
                                            <td>Male</td>
                                            <td>14 Oct 2022</td>
                                            <td>11</td>
                                            <td>Class 6</td>
                                            <td>A</td>
                                            <td class="edit_text" onclick="student_view()"><img src="{{ asset('School/asset/icons/view.svg') }}"><a href="#">View</a></td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>6C002</td>
                                            <td>Randy Martinez</td>
                                            <td>Male</td>
                                            <td>08 Jul 2022</td>
                                            <td>11</td>
                                            <td>Class 6</td>
                                            <td>A</td>
                                            <td class="edit_text" onclick="student_view()"><img src="{{ asset('School/asset/icons/view.svg') }}"><a href="#">View</a></td>
                                        </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ........... -->
            <div class="hidden" id="student_view">
                <div>
                    <ul class="breadcrumb-set">
                        <li><a href="#" class="">Student Management</a> /</li>
                        <li><a href="#" class="">Eddie Drake</a></li>
                    </ul>
                </div>
                <div class="set-time-table">
                    <div style="display: flex; gap: 10px;">
                        <div class="left_arrows">
                            <img src="{{ asset('School/asset/img/arrow.png') }}" onclick="student_view()">
                        </div>
                        <div>
                            <h4>Eddie Drake</h4>
                            <p>6C001</p>
                        </div>
                    </div>
                    <div><button class="cancel_btns" data-toggle="modal" data-target="#exampleModal"><img src="{{ asset('School/asset/cancel.png') }}">Disable Student</button>
                        <button class="edit_stu" onclick="edit_student_view()"><img src="{{ asset('School/asset/edites.png') }}">Edit Student</button>
                    </div>
                </div>
                <div class="main_tables">
                    <div class="profile_contents">
                        <img src="{{ asset('School/asset/student.png') }}">
                        <div class="">
                            <div class="profile_details">
                                <h6>Eddie Drake</h6>
                                <button class="status_btn">RTE Student</button>
                            </div>
                            <div class="student_time_sheet">
                                <table>
                                    <tbody>
                                        <tr>
                                            <td>Gender</td>
                                            <td>-</td>
                                            <td><span>Female</span></td>
                                        </tr>
                                        <tr>
                                            <td>Date of Birth</td>
                                            <td>-</td>
                                            <td><span>29 Sep,2011</span></td>
                                        </tr>
                                        <tr>
                                            <td>Age</td>
                                            <td>-</td>
                                            <td><span>11 years</span></td>
                                        </tr>
                                        <tr>
                                            <td>Blood Group</td>
                                            <td>-</td>
                                            <td><span>B +ve</span></td>
                                        </tr>
                                        <tr>
                                            <td>Emergency Contact</td>
                                            <td>-</td>
                                            <td><span>(438)538-2646</span></td>
                                        </tr>
                                        <tr>
                                            <td>Address</td>
                                            <td>-</td>
                                            <td><span>No.13, South, West Rd, CIT Nagar, Chennai Tamil Nadu 600035.</span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="parent_details_bg">
                        <div class="profile_details">
                            <h6>Parent Details</h6>
                        </div>
                        <div class="parent_time_sheet">
                            <table class="">
                                <tbody>
                                    <tr>
                                        <td>Father's Name</td>
                                        <td>-</td>
                                        <td><span>Howard Hawkins</span></td>
                                    </tr>
                                    <tr>
                                        <td>Email Address</td>
                                        <td>-</td>
                                        <td><span>am@iswagu.io</span></td>
                                    </tr>
                                    <tr>
                                        <td>Mobile Number</td>
                                        <td>-</td>
                                        <td><span>(438)538-2646</span></td>
                                    </tr>
                                    <tr>
                                        <td>Alternate Mobile Number</td>
                                        <td>-</td>
                                        <td><span>(438)538-2646</span></td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="bor_right"></div>
                            <table class="boder_top">
                                <tbody>
                                    <tr>
                                        <td>Mother's Name</td>
                                        <td>-</td>
                                        <td><span>Ruth Goodwin</span></td>
                                    </tr>
                                    <tr>
                                        <td>Email Address</td>
                                        <td>-</td>
                                        <td><span>No.13, South, West Rd, CIT Nagar, Chennai Tamil Nadu 600035.</span></td>
                                    </tr>
                                    <tr>
                                        <td>Mobile Number</td>
                                        <td>-</td>
                                        <td><span>(438)538-2646</span></td>
                                    </tr>
                                    <tr>
                                        <td>Alternate Mobile Number</td>
                                        <td>-</td>
                                        <td><span>(438)538-2646</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="parent_details_bg   class_detail">
                        <div class="profile_details">
                            <h6>Class Details</h6>
                        </div>
                        <div class="parent_time_sheet">
                            <table>
                                <tbody>
                                    <tr>
                                        <td>Academic Year</td>
                                        <td>-</td>
                                        <td><span>2021 - 2022</span></td>
                                    </tr>
                                    <tr>
                                        <td>Class Teacher</td>
                                        <td>-</td>
                                        <td><span>Franklin Ramirez</span></td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="bor_rights"></div>
                            <table>
                                <tbody>
                                    <tr>
                                        <td>Standard</td>
                                        <td>-</td>
                                        <td><span>Class 6</span></td>
                                    </tr>
                                    <tr>
                                        <td>Section</td>
                                        <td>-</td>
                                        <td><span>A</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="parent_details_bg   class_detail">
                        <div class="profile_details">
                            <h6>Documents</h6>
                        </div>
                        <div class="document_title">
                            <div class="upload_cont">
                                <img src="{{ asset('School/asset/img/pdf.png') }}">
                                <a href="#">aadhar.pdf</a>
                            </div>
                            <div class="upload_cont">
                                <img src="{{ asset('School/asset/img/pdf.png') }}">
                                <a href="#">Transfer ce...pdf</a>
                            </div>
                        </div>
                    </div>
                    <div class="reject   class_detail">
                        <div class="reject_reason">
                            <h6>Reject Reason</h6>
                        </div>
                        <div class="reject_reason_sub_text">
                            <h4>Applied for TC</h4>
                            <p>in quo ignorare vos arbitrer, seduti oratione perpetua malo quam ostendis sed quia non recusandae itaque aiunt hanc quasi involuta aperiri, altera prompta et dolorum effugiendorum gratia quo quaerimus, non numquam eius modi tempora incidunt, ut et quasi architecto beatae vitae dicta sunt.</p>
                        </div>
                        <div class="document_title">
                            <div class="upload_cont">
                                <img src="{{ asset('School/asset/img/pdf.png') }}">
                                <a href="#">aadhar.pdf</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>










            <!-- ........edite..... -->
                  <!-- ...........Add Teacher...... -->
            <div class="hidden step1" id="edit_student_view">
                 <div>
                        <ul class="breadcrumb-set">
                        <li><a href="#" class="">Student Management</a> /</li>
                        <li><a href="#" class="">Eddie Drake</a>/</li>
                         <li><a href="#" class="">Edit Student</a></li>

                        </ul>
                    </div>
                <div class="set-time-table">
                    <div style="display: flex; gap:10px;">
                        <div class="left_arrows">
                             <img src="{{ asset('School/asset/img/arrow.png') }}" onclick="edit_student_view()">
                        </div>
                        <div>
                            
                            <h4>Edit Student</h4>
                            <p>Step 1/3</p>
                        </div>
                    </div>
                </div>
                <div class="main_tables">
                    <div class="">
                        <h6 class="personal_conts">Personal Info</h6>
                        <div class="info_titl">
                            <div class="Personal_info_txt">
                                <h4>Name *</h4>
                                <input type="text" name="" placeholder="Eddie Drake">
                                <!-- <span class="error">Name</span> -->
                            </div>
                            <div class="Personal_info_txt">
                                <h4>Date of Birth *</h4>
                                <input type="text" name="" placeholder="26 Dec 1986">
                                <!-- <span class="error">Name</span> -->
                            </div>
                        </div>
                        <div class="info_titl">
                            <div class="Personal_info_txt">
                                <h4>Gender *</h4>
                                <select>
                                    <option>Male</option>
                                    <option>1</option>
                                </select>
                                <!-- <span class="error">Name</span> -->
                            </div>
                            <div class="Personal_info_txt">
                                <h4>Email Address *</h4>
                                <input type="text" name="" placeholder="Wille98@gmail.com">
                                <!-- <span class="error">Name</span> -->
                            </div>
                        </div>

                        <div class="info_titl">
                            <div class="Personal_info_txt">
                                <h4>Student Aadhar Card No *</h4>
                                 <input type="text" name="" placeholder="8757 8437 7473 8573">
                                <!-- <span class="error">Name</span> -->
                            </div>
                            <div class="Personal_info_txt">
                                <h4>Class for which Admission Required *</h4>
                                <select>
                                    <option>Class 11</option>
                                    <option>1</option>
                                </select>
                                <!-- <span class="error">Name</span> -->
                            </div>
                        </div>
                     <!--    <div class="info_titl">
                            <div class="Personal_info_txt">
                                <h4>Class</h4>
                                <div class="text_box">
                                    <select class="mySelect for" multiple="multiple" style="" placeholder="select"></select>
                                </div>
                               
                            </div>
                            <div class="Personal_info_txt">
                                <h4>Subjects</h4>
                                <div class="text_box">
                                    <select class="mySelect for" multiple="multiple" style="" placeholder="select"></select>
                                </div>
                              
                            </div>
                        </div> -->
                        <div class="info_titl">
                            <div class="Personal_info_txt">
                                <h4>Father's Name *</h4>
                                <input type="text" name="" placeholder="Willie Sparks">
                                
                            </div>
                            <div class="Personal_info_txt">
                                <h4>Father's Occupation *</h4>
                                <select>
                                    <option>Business Owner</option>
                                    <option>1</option>
                                </select>
                                <!-- <span class="error">Name</span> -->
                            </div>
                        </div>
                        <div class="info_titl">
                            <div class="Personal_info_txt">
                                <h4>Mother's Name*</h4>
                                <input type="text" name="" placeholder="Willie Sparks">
                                <!-- <span class="error">Name</span> -->
                            </div>
                            <div class="Personal_info_txt">
                                <h4>Mother's Occupation *</h4>
                                <select>
                                    <option>Accountant</option>
                                    <option>1</option>
                                </select>
                                <!-- <span class="error">Name</span> -->
                            </div>
                        </div>
                        <div class="info_titl">
                            <div class="Personal_info_txt">
                                <h4>Nationality*</h4>
                                <select>
                                    <option>Indina</option>
                                    <option>1</option>
                                </select>
                                <!-- <span class="error">Name</span> -->
                            </div>
                            <div class="Personal_info_txt">
                                <h4>Religion *</h4>
                                <select>
                                    <option>Hindu</option>
                                    <option>1</option>
                                </select>
                                <!-- <span class="error">Name</span> -->
                            </div>
                        </div>
                        <div class="info_titl">
                            <div class="Personal_info_txt">
                                <h4>Category *</h4>
                                <select>
                                    <option>Willie Sparks</option>
                                    <option>1</option>
                                </select>
                                <!-- <span class="error">Name</span> -->
                            </div>
                            <!--  <div class="Personal_info_txt">
                                <h4>Religion *</h4>
                                <select>
                                    <option>Hindu</option>
                                    <option>1</option>
                                </select>
                                 <span class="error">Name</span>
                            </div> -->
                        </div>
                        <div class="info_titl">
                            <div class="Personal_info_txt">
                                <h4>Language (Written) *</h4>
                                <input type="text" name="" placeholder="Willie Sparks">
                                <!-- <span class="error">Name</span> -->
                            </div>
                            <div class="Personal_info_txt">
                                <h4>Language (Spoken) *</h4>
                                <select>
                                    <option>Willie Sparks</option>
                                    <option>1</option>
                                </select>
                                <!-- <span class="error">Name</span> -->
                            </div>
                        </div>
                        <div class="info_titl">
                            <div class="Personal_info_txt">
                                <h4>Contact Address *</h4>
                                <input type="text" name="" placeholder="Willie Sparks">
                                <!-- <span class="error">Name</span> -->
                            </div>
                            <div class="Personal_info_txt">
                                <h4>Emergency Contact Number *</h4>
                                <input type="text" name="" placeholder="Willie Sparks">
                                <!-- <span class="error">Name</span> -->
                            </div>
                        </div>
                    </div>
                    <div>
                        <button class="continue_btns" onclick="student_continue_btn()">Continue</button>
                    </div>
                </div>
            </div>
            <!-- ......step2...... -->
            <div class="hidden step2" id="student_continue_btn">
                 <div>
                        <ul class="breadcrumb-set">
                        <li><a href="#" class="">Student Management</a> /</li>
                        <li><a href="#" class="">Eddie Drake</a>/</li>
                         <li><a href="#" class="">Edit Student</a></li>

                        </ul>
                    </div>
                <div class="set-time-table">
                    <div style="display: flex; gap: 10px;">
                        <div class="left_arrows">
                             <img src="{{ asset('School/asset/img/arrow.png') }}" onclick="student_continue_btn()">
                        </div>
                        <div>
                           
                            <h4>Edit Student</h4>
                             <p>Step 2/3</p>
                        </div>
                    </div>
                </div>
                <div class="main_tables">
                    <h6 class="personal_conts">Educational Info - Previous Academic Details</h6>
                    <div class="info_titl">
                        <div class="Personal_info_txt">
                            <h4>School Name</h4>
                            <input type="text" name="" placeholder="Alpha School">
                            <!-- <span class="error">Name</span> -->
                        </div>
                        <div class="Personal_info_txt">
                            <h4>Board</h4>
                            <select>
                                <option>CBSE</option>
                                <option>1</option>
                            </select>
                            <!-- <span class="error">Name</span> -->
                        </div>
                    </div>
                    <div class="info_titl">
                        <div class="Personal_info_txt">
                            <h4>Marks Obtained</h4>
                            <input type="text" name="" placeholder="475">
                            <!-- <span class="error">Name</span> -->
                        </div>
                        <div class="Personal_info_txt">
                            <h4>Class</h4>
                            <input type="text" name="" placeholder="10">
                            <!-- <span class="error">Name</span> -->
                        </div>
                    </div>
                       <div class="info_titl">
                        <div class="Personal_info_txt">
                            <h4>Percentage</h4>
                             <input type="text" name="" placeholder="74">
                             <span style="position: relative; left: -40px;">%</span>
                            <!-- <span class="error">Name</span> -->
                        </div>
                        <div class="Personal_info_txt">
                            <h4>Representative</h4>
                            <input type="text" name="" placeholder="Ray Kim">
                            <!-- <span class="error">Name</span> -->
                        </div>
                    </div>
                    <div>
                        <button class="continue_btns" onclick="student_continue_edit()">Continue</button>
                    </div>
                </div>
            </div>
            <!-- ......step3...... -->
            <div class="hidden step3" id="student_continue_edit">
                  <div>
                        <ul class="breadcrumb-set">
                        <li><a href="#" class="">Student Management</a> /</li>
                        <li><a href="#" class="">Eddie Drake</a>/</li>
                         <li><a href="#" class="">Edit Student</a></li>

                        </ul>
                    </div>
                <div class="set-time-table">
                   
                    <div style="display: flex; gap: 10px;">
                         <div class="left_arrows">
                             <img src="{{ asset('School/asset/img/arrow.png') }}" onclick="student_continue_edit()">
                        </div>
                        <div>
                            
                            <h4>Edit Student</h4>
                            <p>Step 3/3</p>
                        </div>
                    </div>
                </div>
                <div class="main_tables">
                    <h6 class="personal_conts">Upload Documents</h6>
                    <p class="sub_contentss">Kindly Upload all the necessary documents to proceed</p>
                    <div class="" style="width:80%;">
                        <div class="upload_design">
                            <!-- ....1... -->
                            <div class="bor_rights">
                                <img src="{{ asset('School/asset/Group 5.png') }}">
                                <span>Residential Address Proof *</span>
                                <label for="input-file">
                                       <span class="reload"><img src="{{ asset('School/asset/re.png') }}">Update Now</span>
                                     <input type="file" id="input-file">
                                </label>
                                  <!-- <span class="error">Name</span> -->
                            </div>
                         <!-- ....2... -->
                            <div class="bor_rights bor_left">
                                <img src="{{ asset('School/asset/Group 5 copy.png') }}">
                                <span>Birth Certificate *</span>
                                <label for="input-file">
                                       <span class="reload"><img src="{{ asset('School/asset/re.png') }}">Update Now</span>
                                     <input type="file" id="input-file">
                                </label>
                                  <!-- <span class="error">Name</span> -->
                            </div>
                            <!-- ....3.... -->
                            <div class="bor_rights bor_left">
                                <img src="{{ asset('School/asset/profiless.png') }}">
                                <span>Passport Size Photo *</span>
                                <label for="input-file">
                                       <span class="reload"><img src="{{ asset('School/asset/re.png') }}">Update Now</span>
                                     <input type="file" id="input-file">
                                </label>
                                  <!-- <span class="error">Name</span> -->
                            </div>

                          <!-- .....4..... -->
                           <div class="bor_rights bor_left">
                                <img src="{{ asset('School/asset/1Group 5 copy 5.png') }}">
                                <span>Aadhar Card *</span>
                                <label for="input-file">
                                       <span class="reload"><img src="{{ asset('School/asset/re.png') }}">Update Now</span>
                                     <input type="file" id="input-file">
                                </label>
                                  <!-- <span class="error">Name</span> -->
                            </div>

                           <!-- ....5... -->
                            <div class="bor_rights bor_left">
                                <img src="{{ asset('School/asset/Group 5 Copy 4@2x.png') }}" style="width: 250px;">
                              <span>Domicile Certificate *</span>
                                <label for="input-file">
                                       <span class="reload"><img src="{{ asset('School/asset/re.png') }}">Update Now</span>
                                     <input type="file" id="input-file">
                                </label>
                                  <!-- <span class="error">Name</span> -->
                            </div>

                            <!-- <label for="input-file" class="bor_rights bor_left">
                                <img src="asset/upload.png">
                                <span>Domicile Certificate *</span>
                                <input type="file" id="input-file">
                            </label> -->
                        </div>
                        <div class="Other_conts">
                            <!-- <h6 class="personal_conts">Other Documents</h6>
                            <p class="sub_contentss">Browse them from your computer. supported images formats: png jpg or pdf
                                <br>Up to 10 files can be uploaded at once, should not exceed 500MB</p> -->
                            <div class="btn_sumbit">
                                <!-- <button class="uploads_btn">Upload</button> -->
                                <button class="suff_btn" data-toggle="modal" data-target="#Successfully">Update</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>




        </main>
    </div>
    <!--Edite  Modal -->
    <div class=" model_title modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" style="transform: translate(0px,0%);">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Disable Student</h5>
                    <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button> -->
                </div>
                <div class="modal-body">
                    <div class="satart-cont" style="border: none;">
                        <div class="set_years">
                            <h4>Reason</h4>
                            <select>
                                <option>Applied for TC</option>
                            </select>
                        </div>
                        <div class="set_years text_cont">
                            <h4>Description</h4>
                            <textarea>Typesomething....</textarea>
                        </div>
                        <div class="upload_files">
                            <h6>Upload PDF :</h6>
                            <div class="upload_btn">
                                <label for="input-file">
                                    <img src="{{ asset('School/asset/icons/pdf.svg') }}">
                                    Upload PDF
                                    <input type="file" id="input-file">
                                </label>
                            </div>
                          <div class="cancel_content">
                                <button class="cancel_btns"><img src="{{ asset('School/asset/icons/delete.svg') }}">Delete Student</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn cancel_btn" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn create_btn">Remove</button>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('School/js/jquery.min.js') }}" ></script>
    <script src="{{ asset('School/js/bootstrap_bundle_min.js') }}" ></script>
    <!-- datatables -->
    <script src="{{ asset('School/js/jquery_dataTables_min.js') }}" ></script>
    <script src="{{ asset('School/js/table.js') }}" ></script>
    <!-- <script src="{{ asset('School/js/sidebar.js') }}" ></script> -->
    <script src="{{ asset('School/js/main.js') }}" ></script>
    <script>
    const body = document.querySelector('body'),
        sidebar = body.querySelector('nav'),
        toggle = body.querySelector(".toggle");


    toggle.addEventListener("click", () => {
        sidebar.classList.toggle("close");
    })
    </script>
</body>

</html>