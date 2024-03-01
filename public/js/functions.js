
function addItemToCart(e) {
    const randomString = Math.random().toString(36).substring(2, 10);
    const quantity = parseInt($(".qty-control input[name='quantity']").val(), 10) || 1
    const size = $(".swatch-list input[name='size']:checked").val();
    const color = $(".swatch-list-color input[name='colors']:checked").val();

    const thisProduct = e.target.getAttribute("data-product_id");
    let previousCart = JSON.parse(localStorage.getItem("cart")) || [];
    const getProducts = JSON.parse(localStorage.getItem("products"));

    let findItemInArray;
    getProducts.forEach(item => {
        if (item.product.uuid === thisProduct) {
            findItemInArray = item
        }
    })

    const newCartItem = {
        product_id: findItemInArray.product.uuid,
        image: findItemInArray.images[0].image_url,
        name: findItemInArray.product.name,
        color: color,
        size: size,
        quantity: quantity,
        price: Number(findItemInArray.product.price).toFixed(0),
        unique_id: randomString,
        maxcount: findItemInArray.product.stock
    };

    // Check if the item is already in the cart
    const existingCartItemIndex = previousCart.findIndex(item =>
        item.product_id == thisProduct && item.color == color && item.size == size
    );

    if (existingCartItemIndex !== -1) {
        // Item with the same product_id, color, and size already exists in the cart
        // Update the quantity of the existing item
        previousCart[existingCartItemIndex].quantity = quantity;
    } else {
        // Item is not in the cart, add it
        previousCart = [...previousCart, newCartItem];
    }

    // Update the cart in localStorage
    localStorage.setItem("cart", JSON.stringify(previousCart));

    reRenderCart()
}

function addItemToCartDefault(e) {
    const randomString = Math.random().toString(36).substring(2, 10);

    const thisProduct = e.target.getAttribute("data-product_id");
    let previousCart = JSON.parse(localStorage.getItem("cart")) || [];
    const getProducts = JSON.parse(localStorage.getItem("products"));
    let findItemInArray;

    getProducts.forEach(item => {
        if (item.product.uuid == thisProduct) {
            findItemInArray = item
        }
    })

    const color = findItemInArray.colors[0].name
    const size = findItemInArray.sizes[0].name
    const quantity = 1;

    const newCartItem = {
        product_id: findItemInArray.product.uuid,
        image: findItemInArray.images[0].image_url,
        name: findItemInArray.product.name,
        color,
        size,
        quantity: 1,
        price: Number(findItemInArray.product.price).toFixed(0),
        unique_id: randomString,
        maxcount: findItemInArray.product.stock
    };

    // Check if the item is already in the cart
    const existingCartItemIndex = previousCart.findIndex(item =>
        item.product_id == thisProduct && item.color == color && item.size == size
    );

    if (existingCartItemIndex !== -1) {
        // Item with the same product_id, color, and size already exists in the cart
        // Update the quantity of the existing item
        previousCart[existingCartItemIndex].quantity = quantity;
    } else {
        // Item is not in the cart, add it
        previousCart = [...previousCart, newCartItem];
    }

    // Update the cart in localStorage
    localStorage.setItem("cart", JSON.stringify(previousCart));
    reRenderCartPage();
    reRenderCart();
}


const reRenderCart = () => {
    const sideCartModal = document.querySelector('#sideCartModal')
    if (sideCartModal) {
        sideCartModal.innerHTML = ''
        let previousCart = JSON.parse(localStorage.getItem("cart"))

        previousCart?.forEach(cart => {
            sideCartModal.innerHTML += `
           <div class="cart_item_new">
            <div class="cart-drawer-item d-flex position-relative">
            <div class="position-relative">
                <img loading="lazy" class="cart-drawer-item__img" src="${cart.image}">
            </div>
            <div class="cart-drawer-item__info flex-grow-1">
                <h6 class="cart-drawer-item__title fw-normal">${cart.name}</h6>
                <p class="cart-drawer-item__option text-secondary">Color: ${cart.color}</p>
                <p class="cart-drawer-item__option text-secondary">Size: ${cart.size}</p>
                <div class="d-flex align-items-center justify-content-between mt-1">
                    <div class="qty-control position-relative">
                        <input type="number" name="quantity" value="${cart.quantity}" min="1"
                               class="qty-control__number border-0 text-center">
                        <div class="qty-control__reduce text-start" data-uuid='${cart.unique_id}'>-</div>
                        <div class="qty-control__increase text-end" data-uuid='${cart.unique_id}'>+</div>
                    </div><!-- .qty-control -->
                    <span class="cart-drawer-item__price money price">₦${Number((cart.quantity * cart.price).toFixed(0)).toLocaleString()}</span>
                </div>
            </div>

            <button class="btn-close-xs position-absolute top-0 end-0 js-cart-item-remove" data-product_id="${cart.unique_id}"></button>
        </div><!-- /.cart-drawer-item d-flex -->

        <hr class="cart-drawer-divider">
            </div>
        `;
        })

        $(".js-cart-items-count").html(previousCart?.length);

        const totals = previousCart?.map(item => {
            const quantity = item.quantity || 0;
            const price = parseFloat(item.price) || 0;
            return quantity * price;
        });

        // Calculate the overall total by summing up all the individual totals
        const overallTotal = totals?.reduce((acc, curr) => acc + curr, 0);

        $('.cart-subtotal').text(`₦${Number(overallTotal)?.toLocaleString()}`);
    }

}


const reRenderCartPage = () => {
    const cartContainer = document.querySelector('.cart_container_holder')
    if (cartContainer) {
        const cartItems = JSON.parse(localStorage.getItem('cart'))
        cartContainer.innerHTML = ""
        if (cartItems.length < 1 || cartItems == null) {
            return cartContainer.innerHTML = `
                <tr>
                    <td>
                        Sorry No Products in your cart.
                    </td>
                </tr>
            `
        }
        cartItems.forEach((item, index) => {
            cartContainer.innerHTML += `
                   <tr>
                        <td>
                            <div class="shopping-cart__product-item">
                                <img loading="lazy" src="${item.image}" width="120" height="120"
                                    alt="">
                            </div>
                        </td>
                        <td>
                            <div class="shopping-cart__product-item__detail">
                                <h4>${item.name}</h4>
                                <ul class="shopping-cart__product-item__options">
                                    <li>Color: ${item.color}</li>
                                    <li>Size: ${item.size}</li>
                                </ul>
                            </div>
                        </td>
                        <td>
                            <span class="shopping-cart__product-price">₦${Number(item.price).toLocaleString()}</span>
                        </td>
                        <td>
                            <div class="qty-control position-relative">
                                <input type="number" name="quantity" value="${item.quantity}" min="1"
                                    class="qty-control__number text-center">
                                <div class="qty-control__reduce" data-uuid='${item.unique_id}'>-</div>
                                <div class="qty-control__increase" data-uuid='${item.unique_id}'>+</div>
                            </div><!-- .qty-control -->
                        </td>
                        <td>
                            <span class="shopping-cart__subtotal">₦${Number(item.price * item.quantity).toLocaleString()}</span>
                        </td>
                        <td>
                            <a href="#" class="remove-cart remove_item_cart" data-product_id="${item.unique_id}">
                                <svg width="10" height="10" viewbox="0 0 10 10" fill="#767676"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M0.259435 8.85506L9.11449 0L10 0.885506L1.14494 9.74056L0.259435 8.85506Z">
                                    </path>
                                    <path
                                        d="M0.885506 0.0889838L9.74057 8.94404L8.85506 9.82955L0 0.97449L0.885506 0.0889838Z">
                                    </path>
                                </svg>
                            </a>
                        </td>
                    </tr>
                `;
        })
        const totals = cartItems?.map(item => {
            const quantity = item.quantity || 0;
            const price = parseFloat(item.price) || 0;
            return quantity * price;
        });

        // Calculate the overall total by summing up all the individual totals
        const overallTotal = totals?.reduce((acc, curr) => acc + curr, 0);

        let percent = overallTotal * 0.075
        percent += 50

        $('.total_cart_price').html(`₦${Number(overallTotal).toLocaleString() || 0}`)
        // $('.total_cart_vat').html(`₦${Number(Math.floor(percent)).toLocaleString() || 0}`)
        $('.total_cart_total').html(`₦${Number(Math.floor(overallTotal)).toLocaleString() || 0}`)
    }
}



const updateCartQuantity = (id, type) => {
    const cartItems = JSON.parse(localStorage.getItem('cart'))
    const findItem = cartItems.find(item => item.unique_id === id)
    const index = cartItems.findIndex(item => item.unique_id === id)

    console.log(id, type)

    if (type === 'positive') {
        if (findItem.quantity >= findItem.maxcount) return
        findItem.quantity += 1
    } else {
        if (findItem.quantity <= 1) return
        findItem.quantity -= 1
    }

    cartItems[index] = findItem
    localStorage.setItem('cart', JSON.stringify(cartItems))
    reRenderCartPage()
    reRenderCart()
}

$(document).on('click', '.qty-control__increase', function (e) {
    const uuid = e.target.getAttribute('data-uuid')
    updateCartQuantity(uuid, 'positive')
})

$(document).on('click', '.qty-control__reduce', function (e) {
    const uuid = e.target.getAttribute('data-uuid')
    updateCartQuantity(uuid, 'negative')
})


//CARTPAGE

$("#search-dropdown").on("input", function () {
    const value = $(this).val();
    console.log(value)
    // const options = {
    //     method: 'GET',
    //     headers: {
    //         "Content-Type": "application/json",
    //     }
    // };

    // fetch(`/api/validate_address`, options)
    //     .then(response => response.json())
    //     .then(response => console.log(response))
    //     .catch(err => console.error(err));
})
