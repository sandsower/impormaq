(function($) {
    $.fn.selected = function(fn) {
        return this.each(function() {
            var clicknum = 0;
            $(this).click(function() {
                clicknum++;
                if (clicknum == 2) {
                    clicknum = 0;
                    fn();
                }
            });
        });
    }
})(jQuery);