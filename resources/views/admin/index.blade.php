<!DOCTYPE html>
<html dir="ltr" lang="en-US">

{{-- Head Component --}}
@include('home.components.head', [
    'title' => 'Home | Medicapparel | Best Doctor & Surgeons Apparels in Nigeria',
])


<body>
    {{-- ICONS --}}
    <x-svg />
    {{-- Header --}}

    @include('admin.components.admin_header')

    <main>
        <div class="mb-4 pb-4"></div>
        <div class="container">
            <div class="mb-4">
                <h2>Stats:</h2>
            </div>
            <div class="row mb-5">
                <div class="col-12 col-md-6 col-lg-3 col-xl-4 mb-3">
                    <div class="border p-3 py-4 rounded-3">
                        <div class="d-flex gap-3 align-items-center mb-3 py-2 border-bottom">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-building-store"
                                width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50"
                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M3 21l18 0" />
                                <path
                                    d="M3 7v1a3 3 0 0 0 6 0v-1m0 1a3 3 0 0 0 6 0v-1m0 1a3 3 0 0 0 6 0v-1h-18l2 -4h14l2 4" />
                                <path d="M5 21l0 -10.15" />
                                <path d="M19 21l0 -10.15" />
                                <path d="M9 21v-4a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v4" />
                            </svg>
                            <h5 class="fw-bold">Product Views</h5>
                        </div>
                        <h2>
                            @php
                                function customNumberFormat($number)
                                {
                                    $suffix = '';
                                    if ($number >= 1000 && $number < 1000000) {
                                        $number = $number / 1000;
                                        $suffix = 'K';
                                    } elseif ($number >= 1000000) {
                                        $number = $number / 1000000;
                                        $suffix = 'M';
                                    }
                                    return number_format($number, $number >= 10 ? 2 : 1) . $suffix;
                                }
                                echo customNumberFormat($productsViews);
                            @endphp
                        </h2>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3 col-xl-4 mb-3">
                    <div class="border p-3 py-4 rounded-3">
                        <div class="d-flex gap-3 align-items-center mb-3 py-2 border-bottom">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-shopping-cart"
                                width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50"
                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M6 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                                <path d="M17 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                                <path d="M17 17h-11v-14h-2" />
                                <path d="M6 5l14 1l-1 7h-13" />
                            </svg>
                            <h5 class="fw-bold">Orders</h5>
                        </div>
                        <h2>63</h2>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3 col-xl-4 mb-3">
                    <div class="border p-3 py-4 rounded-3">
                        <div class="d-flex gap-3 align-items-center mb-3 py-2 border-bottom">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-users"
                                width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50"
                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M9 7m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
                                <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                                <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                                <path d="M21 21v-2a4 4 0 0 0 -3 -3.85" />
                            </svg>
                            <h5 class="fw-bold">Customers</h5>
                        </div>
                        <h2>
                            @php
                                function customCustomerFormat($number)
                                {
                                    $suffix = '';
                                    if ($number >= 1000 && $number < 1000000) {
                                        $number = $number / 1000;
                                        $suffix = 'K';
                                    } elseif ($number >= 1000000) {
                                        $number = $number / 1000000;
                                        $suffix = 'M';
                                    }
                                    return number_format($number) . $suffix;
                                }
                                echo customCustomerFormat($users);
                            @endphp
                        </h2>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3 col-xl-4 mb-3">
                    <div class="border p-3 py-4 rounded-3">
                        <div class="d-flex gap-3 align-items-center mb-3 py-2 border-bottom">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-box"
                                width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50"
                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M12 3l8 4.5l0 9l-8 4.5l-8 -4.5l0 -9l8 -4.5" />
                                <path d="M12 12l8 -4.5" />
                                <path d="M12 12l0 9" />
                                <path d="M12 12l-8 -4.5" />
                            </svg>
                            <h5 class="fw-bold">Product Count</h5>
                        </div>
                        <h2>{{ $products }}</h2>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3 col-xl-4 mb-3">
                    <div class="border p-3 py-4 rounded-3">
                        <div class="d-flex gap-3 align-items-center mb-3 py-2 border-bottom">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-book"
                                width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50"
                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M3 19a9 9 0 0 1 9 0a9 9 0 0 1 9 0" />
                                <path d="M3 6a9 9 0 0 1 9 0a9 9 0 0 1 9 0" />
                                <path d="M3 6l0 13" />
                                <path d="M12 6l0 13" />
                                <path d="M21 6l0 13" />
                            </svg>
                            <h5 class="fw-bold">Blog Articles</h5>
                        </div>
                        <h2>
                            @php
                                echo customCustomerFormat($blogs);
                            @endphp
                        </h2>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3 col-xl-4 mb-3">
                    <div class="border p-3 py-4 rounded-3">
                        <div class="d-flex gap-3 align-items-center mb-3 py-2 border-bottom">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-coin-pound"
                                width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50"
                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />
                                <path d="M15 9a2 2 0 1 0 -4 0v5a2 2 0 0 1 -2 2h6" />
                                <path d="M9 12h4" />
                            </svg>
                            <h5 class="fw-bold">Revenue Today</h5>
                        </div>
                        <h2>$10,633</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 mb-5 mt-5">
                    <div class="h4 fw-bold mb-4">Recent Orders</div>
                    <div class=" overflow-scroll p-0">
                        <table class="table table-bordered border">
                            <thead>
                                <tr>
                                    <th scope="col" class="whitespace-nowrap">Order Date</th>
                                    <th scope="col" class="whitespace-nowrap">Order Id</th>
                                    <th scope="col" class="whitespace-nowrap">Customer Email</th>
                                    <th scope="col" class="whitespace-nowrap">Product</th>
                                    <th scope="col" class="whitespace-nowrap">Quantity</th>
                                    <th scope="col" class="whitespace-nowrap">Total</th>
                                    <th scope="col" class="whitespace-nowrap">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr scope="row" class="border-bottom">
                                    <td>12/02/23</td>
                                    <td>1223113</td>
                                    <td>mike@gmail.com</td>
                                    <td>
                                        <a href="#" class="text-decoration-underline">
                                            Nike Green Scrubs
                                        </a>
                                    </td>
                                    <td>12</td>
                                    <td>$189,000</td>
                                    <td>
                                        <span class="bg-warning d-inline-block p-1">Pending</span>
                                    </td>
                                </tr>
                                <tr scope="row" class="border-bottom">
                                    <td>12/02/23</td>
                                    <td>1223113</td>
                                    <td>mike@gmail.com</td>
                                    <td>
                                        <a href="#" class="text-decoration-underline">
                                            Nike Green Scrubs
                                        </a>
                                    </td>
                                    <td>12</td>
                                    <td>$189,000</td>
                                    <td>
                                        <span class="bg-warning d-inline-block p-1">Pending</span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-md-6 mb-5 mt-5">
                    <div class="h4 fw-bold mb-4">Popular Products</div>
                    <div class=" overflow-scroll p-0">
                        <table class="table border">
                            <thead>
                                <tr>
                                    <th scope="col" class="whitespace-nowrap">Image</th>
                                    <th scope="col" class="whitespace-nowrap">Product Name</th>
                                    <th scope="col" class="whitespace-nowrap">Views</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($popularProducts as $data)
                                    <tr scope="row" class="border-bottom">
                                        <td>
                                            <img width="50" src="{{ $data['images']['0']['image_url'] }}">
                                        </td>
                                        <td>{{ $data['product']['name'] }}</td>
                                        <td>
                                            @php
                                                echo customNumberFormat($data['views']);
                                            @endphp </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-md-6 mb-5 mt-5">
                    <div class="h4 fw-bold mb-4">Popular Articles</div>
                    <div class=" overflow-scroll p-0">
                        <table class="table border">
                            <thead>
                                <tr>
                                    <th scope="col" class="whitespace-nowrap">Image</th>
                                    <th scope="col" class="whitespace-nowrap">Blog Title</th>
                                    <th scope="col" class="whitespace-nowrap">Views</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr scope="row" class="border-bottom">
                                    <td>
                                        <img width="50" src="/images/products/product_0-1.jpg">
                                    </td>
                                    <td>Why Fashion is key to the right people</td>
                                    <td>350</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 mb-5 mt-5">
                    <div class="h4 fw-bold mb-4">Users By Country</div>
                    <div class=" overflow-scroll p-0">

                    </div>
                </div>
            </div>
        </div>
    </main>



    <!----------- External JavaScripts ---------->
    <script src="/js/plugins/jquery.min.js"></script>
    <script src="/js/plugins/bootstrap.bundle.min.js"></script>
    <script src="/js/plugins/bootstrap-slider.min.js"></script>
    <!-- <script src="/js/plugins/jquery.waypoints.min.js"></script> -->
    <!-- <script src="/js/plugins/sticky.min.js"></script> -->
    <script src="/js/plugins/swiper.min.js"></script>
    <script src="/js/plugins/countdown.js"></script>

    <!-------------- Footer Scripts ------------->
    <script src="/js/functions.js"></script>
    <script src="/js/theme.js"></script>

</body>

</html>
