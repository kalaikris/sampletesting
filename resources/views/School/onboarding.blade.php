<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Onboarding</title>
    <link rel="icon" href="{{ asset('School/asset/logo/top-iocn.png') }}"  />
	<link rel="stylesheet" href="{{ asset('School/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('School/css/main.css') }}">
	<link rel="stylesheet" href="{{ asset('School/css/login.css') }}">
    <link rel="stylesheet" href="{{ asset('School/css/Onboarding.css') }}">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"> -->
</head>
<style>
    .hidden{
        display: none;
    }
</style>

<body>
    <section>
        <div class="mani">
            <div class="side_menu center_align">
                <div class="main_content">
                    <div class="sub_text">
                        <h1>Welcome to <br />Hey Campus 👋</h1>
                        <p>and performance management<br /> platform for your schools !</p>
                    </div>
                </div>
                <!-- <img src="asset/rocket.svg" class="rocket"> -->
                <div class="status_bar">
                    <ul class="sidebar_status">
                        <li class="active School_Details">School Details <span class="completed_tick"></span></li>
                        <li class="active Shop_Details onboard_sub">Onboard Subject <span class="completed_tick"></span></li> <!-- completed -->
                        <li class="active  onboard_teacher">Onboard Teacher <span class="completed_tick"></span></li>
                        <li class="active onboard_class">Onboard Class <span class="completed_tick"></span></li>
                        <li class="active onboard_student ">Onboard Student <span class="completed_tick"></span></li>
                    </ul>
                </div>
                <img src="{{ asset('School/asset/bg.svg') }}" class="bottom_wave"> 
                <!--   <img src="asset/Side banner imager.svg" class="side_menu_img"> -->
            </div>
            <div class="mani_menu">
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
                <!-- 1 School Details.... -->
                <div class="personal-content step step-1" data-next="step-2">
                    <div class="step_content">
                        <p>Step 1/5</p>
                        <h4>School Details</h4>
                        <p>Enter your school details like school name, syllabus, website,location,etc...</p>
                    </div>
                    <div class="bor_btm"></div>
                    <div class="School-details-text">
                        <div class="upload_details">
                            <h4>Upload School Logo</h4>
                            <div class="profile_img">
                                <input type="file" name="" class="file-upload" id="image_upload">
                                <img src="{{ asset('School/asset/img.png') }}" style="width: 40px;">
                                <label for="image_upload">Upload image</label>
                            </div>
                            <!--  <span class="error">upload images</span> -->
                            <div class="detail_input_box">
                                <div class="shool_details_1">
                                    <h4>School Details</h4>
                                    <div class="content-sec">
                                        <div class="detail-values">
                                            <label>School Name</label>
                                            <input type="text" name="" placeholder="Alpha School" class="school_name">
                                            <!-- <span class="error">upload images</span> -->
                                        </div>
                                        <div class="detail-values">
                                            <label>Affiliation Number</label>
                                            <input type="text" name="" placeholder="1930798" class="affiliation_num">
                                            <!-- <span class="error">upload images</span> -->
                                        </div>
                                        <div class="detail-values">
                                            <label>Syllabus</label>
                                            <select class="syllabus">
                                                <option value="">Choose Syllabus</option>
                                                <option value="CBSE">CBSE</option>
                                                <option value="Stateboard">Stateboard</option>
                                                <option value="Matriculation">Matriculation</option>
                                                <option>-</option>
                                            </select>
                                            <!-- <span class="error">upload images</span> -->
                                        </div>
                                        <div class="detail-values">
                                            <label>Medium of School</label>
                                            <select class="medium_of_school">
                                            <option value="">Choose medium</option>
                                                <option value="English">English</option>
                                                <option value="Tamil">Tamil</option>
                                            </select>
                                            <!-- <span class="error">upload images</span> -->
                                        </div>
                                        <div class="detail-values">
                                            <label>Contact Name</label>
                                            <input type="text" name="" placeholder="Philip Hansen" class="contact_name alphabetsOnly">
                                            <!-- <span class="error">upload images</span> -->
                                        </div>
                                        <div class="detail-values">
                                            <label>Contact Number</label>
                                            <input type="text" name="" placeholder="(907) 565-5365" class="mob_num numberOnly">
                                            <!-- <span class="error">upload images</span> -->
                                        </div>
                                        <div class="detail-values">
                                            <label>Website Address</label>
                                            <input type="text" name="" placeholder="www.alphagroup.edu" class="web_addr">
                                            <!-- <span class="error">upload images</span> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="shool_details_1 Addrss_detail">
                                    <h4>Address</h4>
                                    <div class="content-sec">
                                        <div class="detail-values">
                                            <label>Address Line 1</label>
                                            <input type="text" name="" placeholder="151, Velachery-Tambaram main Rd" class="add_line1">
                                            <!-- <span class="error">upload images</span> -->
                                        </div>
                                        <div class="detail-values">
                                            <label>Address Line 2</label>
                                            <input type="text" name="" placeholder="Kamarajapuram, Sembakkam" class="add_line2">
                                            <!-- <span class="error">upload images</span> -->
                                        </div>
                                        <div class="detail-values">
                                            <label>Country</label>
                                            <select class="country">
                                               
                                            </select>
                                            <!-- <span class="error">upload images</span> -->
                                        </div>
                                        <div class="detail-values">
                                            <label>State</label>
                                            <select class="state">
                                                <option value="">choose state</option>
                                            </select>
                                            <!-- <span class="error">upload images</span> -->
                                        </div>
                                        <div class="detail-values">
                                            <label>City</label>
                                            <select class="city">
                                                <option value="">choose city</option>
                                            </select>
                                            <!-- <span class="error">upload images</span> -->
                                        </div>
                                        <div class="detail-values">
                                            <label>Pincode</label>
                                            <input type="text" name="" placeholder="600733" class="pincode">
                                            <!-- <span class="error">upload images</span> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="Continue">
                                <button class="Continue-btn cont-btn-1 school_details">Continue</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- 2 Onboard Subject.... -->
                <div class="Shop_title step step-2 hidden" data-next="step-3">
                    <div class="step_content">
                        <p><span class="back-arrow back-btn step-nav-btn" data-previous="step-1"><img src="{{ asset('School/asset/img/arrow.png') }}"></span> Step 2/5 </p>
                        <h4>Onboard Subject</h4>
                        <p>Upload class data to set auto configure your subjects.</p>
                    </div>
                    <div class="bor_btm"></div>
                    <div class="upload_details">
                        <h4>Download Sample File</h4>
                        <p>Here is a sample file for subject onboarding.</p>
                    </div>
                    <div class="down">
                        <a class="download-btn" href="{{ asset('School/asset/csv/subject.csv') }}" download>
                            Download
                        </a>
                    </div>
                    <div class="file_cont">
                        <div class="csv_title">
                            <p>Upload CSV File</p>
                        </div>
                        <label class="upload_filed" for="csv_file_sub_upload">
                            <input id="csv_file_valid" type="hidden" />
                            <input id="csv_file_sub_upload" onchange="file_upload_csv('csv_file_sub','csv_view_url_sub',`{{ asset('School/asset/upload_csv_done.png') }}`)" type="file" accept=".csv" style="display: none;" />
                            <!-- <iframe src="" height="200" width="300" title="Iframe Example"></iframe> -->
                            <img alt="" src="{{ asset('School/asset/csvfile(1).png') }}" class="csvfile" id="csv_view_url_sub" />
                            <p id="csv_file_sub_name">Upload CSV Files</p>
                        </label>
                        <!-- <span class="error" style="display: block;">upload images</span> -->
                    </div>
                    <div class="Continue">
                        <button class="Continue-btn cont-btn-2 cont_btn_sub">Continue</button>
                    </div>
                </div>
                <!-- 3 Onboard Teacher.... -->
                <div class="onboard_teacher step step-3 hidden" data-next="step-4">
                    <div class="step_content">
                        <p><span class="back-arrow back-btn step-nav-btn" data-previous="step-2"><img src="{{ asset('School/asset/img/arrow.png') }}"></span> Step 3/5</p>
                        <h4>Onboard Teacher</h4>
                        <p>Upload subject data to set auto configure your teachers.</p>
                    </div>
                    <div class="bor_btm"></div>
                    <div class="upload_details">
                        <h4>Download Sample File</h4>
                        <p>Here is a sample file for Teacher onboarding.</p>
                    </div>
                    <div class="down">
                        <a class="download-btn" href="{{ asset('School/asset/csv/teacher.csv') }}" download>
                            Download   
                        </a>
                    </div>
                    <div class="file_cont">
                        <div class="csv_title">
                            <p>Upload CSV File</p>
                            <label for="csv_file_teacher_upload">Reupload
                                <input type="file" name="" id="reupload">
                            </label>
                        </div>
                        <label class="upload_filed" for="csv_file_teacher_upload">
                            <input id="csv_file_valid" type="hidden" />
                            <input id="csv_file_teacher_upload" onchange="file_upload_csv('csv_file_teacher','csv_view_url_teacher',`{{ asset('School/asset/upload_csv_done.png') }}`)" type="file" accept=".csv" style="display: none;" />
                            <img alt="" src="{{ asset('School/asset/csvfile(1).png') }}" class="csvfile" id="csv_view_url_teacher" />
                            <p>Upload CSV Files</p>
                        </label>
                        <div class="csv_title file_type">
                            <div>
                                <p class="file_name">File Name</p>
                                <p id="csv_file_teacher_name">teachers.csv</p>
                            </div>
                            <p class="prev_text">Preview</p>
                        </div>
                        <!-- <span class="error" style="display: block;">upload images</span> -->
                        <!-- <label class="upload_filed" for="csv_file_student_upload">
                            <input id="csv_file_valid" type="hidden" />
                            <input id="csv_file_student_upload" onchange="file_upload_csv('csv_file_student','csv_view_url_student',`{{ asset('School/asset/upload_csv_done.png') }}`)" type="file" accept=".csv" style="display: none;" />
                            <img alt="" src="{{ asset('School/asset/csvfile(1).png') }}" class="csvfile" id="csv_view_url_student" />
                            <p>Upload CSV Files</p>
                        </label>
                        <div class="csv_title file_type">
                            <div>
                                <p class="file_name">File Name</p>
                                <p id="csv_file_student_name">teachers.csv</p>
                            </div>
                            <p class="prev_text">Preview</p>
                        </div> -->
                        <!-- <span class="error" style="display: block;">upload images</span> -->
                    </div>
                    <div class="Continue">
                        <button class="Continue-btn cont-btn-3 cont_btn_teacher">Continue</button>
                    </div>
                </div>
                <!-- 4 Onboard Class.... -->
                <div class="onboard_class step step-4 hidden" data-next="step-5">
                    <div class="step_content">
                        <p><span class="back-arrow back-btn step-nav-btn" data-previous="step-3"><img src="{{ asset('School/asset/img/arrow.png') }}"></span> Step 4/5</p>
                        <h4>Onboard Class</h4>
                        <p>Upload teacher data to set auto configure your classes.</p>
                    </div>
                    <div class="bor_btm"></div>
                    <div class="upload_details">
                        <h4>Download Sample File</h4>
                        <p>Here is a sample file for class onboarding.</p>
                    </div>
                    <div class="down">
                        <a class="download-btn" href="{{ asset('School/asset/csv/classNew.csv') }}" download>
                            Download
                        </a>
                    </div>
                    <div class="file_cont">
                        <div class="csv_title">
                            <p>Upload CSV File</p>
                            <label for="csv_file_class_upload">Reupload
                                <input type="file" name="" id="reupload">
                            </label>
                        </div>
                        <label class="upload_filed" for="csv_file_class_upload">
                            <input id="csv_file_valid" type="hidden" />
                            <input id="csv_file_class_upload" onchange="file_upload_csv('csv_file_class','csv_view_url_class',`{{ asset('School/asset/upload_csv_done.png') }}`)" type="file" accept=".csv" style="display: none;" />
                            <img alt="" src="{{ asset('School/asset/csvfile(1).png') }}" class="csvfile" id="csv_view_url_class" />
                            <p>Upload CSV Files</p>
                        </label>
                        <div class="csv_title file_type">
                            <div>
                                <p class="file_name">File Name</p>
                                <p id="csv_file_class_name">teachers.csv</p>
                            </div>
                            <p class="prev_text">Preview</p>
                        </div>
                        <!-- <label class="upload_filed" for="csv_file_teacher_upload">
                            <input id="csv_file_valid" type="hidden" />
                            <input id="csv_file_teacher_upload" onchange="file_upload_csv('csv_file_teacher','csv_view_url_teacher',`{{ asset('School/asset/upload_csv_done.png') }}`)" type="file" accept=".csv" style="display: none;" />
                            <img alt="" src="{{ asset('School/asset/csvfile(1).png') }}" class="csvfile" id="csv_view_url_teacher" />
                            <p>Upload CSV Files</p>
                        </label>
                        <div class="csv_title file_type">
                            <div>
                                <p class="file_name">File Name</p>
                                <p id="csv_file_teacher_name">teachers.csv</p>
                            </div>
                            <p class="prev_text">Preview</p>
                        </div> -->
                        <!-- <span class="error" style="display: block;">upload images</span> -->
                    </div>
                    <div class="Continue">
                        <button class="Continue-btn cont-btn-4 cont_btn_class">Continue</button>
                    </div>
                </div>
                <!-- 5 Onboard Class.... -->
                <div class="onboard_student step step-5 hidden">
                    <div class="step_content">
                        <p><span class="back-arrow back-btn step-nav-btn" data-previous="step-4"><img src="{{ asset('School/asset/img/arrow.png') }}"></span> Step 5/5</p>
                        <h4>Onboard Student</h4>
                        <p>Upload student data to set auto configure your students.</p>
                    </div>
                    <div class="bor_btm"></div>
                    <div class="upload_details">
                        <h4>Download Sample File</h4>
                        <p>Here is a sample file for student onboarding.</p>
                    </div>
                    <div class="down">
                        <a class="download-btn" href="{{ asset('School/asset/csv/student.csv') }}" download>
                           Download
                        </a>
                    </div>
                    <div class="file_cont">
                        <div class="csv_title">
                            <p>Upload CSV File</p>
                            <label for="csv_file_student_upload">Reupload
                                <input type="file" name="" id="reupload">
                            </label>
                        </div>
                        <label class="upload_filed" for="csv_file_student_upload">
                            <input id="csv_file_valid" type="hidden" />
                            <input id="csv_file_student_upload" onchange="file_upload_csv('csv_file_student','csv_view_url_student',`{{ asset('School/asset/upload_csv_done.png') }}`)" type="file" accept=".csv" style="display: none;" />
                            <img alt="" src="{{ asset('School/asset/csvfile(1).png') }}" class="csvfile" id="csv_view_url_student" />
                            <p>Upload CSV Files</p>
                        </label>
                        <div class="csv_title file_type">
                            <div>
                                <p class="file_name">File Name</p>
                                <p id="csv_file_student_name">teachers.csv</p>
                            </div>
                            <p class="prev_text">Preview</p>
                        </div>
                        <!-- <label class="upload_filed" for="csv_file_class_upload">
                            <input id="csv_file_valid" type="hidden" />
                            <input id="csv_file_class_upload" onchange="file_upload_csv('csv_file_class','csv_view_url_class',`{{ asset('School/asset/upload_csv_done.png') }}`)" type="file" accept=".csv" style="display: none;" />
                            <img alt="" src="{{ asset('School/asset/csvfile(1).png') }}" class="csvfile" id="csv_view_url_class" />
                            <p>Upload CSV Files</p>
                        </label>
                        <div class="csv_title file_type">
                            <div>
                                <p class="file_name">File Name</p>
                                <p id="csv_file_class_name">teachers.csv</p>
                            </div>
                            <p class="prev_text">Preview</p>
                        </div> -->
                        <!-- <span class="error" style="display: block;">upload images</span> -->
                    </div>
                    <div class="Continue">
                        <button class="Continue-btn submit">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </section>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" style="transform: translate(0px, 15%);">
    <div class="modal-content">
      <div class="modal-header">
       <!--  <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button> -->
      </div>
      <div class="modal-body">
        <div class="successfully_text">
                        <img src="{{ asset('School/asset/tick.svg') }}">
                        <h6>Successfully Onboarded!</h6>
                        <p>Your school has been successfully onboarded. Now you can <br> setup and manage your school.</p>
                        <a href="{{ url('school/school_configuration') }}"><button type="button" class="Credentials_btn">Let's see your school now</button></a>
                    </div>
      </div>
    <!--   <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a href="school_configuration.html"><button type="button" class="btn btn-primary">Save changes</button></a>
      </div> -->
    </div>
  </div>
</div>
    <script src="{{ asset('School/js/jquery.min.js') }}" ></script>
    <script src="{{ asset('School/js/aws-sdk.min.js') }}" ></script>
    <script src="{{ asset('School/js/bootstrap_min.js') }}" ></script>
    <script src="{{ asset('School/js/common.js') }}" ></script>
    <script src="{{ asset('School/js/sweetalert.min.js') }}" ></script>
    <script>
        
        // country,city,state fetch
        $(document).ready(function(){
            //country
            var request = $.ajax({
                type: "GET",
                url: "{{  url('api/countries') }}",
                dataType : "json",
                timeout : 5000
            });
            request.done(function(response) {
                console.log(response);
                let contry = "";
                contry += `<option value="">choose country</option>`;
                response.data.forEach(function(item,index){
                    contry += `<option value="${item.id}">${item.name}</option>`;
                })
                $(".country").html(contry);
            });
        })
         //on change of country
        $(".country").change(function(){
            let selected_country_id = $(".country option:selected").val();
            //state
            var request = $.ajax({
                type: "GET",
                url: "{{  url('api/states') }}" + "/" + selected_country_id,
                dataType : "json",
                timeout : 5000
            });
            request.done(function(response) {
                console.log(response);
                let state = "";
                state += `<option value="">choose state</option>`;
                response.data.forEach(function(item,index){
                    state += `<option value="${item.id}">${item.name}</option>`;
                })
                $(".state").html(state);
            });
        })
        //on change of state
        $(".state").change(function(){ 
            console.log();
            let selected_state_id = $(".state option:selected").val();
            //city
            var request = $.ajax({
                type: "GET",
                url: "{{  url('api/cities/') }}" + "/" + selected_state_id,
                dataType : "json",
                timeout : 5000
            });
            request.done(function(response) {
                console.log(response);
                let city = "";
                city += `<option value="">choose city</option>`;
                response.data.forEach(function(item,index){
                    city += `<option value="${item.id}">${item.name}</option>`;
                })
                $(".city").html(city);
            });
        })
        $(".school_details").click(function(){
            $(".error").remove();
            let image = $("#image_upload").attr("data-url");
            let school_name = $(".school_name").val();
            let affiliation_num = $(".affiliation_num").val();
            let syllabus = $(".syllabus option:selected").val();
            let medium_of_school = $(".medium_of_school option:selected").val();
            let contact_name = $(".contact_name").val();
            let web_addr = $(".web_addr").val();
            let mob_num = $(".mob_num").val();
            let addr_line1 = $(".add_line1").val();
            let addr_line2 = $(".add_line2").val();
            let city = $(".city option:selected").val();
            let state = $(".state option:selected").val();
            let country = $(".country option:selected").val();
            let pincode = $(".pincode").val();
            let phoneNumberFormat = /^[\+]?([0-9][\s]?|[0-9]?)([(][0-9]{3}[)][\s]?|[0-9]{3}[-\s\.]?)[0-9]{3}[-\s\.]?[0-9]{4,6}$/;
            let pincodeFormat = /^(\d{4}|\d{6})$/;
            cont_btn_school_det();
                $(".School_Details").addClass("completed");
                $(".School_Details").removeClass("active");
            if(school_name!= "" && affiliation_num!="" && syllabus!=""&& medium_of_school!="" && contact_name!="" && web_addr!="" && mob_num!="" && phoneNumberFormat.test(mob_num) && addr_line1!="" && addr_line2!="" 
            && city!=""  && state!=""  && country!=""  && pincode!="" && pincodeFormat.test(pincode)){
                console.log("yess");
                
            }else{
                if(image == undefined){
                    $("#image_upload").parent().after(`<span class="error">* upload image</span>`);
                }
                if (school_name == "") {
                    $(".school_name").parent().append(`<span class="error">* Enter school name</span>`);
                } 
                if (affiliation_num == "") {
                    $(".affiliation_num").parent().append(`<span class="error">* Enter affiliation number</span>`);
                } 
                if (syllabus == "") {
                    $(".syllabus").parent().append(`<span class="error">* choose syllabus</span>`);
                } 
                if (medium_of_school == "") {
                    $(".medium_of_school").parent().append(`<span class="error">* choose medium</span>`);
                } 
                if (contact_name == "") {
                    $(".contact_name").parent().append(`<span class="error">* Enter contact name</span>`);
                } 
                if (web_addr == "") {
                    $(".web_addr").parent().append(`<span class="error">* Enter web address</span>`);
                } 
                if (mob_num == "") {
                    $(".mob_num").parent().append(`<span class="error">* Enter mobile number</span>`);
                } else if(!phoneNumberFormat.test(mob_num) ){
                    $(".mob_num").parent().append(`<span class="error">* Mobile number is not valid</span>`);
                }
                if (addr_line1 == "") {
                    $(".add_line1").parent().append(`<span class="error">* Enter address</span>`);
                } 
                if (city == "") {
                    $(".city").parent().append(`<span class="error">* choose city</span>`);
                } 
                if (state == "") {
                    $(".state").parent().append(`<span class="error">* choose state</span>`);
                } 
                if (country == "") {
                    $(".country").parent().append(`<span class="error">* choose country</span>`);
                } 
                if (pincode == "") {
                    $(".pincode").parent().append(`<span class="error">* Enter pincode</span>`);
                } else if(!pincodeFormat.test(pincode) ){
                    $(".pincode").parent().append(`<span class="error">* Pincode is not valid</span>`);
                }
            }
        })
        //subject cont btn
        $(".cont_btn_sub").click(function(){
            let csvInput = $('#csv_file_sub_upload').val();
            console.log(csvInput);
            console.log(csv_file_sub_upload.files[0]);
            if (csvInput !== "") {
                cont_btn_sub();
                $(".onboard_sub").addClass("completed");
                $(".onboard_sub").removeClass("active");
            }else{
                swal({
                    title: "Warning",
                    text: "upload csv",
                    icon: 'warning'
                })
            }
        })
        
        //teacher cont btn
        $(".cont_btn_teacher").click(function(){
            let csvInput = $('#csv_file_teacher_upload').val();
            //console.log(csvInput);
            console.log(csv_file_teacher_upload.files[0]);
            if (csvInput !== "") {
                cont_btn_teacher();
                $(".onboard_teacher").addClass("completed");
                $(".onboard_teacher").removeClass("active");
            }else{
                swal({
                    title: "Warning",
                    text: "upload csv",
                    icon: 'warning'
                })
            }
        })
         //class cont btn
         $(".cont_btn_class").click(function(){
            let csvInput = $('#csv_file_class_upload').val();
            console.log(csvInput);
            if (csvInput !== "") {
                cont_btn_class();
                $(".onboard_class").addClass("completed");
                $(".onboard_class").removeClass("active");
            }else{
                swal({
                    title: "Warning",
                    text: "upload csv",
                    icon: 'warning'
                })
            }
        })
        //submit
        $(".submit").click(function(){
            let csvInput = $('#csv_file_student_upload').val();
            let image = $("#image_upload").attr("data-url");
            let school_name = $(".school_name").val();
            let affiliation_num = $(".affiliation_num").val();
            let syllabus = $(".syllabus option:selected").val();
            let medium_of_school = $(".medium_of_school option:selected").val();
            let contact_name = $(".contact_name").val();
            let web_addr = $(".web_addr").val();
            let mob_num = $(".mob_num").val();
            let addr_line1 = $(".add_line1").val();
            let addr_line2 = $(".add_line2").val();
            let city = $(".city option:selected").val();
            let state = $(".state option:selected").val();
            let country = $(".country option:selected").val();
            let pincode = $(".pincode").val();
            if (csvInput !== "") {
                var myFormData = new FormData();
                myFormData.append('school_name', school_name);
                myFormData.append('affiliation_number', affiliation_num);
                myFormData.append('syllabus', syllabus);
                myFormData.append('medium_type', medium_of_school);
                myFormData.append('contact_name', contact_name);
                myFormData.append('contact_number', mob_num);
                myFormData.append('website', web_addr);
                myFormData.append('address_line_1', addr_line1);
                myFormData.append('address_line_2', addr_line2);
                myFormData.append('country_id', country);
                myFormData.append('state_id', state);
                myFormData.append('city_id', city);
                myFormData.append('pincode', pincode);
                myFormData.append('subject_csv', csv_file_sub_upload.files[0]);
                myFormData.append('teacher_csv', csv_file_teacher_upload.files[0]);
                myFormData.append('class_csv', csv_file_class_upload.files[0]);
                myFormData.append('student_csv', csv_file_student_upload.files[0]);
                console.log(myFormData);
                var request = $.ajax({
                    type: "POST",
                    url: "{{  url('api/school/onboard') }}",
                    headers: { 'Authorization': 'Bearer '+bearerToken},
                    data: myFormData,
                    processData: false, // important
                    contentType: false, // important
                    dataType : "json",
                    timeout : 5000
                });
                request.done(function(data) {
                    $(".onboard_student").addClass("completed");
                    $(".onboard_student").removeClass("active");
                    $("#exampleModal").modal('show');
                });
                request.fail(function(httpObj, textStatus) {
                    swal({
                        title: httpObj.responseJSON.status,
                        text: httpObj.responseJSON.message,
                        icon: textStatus,
                        button: "OK",
                    });
                });
            }else{
                swal({
                    title: "Warning",
                    text: "upload csv",
                    icon: 'warning'
                })
            }
        })
        console.log("ggg");
        //upload csv - code
        function file_upload_csv(file_id, view_id, replace_src) {
            var fileUpload = document.getElementById(file_id + "_upload");
            console.log(fileUpload);
            console.log(fileUpload.files);
            var files = !!fileUpload.files ? fileUpload.files : [];
            var regex = new RegExp("([a-zA-Z0-9\s_\\.\-:])+(.csv|.CSV)$");
            if (regex.test(files[0].type)) {
                if (typeof(fileUpload.files) != "undefined") {
                    var reader = new FileReader();
                    reader.readAsDataURL(fileUpload.files[0]);
                    reader.onload = function(e) {
                        console.log("hello");
                        $('#' + view_id).attr('src', replace_src);
                        //$('#' + file_id + '_valid').val("true");
                        $("#" + file_id + '_name').html(files[0].name);
                    }
                }
            }
        }
       
        $('.step-nav-btn').click(function(e) {
            $('.step').addClass('hidden');
            if (e.target.classList.contains('Continue-btn')) {
                let nxtEl = document.querySelector(`.${this.closest('.step').dataset.next}`);
                $(nxtEl).removeClass('hidden');
            } else if (e.target.closest('span').classList.contains('back-btn')) {
                let prevEl = document.querySelector(`.${this.dataset.previous}`);
                $(prevEl).removeClass('hidden');
            }
        })

        function cont_btn_school_det(){
            $(".step-1").addClass("hidden");
            $(".step-2").removeClass("hidden");
        }
        function cont_btn_sub(){
            $(".step-2").addClass("hidden");
            $(".step-3").removeClass("hidden");
        }
        function cont_btn_teacher(){
            $(".step-3").addClass("hidden");
            $(".step-4").removeClass("hidden");
        }
        function cont_btn_class(){
            $(".step-4").addClass("hidden");
            $(".step-5").removeClass("hidden");
        }
    </script>
    <script>
        //S3 bucket
        AWS.config.region = 'ap-south-1'; // 1. Enter your region
        AWS.config.credentials = new AWS.CognitoIdentityCredentials({
            IdentityPoolId: 'ap-south-1:95816cea-8e19-4805-b71d-2626c92ecb63', // 2. Enter your identity pool
        });
        AWS.config.credentials.get(function(err) {
            if (err) alert(err);
        });
        var bucket = new AWS.S3({
            params: {
                Bucket: "heycampusapp"
            }
        });

        $("#image_upload").change(function() {
            font_upload($(this).attr("id"));
            console.log($(this).attr("id"));
        });
        
        function font_upload(id) {
            var fileUpload = document.getElementById(id);
            var files = !!fileUpload.files ? fileUpload.files : [];
            var regex = new RegExp("[^\\s]+(.*?)\\.(jpg|jpeg|png|gif|JPG|JPEG|PNG|GIF|pdf)$");
            if (regex.test(files[0].type)) {
                if (typeof(fileUpload.files) != "undefined") {
                    var reader = new FileReader();
                    reader.readAsDataURL(fileUpload.files[0]);
                    reader.onload = function(e) {}
                }
            }
            var file = files[0];
            var str_type = fileUpload.files[0].type;
            var result_type = str_type.split(/[.\-=/_]/);
            var type_len = result_type[1].length+1;
            s3_img_file_upload(file, "save", id);
        }

        function s3_img_file_upload(file, type, id,type_len) {
            showPleaseWait();
            var seconds = new Date().getTime();
            seconds = parseInt(seconds);
            var filename = seconds + file.name.substr(file.name.length - type_len);
            var folder = "school_name/logo/";
            var url = "https://d3f4i5flr9o011.cloudfront.net/school_name/logo/" +filename;
            console.log(url);
            var objKey = folder + filename;
            console.log(objKey);
            var params = {
                Key: objKey,
                ContentType: file.type,
                Body: file
            };
            bucket.putObject(params, function(err, data) {
                if (err) {
                    alert('ERROR: ' + err);
                } else {
                    if (type == "save") {
                        $("#image_upload").attr("data-url", url);
                        $(".profile_img img").attr("src", url);
                    }
                    hidePleaseWait()
                }

            });
        }
        //waiting daialog  for uploading
        function showPleaseWait() {
            if (document.querySelector("#pleaseWaitDialog") == null) {
                var modalLoading = '<div class="modal" id="pleaseWaitDialog" data-backdrop="static" data-keyboard="false" role="dialog">\
                    <div class="modal-dialog">\
                        <div class="modal-content">\
                            <div class="modal-header">\
                                <h4 class="modal-title">Please wait...</h4>\
                            </div>\
                            <div class="modal-body">\
                                <div class="progress">\
                                <div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar"\
                                aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width:100%; height: 40px">\
                                </div>\
                                </div>\
                            </div>\
                        </div>\
                    </div>\
                </div>';
                $(document.body).append(modalLoading);
            }

            $("#pleaseWaitDialog").modal("show");
        }

        function hidePleaseWait() {
            $("#pleaseWaitDialog").modal("hide");
        }
    </script>
</body>

</html>