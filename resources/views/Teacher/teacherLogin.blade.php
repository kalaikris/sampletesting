<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Hey Campus Login</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="{{ asset('Teacher/css/main.css') }}">
        <link rel="stylesheet" href="{{ asset('Teacher/css/login.css') }}">
    </head>
    <body>
        <section id="">
            <div class="mani">
                <div class="side_menu center_align">
                    <div class="main_content">
                        <div class="sub_text">
                            <h1>Time Saving, <br />Simple-To-Use</h1>
                            <p>and performance management<br /> platform for your schools !</p>
                        </div>
                    </div>
                    <!-- <img src="asset/rocket.svg" class="rocket"> -->
                    <img src="{{ asset('Teacher/asset/Side banner imager.svg') }}" class="side_menu_img">
                    <img src="{{ asset('Teacher/asset/bg.svg') }}" class="bottom_wave">
                </div>
                <div class="mani_menu">
                    <header id="main-dash-header" class="dash-header opacity">
                        <div class="back-drop hidden"></div>
                        <div class="nav-menu hidden">
                            <ul class="nav-links">
                                <li id="profile">
                                    <div class="dropdown-logout">
                                        <a class="logout-toggle" href="#" role="button" id="logoutdropdownMenuLink" aria-expanded="false">
                                            <span id="profile-pic">
                                                <img src="{{ asset('Teacher/asset/profile.png') }}" alt="">
                                            </span>
                                            <span class="profile-name">
                                                <p>Wellcome</p>Admin
                                            </span>
                                        </a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Logout</a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </header>
                    <div class="personal-content">
                        <div class="main_logo">
                            <img src="{{ asset('Teacher/asset/logo/Logo@2x.png') }}" alt="logo">
                            <p>A 360o suite to manage your school and enhance learning experience for your students.</p>
                        </div>
                        <form class="box_titles">
                            <div class="contact_title">
                                <h2>Login Now</h2>
                                <p>To access your school management, enter your user-id and password.</p>
                            </div>
                            <div class="right_contant">
                                <div class="form-group">
                                    <label>User ID</label>
                                    <input type="text" name="" class="form-control text_cont" id="teacher_id" placeholder="Teacher ID">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <div class="input-group" id="show_hide_password">
                                        <input type="password" name="" class="form-control text_cont" id="teacher_password" placeholder="Password">
                                        <div class="input-group-addon">
                                            <a href=""><i class="fa fa-eye-slash" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="forgot_para"><a href="teacher_pass_recover">Forgot Password?</a></div>
                            </div>
                        </form>
                        <button class="login_btn" datevalue=""  onclick="loginclass()" >Login</button>
                    </div>
                </div>
            </div>
        </section>
        <script src="{{ asset('Teacher/js/jquery.min.js') }}"></script>
        <script src="{{ asset('Teacher/js/fontawesome.js') }}"></script>
        <script src="{{ asset('Teacher/js/sweetalert.min.js') }}" ></script>
        <script> 
             let teacherToken = localStorage.getItem('teacherToken');
            $(document).ready(function() {
                if(teacherToken != '' && teacherToken != undefined){
                window.location.href = "myclasses";
                }
                $("#show_hide_password a").on('click', function(event) {
                    event.preventDefault();
                    if ($('#show_hide_password input').attr("type") == "text") {
                        $('#show_hide_password input').attr('type', 'password');
                        $('#show_hide_password i').addClass("fa-eye-slash");
                        $('#show_hide_password i').removeClass("fa-eye");
                    } else if ($('#show_hide_password input').attr("type") == "password") {
                        $('#show_hide_password input').attr('type', 'text');
                        $('#show_hide_password i').removeClass("fa-eye-slash");
                        $('#show_hide_password i').addClass("fa-eye");
                    }
                });
            });
            function loginclass() {

                let teacher_id = $('#teacher_id').val();
                let password = $('#teacher_password').val();
                if(teacher_id == '' ){
                    swal("Teacher Id is blank");

                }else if(password == ''){
                    swal("Password is blank")

                }else{
                
                        let datas = {
                                        "teacher_id": teacher_id,
                                        "password": password
                                    };
                        $.ajax({
                            dataType: "JSON",
                            type: "POST",
                            url: "{{  url('api/teacher/login') }}",
                            data: datas
                        }).done(function(data1) {
                            console.log(data1);
                            localStorage.setItem('teacherToken',data1.data.token);
                            window.location.href = "myclasses";
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