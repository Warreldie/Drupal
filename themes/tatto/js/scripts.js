/**
 * @file
 * Placeholder file for custom sub-theme behaviors.
 *
 */
(function($, Drupal) {

    /**
     * Example drupal behavior
     */
    Drupal.behaviors.awesome = {
        attach: function(context, settings) {
            $(document).ready(function() {
                window.alert("The page is loaded!");
            });
        }
    };



})(jQuery, Drupal);