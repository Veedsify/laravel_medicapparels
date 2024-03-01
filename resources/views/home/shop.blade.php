<!DOCTYPE html>
<html dir="ltr" lang="en-US">

{{-- Head Component --}}
@include('home.components.head', [
    'title' => 'Shop | Medicapparel | Best Doctor & Surgeons Apparels in Nigeria',
])


<body>
    <x-svg />
    {{-- Header --}}
    <x-header />
    {{-- Header Ends --}}

    <main>
        <section class="shop-main container d-flex pt-4 pt-xl-5">
            <x-filters_shop :categories="$categories" :colors="$colors" :sizes="$sizes" :query="$query" />

            <div class="shop-list flex-grow-1">

                <x-shop_sliders />

                {{-- PRODUCTS STARTS --}}

                <div class="products-grid row row-cols-2 row-cols-md-3" id="products-grid">
                    @if (count($products) == 0)
                        <div class="col-12 mt-5 mb-5">
                            <h1 class="">
                                No Products Found
                            </h1>
                        </div>
                    @endif
                    @foreach ($products as $data)
                        <div class="product-card-wrapper">
                            <div class="product-card mb-3 mb-md-4 mb-xxl-5">
                                <div class="pc__img-wrapper">
                                    <div class="swiper-container background-img js-swiper-slider"
                                        data-settings='{"resizeObserver": true}'>
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <a href="/product/{{ $data['product']['slug'] }}"
                                                    class="product_query_link">
                                                    <img loading="lazy" src="{{ $data['images'][0]['image_url'] }}"
                                                        width="330" height="400"
                                                        alt="{{ $data['product']['name'] }}" class="pc__img">
                                                </a>
                                            </div>
                                            <div class="swiper-slide">
                                                <a href="/product/{{ $data['product']['slug'] }}"
                                                    class="product_query_link">
                                                    <img loading="lazy" src="{{ $data['images'][1]['image_url'] }}"
                                                        width="330" height="400"
                                                        alt="{{ $data['product']['name'] }}" class="pc__img">
                                                </a>
                                            </div>
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
                                    <button data-product_id="{{ $data['product']['uuid'] }}"
                                        class="pc__atc btn anim_appear-bottom btn position-absolute border-0 text-uppercase fw-medium js-add-cart js-open-aside"
                                        data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
                                </div>

                                <div class="pc__info position-relative">
                                    <p class="pc__category">{{ $data['product']['category'] }}</p>
                                    <h6 class="pc__title"><a class="product_query_link"
                                            href="{{ $data['product']['slug'] }}">{{ $data['product']['name'] }}</a>
                                    </h6>
                                    <div class="product-card__price d-flex">
                                        <span
                                            class="money price">₦{{ number_format($data['product']['price']) }}</span>
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

                <nav class="shop-pages d-flex justify-content-between mt-3" aria-label="Page navigation">
                    <a href="#" class="btn-link d-inline-flex align-items-center">
                        <svg class="me-1" width="7" height="11" viewbox="0 0 7 11"
                            xmlns="http://www.w3.org/2000/svg">
                            <use href="#icon_prev_sm"></use>
                        </svg>
                        <span class="fw-medium">PREV</span>
                    </a>
                    <ul class="pagination mb-0">
                        <li class="page-item"><a class="btn-link px-1 mx-2 btn-link_active" href="#">1</a></li>
                        <li class="page-item"><a class="btn-link px-1 mx-2" href="#">2</a></li>
                        <li class="page-item"><a class="btn-link px-1 mx-2" href="#">3</a></li>
                        <li class="page-item"><a class="btn-link px-1 mx-2" href="#">4</a></li>
                    </ul>
                    <a href="#" class="btn-link d-inline-flex align-items-center">
                        <span class="fw-medium me-1">NEXT</span>
                        <svg width="7" height="11" viewbox="0 0 7 11" xmlns="http://www.w3.org/2000/svg">
                            <use href="#icon_next_sm"></use>
                        </svg>
                    </a>
                </nav>
            </div>
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
    <script src="/js/sorting.js"></script>
    <script src="/js/functions.js"></script>
    <script src="/js/theme.js"></script>

</body>

</html>
