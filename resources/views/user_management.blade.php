<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>User Management</title>
    <link rel="icon" href="{{ asset('School/asset/logo/top-iocn.png') }}"  />
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
    <link rel="stylesheet" href="{{ asset('School/css/user_management.css') }}">
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
                        <h4>User Management</h4>
                        <!-- <p>Total Years - 4</p> -->
                    </div>
                    <div class="text_titels" id="communitys">
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
                <div class="navbar-contens">
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-home-tab" data-toggle="pill" data-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Users</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-profile-tab" data-toggle="pill" data-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">User Roles</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                            <div class="titel_conts">
                                <div class="">
                                    <div class="academic_text">
                                        <h4>User</h4>
                                        <p>Total Users - 34</p>
                                    </div>
                                    <!--    <div class="select_addemics_con">
                                        <div class="select_contern">
                                            <p>Class</p>
                                            <select>
                                                <option>Select Class</option>
                                                <option>A</option>
                                            </select>
                                        </div>
                                         <div class="select_contern">
                                            <p>Choose Class</p>
                                            <select>
                                                <option>All</option>
                                                <option>A</option>
                                            </select>
                                        </div> 
                                    </div> -->
                                </div>
                                <div>
                                    <button class="year_btn" data-toggle="modal" data-target="#exampleModal"><img src="{{ asset('School/asset/profil.png') }}">Add User</button>
                                </div>
                            </div>
                            <div class="main_table">
                                <table class="display data--table" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>S.No</th>
                                            <th>Name</th>
                                            <th>Role Name</th>
                                            <th>Email Id</th>
                                            <th>Phone Number</th>
                                            <th>Created Date</th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Arthur Bass</td>
                                            <td>Super Admin</td>
                                            <td>Cifjun@wunva.io</td>
                                            <td>(254)946-5086</td>
                                            <td>16 May 2022</td>
                                            <td class="edit_text" data-toggle="modal" data-target="#edit_user"><img src="{{ asset('School/asset/edit.png') }}"><a href="#">Edit</a></td>
                                            <td class="delete_text"><img src="{{ asset('School/asset/Delete.png') }}"><a href="#">Delete</a></td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Franlin Sims</td>
                                            <td>Admin</td>
                                            <td>Cifjun@wunva.io</td>
                                            <td>(476)946-5086</td>
                                            <td>20 Sep 2022</td>
                                            <td class="edit_text" data-toggle="modal" data-target="#edit_user"><img src="{{ asset('School/asset/edit.png') }}"><a href="#">Edit</a></td>
                                            <td class="delete_text"><img src="{{ asset('School/asset/Delete.png') }}"><a href="#">Delete</a></td>
                                        </tr>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                            <div class="titel_conts">
                                <div class="">
                                    <div class="academic_text">
                                        <h4>Users</h4>
                                        <p>Total Users -35</p>
                                    </div>
                                    <!-- <div class="select_addemics_con">
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
                                    </div> -->
                                </div>
                                <div>
                                    <button class="year_btn" data-toggle="modal" data-target="#add_user_role"><img src="{{ asset('School/asset/icons/user role.svg') }}">Add User Role</button>
                                </div>
                            </div>
                            <div class="main_table">
                                <table class="display data--table" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>S.No</th>
                                            <th>Role Name</th>
                                            <th>Access</th>
                                            <th>Created Date</th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Super Admin</td>
                                            <td>All</td>
                                            <td>16 May 2022</td>
                                            <td class="edit_text" data-toggle="modal" data-target="#Edit_user_role"><img src="{{ asset('School/asset/edit.png') }}"><a href="#">Edit</a></td>
                                            <td class="delete_text"><img src="{{ asset('School/asset/Delete.png') }}"><a href="#">Delete</a></td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Admin</td>
                                            <td>Class Management, Student Management, Teacher Management, Parent Management, User Management, Content Management, Exam Management, Fee Management, Communication Management</td>
                                            <td>20 Sep 2022</td>
                                            <td class="edit_text" data-toggle="modal" data-target="#Edit_user_roler"><img src="{{ asset('School/asset/edit.png') }}"><a href="#">Edit</a></td>
                                            <td class="delete_text"><img src="{{ asset('School/asset/Delete.png') }}"><a href="#">Delete</a></td>
                                        </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <!--Add User -->
    <div class=" model_title modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add User</h5>
                    <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button> -->
                </div>
                <div class="modal-body">
                    <div class="satart-cont" style="border-top: unset;">
                        <div class="in_text">
                            <div class="set_years">
                                <h4>User Name</h4>
                                <input type="text" name="" placeholder="User Name">
                            </div>
                            <div class="set_years">
                                <h4>Email ID</h4>
                                <input type="text" name="" placeholder="Email ID">
                            </div>
                        </div>
                        <div class="in_text">
                            <div class="set_years">
                                <h4>Phone Number</h4>
                                <input type="text" name="" placeholder="Phone Number">
                            </div>
                            <div class="set_years">
                                <h4>Role name</h4>
                                <select>
                                    <option>Role name</option>
                                </select>
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



        <!--Add User -->
    <div class=" model_title modal fade" id="edit_user" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit User</h5>
                    <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button> -->
                </div>
                <div class="modal-body">
                    <div class="satart-cont" style="border-top: unset;">
                        <div class="in_text">
                            <div class="set_years">
                                <h4>User Name</h4>
                                <input type="text" name="" placeholder="User Name">
                            </div>
                            <div class="set_years">
                                <h4>Email ID</h4>
                                <input type="text" name="" placeholder="Email ID">
                            </div>
                        </div>
                        <div class="in_text">
                            <div class="set_years">
                                <h4>Phone Number</h4>
                                <input type="text" name="" placeholder="Phone Number">
                            </div>
                            <div class="set_years">
                                <h4>Role name</h4>
                                <select>
                                    <option>Role name</option>
                                </select>
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


    <!--Add User role -->
    <div class=" model_title modal fade" id="add_user_role" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" style="transform: translate(0px, 10%);">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add User Role</h5>
                    <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button> -->
                </div>
                <div class="modal-body">
                    <div class="satart-cont" style="border-top:unset;">
                        <div class="set_years">
                            <h4>User Role Name</h4>
                            <input type="text" name="" placeholder="Enter user role name" style="width: 500px;">
                        </div>
                        <h4 class="set">Access :</h4>
                        <div class="check_cont">
                            <div>
                                <div class="title_textss">
                                    <input type="checkbox" name="" id="dashboard">
                                    <label for="dashboard">My Dashboard</label>
                                </div>
                                <div class="title_textss">
                                    <input type="checkbox" name="" id="1">
                                    <label for="1">Class Management</label>
                                </div>
                                <div class="title_textss">
                                    <input type="checkbox" name="" id="2">
                                    <label for="2">Teacher Management</label>
                                </div>
                                <div class="title_textss">
                                    <input type="checkbox" name="" id="3">
                                    <label for="3">User Management</label>
                                </div>
                                <div class="title_textss">
                                    <input type="checkbox" name="" id="4">
                                    <label for="4">Exam Management</label>
                                </div>
                                <div class="title_textss">
                                    <input type="checkbox" name="" id="5">
                                    <label for="5">Communication Management</label>
                                </div>
                            </div>
                            <div>
                                <div class="title_textss">
                                    <input type="checkbox" name="" id="6">
                                    <label for="6">School Configuration</label>
                                </div>
                                <div class="title_textss">
                                    <input type="checkbox" name="" id="7">
                                    <label for="7">Student Management</label>
                                </div>
                                <div class="title_textss">
                                    <input type="checkbox" name="" id="7">
                                    <label for="7">Parent Management</label>
                                </div>
                                <div class="title_textss">
                                    <input type="checkbox" name="" id="8">
                                    <label for="8">Content Management</label>
                                </div>
                                <div class="title_textss">
                                    <input type="checkbox" name="" id="9">
                                    <label for="9">Fee Management</label>
                                </div>
                                <div class="title_textss">
                                    <input type="checkbox" name="" id="10">
                                    <label for="10">Legal Management</label>
                                </div>
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



 <!--Add User role -->
    <div class=" model_title modal fade" id="Edit_user_role" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" style="transform: translate(0px, 10%);">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit User Role</h5>
                    <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button> -->
                </div>
                <div class="modal-body">
                    <div class="satart-cont" style="border-top:unset;">
                        <div class="set_years">
                            <h4>User Role Name</h4>
                            <input type="text" name="" placeholder=" Enter user role name" style="width: 500px;">
                        </div>
                        <h4 class="set">Access :</h4>
                        <div class="check_cont">
                            <div>
                                <div class="title_textss">
                                    <input type="checkbox" name="" id="dashboard">
                                    <label for="dashboard">My Dashboard</label>
                                </div>
                                <div class="title_textss">
                                    <input type="checkbox" name="" id="1">
                                    <label for="1">Class Management</label>
                                </div>
                                <div class="title_textss">
                                    <input type="checkbox" name="" id="2">
                                    <label for="2">Teacher Management</label>
                                </div>
                                <div class="title_textss">
                                    <input type="checkbox" name="" id="3">
                                    <label for="3">User Management</label>
                                </div>
                                <div class="title_textss">
                                    <input type="checkbox" name="" id="4">
                                    <label for="4">Exam Management</label>
                                </div>
                                <div class="title_textss">
                                    <input type="checkbox" name="" id="5">
                                    <label for="5">Communication Management</label>
                                </div>
                            </div>
                            <div>
                                <div class="title_textss">
                                    <input type="checkbox" name="" id="6">
                                    <label for="6">School Configuration</label>
                                </div>
                                <div class="title_textss">
                                    <input type="checkbox" name="" id="7">
                                    <label for="7">Student Management</label>
                                </div>
                                <div class="title_textss">
                                    <input type="checkbox" name="" id="7">
                                    <label for="7">Parent Management</label>
                                </div>
                                <div class="title_textss">
                                    <input type="checkbox" name="" id="8">
                                    <label for="8">Content Management</label>
                                </div>
                                <div class="title_textss">
                                    <input type="checkbox" name="" id="9">
                                    <label for="9">Fee Management</label>
                                </div>
                                <div class="title_textss">
                                    <input type="checkbox" name="" id="10">
                                    <label for="10">Legal Management</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn cancel_btn" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn create_btn">Update</button>
                </div>
                <form >
            </div>
        </div>
    </div>


    <script src="{{ asset('School/js/jquery.min.js') }}" ></script>
    <script src="{{ asset('School/js/bootstrap_bundle_min.js') }}" ></script>
    <!-- datatables -->
    <script src="{{ asset('School/js/jquery_dataTables_min.js') }}" ></script>
    <script src="{{ asset('School/js/table.js') }}"></script>

    <script src="{{ asset('School/js/select2.min.js') }}" ></script>
    <script src="{{ asset('School/js/main.js') }}" ></script>
    <script src="{{ asset('School/js/common.js') }}" ></script>
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