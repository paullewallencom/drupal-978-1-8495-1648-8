(function ($) {
  $(window).load (function () {
    if ( $("#edit-submitted-speaker-details-first-name").val() != "" ) {
        $('#webform-component-presentation-details').show('slow');
    }
  });

  $(document).ready(function(){
    $("#edit-submitted-speaker-details-first-name").blur (function() {
      if ( $("#edit-submitted-speaker-details-first-name").val() == "" ) {
        $('#webform-component-presentation-details').hide('slow');
      }
      else {
        $('#webform-component-presentation-details').show('slow');
      }
    });
  });
})(jQuery);
