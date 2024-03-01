<!----------- Customer Login Form ----------->
<div class="aside aside_right overflow-hidden customer-forms" id="customerForms">
    <div class="customer-forms__wrapper d-flex position-relative">
        @guest
            <div class="customer__login">
                <div class="aside-header d-flex align-items-center">
                    <h3 class="text-uppercase fs-6 mb-0">Login</h3>
                    <button class="btn-close-lg js-close-aside ms-auto"></button>
                </div><!-- /.aside-header -->

                <form action="/auth/login" method="POST" class="aside-content">
                    @csrf
                    <div class="form-floating mb-3">
                        <input name="email" type="email" class="form-control form-control_gray"
                            id="customerNameEmailInput" placeholder="name@example.com">
                        <label for="customerNameEmailInput">Username or email address *</label>
                    </div>

                    <div class="pb-3"></div>

                    <div class="form-label-fixed mb-3">
                        <label for="customerPasswordInput" class="form-label">Password *</label>
                        <input name="password" id="customerPasswordInput" class="form-control form-control_gray"
                            type="password" placeholder="********">
                    </div>

                    <div class="d-flex align-items-center mb-3 pb-2">
                        <div class="form-check mb-0">
                            <input name="remember" class="form-check-input form-check-input_fill" type="checkbox"
                                value="" id="flexCheckDefault">
                            <label class="form-check-label text-secondary" for="flexCheckDefault">Remember
                                me</label>
                        </div>
                        <a href="/auth/reset" class="btn-text ms-auto">Lost password?</a>
                    </div>

                    <button class="btn btn-primary w-100 text-uppercase" type="submit">Log In</button>

                    <div class="customer-option mt-4 text-center">
                        <span class="text-secondary">No account yet?</span>
                        <a href="/auth#register-tab" class="btn-text js-show-register">Create
                            Account</a>
                    </div>
                </form>
            </div><!-- /.customer__login -->

            <div class="customer__register">
                <div class="aside-header d-flex align-items-center">
                    <h3 class="text-uppercase fs-6 mb-0">Create an account</h3>
                    <button class="btn-close-lg js-close-aside btn-close-aside ms-auto"></button>
                </div><!-- /.aside-header -->

                <form action="/auth/reset" method="POST" class="aside-content">
                    <div class="form-floating mb-4">
                        <input name="username" type="text" class="form-control form-control_gray"
                            id="registerUserNameInput" placeholder="Username">
                        <label for="registerUserNameInput">Username</label>
                    </div>

                    <div class="pb-1"></div>

                    <div class="form-floating mb-4">
                        <input name="email" type="email" class="form-control form-control_gray"
                            id="registerUserEmailInput" placeholder="user@company.com">
                        <label for="registerUserEmailInput">Email address *</label>
                    </div>

                    <div class="pb-1"></div>

                    <div class="form-label-fixed mb-4">
                        <label for="registerPasswordInput" class="form-label">Password *</label>
                        <input name="password" id="registerPasswordInput" class="form-control form-control_gray"
                            type="password" placeholder="*******">
                    </div>

                    <p class="text-secondary mb-4">Your personal data will be used to support your experience
                        throughout this website, to manage access to your account, and for other purposes described in
                        our privacy policy.</p>

                    <button class="btn btn-primary w-100 text-uppercase" type="submit">Register</button>

                    <div class="customer-option mt-4 text-center">
                        <span class="text-secondary">Already have account?</span>
                        <a href="#" class="btn-text js-show-login">Login</a>
                    </div>
                </form>
            </div><!-- /.customer__register -->
        @endguest
        @auth
            <div class="d-flex justify-content-center w-100 p-3 flex-column gap-3">
                <h4 class="text-center mt-4"> Hi {{ auth()->user()->username }}</h4>
                <a href="{{ auth()->user()->role == 'admin' ? '/admin' : '/user' }}" class="btn btn-dark">
                    Go to Dashboard
                </a>
            </div>
        @endauth
    </div><!-- /.customer-forms__wrapper -->
</div><!-- /.aside aside_right -->

<!---------------- Cart Drawer --------------->
<div class="aside aside_right overflow-hidden cart-drawer" id="cartDrawer">
    <div class="aside-header d-flex align-items-center">
        <h3 class="text-uppercase fs-6 mb-0">SHOPPING BAG ( <span class="cart-amount js-cart-items-count"></span> )
        </h3>
        <button class="btn-close-lg js-close-aside btn-close-aside ms-auto"></button>
    </div><!-- /.aside-header -->

    <div class="aside-content cart-drawer-items-list" id="sideCartModal">

    </div><!-- /.aside-content -->

    <div class="cart-drawer-actions position-absolute start-0 bottom-0 w-100">
        <hr class="cart-drawer-divider">
        <div class="d-flex justify-content-between">
            <h6 class="fs-base fw-medium">SUBTOTAL:</h6>
            <span class="cart-subtotal fw-medium"></span>
        </div><!-- /.d-flex justify-content-between -->
        <a href="/cart" class="btn btn-light mt-3 d-block">View Cart</a>
        <a href="/checkout" class="btn btn-primary mt-3 d-block">Checkout</a>
    </div><!-- /.aside-content -->
</div><!-- /.aside -->

<!----------------- Newsletter Popup ----------------->
<div class="modal fade" id="newsletterPopup" tabindex="-1" aria-labelledby="newsletterPopupModal"
    aria-hidden="true">
    <div class="modal-dialog newsletter-popup modal-dialog-centered">
        <div class="modal-content">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            <div class="row p-0 m-0">
                <div class="col-md-6 p-0 d-none d-md-block">
                    <div class="newsletter-popup__bg h-100 w-100">
                        <img loading="lazy" src="/images/newsletter-popup.jpg"
                            class="h-100 w-100 object-fit-cover d-block" alt="">
                    </div>
                </div>
                <div class="col-md-6 p-0 d-flex align-items-center">
                    <div class="block-newsletter w-100">
                        <h3 class="block__title">Sign Up to Our Newsletter</h3>
                        <p>Be the first to get the latest news about trends, promotions, and much more!</p>
                        <form action="" class="footer-newsletter__form position-relative bg-body">
                            <input class="form-control border-2" type="email" name="email"
                                placeholder="Your email address">
                            <input class="btn-link fw-medium bg-transparent position-absolute top-0 end-0 h-100"
                                type="submit" value="JOIN">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- /.newsletter-popup position-fixed -->
