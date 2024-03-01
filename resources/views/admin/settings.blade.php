<!DOCTYPE html>
<html dir="ltr" lang="en-US">

{{-- Head Component --}}
@include('home.components.head', [
    'title' => 'Homepage | Medicapparel | Best Doctor & Surgeons Apparels in Nigeria',
])


<body>
    {{-- ICONS --}}
    <x-svg />
    {{-- Header --}}

    @include('admin.components.admin_header')

    <main>
        <div class="mb-4 pb-4"></div>
        <div class="container">
            <div class="mb-5 d-flex justify-content-between">
                <h2> Homepage </h2>
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
