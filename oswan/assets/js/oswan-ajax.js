; (function ($) {
    $(document).ready(function () {

        const loaderHtml = '<div class="loader-container"><div class="lds-facebook"><div></div><div></div><div></div></div></div>';


        $(document).on('click', '.quick-view-btn', function (e) {

            let productId = parseInt($(this).data('product_id'));
            let nonce = $('#_wpnonce').val();


            $(this).parentsUntil('.product-bundle-wrapper', '.product-wrapper').append(loaderHtml);

            if (parseInt($('#modal-quickview-' + productId).data('modal_id')) !== productId) {
                $.get(ajax.url, {
                    action: "quickViewModal",
                    productId: productId,
                    reqValidity: nonce,
                },
                    function (data, status, xhr) {

                        if ('success' === status) {
                            $('footer').after(data);
                            // console.log(data);
                        }
                        xhr.then(function () {
                            $('#modal-quickview-' + productId).modal('show');
                            $('.loader-container').remove();
                        });
                    });
            } else {
                $('#modal-quickview-' + productId).modal('show');
                $('.loader-container').remove();
            }
            e.preventDefault();
        });

        // Used Bike Category Query
        $(document).on('click', '[href = "#home2"]', function (e) {
            e.preventDefault();
            let that;
            that = $(this);

            let category;
            category = that.data('category');

            if ($('.tab-pane#home2').length === 0) {

                $('.tab-content').css('position', 'relative');
                $('.tab-content').prepend(loaderHtml);

                $.get(ajax.url, {
                    category: category,
                    action: 'usedBike'
                },
                    function (data, status, xhr) {
                        if ('success' === status) {
                            $('.tab-content').append(data);
                        } else {
                            console.log("Problem occurs");
                        }
                        xhr.then(function () {
                            $('#home1').removeClass('active');
                            $('#home2').addClass('active');

                            /* Reactive owl carousel */
                            $('.product-slider-active').owlCarousel({
                                loop: true,
                                autoplay: false,
                                autoplayTimeout: 5000,
                                navText: ['PRE', 'NEXT'],
                                nav: true,
                                item: 3,
                                margin: 20,
                                responsive: {
                                    0: {
                                        items: 1
                                    },
                                    768: {
                                        items: 2
                                    },
                                    1000: {
                                        items: 2
                                    },
                                    1200: {
                                        items: 3
                                    }
                                }
                            })

                            setTimeout(function () {
                                $('.tab-content').css('position', 'static');
                                $('.loader-container').remove();
                            }, 500);
                        });
                    });
            }
        });

        /*----------------------------
            Cart Plus Minus Button
        ------------------------------ */
        // var CartPlusMinus = $('.cart-plus-minus');

        // CartPlusMinus.prepend('<div class="dec qtybutton">-</div>');
        // CartPlusMinus.append('<div class="inc qtybutton">+</div>');
        // $(".qtybutton").on("click", function () {
        //     var $button = $(this);
        //     var oldValue = $button.parent().find("input").val();
        //     if ($button.text() === "+") {
        //         var newVal = parseFloat(oldValue) + 1;
        //     } else {
        //         // Don't allow decrementing below zero
        //         if (oldValue > 0) {
        //             var newVal = parseFloat(oldValue) - 1;
        //         } else {
        //             newVal = 1;
        //         }
        //     }
        //     $button.parent().find("input").val(newVal);
        // });

    });
})(jQuery)
