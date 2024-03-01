<!DOCTYPE html>
<html dir="ltr" lang="en-US">


{{-- Head Component --}}
@include('home.components.head', [
    'title' => 'Uomo | Medicapparel | Best Doctor & Surgeons Apparels in Nigeria',
])

<body>
    <x-svg />
    {{-- Header --}}
    <x-header />
    {{-- HeaderEnd --}}

    <main>
        <div class="mb-4 pb-4"></div>
        <section class="login-register container">
            <h2 class="section-title text-center fs-3 mb-xl-5">Reset Your Password</h2>
            <p>We will send you an email to reset your password</p>
            <div class="reset-form">
                <form name="reset-form" class="needs-validation" novalidate="">
                    <div class="form-floating mb-3">
                        <input name="login_email" type="email" class="form-control form-control_gray"
                            id="customerNameEmailInput" placeholder="Email address *" required="">
                        <label for="customerNameEmailInput">Email address *</label>
                    </div>

                    <button class="btn btn-primary w-100 text-uppercase" type="submit">Submit</button>

                    <div class="customer-option mt-4 text-center">
                        <span class="text-secondary">Back to</span>
                        <a href="/auth" class="btn-text js-show-register">Login</a>
                    </div>
                </form>
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
