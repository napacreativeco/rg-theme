(function($) {

    // NAVIGATION
    $('.hamburger').on('click', function() {
        $('.nav-overlay').fadeIn();
    });
    $('.close').on('click', function() {
        $('.nav-overlay').fadeOut();
    });

    // NAV SEARCH
    $('.search-container').on('click', function() {
        $('.search-container').hide();
        $('.search-bar').fadeIn();
    });
    $('.search-close').on('click', function() {
        $('.search-bar').hide();
        $('.search-container').fadeIn();
    });

    // Add Inc/Dec buttons to Quantity
    $('.quantity').prepend('<a onclick="dec()">-</a>');
    $('.quantity').append('<a onclick="inc()">+</a>');

    $('.no-click').on('click', function(event) {
        event.preventDefault();
    });

    // Fadeout 'view cart'
    $('.add_to_cart_button').on('click', function() {
        setTimeout(function() {
            $('.added_to_cart').fadeOut();
        }, 4000);
    });

    // bind change event to select
    $('#dynamic_select').on('change', function () {
        var url = $(this).val(); // get selected value
        if (url) { // require a URL
            window.location = url; // redirect
        }
        return false;
    });


})( jQuery );


// Cart Incrementation
function inc(event) {
    let number = document.querySelector('.qty');
    number.value = parseInt(number.value) + 1;
    event.preventDefault();
}
function dec(event) {
    let number = document.querySelector('.qty');
    if (parseInt(number.value) > 0) {
        number.value = parseInt(number.value) - 1;
    }
    event.preventDefault();
}
