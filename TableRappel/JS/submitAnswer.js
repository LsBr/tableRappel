$(document).ready(function () {
    $('.trainingContainer').on('click', '#submitNbToWord', function (e) {
        var wordValue = $('#wordValue').val()

        wordVNormalized = wordValue.toLowerCase().normalize("NFD").replace(/[\u0300-\u036f]/g, "");
        wordANormalized = $('#wordAnswer').val().toLowerCase().normalize("NFD").replace(/[\u0300-\u036f]/g, "");

        if (wordANormalized == wordVNormalized) {
            $('.answerResult').css('visibility', 'visible');
            $('.answerResult').css('color', 'green');
            $('.answerResult h1').text('Good');
            setTimeout(() => {
                $('.trainingContainer').load(location.href + ' .trainingContainer');
            }, 1500);
        }
        else {
            $('.answerResult').css('visibility', 'visible');
            $('.answerResult').css('color', 'red');
            $('.answerResult h1').html($('#digitValue').text() + ' : ' + wordValue);
            setTimeout(() => {
                $('.trainingContainer').load(location.href + ' .trainingContainer');
            }, 1500);
        }
    });

    $('.trainingContainer').on('keydown', '#wordAnswer', function (event) {
        if (event.key === 'Enter') {
            $('#submitNbToWord').click();
        }
    });
});