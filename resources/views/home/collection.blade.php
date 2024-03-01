<!DOCTYPE html>
<html dir="ltr" lang="en-US">

{{-- Head Component --}}
@include('home.components.head', [
    'title' => 'Women | Medicapparel | Best Doctor & Surgeons Apparels in Nigeria',
])


<body>
    <x-svg />
    {{-- Header --}}
    <x-header />
    {{-- HeaderEnd --}}


    <main>
        <section>
            <div style="border-color: #eeeeee;">
                <div class="shop-banner position-relative ">
                    <div class="background-img background-img_overlay" style="background-color: #eeeeee;">
                        <img loading="lazy" src="/uploads/category/{{$category->image_url}}" width="1903" height="420" alt="Pattern"
                            class="slideshow-bg__img object-fit-cover">
                    </div>

                    <div class="shop-banner__content container position-absolute start-50 top-50 translate-middle">
                        <h1 class="text-uppercase text-white text-center fw-bold mb-3 mb-xl-4 mb-xl-5">
                            {{ ucwords($category->name) }}'s
                        </h1>
                        <p class="text-bold text-white text-center text-lg font-weight-bold fs-4">Shop
                            {{ ucwords($category->name) }}'s Apparels
                        </p>
                    </div><!-- /.shop-banner__content -->
                </div><!-- /.shop-banner position-relative -->
            </div>
        </section>

        <div class="mb-4 pb-lg-3"></div>

        <section class="shop-main container">
            <div class="d-flex justify-content-between mb-4 pb-md-2">
                <div class="breadcrumb mb-0 d-none d-md-block flex-grow-1">
                    <a href="#" class="menu-link menu-link_us-s text-uppercase fw-medium">Home</a>
                    <span class="breadcrumb-separator menu-link fw-medium ps-1 pe-1">/</span>
                    <a href="#" class="menu-link menu-link_us-s text-uppercase fw-medium">The Shop</a>
                </div><!-- /.breadcrumb -->
            </div><!-- /.d-flex justify-content-between -->

            <div class="products-grid row row-cols-2 row-cols-md-3" id="products-grid">

                @foreach ($products as $data)
                    <div class="product-card-wrapper">
                        <div class="product-card mb-3 mb-md-4 mb-xxl-5">
                            <div class="pc__img-wrapper">
                                <div class="swiper-container background-img js-swiper-slider"
                                    data-settings='{"resizeObserver": true}'>
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <a href="/product/{{ $data['product']['slug'] }}"><img loading="lazy"
                                                    src="{{ $data['images']['0']['image_url'] }}" width="258"
                                                    height="313" alt="Cropped Faux leather Jacket"
                                                    class="pc__img"></a>
                                        </div><!-- /.pc__img-wrapper -->
                                        <div class="swiper-slide">
                                            <a href="/product/{{ $data['product']['slug'] }}"><img loading="lazy"
                                                    src="{{ $data['images']['1']['image_url'] }}" width="258"
                                                    height="313" alt="Cropped Faux leather Jacket"
                                                    class="pc__img"></a>
                                        </div><!-- /.pc__img-wrapper -->
                                    </div>
                                    <span class="pc__img-prev"><svg width="7" height="11" viewbox="0 0 7 11"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <use href="#icon_prev_sm"></use>
                                        </svg></span>
                                    <span class="pc__img-next"><svg width="7" height="11" viewbox="0 0 7 11"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <use href="#icon_next_sm"></use>
                                        </svg></span>
                                </div>
                                @if (number_format($data['product']['stock']) > 0)
                                    <button
                                        class="pc__atc btn anim_appear-bottom btn position-absolute
                                    border-0 text-uppercase fw-medium js-add-cart js-open-aside"
                                        data-product_id="{{ $data['product']['uuid'] }}" data-aside="cartDrawer"
                                        title="Add To Cart">Add To Cart
                                    </button>
                                @endif
                            </div>

                            <div class="pc__info position-relative">
                                <p class="pc__category">{{ $data['product']['category'] }}</p>
                                <h6 class="pc__title"><a href="/product/{{ $data['product']['slug'] }}">
                                        {{ $data['product']['name'] }}
                                    </a></h6>
                                <div class="product-card__price d-flex">
                                    <span class="money price">₦{{ number_format($data['product']['price']) }}</span>
                                </div>
                                <button
                                    class="pc__btn-wl position-absolute top-0 end-0 bg-transparent border-0 js-add-wishlist"
                                    title="Add To Wishlist">
                                    <svg width="16" height="16" viewbox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <use href="#icon_heart"></use>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div><!-- /.products-grid row -->

            <p class="mb-1 text-center fw-medium">SHOWING 36 of 497 items</p>

        </section><!-- /.shop-main container -->
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

    <!-------------- Footer Scripts ------------->
    <script src="/js/functions.js"></script>
    <script src="/js/theme.js"></script>

</body>

</html>
