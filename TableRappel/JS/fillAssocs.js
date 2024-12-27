$('#fillBtn').on('click', function(e) {
    $.ajax({
        url: 'src/fillAssocs.php',
        type: 'GET',
        success: function () {
            $('#associationsContainer').load(location.href + ' #associationsContainer');
        },
        error: function () {
            alert('Failed to fill');
        }
    })    
})