$(window).on('scroll', function() {
    var windowHeight = $(window).height();
    var documentHeight = $(document).height();
    var scrollPosition = $(window).scrollTop();
    var footerHeight = $('footer').outerHeight();
    var tolerance = 50;

    if (documentHeight - tolerance <= windowHeight + scrollPosition) {
        $('footer').fadeIn(); // Afficher le pied de page
    } else {
        $('footer').fadeOut(); // Cacher le pied de page
    }
});