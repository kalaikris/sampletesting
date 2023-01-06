<script>
    let superAdminToken = localStorage.getItem('superAdmintoken');
    $(document).ready(function() {
        if(superAdminToken == '' || superAdminToken == undefined){
                window.location.href = "login";
            }
    })

    function logout() {
                $.ajax({
                    headers: {
                    Authorization: "Bearer " + superAdminToken,
                    },
                    dataType: "JSON",
                    type: "POST",
                    url: "{{  url('api/super-admin/logout') }}",
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