(function($){
    $(document).ready(function (e) {
        $('#customize-controls .preview-notice').append('<a class="counsel-pro-link" href="http://www.mudthemes.com/showcase/counsel-theme" title="Upgrade to Premium" target="_blank">Upgrade to Premium</a>');
        $('.counsel-pro-link').click(function (e) {
            e.stopPropagation();
        });
    });
})(jQuery);