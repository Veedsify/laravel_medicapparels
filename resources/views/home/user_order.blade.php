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
        <section class="my-account container">
            <h2 class="page-title">Orders</h2>
            <div class="row">
                <div class="col-lg-3">
                    <ul class="account-nav">
                        <li><a href="/user" class="menu-link menu-link_us-s">Dashboard</a></li>
                        <li><a href="/user/orders" class="menu-link menu-link_us-s menu-link_active">Orders</a></li>
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
                    <div class="page-content my-account__orders-list">
                        <table class="orders-table">
                            <thead>
                                <tr>
                                    <th>Order</th>
                                    <th>Date</th>
                                    <th>Status</th>
                                    <th>Total</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>#2416</td>
                                    <td>October 1, 2023</td>
                                    <td>On hold</td>
                                    <td>$1,200.65 for 3 items</td>
                                    <td>
                                        <button class="btn btn-primary">VIEW</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>#2417</td>
                                    <td>October 2, 2023</td>
                                    <td>On hold</td>
                                    <td>$1,200.65 for 3 items</td>
                                    <td>
                                        <button class="btn btn-primary">VIEW</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>#2418</td>
                                    <td>October 3, 2023</td>
                                    <td>On hold</td>
                                    <td>$1,200.65 for 3 items</td>
                                    <td>
                                        <button class="btn btn-primary">VIEW</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>#2419</td>
                                    <td>October 4, 2023</td>
                                    <td>On hold</td>
                                    <td>$1,200.65 for 3 items</td>
                                    <td>
                                        <button class="btn btn-primary">VIEW</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
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
