<!DOCTYPE html>
<html dir="ltr" lang="en-US">

{{-- Head Component --}}
@include('home.components.head', ['title' => 'Uomo | Medicapparel | Best Doctor & Surgeons Apparels in Nigeria'])


<body class="not-found-page">
<x-svg/>
{{-- Header --}}
<x-header/>
{{-- HeaderEnd --}}


<main>
    <section class="page-not-found">
        <div class="content container">
            <h2 class="mb-3">OOPS!</h2>
            <h3 class="mb-3">Page not found</h3>
            <p class="mb-3">Sorry, we couldn't find the page you where looking for. We suggest that you return to
                home page.</p>
            <button class="btn btn-primary">GO BACK</button>
        </div>
    </section>
</main>

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
<script src="js/plugins/jquery.min.js"></script>
<script src="js/plugins/bootstrap.bundle.min.js"></script>
<script src="js/plugins/bootstrap-slider.min.js"></script>

<script src="js/plugins/swiper.min.js"></script>
<script src="js/plugins/countdown.js"></script>
<script src="js/plugins/jquery.fancybox.js"></script>

<!-------------- Footer Scripts ------------->
<script src="js/theme.js"></script>

</body>

</html>
