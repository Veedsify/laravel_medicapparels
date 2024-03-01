$(document).ready(function () {
    $('#checkout_form').on('submit', function (event) {
        event.preventDefault();
    });

    $('#checkout_zipcode').on('input', function (e) {
        //check if the user stops typing for 1 second
        const checkoutcity = $('#checkout_city').val();
        const checkoutcountry = $('#checkout_country').val();
        const checkkoutstreet = $('#checkout_street_address').val();

        const listenToUser = setTimeout(function () {
            var zipcode = $('#checkout_zipcode').val();
            const weight = JSON.parse(localStorage.getItem("cart")).length * 0.07
            if (zipcode.length >= 5) {
                if (checkoutcity.length > 0 && checkoutcountry.length > 0 && checkkoutstreet.length > 0)
                    $.ajax({
                        url: '/dhl/shipping_rates',
                        type: 'POST',
                        data: {
                            _token: $('input[name="_token"]').val(),
                            zipcode: zipcode,
                            checkoutcity: checkoutcity,
                            checkoutcountry: checkoutcountry,
                            checkkoutstreet: checkkoutstreet,
                            weight: weight,
                            cart: JSON.stringify(localStorage.getItem('cart'))
                        },
                        success: function (response) {
                            console.table(response)
                        }
                    });
            }
        }, 1000);
    });
});
