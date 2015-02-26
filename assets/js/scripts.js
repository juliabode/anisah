
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

    /**
     * detect IE
     * returns version of IE or false, if browser is not Internet Explorer
     */
    function detectIE() {
        var ua = window.navigator.userAgent;

        var msie = ua.indexOf('MSIE ');
        if (msie > 0) {
            // IE 10 or older => return version number
            return parseInt(ua.substring(msie + 5, ua.indexOf('.', msie)), 10);
        }

        var trident = ua.indexOf('Trident/');
        if (trident > 0) {
            // IE 11 => return version number
            var rv = ua.indexOf('rv:');
            return parseInt(ua.substring(rv + 3, ua.indexOf('.', rv)), 10);
        }

        var edge = ua.indexOf('Edge/');
        if (edge > 0) {
           // IE 12 => return version number
           return parseInt(ua.substring(edge + 5, ua.indexOf('.', edge)), 10);
        }

        // other browser
        return false;
    }

    var ieClass = detectIE() || '';
    if (ieClass) { jQuery('html').addClass('ie'); };

});
