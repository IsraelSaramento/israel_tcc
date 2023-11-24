/**
 * @file
 * Placeholder file for one panel slider behavior.
 *
 */
(function ($, Drupal, once) {

  /**
   * 1-Panel-Slider Component
   */
  Drupal.behaviors.OnePanelSlider = {
    attach: function (context, settings) {
      $(once('OnePanelSlider', '.paragraph--type--one-panel-slider .field--name-field-slide-items', context)).each(function () {

        $(this).slick({
          accessibility: true,
          arrows: true,
          dots: true,
          focusOnChange: true,
          adaptiveHeight: true,
          responsive: [
            {
              breakpoint: 1440,
              settings: {
                accessibility: true,
                dots: true,
                arrows: false
              }
            }
          ],
        });
      });
    }
  };

  /**
   * Accordions.
   */
  Drupal.behaviors.Accordions = {
    attach: function (context, settings) {
      $(once('Accordions', '.paragraph--type--accordion', context)).each(function () {
        var $container = $(this);
        var $items = $container.find('.paragraph--type--accordion-item');

        $items.each(function () {
          var $item = $(this);
          $item.addClass('open');
          $container.find('.open').removeClass('open').find('.field--name-field-body').slideUp();

          $item.find('.field--name-field-title').on('click', function () {
            // If accordion clicked is not the current opened, close it and
            // open the other.
            if (!$item.hasClass('open')) {
              $container.find('.open').removeClass('open').find('.field--name-field-body').slideUp();
            }
            // Open/Close accordion
            $item.toggleClass('open').find('.field--name-field-body').slideToggle();
          })
        });
      });
    }
  };

})(jQuery, Drupal, once);
