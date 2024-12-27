var modalDom = $('#modalAssoc');

$('#associationsContainer').on('click', '.card-container', function (event) {

    assocNumber = $(this).find('#number-value-display').data('number-value')
    assocWord = $(this).find('#word-value-display').data('word-value')
    imgUrl = $(this).find('.img-assoc-container > img').attr('src')
    urlDisplay = imgUrl == 'IMG/noImgDefault.jpg' ? '' : imgUrl; 

    modalDom.find('#numberInput').val(assocNumber)
    modalDom.find('#wordInput').val(assocWord)
    modalDom.find('#urlInput').val(urlDisplay)
    modalDom.find('.img-assoc-container > img').attr('src', imgUrl);
});