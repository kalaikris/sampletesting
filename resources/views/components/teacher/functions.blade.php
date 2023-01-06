<script>
    let teacherToken = localStorage.getItem("teacherToken");
    $(document).ready(function() {
        if(teacherToken == '' || teacherToken == undefined){
                window.location.href = "login";
            }
    })
    function logout() {
                $.ajax({
                    headers: {
                    Authorization: "Bearer " + teacherToken,
                    },
                    dataType: "JSON",
                    type: "POST",
                    url: "{{  url('api/teacher/logout') }}",
                }).done(function (data1) {
                    console.log(data1);
                    localStorage.clear();
                    window.location.href = "login";
                    }).fail(function (httpObj, textStatus) {
                    console.log(httpObj);
                    console.log(textStatus);
                    swal({
                        title: httpObj.responseJSON.status,
                        text: httpObj.responseJSON.message,
                        icon: textStatus,
                    });
                    });
    }
</script>