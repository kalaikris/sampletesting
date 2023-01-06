        <!DOCTYPE html>
        <html lang="en">
        <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Hey Campus.AI</title>
        <link rel="stylesheet" href="{{ asset('Teacher/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('Teacher/css/jquery.dataTables.min.css') }}">
        <!----======== CSS ======== -->
        <link rel="stylesheet" href="{{ asset('Teacher/css/main.css') }}">
        <link rel="stylesheet" href="{{ asset('Teacher/css/common.css') }}">
        <link rel="stylesheet" href="{{ asset('Teacher/css/style.css') }}">
        <!--<title>Dashboard Sidebar Menu</title>-->
        <style>
    
        </style>
        </head>

        <body>
            <div class="se-pre-con" style="display: none;"></div>
        <div class="mani">
        <!-- ......sidebar.... -->
        <x-teacher.sidebar/>

        <!-- .....main..... -->
        <main class="home">
            <x-teacher.headerComponent/>
            
            <div class="boder_bottom"></div>

            <section class="personal-content">
                <div class="viewclass_form">
                    <div class="inv_from">
                        <h2>My Classes</h2>
                        <p class="totaltableclasses">Total classes - 5</p>
                    </div>
                    <div class="listinvite">
                        <a id="view_grid_id" onclick="view_grid_fun()"><img alt="" src="{{ asset('Teacher/asset/teacher/grid.svg') }}" class="grid"></a>
                        <a id="view_list_id" onclick="view_list_fun()"><img alt="" src="{{ asset('Teacher/asset/teacher/list.svg') }}" class="list"></a>
                    </div>
                </div>

                <div class="table_data" id="table_data">
                    <table id="table_id" class="table table-striped table-bordered dataTable no-footer">
                        <thead>
                            <tr>
                                <th>S.No</th>
                                <th>Class</th>
                                <th>Division</th>
                                <th>Total students</th>
                                <th>Subject</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1</td>
                            <td>Alpha School</td>
                            <td>muekigi@wazvejtow.net</td>
                            <td>28 Jan 2022</td>
                            <td><p class="onboard_view">Onboarded</p></td>
                            <td><a href="" class="view_option"><img alt="" src="{{ asset('Teacher/asset/teacher/view.svg') }}" class="viewsopt"><span>View</span></a></td>
                            <td><button class="btnclass" onclick="classviews()">Your Class</button></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>ORCHIDS The International School</td>
                            <td>huceida@kumegge.com</td>
                            <td>04 Aug 2022</td>
                            <td><p class="pending_view">Pending</p></td>
                            <td><a href="" class="view_option"><img alt="" src="{{ asset('Teacher/asset/teacher/view.svg') }}" class="viewsopt"><span>View</span></a></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Chettinad Vidyashram</td>
                            <td>huceida@kumegge.com</td>
                            <td>04 Aug 2022</td>
                            <td><p class="pending_view">Pending</p></td>
                            <td><a href="" class="view_option"><img alt="" src="{{ asset('Teacher/asset/teacher/view.svg') }}" class="viewsopt"><span>View</span></a></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>St. Britto’s Academy</td>
                            <td>huceida@kumegge.com</td>
                            <td>04 Aug 2022</td>
                            <td><p class="onboard_view">Onboarded</p></td>
                            <td><a href="" class="view_option"><img alt="" src="{{ asset('Teacher/asset/teacher/view.svg') }}" class="viewsopt"><span>View</span></a></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Sishya School</td>
                            <td>huceida@kumegge.com</td>
                            <td>04 Aug 2022</td>
                            <td><p class="onboard_view">Onboarded</p></td>
                            <td><a href="" class="view_option"><img alt="" src="{{ asset('Teacher/asset/teacher/view.svg') }}" class="viewsopt"><span>View</span></a></td>
                            <td></td>
                        </tr>
                        </tbody>
                    </table>
                </div>

                <div class="grid_data" id="grid_data">
                    <div class="grid_view grid_active">
                        <div class="class_list">
                            <h2>Class 6 A </h2>
                            <span><a class="class_btn" onclick="classview()">Your Class</a></span>
                         </div>
                        <p>Subject : English</p>
                        <p>Total Students : 12</p>
                    </div>

                    <div class="grid_view">
                    <div class="class_list">
                        <h2>Class 7 C</h2></div>
                        <p>Subject : English</p>
                        <p>Total Students : 23</p>
                    </div>

                    <div class="grid_view">
                    <div class="class_list">
                        <h2>Class 7 F </h2></div>
                        <p>Subject : English</p>
                        <p>Total Students : 34</p>
                    </div>

                    <div class="grid_view">
                    <div class="class_list">
                        <h2>Class 9 A </h2></div>
                        <p>Subject : Social Science</p>
                        <p>Total Students : 36</p>
                    </div>

                    <div class="grid_view">
                    <div class="class_list">
                        <h2>Class 10 A </h2></div>
                        <p>Subject : Social Science</p>
                        <p>Total Students : 32</p>
                    </div>
                    
                </div>
            </section>


        </main>
        </div>
        <script src="{{ asset('Teacher/js/jquery.min.js') }}"></script>
        <script src="{{ asset('Teacher/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('Teacher/js/fontawesome.js') }}"></script>
        
        <!-- <script src="{{ asset('Teacher/js/common.js') }}"></script> -->
        <script src="{{ asset('Teacher/js/sweetalert.min.js') }}" ></script>
        <script type="text/javascript" src="{{ asset('Teacher/js/jquery.dataTables.js') }}"></script>
        <x-teacher.functions/>
        <script>
            
            const body = document.querySelector('body'),
            sidebar = body.querySelector('nav'),
            toggle = body.querySelector(".toggle");


            toggle.addEventListener("click", () => {
            sidebar.classList.toggle("close");
            })

            function view_list_fun(){
                $("#table_data").show();
                $("#view_grid_id").show();
                $("#view_list_id").hide();
                $("#grid_data").hide();
                
            }
            function view_grid_fun(){
                $("#grid_data").show();
                $("#view_list_id").show();
                $("#view_grid_id").hide();
                $("#table_data").hide();
            }

                function classviews(){
                    
                    let form = `<form id="tokenform" method="post" action="class_details">
                                @csrf
                            <input hidden type="text" value="R5A11621I3UL" name="classToken">
                        </form>`
                $('body').append(form);
                $('#tokenform').submit();
                    //window.location.href="class_details";
                }
                
                
                
            $(document).ready( function () {
                $('#table_id').DataTable({
                //                "scrollX": true,
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
            $(document).ready( function() {
                fetchTeacherClasses();
            })
            $(document).ready( function () {
                // Animate loader off screen
                $(".se-pre-con").show();
                $(".se-pre-con").fadeOut(1000);

                $(".mani").show();
                $(".myclass").addClass('showactive');
            });

            function fetchTeacherClasses(){

            }
            
        </script>
        </body>

        </html>