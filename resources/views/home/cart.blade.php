<!DOCTYPE html>
<html dir="ltr" lang="en-US">

{{-- Head Component --}}
@include('home.components.head', [
    'title' => 'Uomo | Medicapparel | Best Doctor & Surgeons Apparels in Nigeria',
])


<body>
    <x-svg />
    <!--------------  Header -------------->
    <x-header />
    <!------------ End Header Type 1 ------------>

    <main>
        <div class="mb-4 pb-4"></div>
        <section class="shop-checkout container">
            <h2 class="page-title">Cart</h2>
            <div class="checkout-steps">
                <span class="checkout-steps__item active">
                    <span class="checkout-steps__item-number">01</span>
                    <span class="checkout-steps__item-title">
                        <span>Shopping Bag</span>
                        <em>Manage Your Items List</em>
                    </span>
                </span>
                <span class="checkout-steps__item">
                    <span class="checkout-steps__item-number">02</span>
                    <span class="checkout-steps__item-title">
                        <span>Shipping and Checkout</span>
                        <em>Checkout Your Items List</em>
                    </span>
                </span>
                <span class="checkout-steps__item">
                    <span class="checkout-steps__item-number">03</span>
                    <span class="checkout-steps__item-title">
                        <span>Confirmation</span>
                        <em>Review And Submit Your Order</em>
                    </span>
                </span>
            </div>
            <div class="shopping-cart">
                <div class="cart-table__wrapper">
                    <table class="cart-table">
                        <thead>
                            <tr>
                                <th>Product</th>
                                <th></th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Subtotal</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody class="cart_container_holder">

                        </tbody>
                    </table>
                    <div class="cart-table-footer">
                        <form action="" class="position-relative bg-body">
                            <input class="form-control" type="text" name="coupon_code" placeholder="Coupon Code">
                            <input class="btn-link fw-medium position-absolute top-0 end-0 h-100 px-4" type="submit"
                                value="APPLY COUPON">
                        </form>
                    </div>
                </div>
                <div class="shopping-cart__totals-wrapper">
                    <div class="sticky-content">
                        <div class="shopping-cart__totals">
                            <h3>Cart Totals</h3>
                            <table class="cart-totals">
                                <tbody>
                                    <tr>
                                        <th>Subtotal</th>
                                        <td class="total_cart_price">₦0</td>
                                    </tr>
                                    {{-- <tr>
                                        <th>VAT</th>
                                        <td class="total_cart_vat">₦0</td>
                                    </tr> --}}
                                    <tr>
                                        <th>Total <br>(<small>without VAT and shipping</small>)</th>

                                        <td class="total_cart_total">₦0</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="mobile_fixed-btn_wrapper">
                            <div class="button-wrapper container">
                                <button class="btn btn-primary btn-checkout">PROCEED TO CHECKOUT</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <div class="mb-5 pb-xl-5"></div>


    {{-- Footer --}}
    <x-footer />
    {{-- FooterEnds --}}

    {{-- Modals --}}
    <x-modals />
    {{-- Modals --}}

    <!---------------- Go To Top ---------------->
    <div id="scrollTop" class="visually-hidden end-0"></div>

    <!--------------- Page Overlay -------------->
    <div class="page-overlay"></div><!-- /.page-overlay -->

    <!----------- External JavaScripts ---------->
    <script src="/js/plugins/jquery.min.js"></script>
    <script src="/js/plugins/bootstrap.bundle.min.js"></script>
    <script src="/js/plugins/bootstrap-slider.min.js"></script>

    <script src="/js/plugins/swiper.min.js"></script>
    <script src="/js/plugins/countdown.js"></script>
    <script src="/js/plugins/jquery.fancybox.js"></script>

    <!-------------- Footer Scripts ------------->
    <script src="/js/functions.js"></script>
    <script src="/js/theme.js"></script>

</body>

</html>
