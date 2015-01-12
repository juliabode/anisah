
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

    function activeTab(tab) {
        var minTabHeight = jQuery(tab).next('div').outerHeight();

        jQuery('section.widget > h3').removeClass('active');
        jQuery(tab).addClass('active');
        jQuery(tab).parents('aside').css('min-height', minTabHeight + 53);
    }

    jQuery(window).scroll(sticky);
    sticky();

    activeTab('section.widget:first-child > h3');
    jQuery('section.widget > h3').click( function() {
        activeTab(this);
    });

    var eventId = '';
    jQuery('div.js-event-highlighter').hover( function() {
        eventId = jQuery(this).data('eventId');
        jQuery('div.js-event-highlighter[data-event-id="' + eventId + '"]').parent('.gce-feed').addClass('active');
    }, function() {
        eventId = jQuery(this).data('eventId');
        jQuery('div.js-event-highlighter[data-event-id="' + eventId + '"]').parent('.gce-feed').removeClass('active');
    });

});
