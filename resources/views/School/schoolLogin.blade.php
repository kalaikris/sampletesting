<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Hey Campus Login</title>
     <link rel="icon" href="{{ asset('School/asset/logo/top-iocn.png') }}"  />
	<link rel="stylesheet" href="{{ asset('School/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('School/css/main.css') }}">
	<link rel="stylesheet" href="{{ asset('School/css/login.css') }}">
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
                <img src="{{ asset('School/asset/Side banner imager.svg') }}" class="side_menu_img">
                <img src="{{ asset('School/asset/bg.svg') }}" class="bottom_wave">
            </div>
            <div class="mani_menu">
               <header class="nav_cont opacity">
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
                <div class="personal-content">
                    <div class="main_logo">
                        <img src="{{ asset('School/asset/logo/Logo@2x.png') }}" alt="logo">
                        <p>Digital Learning Simplified</p>
                    </div>
                    <form class="box_titles">
                        <div class="contact_title">
                            <h2>Login Now</h2>
                            <p>To access your school management, enter your user-id and password.</p>
                        </div>
                        <div class="right_contant">
                            <div class="form-group">
                                <label>User ID</label>
                                <input type="text" name="" class="form-control text_cont userID" placeholder="Alpha School Admin">
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <div class="input-group" id="show_hide_password">
                                    <input type="password" name="" class="form-control text_cont password" placeholder="Enter password...">
                                    <div class="input-group-addon">
                                        <a href=""><i class="fa fa-eye-slash" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="forgot_para"><a href="forgot">Forgot Password?</a></div>
                            <a><button type="button" class="login_btn" datevalue="">Login</button></a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <script src="{{ asset('School/js/jquery.min.js') }}" ></script>
    <script src="{{ asset('School/js/sweetalert.min.js') }}" ></script>
    <script src="{{ asset('School/js/fontawesome.js') }}" ></script>
    <script>
        //login
        $(".login_btn").click(function(){
            let userId = $(".userID").val();
            let password = $(".password").val();
            var data ={
                'school_id':userId,
                'password':password
            }
            if (userId != "" && password != "") {
                var request = $.ajax({
                    type: "POST",
                    url: "{{  url('api/school/login') }}",
                    data: data,
                    dataType : "json",
                    timeout : 5000
                });
                request.done(function(data) {
                    localStorage.setItem("BearerTokenSchool", data.data.token);
                    window.location.href="onboarding";
                });
                request.fail(function(httpObj, textStatus) {
                    swal({
                        title: httpObj.responseJSON.status,
                        text: httpObj.responseJSON.message,
                        icon: textStatus,
                        button: "OK",
                    });
                });
            } else {
                $(".error").remove();
                if (userId == "") {
                    $(".userID").parent().append(`<span class="error">* Enter UserId</span>`);
                } 
                if (password == "") {
                    $(".password").parent().after(`<span class="error">* Enter password</span>`);
                }
            }
            
        })
        $(document).ready(function() {
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

    </script>
</body>
</html>