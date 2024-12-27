$('#deleteAllBtn').on('click', function(event) {
    $.ajax({
        type: 'POST',
        url: 'src/deleteAllAssocs.php',
        success: function () {
            $('#associationsContainer').load(location.href + ' #associationsContainer');
        },
        error: function () {
            alert('Failed');
        }
    });
})