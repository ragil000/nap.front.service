$('.nav-item').removeClass('active')
$('#menu-member').addClass('active')

var ROLE = ''
var STATUS = ''

async function setData(page=1) {
    let query = '?page='+page+'&role='+ROLE+'&status='+STATUS
    let data = await get(BASE_URL+'/account'+query)

    if(data && data['status']) {
        let html = ''
        let count = 1+((page-1)*10)
        data['data'].forEach((result) => {
            let row =   '<tr>'+
                            '<td class="text-center">'+count+'</td>'+
                            '<td class="text-center">'+
                                result.email+
                            '</td>'+
                            '<td class="text-center">'+
                                '<span class="badge '+(result.role == 'superAdmin' ? 'badge-warning' : 'badge-info' )+'">'+result.role+'</span>'+
                            '</td>'+
                            '<td class="text-center">'+
                                '<span class="badge '+(result.status == 'active' ? 'badge-info' : 'badge-danger' )+'">'+result.status+'</span>'+
                            '</td>'+
                            '<td class="text-center">'+
                                '<div class="dropdown">'+
                                    '<a class="text-info" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">'+
                                        '<span class="material-icons">'+
                                        'drag_indicator'+
                                        '</span>'+
                                    '</a>'+
                                    '<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow" style="">'+
                                       '<a class="dropdown-item" href="'+`${BASE_URL_FRONT}admin/member/form?id=`+result._id+'">Ubah</a>'+
                                        '<a class="dropdown-item text-danger" onclick="btnDelete(\''+result._id+'\')" href="#">Hapus</a>'+
                                    '</div>'+
                                '</div>'+
                            '</td>'

            html += row
            count++
        })
        $('#data-table').html(html)
        // $('[data-toggle="tooltip"]').tooltip()
        // $('.dropdown-toggle').dropdown()
    }else {
        let html =  '<tr>'+
                        '<td colspan="5" class="text-center">Data is empty.</td>'+
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
            deleteData(BASE_URL+'/account?id='+id).then((res) => {
                swalLoading(false)
                if(res.status) {
                    swal("Success!", 'Berhasil menghapus member', "success", {
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
                swal("Failed!", 'Gagal menghapus member', "error", {
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