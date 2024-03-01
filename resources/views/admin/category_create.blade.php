<!DOCTYPE html>
<html dir="ltr" lang="en-US">

{{-- Head Component --}}
@include('home.components.head', [
    'title' => 'Add New Category | Medicapparel | Best Doctor & Surgeons Apparels in Nigeria',
])


<body>
    {{-- ICONS --}}
    <x-svg />
    {{-- Header --}}

    @include('admin.components.admin_header')

    <main>
        <div class="container mt-5">
            <div class="mb-5 d-flex justify-content-between">
                <h2>New Category:</h2>
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
            <form action="{{ route('category.add') }}" class="py-3" id="category_add_form" method="post"
                enctype="multipart/form-data">
                @csrf
                <div class="row mb-5">
                    <div class="col-12 form-group mb-space">
                        <p class="form-label fw-bold">
                            Categoy Name:
                        </p>
                        <input type="text" class="form-control fw-bold rounded-3" name="category_name" required
                            value="{{ old('category_name') }}">
                        @error('category_name')
                            <p class="text-red">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="col-12 form-group mb-space">
                        <p class="form-label fw-bold">
                            Categoy Image:
                        </p>
                        <input type="file" class="form-control fw-bold rounded-3" name="category_image" required
                            value="{{ old('category_image') }}" accept="image/jpg, image/jpeg, image/webp, image/png">
                        @error('category_image')
                            <p class="text-red">{{ $message }}</p>
                        @enderror

                        <div class="pt-2 border image_preview">
                        </div>
                    </div>
                    <div class="col-12 form-group mb-space">
                        <p class="form-label fw-bold">
                            Categoy Description:
                        </p>
                        <textarea class="form-control fw-bold rounded-3 resize mb-5" rows="5" name="category_description" required>{{ old('category_description') }}</textarea>
                        @error('category_description')
                            <p class="text-red">{{ $message }}</p>
                        @enderror
                        <div>
                            <input type="submit" value="Add Category" class="btn btn-primary">
                        </div>
                    </div>
                </div>
            </form>
            <div>

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
