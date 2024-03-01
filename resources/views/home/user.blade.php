<!DOCTYPE html>
<html dir="ltr" lang="en-US">

<!-- Head -->
@include('home.components.head', ['title' => 'Account Dashboard']);
<!-- HeadEnd -->

<body>
    <x-svg />

    {{-- Header --}}
    <x-header />
    {{-- HeaderEnds --}}
    <main>
        <div class="mb-4 pb-4"></div>
        <section class="my-account container">
            <h2 class="page-title">My Account</h2>
            <div class="row">
                <div class="col-lg-3">
                    <ul class="account-nav">
                        <li><a href="/user" class="menu-link menu-link_us-s menu-link_active">Dashboard</a></li>
                        <li><a href="/user/orders" class="menu-link menu-link_us-s">Orders</a></li>
                        <li><a href="/user/addresses" class="menu-link menu-link_us-s">Addresses</a></li>
                        <li><a href="/user/details" class="menu-link menu-link_us-s">Account Details</a></li>
                        <li><a href="/user/wishlist" class="menu-link menu-link_us-s">Wishlist</a></li>
                        <form action="/auth/logout" method="post" class="d-inline-block">
                            @csrf
                            <button type="submit" class="btn fw-bold text-red menu-link menu-link_us-s">Logout</button>
                        </form>
                    </ul>
                </div>
                <div class="col-lg-9">
                    <div class="page-content my-account__dashboard">
                        <p>Hello, <strong>{{ auth()->user()->username }}</strong></p>
                        <p>From your account dashboard you can view your <a class="unerline-link"
                                href="/user/orders  ">recent orders</a>,
                            manage your <a class="unerline-link" href="/user/addresses">shipping and billing
                                addresses</a>, and <a class="unerline-link" href="/user/details">edit your password and
                                account
                                details.</a></p>
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
