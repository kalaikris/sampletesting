function view(){
	$('#school_config').toggleClass('hidden');
	$('#edit_class').toggleClass('hidden');
}
function set_time(){
	$('#school_config').toggleClass('hidden');
	$('#set_time').toggleClass('hidden');
}


// .....Class Management....
function class_management_view(){
	$('.class_manag').toggleClass('hidden');
	$('#class_management_view').toggleClass('hidden');
}

function back_management_view(){
	$('#class_management_view').toggleClass('hidden');
	$('#student_view').toggleClass('hidden');
}




// .............//Student Management
function student_view(){
	$('.Student_details').toggleClass('hidden');
	$('#student_view').toggleClass('hidden');
}
function edit_student_view(){
	$('#student_view').toggleClass('hidden');
	$('#edit_student_view').toggleClass('hidden');
}

function student_continue_btn(){
	$('#edit_student_view').toggleClass('hidden');
	$('#student_continue_btn').toggleClass('hidden');
}
function student_continue_edit(){
	$('#student_continue_btn').toggleClass('hidden');
	$('#student_continue_edit').toggleClass('hidden');
}



// .............//Teacher Management
function student_views(){
	$('.Student_details').toggleClass('hidden');
	$('#student_views').toggleClass('hidden');
}
function student(){
	$('.Student_details').toggleClass('hidden');
	$('#student').toggleClass('hidden');
}
function teacher_view(){
	$('.Student_details').toggleClass('hidden');
	$('#teacher_view').toggleClass('hidden');
}

function continue_btns(){
	$('#teacher_view').toggleClass('hidden');
	$('#continue_btns').toggleClass('hidden');
}
function continue_step3(){
	$('#continue_btns').toggleClass('hidden');
	$('#continue_step3').toggleClass('hidden');
}



function edit_teacher_view(){
	$('#student_views').toggleClass('hidden');
	$('#edit_teacher_view').toggleClass('hidden');
}

function continue_btn(){
	$('#edit_teacher_view').toggleClass('hidden');
	$('#continue_btn').toggleClass('hidden');
}
function continue_edit(){
	$('#continue_btn').toggleClass('hidden');
	$('#continue_edit').toggleClass('hidden');
}




// .............//Admission Management
function reviewed(){
	$('.Student_details').toggleClass('hidden');
	$('#reviewed').toggleClass('hidden');
}
function rejected(){
	$('.Student_details').toggleClass('hidden');
	$('#rejected').toggleClass('hidden');
}

function onboarded(){
	$('.Student_details').toggleClass('hidden');
	$('#onboarded').toggleClass('hidden');
}





// .............//content Management
function content_views(){
	$('.Student_details').toggleClass('hidden');
	$('#content_views').toggleClass('hidden');
}

function test_views(){
	$('#content_views').toggleClass('hidden');
	$('#test_views').toggleClass('hidden');
}



const currentLocation = location.href;
const menuItems = document.querySelectorAll ('.nav-link');
const menuLength = menuItems.length;
//            console.log(menuLength)
  for (let i = 0; i < menuLength; i++){
//                console.log(i);
	if(menuItems[i].href === currentLocation) {
//                  console.log(i);
	  menuItems[i].classList.add ("active-sidemenu");
	  }
  }


















