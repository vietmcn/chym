jQuery(document).ready(function ($) {
    $("#chym-nav-m").click(function (e) {
        $("#nav-icon4").toggleClass( 'open' ); 
        $(".Chym-navbar-m").toggleClass("show", 800, "easeOutQuint");
        //e.stopPropagation();
    });
    //owl-carousel
    $('.owl-carousel').owlCarousel({
        margin: 10,
        loop: false,
        autoWidth: true,
        items: 4
    })
});