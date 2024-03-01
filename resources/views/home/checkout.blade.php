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
            <h2 class="page-title">Shipping and Checkout</h2>
            <div class="checkout-steps">
                <span class="checkout-steps__item active">
                    <span class="checkout-steps__item-number">01</span>
                    <span class="checkout-steps__item-title">
                        <span>Shopping Bag</span>
                        <em>Manage Your Items List</em>
                    </span>
                </span>
                <span class="checkout-steps__item active">
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
            <div name="checkout-form">
                <form class="checkout-form" id="checkout_form">
                    <div class="billing-info__wrapper">
                        <h4>BILLING DETAILS</h4>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-floating my-3">
                                    <input type="text" class="form-control" id="checkout_first_name" required
                                        name="first_name" placeholder="First Name">
                                    <label for="checkout_first_name">First Name</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating my-3">
                                    <input type="text" class="form-control" id="checkout_last_name" required
                                        name="last_name" placeholder="Last Name">
                                    <label for="checkout_last_name">Last Name</label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-floating my-3">
                                    <input type="text" class="form-control" id="checkout_company_name" required
                                        name="company_name" placeholder="Company Name (optional)">
                                    <label for="checkout_company_name">Company Name (optional)</label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="search-field my-3">
                                    <div class="form-label-fixed hover-container">
                                        <label for="search-dropdown" class="form-label">Country / Region*</label>
                                        <div class="js-hover__open">
                                            <select type="text" class="form-control form-control-lg"
                                                id="checkout_country" name="country" required
                                                placeholder="Choose a location...">
                                                <option value="NG">Nigeria</option>
                                                <option value="GH">Ghana</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-floating mt-3 mb-3">
                                    <input type="text" class="form-control" id="checkout_street_address" required
                                        name="street_address" placeholder="Street Address *">
                                    <label for="checkout_company_name">Street Address *</label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-floating my-3">
                                    <input type="text" class="form-control" required id="checkout_city"
                                        name="city" placeholder="Town / City *">
                                    <label for="checkout_city">State / City *</label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-floating my-3">
                                    <input type="text" class="form-control" id="checkout_zipcode" name="zipcode"
                                        placeholder="Postcode / ZIP *" maxlength="7" minlength="5" required>
                                    <label for="checkout_zipcode">Postcode / ZIP *</label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-floating my-3">
                                    <input type="text" class="form-control" id="checkout_province" name="province"
                                        placeholder="Province *" required>
                                    <label for="checkout_province">LGA *</label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-floating my-3">
                                    <input type="text" class="form-control" id="checkout_phone" placeholder="Phone *"
                                        name="phone" required>
                                    <label for="checkout_phone">Phone *</label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-floating my-3">
                                    <input type="email" class="form-control" id="checkout_email" name="email"
                                        placeholder="Your Mail *" required>
                                    <label for="checkout_email">Your Mail *</label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-check mt-3">
                                    <input class="form-check-input form-check-input_fill" type="checkbox"
                                        name="create_account" value="" id="create_account">
                                    <label class="form-check-label" for="create_account">CREATE AN ACCOUNT?</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mt-3">
                                <textarea class="form-control form-control_gray" name="order_notes" placeholder="Order Notes (optional)"
                                    cols="30" rows="8"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="checkout__totals-wrapper">
                        <div class="sticky-content">
                            <div class="checkout__totals">
                                <h3>Your Order</h3>
                                <table class="checkout-cart-items">
                                    <thead>
                                        <tr>
                                            <th>PRODUCT</th>
                                            <th align="right">SUBTOTAL</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                Zessi Dresses x 2 > color: blue size: M
                                            </td>
                                            <td align="right">
                                                $32.50
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Kirby T-Shirt x 2 > color: blue size: M
                                            </td>
                                            <td align="right">
                                                $29.90
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <table class="checkout-totals">
                                    <tbody>
                                        <tr>
                                            <th>SUBTOTAL</th>
                                            <td align="right">$62.40</td>
                                        </tr>
                                        <tr>
                                            <th>SHIPPING</th>
                                            <td align="right">Free shipping</td>
                                        </tr>
                                        <tr>
                                            <th>VAT</th>
                                            <td align="right">$19</td>
                                        </tr>
                                        <tr>
                                            <th>TOTAL</th>
                                            <td align="right">$81.40</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="checkout__payment-methods">
                                <div class="form-check">
                                    <input class="form-check-input form-check-input_fill" type="radio"
                                        name="checkout_payment_method" id="checkout_payment_method_1" checked="">
                                    <label class="form-check-label" for="checkout_payment_method_1">
                                        Direct bank transfer
                                        <p class="option-detail">
                                            Make your payment directly into our bank account. Please use your Order ID
                                            as the payment reference.Your order will not be shipped until the funds have
                                            cleared in our account.
                                        </p>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input form-check-input_fill" type="radio"
                                        name="checkout_payment_method" id="checkout_payment_method_2">
                                    <label class="form-check-label" for="checkout_payment_method_2">
                                        Check payments
                                        <p class="option-detail">
                                            Phasellus sed volutpat orci. Fusce eget lore mauris vehicula elementum
                                            gravida nec dui. Aenean aliquam varius ipsum, non ultricies tellus sodales
                                            eu. Donec dignissim viverra nunc, ut aliquet magna posuere eget.
                                        </p>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input form-check-input_fill" type="radio"
                                        name="checkout_payment_method" id="checkout_payment_method_3">
                                    <label class="form-check-label" for="checkout_payment_method_3">
                                        Cash on delivery
                                        <p class="option-detail">
                                            Phasellus sed volutpat orci. Fusce eget lore mauris vehicula elementum
                                            gravida nec dui. Aenean aliquam varius ipsum, non ultricies tellus sodales
                                            eu. Donec dignissim viverra nunc, ut aliquet magna posuere eget.
                                        </p>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input form-check-input_fill" type="radio"
                                        name="checkout_payment_method" id="checkout_payment_method_4">
                                    <label class="form-check-label" for="checkout_payment_method_4">
                                        Paypal
                                        <p class="option-detail">
                                            Phasellus sed volutpat orci. Fusce eget lore mauris vehicula elementum
                                            gravida nec dui. Aenean aliquam varius ipsum, non ultricies tellus sodales
                                            eu. Donec dignissim viverra nunc, ut aliquet magna posuere eget.
                                        </p>
                                    </label>
                                </div>
                                <div class="policy-text">
                                    Your personal data will be used to process your order, support your experience
                                    throughout this website, and for other purposes described in our <a
                                        href="terms.html" target="_blank">privacy policy</a>.
                                </div>
                            </div>
                            <button class="btn btn-primary" data-id="btn-checkout">PLACE ORDER</button>
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </main>

    <div class="mb-5 pb-xl-5"></div>
    {{-- LISTS --}}
    <div>

        <datalist id="streetname">
            <option value="Adeola Odeku Street"></option>
            <option value="Adeniran Ogunsanya Street"></option>
        </datalist>

        <datalist id="town">
            <option value="Lagos"></option>
            <option value="Abuja"></option>
        </datalist>
    </div>


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
    <script src="/js/sweetalert.min.js"></script>
    <script src="/js/checkout.js"></script>
    <script src="/js/functions.js"></script>
    <script src="/js/theme.js"></script>

</body>

</html>
