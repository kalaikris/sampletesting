<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Class Management</title>
    <link rel="icon" href="{{ asset('School/asset/logo/top-iocn.png') }}"  />
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="{{ asset('School/css/boxicons.min.css') }}">
    <!-- <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'> -->
    <link rel="stylesheet" href="{{ asset('School/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('School/css/jquery_dataTables_min.css') }}">
    <link rel="stylesheet" href="{{ asset('School/css/select2_min.css') }}">
    <link rel="stylesheet" href="{{ asset('School/css/flatpickr.css') }}">
    <link rel="stylesheet" href="{{ asset('School/css/dark.css') }}">
    <link rel="stylesheet" href="{{ asset('School/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('School/css/dashboard.css') }}">
    <link rel="stylesheet" href="{{ asset('School/css/class_management.css') }}">
</head>
<style>
/*    .dataTables_wrapper
    {
        top: -50px;
    }*/
</style>
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
            <div class="class_manag ">
                <div class="header_titel">
                    <div>
                        <h4>Class Management</h4>
                        <p>Total Classes - 75</p>
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
                <div class="titel_conts">
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
                    <div>
                        <button class="year_btn" data-toggle="modal" data-target="#exampleModal"><img src="{{ asset('School/asset/icons/add class.svg') }}">Create Class</button>
                    </div>
                </div>
                <div class="main_table">
                    <table class="display data--table" style="width:100%">
                        <thead>
                            <tr>
                                <th>S.No</th>
                                <th>Standard</th>
                                <th>Section</th>
                                <th>Class Teacher</th>
                                <th>Subjects</th>
                                <th>Seating Capacity</th>
                                <th>Students</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>LKG</td>
                                <td>A</td>
                                <td>Mike Pope</td>
                                <td>7 Subjects</td>
                                <td>47 Seats</td>
                                <td>46 Students</td>
                                <td class="edit_text" onclick="class_management_view()"><img src="{{ asset('School/asset/icons/view.svg') }}"><a href="#">View</a></td>
                                <td class="delete_text"><img src="{{ asset('School/asset/Delete.png') }}"><a href="#">Delete</a></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>LKG</td>
                                <td>B</td>
                                <td>Tommy Wong</td>
                                <td>7 Subjects</td>
                                <td>43 Seats</td>
                                <td>34 Students</td>
                                <td class="edit_text" onclick="class_management_view()"><img src="{{ asset('School/asset/icons/view.svg') }}"><a href="#">View</a></td>
                                <td class="delete_text"><img src="{{ asset('School/asset/Delete.png') }}"><a href="#">Delete</a></td>
                            </tr>
                    </table>
                </div>
            </div>
            <!-- !-- //////.......class Management..........////// -->
            <div class="hidden" id="class_management_view">
                <div>
                    <ul class="breadcrumb-set">
                        <li><a href="#" class="">Class Management</a> /</li>
                        <li><a href="#" class="">Class 6 A</a> /</li>
                        <li><a href="#" class="">Class Details</a></li>
                    </ul>
                </div>
                <div class="set-time-table">
                    <div style="display: flex; gap:10px;">
                        <div class="left_arrows">
                            <img src="{{ asset('School/asset/img/arrow.png') }}" onclick="class_management_view()">
                        </div>
                        <h4>Class 6 A</h4>
                    </div>
                </div>
                <div class="navbar-contens">
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-home-tab" data-toggle="pill" data-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Class Details</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-profile-tab" data-toggle="pill" data-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Attendance</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-contact-tab" data-toggle="pill" data-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Time Table</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                            <div class="edites_title_list"><button class="edit_cont" data-toggle="modal" data-target="#edit_class"><img src="{{ asset('School/asset/edit.png') }}">Edit Class</button></div>
                            <div class="Student_cont">
                                <div class="Students_status">
                                    <div class="setp_1">
                                        <div>
                                            <img src="{{ asset('School/asset/eg.png') }}">
                                        </div>
                                        <div class="total_student">
                                            <p>Total Students</p>
                                            <h6>45 Students</h6>
                                        </div>
                                    </div>
                                    <div class="setp_1 setp_2">
                                        <div>
                                            <img src="{{ asset('School/asset/icons.png') }}">
                                        </div>
                                        <div class="total_student">
                                            <p>Total Teachers</p>
                                            <h6>8 teachers</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="teachers_status">
                                    <h6 class="edit_teacher">Teachers :</h6>
                                    <div class="">
                                        <div class="teachers_time_sheet">
                                            <table>
                                                <tr>
                                                    <td>1) English</td>
                                                    <td>-</td>
                                                    <td><span>Alfred Barrett</span>
                                                        <span><img src="{{ asset('School/asset/c.png') }}" style="margin-top: -4px; width: 20px;"></span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>2) Mathematics</td>
                                                    <td>-</td>
                                                    <td><span>Donald Weber</span></td>
                                                </tr>
                                                <tr>
                                                    <td>3) English</td>
                                                    <td>-</td>
                                                    <td><span>Alvin Lawson</span></td>
                                                </tr>
                                                <tr>
                                                    <td>4) Mathematics</td>
                                                    <td>-</td>
                                                    <td><span>Victor Snyder</span></td>
                                                </tr>
                                            </table>
                                            <table>
                                                <tr>
                                                    <td>5) English</td>
                                                    <td>-</td>
                                                    <td><span>Dollie Mathis</span></td>
                                                </tr>
                                                <tr>
                                                    <td>6) Mathematics</td>
                                                    <td>-</td>
                                                    <td><span>Theodore Collier</span></td>
                                                </tr>
                                                <tr>
                                                    <td>7) English</td>
                                                    <td>-</td>
                                                    <td><span>Estelle Sanders</span></td>
                                                </tr>
                                                <tr>
                                                    <td>8) Mathematics</td>
                                                    <td>-</td>
                                                    <td><span>Sylvia Hogan</span></td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="title_texts_box">
                                <h4>Students list</h4>
                            </div>
                            <div class="main_table">
                                <table class="display data--table" style="width:100% !important;">
                                    <thead>
                                        <tr>
                                            <th>S.No</label></th>
                                            <th>Student ID</th>
                                            <th>Name</th>
                                            <th>Gender</th>
                                            <th>Date of Birth</th>
                                            <th>Age</th>
                                            <th></th>
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
                                            <td class="edit_text" onclick="back_management_view()"><img src="{{ asset('School/asset/icons/view.svg') }}"><a href="#">View</a></td>
                                            <td class="delete_text"><img src="{{ asset('School/asset/Delete.png') }}"><a href="#">Delete</a></td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>6C002</td>
                                            <td>Randy Martinez</td>
                                            <td>Male</td>
                                            <td>08 jul 2022</td>
                                            <td>11</td>
                                            <td class="edit_text" onclick="back_management_view()"><img src="{{ asset('School/asset/icons/view.svg') }}"><a href="#">View</a></td>
                                            <td class="delete_text"><img src="{{ asset('School/asset/Delete.png') }}"><a href="#">Delete</a></td>
                                        </tr>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                            <div class="main_table">
                                <div class="title_texts_box">
                                    <h4>Absent & Leave List</h4>
                                    <div class="select_contern">
                                        <label>
                                            <input type="text" class="flatpickr" id="flatpickr" placeholder="04 May 2022" data-input>
                                            <!-- <img src="asset/icons/calender.svg"> -->
                                        </label>
                                    </div>
                                </div>
                                <table class="display data--table" style="width:100% !important;">
                                    <thead>
                                        <tr>
                                            <th>S.No</label></th>
                                            <th>Student Name</th>
                                            <th>Type</th>
                                            <th>Approved By</th>
                                            <th>Reason</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Beatrice Garcia</td>
                                            <td>Leave</td>
                                            <td>Richard Potter</td>
                                            <td class="edit_text"><img src="{{ asset('School/asset/view.png') }}"><a href="#">View Comment</a></td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Danny Horton</td>
                                            <td>Leave</td>
                                            <td>Richard Potter</td>
                                            <td class="edit_text"><img src="{{ asset('School/asset/view.png') }}"><a href="#">View Comment</a></td>
                                        </tr>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                            <div class="main_tables">
                                <div class="time-table-container">
                                    <div class="time-table-cell title_cont">Time Table</div>
                                    <div class="timetable-cells day-cell">Monday</div>
                                    <div class="timetable-cells day-cell">Tuesday</div>
                                    <div class="timetable-cells day-cell">Wednesday</div>
                                    <div class="timetable-cells day-cell">Thursday</div>
                                    <div class="timetable-cells day-cell">Friday</div>
                                    <div class="timetable-cells period-desc-cell">
                                        <div>
                                            <p class="period_text">Period 1</p>
                                            <p class="period-timing">08:00 AM - 09:00 AM</p>
                                        </div>
                                    </div>
                                    <div class="timetable-cells period-cell period-cell-1">
                                        <!-- <div class="edit_icons">
                                                            
                                                        </div> -->
                                        <div class="periods_subtext">
                                            <!-- <img src="asset/icons/edit period.svg"> -->
                                            <h4>Mathematics</h4>
                                            <p>Hettie Jones</p>
                                        </div>
                                    </div>
                                    <div class="timetable-cells period-cell period-cell-2">
                                        <div class="periods_subtext status_texts">
                                            <!-- <img src="asset/icons/edit period.svg"> -->
                                            <h4>Mathematics</h4>
                                            <p>Hettie Jones</p>
                                        </div>
                                    </div>
                                    <div class="timetable-cells period-cell period-cell-3">
                                        <div class="periods_subtext status_texts2">
                                            <!-- <img src="asset/icons/edit period.svg"> -->
                                            <h4>English</h4>
                                            <p>Hettie Jones</p>
                                        </div>
                                    </div>
                                    <div class="timetable-cells period-cell period-cell-4">
                                        <div class="periods_subtext status_texts3">
                                            <!-- <img src="asset/icons/edit period.svg"> -->
                                            <h4>PT</h4>
                                            <p>Hettie Jones</p>
                                        </div>
                                    </div>
                                    <div class="timetable-cells period-cell period-cell-5">
                                        <div class="periods_subtext status_texts4">
                                            <!-- <img src="asset/icons/edit period.svg"> -->
                                            <h4>Science</h4>
                                            <p>Hettie Jones</p>
                                        </div>
                                    </div>
                                    <div class="timetable-cells period-desc-cell">
                                        <div>
                                            <p class="period_text">Period 2</p>
                                            <p class="period-timing">09:00 AM - 10:00 AM</p>
                                        </div>
                                    </div>
                                    <div class="timetable-cells period-cell period-cell-1"></div>
                                    <div class="timetable-cells period-cell period-cell-2">
                                    </div>
                                    <div class="timetable-cells period-cell period-cell-3"></div>
                                    <div class="timetable-cells period-cell period-cell-4"></div>
                                    <div class="timetable-cells period-cell period-cell-5"></div>
                                    <div class="timetable-cells period-desc-cell">
                                        <div>
                                            <p class="period_text">Short Break</p>
                                            <p class="period-timing">10:01 AM - 10:30 AM</p>
                                        </div>
                                    </div>
                                    <div class="timetable-cells period-cell period-cell-1"></div>
                                    <div class="timetable-cells period-cell period-cell-2"></div>
                                    <div class="timetable-cells period-cell period-cell-3"></div>
                                    <div class="timetable-cells period-cell period-cell-4"></div>
                                    <div class="timetable-cells period-cell period-cell-5"></div>
                                    <div class="timetable-cells period-desc-cell">
                                        <div>
                                            <p class="period_text">Period 3</p>
                                            <p class="period-timing">10:00 AM - 11:30 AM</p>
                                        </div>
                                    </div>
                                    <div class="timetable-cells period-cell period-cell-1">
                                    </div>
                                    <div class="timetable-cells period-cell period-cell-2"></div>
                                    <div class="timetable-cells period-cell period-cell-3"></div>
                                    <div class="timetable-cells period-cell period-cell-4"></div>
                                    <div class="timetable-cells period-cell period-cell-5">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ......./student.... -->
            <div class="hidden" id="student_view">
                <div>
                    <ul class="breadcrumb-set">
                        <li><a href="#" class="">Class Management</a> /</li>
                        <li><a href="#" class="">Class 6 A</a> /</li>
                        <li><a href="#" class="">Class Details</a>/</li>
                        <li><a href="#" class="">Eddie Drake</a></li>
                    </ul>
                </div>
                <div class="set-time-table">
                    <div style="display: flex; gap: 15px;">
                        <div class="left_arrows">
                            <img src="{{ asset('School/asset/img/arrow.png') }}" onclick="back_management_view()">
                        </div>
                        <div>
                            <h4>Eddie Drake</h4>
                            <p>6C001</p>
                        </div>
                    </div>
                    <div><button class="cancel_btns"><img src="{{ asset('School/asset/cancel.png') }}">Remove Student</button>
                        <button class="edit_stu "><img src="{{ asset('School/asset/edites.png') }}">Edit Student</button>
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
                            </table>
                            <div class="bor_right  "></div>
                            <table class="boder_top">
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
                            </table>
                        </div>
                    </div>
                    <div class="parent_details_bg   class_detail">
                        <div class="profile_details">
                            <h6>Class Details</h6>
                        </div>
                        <div class="parent_time_sheet">
                            <table class="">
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
                            </table>
                            <div class="bor_rights"></div>
                            <table>
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
                </div>
            </div>
        </main>
    </div>
    <!--Create Class -->
    <div class=" model_title modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" style="transform: translate(0px, 10%);">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Create Class</h5>
                    <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button> -->
                </div>
                <div class="modal-body">
                    <div class="step_1">
                        <div class="step_contnt">
                            <h4>Step 1/3</h4>
                            <h6>Class Details</h6>
                            <p>Academic Year -2021-2022</p>
                        </div>
                        <div class="bor_bottm"></div>
                        <div class="satart-cont">
                            <div class="set_years">
                                <h4>Class</h4>
                                <select>
                                    <option>Choose Class</option>
                                </select>
                            </div>
                            <div class="set_years">
                                <h4>Seating Capacity</h4>
                                <input type="text" name="" placeholder="45">
                            </div>
                            <div class="set_years">
                                <h4>Class Teacher</h4>
                                <select>
                                    <option>Willie Sparks</option>
                                </select>
                            </div>
                            <div class="set_years">
                                <h4>Choose Subject</h4>
                                <div class="text_box">
                                    <select class="mySelect for" multiple="multiple" style="" placeholder="select"></select>
                                </div>
                            </div>
                        </div>
                        <div class="btns">
                            <button type="button" class="btn cancel_btn" data-dismiss="modal">Cancel</button>
                            <button type="button" class="btn create_btn step1">Continue</button>
                        </div>
                    </div>
                    <div class="step_2" style="display:none">
                        <div class="step_contnt">
                            <h4>Step 2/3</h4>
                        </div>
                        <div class="satart-cont">
                            <div class="sating_conts">
                                <div class="sub_seating">
                                    <p>Tamil</p>
                                    <span>:</span>
                                </div>
                                <div class="">
                                    <div class="set_seating">
                                        <h4>Teacher</h4>
                                        <select>
                                            <option>Julia Henderson</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="sating_conts">
                                <div class="sub_seating">
                                    <p>English</p>
                                    <span>:</span>
                                </div>
                                <div class="">
                                    <div class="set_seating">
                                        <h4>Teacher</h4>
                                        <select>
                                            <option>Rose Floyd</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="sating_conts">
                                <div class="sub_seating">
                                    <p>Mathematics</p>
                                    <span>:</span>
                                </div>
                                <div class="">
                                    <div class="set_seating">
                                        <h4>Teacher</h4>
                                        <select>
                                            <option>Justin Reid</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="sating_conts">
                                <div class="sub_seating">
                                    <p>Science</p>
                                    <span>:</span>
                                </div>
                                <div class="">
                                    <div class="set_seating">
                                        <h4>Teacher</h4>
                                        <select>
                                            <option>Cody King</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="sating_conts">
                                <div class="sub_seating">
                                    <p>Social</p>
                                    <span>:</span>
                                </div>
                                <div class="">
                                    <div class="set_seating">
                                        <h4>Teacher</h4>
                                        <select>
                                            <option>Choose Teacher</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="btns">
                            <button type="button" class="btn cancel_btn" data-dismiss="modal">Cancel</button>
                            <button type="button" class="btn create_btn step2">Continue</button>
                        </div>
                    </div>
                    <div class="step_3" style="display:none">
                        <div class="step_contnt">
                            <h4>Step 3/3</h4>
                            <h6>Upload Students</h6>
                        </div>
                        <div class="satart-cont">
                            <div class="set_seating">
                                <h4>Upload Document :</h4>
                                <img src="{{ asset('School/asset/1img.png') }}">
                            </div>
                        </div>
                        <div class="btns">
                            <button type="button" class="btn cancel_btn" data-dismiss="modal">Cancel</button>
                            <button type="button" class="btn create_btn ">Create</button>
                        </div>
                    </div>
                </div>
                <!--  <div class="modal-footer">
                    <button type="button" class="btn cancel_btn" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn create_btn">Continue</button>
                </div> -->
            </div>
        </div>
    </div>
    <!--edit Class -->
    <div class=" model_title modal fade" id="edit_class" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" style="transform: translate(0px, 10%);">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Class</h5>
                    <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button> -->
                </div>
                <div class="modal-body">
                    <div class="step_1">
                        <div class="step_contnt">
                            <h4>Step 1/3</h4>
                            <h6>Class Details</h6>
                            <p>Academic Year -2021-2022</p>
                        </div>
                        <div class="satart-cont">
                            <div class="set_years">
                                <h4>Class</h4>
                                <select>
                                    <option>Choose Class</option>
                                </select>
                            </div>
                            <div class="set_years">
                                <h4>Seating Capacity</h4>
                                <input type="text" name="" placeholder="45">
                            </div>
                            <div class="set_years">
                                <h4>Class Teacher</h4>
                                <select>
                                    <option>Willie Sparks</option>
                                </select>
                            </div>
                            <div class="set_years">
                                <h4>Choose Subject</h4>
                                <div class="text_box">
                                    <select class="mySelect for" multiple="multiple" style="" placeholder="select"></select>
                                </div>
                            </div>
                        </div>
                        <div class="btns">
                            <button type="button" class="btn cancel_btn" data-dismiss="modal">Cancel</button>
                            <button type="button" class="btn create_btn step1">Continue</button>
                        </div>
                    </div>
                    <div class="step_2" style="display:none">
                        <div class="step_contnt">
                            <h4>Step 2/3</h4>
                        </div>
                        <div class="satart-cont">
                            <div class="sating_conts">
                                <div class="sub_seating">
                                    <p>Tamil</p>
                                    <span>:</span>
                                </div>
                                <div class="">
                                    <div class="set_seating">
                                        <h4>Teacher</h4>
                                        <select>
                                            <option>Julia Henderson</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="sating_conts">
                                <div class="sub_seating">
                                    <p>English</p>
                                    <span>:</span>
                                </div>
                                <div class="">
                                    <div class="set_seating">
                                        <h4>Teacher</h4>
                                        <select>
                                            <option>Rose Floyd</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="sating_conts">
                                <div class="sub_seating">
                                    <p>Mathematics</p>
                                    <span>:</span>
                                </div>
                                <div class="">
                                    <div class="set_seating">
                                        <h4>Teacher</h4>
                                        <select>
                                            <option>Justin Reid</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="sating_conts">
                                <div class="sub_seating">
                                    <p>Science</p>
                                    <span>:</span>
                                </div>
                                <div class="">
                                    <div class="set_seating">
                                        <h4>Teacher</h4>
                                        <select>
                                            <option>Cody King</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="sating_conts">
                                <div class="sub_seating">
                                    <p>Social</p>
                                    <span>:</span>
                                </div>
                                <div class="">
                                    <div class="set_seating">
                                        <h4>Teacher</h4>
                                        <select>
                                            <option>Choose Subject</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="btns">
                            <button type="button" class="btn cancel_btn" data-dismiss="modal">Cancel</button>
                            <button type="button" class="btn create_btn step2">Continue</button>
                        </div>
                    </div>
                    <div class="step_3" style="display:none">
                        <div class="step_contnt">
                            <h4>Step 3/3</h4>
                            <h6>Upload Students</h6>
                        </div>
                        <div class="satart-cont">
                            <div class="set_seating">
                                <h4>Upload Document :</h4>
                                <img src="{{ asset('School/asset/1img.png') }}">
                            </div>
                        </div>
                        <div class="btns">
                            <button type="button" class="btn cancel_btn" data-dismiss="modal">Cancel</button>
                            <button type="button" class="btn create_btn">Update</button>
                        </div>
                    </div>
                </div>
                <!--  <div class="modal-footer">
                    <button type="button" class="btn cancel_btn" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn create_btn">Continue</button>
                </div> -->
            </div>
        </div>
    </div>
    <script src="{{ asset('School/js/jquery.min.js') }}" ></script>
    <script src="{{ asset('School/js/bootstrap_bundle_min.js') }}" ></script>
    <!-- datatables -->
    <script src="{{ asset('School/js/jquery_dataTables_min.js') }}" ></script>
    <script src="{{ asset('School/js/flatpickr.js') }}" ></script>
    <script src="{{ asset('School/js/table.js') }}" ></script>
    <script src="{{ asset('School/js/main.js') }}" ></script>
    <script src="{{ asset('School/js/jquery.min.js') }}" ></script>
    <script>
    const body = document.querySelector('body'),
        sidebar = body.querySelector('nav'),
        toggle = body.querySelector(".toggle");


    toggle.addEventListener("click", () => {
        sidebar.classList.toggle("close");
    })


    var data = ["Tamil", "English", "Biology", "Chemistry"]; // Programatically-generated options array with > 5 options
    var placeholder = "select";
    $(".mySelect").select2({
        data: data,
        placeholder: placeholder,
        allowClear: false,
        minimumResultsForSearch: 5
    });
    // Date pikers.........
    // var example = flatpickr('#flatpickr');
    $(".flatpickr").flatpickr({
        enableTime: true,
        dateFormat: "F, d Y H:i"
    });


    $(".step1").click(function() {
        $(".step_1").hide();
        $(".step_2").show();
    })
    $(".step2").click(function() {
        $(".step_2").hide();
        $(".step_3").show();
    })
    </script>
</body>

</html>