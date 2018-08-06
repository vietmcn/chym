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
        items: 4,
        dots: false,
    });
    //ToggleClass
    $(".chym-click").click(function() {

        $('.dropdown-content').toggleClass("show");
        
        if ( $('.dropup').hasClass('dropblock') ) {

            $('.dropdown').addClass('dropblock');
            $('.dropup').removeClass('dropblock');

        } else {

            $('.dropdown').removeClass('dropdefault');
            $('.dropdown').removeClass('dropblock');
            $('.dropup').addClass('dropblock');

        }
        
    });
});