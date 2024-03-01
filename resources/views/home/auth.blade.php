<!DOCTYPE html>
<html dir="ltr" lang="en-US">
{{-- Head Component --}}
@include('home.components.head', [
    'title' => 'Uomo | Medicapparel | Best Doctor & Surgeons Apparels in Nigeria',
])

<body>
    <x-svg />
    {{-- Header --}}
    <x-header />
    {{-- HeaderEnd --}}

    <main>
        <div class="mb-4 pb-4"></div>
        <section class="login-register container">
            <ul class="nav nav-tabs mb-5" id="login_register" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link nav-link_underscore active" id="login-tab" data-bs-toggle="tab"
                        href="#tab-item-login" role="tab" aria-controls="tab-item-login"
                        aria-selected="true">Login</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link nav-link_underscore" id="register-tab" data-bs-toggle="tab"
                        href="#tab-item-register" role="tab" aria-controls="tab-item-register"
                        aria-selected="false">Register</a>
                </li>
            </ul>
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
            <div class="tab-content pt-2" id="login_register_tab_content">
                <div class="tab-pane fade show active" id="tab-item-login" role="tabpanel" aria-labelledby="login-tab">
                    <div class="login-form">
                        <form action="/auth/login" method="POST" name="login-form" class="needs-validation"
                            novalidate="">
                            @csrf
                            <div class="form-floating mb-3">
                                <input name="email" type="email" class="form-control form-control_gray"
                                    id="customerNameEmailInput" placeholder="Email address *" required="">
                                <label for="customerNameEmailInput">Email address *</label>
                                @error('email')
                                    <p class="text-red">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="pb-3"></div>

                            <div class="form-floating mb-3">
                                <input name="password" type="password" class="form-control form-control_gray"
                                    id="customerPasswodInput" placeholder="Password *" required="">
                                <label for="customerPasswodInput">Password *</label>
                                @error('password')
                                    <p class="text-red">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="d-flex align-items-center mb-3 pb-2">
                                <div class="form-check mb-0">
                                    <input name="remember" class="form-check-input form-check-input_fill"
                                        type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label text-secondary" for="flexCheckDefault">Remember
                                        me</label>
                                </div>
                                <a href="/auth/reset" class="btn-text ms-auto">Lost password?</a>
                            </div>

                            <button class="btn btn-primary w-100 text-uppercase" type="submit">Log In</button>

                            <div class="customer-option mt-4 text-center">
                                <span class="text-secondary">No account yet?</span>
                                <a href="#register-tab" class="btn-text js-show-register">Create Account</a>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="tab-pane fade" id="tab-item-register" role="tabpanel" aria-labelledby="register-tab">
                    <div class="register-form">
                        <form action="/auth/register" method="POST" name="register-form" class="needs-validation"
                            novalidate="">
                            @csrf
                            <div class="form-floating mb-3">
                                <input name="username" type="text" class="form-control form-control_gray"
                                    value="{{ old('username') }}" id="customerNameRegisterInput" placeholder="Username"
                                    required="">
                                <label for="customerNameRegisterInput">Username</label>
                                @error('username')
                                    <p class="text-red">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="pb-3"></div>
                            <div class="form-floating mb-3">
                                <input name="email" type="email" class="form-control form-control_gray"
                                    value="{{ old('email') }}" id="customerEmailRegisterInput"
                                    placeholder="Email address *" required="">
                                <label for="customerEmailRegisterInput">Email address *</label>
                                @error('email')
                                    <p class="text-red">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="pb-3"></div>

                            <div class="form-floating mb-3">
                                <input name="password" type="password" class="form-control form-control_gray"
                                    value="" id="customerPasswodRegisterInput" placeholder="Password *"
                                    required="">
                                <label for="customerPasswodRegisterInput">Password *</label>
                                @error('password')
                                    <p class="text-red">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="d-flex align-items-center mb-3 pb-2">
                                <p class="m-0">Your personal data will be used to support your experience throughout
                                    this website, to manage access to your account, and for other purposes described in
                                    our privacy policy.</p>
                            </div>

                            <button class="btn btn-primary w-100 text-uppercase" type="submit">Register</button>
                        </form>
                    </div>
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
    @if ($errors->any(['username', 'email', 'password']))
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                var myButton = document.getElementById('register-tab');
                myButton.click();
            });
        </script>
    @endif

    <!-------------- Footer Scripts ------------->
    <script src="/js/functions.js"></script>
    <script src="/js/theme.js"></script>

</body>

</html>
