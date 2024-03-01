<!DOCTYPE html>
<html dir="ltr" lang="en-US">

{{-- Head Component --}}
@include('home.components.head', ['title' => $article['title']])


<body>
    <x-svg />
    <!--------------  Header -------------->
    <x-header />
    <!------------ End Header Type 1 ------------>

    <main>
        <div class="mb-4 pb-4"></div>
        <section class="blog-page blog-single container">
            <div class="mw-930">
                <h2 class="page-title">{{ $article['title'] }}</h2>
                <div class="blog-single__item-meta">
                    <span class="blog-single__item-meta__author">By {{ $article['author_name'] }}</span>
                    <span
                        class="blog-single__item-meta__date">{{ date('D d, M Y', strtotime($article['created_at'])) }}</span>
                    <span class="blog-single__item-meta__category">{{ $article['category'] }}</span>
                </div>
            </div>
            <div class="blog-single__item-content">
                <p>
                    <img loading="lazy" class="w-100 d-block object-fit-cover" src="{{ $article['image'] }}"
                        width="1410" height="550" alt="">
                </p>
                <div class="mw-930">
                    <p>{{ $article['description'] }}</p>
                </div>
                <div class="container mw-1170 mb-5" id="articles-dangerous-html">
                    {{ $article['content'] }}
                </div>
            </div>
            <div class="blog-single__item-share mw-930">
                <a href="//www.facebook.com/sharer.php?u=https://uomo-crystal.myshopify.com/blogs/news/go-to-wellness-tips-for-mental-health"
                    class="btn btn-share btn-facebook">
                    <svg class="svg-icon svg-icon_facebook" width="9" height="15" fill="#fff"
                        viewbox="0 0 9 15" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M7.62891 8.31543L8.01172 5.7998H5.57812V4.15918C5.57812 3.44824 5.90625 2.79199 7 2.79199H8.12109V0.631836C8.12109 0.631836 7.10938 0.44043 6.15234 0.44043C4.15625 0.44043 2.84375 1.6709 2.84375 3.8584V5.7998H0.601562V8.31543H2.84375V14.4404H5.57812V8.31543H7.62891Z">
                        </path>
                    </svg>
                    <span>Share on Facebook</span>
                </a>
                <a href="//twitter.com/share?text=Go-to%20Wellness%20Tips%20for%20Mental%20Health&url=https://uomo-crystal.myshopify.com/blogs/news/go-to-wellness-tips-for-mental-health"
                    class="btn btn-share btn-twitter">
                    <svg class="svg-icon svg-icon_twitter" width="14" height="13" fill="#fff"
                        viewbox="0 0 14 13" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M12.5508 3.59668C13.0977 3.18652 13.5898 2.69434 13.9727 2.12012C13.4805 2.33887 12.9062 2.50293 12.332 2.55762C12.9336 2.20215 13.3711 1.65527 13.5898 0.97168C13.043 1.2998 12.4141 1.5459 11.7852 1.68262C11.2383 1.1084 10.5 0.780273 9.67969 0.780273C8.09375 0.780273 6.80859 2.06543 6.80859 3.65137C6.80859 3.87012 6.83594 4.08887 6.89062 4.30762C4.51172 4.1709 2.37891 3.02246 0.957031 1.2998C0.710938 1.70996 0.574219 2.20215 0.574219 2.74902C0.574219 3.7334 1.06641 4.6084 1.85938 5.12793C1.39453 5.10059 0.929688 4.99121 0.546875 4.77246V4.7998C0.546875 6.19434 1.53125 7.34277 2.84375 7.61621C2.625 7.6709 2.35156 7.72559 2.10547 7.72559C1.91406 7.72559 1.75 7.69824 1.55859 7.6709C1.91406 8.81934 2.98047 9.63965 4.23828 9.66699C3.25391 10.4326 2.02344 10.8975 0.683594 10.8975C0.4375 10.8975 0.21875 10.8701 0 10.8428C1.25781 11.6631 2.76172 12.1279 4.40234 12.1279C9.67969 12.1279 12.5508 7.78027 12.5508 3.97949C12.5508 3.84277 12.5508 3.7334 12.5508 3.59668Z">
                        </path>
                    </svg>
                    <span>Share on Twitter</span>
                </a>
                <a href="//pinterest.com/pin/create/button/?url=https://uomo-crystal.myshopify.com/blogs/news/go-to-wellness-tips-for-mental-health&media=//uomo-crystal.myshopify.com/cdn/shop/articles/blog6.jpg?crop=center&height=1024&v=1650609391&width=1024&description=Go-to%20Wellness%20Tips%20for%20Mental%20Health"
                    class="btn btn-share btn-pinterest">
                    <svg class="svg-icon svg-icon_pinterest" width="14" height="15" fill="#fff"
                        viewbox="0 0 14 15" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M13.5625 7.44043C13.5625 3.69434 10.5273 0.65918 6.78125 0.65918C3.03516 0.65918 0 3.69434 0 7.44043C0 10.3389 1.77734 12.7725 4.29297 13.7568C4.23828 13.2373 4.18359 12.417 4.32031 11.8154C4.45703 11.2959 5.11328 8.45215 5.11328 8.45215C5.11328 8.45215 4.92188 8.04199 4.92188 7.44043C4.92188 6.51074 5.46875 5.7998 6.15234 5.7998C6.72656 5.7998 7 6.2373 7 6.75684C7 7.33105 6.61719 8.20605 6.42578 9.02637C6.28906 9.68262 6.78125 10.2295 7.4375 10.2295C8.64062 10.2295 9.57031 8.97168 9.57031 7.13965C9.57031 5.49902 8.39453 4.37793 6.75391 4.37793C4.8125 4.37793 3.69141 5.82715 3.69141 7.30371C3.69141 7.90527 3.91016 8.53418 4.18359 8.8623C4.23828 8.91699 4.23828 8.99902 4.23828 9.05371C4.18359 9.27246 4.04688 9.7373 4.04688 9.81934C4.01953 9.95605 3.9375 9.9834 3.80078 9.92871C2.95312 9.51855 2.43359 8.28809 2.43359 7.27637C2.43359 5.14355 3.99219 3.1748 6.91797 3.1748C9.26953 3.1748 11.1016 4.87012 11.1016 7.1123C11.1016 9.43652 9.625 11.3232 7.57422 11.3232C6.89062 11.3232 6.23438 10.9678 6.01562 10.5303C6.01562 10.5303 5.6875 11.8428 5.60547 12.1436C5.44141 12.7451 5.03125 13.4834 4.75781 13.9209C5.38672 14.1396 6.07031 14.2217 6.78125 14.2217C10.5273 14.2217 13.5625 11.1865 13.5625 7.44043Z">
                        </path>
                    </svg>
                    <span>Share on Pinterest</span>
                </a>
                <share-button class="share-button">
                    <button class="btn btn-share btn-more">
                        +
                    </button>
                    <details id="Details-share-template__main" class="m-1 xl:m-1.5" hidden="">
                        <summary class="btn-solid m-1 xl:m-1.5 pt-3.5 pb-3 px-5">+</summary>
                        <div id="Article-share-template__main"
                            class="share-button__fallback flex items-center absolute top-full left-0 w-full px-2 py-4 bg-container shadow-theme border-t z-10">
                            <div class="field grow mr-4">
                                <label class="field__label sr-only" for="url">Link</label>
                                <input type="text" class="field__input w-full" id="url"
                                    value="https://uomo-crystal.myshopify.com/blogs/news/go-to-wellness-tips-for-mental-health"
                                    placeholder="Link" onclick="this.select();" readonly="">
                            </div>
                            <button class="share-button__copy no-js-hidden">
                                <svg class="icon icon-clipboard inline-block mr-1" width="11" height="13"
                                    fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                                    focusable="false" viewbox="0 0 11 13">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M2 1a1 1 0 011-1h7a1 1 0 011 1v9a1 1 0 01-1 1V1H2zM1 2a1 1 0 00-1 1v9a1 1 0 001 1h7a1 1 0 001-1V3a1 1 0 00-1-1H1zm0 10V3h7v9H1z"
                                        fill="currentColor"></path>
                                </svg>
                                <span class="sr-only">Copy link</span>
                            </button>
                        </div>
                    </details>
                </share-button>
            </div>
            <div class="blog-single__reviews mw-930">
                <h2 class="blog-single__reviews-title">Comments</h2>
                <div class="blog-single__reviews-list">
                    @foreach ($comments as $comment)
                        <div class="blog-single__reviews-item">
                            <div class="customer-avatar">
                                <img loading="lazy" src="{{ $comment['image'] }}" alt="">
                            </div>
                            <div class="customer-review">
                                <div class="customer-name">
                                    <h6>{{ $comment['name'] }}</h6>
                                </div>
                                <div class="review-date">{{ date('d M Y H:i:s', strtotime($comment['created_at'])) }}
                                </div>
                                <div class="review-text">
                                    <p>{{ $comment['comment'] }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="blog-single__review-form">
                    <form action="/blog/commment/{{ $article['article_id'] }}/create" method="POST"
                        name="customer-review-form" class="needs-validation" novalidate="">
                        @csrf
                        <h4>Leave a comment</h4>
                        <p>Your email address will not be published. Required fields are marked *</p>
                        <div class="mb-4">
                            @if (session()->has('error'))
                                <div class="alert alert-danger">
                                    {{ session()->get('error') }}
                                </div>
                            @elseif(session()->has('success'))
                                <div class="alert alert-success">
                                    {{ session()->get('success') }}
                                </div>
                            @endif
                            <textarea id="form-input-review" class="form-control form-control_gray" placeholder="Your Comment" cols="30"
                                name="comment" rows="8" required=""></textarea>
                        </div>
                        <div class="form-label-fixed mb-4">
                            <label for="form-input-name" class="form-label">Name *</label>
                            <input id="form-input-name"
                                class="form-control form-control-md
                            form-control_gray"
                                type="text" name="name" required="">
                        </div>
                        <div class="form-label-fixed mb-4">
                            <label for="form-input-email" class="form-label">Email address *</label>
                            <input id="form-input-email" type="email" name="email"
                                class="form-control form-control-md form-control_gray" required="">
                        </div>
                        <div class="form-check mb-4">
                            <input class="form-check-input form-check-input_fill" type="checkbox" value=""
                                id="remember_checkbox">
                            <label class="form-check-label" for="remember_checkbox">
                                Save my name, email, and website in this browser for the next time I comment.
                            </label>
                        </div>
                        <div class="form-action">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
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
