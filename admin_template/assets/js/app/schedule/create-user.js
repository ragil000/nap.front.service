$('.nav-item').removeClass('active')
$('#menu-task').addClass('active')

// email secsion
$('#multi-email').amsifySuggestags({
    trimValue: true,
	lowercase: true,
	isEmail: true,
})

$('.amsify-suggestags-input').removeAttr('placeholder')

$('.amsify-suggestags-input-area').on('click', (e) => {
    $('#email-group').addClass('is-focused')
})

$('#datepicker-email').on('click', (e) => {
    $('#date-group-email').addClass('is-filled')
})

$('#datepicker-email').datepicker({
    dateFormat: 'd-m-yyyy',
    minDate: new Date(),
    disableNavWhenOutOfRange: true,
})

var emailEditor
ClassicEditor
    .create( document.querySelector('#editor-message-email'), {
        removePlugins: ['ImageUpload', 'MediaEmbed'],
    })
    .then( editor => {
        // console.log('iki', Array.from( editor.ui.componentFactory.names() ))
        // $('.ck-file-dialog-button').remove()
        // $($('.ck.ck-dropdown').get(2)).remove()
        // console.log( editor );
        emailEditor = editor
    } )
    .catch( error => {
        // console.error( error );
    } );

$('#hours-email').timepicker()

$('#days-group-email').hide()
var displayGroupEmail = true
$('#toggle-button-email').on('click', (e) => {
    if(displayGroupEmail) {
        $('#toggle-button-email').val('repeated')
        $('#toggle-text-email').html('Berulang')
        $('#days-group-email').show()
        $('#date-group-email').hide()
        displayGroupEmail = false
    }else {
        $('#toggle-button-email').val('nonRepeated')
        $('#toggle-text-email').html('Tidak berulang')
        $('#days-group-email').hide()
        $('#date-group-email').show()
        displayGroupEmail = true
    }
})

// whatsapp secsion
$('#multi-whatsapp').amsifySuggestags({
    trimValue: true,
	lowercase: true,
	isPhone: true,
})

$('.amsify-suggestags-input').removeAttr('placeholder')

$('.amsify-suggestags-input-area').on('click', (e) => {
    $('#phone-group').addClass('is-focused')
})

$('#datepicker-whatsapp').on('click', (e) => {
    $('#date-group-whatsapp').addClass('is-filled')
})

$('#datepicker-whatsapp').datepicker({
    dateFormat: 'd-m-yyyy',
    minDate: new Date(),
    disableNavWhenOutOfRange: true,
})

$('#hours-whatsapp').timepicker()

$('#days-group-whatsapp').hide()
var displayGroupPhone = true
$('#toggle-button-whatsapp').on('click', (e) => {
    if(displayGroupPhone) {
        $('#toggle-button-whatsapp').val('repeated')
        $('#toggle-text-whatsapp').html('Berulang')
        $('#days-group-whatsapp').show()
        $('#date-group-whatsapp').hide()
        displayGroupPhone = false
    }else {
        $('#toggle-button-whatsapp').val('nonRepeated')
        $('#toggle-text-whatsapp').html('Tidak berulang')
        $('#days-group-whatsapp').hide()
        $('#date-group-whatsapp').show()
        displayGroupPhone = true
    }
})

function btnConfirm(formID) {
    window.event.preventDefault()
    let validation  = true
    let form = $('#'+formID)

    let scheduleType = $(form.find('input[name="scheduleType"]')).val()
    let platform = $(form.find('input[name="platform"]')).val()
    let hours = $(form.find('input[name="hours"]')).val()
    let date = $(form.find('input[name="date"]')).val()
    let days = $('input[name="days[]"]:checked').map(function(_, el) {
        return $(el).val();
    }).get()
    let receivers = $(form.find('input[name="receivers"]')).val()
    let message = (formID == 'form-whatsapp' ? $(form.find('textarea[name="message"]')).val() : emailEditor.getData())

    console.log('sss', scheduleType, platform, hours, date, days, (receivers.length ? receivers.split(',') : receivers), message)
    
    if(scheduleType && platform && hours && (date || days.length) && receivers.length && message) {
        let hoursSplit = hours.split(':')
        let data = {
            "receivers": receivers.split(','),
            "message": message,
            "platform": platform,
            "scheduleType": scheduleType,
            "hours": parseInt(hoursSplit[0]),
            "minutes": parseInt(hoursSplit[1]),
            "days": (scheduleType == 'repeated' ? days : date)
        }
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
                post(BASE_URL+'/schedule', data).then((res) => {
                    console.log('success:', res)
                    swalLoading(false)
                    if(res.status) {
                        swal("Success!", 'Berhasil menambahkan tugas', "success", {
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
                    swal("Failed!", 'Gagal menambahkan tugas', "error", {
                        buttons: false,
                        closeOnClickOutside: false,
                        timer: 3000
                    }).then(() => {
                        // location.reload()
                    })
                })
            } else {
                swal.close();
            }
        })
    }else {
        swal("Failed!", 'Semua harus diisi', "error", {
            buttons: false,
            closeOnClickOutside: false,
            timer: 2000
        }).then(() => {
        })
    }
}