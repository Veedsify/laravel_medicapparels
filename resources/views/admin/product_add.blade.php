<!DOCTYPE html>
<html dir="ltr" lang="en-US">

{{-- Head Component --}}
@include('home.components.head', [
    'title' => 'Add New Product | Medicapparel ',
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
                <h2>New Product:</h2>
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
            <form action="{{ route('addNewProduct') }}" class="py-3" id="add_product_form" method="post"
                enctype="multipart/form-data">
                @csrf
                <div class="row mb-5">
                    <div class="col-12 form-group mb-space">
                        <p class="form-label fw-bold">
                            Product Name:
                        </p>
                        <input type="text" class="form-control fw-bold rounded-3" name="product_name" required
                            value="{{ old('product_name') }}">
                        @error('product_name')
                            <p class="text-red">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="col-md-6 form-group mb-space">
                        <p class="form-label fw-bold">
                            Product Price:
                        </p>
                        <input type="text" class="form-control fw-bold rounded-3" name="product_price" required
                            value="{{ old('product_price') }}">
                        @error('product_price')
                            <p class="text-red">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="col-md-6 form-group mb-space">
                        <p class="form-label fw-bold">
                            Product Quantity:
                        </p>
                        <input type="text" class="form-control fw-bold rounded-3" name="product_quantity" required
                            value="{{ old('product_quantity') }}">
                        @error('product_quantity')
                            <p class="text-red">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="col-md-12 form-group mb-space">
                        <p class="form-label fw-bold">
                            Product Descrition:
                        </p>
                        <textarea type="text" class="form-control fw-bold rounded-3" rows="5" cols="5" required
                            name="product_description">{{ old('product_description') }}</textarea>
                        @error('product_description')
                            <p class="text-red">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 form-group mb-space">
                        <p class="form-label fw-bold">
                            Product Category:
                        </p>
                        <select type="text" class="form-select fw-bold rounded-3" name="product_category" required>
                            <option value="" selected disabled>Select a category</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->name }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                        <a href="{{ route('category.create') }}" class="text-primary text-decoration-underline">Add New
                            Category</a>
                        @error('product_category')
                            <p class="text-red">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 form-group mb-space">
                        <p class="form-label fw-bold">
                            Product Weight (kg):
                        </p>
                        <input type="text" class="form-control fw-bold rounded-3" name="product_weight" required
                            value="{{ old('product_weight') }}">
                        @error('product_weight')
                            <p class="text-red">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="col-md-6 form-group mb-space">
                        <p class="form-label fw-bold">
                            Product Dimensions (cm):
                        </p>
                        <input type="text" class="form-control fw-bold rounded-3" name="product_dimension"
                            value="{{ old('product_dimension') }}" required>
                        @error('product_dimension')
                            <p class="text-red">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="col-md-6 form-group mb-space">
                        <p class="form-label fw-bold">
                            Product SKU (if any):
                        </p>
                        <input type="text" class="form-control fw-bold rounded-3" name="product_sku"
                            value="{{ old('product_sku') }}">
                        @error('product_sku')
                            <p class="text-red">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="col-md-6 form-group mb-space">
                        <p class="form-label fw-bold">
                            Product Visibility:
                        </p>
                        <select type="file" class="form-select fw-bold rounded-3" name="product_status" required>
                            <option value="" selected disabled>Select a visibility</option>
                            <option value="1">Visible</option>
                            <option value="2">Hidden</option>
                        </select>
                        @error('product_status')
                            <p class="text-red">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="col-md-6 form-group mb-5">
                        <p class="form-label fw-bold">
                            Product Sizes:
                        </p>
                        <div class="d-flex flex-wrap col-4 gap-4">
                            <div class="d-flex align-items-center">
                                <input type="checkbox" class="form-check-input w-9 h-9 inline-block mr-3 cursor-pointer"
                                    id="size_xs" name="product_sizes[]" value="XS">
                                <label class="fw-bold" for="size_xs">XS</label>
                            </div>
                            <div class="d-flex align-items-center">
                                <input type="checkbox" class="form-check-input w-9 h-9 inline-block mr-3 cursor-pointer"
                                    id="size_s" name="product_sizes[]" value="S">
                                <label class="fw-bold" for="size_s">S</label>
                            </div>
                            <div class="d-flex align-items-center">
                                <input type="checkbox"
                                    class="form-check-input w-9 h-9 inline-block mr-3 cursor-pointer" id="size_m"
                                    name="product_sizes[]" value="M">
                                <label class="fw-bold" for="size_m">M</label>
                            </div>
                            <div class="d-flex align-items-center">
                                <input type="checkbox"
                                    class="form-check-input w-9 h-9 inline-block mr-3 cursor-pointer" id="size_l"
                                    name="product_sizes[]" value="L">
                                <label class="fw-bold" for="size_l">L</label>
                            </div>
                            <div class="d-flex align-items-center">
                                <input type="checkbox"
                                    class="form-check-input w-9 h-9 inline-block mr-3 cursor-pointer" id="size_xl"
                                    name="product_sizes[]" value="XL">
                                <label class="fw-bold" for="size_xl">XL</label>
                            </div>
                            <div class="d-flex align-items-center">
                                <input type="checkbox"
                                    class="form-check-input w-9 h-9 inline-block mr-3 cursor-pointer" id="size_xxl"
                                    name="product_sizes[]" value="XXL">
                                <label class="fw-bold" for="size_xxl">XXL</label>
                            </div>
                        </div>
                        @error('product_sizes')
                            <p class="text-red">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="col-md-12 form-group ">
                        <p class="form-label fw-bold">
                            Product Colors:
                        </p>
                        <div class="d-grid gridCols p-3 m-md-2 gap-md-2 border rounded-md">
                            @foreach ($colors as $color)
                                <div class="d-flex align-items-center justify-content-between gap-1 p-2 border">
                                    <label for="color_{{ $color->name }}"
                                        class="fw-bold cursor-pointer text-truncate">
                                        {{ strtoupper($color->name) }}
                                    </label>
                                    <input type="checkbox"
                                        class="form-check-input-custom inline-block mr-3 cursor-pointer"
                                        style="accent-color: {{ $color->name }} !important; border:2px solid {{ $color->name }}; "
                                        id="color_{{ $color->name }}" name="product_colors[]"
                                        value="{{ $color->name }}">
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
                    <div class="col-6 col-md-4 col-lg-3 p-3 drop_container">
                        <label for="images1" class="image_labels">
                            <input type="file" name="images[]" id="images1"
                                class="form-control form_images d-none">
                            <img src="/files/photo.png" alt="product_image" class="img_previews img-thumbnail">
                            <a href="#" class="remove_image"
                                class="d-inline-block p-1 text-decoration-underline">Remove</a>
                        </label>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3 p-3 drop_container">
                        <label for="images2" class="image_labels">
                            <input type="file" name="images[]" id="images2"
                                class="form-control form_images d-none">
                            <img src="/files/photo.png" alt="product_image" class="img_previews img-thumbnail">
                            <a href="#" class="remove_image"
                                class="d-inline-block p-1 text-decoration-underline">Remove</a>
                        </label>
                    </div>
                </div>

                <div class="row">
                    <div class="mt-3">
                        <a href="#" id="add_image" class="btn btn-success">
                            Add Image
                        </a>
                    </div>
                    <div class="col-12 col-lg-4 mt-5">
                        <input class="btn btn-primary w-100" type="submit" id="add_product_form_btn"
                            value="Add Product" />
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
    <script src="/js/plugins/swiper.min.js"></script>
    <script src="/js/plugins/countdown.js"></script>
    <script src="https://unpkg.com/dropzone@6.0.0-beta.1/dist/dropzone-min.js"></script>

    <!-------------- Footer Scripts ------------->
    <script src="/js/functions.js"></script>
    <script src="/js/theme.js"></script>

</body>

</html>
