$('#form-upload-file').on('submit', function(e) {

    e.preventDefault()

    let photo = $('#check-photo').val()
    let submit = $('#upload-btn')

    if (photo == '') {
        alert('Загрузите фото чека')
    } else {

        submit.prop('disabled', true)

        $.ajax({
            url: 'check/create',
            type: 'POST',
            data: new FormData(this),
            dataType: 'json',
            contentType: false,
            cache: false,
            processData: false,
        })
        .done(
            window.location.href = window.origin
        )
        .fail(
            error => console.log(error)
        )
    }
})
