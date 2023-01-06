<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hey Campus.AI</title>
    <link rel="stylesheet" href="{{ asset('SuperAdmin/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('SuperAdmin/css/jquery.dataTables.css') }}">
    <link rel="stylesheet" href="{{ asset('SuperAdmin/css/common.css') }}">
    <link rel="stylesheet" href="{{ asset('SuperAdmin/css/style.css') }}">
</head>
<style>
    
</style>

<body>
<div class="se-pre-con" ></div>
    
        <div class="main">
            <div class="side_menu">
                <div class="head-logo"><a href=""><img class="logo" src="{{ asset('SuperAdmin/asset/logo_white.png') }}" alt="logo"></a></div>
                 <!-- sidebar -->
                <input type="checkbox" id="sidebar-toggle">
                <div class="sidebar">
                    <div class="sidebar-header">
                    <label for="sidebar-toggle" class="side-togglebar" >
                        <img src="{{ asset('SuperAdmin/asset/next.svg') }}" alt="" />
                    </label>
                    </div>

                    <div class="sidebar-menu">
                      <ul class="toggle_sidebar">
                        <li class="project-menu">
                        <a class="greenline sidebar-link" href="superadmin_home">
                          <img src="{{ asset('SuperAdmin/asset/super_admin/Invite_school.svg') }}" class="side-icon" alt="side icon"/>
                          <span>School Management</span>
                        </a>
                        </li>
                      </ul>
                    </div>
                </div>
                <img src="{{ asset('SuperAdmin/asset/bg.svg') }}" class="bottom_wave">
            </div>
            <div class="main-contents">
                <!-- Header -->
            <x-superadmin.headerComponent/>
            <section class="personal-content" id="service">
              <h2>School Management</h2>
              <div class="tap_method">
                  <button id="removebtn_school" class="tapactivebtn" onclick="invit_school_page()">Invited Schools</button>
                  <button id="addbtn_school" class="tapbtn"  onclick="invit_Onboarded()">Onboarded Schools</button>
              </div>
              </section>
            
            <section class="personal-content" id="schoolpage">
               
                <div class="table_form">
                <div class="inv_from">
                <h3>Invited Schools</h3>
                <p class="invitedSchoolsTotal">Total Invited School List - 346</p>
                </div>
                <div class="listinvite">
                    <div class="form-group">
                        <input class="form-control" type="text" placeholder="Search">
                    </div>
                    <div class="form-group">
                        <button class="invitebtn" data-toggle="modal" data-target="#invit_modal"><span><img src="{{ asset('SuperAdmin/asset/super_admin/Invite_school.svg') }}" alt="" class="inviteschool"></span>Invite School</button>
                    </div>
                </div>
                </div>
                
                <div class="table_data">
                    <table id="invite_table" class="table table-striped table-bordered dataTable no-footer school_tables">
                        <thead>
                        <tr>
                        <th>S.No</th>
                        <th>School Name</th>
                        <th>Email Address</th>
                        <th>Invited Date</th>
                        <th>Status</th>
                        <th>Invitation Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1</td>
                            <td>Alpha School</td>
                            <td>muekigi@wazvejtow.net</td>
                            <td>28 Jan 2022</td>
                            <td><p class="onboard_view">Onboarded</p></td>
                            <td><a>-</a></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>ORCHIDS The International School</td>
                            <td>huceida@kumegge.com</td>
                            <td>04 Aug 2022</td>
                            <td><p class="pending_view">Pending</p></td>
                            <td><a class="rein">Resend Invite</a></td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Chettinad Vidyashram</td>
                            <td>huceida@kumegge.com</td>
                            <td>04 Aug 2022</td>
                            <td><p class="pending_view">Pending</p></td>
                            <td><a class="sendin"><span><img alt="invitesend" src="{{ asset('SuperAdmin/asset/super_admin/Invite_send.svg') }}" class="invitesend" ></span>Invite Send</a></td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>St. Britto’s Academy</td>
                            <td>huceida@kumegge.com</td>
                            <td>04 Aug 2022</td>
                            <td><p class="onboard_view">Onboarded</p></td>
                            <td><a class="sendin"><span><img alt="invitesend" src="{{ asset('SuperAdmin/asset/super_admin/Invite_send.svg') }}" class="invitesend" ></span>Invite Send</a></td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Sishya School</td>
                            <td>huceida@kumegge.com</td>
                            <td>04 Aug 2022</td>
                            <td><p class="onboard_view">Onboarded</p></td>
                            <td><a class="rein">Resend Invite</a></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </section>


            <section class="personal-content" id="onboardpage" style="display:none;" >
                <div class="table_form">
                <div class="inv_from">
                <h3>Onboarded Schools</h3>
                <p class="onboardedSchoolsTotal">Total Onboarded School List - 3475</p>
                </div>
                <div class="listinvite">
                    <div class="form-group">
                        <input class="form-control" type="text" placeholder="Search">
                    </div>
                </div>
                </div>
                
                <div class="table_data">
                    <table id="onboarded_table" class="table table-striped table-bordered dataTable no-footer downtable school_tables">
                        <thead>
                        <tr>
                            <th>S.No</th>
                            <th>School Logo</th>
                            <th>School Name</th>
                            <th>Syllabus</th>
                            <th>Location</th>
                            <th>Contact Person</th>
                            <th>Contact Number</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            
                        <tr>
                            <td>1</td>
                            <td><span><img src="{{ asset('SuperAdmin/asset/super_admin/School1.png') }}" alt="" class="school_logo"></span></td>
                            <td>Alpha School</td>
                            <td>IGCSE</td>
                            <td>Petmucit</td>
                            <td>Leo Rice</td>
                            <td>(331) 380-6323</td>
                            <td><a href="#" onclick="viewschool()" class="view_option"><img alt="" src="{{ asset('SuperAdmin/asset/super_admin/view_eye.svg') }}" class="viewsopt"><span>View</span></a></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td><span><img src="{{ asset('SuperAdmin/asset/super_admin/School2.png') }}" alt="" class="school_logo"></span></td>
                            <td>ORCHIDS The International School</td>
                            <td>IGCSE</td>
                            <td>Petmucit</td>
                            <td>Leo Rice</td>
                            <td>(331) 380-6323</td>
                            <td><a href="#" class="view_option"><img alt="" src="{{ asset('SuperAdmin/asset/super_admin/view_eye.svg') }}" class="viewsopt"><span>View</span></a></td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td><span><img src="{{ asset('SuperAdmin/asset/super_admin/School3.png') }}" alt="" class="school_logo"></span></td>
                            <td>Chettinad Vidyashram</td>
                            <td>IGCSE</td>
                            <td>Petmucit</td>
                            <td>Leo Rice</td>
                            <td>(331) 380-6323</td>
                            <td><a href="#" class="view_option"><img alt="" src="{{ asset('SuperAdmin/asset/super_admin/view_eye.svg') }}" class="viewsopt"><span>View</span></a></td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td><span><img src="{{ asset('SuperAdmin/asset/super_admin/School4.png') }}" alt="" class="school_logo"></span></td>
                            <td>St. Britto’s Academy</td>
                            <td>IGCSE</td>
                            <td>Petmucit</td>
                            <td>Leo Rice</td>
                            <td>(331) 380-6323</td>
                            <td><a href="#" class="view_option"><img alt="" src="{{ asset('SuperAdmin/asset/super_admin/view_eye.svg') }}" class="viewsopt"><span>View</span></a></td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td><span><img src="{{ asset('SuperAdmin/asset/super_admin/School5.png') }}" alt="" class="school_logo"></span></td>
                            <td>Sishya School</td>
                            <td>IGCSE</td>
                            <td>Petmucit</td>
                            <td>Leo Rice</td>
                            <td>(331) 380-6323</td>
                            <td><a href="#" class="view_option"><img alt="" src="{{ asset('SuperAdmin/asset/super_admin/view_eye.svg') }}" class="viewsopt"><span>View</span></a></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </section>



            <section class="personal-content" id="school_view" style="display:none;">
              <p class="pre_para">School Management / Alpha School</p>
              <h2 class="pre_head"><span><a href="#" onclick="onboard_page()"><img src="{{ asset('SuperAdmin/asset/back.svg') }}" alt="" class="back_tab"></a></span>Alpha School</h2>
              <div class="view_border">
              <div class="row">
              <div class="school_label">
                  <div class="school_type">
                      <div class="award stu_event"><img src="{{ asset('SuperAdmin/asset/super_admin/total_students.svg') }}" alt="school-admin" ></div>
                      <div class="detail_list">
                      <p>Total Students</p>
                          <h2><span>8945</span> students</h2>
                      </div>
                  </div>
                  <div class="school_type">
                      <div class="award sch_event"><img src="{{ asset('SuperAdmin/asset/super_admin/total_classes.svg') }}" alt="school-admin" ></div>
                      <div class="detail_list">
                      <p>Total Classes </p>
                          <h2><span>245</span> classes</h2>
                      </div>
                  </div>
                  <div class="school_type">
                      <div class="award teac_event"><img src="{{ asset('SuperAdmin/asset/super_admin/total_teachers.svg') }}" alt="school-admin" ></div>
                      <div class="detail_list">
                      <p>Total Teachers</p>
                          <h2><span>345</span> teachers</h2>
                      </div>
                  </div>
                  <div class="school_type">
                      <div class="award par_event"><img src="{{ asset('SuperAdmin/asset/super_admin/total_parents.svg') }}" alt="school-admin" ></div>
                      <div class="detail_list">
                      <p>Total Parents </p>
                          <h2><span>8747</span> parents</h2>
                      </div>
                  </div>
              </div>
              </div>
              <div class="row">
              <div class="logo_school"> 
                  <div class="alpha">
                      <img alt="" src="{{ asset('SuperAdmin/asset/super_admin/School.png') }}">
                  </div>
                  <div class="alpha_view">
                  <div class="alpha_school">
                      <h2>Alpha School</h2>
                      <a><span><img alt="" src="{{ asset('SuperAdmin/asset/super_admin/edit.svg') }}" ></span>Block School</a>
                  </div>
                      <div class="opposite">
                          <h6>Syllabus <span>-</span></h6>
                          <p>CBSE</p>
                      </div>
                      <div class="opposite">
                          <h6>Location <span>-</span></h6>
                          <p>Chennai</p>
                      </div>
                      <div class="opposite">
                          <h6>Contact Person <span>-</span></h6>
                          <p>(880) 652-5737</p>
                      </div>
                      <div class="opposite">
                          <h6>Website <span>-</span></h6>
                          <p><a href="www.alphaschools.com">www.alphaschools.com</a></p>
                      </div>
                  </div>
                  
                  
              </div>  
              </div>
              </div>
            </section>





            </div>
        </div>
    
        
     
      <!-- Modal -->
  <div class="modal fade" id="invit_modal" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content space_adj">
       <div class="modal-header modify_center">
          <h4 class="modal-title">Invite School</h4>
      </div>
        <div class="modal-body">
            <div class="form-group">
                <label>School Name</label>
                <input type="text" class="form-control" id="invite_schoolname" placeholder="Alpha School">
            </div>
             <div class="form-group">
                <label>Email Address</label>
                <input type="text" class="form-control" id="invite_schoolemail" placeholder="school@alpha.com ">
            </div>
        </div>
        <div class="modal-footer no_bod">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
          <button class="btn_submit" data-dismiss="modal" id="invite-send-btn">Send Now</button>
        </div>
      </div>
    </div>
  </div>
  
    
    
    
    <script src="{{ asset('SuperAdmin/js/jquery.min.js') }}"></script>
    <script src="{{ asset('SuperAdmin/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" charset="utf8"  src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.js"></script>
    <script src="{{ asset('SuperAdmin/js/fontawesome.js') }}"></script>
    <script src="{{ asset('SuperAdmin/js/sweetalert.min.js') }}" ></script>
    <x-superadmin.functions/>
    <script>
            function invit_school_page() {
                // window.location.href="school.html";
                $("#schoolpage").show();
                $("#onboardpage").hide();
                $("#school_view").hide();
                $("#removebtn_school").css({"background-color": "#f8477b", "border": "1px solid #f8477b", "color": "#fff"});
                $("#addbtn_school").css({"border":"1px solid #ececec", "background":"#ececec", "color":"#000"});
            }
            function invit_Onboarded() {
              $("#schoolpage").hide();
                $("#onboardpage").show();
                $("#school_view").hide();
                $("#addbtn_school").css({"background-color": "#f8477b", "border": "1px solid #f8477b", "color": "#fff"});
                $("#removebtn_school").css({"border":"1px solid #ececec", "background":"#ececec", "color":"#000"});
            }
            function onboard_page() {
                $("#schoolpage").hide(); 
                $("#school_view").hide();
                $("#onboardpage").show();
                $("#service").show();
            }
            function viewschool() {
              $("#schoolpage").hide();
              $("#onboardpage").hide();
              $("#service").hide();
              $("#school_view").show();
            }

        
        $(document).ready( function () {
             $('.school_tables').DataTable({
                //                "scrollX": true,
                                "bPaginate": true,
                                "bLengthChange": false,
                                "bFilter": false,
                                "bInfo": false,
                                "bAutoWidth": true ,
                                language: {
                                    "paginate": {
                                        'previous': '<span class="prev-icon"></span>',
                                        'next': '<span class="next-icon"></span>'
                                    }
                                }
                            });
        });

        
        
    $(window).load(function() {
            // Animate loader off screen
            $(".se-pre-con").show();
          $(".se-pre-con").fadeOut(2000);
    });
           
        
    </script>
    <script>

        $(document).ready( function() {
            fetchinvitedSchools();
            fetchonboardedSchools();
        })

        function sendInvite(name,email_id){
                    let datas = {
                                    "name": name,
                                    "email_id": email_id
                                };
                    $.ajax({
                        headers: {
                        Authorization: "Bearer " + superAdminToken,
                        },
                        dataType: "JSON",
                        type: "POST",
                        url: "{{  url('api/super-admin/invite-school') }}",
                        data: datas
                    }).done(function(data1) {
                        console.log(data1);
                        swal({
                                    title:'Success',
                                    text:data1.message,
                                    icon:'success',

                                });
                    }).fail(function(httpObj, textStatus){
                        console.log(httpObj);
                        console.log(textStatus);
                        swal({
                                    title:httpObj.responseJSON.status,
                                    text:httpObj.responseJSON.message,
                                    icon:textStatus,

                                });
                    })

        }

        function isEmail(email) {
                    let mailFormat = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
                    return mailFormat.test(email);
        }

        // invite first time
        $('body').on('click','#invite-send-btn',function(){
            let schoolName = $('#invite_schoolname').val();
            let schoolEmail = $('#invite_schoolemail').val();
            if(schoolName == '' ){
                swal("School Name cannot be blank");

            }else if(schoolEmail == '' || !isEmail(schoolEmail)){
                swal("Enter Valid Email")

            }else{
                sendInvite(schoolName,schoolEmail);
            }
        });

        //Invited School List
        function fetchinvitedSchools(){
                    
                    $.ajax({
                        headers: {
                        Authorization: "Bearer " + superAdminToken,
                        },
                        dataType: "JSON",
                        type: "GET",
                        url: "{{  url('api/super-admin/invited-schools') }}",

                    }).done(function(data1) {
                        console.log(data1);
                       let invitedSchoolArray = data1.data;
                        let schoolList  = '';
                        $('.invitedSchoolsTotal').text(`Total Invited School List - ${invitedSchoolArray.length}`)
                       invitedSchoolArray.forEach((list,index) => {
                        let status = '';
                        let action = '';
                        if(list.status == "Onboarded"){
                            action = `<a class="sendin"><span><img alt="invitesend" src="{{ asset('SuperAdmin/asset/super_admin/Invite_send.svg') }}" class="invitesend" ></span>Invite Accepted</a>`;
                            status = `<p class="onboard_view">Onboarded</p>`;
                        }else{
                            
                            status = `<p class="pending_view">Pending</p>`;
                            action = `<a class="rein" onclick="sendInvite('${list.name}','${list.email_id}')">Resend Invite</a>`;
                        }
                        schoolList += `<tr>
                                            <td>${index + 1}</td>
                                            <td>${list.name}</td>
                                            <td>${list.email_id}</td>
                                            <td>${list.invited_date}</td>
                                            <td>${status}</td>
                                            <td>${action}</td>
                                    </tr>`
                       });
                       $('#invite_table tbody').html(schoolList);
                    }).fail(function(httpObj, textStatus){
                        console.log(httpObj);
                        console.log(textStatus);
                        swal({
                                    title:httpObj.responseJSON.status,
                                    text:httpObj.responseJSON.message,
                                    icon:textStatus,

                                });
                    })
        }

        //Onboarded Schools
        function fetchonboardedSchools(){
            $.ajax({
                        headers: {
                        Authorization: "Bearer " + superAdminToken,
                        },
                        dataType: "JSON",
                        type: "GET",
                        url: "{{  url('api/super-admin/onboarded-schools') }}",

                    }).done(function(data1) {

                        let onboardedSchoolsArray = data1.data;
                        let schoolList  = '';
                        $('.onboardedSchoolsTotal').text(`Total Onboarded School List - ${onboardedSchoolsArray.length}`)
                       onboardedSchoolsArray.forEach((list,index) => {
                        let imageSrc;
                        if(list.logo == ''){
                            imageSrc = "{{ asset('SuperAdmin/asset/super_admin/School1.png') }}";
                        }else{
                            imageSrc = list.logo;
                        }
                        
                        schoolList += `<tr>
                                            <td>${index + 1}</td>
                                            <td><span><img src="${imageSrc}" alt="" class="school_logo"></span></td>
                                            <td>${list.syllabus}</td>
                                            <td>${list.syllabus}</td>
                                            <td>${list.location}</td>
                                            <td>${list.contact_person}</td>
                                            <td>${list.contact_number}</td>
                                            <td><a href="#" class="view_option"><img alt="" src="{{ asset('SuperAdmin/asset/super_admin/view_eye.svg') }}" class="viewsopt"><span>View</span></a></td>
                                        </tr>`
                       });
                       $('#onboarded_table tbody').html(schoolList);

                    }).fail(function(httpObj, textStatus){
                        swal({
                                    title:httpObj.responseJSON.status,
                                    text:httpObj.responseJSON.message,
                                    icon:textStatus,

                                });
                    })
        }

        
    </script>
</body>

</html>