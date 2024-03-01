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
                <h2>Products:</h2>
            </div>

            <div class="row">
                <div class="col-md-12 mb-5 mt-5">
                    <div class="h4 fw-bold mb-4 d-flex justify-content-between">All Products
                        <a href="/admin/products/add" class="btn btn-primary btn-sm">Add Product</a>
                    </div>
                    <div class=" overflow-scroll p-0">
                        <table class="table border">
                            <thead>
                                <tr>
                                    <th scope="col" class="whitespace-nowrap">Image</th>
                                    <th scope="col" class="whitespace-nowrap">Product Name</th>
                                    <th scope="col" class="whitespace-nowrap">Price</th>
                                    <th scope="col" class="whitespace-nowrap">Stock</th>
                                    <th scope="col" class="whitespace-nowrap">Category</th>
                                    <th scope="col" class="whitespace-nowrap">Weight</th>
                                    <th scope="col" class="whitespace-nowrap">Dimension</th>
                                    <th scope="col" class="whitespace-nowrap">Status</th>
                                    <th scope="col" class="whitespace-nowrap">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $data)
                                    <tr scope="row" class="border-bottom align-middle">
                                        <td class="fw-normal">
                                            <img src="{{ $data['images']['0']['image_url'] }}" width="60" />
                                        </td>
                                        <td class="whitespace-nowrap fw-light">
                                            {{ $data['product']['name'] }}
                                        </td>
                                        <td class="fw-light">
                                            {{ number_format($data['product']['price']) }}
                                        </td>
                                        <td class="fw-light">
                                            {{ $data['product']['stock'] }}
                                        </td>
                                        <td class="fw-light">
                                            {{ $data['product']['category'] }}
                                        </td>
                                        <td class="fw-light">
                                            {{ $data['product']['weight'] }}
                                        </td>
                                        <td class="fw-light">
                                            {{ $data['product']['dimensions'] }}
                                        </td>
                                        <td class="fw-light">
                                            {{ $data['product']['visibility'] }}
                                        </td>
                                        <td class="fw-light">
                                            <span class="d-flex items-center gap-1">
                                                <a href="/admin/product/{{ $data['product']['id'] }}/edit"
                                                    class="btn btn-primary btn-sm">Edit</a>
                                                <form action="/admin/products/delete/{{ $data['product']['id'] }}"
                                                    method="post" class="delete-product">
                                                    @csrf
                                                    @method('DELETE')
                                                    <input type="submit" class="btn btn-danger btn-sm"
                                                        name="product_id" value="Delete" />
                                                </form>
                                            </span>
                                        </td>
                                    </tr>
                                @endforeach
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
    <!-- <script src="/js/plugins/jquery.waypoints.min.js"></script> -->
    <!-- <script src="/js/plugins/sticky.min.js"></script> -->
    <script src="/js/plugins/swiper.min.js"></script>
    <script src="/js/plugins/countdown.js"></script>

    <!-------------- Footer Scripts ------------->
    <script src="/js/functions.js"></script>
    <script src="/js/theme.js"></script>

</body>

</html>
