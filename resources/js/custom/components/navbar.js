$('#logout-btn').on('click', e => {

    e.preventDefault()

    $.ajax({
        url: 'logout',
        type: 'POST',
        data: {
            '_token' : $('meta[name="csrf-token"]').attr('content')
        },
        success: () => window.location.href = window.origin
    })
})
