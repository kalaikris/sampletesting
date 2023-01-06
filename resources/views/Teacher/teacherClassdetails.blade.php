        <!DOCTYPE html>
        <html lang="en">
        <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Hey Campus.AI</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/jquery.dataTables.min.css">
        <!----======== CSS ======== -->
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/common.css?v=q2w">
        <link rel="stylesheet" href="css/style.css?v=hu1h0">
        <link rel="stylesheet" href="css/myclass.css?v=1fg34">
        <!--<title>Dashboard Sidebar Menu</title>-->
        <style>

            
        </style>
        </head>

        <body>
        <div class="se-pre-con" style="display: none;"></div>
        <div class="mani main">
            
        <!-- ......sidebar.... -->
        <nav class="sidebar">  </nav>

        <!-- .....main..... -->
        <main class="home">
        <header class="nav_cont">
            <div class="sub_content">
                <img src="asset/Rectangle@2x.png">
                <div class="text_titel" id="community">
                    <p>Welcome</p>
                    <h4>Jerry Higgins </h4>
                    <div class="community_box">
                        <ul class="community_list">
                            <li><a href="login.html">Logout</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>
        <div class="boder_bottom"></div>
        
        <section class="personal-content" id="main_section">
       
         <div class="table_form">
            <div class="back-out"><a href="myclass.html"><span><img src="asset/teacher/backarrow.svg" alt="" class="backbtn"></span></a></div>
            <div class="inv_from">
                <ul class="breadcrumb">
                    <li><a href="#">My Classes</a></li>
                    <li>Class 6 A</li>
                </ul>
                <h2>Class 6 A</h2>
            </div>
        </div>
        <div id="exTab">	
        <ul  class="nav nav-pills">
            <li class="active">
            <a  href="#pills1" data-toggle="tab">Attendance</a>
            </li>
            <li><a href="#pills2" data-toggle="tab">Home Work</a>
            </li>
            <li><a href="#pills3" data-toggle="tab">Assignments</a>
            </li>
            <li><a href="#pills4" data-toggle="tab">Test</a>
            </li>
            <li><a href="#pills5" data-toggle="tab">Class Details</a>
            </li>
            <li><a href="#pills6" data-toggle="tab">Timetable</a>
            </li>
        </ul>

        <div class="tab-content clearfix">
            
        <div class="tab-pane active" id="pills1">
            <div class="table_data" >
            <div class="titlesplit">
            <h2>Attendance</h2>
            <div class="hint_value">
            <span><h4 class="green_clr">P</h4> - Present</span>
            <span><h4 class="red_clr">A</h4> - Absent</span>
            <span><h4 class="blue_clr">L</h4> - Leave</span>
            </div>
            </div>
            
            <div class="titlesplit">
            <div class="form-group">
                <label>Date</label>
                <input type="date" class="form-control" placeholder="DD/MM/YYYY">
            </div>
                <div class="form-group">
                <input type="search" class="form-control searchfield" placeholder="Search">
            </div>
            </div>
            
            <table id="table_id" class="table table-striped table-bordered dataTable no-footer">
            <thead>
                <tr>
                    <th>S.No</th>
                    <th>Student ID</th>
                    <th>Student Name</th>
                    <th>Period</th>
                    <th>Attendance</th>
                    <th>Comments</th>
                </tr>
            </thead>
            <body>
            <tr>
                <td>1</td>
                <td>ATC#001</td>
                <td>Harriet Fisher</td>
                <td>Period 2</td>
                <td><div class="period_view"><p class="border_show green_clr">P</p>
                    <p class="border_show ">A</p>
                    <p class="border_show ">L</p></div>
                </td>
                <td><a class="commentbtn" data-toggle="modal" data-target="#comment"><span><img src="asset/teacher/comment.svg" alt=""></span>Comment</a></td>
            </tr>
            <tr>
                <td>2</td>
                <td>ATC#001</td>
                <td>Harriet Fisher</td>
                <td>Period 2</td>
                <td><div class="period_view"><p class="border_show green_clr">P</p>
                    <p class="border_show ">A</p>
                    <p class="border_show ">L</p></div>
                </td>
                <td>-</td>
            </tr>
            <tr>
                <td>3</td>
                <td>ATC#001</td>
                <td>Harriet Fisher</td>
                <td>Period 2</td>
                <td><div class="period_view"><p class="border_show ">P</p>
                    <p class="border_show red_clr">A</p>
                    <p class="border_show ">L</p></div>
                </td>
                <td>OD Approved</td>
            </tr>
            <tr>
                <td>4</td>
                <td>ATC#001</td>
                <td>Harriet Fisher</td>
                <td>Period 2</td>
                <td><div class="period_view"><p class="border_show ">P</p>
                    <p class="border_show red_clr">A</p>
                    <p class="border_show ">L</p></div>
                </td>
                <td>-</td>
            </tr>
            <tr>
                <td>5</td>
                <td>ATC#001</td>
                <td>Harriet Fisher</td>
                <td>Period 2</td>
                <td><div class="period_view"><p class="border_show ">P</p>
                    <p class="border_show ">A</p>
                    <p class="border_show blue_clr">L</p></div>
                </td>
                <td>-</td>
            </tr>
            </body>
        </table>
            </div>
        </div>
            
        <div class="tab-pane" id="pills2">
        
            <div class="titlesplit">
            <h2>Home Work</h2>
            <div class="hint_value">
                <div class="form-group">
                    <p class="formtitle">Choose Date</p>
                    <input type="date" class="form-control">
                </div>
                <button class="btnhome"  data-toggle="modal" data-target="#add_homework"><span><img alt="" src="asset/teacher/add_homework.svg" class="homeworkimg">Add Homework</span></button>
            </div>
            </div>
            <div class="study_work">
            <div class="detail_views">
            <div class="studylist">
                <h2>Study Newtons Third Law</h2>    
                <h4>Study Newton’s third law from pages 34-62. Questions will be asked tomorrow.</h4>
                <p>25 Aug 2022 | Due on - 27 Feb 2022</p>
            </div>
            <div class="listbtn">
                <a class="viewbtn"><span><img src="asset/teacher/view.svg" alt="view" ></span>View </a>
                <a class="editbtn"><span><img src="asset/teacher/Edit.svg" alt="Edit" ></span>Edit </a>
                <a class="deletebtn"><span><img src="asset/teacher/Delete.svg" alt="Delete" ></span>Delete </a>
            </div>
            </div>
            <div class="detail_views">
            <div class="studylist">
                <h2>State Ohm’s law</h2>    
                <h4>Study Newton’s third law from pages 34-62. Questions will be asked tomorrow.</h4>
                <p>25 Aug 2022 | Due on - 27 Feb 2022</p>
            </div>
            <div class="listbtn">
                <a class="viewbtn"><span><img src="asset/teacher/view.svg" alt="view" ></span>View </a>
                <a class="editbtn"><span><img src="asset/teacher/Edit.svg" alt="Edit" ></span>Edit </a>
                <a class="deletebtn"><span><img src="asset/teacher/Delete.svg" alt="Delete" ></span>Delete </a>
            </div>
            </div>
            <div class="detail_views">
            <div class="studylist">
                <h2>Study Newtons Third Law</h2>    
                <h4>Study Newton’s third law from pages 34-62. Questions will be asked tomorrow.</h4>
                <p>25 Aug 2022 | Due on - 27 Feb 2022</p>
            </div>
            <div class="listbtn">
               <a class="viewbtn"><span><img src="asset/teacher/view.svg" alt="view" ></span>View </a>
                <a class="editbtn"><span><img src="asset/teacher/Edit.svg" alt="Edit" ></span>Edit </a>
                <a class="deletebtn"><span><img src="asset/teacher/Delete.svg" alt="Delete" ></span>Delete </a>
            </div>
            </div>
            </div>
        </div>
            
        <div class="tab-pane" id="pills3">
         <div class="split_para">
            <div class="titlesplit">
                <h2>Assignments</h2>
                <div class="hint_value">
                    <button class="btnhome"  data-toggle="modal" data-target="#add_assignment"><span><img alt="" src="asset/teacher/pad_white.svg" class="padwhite">Add Assignments</span></button>
                    </div>
            </div>
             <div class="right_view">
                <div class="page">
                    <div class="nesttabs">
                    <div class="padz">
                    <div class="row">
                    <div class="col-md-3 padz">
                        <ul class="nav nav-tabs tabs-left sideways">
                            <li class="active"><a href="#home-v" data-toggle="tab">
                                <div class="descrip">
                                     <h5 class="mb-1">How India got Independance</h5>
                                    <p>Write an essay on “How India got Independance”. Research by yourself and make a timeline of events.</p>
                                </div>    
                            </a>
                            </li>
                            <li>
                            <a href="#profile-v" data-toggle="tab">
                                <div class="descrip">
                                    <h5 class="mb-1">How India got Independance</h5>
                                    <p>Write an essay on “How India got Independance”. Research by yourself and make a timeline of events.</p>
                                </div>
                            </a>
                            </li>
                            <li>
                            <a href="#messages-v" data-toggle="tab"> 
                                <div class="descrip">
                                    <h5 class="mb-1">How India got Independance</h5>
                                    <p>Write an essay on “How India got Independance”. Research by yourself and make a timeline of events.</p>
                                </div>
                            </a>
                            </li>
                            <li>
                            <a href="#settings-v" data-toggle="tab">
                                <div class="descrip">
                                    <h5 class="mb-1">How India got Independance</h5>
                                    <p>Write an essay on “How India got Independance”. Research by yourself and make a timeline of events.</p>
                                </div>
                            </a>
                            </li>
                      </ul>
                    </div>
                    <div class="col-md-9 nesttabscontent">

                    <div class="tab-content">
                    <div class="tab-pane active" id="home-v" role="tabpanel">
                      <div class="inside">
                          <div class="date_s">
                              <h2>22 Sep, 2022</h2>
                              <div class="stu_s">
                              <p class="submitbtn"><span><img alt="" src="asset/teacher/purple.svg" class="" ></span>24/32 students submitted</p>
                              <p class="datebtn"><span><img alt="" src="asset/teacher/timer.svg" class="" ></span>Due on 25 Sep, 2022</p>
                              </div>
                          </div>
                          <div class="table_s">
                            <h2>How India got Independance</h2>
                              <p>Write an essay on “How India got Independance”. Research by yourself and make a timeline of events.</p>
                          </div>
                  <div class="table_data" >
                    <table id="table_id1" class="table table-striped table-bordered dataTable no-footer">
                    <thead>
                        <tr>
                            <th>S.No</th>
                            <th>Student ID</th>
                            <th>Student Name</th>
                            <th>Submitted on</th>
                            <th>Attachment</th>
                        </tr>
                    </thead>
                    <body>
                    <tr>
                        <td>1</td>
                        <td>ATC#001</td>
                        <td>Harriet Fisher</td>
                        <td>Period 2</td>
                        <td><span><img src="asset/teacher/Sample Attachment 3.png" alt="" class="sampleimg" ></span></td>
                    </tr>
                        <tr>
                        <td>2</td>
                        <td>ATC#002</td>
                        <td>Christine Hanson</td>
                        <td>Period 2</td>
                        <td><span><img src="asset/teacher/Sample Attachment 4.png" alt="" class="sampleimg" ></span></td>
                    </tr>
                        <tr>
                        <td>3</td>
                        <td>ATC#001</td>
                        <td>Jackson Barker</td>
                        <td>Period 2</td>
                        <td><span><img src="asset/teacher/Sample Attachment 2.png" alt="" class="sampleimg" ></span></td>
                    </tr>

                    </body>
                    </table>
                    </div>
                    </div> 
                    </div>

                    <div class="tab-pane fade" id="profile-v" role="tabpanel" >
                       
                      <div class="inside">
                          <div class="date_s">
                              <h2>22 Sep, 2022</h2>
                              <div class="stu_s">
                              <p class="submitbtn"><span><img alt="" src="asset/teacher/purple.svg" class="" ></span>24/32 students submitted</p>
                              <p class="datebtn"><span><img alt="" src="asset/teacher/timer.svg" class="" ></span>Due on 25 Sep, 2022</p>
                              </div>
                          </div>
                          <div class="table_s">
                            <h2>How India got Independance</h2>
                              <p>Write an essay on “How India got Independance”. Research by yourself and make a timeline of events.</p>
                          </div>
                  <div class="table_data" >
                    <table id="table_id22" class="table table-striped table-bordered dataTable no-footer">
                    <thead>
                        <tr>
                            <th>S.No</th>
                            <th>Student ID</th>
                            <th>Student Name</th>
                            <th>Submitted on</th>
                            <th>Attachment</th>
                        </tr>
                    </thead>
                    <body>
                    <tr>
                        <td>1</td>
                        <td>ATC#001</td>
                        <td>Harriet Fisher</td>
                        <td>Period 2</td>
                        <td><span><img src="asset/teacher/Sample Attachment 4.png"  alt="" class="sampleimg" ></span></td>
                    </tr>
                        <tr>
                        <td>2</td>
                        <td>ATC#002</td>
                        <td>Christine Hanson</td>
                        <td>Period 2</td>
                        <td><span><img src="asset/teacher/Sample Attachment 4.png"  alt="" class="sampleimg" ></span></td>
                    </tr>
                        <tr>
                        <td>3</td>
                        <td>ATC#001</td>
                        <td>Jackson Barker</td>
                        <td>Period 2</td>
                        <td><span><img src="asset/teacher/Sample Attachment 4.png"  alt="" class="sampleimg" ></span></td>
                    </tr>

                    </body>
                    </table>
                    </div>
                    </div> 
                    </div>

                    <div class="tab-pane fade" id="messages-v" role="tabpanel">
                    
                      <div class="inside">
                          <div class="date_s">
                              <h2>22 Sep, 2022</h2>
                              <div class="stu_s">
                              <p class="submitbtn"><span><img alt="" src="asset/teacher/purple.svg" class="" ></span>24/32 students submitted</p>
                              <p class="datebtn"><span><img alt="" src="asset/teacher/timer.svg" class="" ></span>Due on 25 Sep, 2022</p>
                              </div>
                          </div>
                          <div class="table_s">
                            <h2>How India got Independance</h2>
                              <p>Write an essay on “How India got Independance”. Research by yourself and make a timeline of events.</p>
                          </div>
                  <div class="table_data" >
                    <table id="table_id33" class="table table-striped table-bordered dataTable no-footer">
                    <thead>
                        <tr>
                            <th>S.No</th>
                            <th>Student ID</th>
                            <th>Student Name</th>
                            <th>Submitted on</th>
                            <th>Attachment</th>
                        </tr>
                    </thead>
                    <body>
                    <tr>
                        <td>1</td>
                        <td>ATC#001</td>
                        <td>Harriet Fisher</td>
                        <td>Period 2</td>
                        <td><span><img src="asset/teacher/Sample Attachment 4.png"  alt="" class="sampleimg" ></span></td>
                    </tr>
                        <tr>
                        <td>2</td>
                        <td>ATC#002</td>
                        <td>Christine Hanson</td>
                        <td>Period 2</td>
                        <td><span><img src="asset/teacher/Sample Attachment 4.png"  alt="" class="sampleimg" ></span></td>
                    </tr>
                        <tr>
                        <td>3</td>
                        <td>ATC#001</td>
                        <td>Jackson Barker</td>
                        <td>Period 2</td>
                        <td><span><img src="asset/teacher/Sample Attachment 4.png"  alt="" class="sampleimg" ></span></td>
                    </tr>

                    </body>
                    </table>
                    </div>
                    </div> 
                    </div>

                    <div class="tab-pane fade" id="settings-v" role="tabpanel">
                       
                      <div class="inside">
                          <div class="date_s">
                              <h2>22 Sep, 2022</h2>
                              <div class="stu_s">
                              <p class="submitbtn"><span><img alt="" src="asset/teacher/purple.svg" class="" ></span>24/32 students submitted</p>
                              <p class="datebtn"><span><img alt="" src="asset/teacher/timer.svg" class="" ></span>Due on 25 Sep, 2022</p>
                              </div>
                          </div>
                          <div class="table_s">
                            <h2>How India got Independance</h2>
                              <p>Write an essay on “How India got Independance”. Research by yourself and make a timeline of events.</p>
                          </div>
                  <div class="table_data" >
                    <table id="table_id44" class="table table-striped table-bordered dataTable no-footer">
                    <thead>
                        <tr>
                            <th>S.No</th>
                            <th>Student ID</th>
                            <th>Student Name</th>
                            <th>Submitted on</th>
                            <th>Attachment</th>
                        </tr>
                    </thead>
                    <body>
                    <tr>
                        <td>1</td>
                        <td>ATC#001</td>
                        <td>Harriet Fisher</td>
                        <td>Period 2</td>
                        <td><span><img src="asset/teacher/Sample Attachment 4.png"  alt="" class="sampleimg" ></span></td>
                    </tr>
                        <tr>
                        <td>2</td>
                        <td>ATC#002</td>
                        <td>Christine Hanson</td>
                        <td>Period 2</td>
                        <td><span><img src="asset/teacher/Sample Attachment 4.png"  alt="" class="sampleimg" ></span></td>
                    </tr>
                        <tr>
                        <td>3</td>
                        <td>ATC#001</td>
                        <td>Jackson Barker</td>
                        <td>Period 2</td>
                        <td><span><img src="asset/teacher/Sample Attachment 4.png"  alt="" class="sampleimg" ></span></td>
                    </tr>

                    </body>
                    </table>
                    </div>
                    </div> 
                    </div>

                    </div>

                    </div>
                    </div>
                    </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
            
        <div class="tab-pane" id="pills4">
             <div class="table_data" >
                <table id="table_id_data" class="table table-striped table-bordered dataTable no-footer">
                <thead>
                    <tr>
                        <th>S.No</th>
                        <th>Test Name</th>
                        <th>Number of questions</th>
                        <th>Total Marks</th>
                        <th>Difficulty</th>
                        <th>Created date</th>
                        <th>Submited Students</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <body>
                <tr>
                    <td>1</td>
                    <td>Unit test -1</td>
                    <td>34 questions</td>
                    <td>100 marks</td>
                    <td><a class="easybtn">Easy</a></td>
                    <td>25 Nov 2022</td>
                    <td>34</td>
                    <td><a class="viewbtn" onclick="unittest()"><span><img src="asset/teacher/view.svg" alt="view" ></span>View</a></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Unit test -2</td>
                    <td>50 questions</td>
                    <td>100 marks</td>
                    <td><a class="mediumbtn">Medium</a></td>
                    <td>3 Nov 2022</td>
                    <td>45</td>
                    <td><a class="viewbtn" onclick="unittest()"><span><img src="asset/teacher/view.svg" alt="view" ></span>View</a></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Unit test -3</td>
                    <td>25 questions</td>
                    <td>100 marks</td>
                    <td><a class="hardbtn">Hard</a></td>
                    <td>27 Dec 2022</td>
                    <td>54</td>
                    <td><a class="viewbtn" onclick="unittest()"><span><img src="asset/teacher/view.svg" alt="view" ></span>View</a></td>
                </tr>
                </body>
            </table>
        </div>
        </div>
            
        <div class="tab-pane" id="pills5">
        <div class="row class_room">
            <div class="col-md-3 techback">
                <div class="bormark">
                <div class="stu_count">
                <img class="total_stu" src="asset/teacher/total_stu.svg" alt="Student" >
                    <div class="count_detail">
                        <p>Total Students</p>
                        <h2>45 students</h2>
                    </div>
                </div>
                <div class="tech_count">
                    <img class="teach_stu" src="asset/teacher/teacher.svg" alt="Student" >
                    <div class="count_detail">
                        <p>Total Teachers </p>
                        <h2>8 teachers</h2>
                    </div>
                </div>
                </div>
            </div>
            <div class="col-md-9 backcolor">
                <p class="teach_color">Teachers :</p>
            <div class="name_detail">
                
                    <div class="teach_name"><h2>1. English</h2><p><span>-</span> Rebecca Martin</p><span><h4>C</h4></span></div>
                    <div class="teach_name"><h2>5. English</h2><p><span>-</span> Rebecca Martin</p></div>
                    <div class="teach_name"><h2>2. Mathematics</h2><p><span>-</span> Jim Morrison</p></div>
                    <div class="teach_name"><h2>6. Mathematics</h2><p><span>-</span> Jim Morrison</p></div>
                    <div class="teach_name"><h2>3. English</h2><p><span>-</span> Rebecca Martin</p></div>
                    <div class="teach_name"><h2>7. English</h2><p><span>-</span> Rebecca Martin</p></div>
                    <div class="teach_name"><h2>4. Mathematics</h2><p><span>-</span> Jim Morrison</p></div>
                    <div class="teach_name"><h2>8. Mathematics</h2><p><span>-</span> Jim Morrison</p></div>
                
            </div>
            </div>
        </div>
            <h2 class="stu_title">Students list</h2>
            <div class="table_data" >
                <table id="student_table" class="table table-striped table-bordered dataTable no-footer">
                <thead>
                    <tr>
                        <th>S.No</th>
                        <th>Student ID</th>
                        <th>Name</th>
                        <th>Gender</th>
                        <th>Date of Birth</th>
                        <th>Contact Number</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <body>
                    <tr>
                        <td>1</td>
                        <td>ATC#001</td>
                        <td>Clifford Powell</td>
                        <td>Male</td>
                        <td>10 Feb 2022</td>
                        <td>(804) 359-7586</td>
                        <td><a class="viewbtn"><span><img src="asset/teacher/view.svg" alt="view" ></span>View</a></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>ATC#002</td>
                        <td>Sadie Nunez</td>
                        <td>Male</td>
                        <td>10 Feb 2022</td>
                        <td>(778) 555-5935</td>
                        <td><a class="viewbtn"><span><img src="asset/teacher/view.svg" alt="view" ></span>View</a></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>ATC#003</td>
                        <td>Michael Grant</td>
                        <td>Male</td>
                        <td>05 Apr 2022</td>
                        <td>(479) 651-4851</td>
                        <td><a class="viewbtn"><span><img src="asset/teacher/view.svg" alt="view" ></span>View</a></td>
                    </tr>
                </body>
            </table>
        </div>
        </div>
            
        <div class="tab-pane" id="pills6">
            <div class="page">
                <div class="table_layout" >
            <div class="timetable">
              <div class="time-interval">
                  <div class="fullcol headcol">
                        <div class="outer_box"><h2>Time Table</h2></div>
                        <div class="inner_box"><h2>Monday</h2></div>
                        <div class="inner_box"><h2>Tuesday</h2></div>
                        <div class="inner_box active"><h2>Wednesday</h2></div>
                        <div class="inner_box"><h2>Thursday</h2></div>
                        <div class="inner_box"><h2>Friday</h2></div>
                  </div>
                  <div class="fullcol">
                        <div class="outer_box"><h1>Periods 1</h1><p>8:00 - 10:00</p></div>
                        <div class="inner_box"><h2>Mathematics</h2><p>Hettie Jones</p></div>
                        <div class="inner_box"><h2>Mathematics</h2><p>Hettie Jones</p></div>
                        <div class="inner_box focus"><h2>English</h2><p>Hettie Jones</p></div>
                        <div class="inner_box"><h2>PT</h2><p>Hettie Jones</p></div>
                        <div class="inner_box"><h2>Science</h2><p>Hettie Jones</p></div>
                  </div>
                  <div class="fullcol">
                        <div class="outer_box"><h1>Periods 2</h1><p>8:00 - 10:00</p></div>
                        <div class="inner_box"><h2>Mathematics</h2><p>Hettie Jones</p></div>
                        <div class="inner_box"><h2>Mathematics</h2><p>Hettie Jones</p></div>
                        <div class="inner_box active"><h2>English</h2><p>Hettie Jones</p></div>
                        <div class="inner_box"><h2>PT</h2><p>Hettie Jones</p></div>
                        <div class="inner_box"><h2>Science</h2><p>Hettie Jones</p></div>
                  </div>
                  <div class="breakcol">
                        <div class="short_box"><h1>Short Break</h1><p>8:00 - 10:00</p></div>
                        <div class="lenth_box"><h2>Short Break</h2></div>
                  </div>
                  <div class="fullcol">
                        <div class="outer_box"><h1>Periods 3</h1><p>8:00 - 10:00</p></div>
                        <div class="inner_box"><h2>Mathematics</h2><p>Hettie Jones</p></div>
                        <div class="inner_box"><h2>Mathematics</h2><p>Hettie Jones</p></div>
                        <div class="inner_box focus"><h2>English</h2><p>Hettie Jones</p></div>
                        <div class="inner_box"><h2>PT</h2><p>Hettie Jones</p></div>
                        <div class="inner_box"><h2>Science</h2><p>Hettie Jones</p></div>
                  </div>
                  <div class="fullcol">
                        <div class="outer_box"><h1>Periods 4</h1><p>8:00 - 10:00</p></div>
                        <div class="inner_box"><h2>Mathematics</h2><p>Hettie Jones</p></div>
                        <div class="inner_box"><h2>Mathematics</h2><p>Hettie Jones</p></div>
                        <div class="inner_box focus"><h2>English</h2><p>Hettie Jones</p></div>
                        <div class="inner_box"><h2>PT</h2><p>Hettie Jones</p></div>
                        <div class="inner_box"><h2>Science</h2><p>Hettie Jones</p></div>
                  </div>
              </div>
            </div>
            </div>
            </div>
        </div>
        </div>
        </div>

        </section>
            
        <section class="personal-content" id="unit_section">
            <div class="split_para">

              <div class="table_form">
              <div class="back-outs"><a onclick="returnpage()" href="#"><span><img src="asset/teacher/backarrow.svg" alt="" class="backbtn"></span></a></div>
                <div class="head_view">
                    <div class="mathclass"><a>My Classes</a> / <a>Class 6 A</a> </div>
                    <div class="main_view">
                    <h2>Unit Test - 1 <span>Easy</span></h2>
                    <p><span><img src="asset/teacher/purple.svg" class="btnsubmit"></span>24/32 students submitted</p>
                    </div>
                    <p>Created On : 11 Mar 22</p>
                    <div class="split_mark">
                        <p>Total Marks : 100</p>
                        <p>Pass Marks : 40</p>
                    </div>
                </div>
                </div>

                 <div class="right_views">
                 <div class="page">
                 <div class="nesttabs">
                 <div class="">
                  <div class="row">
                    <div class="col-md-3">
                        <ul class="nav nav-tabs tabs-left sideways">
                            <li class="active"><a href="#home-v" data-toggle="tab">
                                <div class="descrip">
                                    <h5 class="mb-1">Harriet Fisher</h5>
                                    <p>Submitted on 02 May 2022</p>
                                </div>    
                            </a>
                            </li>
                            <li>
                            <a href="#profile-v" data-toggle="tab">
                                <div class="descrip">
                                    <h5 class="mb-1">Christine Hanson</h5>
                                    <p>Submitted on 17 May 2022</p>
                                </div>
                            </a>
                            </li>
                            <li>
                            <a href="#messages-v" data-toggle="tab"> 
                                <div class="descrip">
                                    <h5 class="mb-1">JackSon Barker</h5>
                                    <p>Submitted on 05 Aug 2022</p>
                                </div>
                            </a>
                            </li>
                            <li>
                            <a href="#settings-v" data-toggle="tab">
                                <div class="descrip">
                                    <h5 class="mb-1">Jacob Owens</h5>
                                    <p>Submitted on 25 Feb 2022</p>
                                </div>
                            </a>
                            </li>
                            </ul>
                        </div>
                        <div class="col-md-9 nesttabscontent">
                            <div class="tab-content" >
                            <div class="tab-pane active" id="home-v" role="tabpanel">
                                <div class="inside">
                                    <h2 class="mb-1 studentname">Harriet Fisher</h2>
                                    <div class="text_field">
                                        <div class="various_field">
                                        <p>Open Ended Marks</p>
                                            <h2>34/40</h2>
                                        </div>
                                        <div class="various_field">
                                        <p>Descriptive Marks</p>
                                            <h2>-</h2>
                                        </div>
                                        <div class="various_field">
                                        <p>Result</p>
                                            <h2>-</h2>
                                        </div>
                                    </div>
                                <div class="asw_mark">
                            <div class="answer_sheet">
                            <h2>Q1.<br/>Culpa dolor voluptate do duis pariatur mollit aute magna pariatur?</h2>
                            <div class="answer_sht">
                            <img src="asset/teacher/test.png" alt="answer">
                            </div>
                            </div>
                                <div class="mark_sheet">
                                    <h3>Marks</h3>
                                    <input class="form-control" value="35" type="text">
                                </div>
                            </div>
                            <div class="asw_mark">
                            <div class="answer_sheet">
                            <h2>Q1.<br/>Culpa dolor voluptate do duis pariatur mollit aute magna pariatur?</h2>
                            <div class="answer_sht">
                            <img src="asset/teacher/test.png" alt="answer">
                            </div>
                            </div>
                                <div class="mark_sheet">
                                    <h3>Marks</h3>
                                    <input class="form-control" value="35" type="text">
                                </div>
                            </div>
                                <div class="asw_mark">
                            <div class="answer_sheet">
                            <h2>Q1.<br/>Culpa dolor voluptate do duis pariatur mollit aute magna pariatur?</h2>
                            <div class="answer_sht">
                            <img src="asset/teacher/test.png" alt="answer">
                            </div>
                            </div>
                                <div class="mark_sheet">
                                    <h3>Marks</h3>
                                    <input class="form-control" value="35" type="text">
                                </div>
                            </div>
                        </div> 
                        </div>
                        <div class="tab-pane fade" id="profile-v" role="tabpanel" >
                            <div class="inside">
                                    <h2 class="mb-1 studentname">Christine Hanson</h2>
                                <div class="text_field">
                                    <div class="various_field">
                                        <p>Open Ended Marks</p>
                                        <h2>34/40</h2>
                                    </div>
                                    <div class="various_field">
                                        <p>Descriptive Marks</p>
                                        <h2>-</h2>
                                    </div>
                                    <div class="various_field">
                                        <p>Result</p>
                                        <h2>-</h2>
                                    </div>
                                </div>
                            <div class="asw_mark">
                            <div class="answer_sheet">
                            <h2>Q1.<br/>Culpa dolor voluptate do duis pariatur mollit aute magna pariatur?</h2>
                            <div class="answer_sht">
                            <img src="asset/teacher/test.png" alt="answer">
                            </div>
                            </div>
                                <div class="mark_sheet">
                                    <h3>Marks</h3>
                                    <input class="form-control" value="35" type="text">
                                </div>
                            </div>
                                <div class="asw_mark">
                            <div class="answer_sheet">
                            <h2>Q1.<br/>Culpa dolor voluptate do duis pariatur mollit aute magna pariatur?</h2>
                            <div class="answer_sht">
                            <img src="asset/teacher/test.png" alt="answer">
                            </div>
                            </div>
                                <div class="mark_sheet">
                                    <h3>Marks</h3>
                                    <input class="form-control" value="35" type="text">
                                </div>
                            </div>
                                <div class="asw_mark">
                            <div class="answer_sheet">
                            <h2>Q1.<br/>Culpa dolor voluptate do duis pariatur mollit aute magna pariatur?</h2>
                            <div class="answer_sht">
                            <img src="asset/teacher/test.png" alt="answer">
                            </div>
                            </div>
                                <div class="mark_sheet">
                                    <h3>Marks</h3>
                                    <input class="form-control" value="35" type="text">
                                </div>
                            </div>
                        </div> 
                        </div>
                        <div class="tab-pane fade" id="messages-v" role="tabpanel">
                            <div class="inside">
                                    <h2 class="mb-1 studentname">JackSon Barker</h2>
                                <div class="text_field">
                                    <div class="various_field">
                                        <p>Open Ended Marks</p>
                                        <h2>34/40</h2>
                                    </div>
                                    <div class="various_field">
                                        <p>Descriptive Marks</p>
                                        <h2>-</h2>
                                    </div>
                                    <div class="various_field">
                                        <p>Result</p>
                                        <h2>-</h2>
                                    </div>
                                </div>
                            <div class="asw_mark">
                            <div class="answer_sheet">
                            <h2>Q1.<br/>Culpa dolor voluptate do duis pariatur mollit aute magna pariatur?</h2>
                            <div class="answer_sht">
                            <img src="asset/teacher/test.png" alt="answer">
                            </div>
                            </div>
                                <div class="mark_sheet">
                                    <h3>Marks</h3>
                                    <input class="form-control" value="35" type="text">
                                </div>
                            </div>
                                <div class="asw_mark">
                            <div class="answer_sheet">
                            <h2>Q1.<br/>Culpa dolor voluptate do duis pariatur mollit aute magna pariatur?</h2>
                            <div class="answer_sht">
                            <img src="asset/teacher/test.png" alt="answer">
                                </div>
                            </div>
                                <div class="mark_sheet">
                                    <h3>Marks</h3>
                                    <input class="form-control" value="35" type="text">
                                </div>
                            </div>
                                <div class="asw_mark">
                                <div class="answer_sheet">
                            <h2>Q1.<br/>Culpa dolor voluptate do duis pariatur mollit aute magna pariatur?</h2>
                            <div class="answer_sht">
                            <img src="asset/teacher/test.png" alt="answer">
                                </div>
                            </div>
                                <div class="mark_sheet">
                                    <h3>Marks</h3>
                                    <input class="form-control" value="35" type="text">
                                </div>
                            </div>
                            </div> 
                            </div>
                            <div class="tab-pane fade" id="settings-v" role="tabpanel">
                            <div class="inside">
                                    <h2 class="mb-1 studentname">Jacob Owens</h2>
                                <div class="text_field">
                                    <div class="various_field">
                                        <p>Open Ended Marks</p>
                                        <h2>34/40</h2>
                                    </div>
                                    <div class="various_field">
                                        <p>Descriptive Marks</p>
                                        <h2>-</h2>
                                    </div>
                                    <div class="various_field">
                                        <p>Result</p>
                                        <h2>-</h2>
                                    </div>
                                </div>
                            <div class="asw_mark">
                            <div class="answer_sheet">
                            <h2>Q1.<br/>Culpa dolor voluptate do duis pariatur mollit aute magna pariatur?</h2>
                            <div class="answer_sht">
                            <img src="asset/teacher/test.png" alt="answer">
                            </div>
                            </div>
                                <div class="mark_sheet">
                                    <h3>Marks</h3>
                                    <input class="form-control" value="35" type="text">
                                </div>
                            </div>
                        </div> 
                        </div>
                        </div>
                    </div>
                </div>
                </div>
                </div>
                </div>
                </div>
            </div>  
        </section>

        


            
        </main> 
        </div>

        <!-- The Modal -->
        <div class="modal" id="comment">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">

              <!-- Modal Header -->
              <div class="modal-header">
                <h4 class="modal-title">Comment</h4>
              </div>

              <!-- Modal body -->
              <div class="modal-body">
                
                  <div class="form-group">
                  <p class="texttitle">Add Comment</p>
                  <textarea class="form-control textarea" placeholder="Text...">Epicurus in liberos atque insitam in gravissimo bello animadversionis metu contineret, saluti prospexit civium, qua intellegebat contineri suam atque haec ratio late patet in oculis quidem se esse appetendum, alterum aspernandum sentiamus alii autem, quibus ego cum memoriter, tum etiam ac ratione voluptatem ut ratione.</textarea>
                  </div>
              </div>

              <!-- Modal footer -->
              <div class="modal-footer">
                <button type="button" class="defaultbtn" data-dismiss="modal">Cancel</button>
                <button type="button" class="updatebtn" data-dismiss="modal">Update</button>
              </div>

            </div>
          </div>
        </div>
            
            <!-- The Modal homework -->
        <div class="modal" id="add_homework">
          <div class="modal-dialog">
            <div class="modal-content">

              <!-- Modal Header -->
              <div class="modal-header">
                <h4 class="modal-title">Add Homework</h4>
              </div>

              <!-- Modal body -->
              <div class="modal-body">
                  <div class="form-group">
                  <p class="texttitle">Tittle</p>
                  <input type="text" class="form-control" placeholder="Build an Maglev Train model">
                  </div>
                  <div class="form-group">
                  <p class="texttitle">Description</p>
                  <textarea class="form-control textarea" placeholder="Text...">Epicurus in liberos atque insitam in gravissimo bello animadversionis metu contineret, saluti prospexit civium, qua intellegebat contineri suam atque haec ratio late patet in oculis quidem se esse appetendum, alterum aspernandum sentiamus alii autem, quibus ego cum memoriter, tum etiam ac ratione voluptatem ut ratione.</textarea>
                  </div>
                  
                  <div class="form-group">
                  <p class="texttitle">Due date</p>
                  <input type="date" class="form-control" placeholder="dd-mm-yyyy">
                  </div>
                  
                  
              </div>

              <!-- Modal footer -->
              <div class="modal-footer">
                <button type="button" class="defaultbtn" data-dismiss="modal">Cancel</button>
                <button type="button" class="updatebtn" data-dismiss="modal">Add Homework</button>
              </div>

            </div>
          </div>
        </div>
            
            <!-- The Modal Add Assignment -->
        <div class="modal" id="add_assignment">
          <div class="modal-dialog">
            <div class="modal-content">

              <!-- Modal Header -->
              <div class="modal-header">
                <h4 class="modal-title">Add Assignment</h4>
              </div>

              <!-- Modal body -->
              <div class="modal-body">
                  <div class="form-group">
                  <p class="texttitle">Title</p>
                  <input type="text" class="form-control" placeholder="Build an Maglev Train model">
                  </div>
                  <div class="form-group">
                  <p class="texttitle">Description</p>
                  <textarea class="form-control textarea" placeholder="Text...">Epicurus in liberos atque insitam in gravissimo bello animadversionis metu contineret, saluti prospexit civium, qua intellegebat contineri suam atque haec ratio late patet in oculis quidem se esse appetendum, alterum aspernandum sentiamus alii autem, quibus ego cum memoriter, tum etiam ac ratione voluptatem ut ratione.</textarea>
                  </div>
                  
                  <div class="form-group">
                  <p class="texttitle">Due date</p>
                  <input type="date" class="form-control" value="09 May 2022saa  ">
                  </div>
                  
                  
              </div>

              <!-- Modal footer -->
              <div class="modal-footer">
                <button type="button" class="defaultbtn" data-dismiss="modal">Cancel</button>
                <button type="button" class="updatebtn" data-dismiss="modal">Add Homework</button>
              </div>

            </div>
          </div>
        </div>
            
            
            
            
            
            
        <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.js"></script>
        <script src="js/sidebar.js"></script>
        <script>

        const body = document.querySelector('body'),
        sidebar = body.querySelector('nav'),
        toggle = body.querySelector(".toggle");
        let classToken = "<?php echo $_REQUEST['classToken'] ?>";
        console.log(classToken);


        toggle.addEventListener("click", () => {
        sidebar.classList.toggle("close");
        })

            
            
        $(document).ready( function () {

         $('#table_id').DataTable({
            "bPaginate": true,                                                                                      
            "bLengthChange": false,
            "bFilter": false,
            "bInfo": false,
            "bAutoWidth": true ,
            language: {
            'paginate': {
            'previous': '<span class="prev-icon"></span>',
            'next': '<span class="next-icon"></span>'
            }
            }
        });


        $('#table_id_data').DataTable({
            "bPaginate": true,
            "bLengthChange": false,
            "bFilter": false,
            "bInfo": false,
            "bAutoWidth": true ,
            language: {
            'paginate': {
            'previous': '<span class="prev-icon"></span>',
            'next': '<span class="next-icon"></span>'
            }
            }
        });
        $('#table_id1').DataTable({
            "bPaginate": true,
            "bLengthChange": false,
            "bFilter": false,
            "bInfo": false,
            "bAutoWidth": true ,
            language: {
            'paginate': {
            'previous': '<span class="prev-icon"></span>',
            'next': '<span class="next-icon"></span>'
            }
            }
        });
        $('#table_id22').DataTable({
            "bPaginate": true,
            "bLengthChange": false,
            "bFilter": false,
            "bInfo": false,
            "bAutoWidth": true ,
            language: {
            'paginate': {
            'previous': '<span class="prev-icon"></span>',
            'next': '<span class="next-icon"></span>'
            }
            }
        });
        $('#table_id33').DataTable({
            "bPaginate": true,
            "bLengthChange": false,
            "bFilter": false,
            "bInfo": false,
            "bAutoWidth": true ,
            language: {
            'paginate': {
            'previous': '<span class="prev-icon"></span>',
            'next': '<span class="next-icon"></span>'
            }
            }
        });
        $('#table_id44').DataTable({
            "bPaginate": true,
            "bLengthChange": false,
            "bFilter": false,
            "bInfo": false,
            "bAutoWidth": true ,
            language: {
            'paginate': {
            'previous': '<span class="prev-icon"></span>',
            'next': '<span class="next-icon"></span>'
            }
            }
        });
        $('#student_table').DataTable({
            "bPaginate": true,
            "bLengthChange": false,
            "bFilter": false,
            "bInfo": false,
            "bAutoWidth": true ,
            language: {
            'paginate': {
            'previous': '<span class="prev-icon"></span>',
            'next': '<span class="next-icon"></span>'
            }
            }
        });
            
            
        });

        
        function unittest() {
            $("#main_section").hide();
            $("#unit_section").show();
        }
        function returnpage() {
            $("#main_section").show();
            $("#unit_section").hide();
        }

        $(document).ready( function () {

            // Animate loader off screen
            $(".se-pre-con").show();
            $(".se-pre-con").fadeOut(2000);

            $(".mani").show();
            $(".myclass").addClass('showactive');
        });
           
        </script>
        </body>

        </html>