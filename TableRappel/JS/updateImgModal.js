$('#urlInput').on('keyup', function(e) {
    $('#img-assoc-container-modal').show();
    $('#imgAssocPreview').attr('src', $(this).val())
})