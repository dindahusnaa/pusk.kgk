
$('#loginUKM').submit(function(e) {

    e.preventDefault();

    let username = $('#__username').val();
    let password = $('#__password').val();

    $.ajax({
        url     : '/login/ukm',
        method  : "POST",
        headers : {"X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")},
        data    : {
            username: username,
            password: password
        },
        success : function(res) { //jika berhasil login
            console.log(res);
            Swal.fire({
                icon: 'success',
                title: 'Berhasil Login',
                showConfirmButton: false,
                timer: 1500
            })

            setTimeout(function() {
                window.location.href = '/ukm/dashboard';
            }, 2000)

        },
        error   : function(err) { //jika login gagal
            // console.log(err.responseJSON);
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: err.responseJSON.message,
            })   
        }
    })
}); 