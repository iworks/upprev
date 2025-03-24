/*! upPrev - 4.1.0
 * https://github.com/iworks/upprev
 * Copyright (c) 2025
 * Licensed GPL-3.0 */
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
