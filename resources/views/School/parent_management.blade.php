<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Parent Management</title>
    <link rel="icon" href="{{ asset('School/asset/logo/top-iocn.png') }}"  />
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="{{ asset('School/css/boxicons.min.css') }}">
    <!-- <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'> -->

    <link rel="stylesheet" href="{{ asset('School/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('School/css/jquery_dataTables_min.css') }}">
    <link rel="stylesheet" href="{{ asset('School/css/select2_min.css') }}"> 
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="{{ asset('School/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('School/css/dashboard.css') }}">
    <link rel="stylesheet" href="{{ asset('School/css/class_management.css') }}">
    <link rel="stylesheet" href="{{ asset('School/css/teacher_management.css') }}">
    <link rel="stylesheet" href="{{ asset('School/css/parent_management.css') }}">
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
                                <li><a href="#">Logout</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </header>
            <div class="boder_bottom"></div>
            <div class="Student_details">
                <div class="header_titel">
                    <div>
                        <h4>Parent Management</h4>
                        <!-- <p>Total Years - 4</p> -->
                    </div>
                    <div class="text_titels">
                        <button class="download_btn"><span>Download</span></button>
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
                    <!--  <div>
                        <button class="year_btn"><img src="asset/icons/add teacher.svg">Add Teacher</button>
                    </div> -->
                </div>
                <div class="main_table">
                    <table class="display data--table" style="width:100%">
                        <thead>
                            <tr>
                                <th>S.No</th>
                                <th>Parent ID</th>
                                <th>Parent Name</th>
                                <th>Email ID</th>
                                <th>Mobile Number</th>
                                <th>Student Name</th>
                                <th>Standard</th>
                                <th>Section</th>
                                <th>Created Date</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>AP001</td>
                                <td>Leonard Johnston</td>
                                <td>bu@gozcauri.net</td>
                                <td>(312)946-5086</td>
                                <td>Gertrude Schwartz</td>
                                <td>Class 6 A</td>
                                <td>16 Aug 2022</td>
                                <td class="edit_text" onclick="student_views()"><img src="{{ asset('School/asset/icons/view.svg') }}"><a href="#">View</a></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>AP001</td>
                                <td>Leonard Johnston</td>
                                <td>bu@gozcauri.net</td>
                                <td>(312)946-5086</td>
                                <td>Gertrude Schwartz</td>
                                <td>Class 6 A</td>
                                <td>16 Aug 2022</td>
                                <td class="edit_text" onclick="student_views()"><img src="{{ asset('School/asset/icons/view.svg') }}"><a href="#">View</a></td>
                                <td></td>
                            </tr>
                    </table>
                </div>
            </div>
            <!-- ........... -->
            <div class="hidden" id="student_views">
                <div>
                    <ul class="breadcrumb-set">
                        <li><a href="#" class="">Parent Management</a> /</li>
                        <li><a href="#" class="">Leonard Johnston</a></li>
                        <!--  <li><a href="#" class="">Class Details</a>/</li>
                        <li><a href="#" class="">Eddie Drake</a></li> -->
                    </ul>
                </div>
                <div class="set-time-table">
                    <div style="display: flex; gap: 10px;">
                        <div class="left_arrows">
                            <img src="{{ asset('School/asset/img/arrow.png') }}" onclick="student_views()">
                        </div>
                        <div>
                            <h4>Leonard Johnston</h4>
                            <p>PA001</p>
                        </div>
                    </div>
                   <div>
                    <!-- <button class="cancel_btns" data-toggle="modal" data-target="#exampleModal"><img src="asset/cancel.png">Disable Student</button> -->
                        <button class="edit_stu"><img src="{{ asset('School/asset/edites.png') }}">Edit Parent</button>
                    </div> 
                </div>
                <div class="main_tables">
                    <div class="profile_contents">
                        <!-- <img src="asset/ophelia.png"> -->
                        <div class="">
                            <div class="profile_details">
                                <h6>Leonard Johnston</h6>
                                <!-- <button class="status_btn">RTE Student</button> -->
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
                                            <td><span>27 years</span></td>
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
                            <h6>Student 1</h6>
                        </div>
                        <div class="parent_time_sheet">
                            <table class="">
                                <tbody>
                                    <tr>
                                        <td>Name</td>
                                        <td>-</td>
                                        <td><span>Nannie Lambert</span></td>
                                    </tr>
                                    <tr>
                                        <td>Class</td>
                                        <td>-</td>
                                        <td><span>Class 4 A</span></td>
                                    </tr>
                                    <tr>
                                        <td class="edit_text"><img src="{{ asset('School/asset/icons/view.svg') }}"><a href="#">View Student</a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="parent_details_bg   class_detail">
                        <div class="profile_details">
                            <h6>Student 2</h6>
                        </div>
                        <div class="parent_time_sheet">
                            <table class="">
                                <tbody>
                                    <tr>
                                        <td>Name</td>
                                        <td>-</td>
                                        <td><span>Stella Lambert</span></td>
                                    </tr>
                                    <tr>
                                        <td>Class</td>
                                        <td>-</td>
                                        <td><span>Class 6 C</span></td>
                                    </tr>
                                    <tr>
                                        <td class="edit_text"><img src="{{ asset('School/asset/icons/view.svg') }}"><a href="#">View Student</a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
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
                    <div class="satart-cont">
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
    <div class=" model_title modal fade" id="map_teacher" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Map Teacher</h5>
                    <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button> -->
                </div>
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
    <script src="{{ asset('School/js/jquery.min.js') }}" ></script>
    <script src="{{ asset('School/js/bootstrap_bundle_min.js') }}" ></script>
    <!-- datatables -->
    <script src="{{ asset('School/js/jquery_dataTables_min.js') }}" ></script>
    <script src="{{ asset('School/js/select2.min.js') }}" ></script>
    <script src="{{ asset('School/js/table.js') }}"></script>
    <script src="{{ asset('School/js/main.js') }}" ></script>
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
    </script>
</body>

</html>