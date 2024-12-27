$(document).on('submit', '#formRegister', function (e) {

    e.preventDefault();
    var form = $(this);

    if (!form[0].checkValidity()) {
        e.stopPropagation()
        return;
    }

    var formData = form.serialize();

    $.ajax({
        url: 'src/registerUser.php',
        method: 'POST',
        data: formData,
        success: function () {
            if (data == 1) {
                showHomeAlert(1, 'You are now connected.');
                $('#signInUpContainer').hide();
                $('#mainNavbar').load(location.href + ' #mainNavbar');
                $('#associationsContainer').load(location.href + ' #associationsContainer');
            }
            else {
                showHomeAlert(2, 'Wrong login or password.');
            }
        },
        error: function () {
            alert('Failed to add assoc');
        }
    })
});