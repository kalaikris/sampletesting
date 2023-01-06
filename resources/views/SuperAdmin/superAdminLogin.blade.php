<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hey Campus.AI</title>
    <link rel="stylesheet" href="{{ asset('SuperAdmin/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('SuperAdmin/css/common.css') }}">
    <link rel="stylesheet" href="{{ asset('SuperAdmin/css/login.css') }}">
</head>
<style>
</style>
<body>
    <section id=""> 
        <div class="mani">
            <div class="side_menu center_align">
                <div class="main_content">
                    <div class="sub_text">
                        <h1>Time Saving, <br/>Simple-To-Use</h1>
                        <p>And performance management<br/> platform for your schools !</p>
                    </div>
                </div>
                <img src="{{ asset('SuperAdmin/asset/rocket.svg') }}" class="rocket">
                <img src="{{ asset('SuperAdmin/asset/bg.svg') }}" class="bottom_wave">
            </div>
            <div class="mani_menu">
            <header id="main-dash-header" class="dash-header ">
              <div class="back-drop hidden"></div>
              <div class="nav-menu hidden">
                <ul class="nav-links ">
                  <li id="profile ">
                    <div class="dropdown-logout">
                      <a class="logout-toggle" href="#" role="button" id="logoutdropdownMenuLink" aria-expanded="false">
                        <span id="profile-pic">
                          <img src="{{ asset('SuperAdmin/asset/profile.png') }}" alt="">
                        </span>
                        <span class="profile-name">
                            <p>Welcome</p>
                            <h2>Jerry Higgins</h2>
                          </span>
                      </a>
                      <div class="dropdown-menu">
                        <a class="dropdown-item" href="">Logout</a>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </header>
                <div class="personal-content">
                    <div class="main_logo">
                        <img src="{{ asset('SuperAdmin/asset/logo.png') }}"  alt="logo" >
                         <p>To access your school management, enter your user-id and password.</p>
                    </div>
                    <form class="box_titles">
                        <div class="contact_title">
                            <h2>Login Now</h2>
                            <p>To access your account, enter your user-id and password.</p>
                        </div>
                        <div class="right_contant">
                            <div class="form-group">
                                <label>User ID</label>
                                <input type="text" name="" class="form-control" id="user_id" placeholder="HCADMIN001">
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <div class="input-group" id="show_hide_password">
                                <input type="password" name="" class="form-control" id="user_password" placeholder="Password">
                                    <div class="input-group-addon">
                                        <a href=""><img src="{{ asset('SuperAdmin/asset/cross.svg') }}" class="eyefa-slash "></a>
                                        <a href=""><img src="{{ asset('SuperAdmin/asset/eye.svg') }}" class="eyefa " ></a>
                                    </div>
                              </div>
                            </div>
                            <div class="forgot_para"><a href="pass_recover">Forgot Password?</a></div>
                        </div>
                    </form>
                    <button class="login_btn" onclick="login_index()">Login</button>
                </div>
            </div>
        </div>
    </section>
    <script src="{{ asset('SuperAdmin/js/jquery.min.js') }}"></script>
    <script src="{{ asset('SuperAdmin/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('SuperAdmin/js/fontawesome.js') }}"></script>
    <script src="{{ asset('SuperAdmin/js/sweetalert.min.js') }}" ></script>
    <script>
        let superAdminToken = localStorage.getItem('superAdmintoken');
       $(document).ready(function() {
            if(superAdminToken != '' && superAdminToken != undefined){
                window.location.href = "superadmin_home";
            }
            $("#show_hide_password a").on('click', function(event) {
            event.preventDefault();
            if($('#show_hide_password input').attr("type") == "text"){
                $('#show_hide_password input').attr('type', 'password');
            
                $('.eyefa-slash').show();
                $('.eyefa').hide();

                // $('#show_hide_password i').addClass( "fa-eye-slash" );
                // $('#show_hide_password i').removeClass( "fa-eye" );
            }else if($('#show_hide_password input').attr("type") == "password"){
                $('#show_hide_password input').attr('type', 'text');
                $('.eyefa').show();
                $('.eyefa-slash').hide();
                // $('#show_hide_password i').removeClass( "fa-eye-slash" );
                // $('#show_hide_password i').addClass( "fa-eye" );
            }
            });
        });  
         function login_index() {
            let userId = $('#user_id').val();
            let password = $('#user_password').val();
            if(userId == '' ){
                swal("User Id is blank");

            }else if(password == ''){
                swal("Password is blank")

            }else{
             
                    let datas = {
                                    "user_id": userId,
                                    "password": password
                                };
                    //let json1 = JSON.stringify(datas);
                    $.ajax({
                        dataType: "JSON",
                        type: "POST",
                        url: "{{  url('api/super-admin/login') }}",
                        data: datas
                    }).done(function(data1) {
                        console.log(data1);
                        localStorage.setItem('superAdmintoken',data1.data.token);
                        window.location.href = "superadmin_home";
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
         }   
    </script>
</body>
</html>