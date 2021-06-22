$('.nav-item').removeClass('active')
$('#menu-member').addClass('active')

let searchParams = new URLSearchParams(window.location.search)
if(searchParams.get('id')) {
    get(BASE_URL+'/account?id='+searchParams.get('id')).then((res) => {
        $('#id').val(searchParams.get('id'))
        $('#email-group').addClass('is-filled')
        $('#button-submit').html('Ubah')
        if(res.data.role == 'superAdmin') $('#toggle-button').click()
        $('#email').val(res.data.email)
    })
}

var role = true
$('#toggle-button').on('click', (e) => {
    if(role) {
        $('#toggle-button').val('superAdmin')
        $('#toggle-text').html('Super admin')
        role = false
    }else {
        $('#toggle-button').val('user')
        $('#toggle-text').html('User biasa')
        role = true
    }
})

function btnConfirm(formID) {
    window.event.preventDefault()
    let validation  = true
    let form = $('#'+formID)

    let id = $(form.find('input[name="id"]')).val()
    let role = $(form.find('input[name="role"]')).val()
    let email = $(form.find('input[name="email"]')).val()
    let password = $('#password').val()
    let passwordConfirm = $('#passwordConfirm').val()
    console.log('aaa', email, role, password, passwordConfirm)
    
    if(role && email && password) {
        if(password == passwordConfirm) {
            let data = {
                "email": email,
                "password": password,
                "role": role
            }
            console.log('sasas', data)
            data = JSON.stringify(data)
            swal({
                title: 'Apakah anda yakin?',
                text: '',
                buttons:{
                    confirm: {
                        text : 'Ya',
                        className : 'btn btn-success'
                    },
                    cancel: {
                        visible: true,
                        text: 'Batal',
                        className: 'btn btn-danger'
                    }
                }
            }).then((status) => {
                if (status) {
                    swalLoading()
                    if(id) {
                        put(BASE_URL+'/account?id='+id, data).then((res) => {
                            console.log('success:', res)
                            swalLoading(false)
                            if(res.status) {
                                swal("Success!", 'Berhasil mendaftarkan member', "success", {
                                    buttons: false,
                                    closeOnClickOutside: false,
                                    timer: 2500
                                }).then(() => {
                                    location.reload()
                                })
                            }else {
                                swal("Failed!", res.message, "error", {
                                    buttons: false,
                                    closeOnClickOutside: false,
                                    timer: 3000
                                }).then(() => {
                                    // location.reload()
                                })
                            }
                        }).catch((err) => {
                            console.log('error:', err)
                            swalLoading(false)
                            swal("Failed!", 'Gagal mendaftarkan member', "error", {
                                buttons: false,
                                closeOnClickOutside: false,
                                timer: 3000
                            }).then(() => {
                                // location.reload()
                            })
                        })
                    }else {
                        post(BASE_URL+'/account/signup', data).then((res) => {
                            console.log('success:', res)
                            swalLoading(false)
                            if(res.status) {
                                swal("Success!", 'Berhasil mendaftarkan member', "success", {
                                    buttons: false,
                                    closeOnClickOutside: false,
                                    timer: 2500
                                }).then(() => {
                                    location.reload()
                                })
                            }else {
                                swal("Failed!", res.message, "error", {
                                    buttons: false,
                                    closeOnClickOutside: false,
                                    timer: 3000
                                }).then(() => {
                                    // location.reload()
                                })
                            }
                        }).catch((err) => {
                            console.log('error:', err)
                            swalLoading(false)
                            swal("Failed!", 'Gagal mendaftarkan member', "error", {
                                buttons: false,
                                closeOnClickOutside: false,
                                timer: 3000
                            }).then(() => {
                                // location.reload()
                            })
                        })
                    }
                } else {
                    swal.close();
                }
            })
        }else {
            swal("Failed!", 'Konfirmasi password tidak sama', "error", {
                buttons: false,
                closeOnClickOutside: false,
                timer: 3000
            }).then(() => {
                // location.reload()
            })
        }
    }else {
        swal("Failed!", 'Semua harus diisi', "error", {
            buttons: false,
            closeOnClickOutside: false,
            timer: 2000
        }).then(() => {
        })
    }
}