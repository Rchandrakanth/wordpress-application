jQuery(document).ready(function($){

    $('.category-tabs').on('click', 'li', function(){

        var category = $(this).data('cat');

        // Set active tab
        $('.category-tabs li').removeClass('active');
        $(this).addClass('active');

        // Fade out products and show loading
        $('#featured-products-wrapper').fadeTo(200, 1).html('<div class="loader">Loading...</div>');

        // AJAX request
        $.ajax({
            url: wc_add_to_cart_params.ajax_url,
            type: 'POST',
            data: {
                action: 'filter_featured_products',
                category: category
            },
            success: function(response){
                // Fade in new products
                $('#featured-products-wrapper').fadeOut(150, function(){
                    $(this).html(response).fadeIn(300);
                });
            },
            error: function(){
                $('#featured-products-wrapper').html('<p class="text-center">Something went wrong!</p>').fadeIn(300);
            }
        });

    });

});