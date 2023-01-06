<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admission Management</title>
    <link rel="icon" href="{{ asset('School/asset/logo/top-iocn.png') }}"  />
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="{{ asset('School/css/boxicons.min.css') }}">
    <!-- <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'> -->

    <link rel="stylesheet" href="{{ asset('School/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('School/css/jquery_dataTables_min.css') }}">
    <link rel="stylesheet" href="{{ asset('School/css/select2_min.css') }}">
    <link rel="stylesheet" href="{{ asset('School/css/flatpickr.css') }}">
    <link rel="stylesheet" href="{{ asset('School/css/dark.css') }}">
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="{{ asset('School/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('School/css/dashboard.css') }}">
    <link rel="stylesheet" href="{{ asset('School/css/class_management.css') }}">
    <link rel="stylesheet" href="{{ asset('School/css/student_management.css') }}">
    <link rel="stylesheet" href="{{ asset('School/css/admission_management.css') }}">
    <style>
        .hidden{
            display: none;
        }
    </style>
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
                        <h4>Admission Management</h4>
                        <!-- <p>Total Years - 4</p> -->
                    </div>
                    <div class="text_titels">
                        <button class="download_btn"><span>Download</span> </button>
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
                    <div class="">
                        <!-- <div class="academic_text">
                            <h4>Teachers List</h4>
                            <p>Total Teachers -155</p>
                        </div> -->
                        <div class="select_addemics_con">
                            <div class="select_contern">
                                <p>Academic Year</p>
                                <select>
                                    <option>2021 - 2022</option>
                                    <option>2023 - 2024</option>
                                </select>
                            </div>
                            <div class="select_contern">
                                <p>Choose Class</p>
                                <select>
                                    <option>Class 6</option>
                                    <option>A</option>
                                </select>
                            </div>
                            <div class="select_contern">
                                <p>Status</p>
                                <select>
                                    <option>All</option>
                                    <option>A</option>
                                </select>
                            </div>
                            <div class="select_contern">
                                <p>From Date</p>
                                <label>
                                    <input type="text" class="flatpickr" id="flatpickr" placeholder="01 May 2022" data-input>
                                    <!-- <img src="asset/icons/calender.svg"> -->
                                </label>
                            </div>
                            <div class="select_contern">
                                <p>To Date</p>
                                <label>
                                    <input type="text" class="flatpickr" id="flatpickr" placeholder="04 May 2022" data-input>
                                    <!-- <img src="asset/icons/calender.svg"> -->
                                </label>
                            </div>
                        </div>
                    </div>
                    <!--  <div>
                        <button class="year_btn"><img src="asset/icons/add teacher.svg">Add Teacher</button>
                    </div> -->
                </div>
                <div class="
                ">
                    <table class="display data--table" style="width:100%">
                        <thead>
                            <tr>
                                <th>S.No</th>
                                <th>Application Number</th>
                                <th>Applicant Name</th>
                                <th>Applied for</th>
                                <th>Parent Name</th>
                                <th>Application Date</th>
                                <th>Status</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>APN001</td>
                                <td>Roy Dixon</td>
                                <td>Class 6</td>
                                <td>Janie Gill</td>
                                <td>11 Nov 2022</td>
                                <td><button class="status_btns reviewed">Reviewed</button></td>
                                <td class="edit_text" onclick="reviewed()"><img src="{{ asset('School/asset/icons/view.svg') }}"><a href="#">View</a></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>APN002</td>
                                <td>Cecelia Roberts</td>
                                <td>Class 6</td>
                                <td>Janie Gill</td>
                                <td>11 Nov 2022</td>
                                <td><button class="status_btns pending">Pending</button></td>
                                <td class="edit_text" onclick="reviewed()"><img src="{{ asset('School/asset/icons/view.svg') }}"><a href="#">View</a></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>APN003</td>
                                <td>Cecelia Roberts</td>
                                <td>Class 6</td>
                                <td>Janie Gill</td>
                                <td>11 Nov 2022</td>
                                <td><button class="status_btns waiting">Waiting list</button></td>
                                <td class="edit_text" onclick="reviewed()"><img src="{{ asset('School/asset/icons/view.svg') }}"><a href="#">View</a></td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>APN004</td>
                                <td>Cecelia Roberts</td>
                                <td>Class 6</td>
                                <td>Janie Gill</td>
                                <td>11 Nov 2022</td>
                                <td><button class="status_btns onboarded">Onboarded</button></td>
                                <td class="edit_text" onclick="onboarded()"><img src="{{ asset('School/asset/icons/view.svg') }}"><a href="#">View</a></td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>APN005</td>
                                <td>Cecelia Roberts</td>
                                <td>Class 6</td>
                                <td>Janie Gill</td>
                                <td>11 Nov 2022</td>
                                <td><button class="status_btns rejected">Rejected</button></td>
                                <td class="edit_text" onclick="rejected()"><img src="{{ asset('School/asset/icons/view.svg') }}"><a href="#">View</a></td>
                            </tr>
                    </table>
                </div>
            </div>
            <!-- ...........reviewed -->
            <div class="hidden" id="reviewed">
                <div>
                    <ul class="breadcrumb-set">
                        <li><a href="#" class="">Admissin Management</a> /</li>
                        <li><a href="#" class="">Admissin Application</a> /</li>
                        <li><a href="#" class="">Eddie Drake</a></li>
                    </ul>
                </div>
                <div class="set-time-table">
                    <div style="display: flex; gap: 10px;">
                        <div class="left_arrows">
                            <img src="{{ asset('School/asset/img/arrow.png') }}" onclick="reviewed()">
                        </div>
                        <div>
                            <h4>Eddie Drake</h4>
                            <p>6C001</p>
                        </div>
                    </div>
                    <!-- <div><button class="cancel_btns" data-toggle="modal" data-target="#exampleModal"><img src="asset/cancel.png">Disable Student</button>
                        <button class="edit_cont"><img src="asset/edit.png">Edit Student</button>
                    </div> -->
                </div>
                <div class="main_tables">
                    <div class="profile_contents">
                        <img src="{{ asset('School/asset/student.png') }}">
                        <div class="">
                            <div class="profile_details">
                                <h6>Eddie Drake</h6>
                                <!-- <button class="status_btn">RTE Student</button> -->
                                <button class="status_btns pending">Pending</button>
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
               <!--      <div class="parent_details_bg   class_detail">
                        <div class="profile_details">
                            <h6>Class Details</h6>
                        </div>
                        <div class="parent_time_sheet">
                            <table class="">
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
                    </div> -->
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
                    <div class="">
                        <button class="up_status_btn" data-toggle="modal" data-target="#update_status">Update Status</button>
                    </div>
                    <!--     <div class="reject   class_detail">
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
                    </div> -->
                </div>
            </div>
            <!-- ...........Rejected -->
            <div class="hidden" id="rejected">
                <div>
                    <ul class="breadcrumb-set">
                        <li><a href="#" class="">Admissin Management</a> /</li>
                        <li><a href="#" class="">Admissin Application</a> /</li>
                        <li><a href="#" class="">Eddie Drake</a></li>
                    </ul>
                </div>
                <div class="set-time-table">
                    <div style="display: flex; gap: 10px;">
                        <div class="left_arrows">
                            <img src="{{ asset('School/asset/img/arrow.png') }}" onclick="rejected()">
                        </div>
                        <div>
                            <h4>Eddie Drake</h4>
                            <p>6C001</p>
                        </div>
                    </div>
                    <!--  <div><button class="cancel_btns" data-toggle="modal" data-target="#exampleModal"><img src="asset/cancel.png">Disable Student</button>
                        <button class="edit_cont"><img src="asset/edit.png">Edit Student</button>
                    </div> -->
                </div>
                <div class="main_tables">
                    <div class="profile_contents">
                        <img src="{{ asset('School/asset/student.png') }}">
                        <div class="">
                            <div class="profile_details">
                                <h6>Eddie Drake</h6>
                                <!-- <button class="status_btn">RTE Student</button> -->
                                <button class="status_btns rejected">Rejected</button>
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
                <!--     <div class="parent_details_bg   class_detail">
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
                    </div> -->
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
                    <div class="">
                        <button class="up_status_btn" data-toggle="modal" data-target="#rejected_status">Update Status</button>
                    </div>
                </div>
            </div>







                     <!-- ...........onboarded -->
            <div class="hidden" id="onboarded">
                <div>
                    <ul class="breadcrumb-set">
                        <li><a href="#" class="">Admissin Management</a> /</li>
                        <li><a href="#" class="">Admissin Application</a> /</li>
                        <li><a href="#" class="">Eddie Drake</a></li>
                    </ul>
                </div>
                <div class="set-time-table">
                    <div style="display: flex; gap: 10px;">
                        <div class="left_arrows">
                            <img src="{{ asset('School/asset/img/arrow.png') }}" onclick="onboarded()">
                        </div>
                        <div>
                            <h4>Eddie Drake</h4>
                            <p>6C001</p>
                        </div>
                    </div>
                    <!--  <div><button class="cancel_btns" data-toggle="modal" data-target="#exampleModal"><img src="asset/cancel.png">Disable Student</button>
                        <button class="edit_cont"><img src="asset/edit.png">Edit Student</button>
                    </div> -->
                </div>
                <div class="main_tables">
                    <div class="profile_contents">
                        <img src="{{ asset('School/asset/student.png') }}">
                        <div class="">
                            <div class="profile_details">
                                <h6>Eddie Drake</h6>
                                <!-- <button class="status_btn">RTE Student</button> -->
                                <button class="status_btns onboarded">Onboarded</button>
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
               <!--      <div class="reject   class_detail">
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
                    </div> -->
                    <!-- <div class="">
                        <button class="up_status_btn" data-toggle="modal" data-target="#update_status">Update Status</button>
                    </div> -->
                </div>
            </div>
        </main>
    </div>
    <!--Edite  Modal -->
    <div class=" model_title modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
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
                            <h6>Upload CSV :</h6>
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
    <!--Map Teacher -->
    <!--   <div class=" model_title modal fade" id="map_teacher" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Map Teacher</h5> -->
    <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button> -->
    <!--                 </div>
                <div class="modal-body">
                    <div class="satart-cont">
                        <div class="set_years">
                            <h4>Choose Teacher</h4>
                            <select>
                                <option>Willie Sparks</option>
                            </select>
                        </div>
                        <div class="set_years" style="padding-top: 30px;">
                            <h4>Choose Subject</h4>
                            <div class="mulite_content">
                                <select class="mySelect for" multiple="multiple" style="width: 100%" placeholder="select"></select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn cancel_btn" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn create_btn">Create</button>
                </div>
            </div>
        </div>
    </div>
 -->
    <!--update_status -->
    <div class=" model_title modal fade" id="update_status" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Update Status</h5>
                    <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button> -->
                </div>
                <div class="modal-body">
                    <div class="satart-cont" style="border: none;" id="application_status">
                        <div class="set_years">
                            <h4>Application Status</h4>
                            <select id="app_status">
                                <option value="" selected disabled>Select a Options</option>
                                <option value="Waiting List">Waiting List</option>
                            </select>
                        </div>
                    </div>
                     <div class="satart-cont hidden" style="border: none;"  id="waiting_list">
                        <h6>Class 6</h6>
                        <div class="set_years">
                            <h4>Section</h4>
                            <select>
                                <option>Choose Section</option>
                            </select>
                        </div>

                       <!--   <div class="set_years" style="padding-top: 20px;">
                            <h4>Description</h4>
                           <textarea>Typesomething....</textarea>
                        </div> -->
                    </div> 
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn cancel_btn" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn create_btn" style="background: #7A60E0 !important;" >Update</button>
                </div>
            </div>
        </div>
    </div>
    <!--rejected_status -->
    <div class=" model_title modal fade" id="rejected_status" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" style="transform: translate(0px, 8%);">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Update Status</h5>
                    <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button> -->
                </div>
                <div class="modal-body">
                    <div class="satart-cont" style="border: none;" id="application_status">
                        <div class="set_years">
                            <h4>Application Status</h4>
                            <select>
                                <option>Onboard Now</option>
                            </select>
                        </div>
                    </div>
                    <div class="satart-cont hidden" style="border: none;" id="section" style="padding:0px 30px;">
                        <h6>Class 6</h6>
                        <div class="set_years">
                            <h4>Section</h4>
                            <select>
                                <option>Choose Section</option>
                            </select>
                        </div>
                        <div class="set_years" style="padding-top: 20px;">
                            <h4>Description</h4>
                            <textarea>Typesomething....</textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn cancel_btn" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn create_btn" style="background: #7A60E0 !important;">Create</button>
                </div>
            </div>
        </div>
    </div>
    <!-- ........JS......... -->
    <script src="{{ asset('School/js/jquery.min.js') }}" ></script>
    <script src="{{ asset('School/js/bootstrap_bundle_min.js') }}" ></script>
    <!-- datatables -->
    <script src="{{ asset('School/js/jquery_dataTables_min.js') }}" ></script>
    <script src="{{ asset('School/js/table.js') }}"></script>

    <script src="{{ asset('School/js/select2.min.js') }}" ></script>
    <script src="{{ asset('School/js/flatpickr.js') }}"></script>
    <script src="{{ asset('School/js/main.js') }}" ></script>
    <script>
    const body = document.querySelector('body'),
        sidebar = body.querySelector('nav'),
        toggle = body.querySelector(".toggle");


    toggle.addEventListener("click", () => {
        sidebar.classList.toggle("close");
    })
    // Date pikers.........
    // var example = flatpickr('#flatpickr');
    $(".flatpickr").flatpickr({
        enableTime: true,
        dateFormat: "F, d Y H:i"
    });

    var data = ["Tamil", "English", "Biology", "Chemistry"]; // Programatically-generated options array with > 5 options
    var placeholder = "select";
    $(".mySelect").select2({
        data: data,
        placeholder: placeholder,
        allowClear: false,
        minimumResultsForSearch: 5
    });

    $("#app_status").on('change', function(){
        $("#waiting_list").removeClass('hidden');
    });

    </script>
</body>

</html>