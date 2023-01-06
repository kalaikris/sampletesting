<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hey Campus</title>
    <link rel="icon" href="{{ asset('School/asset/logo/top-iocn.png') }}"  />
    <link rel="stylesheet" href="{{ asset('School/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('School/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('School/css/forgot.css') }}">
</head>
<style>
    .main_logo
    {
        border-top: none;
    }
    .boder_bottom
    {
      margin-top: 0px;
    }
    #otp_section, #reset_section {
        display: none;
    }
    .hidden{
        display:none;
    }
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
                  <img src="asset/rocket.svg" class="rocket">
                <!-- <img src="asset/rocket.svg" class="rocket"> -->
                 <!-- <img src="asset/Side banner imager.svg" class="side_menu_img"> -->
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
                <div class="boder_bottom"></div>
                <div class="personal-content" id="forgot_section">
                    <div class="main_logo">
                        <img src="{{ asset('School/asset/logo/Logo@2x.png') }}" alt="logo">
                        <p>Digital Learning Simplified</p>
                    </div>
                    <form class="box_titles">
                        <div class="contact_title">
                            <h2>Forgot Password</h2>
                            <p>Enter your registered userId</p>
                        </div>
                        <div class="right_contant">
                            <div class="form-group">
                                <label>User ID</label>
                                <input type="text" name="" class="form-control text_cont userId" placeholder="HCSCHOOL0123">
                            </div>
                           <button type="button"  class="login_btn sendOtp">Continue</button></a>
                        </div>
                    </form>
                </div>




                 <div class="personal-content" id="otp_section">
                    <div class="main_logo">
                        <img src="{{ asset('School/asset/logo/Logo@2x.png') }}" alt="logo">
                        <p>Digital Learning Simplified</p>
                    </div>
                    <form class="box_titles">
                        <div class="contact_title">
                            <h2>Enter OTP</h2>
                            <p>We have sent an OTP to your entered email address <a href="#" class="select_tag">admin@hccampus.com</a></p>
                        </div>
                        <div class="right_contant">
                            <div class="form-group">
                                <a class="select_tag underline " onclick="changeUserID()">Change User ID</a>
                            </div>
                            <div class="form-group verification-code">
                                <div class="verification-code--inputs otpInput">
                                    <input type="text" id="otp1" maxlength="1" />
                                    <input type="text" id="otp2" maxlength="1" />
                                    <input type="text" id="otp3" maxlength="1" />
                                    <input type="text" id="otp4" maxlength="1" />
                                    <input type="text" id="otp5" maxlength="1" />
                                    <input type="text" id="otp6" maxlength="1" />
                                </div>
                            </div>
                            <div class="form-group">
                                <a class="select_tag otpTimerDiv"><span><img src="{{ asset('School/asset/clock.png') }}" alt="clock" class="clockimg"></span><span class="otpTimer">30 sec</span</a>
                                <!-- Resend otp-->
                                <a class="select_tag resendOtp hidden">Resend OTP</a>
                            </div>
                        </div>
                    </form>
                    <button class=" login_btn verifyOtp">Verify</button>
                </div>



                <div class="personal-content" id="reset_section">
                    <div class="main_logo">
                         <img src="{{ asset('School/asset/logo/Logo@2x.png') }}" alt="logo">
                        <p>Digital Learning Simplified</p>
                    <form class="box_titles">
                        <div class="contact_title">
                            <h2>Create New Password</h2>
                            <p>Enter your new password.</p>
                        </div>
                        <div class="right_contant">
                            <div class="form-group">
                                <label>New Password</label>
                                <div class="input-group" id="show_hide_password">
                                    <input type="password" name="" class="form-control new_pass" placeholder="Enter your new password">
                                    <div class="input-group-addon">
                                        <a href=""><img src="{{ asset('School/asset/cross.svg') }}" class="eyefa-slash "></a>
                                        <a href=""><img src="{{ asset('School/asset/eye.svg') }}" class="eyefa "></a>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Re-Enter New Password</label>
                                <div class="input-group" id="show_hide_password1">
                                    <input type="password" name="" class="form-control re_pass" placeholder="Re-Enter New Password">
                                    <div class="input-group-addon">
                                        <a href=""><img src="{{ asset('School/asset/cross.svg') }}" class="eyefa-slash1 "></a>
                                        <a href=""><img src="{{ asset('School/asset/eye.svg') }}" class="eyefa1 "></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <button class="login_btn reset_pass" id="modal_view">Verify</button>
                </div>
            </div>
        </div>
    </section>
       <!-- Modal -->
    <div class="modal fade" id="modal_show" role="dialog">
        <div class="modal-dialog" style="transform: translate(0, 180px);">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="tick_mark">
                        <img src="{{ asset('School/asset/tick.png') }}" alt="" class="ticksucces">
                        <h2>Password Changed!</h2>
                        <p>Your password changed successfully.</p>
                        <button class="login_btn" onclick="login_page()">Login</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('School/js/jquery.min.js') }}" ></script>
    <script src="{{ asset('School/js/bootstrap_bundle_min.js') }}" ></script>
    <script src="{{ asset('School/js/sweetalert.min.js') }}" ></script>
    <script src="{{ asset('School/js/fontawesome.js') }}" ></script>
    <script>
        let timer;
        function myTimer(){
            let sec = 29;
            clearInterval(timer);
            timer = setInterval(() => {
                $('.otpTimer').text(sec-- + " " +"sec");
                if(sec == -1){
                    clearInterval(timer);
                    $(".resendOtp").removeClass("hidden");
                    $(".otpTimerDiv").addClass("hidden");
                }
            }, 1000);
        }
        
        //sendOtp
        $(".sendOtp").click(function(){
            let userId = $(".userId").val();
            $(".verifyOtp").attr("data-userid",userId);
            $(".reset_pass").attr("data-userid",userId);
            var data ={
                'school_id':userId,
            }
            if (userId != "") {
                otp_page();
                $(".sendOtp").attr("disabled",true);
                sendOtp(data);
            } else {
                $(".error").remove();
                if (userId == "") {
                    $(".userId").parent().append(`<span class="error">* Enter UserId</span>`);
                } 
            }
        })
        function sendOtp(data){
            var request = $.ajax({
                type: "POST",
                url: "{{  url('api/school/send-otp') }}",
                data: data,
                dataType : "json",
                timeout : 5000
            });
            request.done(function(data) {
                myTimer();
            });
            request.fail(function(httpObj, textStatus) {
                swal({
                    title: httpObj.responseJSON.status,
                    text: httpObj.responseJSON.message,
                    icon: textStatus,
                    button: "OK",
                });
            });
        }
        //resend otp
        $(".resendOtp").click(function(){
            $(this).addClass("hidden");
            $(".otpTimerDiv").removeClass("hidden");
            myTimer();
            let userId = $(".userId").val();
            var data ={
                'school_id':userId,
            }
            if (userId != "") {
                $(".resendOtp").attr("disabled",true);
                sendOtp(data);
            } else {
                $(".error").remove();
                if (userId == "") {
                    $(".userId").parent().append(`<span class="error">* Enter UserId</span>`);
                } 
            }
        })
        //verify otp
        $(".verifyOtp").click(function(){
            $(this).attr("disabled",true);
            let userId = $(this).attr("data-userid");
            let otpInput = "";
            $(".otpInput input").each(function(index,item){
                otpInput += item.value;
            })
            $(".reset_pass").attr("data-otp",otpInput);
            var data ={
                'school_id':userId,
                'otp':otpInput
            }
            var request = $.ajax({
                type: "POST",
                url: "{{  url('api/school/verify-otp') }}",
                data: data,
                dataType : "json",
                timeout : 5000
            });
            request.done(function(data) {
                pwd_page();
            });
            request.fail(function(httpObj, textStatus) {
                $(".verifyOtp").attr("disabled",false);
                swal({
                    title: httpObj.responseJSON.status,
                    text: httpObj.responseJSON.message,
                    icon: textStatus,
                    button: "OK",
                });
            });
        })
        //reset password
        $(".reset_pass").click(function(){
            $(".reset_pass").attr("disabled",true);
            $(".error").remove();
            let userId = $(this).attr("data-userid");
            let otp_val = $(this).attr("data-otp");
            let new_pass = $(".new_pass").val();
            let re_pass = $(".re_pass").val();
            let pass_pattern = new RegExp("^(?=.*[a-z])(?=.*[A-Z])(?=.*\\d)(?=.*[-+_!@#$%^&*.,?]).+$");
            if(new_pass != "" && re_pass != "" && new_pass == re_pass && pass_pattern.test(new_pass) && !(new_pass.length < 8)){
                var data ={
                    'school_id':userId,
                    'otp':otp_val,
                    'password' : new_pass,
                    'password_confirmation' : re_pass
                }
                var request = $.ajax({
                    type: "POST",
                    url: "{{  url('api/school/reset-password') }}",
                    data: data,
                    dataType : "json",
                    timeout : 5000
                });
                request.done(function(data) {
                    $("#modal_show").modal('show');
                });
                request.fail(function(httpObj, textStatus) {
                    $(".reset_pass").attr("disabled",false);
                    swal({
                        title: httpObj.responseJSON.status,
                        text: httpObj.responseJSON.message,
                        icon: textStatus,
                        button: "OK",
                    });
                });
            } else{
                $(".reset_pass").attr("disabled",false);
                if (new_pass == "") {
                    $(".new_pass").parent().after("<span class='error'>* New Password is Required</span>");
                } else if (new_pass.length < 8) {
                    $(".new_pass").parent().after("<span class='error'>* Password must contains atleast 8 digit character</span>");
                }else if (!pass_pattern.test(new_pass)) {
                    $(".new_pass").parent().after("<span class='error'>* Password must contains atleast one uppercase, lowercase, special character and number</span>");
                } 
                if (re_pass == "") {
                    $(".re_pass").parent().after("<span class='error'>* Confirm Password is Required</span>");
                } else if (re_pass != new_pass && re_pass && new_pass) {
                    $(".re_pass").parent().after("<span class='error'>* New Password and Confirm password mismatched!</span>");
                }
            }
        })
        $("#otp1, #otp2, #otp3, #otp4, #otp5, #otp6").keyup(function(event){
            //var key = event.keyCode || event.charCode;
            if( event.which == 8 || event.which == 46 ){
                $(this).prev('input').focus();
                return true;
            }else{
                var ASCIICode = (event.which) ? event.which : event.key
                if (ASCIICode > 31 && (ASCIICode < 48 || ASCIICode > 57)){
                    return false;
                }else{
                    $(this).next('input').focus();
                    return true;
                }
            }
        }).keypress(function (e) {
            var charCode = (e.which) ? e.which : event.key
            if (String.fromCharCode(charCode).match(/[^0-9]/g))    
            return false;                        
        }).on('paste', function (event) {
            if (event.originalEvent.clipboardData.getData('Text').match(/[^\d]/)) {
                event.preventDefault();
            }else{
                var otpText = event.originalEvent.clipboardData.getData('Text');
                var otpArray= otpText.split('');
                for(var i=0;i<6;i++){
                    var id = parseInt(i)+1;
                    $("#otp"+id).val(otpArray[i]);
                }
                $("#otp"+id).focus();
            }
        });
        $("#modal_view").click(function() {
            //$("#modal_show").modal('show');
        });
        function otp_page() {
        // window.location.href="otp.html";
        $("#forgot_section").hide();
        $("#otp_section").show();
        $("#reset_section").hide();
        }
        function pwd_page() {
        // window.location.href="otp.html";
        $("#forgot_section").hide();
        $("#otp_section").hide();
        $("#reset_section").show();
        }
        function changeUserID(){
            $("#otp_section").hide();
            $("#forgot_section").show();
            $(".sendOtp").attr("disabled",false);
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
            
    </script>
</body>

</html>