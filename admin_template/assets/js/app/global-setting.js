async function get(url) {
    try {
        let res = await $.ajax({
            url: url,
            type: 'GET',
            headers: {
                'Content-Type': 'application/json',
                'X-API-KEY': API_KEY,
                'Authorization': 'Bearer '+SESSION
            },
            success: function(result) {
                // console.log('success:', result)
                return result
            },
            error: function(error) {
                // console.log('error:', error.responseJSON)
                return error.responseJSON
            }
        })
        return res
    }catch(e) {
        // console.log('e:', e.responseJSON)
        return e.responseJSON
    }
}

async function post(url, data) {
    try {
        let res = await $.ajax({
            url: url,
            type: 'POST',
            data: data,
            headers: {
                'Content-Type': 'application/json',
                'X-API-KEY': API_KEY,
                'Authorization': 'Bearer '+SESSION
            },
            success: function(result) {
                // console.log('success:', result)
                return result
            },
            error: function(error) {
                // console.log('error:', error.responseJSON)
                return error.responseJSON
            }
        })
        return res
    }catch(e) {
        // console.log('e:', e.responseJSON)
        return e.responseJSON
    }
}

async function put(url, data) {
    try {
        let res = await $.ajax({
            url: url,
            type: 'PUT',
            data: data,
            headers: {
                'Content-Type': 'application/json',
                'X-API-KEY': API_KEY,
                'Authorization': 'Bearer '+SESSION
            },
            success: function(result) {
                console.log('success:', result)
                return result
            },
            error: function(error) {
                console.log('error:', error.responseJSON)
                return error.responseJSON
            }
        })
        return res
    }catch(e) {
        // console.log('e:', e.responseJSON)
        return e.responseJSON
    }
}

async function deleteData(url) {
    try {
        let res = await $.ajax({
            url: url,
            type: 'DELETE',
            headers: {
                'Content-Type': 'application/json',
                'X-API-KEY': API_KEY,
                'Authorization': 'Bearer '+SESSION
            },
            success: function(result) {
                // console.log('success:', result)
                return result
            },
            error: function(error) {
                // console.log('error:', error.responseJSON)
                return error.responseJSON
            }
        })
        return res
    }catch(e) {
        // console.log('e:', e.responseJSON)
        return e.responseJSON
    }
}

async function confirmDelete(url) {
    swal("Are you sure you want to delete it?", {
        buttons: {
            cancel: "Cancel",
            confirm: {
                text: "Delete",
                value: "delete",
            }
        },
    })
    .then(async (value) => {
        switch (value) {
            case "delete":
                let checkDelete = await deleteData(url)
                if('status' in checkDelete) {
                    if(checkDelete.status) {
                        swal("Success!", checkDelete.message, "success", {
                            buttons: false,
                            closeOnClickOutside: false,
                            timer: 1200
                        }).then(() => {
                            location.reload()
                        })
                    }else {
                        swal("Failed!", checkDelete.message, "error", {
                            buttons: false,
                            closeOnClickOutside: false,
                            timer: 1200
                        }).then(() => {
                            location.reload()  
                        })
                    }
                }else {
                    swal("Failed!", "Failed to delete data", "error", {
                        buttons: false,
                        closeOnClickOutside: false,
                        timer: 1200
                    }).then(() => {
                        location.reload()  
                    })
                }
                break
            default:
                swal.close()
                return null
        }
    })
}

function emptyForm(...args) {
    if(args.length > 0) {
        args.forEach((e) => {
            if($($('#'+e)).get(0).tagName == 'INPUT') $('#'+e).val('')
            else if($($('#'+e)).get(0).tagName == 'SELECT') $('#'+e).prop('selectedIndex',0)
        })
    }
}

function limitText(text, limit = 100) { 
    if(text.length > limit) return text.substring(0, limit) + '....'
    return text
}

String.prototype.capitalize = function() {
    return this.charAt(0).toUpperCase() + this.slice(1);
}

function formatDate(dateParam) {
    let splitDate = dateParam.split('-')
    let date = splitDate[0]
    let month = splitDate[1]
    let year = splitDate[2]

    let monthName = [
        'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni',
        'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'
    ]

    return `${date}, ${monthName[month-1]} ${year}`
}

function checkDate(dateParam) {
    let dateNow = new Date()
    let date = dateNow.getDate()
    let month = dateNow.getMonth()+1
    let year = dateNow.getFullYear()
    
    if(dateParam == `${date}-${month}-${year}`) {
        return 'Hari ini'
    }else if(dateParam == `${date+1}-${month}-${year}`) {
        return 'Besok'
    }else {
        return formatDate(dateParam)
    }
}

// function loading proses ajax
function swalLoading(status = true) {
    if(status) {
        swal({
            title: "Mohon tunggu...",
            text: "Jangan keluar dari halaman ini.",
            // icon: BASE_URL+'assets/img/components/806.gif',
            button: false,
            closeOnClickOutside: false
        })
    }else {
        swal.close()
    }
}