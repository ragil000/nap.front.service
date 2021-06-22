$('.nav-item').removeClass('active')
$('#menu-task').addClass('active')

var SELF = ''
var ACTIVE = ''
var REPEATED = ''

function scheduleDetail(id) {
    get(BASE_URL+'/schedule?id='+id).then((res) => {
        $('#modal-schedule-detail').html(res.data.message)
        $('#modal-schedule').modal('show')
    })
}

async function setData(page=1) {
    let query = '?page='+page+'&self='+SELF+'&active='+ACTIVE+'&repeated='+REPEATED
    let data = await get(BASE_URL+'/schedule'+query)

    if(data && data['status']) {
        let html = ''
        let count = 1+((page-1)*10)
        data['data'].forEach((result) => {
            let scheduleDay = {
                'monday': 'Senin',
                'tuesday': 'Selasa',
                'wednesday': 'Rabu',
                'thursday': 'Kamis',
                'friday': 'Jum\'at',
                'saturday': 'Sabtu',
                'sunday': 'Minggu'
            }

            let scheduleType = {
                'repeated': '<i class="material-icons text-sm-13 text-info">repeat</i> Berulang',
                'nonRepeated': '<i class="material-icons text-sm-13 text-danger">repeat_one</i> Sekali'
            }

            let scheduleStatus = {
                'active':   '<div class="togglebutton" onclick="toogleStatus(this, \''+result._id+'\')">'+
                                '<label>'+
                                    '<input type="checkbox" checked>'+
                                    '<span class="toggle"></span>'+
                                    '<span class="status-text">Aktif</span>'+
                                '</label>'+
                            '</div>',
                'progress':     '<div class="togglebutton">'+
                                    '<label>'+
                                        '<input type="checkbox" checked disabled>'+
                                        '<span class="toggle"></span>'+
                                        '<span class="status-text">Proses</span>'+
                                    '</label>'+
                                '</div>',
                'nonactive':    '<div class="togglebutton" '+(result.scheduleType == 'nonRepeated' ? '' : 'onclick="toogleStatus(this, \''+result._id+'\')"')+'>'+
                                    '<label>'+
                                        '<input type="checkbox" '+(result.scheduleType == 'nonRepeated' ? 'disabled' : '')+'>'+
                                        '<span class="toggle"></span>'+
                                        '<span class="status-text">Tidak aktif</span>'+
                                    '</label>'+
                                '</div>'
            }

            let schedulePlatform = {
                'email':    '<span>'+
                                '<i class="material-icons text-sm-13 text-default">mail</i> '+
                                result.platform.capitalize()+
                            '</span>',
                'whatsapp': '<span>'+
                                '<i class="material-icons text-sm-13 text-secondary">chat</i> '+
                                result.platform.capitalize()+
                            '</span>'
            }

            let scheduleArray = {
                'repeated': {
                    'active':   '<i class="material-icons text-sm-13 text-success">history</i>'+
                                (result.lastSent ? 'Terakhir dikirim <span class="badge badge-info">'+checkDate(result.lastSent)+'</span>' : 'Menunggu'),
                    'progress': '<i class="material-icons text-sm-13 text-warning">history</i>'+
                                (result.lastSent ? 'Terakhir dikirim <span class="badge badge-warning">'+checkDate(result.lastSent)+'</span>' : 'Dikirim'),
                    'nonactive':    '<i class="material-icons text-sm-13 text-primary">history</i>'+
                                    (result.lastSent ? 'Terakhir dikirim <span class="badge badge-primary">'+checkDate(result.lastSent)+'</span>' : 'Selesai')
                },
                'nonRepeated': {
                    'active':   '<i class="material-icons text-sm-13 text-success">history</i>'+
                                'Menunggu',
                    'progress': '<i class="material-icons text-sm-13 text-warning">history</i>'+
                                'Dikirim',
                    'nonactive':    '<i class="material-icons text-sm-13 text-primary">history</i>'+
                                    'Selesai',
                }
            }
            let row =   '<tr>'+
                            '<td class="text-center">'+count+'</td>'+
                            '<td class="">'+
                                '<div class="dropdown">'+
                                    '<a class="text-info" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">'+
                                        '<span class="material-icons">'+
                                        'more_vert'+
                                        '</span>'+
                                    '</a>'+
                                    '<span class="badge badge-info">'+result.createdBy+'</span>'+
                                    '<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow" style="">'+
                                    '<a class="dropdown-item" data-toggle="modal" onclick="scheduleDetail(\''+result._id+'\')" href="#">Lihat Pesan</a>'+
                                        '<a class="dropdown-item text-danger" onclick="btnDelete(\''+result._id+'\')" href="#">Hapus</a>'+
                                    '</div>'+
                                '</div>'+
                            '</td>'+
                            '<td class="text-center">'+
                                schedulePlatform[result.platform]+
                            '</td>'+
                            '<td class="text-center">'+
                                '<span>'+
                                    scheduleType[result.scheduleType]+
                               '</span>'+
                            '</td>'+
                            '<td class="text-center">'+
                                '<span>'
                        if(Array.isArray(result.scheduleTime.days)) {
                            let dayCount = 0
                            result.scheduleTime.days.forEach((day) => {
                                if(dayCount == 0) row += scheduleDay[day]
                                else row += ', '+scheduleDay[day]
                                
                                dayCount++
                            })
                        }else {
                            row += result.scheduleTime.days
                        }
                        row +=   '</span>'+
                                ' <span class="badge badge-warning">'+result.scheduleTime.hours+':'+result.scheduleTime.minutes+'</span>'+
                            '</td>'+
                            '<td class="text-center">'+
                                '<span>'+
                                scheduleArray[result.scheduleType][result.status]+
                                '</span>'+
                            '</td>'+
                            '<td class="text-center">'+
                                scheduleStatus[result.status]+
                            '</td>'+
                        '</tr>'

            html += row
            count++
        })
        $('#data-table').html(html)
        // $('[data-toggle="tooltip"]').tooltip()
        // $('.dropdown-toggle').dropdown()
    }else {
        let html =  '<tr>'+
                        '<td colspan="7" class="text-center">Data is empty.</td>'+
                    '</tr>'
        $('#data-table').html(html)
    }
    return data
}

function setPagination(data) {
    dataSource = []
    if(data['totalData']) {
        for(let i=0; i < data['totalData']; i++) {
            dataSource.push(i+1)
        }
    }
    var container = $('#pagination');
    container.pagination({
        dataSource: dataSource,
        // locator: 'items',
        totalNumber: 10,
        pageSize: data['limit'],
        showPageNumbers: true,
        showPrevious: true,
        showNext: true,
        // showNavigator: true,
        showFirstOnEllipsisShow: true,
        showLastOnEllipsisShow: true,
        ulClassName: 'pagination',
        callback: function(response, pagination) {
            // console.log('cccc', pagination.pageNumber)
            setData(pagination.pageNumber)
    
            // forced styling
            let liElements = $('ul.pagination>li')
            for(i=0; i < liElements.length; i++) {
                $(liElements[i]).addClass('page-item')
                $($(liElements[i]).find('a')).addClass('page-link')
            }
        }
    })
    
    // forced styling
    let liElements = $('ul.pagination>li')
    for(i=0; i < liElements.length; i++) {
        $(liElements[i]).addClass('page-item')
        $($(liElements[i]).find('a')).addClass('page-link')
    }
}

function searching(element) {
    let query = $(element).val()
    STATUS = query
    setData(1).then((result) => {
        if(result['totalData'] != (result['data'] ? result['data'].length : 0)) {
            setPagination(result)
        }
    })
}

function actionDelete(_id) {
    let url = BASE_URL+'api/buzzer_account?_id='+_id
    confirmDelete(url)
}

function toogleStatus(element, id) {
    if(window.event.detail == 1) {
        let toogleStatus = {
            'Aktif': 'Tidak aktif',
            'Tidak aktif': 'Aktif'
        }
        let statusText = $($(element).find('.status-text'))
        let statusTextValue = statusText.html()
        statusText.html(toogleStatus[statusTextValue])
        let realStatus = {
            'Aktif': 'active',
            'Tidak aktif': 'nonactive'
        }

        let data = {
            'status': realStatus[toogleStatus[statusTextValue]]
        }
        data = JSON.stringify(data)
        put(BASE_URL+'/schedule?put=status&id='+id, data)
    }
}

$('#toggle-button-self').on('click', (e) => {
    if(SELF == 'yes') {
        SELF = ''
    }else {
        SELF = 'yes'
    }
    setData(1).then((result) => {
        if(result['totalData'] != (result['data'] ? result['data'].length : null)) {
            setPagination(result)
        }
    })
})

$('#toggle-button-active').on('click', (e) => {
    if(ACTIVE == 'yes') {
        ACTIVE = ''
    }else {
        ACTIVE = 'yes'
    }
    setData(1).then((result) => {
        if(result['totalData'] != (result['data'] ? result['data'].length : null)) {
            setPagination(result)
        }
    })
})

$('#toggle-button-repeated').on('click', (e) => {
    if(REPEATED == 'yes') {
        REPEATED = ''
    }else {
        REPEATED = 'yes'
    }
    setData(1).then((result) => {
        if(result['totalData'] != (result['data'] ? result['data'].length : null)) {
            setPagination(result)
        }
    })
})

$(document).ready(() => {
    setData(1).then((result) => {
        if(result['totalData'] != (result['data'] ? result['data'].length : null)) {
            setPagination(result)
        }
    })
})

function btnDelete(id) {
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
        if(status) {
            deleteData(BASE_URL+'/schedule?id='+id).then((res) => {
                swalLoading(false)
                if(res.status) {
                    swal("Success!", 'Berhasil menghapus tugas', "success", {
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
                swal("Failed!", 'Gagal menghapus tugas', "error", {
                    buttons: false,
                    closeOnClickOutside: false,
                    timer: 3000
                }).then(() => {
                    // location.reload()
                })
            })
        }
    })
}