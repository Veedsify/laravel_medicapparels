<!DOCTYPE html>
<html dir="ltr" lang="en-US">

{{-- Head Component --}}
@include('home.components.head', [
    'title' => 'Update ' . $data['product']['name'] . ' | Medicapparel ',
])


<body>
    {{-- ICONS --}}
    <x-svg />
    {{-- Header --}}

    @include('admin.components.admin_header')

    <main>
        <div class="mb-4 pb-4"></div>
        <div class="container">
            <div class="mb-5">
                <h2>Update Product: </h2>
            </div>
            <div>
                @if (session()->has('error'))
                    <div class="alert alert-danger">
                        {{ session()->get('error') }}
                    </div>
                @elseif(session()->has('success'))
                    <div class="alert alert-success">
                        {{ session()->get('success') }}
                    </div>
                @endif
            </div>
            <form action="/admin/products/edit/{{ $data['product']['id'] }}" class="py-3" id="add_product_form"
                enctype="multipart/form-data" method="post">
                @csrf
                <div class="row mb-5">
                    <div class="col-12 form-group mb-space">
                        <p class="form-label fw-bold">
                            Product Name:
                        </p>
                        <input type="text" class="form-control fw-bold rounded-3" name="product_name"
                            value="{{ old('product_name') ? old('product_name') : $data['product']['name'] }}">
                        @error('product_name')
                            <p class="text-red">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="col-md-6 form-group mb-space">
                        <p class="form-label fw-bold">
                            Product Price:
                        </p>
                        <input type="text" class="form-control fw-bold rounded-3" name="product_price"
                            value="{{ old('product_price') ? old('product_price') : $data['product']['price'] }}">
                        @error('product_price')
                            <p class="text-red">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="col-md-6 form-group mb-space">
                        <p class="form-label fw-bold">
                            Product Quantity:
                        </p>
                        <input type="text" class="form-control fw-bold rounded-3" name="product_quantity"
                            value="{{ old('product_quantity') ? old('product_quantity') : $data['product']['stock'] }}">
                        @error('product_quantity')
                            <p class="text-red">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="col-md-12 form-group mb-space">
                        <p class="form-label fw-bold">
                            Product Descrition:
                        </p>
                        <textarea type="text" class="form-control fw-bold rounded-3" rows="5" cols="5"
                            name="product_description">{{ old('product_description') ? old('product_description') : $data['product']['description'] }}</textarea>
                        @error('product_description')
                            <p class="text-red">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 form-group mb-space">
                        <p class="form-label fw-bold">
                            Product Category:
                        </p>
                        <select type="text" class="form-select fw-bold rounded-3" name="product_category">
                            <option disabled>Select a category</option>
                            <option value="men" {{ $data['product']['category'] == 'men' ? 'selected' : '' }}>Men
                            </option>
                            <option value="women" {{ $data['product']['category'] == 'women' ? 'selected' : '' }}>
                                Women
                            </option>
                            <option value="unisex" {{ $data['product']['category'] == 'unisex' ? 'selected' : '' }}>
                                Unisex
                            </option>
                        </select>
                        @error('product_category')
                            <p class="text-red">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 form-group mb-space">
                        <p class="form-label fw-bold">
                            Product Weight (kg):
                        </p>
                        <input type="text" class="form-control fw-bold rounded-3" name="product_weight"
                            value="{{ old('product_weight') ? old('product_weight') : $data['product']['weight'] }}">
                        @error('product_weight')
                            <p class="text-red">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="col-md-6 form-group mb-space">
                        <p class="form-label fw-bold">
                            Product Dimensions (cm):
                        </p>
                        <input type="text" class="form-control fw-bold rounded-3" name="product_dimension"
                            value="{{ old('product_dimension') ? old('product_dimension') : $data['product']['dimensions'] }}">
                        @error('product_dimension')
                            <p class="text-red">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="col-md-6 form-group mb-space">
                        <p class="form-label fw-bold">
                            Product SKU (if any):
                        </p>
                        <input type="text" class="form-control fw-bold rounded-3" name="product_sku"
                            value="{{ old('product_sku') ? old('product_sku') : $data['product']['sku'] }}">
                        @error('product_sku')
                            <p class="text-red">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="col-md-6 form-group mb-space">
                        <p class="form-label fw-bold">
                            Product Visibility:
                        </p>
                        <select type="file" class="form-select fw-bold rounded-3" name="product_status">
                            <option value="" selected disabled>Select a visibility</option>
                            <option value="1" {{ $data['product']['visibility'] == 'visible' ? 'selected' : '' }}>
                                Visible
                            </option>
                            <option value="2" {{ $data['product']['visibility'] == 'hidden' ? 'selected' : '' }}>
                                Hidden
                            </option>
                        </select>
                        @error('product_status')
                            <p class="text-red">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="col-md-6 form-group mb-5">
                        <p class="form-label fw-bold">
                            Product Sizes:
                        </p>
                        <div class="d-flex col-4 gap-4">
                            <div class="d-flex align-items-center">
                                <input type="checkbox" class="form-check-input w-9 h-9 inline-block mr-3 cursor-pointer"
                                    id="size_xs" name="product_sizes[]" value="XS"
                                    {{ in_array('XS', array_column($data['size'], 'name')) ? 'checked' : '' }}>
                                <label class="fw-bold" for="size_xs">XS</label>
                            </div>
                            <div class="d-flex align-items-center">
                                <input type="checkbox" class="form-check-input w-9 h-9 inline-block mr-3 cursor-pointer"
                                    id="size_s" name="product_sizes[]" value="S"
                                    {{ in_array('S', array_column($data['size'], 'name')) ? 'checked' : '' }}>
                                <label class="fw-bold" for="size_s">S</label>
                            </div>
                            <div class="d-flex align-items-center">
                                <input type="checkbox"
                                    class="form-check-input w-9 h-9 inline-block mr-3 cursor-pointer" id="size_m"
                                    name="product_sizes[]" value="M"
                                    {{ in_array('M', array_column($data['size'], 'name')) ? 'checked' : '' }}>
                                <label class="fw-bold" for="size_m">M</label>
                            </div>
                            <div class="d-flex align-items-center">
                                <input type="checkbox"
                                    class="form-check-input w-9 h-9 inline-block mr-3 cursor-pointer" id="size_l"
                                    name="product_sizes[]" value="L"
                                    {{ in_array('L', array_column($data['size'], 'name')) ? 'checked' : '' }}>
                                <label class="fw-bold" for="size_l">L</label>
                            </div>
                            <div class="d-flex align-items-center">
                                <input type="checkbox"
                                    class="form-check-input w-9 h-9 inline-block mr-3 cursor-pointer" id="size_xl"
                                    name="product_sizes[]" value="XL"
                                    {{ in_array('XL', array_column($data['size'], 'name')) ? 'checked' : '' }}>
                                <label class="fw-bold" for="size_xl">XL</label>
                            </div>
                            <div class="d-flex align-items-center">
                                <input type="checkbox"
                                    class="form-check-input w-9 h-9 inline-block mr-3 cursor-pointer" id="size_xxl"
                                    name="product_sizes[]" value="XXL"
                                    {{ in_array('XXL', array_column($data['size'], 'name')) ? 'checked' : '' }}>
                                <label class="fw-bold" for="size_xxl">XXL</label>
                            </div>
                        </div>
                        @error('product_sizes')
                            <p class="text-red">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="col-md-12 form-group mb-space">
                        <p class="form-label fw-bold">
                            Product Colors:
                        </p>
                        <div class="d-grid gridCols p-3 m-md-2 gap-md-2 border rounded-md">
                            @foreach ($colors as $color)
                                <div class="d-flex align-items-center justify-content-between gap-1 p-2 border">
                                    <label for="color_{{ $color->name }}"
                                        class="fw-bold cursor-pointer text-truncate"
                                        {{ in_array($color->name, array_column($data['colors'], 'name')) ? 'style=color:black' : '' }}>
                                        {{ strtoupper($color->name) }}
                                    </label>
                                    <input type="checkbox"
                                        class="form-check-input-custom inline-block mr-3 cursor-pointer"
                                        style="accent-color: {{ $color->name }} !important; border:2px solid {{ $color->name }}; "
                                        id="color_{{ $color->name }}" name="product_colors[]"
                                        value="{{ $color->name }}"
                                        {{ in_array($color->name, array_column($data['colors'], 'name')) ? 'checked' : '' }}>
                                </div>
                            @endforeach
                        </div>
                        @error('product_colors')
                            <p class="text-red">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                {{--  IMAGES --}}
                @error('images')
                    <p class="text-red">{{ $message }}</p>
                @enderror
                <div class="row" id="image_drop">
                    @foreach ($data['images'] as $image)
                        <div class="col-6 col-md-4 col-lg-3 p-3 drop_container">
                            <label for="images{{ $loop->index }}" class="image_labels">
                                <input type="file" name="images[]" id="images{{ $loop->index }}"
                                    class="form-control form_images d-none">
                                <img src="{{ $image['image_url'] }}" alt="product_image"
                                    class="img_previews img-thumbnail">
                                <a href="#" class="remove_image"
                                    data-product_id="{{ $data['product']['id'] }}"
                                    data-image_id="{{ $image['id'] }}"
                                    class="d-inline-block p-1 text-decoration-underline">Remove</a>
                            </label>
                        </div>
                    @endforeach
                </div>

                <div class="row">
                    <div class="mt-3">
                        <a href="#" id="add_image" class="btn btn-success">
                            Add Image
                        </a>
                    </div>
                    <div class="col-12 col-lg-4 mt-5">
                        <input class="btn btn-primary w-100" type="submit" id="add_product_form_btn"
                            value="Update Product" />
                    </div>
                </div>

            </form>
        </div>
    </main>


    <!----------- External JavaScripts ---------->
    <script src="/js/plugins/jquery.min.js"></script>
    <script src="/js/plugins/bootstrap.bundle.min.js"></script>
    <script src="/js/plugins/bootstrap-slider.min.js"></script>

    <script src="/js/sweetalert.min.js"></script>
    <script src="/js/plugins/countdown.js"></script>
    <script src="/js/plugins/swiper.min.js"></script>


    <!-------------- Footer Scripts ------------->
    <script src="/js/functions.js"></script>
    <script src="/js/theme.js"></script>

</body>

</html>
