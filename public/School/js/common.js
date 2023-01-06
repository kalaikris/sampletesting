let bearerToken = localStorage.getItem("BearerTokenSchool");
//float numbers
$('.floatOnly').keypress(function(event) {
    if ((event.which != 46 || $(this).val().indexOf('.') != -1) && (event.which < 48 || event.which > 57)) {
        event.preventDefault();
    }
  }).on('paste', function (event) {
    if (event.originalEvent.clipboardData.getData('Text').match(/[^\d]/)) {
        event.preventDefault();
    }
  });
  //numbers
  $('.numberOnly').keypress(function(e) {
    var charCode = (e.which) ? e.which : event.keyCode    
    if (String.fromCharCode(charCode).match(/[^0-9]/g))    
    return false;  
  }).on('paste', function (event) {
    var $this = $(this);  
    setTimeout(function () {  
        $this.val($this.val().replace(/[^0-9]/g, ''));  
    }, 5); 
  });
  //alphabets
$(".alphabetsOnly").keypress(function(e){
    return (event.charCode > 64 && 
        event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || (event.charCode == 32)
  })
