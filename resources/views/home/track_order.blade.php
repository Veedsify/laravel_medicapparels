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
        <section class="shop-checkout container">
            <div class="order-tracking">
                <form name="tracking-form" class="needs-validation" novalidate="">
                    <h2 class="page-title">Order Tracking</h2>
                    <p>To track your order please enter your Order ID in the box below and press the "Track" button.
                        This was
                        given to you on your receipt and in the confirmation email you should have received.</p>
                    <div class="form-floating my-4">
                        <input type="text" class="form-control" id="order_tracking_id" placeholder="Order ID *"
                            required="">
                        <label for="order_tracking_id">Order ID *</label>
                    </div>
                    <div class="form-floating my-4">
                        <input type="email" class="form-control" id="order_tracking_email"
                            placeholder="Billing email *" required="">
                        <label for="order_tracking_email">Billing email *</label>
                    </div>
                    <button type="submit" class="btn btn-primary btn-track w-100">TRACK</button>
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
