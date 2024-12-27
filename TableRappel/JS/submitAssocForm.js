var modalInstance = new bootstrap.Modal('#modalAssoc');

$('#formAssocAction').submit(function (e) {
    e.preventDefault();
    var form = $(this);

    if (!form[0].checkValidity()) {
        e.stopPropagation()
        return;
    }

    var submitButton = $(this).find(':submit')
    var submitType = submitButton.attr('data-action-type')
    var formData = form.serialize();

    if (submitType == 'add') {
        $.ajax({
            url: 'src/addAssoc.php',
            method: 'POST',
            data: formData,
            success: function () {
                resetValidation(form);
                modalInstance.hide();
                $('#associationsContainer').load(location.href + ' #associationsContainer');
            },
            error: function () {
                alert('Failed to add assoc');
            }
        })
    }
    else if (submitType == 'edit') {
        $.ajax({
            url: 'src/editAssoc.php',
            method: 'POST',
            data: formData,
            success: function () {
                resetValidation(form);
                modalInstance.hide();
                $('#associationsContainer').load(location.href + ' #associationsContainer');
            },
            error: function () {
                alert('Failed to edit assoc');
            }
        })
    }
})