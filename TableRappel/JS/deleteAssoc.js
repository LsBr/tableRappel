$('#associationsContainer').on('click', '.btn-delete', function test(event) {
    event.stopPropagation();

    $.ajax({
        type: 'POST',
        url: 'src/deleteAssoc.php',
        data: { id: $(this).data('id') },
        success: function () {
            $('#associationsContainer').load(location.href + ' #associationsContainer');
        },
        error: function () {
            alert('Failed');
        }
    });
})