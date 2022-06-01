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
                window.alert("Welcome in our tattooshop!");
            });
            // Activate Carousel
            $("#myCarousel").carousel();

            // Enable Carousel Indicators
            $(".item").click(function() {
                $("#myCarousel").carousel(1);
            });

            // Enable Carousel Controls
            $(".left").click(function() {
                $("#myCarousel").carousel("prev");
            });
        }
    };



})(jQuery, Drupal);