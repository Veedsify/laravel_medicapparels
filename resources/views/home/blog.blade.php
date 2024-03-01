<!DOCTYPE html>
<html dir="ltr" lang="en-US">

{{-- Head Component --}}
@include('home.components.head', ['title' => 'Blogs | Medicapparels'])

<body>
<x-svg/>
{{-- Header --}}
<x-header/>
{{-- HeaderEnds --}}
<main>
    <section class="blog-page-title mb-4 mb-xl-5">
        <div class="title-bg">
            <img loading="lazy" src="../images/blog_title_bg.jpg" width="1780" height="420" alt="">
        </div>
        <div class="container">
            <h2 class="page-title">The Blog</h2>
        </div>
    </section>
    <section class="blog-page container">
        <div class="blog-list">
            @if (count($articles) == 0)
                <div class="blog-list__item">
                    <div class="blog-list__item-detail">
                        <div class="blog-list__item-title">
                            <h3 href="#">No Articles Found</h3>
                        </div>
                    </div>
                </div>
            @endif
            @foreach ($articles as $blog)
                <div class="blog-list__item">
                    <div class="blog-list__item-image">
                        <img loading="lazy" class="h-auto" src="{{ $blog->image }}" width="680" height="493"
                             alt="">
                    </div>
                    <div class="blog-list__item-detail">
                        <div class="blog-list__item-meta">
                            <span class="blog-list__item-meta__author">By {{ $blog['author_name'] }}</span>
                            <span
                                class="blog-list__item-meta__date">{{ date('D d, M Y', strtotime($blog['created_at'])) }}</span>
                        </div>
                        <div class="blog-list__item-title">
                            <a href="/blog/{{ $blog['slug'] }}">{{ $blog->title }}</a>
                        </div>
                        <div class="blog-list__item-content">
                            <p>{{ $blog['description'] }}</p>
                            <a href="/blog/{{ $blog['slug'] }}" class="readmore-link">Continue Reading</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <nav class="d-flex justify-content-between mt-3" aria-label="Page navigation">
            <a href="{{ $articles->previousPageUrl() }}" class="btn-link d-inline-flex align-items-center">
                <svg class="me-2" width="7" height="11" viewbox="0 0 7 11"
                     xmlns="http://www.w3.org/2000/svg">
                    <use href="#icon_prev_sm"></use>
                </svg>
                <span class="fw-medium">PREV</span>
            </a>
            <!-- Pagination Elements -->
            <ul class="pagination mb-0">
                @for ($i = 1; $i <= $articles->lastPage(); $i++)
                    <a href="{{ $articles->url($i) }}"></a>
                    <li class="page-item">
                        <a class="btn-link px-1 mx-2 {{ $page == $i ? 'btn-link_active' : '' }}"
                           href="{{ $articles->url($i) }}">{{ $i }}</a>
                    </li>
                @endfor
            </ul>


            <!-- Pagination Elements -->

            <a href="{{ $articles->nextPageUrl() }}" class="btn-link d-inline-flex align-items-center">
                <span class="fw-medium me-2">NEXT</span>
                <svg width="7" height="11" viewbox="0 0 7 11" xmlns="http://www.w3.org/2000/svg">
                    <use href="#icon_next_sm"></use>
                </svg>
            </a>
        </nav>
    </section>
</main>

<div class="mb-5 pb-xl-5"></div>


{{-- Footer --}}
<x-footer/>
{{-- FooterEnds --}}

{{-- Modals --}}
<x-modals/>
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
