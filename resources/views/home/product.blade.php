<!DOCTYPE html>
<html dir="ltr" lang="en-US">

{{-- Head Component --}}
@include('home.components.head', [
    'title' => $products[0]['product']['name'] . ' | Medicapparel | Best Doctor & Surgeons Apparels in Nigeria',
])

<body>
    <x-svg />
    {{-- Header --}}
    <x-header />
    {{-- HeaderEnd --}}

    <main>
        @foreach ($products as $product)
            <div class="mb-md-1 pb-md-3"></div>
            <section class="product-single container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="product-single__media" data-media-type="vertical-thumbnail">
                            <div class="product-single__image">
                                <div class="swiper-container">
                                    <div class="swiper-wrapper">
                                        @php
                                            $images = $product['images'];
                                        @endphp
                                        @foreach ($images as $image)
                                            <div class="swiper-slide product-single__image-item">
                                                <img loading="lazy" class="h-auto" src="{{ $image['image_url'] }}"
                                                    width="674" height="674" alt="">
                                                <a data-fancybox="gallery" href="{{ $image['image_url'] }}"
                                                    data-bs-toggle="tooltip" data-bs-placement="left" title="Zoom">
                                                    <svg width="16" height="16" viewbox="0 0 16 16"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <use href="#icon_zoom"></use>
                                                    </svg>
                                                </a>
                                            </div>
                                        @endforeach
                                    </div>
                                    <div class="swiper-button-prev">
                                        <svg width="7" height="11" viewbox="0 0 7 11"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <use href="#icon_prev_sm"></use>
                                        </svg>
                                    </div>
                                    <div class="swiper-button-next">
                                        <svg width="7" height="11" viewbox="0 0 7 11"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <use href="#icon_next_sm"></use>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div class="product-single__thumbnail">
                                <div class="swiper-container">
                                    <div class="swiper-wrapper">
                                        @foreach ($images as $image)
                                            <div class="swiper-slide product-single__image-item">
                                                <img loading="lazy" class="h-auto" src="{{ $image['image_url'] }}"
                                                    width="104" height="104" alt="">
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="d-flex justify-content-between mb-4 pb-md-2">
                            <div class="breadcrumb mb-0 d-none d-md-block flex-grow-1">
                                <a href="#" class="menu-link menu-link_us-s text-uppercase fw-medium">Home</a>
                                <span class="breadcrumb-separator menu-link fw-medium ps-1 pe-1">/</span>
                                <a href="#" class="menu-link menu-link_us-s text-uppercase fw-medium">The Shop</a>
                            </div><!-- /.breadcrumb -->

                        </div>
                        <h1 class="product-single__name">{{ $product['product']['name'] }}</h1>
                        {{-- <div class="product-single__rating">
                <div class="reviews-group d-flex">
                    <svg class="review-star" viewbox="0 0 9 9" xmlns="http://www.w3.org/2000/svg">
                        <use href="#icon_star"></use>
                    </svg>
                    <svg class="review-star" viewbox="0 0 9 9" xmlns="http://www.w3.org/2000/svg">
                        <use href="#icon_star"></use>
                    </svg>
                    <svg class="review-star" viewbox="0 0 9 9" xmlns="http://www.w3.org/2000/svg">
                        <use href="#icon_star"></use>
                    </svg>
                    <svg class="review-star" viewbox="0 0 9 9" xmlns="http://www.w3.org/2000/svg">
                        <use href="#icon_star"></use>
                    </svg>
                    <svg class="review-star" viewbox="0 0 9 9" xmlns="http://www.w3.org/2000/svg">
                        <use href="#icon_star"></use>
                    </svg>
                </div>
                <span class="reviews-note text-lowercase text-secondary ms-1">8k+ reviews</span>
            </div> --}}
                        <div class="product-single__price">
                            <span class="current-price">₦{{ number_format($product['product']['price']) }}</span>
                        </div>
                        <div class="product-single__short-desc fw-light">
                            <p>{{ $product['product']['description'] }}</p>
                        </div>
                        <form name="addtocart-form" method="post">
                            <div class="product-single__swatches">
                                <div class="product-swatch text-swatches">
                                    <label>Sizes</label>
                                    @php
                                        $sizes = $product['sizes'];
                                        $currentSize = $query['size'] ?? null;
                                    @endphp
                                    <div class="swatch-list">
                                        @foreach ($sizes as $size)
                                            <input type="radio" name="size" id="{{ $size['name'] }}"
                                                value="{{ $size['name'] }}"
                                                {{ $currentSize === $size['name'] || (!$currentSize && $loop->first) ? 'checked' : '' }}>
                                            <label class="swatch js-swatch" for="{{ $size['name'] }}"
                                                aria-label="{{ $size['name'] }}" data-bs-toggle="tooltip"
                                                data-bs-placement="top"
                                                title="{{ $size['name'] }}">{{ $size['name'] }}</label>
                                        @endforeach
                                    </div>
                                    <a href="#" class="sizeguide-link" data-bs-toggle="modal"
                                        data-bs-target="#sizeGuide">Size Guide</a>
                                </div>
                                <div class="product-swatch color-swatches">
                                    <label>Color</label>

                                    @php
                                        $colors = $product['colors'];
                                        $currentColor = $query['color'] ?? null;
                                    @endphp
                                    <div class="swatch-list-color">
                                        @foreach ($colors as $color)
                                            <input type="radio" name="colors" id="{{ $color['name'] }}"
                                                value="{{ $color['name'] }}" aria-label="{{ $color['name'] }}"
                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                title="{{ $color['name'] }}"
                                                style="accent-color: {{ $color['name'] }};"
                                                {{ $currentColor === $color['name'] || (!$currentColor && $loop->first) ? 'checked' : '' }}>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            @if ($product['product']['stock'] > 0)
                                <div class="product-single__addtocart">
                                    <div class="qty-control position-relative">
                                        <input type="number" name="quantity" value="1" min="1"
                                            max="{{ $product['product']['stock'] }}"
                                            class="qty-control__number text-center">
                                        <div class="qty-control__reduce">-</div>
                                        <div class="qty-control__increase"
                                            data-max="{{ $product['product']['stock'] }}">+</div>
                                    </div><!-- .qty-control -->
                                    <button type="submit" class="btn btn-primary btn-addtocart js-open-aside"
                                        data-product_id="{{ $product['product']['uuid'] }}" id="addToCartButton"
                                        data-aside="cartDrawer">Add to Cart
                                    </button>
                                </div>
                            @else
                                <div class="product-single__addtocart">
                                    <button type="submit" class="btn btn-primary btn-addtocart btn-outofstock">Out of
                                        Stock
                                    </button>
                                </div>
                            @endif
                        </form>
                        <div class="product-single__addtolinks">
                            <a href="#" class="menu-link menu-link_us-s add-to-wishlist">
                                <svg width="16" height="16" viewbox="0 0 20 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <use href="#icon_heart"></use>
                                </svg>
                                <span>Add to Wishlist</span></a>
                            <share-button class="share-button">
                                <button
                                    class="menu-link menu-link_us-s to-share border-0 bg-transparent d-flex align-items-center">
                                    <svg width="16" height="19" viewbox="0 0 16 19" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <use href="#icon_sharing"></use>
                                    </svg>
                                    <span>Share</span>
                                </button>
                            </share-button>
                        </div>
                        <div class="product-single__meta-info">
                            <div class="meta-item">
                                <label>SKU:</label>
                                <span>{{ $product['product']['sku'] }}</span>
                            </div>
                            <div class="meta-item">
                                <label>Categories:</label>
                                <span>{{ $product['product']['category'] }}</span>
                            </div>
                            <div class="meta-item">
                                <label>Tags:</label>
                                <span>biker, black, bomber, leather</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-single__details-tab">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link nav-link_underscore active" id="tab-description-tab"
                                data-bs-toggle="tab" href="#tab-description" role="tab"
                                aria-controls="tab-description" aria-selected="true">Description</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link nav-link_underscore" id="tab-additional-info-tab" data-bs-toggle="tab"
                                href="#tab-additional-info" role="tab" aria-controls="tab-additional-info"
                                aria-selected="false">Additional Information</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link nav-link_underscore" id="tab-reviews-tab" data-bs-toggle="tab"
                                href="#tab-reviews" role="tab" aria-controls="tab-reviews"
                                aria-selected="false">Reviews (2)</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="tab-description" role="tabpanel"
                            aria-labelledby="tab-description-tab">
                            <div class="product-single__description">
                                <h3 class="block-title mb-4">Product Description</h3>
                                <div>
                                    {{ $product['product']['description'] }}
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-additional-info" role="tabpanel"
                            aria-labelledby="tab-additional-info-tab">
                            <div class="product-single__addtional-info">
                                <div class="item">
                                    <label class="h6">Weight</label>
                                    <span>{{ $product['product']['weight'] }} KG</span>
                                </div>
                                <div class="item">
                                    <label class="h6">Dimensions</label>
                                    <span>{{ $product['product']['dimensions'] }} cm</span>
                                </div>
                                <div class="item">
                                    <label class="h6">Size</label>
                                    <span>
                                        @foreach ($sizes as $size)
                                            {{ $size['name'] }} &nbsp; &nbsp;
                                        @endforeach
                                    </span>
                                </div>
                                <div class="item">
                                    <label class="h6">Color</label>
                                    <span>
                                        @foreach ($colors as $color)
                                            {{ $color['name'] }} |
                                        @endforeach
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-reviews" role="tabpanel"
                            aria-labelledby="tab-reviews-tab">
                            <h2 class="product-single__reviews-title">Reviews</h2>
                            <div class="product-single__reviews-list">
                                <div class="product-single__reviews-item">
                                    <div class="customer-avatar">
                                        <img loading="lazy" src="/images/avatar.jpg" alt="">
                                    </div>
                                    <div class="customer-review">
                                        <div class="customer-name">
                                            <h6>Janice Miller</h6>
                                            <div class="reviews-group d-flex">
                                                <svg class="review-star" viewbox="0 0 9 9"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <use href="#icon_star"></use>
                                                </svg>
                                                <svg class="review-star" viewbox="0 0 9 9"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <use href="#icon_star"></use>
                                                </svg>
                                                <svg class="review-star" viewbox="0 0 9 9"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <use href="#icon_star"></use>
                                                </svg>
                                                <svg class="review-star" viewbox="0 0 9 9"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <use href="#icon_star"></use>
                                                </svg>
                                                <svg class="review-star" viewbox="0 0 9 9"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <use href="#icon_star"></use>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="review-date">April 06, 2023</div>
                                        <div class="review-text">
                                            <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil
                                                impedit
                                                quo minus id quod maxime placeat facere possimus, omnis voluptas
                                                assumenda
                                                est…</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-single__reviews-item">
                                    <div class="customer-avatar">
                                        <img loading="lazy" src="/images/avatar.jpg" alt="">
                                    </div>
                                    <div class="customer-review">
                                        <div class="customer-name">
                                            <h6>Benjam Porter</h6>
                                            <div class="reviews-group d-flex">
                                                <svg class="review-star" viewbox="0 0 9 9"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <use href="#icon_star"></use>
                                                </svg>
                                                <svg class="review-star" viewbox="0 0 9 9"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <use href="#icon_star"></use>
                                                </svg>
                                                <svg class="review-star" viewbox="0 0 9 9"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <use href="#icon_star"></use>
                                                </svg>
                                                <svg class="review-star" viewbox="0 0 9 9"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <use href="#icon_star"></use>
                                                </svg>
                                                <svg class="review-star" viewbox="0 0 9 9"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <use href="#icon_star"></use>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="review-date">April 06, 2023</div>
                                        <div class="review-text">
                                            <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil
                                                impedit
                                                quo minus id quod maxime placeat facere possimus, omnis voluptas
                                                assumenda
                                                est…</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-single__review-form">
                                <form name="customer-review-form">
                                    <h5>Be the first to review “Message Cotton T-Shirt”</h5>
                                    <p>Your email address will not be published. Required fields are marked *</p>
                                    <div class="select-star-rating">
                                        <label>Your rating *</label>
                                        <span class="star-rating">
                                            <svg class="star-rating__star-icon" width="12" height="12"
                                                fill="#ccc" viewbox="0 0 12 12"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M11.1429 5.04687C11.1429 4.84598 10.9286 4.76562 10.7679 4.73884L7.40625 4.25L5.89955 1.20312C5.83929 1.07589 5.72545 0.928571 5.57143 0.928571C5.41741 0.928571 5.30357 1.07589 5.2433 1.20312L3.73661 4.25L0.375 4.73884C0.207589 4.76562 0 4.84598 0 5.04687C0 5.16741 0.0870536 5.28125 0.167411 5.3683L2.60491 7.73884L2.02902 11.0871C2.02232 11.1339 2.01563 11.1741 2.01563 11.221C2.01563 11.3951 2.10268 11.5558 2.29688 11.5558C2.39063 11.5558 2.47768 11.5223 2.56473 11.4754L5.57143 9.89509L8.57813 11.4754C8.65848 11.5223 8.75223 11.5558 8.84598 11.5558C9.04018 11.5558 9.12054 11.3951 9.12054 11.221C9.12054 11.1741 9.12054 11.1339 9.11384 11.0871L8.53795 7.73884L10.9688 5.3683C11.0558 5.28125 11.1429 5.16741 11.1429 5.04687Z">
                                                </path>
                                            </svg>
                                            <svg class="star-rating__star-icon" width="12" height="12"
                                                fill="#ccc" viewbox="0 0 12 12"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M11.1429 5.04687C11.1429 4.84598 10.9286 4.76562 10.7679 4.73884L7.40625 4.25L5.89955 1.20312C5.83929 1.07589 5.72545 0.928571 5.57143 0.928571C5.41741 0.928571 5.30357 1.07589 5.2433 1.20312L3.73661 4.25L0.375 4.73884C0.207589 4.76562 0 4.84598 0 5.04687C0 5.16741 0.0870536 5.28125 0.167411 5.3683L2.60491 7.73884L2.02902 11.0871C2.02232 11.1339 2.01563 11.1741 2.01563 11.221C2.01563 11.3951 2.10268 11.5558 2.29688 11.5558C2.39063 11.5558 2.47768 11.5223 2.56473 11.4754L5.57143 9.89509L8.57813 11.4754C8.65848 11.5223 8.75223 11.5558 8.84598 11.5558C9.04018 11.5558 9.12054 11.3951 9.12054 11.221C9.12054 11.1741 9.12054 11.1339 9.11384 11.0871L8.53795 7.73884L10.9688 5.3683C11.0558 5.28125 11.1429 5.16741 11.1429 5.04687Z">
                                                </path>
                                            </svg>
                                            <svg class="star-rating__star-icon" width="12" height="12"
                                                fill="#ccc" viewbox="0 0 12 12"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M11.1429 5.04687C11.1429 4.84598 10.9286 4.76562 10.7679 4.73884L7.40625 4.25L5.89955 1.20312C5.83929 1.07589 5.72545 0.928571 5.57143 0.928571C5.41741 0.928571 5.30357 1.07589 5.2433 1.20312L3.73661 4.25L0.375 4.73884C0.207589 4.76562 0 4.84598 0 5.04687C0 5.16741 0.0870536 5.28125 0.167411 5.3683L2.60491 7.73884L2.02902 11.0871C2.02232 11.1339 2.01563 11.1741 2.01563 11.221C2.01563 11.3951 2.10268 11.5558 2.29688 11.5558C2.39063 11.5558 2.47768 11.5223 2.56473 11.4754L5.57143 9.89509L8.57813 11.4754C8.65848 11.5223 8.75223 11.5558 8.84598 11.5558C9.04018 11.5558 9.12054 11.3951 9.12054 11.221C9.12054 11.1741 9.12054 11.1339 9.11384 11.0871L8.53795 7.73884L10.9688 5.3683C11.0558 5.28125 11.1429 5.16741 11.1429 5.04687Z">
                                                </path>
                                            </svg>
                                            <svg class="star-rating__star-icon" width="12" height="12"
                                                fill="#ccc" viewbox="0 0 12 12"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M11.1429 5.04687C11.1429 4.84598 10.9286 4.76562 10.7679 4.73884L7.40625 4.25L5.89955 1.20312C5.83929 1.07589 5.72545 0.928571 5.57143 0.928571C5.41741 0.928571 5.30357 1.07589 5.2433 1.20312L3.73661 4.25L0.375 4.73884C0.207589 4.76562 0 4.84598 0 5.04687C0 5.16741 0.0870536 5.28125 0.167411 5.3683L2.60491 7.73884L2.02902 11.0871C2.02232 11.1339 2.01563 11.1741 2.01563 11.221C2.01563 11.3951 2.10268 11.5558 2.29688 11.5558C2.39063 11.5558 2.47768 11.5223 2.56473 11.4754L5.57143 9.89509L8.57813 11.4754C8.65848 11.5223 8.75223 11.5558 8.84598 11.5558C9.04018 11.5558 9.12054 11.3951 9.12054 11.221C9.12054 11.1741 9.12054 11.1339 9.11384 11.0871L8.53795 7.73884L10.9688 5.3683C11.0558 5.28125 11.1429 5.16741 11.1429 5.04687Z">
                                                </path>
                                            </svg>
                                            <svg class="star-rating__star-icon" width="12" height="12"
                                                fill="#ccc" viewbox="0 0 12 12"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M11.1429 5.04687C11.1429 4.84598 10.9286 4.76562 10.7679 4.73884L7.40625 4.25L5.89955 1.20312C5.83929 1.07589 5.72545 0.928571 5.57143 0.928571C5.41741 0.928571 5.30357 1.07589 5.2433 1.20312L3.73661 4.25L0.375 4.73884C0.207589 4.76562 0 4.84598 0 5.04687C0 5.16741 0.0870536 5.28125 0.167411 5.3683L2.60491 7.73884L2.02902 11.0871C2.02232 11.1339 2.01563 11.1741 2.01563 11.221C2.01563 11.3951 2.10268 11.5558 2.29688 11.5558C2.39063 11.5558 2.47768 11.5223 2.56473 11.4754L5.57143 9.89509L8.57813 11.4754C8.65848 11.5223 8.75223 11.5558 8.84598 11.5558C9.04018 11.5558 9.12054 11.3951 9.12054 11.221C9.12054 11.1741 9.12054 11.1339 9.11384 11.0871L8.53795 7.73884L10.9688 5.3683C11.0558 5.28125 11.1429 5.16741 11.1429 5.04687Z">
                                                </path>
                                            </svg>
                                        </span>
                                        <input type="hidden" id="form-input-rating" value="">
                                    </div>
                                    <div class="mb-4">
                                        <textarea id="form-input-review" class="form-control form-control_gray" placeholder="Your Review" cols="30"
                                            rows="8"></textarea>
                                    </div>
                                    <div class="form-label-fixed mb-4">
                                        <label for="form-input-name" class="form-label">Name *</label>
                                        <input id="form-input-name"
                                            class="form-control form-control-md form-control_gray">
                                    </div>
                                    <div class="form-label-fixed mb-4">
                                        <label for="form-input-email" class="form-label">Email address *</label>
                                        <input id="form-input-email"
                                            class="form-control form-control-md form-control_gray">
                                    </div>
                                    <div class="form-check mb-4">
                                        <input class="form-check-input form-check-input_fill" type="checkbox"
                                            value="" id="remember_checkbox">
                                        <label class="form-check-label" for="remember_checkbox">
                                            Save my name, email, and website in this browser for the next time I
                                            comment.
                                        </label>
                                    </div>
                                    <div class="form-action">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        @endforeach

        <x-relatedproducts :products="$relatedProducts" />

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
    <script src="/js/sorting.js"></script>
    <script src="/js/functions.js"></script>
    <script src="/js/theme.js"></script>

</body>

</html>
