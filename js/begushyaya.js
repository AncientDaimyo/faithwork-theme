var offset_is_set = false;

jQuery(function () {
    jQuery('.marquee').bind('beforeStarting', function () {
        if (!offset_is_set) {
            jQuery('.marquee > div > .js-marquee > .marquee-content:first-child').css('margin-left', '-' + jQuery('.wrapper').width() + 'px');
            offset_is_set = true;
        }
    });

      jQuery('.marquee').marquee({
        duration: 10000,
        duplicated: true,
        pauseOnHover: true,
        gap: 15
    });
});