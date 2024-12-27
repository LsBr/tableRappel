$(document).on('click', '#btnCloseAlert', function() {
    $('#homeAlert').hide();
})

// alertType 1 = success | 2 = error
function showHomeAlert(alertType, message) {
    homeAlert = $('#homeAlert');

    homeAlert.show();

    if (alertType == "success") {
        homeAlert.removeClass('alert-danger');
        homeAlert.addClass('alert-success');
    }
    else if (alertType == "error") {
        homeAlert.removeClass('alert-success');
        homeAlert.addClass('alert-danger');
    }

    $('#homeAlertContent').text(message);
}