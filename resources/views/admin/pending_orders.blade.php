<!DOCTYPE html>
<html dir="ltr" lang="en-US">

{{-- Head Component --}}
@include('home.components.head', [
    'title' => 'Pending Orders | Medicapparel | Best Doctor & Surgeons Apparels in Nigeria',
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
                <h2>Pending Orders:</h2>
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
            </div>
        </div>
    </main>


    <!----------- External JavaScripts ---------->
    <script src="/js/plugins/jquery.min.js"></script>
    <script src="/js/plugins/bootstrap.bundle.min.js"></script>
    <script src="/js/plugins/bootstrap-slider.min.js"></script>
    <script src="/js/sweetalert.min.js"></script>
    <script src="/js/plugins/swiper.min.js"></script>
    <script src="/js/plugins/countdown.js"></script>
    <script src="https://unpkg.com/dropzone@6.0.0-beta.1/dist/dropzone-min.js"></script>

    <!-------------- Footer Scripts ------------->
    <script src="/js/functions.js"></script>
    <script src="/js/theme.js"></script>

</body>

</html>
