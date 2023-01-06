<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Hay Campus</title>
        <link rel="stylesheet" href="{{ asset('Teacher/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('Teacher/css/main.css') }}">
        <link rel="stylesheet" href="{{ asset('Teacher/css/common.css') }}">
        <link rel="stylesheet" href="{{ asset('Teacher/css/login.css') }}"> 
    </head>
    <style>
    </style>

    <body>
        <section id="">
            <div class="mani">
                <div class="side_menu center_align">
                    <div class="main_content">
                        <div class="sub_text">
                            <h1>Time Saving, <br />Simple-To-Use</h1>
                            <p>And performance management<br /> platform for your schools !</p>
                        </div>
                    </div>
                    <!-- <img src="asset/rocket.svg" class="rocket"> -->
                    <img src="{{ asset('Teacher/asset/Side_banner_imager.svg') }}" class="side_menu_img">
                    <img src="{{ asset('Teacher/asset/bg.svg') }}" class="bottom_wave">
                </div>
                <div class="mani_menu">
                    <header id="main-dash-header" class="dash-header">
                        <div class="back-drop hidden"></div>
                        <div class="nav-menu hidden">
                            <ul class="nav-links">
                                <li id="profile">
                                    <div class="dropdown-logout">
                                        <a class="logout-toggle" href="#" role="button" id="logoutdropdownMenuLink" aria-expanded="false">
                                            <span id="profile-pic">
                                                <img src="asset/profile.png" alt="">
                                            </span>
                                            <span class="profile-name">
                                                <p>Wellcome</p>Admin
                                            </span>
                                        </a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="logout.php">Logout</a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </header>

                    <div class="personal-content" id="forgot_section">
                        <div class="main_logo">
                            <img src="{{ asset('Teacher/asset/logo/Logo@2x.png') }}" alt="logo">
                            <p>A 360o suite to manage your school and enhance learning experience for your students.</p>
                        </div>
                        <form class="box_titles">
                            <div class="contact_title">
                                <h2>Forgot Password?</h2>
                                <p>Enter your User Id.</p>
                            </div>
                            <div class="right_contant">
                                <div class="form-group">
                                    <label>User Id</label>
                                    <input type="text" name="" id="userId" class="form-control text_cont" placeholder="HDAAM001">
                                </div>
                            </div>
                        </form>
                        <button class="login_btn" onclick="initiateOtp()" >Send OTP</button>
                    </div>



                    <div class="personal-content" id="otp_section">
                        <div class="main_logo">
                            <img src="{{ asset('Teacher/asset/logo/Logo@2x.png') }}" alt="logo" >
                            <p>A 360o suite to manage your school and enhance learning experience for your students.</p>
                        </div>
                        <form class="box_titles">
                            <div class="contact_title">
                                <h2>Enter OTP</h2>
                                <p>We have sent an OTP to the email address registered with  <a href="#" id="select_userId" class="select_tag"></a></p>
                            </div>
                            <div class="right_contant">
                                <div class="form-group">
                                    <a class="select_tag underline" href="">Change User ID</a>
                                </div>
                                <div class="form-group verification-code">
                                <div class="verification-code--inputs">
                                    <input class="otp" type="text" oninput='digitValidate(this)' onkeyup='tabChange(1,this)' maxlength="1" />
                                    <input class="otp" type="text" oninput='digitValidate(this)' onkeyup='tabChange(2,this)' maxlength="1" />
                                    <input class="otp" type="text" oninput='digitValidate(this)' onkeyup='tabChange(3,this)' maxlength="1" />
                                    <input class="otp" type="text" oninput='digitValidate(this)' onkeyup='tabChange(4,this)' maxlength="1" />
                                    <input class="otp" type="text" oninput='digitValidate(this)' onkeyup='tabChange(5,this)' maxlength="1" />
                                    <input class="otp" type="text" oninput='digitValidate(this)' onkeyup='tabChange(6,this)' maxlength="1" />
                                </div>
                                </div>
                                <div class="form-group">
                                <a class="select_tag" id="timercontent"><img src="{{ asset('Teacher/asset/eye.svg') }}" alt="clock" class="clockimg"><span id="countdowntimer">30s</span></a>
    <!--                                Resend otp-->
    <!--                                <a class="select_tag" href="">Resend OTP</a>-->
                                </div>
                            </div>
                        </form>
                            <button class="login_btn" onclick="verifyOtp()">Verify</button>
                    </div>

                    <div class="personal-content" id="reset_section">
                        <div class="main_logo">
                            <img src="{{ asset('Teacher/asset/logo/Logo@2x.png') }}" alt="logo" >
                            <p>A 360o suite to manage your school and enhance learning experience for your students.</p>
                        </div>
                        <form class="box_titles">
                            <div class="contact_title">
                                <h2>Create New Password</h2>
                                <p>Enter your new password.</p>
                            </div>
                            <div class="right_contant">
                                <div class="form-group">
                                    <label>New Password</label>
                                    <div class="input-group" id="show_hide_password">
                                    <input type="password" name="" class="form-control" id="new_password" placeholder="password">
                                    <div class="input-group-addon">
                                        <a href=""><img src="{{ asset('Teacher/asset/cross.svg') }}" class="eyefa-slash "></a>
                                        <a href=""><img src="{{ asset('Teacher/asset/eye.svg') }}" class="eyefa " ></a>
                                    </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Re-Enter New Password</label>
                                    <div class="input-group" id="show_hide_password1">
                                    <input type="password" name="" class="form-control" id="confirm_new_password" placeholder="password">
                                    <div class="input-group-addon">
                                        <a href=""><img src="{{ asset('Teacher/asset/cross.svg') }}" class="eyefa-slash1 "></a>
                                            <a href=""><img src="{{ asset('Teacher/asset/eye.svg') }}" class="eyefa1 " ></a>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <button class="login_btn" onclick="password_change()">Save</button>
                    </div>
    
                </div>
            </div>
        </section>




            
            <!-- Modal -->
            <div class="modal fade" id="modal_show" role="dialog">
                <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                    <div class="tick_mark">
                            <img src="asset/tick.png" alt="" class="ticksucces">
                            <h2>Password Changed!</h2>
                            <p>Your password has been changed successfully.</p>
                            <button class="login_btn" onclick="login_page()">Login</button>
                    </div>
                    </div>
                </div>
                </div>
            </div>
    
        <script src="{{ asset('Teacher/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('Teacher/js/jquery.min.js') }}"></script>
        <script src="{{ asset('Teacher/js/fontawesome.js') }}"></script>
        <script src="{{ asset('Teacher/js/sweetalert.min.js') }}" ></script>
        <script>


                $("#modal_view").click(function() {
                    $("#modal_show").modal({backdrop: 'static', keyboard: false}, 'show');
                });
                function otp_page() {
                // window.location.href="otp.html";
                    $("#forgot_section").hide();
                    $("#otp_section").show();
                    $("#reset_section").hide();
                }

                let digitValidate = function (ele) {
                    console.log(ele.value);
                    ele.value = ele.value.replace(/[^0-9]/g, "");
                };

                let tabChange = function (val, ele) {
                    let otpclass = ele.className;
                    let otpElem = document.querySelectorAll(`.${otpclass}`);
                    if (otpElem[val - 1].value != "") {
                        if (val < otpElem.length) {
                        // check if last box is currently in focus
                        otpElem[val].focus();
                        } else {
                        otpElem[val - 1].focus();
                        }
                    } else if (otpElem[val - 1].value == "") {
                        if (val - 1 > 0) {
                            // change focus except on box 1
                            otpElem[val - 2].focus();
                        }
                    }
                };
                
                function pwd_page() {
                // window.location.href="otp.html";
                    $("#forgot_section").hide();
                    $("#otp_section").hide();
                    $("#reset_section").show();
                }

                function login_page() {
                    window.location.href="login";
                }


                $(document).ready(function() {
                    
                    $("#show_hide_password a").on('click', function(event) {
                        event.preventDefault();
                        if($('#show_hide_password input').attr("type") == "text"){
                            $('#show_hide_password input').attr('type', 'password');
                            $('.eyefa-slash').show();
                            $('.eyefa').hide();
                        }else if($('#show_hide_password input').attr("type") == "password"){
                            $('#show_hide_password input').attr('type', 'text');
                            $('.eyefa').show();
                            $('.eyefa-slash').hide();
                        }
                    });
                    $("#show_hide_password1 a").on('click', function(event) {
                        event.preventDefault();
                        if($('#show_hide_password1 input').attr("type") == "text"){
                            $('#show_hide_password1 input').attr('type', 'password');
                            $('.eyefa-slash1').show();
                            $('.eyefa1').hide();
                        }else if($('#show_hide_password1 input').attr("type") == "password"){
                            $('#show_hide_password1 input').attr('type', 'text');
                            $('.eyefa1').show();
                            $('.eyefa-slash1').hide();
                        }
                    });
                });  

                function sendotp(teacher_id,timerTime,otpType){
                                    let datas = {
                                                    "teacher_id": teacher_id
                                                };
                                    $.ajax({
                                        dataType: "JSON",
                                        type: "POST",
                                        url: "{{  url('api/teacher/send-otp') }}",
                                        data: datas
                                    }).done(function(data1) {
                                            if(otpType == 'send'){
                                                $('#select_userId').text(teacher_id);
                                                otp_page();
                                                downloadTimer = setInterval(function () {
                                                    timerTime --;
                                                    document.getElementById("countdowntimer").textContent = timerTime + 's';
                                                    if (timerTime <= 0) {
                                                        clearInterval(downloadTimer);
                                                        $('#timercontent').html(`<a href="#" onclick="sendotp('${teacher_id}',0,'resend')">Resend OTP</a>`);
                                                    }
                                                }, 1000);
                                            }
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
                //go to OTP page
                let downloadTimer;
                function initiateOtp(){
                    let teacher_id = $('#userId').val();

                    if(teacher_id != ''){
                        
                        let timerTime = 30;
                        //clear and reset Timer if already running
                        if(downloadTimer != "" || downloadTimer != undefined){
                            clearInterval(downloadTimer); 
                            document.getElementById("countdowntimer").textContent = timerTime + 's';
                        }
                        sendotp(teacher_id,timerTime,"send");
                        
                    }else{
                        swal("Id field is empty");
                    }

                }     

                let validOtp;
                function verifyOtp(){
                    let teacher_id = $('#userId').val();
                    let otp = '';
                    $('.otp').each((index,item)=>{
                        if(item.value == ''){
                            otp += '-';
                        }else{
                            otp += item.value;
                        }
                    });
                    if(otp.trim().includes('-')){
                        swal('Please ensure that correct OTP is entered')
                    }else{
                        validOtp = otp;
                        let datas = {
                                        "teacher_id": teacher_id,
                                        "otp":otp
                                    };
                        $.ajax({
                            dataType: "JSON",
                            type: "POST",
                            url: "{{  url('api/teacher/verify-otp') }}",
                            data: datas
                        }).done(function(data1) {
                            
                                pwd_page();
                                $('#new_password').val('');
                                $('#confirm_new_password').val('');
                            
                        }).fail(function(httpObj, textStatus){
                            swal({
                                    title:httpObj.responseJSON.status,
                                    text:httpObj.responseJSON.message,
                                    icon:textStatus,

                            });
                        })

                    }
                }

                function password_change(){
                    let teacher_id = $('#userId').val();
                    let newPassword = $('#new_password').val().trim();
                    let confirmPassword = $('#confirm_new_password').val();
                    let otp = validOtp;
                    if(newPassword == ''){
                        swal("Password Field cannot be blank");
                    }else if(newPassword != confirmPassword ){
                        swal("Entered Password does not match with confirmed password");
                    }else{
                        let datas = {
                                        "teacher_id": teacher_id,
                                        "otp":otp,
                                        "password":newPassword,
                                        "password_confirmation":confirmPassword
                                    };
                            $.ajax({
                                dataType: "JSON",
                                type: "POST",
                                url: "{{  url('api/teacher/reset-password') }}",
                                data: datas
                            }).done(function(data1) {
                                $('.otp').val('');
                                $('#userId').val('');
                                $('#new_password').val('');
                                $('#confirm_new_password').val('');
                                $('#modal_show').modal({backdrop: 'static', keyboard: false}, 'show');
                            }).fail(function(httpObj, textStatus){
                                swal({
                                            title:httpObj.responseJSON.status,
                                            text:httpObj.responseJSON.message,
                                            icon:textStatus,

                                    }).then(()=>{
                                        $('#new_password').val('');
                                        $('#confirm_new_password').val('');
                                    });
                            })
                    }
                    
                }
                



                
        </script>
    </body>

</html>