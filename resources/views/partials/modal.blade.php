<div
    id="bk-form-modal"
    class="modal fade bd-example-modal-sm"
    tabindex="-1"
    role="dialog"
    aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">

    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Загрузка чека</h5>
                <button
                    class="close"
                    type="button"
                    data-dismiss="modal"
                    aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form id="form-upload-file" enctype="multipart/form-data">
                @csrf

                <div class="modal-body">
                    <input
                        type="file"
                        class="form-control-file"
                        id="check-photo"
                        name="photo"
                        accept=".jpg, .jpeg, .png">
                </div>

                <div class="modal-footer">
                    <button type="submit" id="upload-btn" class="btn-sm btn-success mr-0">
                        Загрузить
                    </button>
                    <button type="button" class="btn-sm btn-secondary" data-dismiss="modal">
                        Отмена
                    </button>
                </div>
            </form>

        </div>
    </div>
</div>
