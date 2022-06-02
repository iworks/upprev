/*! upPrev - v4.0.7
 * https://iworks.pl/
 * Copyright (c) 2022; * Licensed GPLv2+
 */
jQuery( document ).ready( function( $ ) {
    /**
     * configuration
     */
    $( 'input[name="iworks_upprev_configuration"]' ).on( 'change', function() {
        $(this).closest('form').submit();
    });
    /**
     * color
     */
    $('.wpColorPicker').wpColorPicker();
});
