$(document).ready(function () {
    $('#add_to_cart').removeAttr('onclick');

    $('#add_to_cart').click(function () {
        $.ajax({
            type: 'post',
            url: 'index.php?route=module/shoppica/cartCallback',
            dataType: 'html',
            data: $('#product :input'),
            success: function (html) {
                $('#cart_side_contents').html(html);
                $('#cart_menu div.s_cart_holder').html(html);
                $('#cart_menu span.s_grand_total').html($('#cart_menu span.cart_module_total:last').html());
            },
            complete: function () {
                var image = $('#image').offset();
                if (!$('#cart_side').length && $("#cart_menu").length) {
                    var cart = $('#cart_menu').offset();
                } else {
                    var cart = $('#cart_side').offset();
                }

                $('body').append('<img src="' + $('#image').attr('src') + '" id="temp" style="position: absolute; top: ' + image.top + 'px; left: ' + image.left + 'px;" />');

                params = {
                    top : cart.top + 'px',
                    left : cart.left + 'px',
                    opacity : 0.0,
                    width : $('#cart_side').width(),
                    height : $('#cart_side').height()
                };

                $('#temp').animate(params, 'slow', false, function () {
                    $('#temp').remove();
                });
            }
        });
    });
});