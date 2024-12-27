
$(document).ready(function () {

    var modal = $('#modalAssoc')
    var modalTitleLabel = modal.find('#modalAssocLabel')
    var modalNumberInput = modal.find('#numberInput')
    var modalWordInput = modal.find('#wordInput')
    var modalUrlInput = modal.find('#urlInput')
    var imgAssocContainer = modal.find('#img-assoc-container-modal');
    var btnModal = modal.find('#btnModalAction')

    modal[0].addEventListener('show.bs.modal', function (event) {
        var clicked = event.relatedTarget

        var modalType = clicked.getAttribute('data-bs-type')

        if (modalType == 'modalAdd') {
            modalTitleLabel.text('Add an entry')
            modalNumberInput.val('')
            modalWordInput.val('')
            modalUrlInput.val('')
            btnModal.text('Add')
            btnModal.attr('data-action-type', 'add');
            imgAssocContainer.hide()
        }

        if (modalType == 'modalEdit') {
            modalTitleLabel.text('Edit an entry')
            modal.find('#assocIdInput').attr('value', clicked.getAttribute('data-assoc-id'))
            btnModal.text('Edit')
            btnModal.attr('data-action-type', 'edit');
            imgAssocContainer.show()
        } 
    })

    modal[0].addEventListener('hide.bs.modal', function (event) {
        $('#formAssocAction :input').val('');
    })
})
