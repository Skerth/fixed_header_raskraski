(function ($) {
  $(document).ready(function(){
    let scrollTop = $(window).scrollTop();
    let $fixed_header = $('.fixed-header');

    $(window).scroll(function() {
      scrollTop = $(window).scrollTop();

      if (scrollTop >= 100) {
        $fixed_header.addClass('_show');

        if ($('div').is('.admin-menu-fixed')) {
          $fixed_header.addClass('_offset-top');
        }

      }
      else {
        $fixed_header.removeClass('_show');
      }
    });
  });
})(jQuery);
