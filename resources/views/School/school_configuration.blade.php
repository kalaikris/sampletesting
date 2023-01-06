<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School Configuration</title>
    <link rel="icon" href="{{ asset('School/asset/logo/top-iocn.png') }}" />
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
   <link rel="stylesheet" href="{{ asset('School/css/school_configuration.css') }}">
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
            <div id="school_config">
                <div class="header_titel">
                    <h4>School Configuration</h4>
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
                            <button class="nav-link active" id="pills-home-tab" data-toggle="pill" data-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Academic Year</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-profile-tab" data-toggle="pill" data-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false"> Class</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-contact-tab" data-toggle="pill" data-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Subject</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-contacts-tab" data-toggle="pill" data-target="#pills-contacts" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Time Table</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                            <div class="titel_conts">
                                <div class="academic_text">
                                    <h4>Academic Year</h4>
                                    <p>Total Years - 4</p>
                                </div>
                                <div>
                                    <button class="year_btn" data-toggle="modal" data-target="#exampleModal"><img src="{{ asset('School/asset/icons/add year.svg') }}">Add Year</button>
                                </div>
                            </div>
                            <div class="main_table">
                                <table class="display data--table" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th> <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                                                <label for="vehicle1">S.No</label></th>
                                            <th>Academic Year</th>
                                            <th>Created Date</th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                                                <label for="vehicle1" class="input_value"></label>1</td>
                                            <td>2021 - 2022</td>
                                            <td>16 May 2022</td>
                                            <td class="edit_text" data-toggle="modal" data-target="#edit"><img src="{{ asset('School/asset/edit.png') }}"><a href="#">Edit</a></td>
                                            <td class="delete_text" data-toggle="modal" data-target="#delete"><img src="{{ asset('School/asset/Delete.png') }}"><a href="#">Delete</a></td>
                                        </tr>
                                        <tr>
                                            <td><input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                                                <label for="vehicle1" class="input_value"></label>2</td>
                                            <td>2020 - 2021</td>
                                            <td>20 Sep 2022</td>
                                            <td class="edit_text" data-toggle="modal" data-target="#edit"><img src="{{ asset('School/asset/edit.png') }}"><a href="#">Edit</a></td>
                                            <td class="delete_text" data-toggle="modal" data-target="#delete"><img src="{{ asset('School/asset/Delete.png') }}"><a href="#">Delete</a></td>
                                        </tr>
                                </table>
                            </div>
                        </div>
                        <!-- ....class.... -->
                        <!-- ..... -->
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                            <div class="titel_conts">
                                <div class="academic_text">
                                    <h4>Class</h4>
                                    <p>Total Classes - 13</p>
                                </div>
                                <div>
                                    <button class="year_btn" data-toggle="modal" data-target="#add_class"><img src="{{ asset('School/asset/icons/add class.svg') }}">Add Class</button>
                                </div>
                            </div>
                            <div class="main_table">
                                <table class="display data--table" style="width:100% !important">
                                    <thead>
                                        <tr>
                                            <th> <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                                                <label for="vehicle1">S.No</label></th>
                                            <th>Standard</th>
                                            <th>Section</th>
                                            <th>Created Date</th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                                                <label for="vehicle1" class="input_value"></label>1</td>
                                            <td>LKG</td>
                                            <td>A</td>
                                            <td>16 May 2022</td>
                                            <td class="edit_text" data-toggle="modal" data-target="#edits_class"><img src="{{ asset('School/asset/edit.png') }}"><a href="#">Edit</a></td>
                                            <td class="delete_text" data-toggle="modal" data-target="#delete"><img src="{{ asset('School/asset/Delete.png') }}" data-toggle="modal" data-target="#delete"><a href="#">Delete</a></td>
                                        </tr>
                                        <tr>
                                            <td><input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                                                <label for="vehicle1" class="input_value"></label>2</td>
                                            <td>LKG</td>
                                            <td>B</td>
                                            <td>20 Sep 2022</td>
                                            <td class="edit_text" data-toggle="modal" data-target="#edits_class"s><img src="{{ asset('School/asset/edit.png') }}"><a href="#">Edit</a></td>
                                            <td class="delete_text" data-toggle="modal" data-target="#delete"><img src="{{ asset('School/asset/Delete.png') }}" data-toggle="modal" data-target="#delete"><a href="#">Delete</a></td>
                                        </tr>
                                </table>
                            </div>
                        </div>
                        <!-- .....subject.... -->
                        <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                            <div class="titel_conts">
                                <div class="academic_text">
                                    <h4>Subjects</h4>
                                    <p>Total Subjects - 23</p>
                                </div>
                                <div>
                                    <button class="year_btn" data-toggle="modal" data-target="#add_subject"><img src="{{ asset('School/asset/icons/add subject.svg') }}">Add Subject</button>
                                </div>
                            </div>
                            <div class="main_table">
                                <table class="display data--table" style="width:100% !important">
                                    <thead>
                                        <tr>
                                            <th> <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                                                <label for="vehicle1">S.No</label></th>
                                            <th>Subject</th>
                                            <th>Created Date</th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                                                <label for="vehicle1" class="input_value"></label>1</td>
                                            <td>Tamil</td>
                                            <td>16 May 2022</td>
                                            <td class="edit_text" data-toggle="modal" data-target="#edite_subject"><img src="{{ asset('School/asset/edit.png') }}"><a href="#">Edit</a></td>
                                            <td class="delete_text"><img src="{{ asset('School/asset/Delete.png') }}"><a href="#" data-toggle="modal" data-target="#delete">Delete</a></td>
                                        </tr>
                                        <tr>
                                            <td><input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                                                <label for="vehicle1" class="input_value"></label>2</td>
                                            <td>Mathematics</td>
                                            <td>20 Sep 2022</td>
                                            <td class="edit_text" data-toggle="modal" data-target="#edite_subject"><img src="{{ asset('School/asset/edit.png') }}"><a href="#">Edit</a></td>
                                            <td class="delete_text"><img src="{{ asset('School/asset/Delete.png') }}"><a href="#" data-toggle="modal" data-target="#delete">Delete</a></td>
                                        </tr>
                                </table>
                            </div>
                        </div>
                        <!-- .....Time Table..... -->
                        <div class="tab-pane fade" id="pills-contacts" role="tabpanel" aria-labelledby="pills-contacts-tab">
                            <div class="titel_conts">
                                <div class="academic_text">
                                    <h4>Time Table</h4>
                                    <p>Total Time Tables - 23</p>
                                </div>
                                <!--  <div>
                                <button class="year_btn" data-toggle="modal" data-target="#add_subject"><img src="asset/">Add Subject</button>
                            </div> -->
                            </div>
                            <div>
                                <div class="select_contern">
                                    <p>Academic Year</p>
                                    <select>
                                        <option>2021-2022</option>
                                        <option>2020-2021</option>
                                    </select>
                                </div>

                            </div>
                            <!--        <div class="navbar-sub-content">
                            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="pills-home-tab" data-toggle="pill" data-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Class Timetable</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-profile-tab" data-toggle="pill" data-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Period Configuration</button>
                                </li>
                               
                            </ul>
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">...</div>
                                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">...</div>
                               
                            </div>
                        </div> -->
                            <div class="navbar-sub-content">
                                <nav>
                                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                        <button class="nav-link active" id="nav-home-tab" data-toggle="tab" data-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Class Timetable</button>
                                        <button class="nav-link" id="nav-profile-tab" data-toggle="tab" data-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Period Configuration</button>
                                    </div>
                                </nav>
                                <div class="tab-content" id="nav-tabContent">
                                    <!-- ...../Class Timetable.... -->
                                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                        <div class="main_table">
                                            <table class="display data--table" style="width:100% !important">
                                                <thead>
                                                    <tr>
                                                        <th>S.No</th>
                                                        <th>Standard</th>
                                                        <th>Section</th>
                                                        <th></th>
                                                        <th></th>
                                                        <th></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Class 6</td>
                                                        <td>A</td>
                                                        <td><button class="set_time" id="timepicker" onclick="set_time()"><img src="{{ asset('School/asset/icons/set time table.svg') }}" style="width:30px;"> Set Time Table</button></td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>Class 6 </td>
                                                        <td>B</td>
                                                        <td class="edit_text" onclick="set_time()"><img src="{{ asset('School/asset/icons/view.svg') }}"><a href="#">View</a></td>
                                                        <td class="edit_text" onclick="set_time()"><img src="{{ asset('School/asset/edit.png') }}"><a href="#">Edit</a></td>
                                                        <td class="delete_text" data-toggle="modal" data-target="#delete"><img src="{{ asset('School/asset/Delete.png') }}" ><a href="#">Delete</a></td>
                                                    </tr>
                                            </table>
                                        </div>
                                    </div>
                                    <!-- .....//....Period Configuration/..... -->
                                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                        <div class="add-btn">
                                            <button class="year_btn" data-toggle="modal" data-target="#add_class1"><img src="{{ asset('School/asset/icons/add class.svg') }}">Add Class</button>
                                            <!-- data-toggle="modal" data-target="#add_subject"  -->
                                        </div>
                                        <div class="main_table">
                                            <table class="display data--table" style="width:100% !important">
                                                <thead>
                                                    <tr>
                                                        <th>S.No</label></th>
                                                        <th>Classes</th>
                                                        <th>Created on</th>
                                                        <th></th>
                                                        <th></th>
                                                        <th></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>UKG,LKG</td>
                                                        <td>30 Apr 2022</td>
                                                        <td class="edit_text" onclick="view()"><img src="{{ asset('School/asset/icons/view.svg') }}"><a href="#">View</a></td>
                                                        <td class="edit_text"><img src="{{ asset('School/asset/edit.png') }}"><a href="#">Edit</a></td>
                                                        <td class="delete_text"><img src="{{ asset('School/asset/Delete.png') }}" data-toggle="modal" data-target="#delete"><a href="#">Delete</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>Class 1, Class2, Class 3</td>
                                                        <td>30 Apr 2022</td>
                                                        <td class="edit_text"><img src="{{ asset('School/asset/icons/view.svg') }}"><a href="#">View</a></td>
                                                        <td class="edit_text"><img src="{{ asset('School/asset/edit.png') }}"><a href="#">Edit</a></td>
                                                        <td class="delete_text"><img src="{{ asset('School/asset/Delete.png') }}" data-toggle="modal" data-target="#delete"><a href="#">Delete</a></td>
                                                    </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- .....set time table.... -->
            <div class="hidden" id="edit_class">
                <div>
                    <ul class="breadcrumb-set">
                        <li><a href="#" class="">School Configuration</a> /</li>
                        <li><a href="#" class="">Time Table</a> /</li>
                        <li><a href="#" class="">Period Configuration</a> /</li>
                        <li><a href="#" class="">Class Period Configuration</a></li>
                    </ul>
                </div>
                <div class="set-time-table">
                    <img src="{{ asset('School/asset/img/arrow.png') }}" onclick="view()">
                    <h4>Class Period Configuration</h4>
                  
                </div>
                <div class="main_table">
                    <div class="title_texts_box">
                        <h4>Class Details :</h4>
                        <div data-toggle="modal" data-target="#edit_periods"><button class="edit_cont"><img src="{{ asset('School/asset/edit.png') }}">Edit Class</button></div>
                    </div>
                    <div class="time_sheet">
                        <table>
                            <!--   <tr>
                            <th>Class Details :
                                <span><button class=""><img src="asset/edit.png">Add Subject</button></span>
                            </th>
                        </tr> -->
                            <tr>
                                <td>Classes</td>
                                <td>-</td>
                                <td><span>LKG</span></td>
                            </tr>
                            <tr>
                                <td>Start Time</td>
                                <td>-</td>
                                <td><span>08:00am</span></td>
                            </tr>
                            <tr>
                                <td>End Time</td>
                                <td>-</td>
                                <td><span>08:00am</span></td>
                            </tr>
                            <tr>
                                <td>Days</td>
                                <td>-</td>
                                <td><span>Monday, Tuesday, Wedneday, Thursday, Friday</span></td>
                            </tr>
                        </table>
                    </div>
                    <div class="title_texts_box" style="padding-bottom: 20px;">
                        <h4>Period Details :</h4>
                        <div><button class="Period_btn" data-toggle="modal" data-target="#class_period"><img src="{{ asset('School/asset/icons/add period.svg') }}" class="period-img">Add Period</button></div>
                    </div>
                    <table class="display data--table" style="width:100% !important;">
                        <thead>
                            <tr>
                                <th>S.No</label></th>
                                <th>Period</th>
                                <th>Start Time</th>
                                <th>End Time</th>
                                <th>Period Type</th>
                                <th>Created Date</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Period 1</td>
                                <td>08;00AM</td>
                                <td>09:00Am</td>
                                <td>Lecture</td>
                                <td>30 Apr 2022</td>
                                <td class="edit_text" data-toggle="modal" data-target="#edit_periods"><img src="{{ asset('School/asset/edit.png') }}"><a href="#">Edit</a></td>
                                <td class="delete_text" data-toggle="modal" data-target="#delete"><img src="{{ asset('School/asset/Delete.png') }}"><a href="#">Delete</a></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Period 2</td>
                                <td>08;00AM</td>
                                <td>09:00Am</td>
                                <td>Lecture</td>
                                <td>31 Apr 2022</td>
                                <td class="edit_text" data-toggle="modal" data-target="#edit_periods"><img src="{{ asset('School/asset/edit.png') }}"><a href="#">Edit</a></td>
                                <td class="delete_text" data-toggle="modal" data-target="#delete"><img src="{{ asset('School/asset/Delete.png') }}"><a href="#">Delete</a></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Period 1</td>
                                <td>08;00AM</td>
                                <td>09:00Am</td>
                                <td>Lecture</td>
                                <td>30 Apr 2022</td>
                                <td class="edit_text" data-toggle="modal" data-target="#edit_periods"><img src="{{ asset('School/asset/edit.png') }}"><a href="#">Edit</a></td>
                                <td class="delete_text" data-toggle="modal" data-target="#delete"><img src="{{ asset('School/asset/Delete.png') }}"><a href="#">Delete</a></td>
                            </tr>
                    </table>
                </div>
            </div>
            <!-- .....Set time table...... -->
            <div class="hidden" id="set_time">
                <div>
                    <ul class="breadcrumb-set">
                        <li><a href="#" class="">School Configuration</a> /</li>
                        <li><a href="#" class="">Time Table</a> /</li>
                        <li><a href="#" class="">Class 6 A</a></li>
                    </ul>
                </div>
                <div class="set-time-tables">
                    <div style="display:flex;">
                       <img src="{{ asset('School/asset/img/arrow.png') }}" onclick="set_time()">
                        <h4>Class Period Configuration</h4>
                        </div>
                      <div>
                        <button class="timetable_btn">Save Timetable</button>
                    </div>
                </div>
                <div class="main_tables">
                    <div class="time-table-container">
                        <div class="time-table-cell"></div>
                        <div class="timetable-cells day-cell">Monday</div>
                        <div class="timetable-cells day-cell">Tuesday</div>
                        <div class="timetable-cells day-cell">Wednesday</div>
                        <div class="timetable-cells day-cell">Thursday</div>
                        <div class="timetable-cells day-cell">Friday</div>
                        <div class="timetable-cells day-cell">Saturday</div>
                        <div class="timetable-cells day-cell">Sunday</div>
                        <div class="timetable-cells period-desc-cell">
                            <div>
                                <p class="period_text">Periods 1</p>
                                <p class="period-timing">08:00 AM - 09:00 AM</p>
                            </div>
                        </div>
                        <div class="timetable-cells period-cell period-cell-1">
                            <!-- <div class="edit_icons">
                                
                            </div> -->
                            <div class="periods_subtext edit">
                                <img src="{{ asset('School/asset/icons/edit period.svg') }}" data-toggle="modal" data-target="#edit_period">
                                <h4>Mathematics</h4>
                                <p>Hettie Jones</p>
                            </div>
                        </div>
                        <div class="timetable-cells period-cell period-cell-2">
                            <div class="periods_subtext edit status_texts">
                                <!-- <img src="asset/icons/edit period.svg"> -->
                                <h4>Mathematics</h4>
                                <p>Hettie Jones</p>
                            </div>
                        </div>
                        <div class="timetable-cells period-cell period-cell-3">
                            <div class="periods_subtext edit status_texts2">
                                <!-- <img src="asset/icons/edit period.svg"> -->
                                <h4>English</h4>
                                <p>Hettie Jones</p>
                            </div>
                        </div>
                        <div class="timetable-cells period-cell period-cell-4">
                            <div class="periods_subtext edit status_texts3">
                                <!-- <img src="asset/icons/edit period.svg"> -->
                                <h4>PT</h4>
                                <p>Hettie Jones</p>
                            </div>
                        </div>
                        <div class="timetable-cells period-cell period-cell-5">
                            <div class="periods_subtext edit status_texts4">
                                <!-- <img src="asset/icons/edit period.svg"> -->
                                <h4>Science</h4>
                                <p>Hettie Jones</p>
                            </div>
                        </div>
                        <div class="timetable-cells period-cell period-cell-6">
                            <div class="periods_subtext edit add_conts" data-toggle="modal" data-target="#add_period">
                                <!-- <img src="asset/icons/edit period.svg"> -->
                                <img src="{{ asset('School/asset/icons/add period class.svg') }}" class="add_conts_img">
                            </div>
                        </div>
                        <div class="timetable-cells period-cell period-cell-7">
                            <div class="periods_subtext edit add_conts" data-toggle="modal" data-target="#add_period">
                                <!-- <img src="asset/icons/edit period.svg"> -->
                                <img src="{{ asset('School/asset/icons/add period class.svg') }}" class="add_conts_img">
                            </div>
                        </div>
                        <div class="timetable-cells period-desc-cell">
                            <div>
                                <p class="period_text">Periods 2</p>
                                <p class="period-timing">09:00 AM - 10:00 AM</p>
                            </div>
                        </div>
                        <div class="timetable-cells period-cell period-cell-1">
                        </div>
                        <div class="timetable-cells period-cell period-cell-2">
                            <div class="periods_subtext edit add_conts" data-toggle="modal" data-target="#add_period">
                                <!-- <img src="asset/icons/edit period.svg"> -->
                                <img src="{{ asset('School/asset/icons/add period class.svg') }}" class="add_conts_img">
                            </div>
                        </div>
                        <div class="timetable-cells period-cell period-cell-3"></div>
                        <div class="timetable-cells period-cell period-cell-4"></div>
                        <div class="timetable-cells period-cell period-cell-5"></div>
                        <div class="timetable-cells period-cell period-cell-6"></div>
                        <div class="timetable-cells period-cell period-cell-7"></div>
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
                        <div class="timetable-cells period-cell period-cell-6"></div>
                        <div class="timetable-cells period-cell period-cell-7"></div>
                        <!--    <div class="Short Break">
                            <span>sdjfjksk</span>
                        </div> -->
                        <div class="timetable-cells period-desc-cell">
                            <div>
                                <p class="period_text">Periods 3</p>
                                <p class="period-timing">10:00 AM - 11:30 AM</p>
                            </div>
                        </div>
                        <div class="timetable-cells period-cell period-cell-1">
                            <div class="periods_subtext edit add_conts" data-toggle="modal" data-target="#add_period">
                                <!-- <img src="asset/icons/edit period.svg"> -->
                                <img src="{{ asset('School/asset/icons/add period class.svg') }}" class="add_conts_img">
                            </div>
                        </div>
                        <div class="timetable-cells period-cell period-cell-2"></div>
                        <div class="timetable-cells period-cell period-cell-3"></div>
                        <div class="timetable-cells period-cell period-cell-4"></div>
                        <div class="timetable-cells period-cell period-cell-5">
                            <div class="periods_subtext  edit add_conts" data-toggle="modal" data-target="#add_period">
                                <!-- <img src="asset/icons/edit period.svg"> -->
                                <img src="{{ asset('School/asset/icons/add period class.svg') }}" class="add_conts_img">
                            </div>
                        </div>
                        <div class="timetable-cells period-cell period-cell-6"></div>
                        <div class="timetable-cells period-cell period-cell-7"></div>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <!-- ..........MODEL>>>>>>>>........>>>>>>>>>>>.......? -->
    <!-- .................. -->
        <!--delete  Modal -->
    <div class=" model_title modal fade" id="delete" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Delete</h5>
                    <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button> -->
                </div>
                <div class="modal-body">
                    <div class="satart-contts">
                        <div class="set_yearss1">
                            <h4>Are you sure want to delete?</h4>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn cancel_btn" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn create_btn" style="background: #FF3B30;">Delete</button>
                </div>
            </div>
        </div>
    </div>


    <!--Add year  Modal -->
    <div class=" model_title modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" style="transform: translate(0px,50%);">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Year</h5>
                    <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button> -->
                </div>
                <div class="modal-body">
                    <div class="satart-cont">
                        <div class="set_years">
                            <h4>Sart Year</h4>
                            <select>
                                <option>Choose Year</option>
                            </select>
                        </div>
                        <div class="set_years">
                            <h4>End Year</h4>
                            <select>
                                <option>Choose Year</option>
                            </select>
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


        <!--Edit year  Modal -->
    <div class=" model_title modal fade" id="edit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"> Edit Academic Year</h5>
                    <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button> -->
                </div>
                <div class="modal-body">
                    <div class="satart-cont">
                        <div class="set_years">
                            <h4>Sart Year</h4>
                            <select>
                                <option>Choose Year</option>
                            </select>
                        </div>
                        <div class="set_years">
                            <h4>End Year</h4>
                            <select>
                                <option>Choose Year</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn cancel_btn" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn create_btn">Update</button>
                </div>
            </div>
        </div>
    </div>


    <!--Add class  Modal -->
    <div class=" model_title modal fade" id="add_class" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Class</h5>
                    <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button> -->
                </div>
                <div class="modal-body">
                    <div class="satart-cont" style="align-items: center;" id="slot_1">
                        <div class="set_years">
                            <h4>Standard Name</h4>
                            <input type="text" name="" placeholder="class 7">
                        </div>
                        <div class="set_years">
                            <h4>Section Name</h4>
                            <input type="text" name="" placeholder="c">
                            <img src="{{ asset('School/asset/icons/close_grey.svg') }}>
                        </div>
                        <!--  <div class="close_box">
                            <p>X</p>
                        </div> -->
                    </div>
                    <div class="satart-cont" style="align-items: center;" id="slot_2">
                        <div class="set_years">
                            <h4>Standard Name</h4>
                            <input type="text" name="" placeholder="class 7">
                        </div>
                        <div class="set_years">
                            <h4>Section Name</h4>
                            <input type="text" name="" placeholder="c">
                            <img src="{{ asset('School/asset/icons/close_grey.svg') }}">
                        </div>
                        <!--  <div class="close_box">
                            <p>X</p>
                        </div> -->
                    </div>
                    <div class="add_slot_text">
                        <p>+Add Standard</p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn cancel_btn" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn create_btn">Create</button>
                </div>
            </div>
        </div>
    </div>




        <!--Edite class  Modal -->
    <div class=" model_title modal fade" id="edits_class" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Class</h5>
                    <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button> -->
                </div>
                <div class="modal-body">
                    <div class="satart-cont" style="align-items: center;" id="slot_1">
                        <div class="set_years">
                            <h4>Standard Name</h4>
                            <input type="text" name="" placeholder="class 7">
                        </div>
                        <div class="set_years">
                            <h4>Section Name</h4>
                            <input type="text" name="" placeholder="c">
                            <img src="{{ asset('School/asset/icons/close_grey.svg') }}">
                        </div>
                        <!--  <div class="close_box">
                            <p>X</p>
                        </div> -->
                    </div>
                    <div class="satart-cont" style="align-items: center;" id="slot_2">
                        <div class="set_years">
                            <h4>Standard Name</h4>
                            <input type="text" name="" placeholder="class 7">
                        </div>
                        <div class="set_years">
                            <h4>Section Name</h4>
                            <input type="text" name="" placeholder="c">
                            <img src="{{ asset('School/asset/icons/close_grey.svg') }}">
                        </div>
                        <!--  <div class="close_box">
                            <p>X</p>
                        </div> -->
                    </div>
                    <div class="add_slot_text">
                        <p>+Add Standard</p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn cancel_btn" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn create_btn">Update</button>
                </div>
            </div>
        </div>
    </div>



    <!--Add subject  Modal -->
    <div class=" model_title modal fade" id="add_subject" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Subject</h5>
                    <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button> -->
                </div>
                <div class="modal-body">
                    <div class="satart-cont" style="align-items: center;" id="slot_3">
                        <!-- <div class="set_years">
                            <h4>Subject Name</h4>
                            <input type="text" name="" placeholder="Mathematics">
                        </div> -->
                        <div class="set_years">
                            <h4>Subject Name</h4>
                            <input type="text" name="" placeholder="Mathematics" style="width: 470px;">
                            <img src="{{ asset('School/asset/icons/close_grey.svg') }}">
                        </div>
                        <!-- <div class="close_box">
                            <p>X</p>
                        </div> -->
                    </div>
                    <div class="satart-cont" style="align-items: center;" id="slot_4">
                        <!-- <div class="set_years">
                            <h4>Standard Name</h4>
                            <input type="text" name="" placeholder="class 7">
                        </div> -->
                        <div class="set_years">
                            <h4>Subject Name</h4>
                            <input type="text" name="" placeholder="Enter subject name" style="width: 470px;">
                            <img src="{{ asset('School/asset/icons/close_grey.svg') }}">
                        </div>
                    </div>
                    <div class="add_slot_text">
                        <p>+Add Subject</p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn cancel_btn" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn create_btn">Create</button>
                </div>
            </div>
        </div>
    </div>


        <!--Edite subject  Modal -->
    <div class=" model_title modal fade" id="edite_subject" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Subject</h5>
                    <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button> -->
                </div>
                <div class="modal-body">
                    <div class="satart-cont" style="align-items: center;" id="slot_3">
                        <!-- <div class="set_years">
                            <h4>Subject Name</h4>
                            <input type="text" name="" placeholder="Mathematics">
                        </div> -->
                        <div class="set_years">
                            <h4>Subject Name</h4>
                            <input type="text" name="" placeholder="Mathematics" style="width: 470px;">
                            <img src="{{ asset('School/asset/icons/close_grey.svg') }}">
                        </div>
                        <!-- <div class="close_box">
                            <p>X</p>
                        </div> -->
                    </div>
                    <div class="satart-cont" style="align-items: center;" id="slot_4">
                        <!-- <div class="set_years">
                            <h4>Standard Name</h4>
                            <input type="text" name="" placeholder="class 7">
                        </div> -->
                        <div class="set_years">
                            <h4>Subject Name</h4>
                            <input type="text" name="" placeholder="Enter subject name" style="width: 470px;">
                            <img src="{{ asset('School/asset/icons/close_grey.svg') }}">
                        </div>
                    </div>
                    <div class="add_slot_text">
                        <p>+Add Subject</p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn cancel_btn" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn create_btn">Update</button>
                </div>
            </div>
        </div>
    </div>



    <!--Add Period -->
    <div class=" model_title modal fade" id="add_period" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" style="transform: translate(0px,50%);">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Period</h5>
                    <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button> -->
                </div>
                <div class="modal-body">
                    <div class="satart-cont1">
                        <div class="Period_sub_status">
                            <h4>Monday</h4>
                            <p>Period 1 (08:00 AM - 09:00AM)</p>
                        </div>
                        <div class="set_year">
                            <h4>Subject</h4>
                            <select>
                                <option>Select subject</option>
                            </select>
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
    <!--Add Period -->
    <div class=" model_title modal fade" id="edit_period" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" style="transform: translate(0px,50%);">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Period</h5>
                    <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button> -->
                </div>
                <div class="modal-body">
                    <div class="satart-cont1">
                        <div class="Period_sub_status">
                            <h4>Monday</h4>
                            <p>Period 1 (08:00 AM - 09:00AM)</p>
                        </div>
                        <div class="border-bottoms"></div>
                        <div class="set_year">
                            <h4>Subject</h4>
                            <select>
                                <option>Select subject</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn cancel_btn" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn create_btn">Update</button>
                </div>
            </div>
        </div>
    </div>
    <!--Class Add Period -->
    <div class=" model_title modal fade" id="class_period" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Period</h5>
                    <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button> -->
                </div>
                <div class="modal-body">
                    <div class="satart-cont1">
                        <div class="period_timing_list">
                            <div class="name_period">
                                <p>Period Name</p>
                                <input type="text" name="" placeholder="Period 4">
                            </div>
                            <div class="period_timing_start">
                                <div class="set_timeing">
                                    <p>Start Time</p>
                                    <input type="text" name="" placeholder="11:00 AM">
                                </div>
                                <div class="set_timeing">
                                    <p>End Time</p>
                                    <input type="text" name="" placeholder="11:00 AM">
                                </div>
                            </div>
                        </div>
                        <div class="set_year">
                            <h4>Period Category</h4>
                            <select>
                                <option>Lectural</option>
                            </select>
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


        <!--Class Add Period -->
    <div class=" model_title modal fade" id="edit_periods" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Period</h5>
                    <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button> -->
                </div>
                <div class="modal-body">
                    <div class="satart-cont1">
                        <div class="period_timing_list">
                            <div class="name_period">
                                <p>Period Name</p>
                                <input type="text" name="" placeholder="Period 4">
                            </div>
                            <div class="period_timing_start">
                                <div class="set_timeing">
                                    <p>Start Time</p>
                                    <input type="text" name="" placeholder="11:00 AM">
                                </div>
                                <div class="set_timeing">
                                    <p>End Time</p>
                                    <input type="text" name="" placeholder="11:00 AM">
                                </div>
                            </div>
                        </div>
                        <div class="set_year">
                            <h4>Period Category</h4>
                            <select>
                                <option>Lectural</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn cancel_btn" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn create_btn">Update</button>
                </div>
            </div>
        </div>
    </div>




    <!--Edit class -->
    <div class=" model_title modal fade" id="edit_class" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Class</h5>
                    <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button> -->
                </div>
                <div class="modal-body">
                    <div class="satart-cont1">
                        <div class="period_timing_list">
                            <div class="name_period">
                                <p>Period Name</p>
                                <!-- <input type="text" name="" placeholder="Period 4"> -->
                                <div class="mulite_content">
                                    <select class="mySelect for" multiple="multiple" style="width: 100%" placeholder="select"></select>
                                </div>
                            </div>
                            <div class="period_timing_start">
                                <div class="set_timeing" id="datetimepicker3">
                                    <p>Start Time</p>
                                    <label>
                                        <img src="{{ asset('School/asset/icons/time.svg') }}" class="time_iocn">
                                        <input type="text" class="date-piker" name="" placeholder="11:00 AM">
                                    </label>
                                </div>
                                <div class="set_timeing">
                                    <p>End Time</p>
                                    <label>
                                        <img src="{{ asset('School/asset/icons/time.svg') }}" class="time_iocn2">
                                        <input type="text" class="date-piker" name="" placeholder="11:00 AM">
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="set_year">
                            <h4>Period Category</h4>
                            <!--  <select>
                                <option>Lectural</option>
                            </select> -->
                            <div class="mulite_content">
                                <select class="mySelect for" multiple="multiple" style="width: 100%" placeholder="select"></select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn cancel_btn" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn create_btn">Update</button>
                </div>
            </div>
        </div>
    </div>
    <!--Add class -->
    <div class=" model_title modal fade" id="add_class1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Class</h5>
                    <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button> -->
                </div>
                <div class="modal-body">
                    <div class="satart-cont1">
                        <div class="period_timing_list">
                            <div class="name_period">
                                <p>Period Name</p>
                                <!-- <input type="text" name="" placeholder="Period 4"> -->
                                <div class="mulite_content">
                                    <select class="mySelect for" multiple="multiple" style="width: 100%" placeholder="select"></select>
                                </div>
                            </div>
                            <div class="period_timing_start">
                                <div class="set_timeing" id="datetimepicker3">
                                    <p>Start Time</p>
                                    <label>
                                        <img src="{{ asset('School/asset/icons/time.svg') }}" class="time_iocn">
                                        <input type="text" class="date-piker" name="" placeholder="11:00 AM">
                                    </label>
                                </div>
                                <div class="set_timeing">
                                    <p>End Time</p>
                                    <label>
                                        <img src="{{ asset('School/asset/icons/time.svg') }}" class="time_iocn2">
                                        <input type="text" class="date-piker" name="" placeholder="11:00 AM">
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="set_year">
                            <h4>Period Category</h4>
                            <!--  <select>
                                <option>Lectural</option>
                            </select> -->
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
    <script src="{{ asset('School/js/jquery.min.js') }}" ></script>
    <script src="{{ asset('School/js/bootstrap_bundle_min.js') }}" ></script>
    <script src="{{ asset('School/js/select2.min.js') }}" ></script>
    <script src="{{ asset('School/js/flatpickr.js') }}" ></script>
    <!-- datatables -->
    <script src="{{ asset('School/js/jquery_dataTables_min.js') }}" ></script>
    <script src="{{ asset('School/js/table.js') }}" ></script>
    <script src="{{ asset('School/js/main.js') }}" ></script>
    <!-- datatables -->
    <script src="{{ asset('School/js/jquery_dataTables_min.js') }}" ></script>
    <script>
    const body = document.querySelector('body'),
        sidebar = body.querySelector('nav'),
        toggle = body.querySelector(".toggle");


    toggle.addEventListener("click", () => {
        sidebar.classList.toggle("close");
    })

    // $(document).ready(function() {
    //     $('#example').DataTable();
    // });
    $(".date-piker").flatpickr({
        enableTime: true,
        noCalendar: true,
        time_24hr: true,
        dateFormat: "H:i",
    });

    //......Add_slot........
    let i = $('.Set_service-title').length + 1;
    $('body').on('click', '.add_slot_text', function() {
        console.log(i);
        let box = `   <div class="satart-cont">
                 <div class="set_years">
                     <h4>Standard Name</h4>
                    <input type="text" name="" placeholder="class 7">
                 </div>

                 <div class="set_years">
                     <h4>Section Name</h4>
                     <input type="text" name="" placeholder="c">
                      <img src="asset/icons/close_grey.svg">
                 </div>
             </div>`

        $('.add_slot_text').before(box);
        i++;
    });
    $('body').on('click', '.close_box', function() {
        let slotId = $(this).parent().attr('id');
        $(`#${slotId}`).remove();
        //i = $(this).parent().attr('id').replace(/[^0-9]/g, '');

    })


    var data = ["Tamil", "English", "Biology", "Chemistry"]; // Programatically-generated options array with > 5 options
    var placeholder = "select";
    $(".mySelect").select2({
        data: data,
        placeholder: placeholder,
        allowClear: false,
        minimumResultsForSearch: 5
    });
    </script>
</body>

</html>