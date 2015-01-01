
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

    jQuery(window).scroll(sticky);
    sticky();

    jQuery('section.widget:first-child h3').addClass('active');

    jQuery('section.widget h3').click( function() {
        jQuery('section.widget h3').removeClass('active');
        jQuery(this).addClass('active');
    })

});
