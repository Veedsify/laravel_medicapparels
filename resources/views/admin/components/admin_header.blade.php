    <div class="header-mobile header_sticky">
        <div class="container d-flex align-items-center h-100">
            <a class="mobile-nav-activator d-block position-relative" href="#">
                <svg class="nav-icon" width="25" height="18" viewbox="0 0 25 18" xmlns="http://www.w3.org/2000/svg">
                    <use href="#icon_nav"></use>
                </svg>
                <button class="btn-close-lg position-absolute top-0 start-0 w-100"></button>
            </a>

            <div class="logo">
                <a href="/">
                    <img src="/images/logo.png" alt="Uomo" class="logo__image d-block">
                </a>
            </div><!-- /.logo -->


        </div><!-- /.container -->

        <nav
            class="header-mobile__navigation navigation d-flex flex-column w-100 position-absolute top-100 bg-body overflow-auto">
            <div class="px-5">
                <form action="search.html" method="GET" class="search-field position-relative mt-4 mb-3">
                    <div class="position-relative">
                        <input class="search-field__input w-100 border rounded-1" type="text" name="search-keyword"
                            placeholder="Search products">
                        <button class="btn-icon search-popup__submit pb-0 me-2" type="submit">
                            <svg class="d-block" width="20" height="20" viewbox="0 0 20 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <use href="#icon_search"></use>
                            </svg>
                        </button>
                        <button class="btn-icon btn-close-lg search-popup__reset pb-0 me-2" type="reset"></button>
                    </div>

                    <div class="position-absolute start-0 top-100 m-0 w-100">
                        <div class="search-result"></div>
                    </div>
                </form><!-- /.header-search -->
            </div><!-- /.container -->

            <div class="px-5">
                <div class="overflow-hidden">
                    <ul class="navigation__list list-unstyled position-relative">
                        <li class="navigation__item">
                            <a href="/" class="navigation__link js-nav-right d-flex align-items-center">Home </a>
                        </li>
                        <li class="navigation__item">
                            <a href="#"
                                class="navigation__link js-nav-right d-flex align-items-center">Products<svg
                                    class="ms-auto" width="7" height="11" viewbox="0 0 7 11"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <use href="#icon_next_sm"></use>
                                </svg></a>
                            <div class="sub-menu position-absolute top-0 start-100 w-100 d-none">
                                <a href="#"
                                    class="navigation__link js-nav-left d-flex align-items-center border-bottom mb-2"><svg
                                        class="me-2" width="7" height="11" viewbox="0 0 7 11"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <use href="#icon_prev_sm"></use>
                                    </svg>Products</a>
                                <ul class="list-unstyled">
                                    <li class="sub-menu__item"><a href="/admin/products/add"
                                            class="menu-link menu-link_us-s">New
                                            Product</a></li>
                                    <li class="sub-menu__item"><a href="/admin/products"
                                            class="menu-link menu-link_us-s">View Products</a></li>
                                    <li class="sub-menu__item"><a href="../Demo3/index.html"
                                            class="menu-link menu-link_us-s">Export Products</a></li>
                                </ul><!-- /.box-menu -->
                            </div>
                        </li>

                        <li class="navigation__item">
                            <a href="#" class="navigation__link js-nav-right d-flex align-items-center">Orders<svg
                                    class="ms-auto" width="7" height="11" viewbox="0 0 7 11"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <use href="#icon_next_sm"></use>
                                </svg></a>
                            <div class="sub-menu position-absolute top-0 start-100 w-100 d-none">
                                <a href="#"
                                    class="navigation__link js-nav-left d-flex align-items-center border-bottom mb-2"><svg
                                        class="me-2" width="7" height="11" viewbox="0 0 7 11"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <use href="#icon_prev_sm"></use>
                                    </svg>Orders</a>
                                <ul class="list-unstyled">
                                    <li class="sub-menu__item">
                                        <a href="{{ route('admin.orders.pending') }}"
                                            class="menu-link menu-link_us-s">Pending Orders</a>
                                    </li>
                                    <li class="sub-menu__item"><a href="{{ route('admin.orders.processing') }}"
                                            class="menu-link menu-link_us-s">Processing Orders</a></li>
                                    <li class="sub-menu__item"><a href="{{ route('admin.orders.shipped') }}"
                                            class="menu-link menu-link_us-s">Shipped Orders</a></li>
                                    <li class="sub-menu__item"><a href="{{ route('admin.orders.delivered') }}"
                                            class="menu-link menu-link_us-s">Delivered Orders</a></li>
                                </ul><!-- /.box-menu -->
                            </div>
                        </li>

                        <li class="navigation__item">
                            <a href="#"
                                class="navigation__link js-nav-right d-flex align-items-center">Blogs<svg
                                    class="ms-auto" width="7" height="11" viewbox="0 0 7 11"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <use href="#icon_next_sm"></use>
                                </svg></a>
                            <div class="sub-menu position-absolute top-0 start-100 w-100 d-none">
                                <a href="#"
                                    class="navigation__link js-nav-left d-flex align-items-center border-bottom mb-2"><svg
                                        class="me-2" width="7" height="11" viewbox="0 0 7 11"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <use href="#icon_prev_sm"></use>
                                    </svg>Blogs</a>
                                <ul class="list-unstyled">
                                    <li class="sub-menu__item">
                                        <a href="index.html" class="menu-link menu-link_us-s">New Article</a>
                                    </li>
                                    <li class="sub-menu__item">
                                        <a href="{{ route('admin.blog.my_article') }}"
                                            class="menu-link menu-link_us-s">My Articles</a>
                                    </li>
                                </ul><!-- /.box-menu -->
                            </div>
                        </li>

                        <li class="navigation__item">
                            <a href="#"
                                class="navigation__link js-nav-right d-flex align-items-center">Category<svg
                                    class="ms-auto" width="7" height="11" viewbox="0 0 7 11"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <use href="#icon_next_sm"></use>
                                </svg></a>
                            <div class="sub-menu position-absolute top-0 start-100 w-100 d-none">
                                <a href="#"
                                    class="navigation__link js-nav-left d-flex align-items-center border-bottom mb-2"><svg
                                        class="me-2" width="7" height="11" viewbox="0 0 7 11"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <use href="#icon_prev_sm"></use>
                                    </svg>Category</a>
                                <ul class="list-unstyled">
                                    <li class="sub-menu__item">
                                        <a href="{{ route('category.create') }}" class="menu-link menu-link_us-s">New
                                            Category</a>
                                    </li>
                                    <li class="sub-menu__item">
                                        <a href="{{ route('admin.categories') }}" class="menu-link menu-link_us-s">All
                                            Categories</a>
                                    </li>
                                </ul><!-- /.box-menu -->
                            </div>
                        </li>

                        <li class="navigation__item">
                            <a href="/contact"
                                class="navigation__link js-nav-right d-flex align-items-center">Users</a>
                        </li>
                        <li class="navigation__item">
                            <a href="/contact"
                                class="navigation__link js-nav-right d-flex align-items-center">Profile</a>
                        </li>
                        <li class="navigation__item">
                            <a href="#"
                                class="navigation__link js-nav-right d-flex align-items-center">Settings<svg
                                    class="ms-auto" width="7" height="11" viewbox="0 0 7 11"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <use href="#icon_next_sm"></use>
                                </svg></a>
                            <div class="sub-menu position-absolute top-0 start-100 w-100 d-none">
                                <a href="#"
                                    class="navigation__link js-nav-left d-flex align-items-center border-bottom mb-2"><svg
                                        class="me-2" width="7" height="11" viewbox="0 0 7 11"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <use href="#icon_prev_sm"></use>
                                    </svg>Settings</a>
                                <ul class="list-unstyled">
                                    <li class="sub-menu__item">
                                        <a href="index.html" class="menu-link menu-link_us-s">Home Page</a>
                                    </li>
                                    <li class="sub-menu__item">
                                        <a href="../Demo2/index.html" class="menu-link menu-link_us-s">About Page</a>
                                    </li>
                                    <li class="sub-menu__item">
                                        <a href="../Demo2/index.html" class="menu-link menu-link_us-s">Contact
                                            Page</a>
                                    </li>
                                    <li class="sub-menu__item">
                                        <a href="../Demo2/index.html" class="menu-link menu-link_us-s">Shop Page</a>
                                    </li>
                                    <li class="sub-menu__item">
                                        <a href="../Demo2/index.html" class="menu-link menu-link_us-s">Shop Category
                                            Page</a>
                                    </li>
                                    <li class="sub-menu__item">
                                        <a href="../Demo2/index.html" class="menu-link menu-link_us-s">Size Chart
                                            Page</a>
                                    </li>
                                </ul><!-- /.box-menu -->
                            </div>
                        </li>

                    </ul><!-- /.navigation__list -->
                </div><!-- /.overflow-hidden -->
            </div><!-- /.container -->

            <div class="border-top mt-auto pb-2">
                <div class="customer-links container mt-4 mb-2 pb-1">
                    <svg class="d-inline-block align-middle" width="20" height="20" viewbox="0 0 20 20"
                        fill="none" xmlns="http://www.w3.org/2000/svg">
                        <use href="#icon_user"></use>
                    </svg>
                    <span class="d-inline-block ms-2 text-uppercase align-middle fw-medium">
                        <a href="/admin" class="text-dark">My Account</a> </span>
                </div>
            </div>
        </nav><!-- /.navigation -->
    </div>


    <header id="header" class="header header_sticky">
        <div class="px-5">
            <div class="header-desk header-desk_type_1">
                <div class="logo">
                    <a href="/">
                        <img src="/images/logo.png" alt="Uomo" class="logo__image d-block">
                    </a>
                </div><!-- /.logo -->

                <nav class="navigation">
                    <ul class="navigation__list list-unstyled d-flex">
                        <li class="navigation__item">
                            <a href="/" class="navigation__link">Home </a>
                        </li>
                        <li class="navigation__item">
                            <a href="#" class="navigation__link">Products</a>
                            <ul class="default-menu list-unstyled">
                                <li class="sub-menu__item"><a href="/admin/products/add"
                                        class="menu-link menu-link_us-s">New Product</a></li>
                                <li class="sub-menu__item"><a href="/admin/products"
                                        class="menu-link menu-link_us-s">View Products</a></li>
                                <li class="sub-menu__item"><a href="login_register.html"
                                        class="menu-link menu-link_us-s">Export Products</a></li>
                            </ul><!-- /.box-menu -->
                        </li>
                        </li>
                        <li class="navigation__item">
                            <a href="#" class="navigation__link">Orders</a>
                            <ul class="default-menu list-unstyled">
                                <li class="sub-menu__item"><a href="{{ route('admin.orders.pending') }}"
                                        class="menu-link menu-link_us-s">Pending Orders</a></li>
                                <li class="sub-menu__item"><a href="{{ route('admin.orders.processing') }}"
                                        class="menu-link menu-link_us-s">Processing Orders</a></li>
                                <li class="sub-menu__item"><a href="{{ route('admin.orders.shipped') }}"
                                        class="menu-link menu-link_us-s">Shipped Orders</a></li>
                                <li class="sub-menu__item"><a href="{{ route('admin.orders.delivered') }}"
                                        class="menu-link menu-link_us-s">Delivered Orders</a></li>
                            </ul><!-- /.box-menu -->
                        </li>
                        <li class="navigation__item">
                            <a href="#" class="navigation__link">Blogs</a>
                            <ul class="default-menu list-unstyled">
                                <li class="sub-menu__item"><a href="{{ route('admin.blog.new_article') }}"
                                        class="menu-link menu-link_us-s">New Article</a></li>
                                <li class="sub-menu__item"><a href="{{ route('admin.blog.new_article') }}"
                                        class="menu-link menu-link_us-s">My Articles</a></li>
                            </ul><!-- /.box-menu -->
                        </li>
                        <li class="navigation__item">
                            <a href="#" class="navigation__link">Category</a>
                            <ul class="default-menu list-unstyled">
                                <li class="sub-menu__item"><a href="{{ route('category.create') }}"
                                        class="menu-link menu-link_us-s">New Category</a></li>
                                <li class="sub-menu__item"><a href="{{ route('admin.categories') }}"
                                        class="menu-link menu-link_us-s">All Category</a></li>
                            </ul><!-- /.box-menu -->
                        </li>
                        <li class="navigation__item">
                            <a href="{{route('admin.users')}}" class="navigation__link">Users</a>
                        </li>
                        <li class="navigation__item">
                            <a href="/admin/profile" class="navigation__link">Profile</a>
                        </li>
                        <li class="navigation__item">
                            <a href="#" class="navigation__link">Settings</a>
                            <ul class="default-menu list-unstyled">
                                <li class="sub-menu__item"><a href="{{ route('admin.settings.homepage') }}"
                                        class="menu-link menu-link_us-s">Home Page</a></li>
                                <li class="sub-menu__item"><a href="{{ route('admin.settings.aboutpage') }}"
                                        class="menu-link menu-link_us-s">About Page</a></li>
                                <li class="sub-menu__item"><a href="{{ route('admin.settings.contactpage') }}"
                                        class="menu-link menu-link_us-s">Contact Page</a></li>
                                <li class="sub-menu__item"><a href="{{ route('admin.settings.shoppage') }}"
                                        class="menu-link menu-link_us-s">Shop Page</a></li>
                                <li class="sub-menu__item"><a href="{{ route('admin.settings.category') }}"
                                        class="menu-link menu-link_us-s">Shop Category Page</a></li>
                                <li class="sub-menu__item"><a href="{{ route('admin.settings.chartpage') }}"
                                        class="menu-link menu-link_us-s">Size Chart Page</a></li>
                            </ul><!-- /.box-menu -->
</li>
                    </ul><!-- /.navigation__list -->
                </nav><!-- /.navigation -->

                <div class="header-tools d-flex align-items-center">
                    <div class="header-tools__item hover-container">
                        <div class="js-hover__open position-relative">
                            <a class="js-search-popup search-field__actor" href="#">
                                <svg class="d-block" width="20" height="20" viewbox="0 0 20 20"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <use href="#icon_search"></use>
                                </svg>
                                <i class="btn-icon btn-close-lg"></i>
                            </a>
                        </div>

                        <div class="search-popup js-hidden-content">
                            <form action="./search_result.html" method="GET" class="search-field container">
                                <p class="text-uppercase text-secondary fw-medium mb-4">What are you looking for?</p>
                                <div class="position-relative">
                                    <input class="search-field__input search-popup__input w-100 fw-medium"
                                        type="text" name="search-keyword" placeholder="Search products">
                                    <button class="btn-icon search-popup__submit" type="submit">
                                        <svg class="d-block" width="20" height="20" viewbox="0 0 20 20"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <use href="#icon_search"></use>
                                        </svg>
                                    </button>
                                    <button class="btn-icon btn-close-lg search-popup__reset" type="reset"></button>
                                </div>

                                <div class="search-popup__results">
                                    <div class="sub-menu search-suggestion">
                                        <h6 class="sub-menu__title fs-base">Quicklinks</h6>
                                        <ul class="sub-menu__list list-unstyled">
                                            <li class="sub-menu__item"><a href="shop2.html"
                                                    class="menu-link menu-link_us-s">New Arrivals</a>
                                            </li>
                                            <li class="sub-menu__item"><a href="#"
                                                    class="menu-link menu-link_us-s">Dresses</a></li>
                                            <li class="sub-menu__item"><a href="shop3.html"
                                                    class="menu-link menu-link_us-s">Accessories</a>
                                            </li>
                                            <li class="sub-menu__item"><a href="#"
                                                    class="menu-link menu-link_us-s">Footwear</a></li>
                                            <li class="sub-menu__item"><a href="#"
                                                    class="menu-link menu-link_us-s">Sweatshirt</a>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="search-result row row-cols-5"></div>
                                </div>
                            </form><!-- /.header-search -->
                        </div><!-- /.search-popup -->
                    </div><!-- /.header-tools__item hover-container -->

                    <div class="header-tools__item hover-container">
                        <a class="btn btn-primary btn-sm rounded-3" href="{{ route('admin.product.add') }}"
                            data-aside="customerForms">
                            Add product
                        </a>
                    </div>
                    <form action="/auth/logout" method="post" class="p-1">
                        @csrf
                        <button class="btn btn-danger btn-sm rounded-3">Logout</button>
                    </form>

                </div><!-- /.header__tools -->
            </div><!-- /.header-desk header-desk_type_1 -->
        </div><!-- /.container -->
    </header>
