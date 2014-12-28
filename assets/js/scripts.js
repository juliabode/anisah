
jQuery(document).foundation();

jQuery(document).ready( function($) {

    function sticky() {
        var window_top          = $(window).scrollTop(),
            top_position        = 151,
            element_to_stick    = $('header');
        
        if (window_top > top_position) {
            element_to_stick.addClass('sticky');
        } else {
            element_to_stick.removeClass('sticky');
        }
    }

    $(window).scroll(sticky);
    sticky();

});
