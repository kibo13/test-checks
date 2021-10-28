$('#upload-btn').on('click', e => {

    let photo = $('#check-img').val()

    if (photo == '') {
        alert('Необходимо прикрепить фото чека')
    } else {

        $.ajax({

            url: 'check/create',
            type: 'POST',
            data: {
                '_token' : $('meta[name="csrf-token"]').attr('content')
            },
            success: () => {
                //
            }

        })

    }

})
