﻿<!DOCTYPE html>
<html dir="ltr" lang="en-US">

@include('home.components.head', ['title' => 'Contact'])

<body>
<x-svg/>
<!-------------- Mobile Header -------------->
<x-header/>
<!------------ End Header Type 1 ------------>

<main>
    <div class="mb-4 pb-4"></div>
    <section class="contact-us container">
        <div class="mw-930">
            <h2 class="page-title">CONTACT US</h2>
        </div>
    </section>

    <section class="google-map mb-5">
        <div id="map" class="google-map__wrapper"></div>
    </section>

    <section class="contact-us container">
        <div class="mw-930">
            <div class="row mb-5">
                <div class="col-lg-6">
                    <h3 class="mb-4">Store in London</h3>
                    <p class="mb-4">1418 River Drive, Suite 35 Cottonhall, CA 9622<br>United Kingdom</p>
                    <p class="mb-4">sale@uomo.com<br>+44 20 7123 4567</p>
                </div>
                <div class="col-lg-6">
                    <h3 class="mb-4">Store in Istanbul</h3>
                    <p class="mb-4">1418 River Drive, Suite 35 Cottonhall, CA 9622<br>Turky</p>
                    <p class="mb-4">sale@uomo.com<br>+90 212 555 1212</p>
                </div>
            </div>
            <div class="contact-us__form">
                <form name="contact-us-form" class="needs-validation" novalidate="">
                    <h3 class="mb-5">Get In Touch</h3>
                    <div class="form-floating my-4">
                        <input type="text" class="form-control" id="contact_us_name" placeholder="Name *"
                               required="">
                        <label for="contact_us_name">Name *</label>
                    </div>
                    <div class="form-floating my-4">
                        <input type="email" class="form-control" id="contact_us_email"
                               placeholder="Email address *" required="">
                        <label for="contact_us_name">Email address *</label>
                    </div>
                    <div class="my-4">
                            <textarea class="form-control form-control_gray" placeholder="Your Message" cols="30"
                                      rows="8"
                                      required=""></textarea>
                    </div>
                    <div class="my-4">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
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

<!-- GOOGLEMAP -->
<!-- prettier-ignore -->
<script>(g => {
        var h, a, k, p = "The Google Maps JavaScript API", c = "google", l = "importLibrary", q = "__ib__",
            m = document, b = window;
        b = b[c] || (b[c] = {});
        var d = b.maps || (b.maps = {}), r = new Set, e = new URLSearchParams,
            u = () => h || (h = new Promise(async (f, n) => {
                await (a = m.createElement("script"));
                e.set("libraries", [...r] + "");
                for (k in g) e.set(k.replace(/[A-Z]/g, t => "_" + t[0].toLowerCase()), g[k]);
                e.set("callback", c + ".maps." + q);
                a.src = `https://maps.${c}apis.com/maps/api/js?` + e;
                d[q] = f;
                a.onerror = () => h = n(Error(p + " could not load."));
                a.nonce = m.querySelector("script[nonce]")?.nonce || "";
                m.head.append(a)
            }));
        d[l] ? console.warn(p + " only loads once. Ignoring:", g) : d[l] = (f, ...n) => r.add(f) && u().then(() => d[l](f, ...n))
    })
    ({key: "AIzaSyAnKJxI0i5KGFgD3QTSg_aXbQk_Ze2kNAw", v: "beta"});</script>
<script src="/js/googlemap-setting.js"></script>

<!-------------- Footer Scripts ------------->
<script src="/js/functions.js"></script>
<script src="/js/theme.js"></script>

</body>

</html>
