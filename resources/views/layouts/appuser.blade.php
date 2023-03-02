<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="An impressive and flawless site template that includes various UI elements and countless features, attractive ready-made blocks and rich pages, basically everything you need to create a unique and professional website.">
    <meta name="keywords" content="bootstrap 5, business, corporate, creative, gulp, marketing, minimal, modern, multipurpose, one page, responsive, saas, sass, seo, startup, html5 template, site template">
    <meta name="author" content="elemis">
    <title>{{ config('app.name', 'Lelang') }}</title>
    <link rel="shortcut icon" href="{{ asset('sandbox/assets/img/favicon.png') }}">
    <link rel="stylesheet" href="{{ asset('sandbox/assets/css/plugins.css') }}">
    <link rel="stylesheet" href="{{ asset('sandbox/assets/css/style.css') }}">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    @livewireStyles
</head>

<body>
    <div class="content-wrapper">
        <header class="wrapper bg-light">
            <nav class="navbar navbar-expand-lg center-nav navbar-light navbar-bg-light">
                <div class="container flex-lg-row flex-nowrap align-items-center">
                    <div class="navbar-brand w-100">
                        <a href="./index.html">
                            <img src="{{ asset('sandbox/assets/img/logo.png ') }}" srcset="{{ ('sandbox/assets/img/logo@2x.png') }} 2x" alt="logo" />
                        </a>
                    </div>
                    <div class="navbar-collapse offcanvas offcanvas-nav offcanvas-start">
                        <div class="offcanvas-header d-lg-none">
                            <h3 class="text-white fs-30 mb-0">Sandbox</h3>
                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body ms-lg-auto d-flex flex-column h-100">
                            <ul class="navbar-nav">
                                @foreach (get_menu_web() as $row)
                                <li class="nav-item {{ count($row->childs) ? 'dropdown' : '' }}">
                                    <a class="nav-link {{ count($row->childs) ? 'dropdown-toggle' : '' }}" {{ count($row->childs) ? 'data-bs-toggle="dropdown"' : '' }} @if ((substr($row->slug, 0, 4)) == 'http')
                                        href="{{ $row->slug }}"
                                        @else
                                        href="{{ url('/' . $row->slug) }}"
                                        @endif
                                        >{{ $row->title }}</a>
                                    @if (count($row->childs))
                                    <ul class="dropdown-menu">
                                        @include('layouts.submenu', ['childs' => $row->childs])
                                    </ul>
                                    @endif
                                </li>
                                @endforeach
                            </ul>
                            <!-- /.navbar-nav -->
                            <div class="offcanvas-footer d-lg-none">
                                <div>
                                    <a href="mailto:first.last@email.com" class="link-inverse">info@email.com</a>
                                    <br /> 00 (123) 456 78 90 <br />
                                    <nav class="nav social social-white mt-4">
                                        <a href="#"><i class="uil uil-twitter"></i></a>
                                        <a href="#"><i class="uil uil-facebook-f"></i></a>
                                        <a href="#"><i class="uil uil-dribbble"></i></a>
                                        <a href="#"><i class="uil uil-instagram"></i></a>
                                        <a href="#"><i class="uil uil-youtube"></i></a>
                                    </nav>
                                    <!-- /.social -->
                                </div>
                            </div>
                            <!-- /.offcanvas-footer -->
                        </div>
                        <!-- /.offcanvas-body -->
                    </div>
                    <!-- /.navbar-collapse -->
                    <div class="navbar-other w-100 d-flex ms-auto">
                        <ul class="navbar-nav flex-row align-items-center ms-auto">
                            <li class="nav-item"><a class="nav-link" data-bs-toggle="offcanvas" data-bs-target="#offcanvas-search"><i class="uil uil-search"></i></a></li>
                            <li class="nav-item">
                                <a class="nav-link position-relative d-flex flex-row align-items-center" data-bs-toggle="offcanvas" data-bs-target="#offcanvas-cart">
                                    <i class="uil uil-shopping-cart"></i>
                                    <span class="badge badge-cart bg-primary">3</span>
                                </a>
                            </li>
                            <li class="nav-item d-lg-none">
                                <button class="hamburger offcanvas-nav-btn"><span></span></button>
                            </li>
                        </ul>
                        <!-- /.navbar-nav -->
                    </div>
                    <!-- /.navbar-other -->
                </div>
                <!-- /.container -->
            </nav>
            <!-- /.navbar -->
            <div class="offcanvas offcanvas-end bg-light" id="offcanvas-cart" data-bs-scroll="true">
                <div class="offcanvas-header">
                    <h3 class="mb-0">Your Cart</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body d-flex flex-column">
                    <div class="shopping-cart">
                        <div class="shopping-cart-item d-flex justify-content-between mb-4">
                            <div class="d-flex flex-row">
                                <figure class="rounded w-17"><a href="./shop-product.html"><img src="./assets/img/photos/sth1.jpg" srcset="./assets/img/photos/sth1@2x.jpg 2x" alt="" /></a></figure>
                                <div class="w-100 ms-4">
                                    <h3 class="post-title fs-16 lh-xs mb-1"><a href="./shop-product.html" class="link-dark">Nike Air Sneakers</a></h3>
                                    <p class="price fs-sm"><del><span class="amount">$55.00</span></del> <ins><span class="amount">$45.99</span></ins></p>
                                    <div class="form-select-wrapper">
                                        <select class="form-select form-select-sm">
                                            <option value="1" selected>1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </div>
                                    <!--/.form-select-wrapper -->
                                </div>
                            </div>
                            <div class="ms-2"><a href="#" class="link-dark"><i class="uil uil-trash-alt"></i></a></div>
                        </div>
                        <!--/.shopping-cart-item -->
                        <div class="shopping-cart-item d-flex justify-content-between mb-4">
                            <div class="d-flex flex-row">
                                <figure class="rounded w-17"><a href="./shop-product.html"><img src="./assets/img/photos/sth2.jpg" srcset="./assets/img/photos/sth2@2x.jpg 2x" alt="" /></a></figure>
                                <div class="w-100 ms-4">
                                    <h3 class="post-title fs-16 lh-xs mb-1"><a href="./shop-product.html" class="link-dark">Colorful Sneakers</a></h3>
                                    <p class="price fs-sm"><span class="amount">$45.00</span></p>
                                    <div class="form-select-wrapper">
                                        <select class="form-select form-select-sm">
                                            <option value="1" selected>1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </div>
                                    <!--/.form-select-wrapper -->
                                </div>
                            </div>
                            <div class="ms-2"><a href="#" class="link-dark"><i class="uil uil-trash-alt"></i></a></div>
                        </div>
                        <!--/.shopping-cart-item -->
                        <div class="shopping-cart-item d-flex justify-content-between mb-4">
                            <div class="d-flex flex-row">
                                <figure class="rounded w-17"><a href="./shop-product.html"><img src="./assets/img/photos/sth3.jpg" srcset="./assets/img/photos/sth3@2x.jpg 2x" alt="" /></a></figure>
                                <div class="w-100 ms-4">
                                    <h3 class="post-title fs-16 lh-xs mb-1"><a href="./shop-product.html" class="link-dark">Polaroid Camera</a></h3>
                                    <p class="price fs-sm"><span class="amount">$45.00</span></p>
                                    <div class="form-select-wrapper">
                                        <select class="form-select form-select-sm">
                                            <option value="1" selected>1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </div>
                                    <!--/.form-select-wrapper -->
                                </div>
                            </div>
                            <div class="ms-2"><a href="#" class="link-dark"><i class="uil uil-trash-alt"></i></a></div>
                        </div>
                        <!--/.shopping-cart-item -->
                    </div>
                    <!-- /.shopping-cart-->
                    <div class="offcanvas-footer flex-column text-center">
                        <div class="d-flex w-100 justify-content-between mb-4">
                            <span>Subtotal:</span>
                            <span class="h6 mb-0">$135.99</span>
                        </div>
                        <a href="#" class="btn btn-primary btn-icon btn-icon-start rounded w-100 mb-4"><i class="uil uil-credit-card fs-18"></i> Checkout</a>
                        <p class="fs-14 mb-0">Free shipping on all orders over $50</p>
                    </div>
                    <!-- /.offcanvas-footer-->
                </div>
                <!-- /.offcanvas-body -->
            </div>
            <!-- /.offcanvas -->
            <div class="offcanvas offcanvas-top bg-light" id="offcanvas-search" data-bs-scroll="true">
                <div class="container d-flex flex-row py-6">
                    <form class="search-form w-100">
                        <input id="search-form" type="text" class="form-control" placeholder="Type keyword and hit enter">
                    </form>
                    <!-- /.search-form -->
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <!-- /.container -->
            </div>
            <!-- /.offcanvas -->
        </header>
        <section class="wrapper bg-gray">
            <div class="container py-12 py-md-16 text-center">
                <div class="row">
                    <div class="col-lg-10 col-xxl-8 mx-auto">
                        <h1 class="display-1 mb-3">Shop Layout</h1>
                        <p class="lead mb-1">Integer posuere erat a ante venenatis dapibus.</p>
                    </div>
                    <!-- /column -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </section>
        <!-- /header -->
        <section class="wrapper bg-gray">
            <div class="container py-3 py-md-5">
                <nav class="d-inline-block" aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Shop</li>
                    </ol>
                </nav>
                <!-- /nav -->
            </div>
            <!-- /.container -->
        </section>
        <!-- /section -->
        <section class="wrapper bg-light">
            <div class="container pb-14 pb-md-16 pt-12">
                <div class="row gy-10">
                    <div class="col-lg-9 order-lg-2">
                        <div class="row align-items-center mb-10 position-relative zindex-1">
                            <div class="col-md-7 col-xl-8 pe-xl-20">
                                <h2 class="display-6 mb-1">New Arrivals</h2>
                                <p class="mb-0 text-muted">Showing 1–9 of 30 results</p>
                            </div>
                            <!--/column -->
                            <div class="col-md-5 col-xl-4 ms-md-auto text-md-end mt-5 mt-md-0">
                                <div class="form-select-wrapper">
                                    <select class="form-select">
                                        <option value="popularity">Sort by popularity</option>
                                        <option value="rating">Sort by average rating</option>
                                        <option value="newness">Sort by newness</option>
                                        <option value="price: low to high">Sort by price: low to high</option>
                                        <option value="price: high to low">Sort by price: high to low</option>
                                    </select>
                                </div>
                                <!--/.form-select-wrapper -->
                            </div>
                            <!--/column -->
                        </div>
                        <!--/.row -->
                        <div class="grid grid-view projects-masonry shop mb-13">
                            <div class="row gx-md-8 gy-10 gy-md-13 isotope">
                                <div class="project item col-md-6 col-xl-4">
                                    <figure class="rounded mb-6">
                                        <img src="./assets/img/photos/sh1.jpg" srcset="./assets/img/photos/sh1@2x.jpg 2x" alt="" />
                                        <a class="item-like" href="#" data-bs-toggle="white-tooltip" title="Add to wishlist"><i class="uil uil-heart"></i></a>
                                        <a class="item-view" href="#" data-bs-toggle="white-tooltip" title="Quick view"><i class="uil uil-eye"></i></a>
                                        <a href="#" class="item-cart"><i class="uil uil-shopping-bag"></i> Add to Cart</a>
                                        <span class="avatar bg-pink text-white w-10 h-10 position-absolute text-uppercase fs-13" style="top: 1rem; left: 1rem;"><span>Sale!</span></span>
                                    </figure>
                                    <div class="post-header">
                                        <div class="d-flex flex-row align-items-center justify-content-between mb-2">
                                            <div class="post-category text-ash mb-0">Shoes</div>
                                            <span class="ratings five"></span>
                                        </div>
                                        <h2 class="post-title h3 fs-22"><a href="./shop-product.html" class="link-dark">Nike Air Sneakers</a></h2>
                                        <p class="price"><del><span class="amount">$55.00</span></del> <ins><span class="amount">$45.00</span></ins></p>
                                    </div>
                                    <!-- /.post-header -->
                                </div>
                                <!-- /.item -->
                                <div class="project item col-md-6 col-xl-4">
                                    <figure class="rounded mb-6">
                                        <img src="./assets/img/photos/sh2.jpg" srcset="./assets/img/photos/sh2@2x.jpg 2x" alt="" />
                                        <a class="item-like" href="#" data-bs-toggle="white-tooltip" title="Add to wishlist"><i class="uil uil-heart"></i></a>
                                        <a class="item-view" href="#" data-bs-toggle="white-tooltip" title="Quick view"><i class="uil uil-eye"></i></a>
                                        <a href="#" class="item-cart"><i class="uil uil-shopping-bag"></i> Add to Cart</a>
                                    </figure>
                                    <div class="post-header">
                                        <div class="d-flex flex-row align-items-center justify-content-between mb-2">
                                            <div class="post-category text-ash mb-0">Electronics</div>
                                            <span class="ratings four"></span>
                                        </div>
                                        <h2 class="post-title h3 fs-22"><a href="./shop-product.html" class="link-dark">Apple Watch</a></h2>
                                        <p class="price"><span class="amount">$55.00</span></p>
                                    </div>
                                    <!-- /.post-header -->
                                </div>
                                <!-- /.item -->
                                <div class="project item col-md-6 col-xl-4">
                                    <figure class="rounded mb-6">
                                        <img src="./assets/img/photos/sh3.jpg" srcset="./assets/img/photos/sh3@2x.jpg 2x" alt="" />
                                        <a class="item-like" href="#" data-bs-toggle="white-tooltip" title="Add to wishlist"><i class="uil uil-heart"></i></a>
                                        <a class="item-view" href="#" data-bs-toggle="white-tooltip" title="Quick view"><i class="uil uil-eye"></i></a>
                                        <a href="#" class="item-cart"><i class="uil uil-shopping-bag"></i> Add to Cart</a>
                                        <span class="avatar bg-aqua text-white w-10 h-10 position-absolute text-uppercase fs-13" style="top: 1rem; left: 1rem;"><span>New!</span></span>
                                    </figure>
                                    <div class="post-header">
                                        <div class="d-flex flex-row align-items-center justify-content-between mb-2">
                                            <div class="post-category text-ash mb-0">Electronics</div>
                                        </div>
                                        <h2 class="post-title h3 fs-22"><a href="./shop-product.html" class="link-dark">Headphones</a></h2>
                                        <p class="price"><span class="amount">$55.00</span></p>
                                    </div>
                                    <!-- /.post-header -->
                                </div>
                                <!-- /.item -->
                                <div class="project item col-md-6 col-xl-4">
                                    <figure class="rounded mb-6">
                                        <img src="./assets/img/photos/sh4.jpg" srcset="./assets/img/photos/sh4@2x.jpg 2x" alt="" />
                                        <a class="item-like" href="#" data-bs-toggle="white-tooltip" title="Add to wishlist"><i class="uil uil-heart"></i></a>
                                        <a class="item-view" href="#" data-bs-toggle="white-tooltip" title="Quick view"><i class="uil uil-eye"></i></a>
                                        <a href="#" class="item-cart"><i class="uil uil-shopping-bag"></i> Add to Cart</a>
                                    </figure>
                                    <div class="post-header">
                                        <div class="d-flex flex-row align-items-center justify-content-between mb-2">
                                            <div class="post-category text-ash mb-0">Shoes</div>
                                            <span class="ratings three"></span>
                                        </div>
                                        <h2 class="post-title h3 fs-22"><a href="./shop-product.html" class="link-dark">Colorful Sneakers</a></h2>
                                        <p class="price"><span class="amount">$55.00</span></p>
                                    </div>
                                    <!-- /.post-header -->
                                </div>
                                <!-- /.item -->
                                <div class="project item col-md-6 col-xl-4">
                                    <figure class="rounded mb-6">
                                        <img src="./assets/img/photos/sh5.jpg" srcset="./assets/img/photos/sh5@2x.jpg 2x" alt="" />
                                        <a class="item-like" href="#" data-bs-toggle="white-tooltip" title="Add to wishlist"><i class="uil uil-heart"></i></a>
                                        <a class="item-view" href="#" data-bs-toggle="white-tooltip" title="Quick view"><i class="uil uil-eye"></i></a>
                                        <a href="#" class="item-cart"><i class="uil uil-shopping-bag"></i> Add to Cart</a>
                                    </figure>
                                    <div class="post-header">
                                        <div class="d-flex flex-row align-items-center justify-content-between mb-2">
                                            <div class="post-category text-ash mb-0">Electronics</div>
                                            <span class="ratings one"></span>
                                        </div>
                                        <h2 class="post-title h3 fs-22"><a href="./shop-product.html" class="link-dark">Polaroid Camera</a></h2>
                                        <p class="price"><span class="amount">$55.00</span></p>
                                    </div>
                                    <!-- /.post-header -->
                                </div>
                                <!-- /.item -->
                                <div class="project item col-md-6 col-xl-4">
                                    <figure class="rounded mb-6">
                                        <img src="./assets/img/photos/sh6.jpg" srcset="./assets/img/photos/sh6@2x.jpg 2x" alt="" />
                                        <a class="item-like" href="#" data-bs-toggle="white-tooltip" title="Add to wishlist"><i class="uil uil-heart"></i></a>
                                        <a class="item-view" href="#" data-bs-toggle="white-tooltip" title="Quick view"><i class="uil uil-eye"></i></a>
                                        <a href="#" class="item-cart"><i class="uil uil-shopping-bag"></i> Add to Cart</a>
                                    </figure>
                                    <div class="post-header">
                                        <div class="d-flex flex-row align-items-center justify-content-between mb-2">
                                            <div class="post-category text-ash mb-0">Cosmetics</div>
                                            <span class="ratings two"></span>
                                        </div>
                                        <h2 class="post-title h3 fs-22"><a href="./shop-product.html" class="link-dark">Curology Cleanser</a></h2>
                                        <p class="price"><span class="amount">$55.00</span></p>
                                    </div>
                                    <!-- /.post-header -->
                                </div>
                                <!-- /.item -->
                                <div class="project item col-md-6 col-xl-4">
                                    <figure class="rounded mb-6">
                                        <img src="./assets/img/photos/sh7.jpg" srcset="./assets/img/photos/sh7@2x.jpg 2x" alt="" />
                                        <a class="item-like" href="#" data-bs-toggle="white-tooltip" title="Add to wishlist"><i class="uil uil-heart"></i></a>
                                        <a class="item-view" href="#" data-bs-toggle="white-tooltip" title="Quick view"><i class="uil uil-eye"></i></a>
                                        <a href="#" class="item-cart"><i class="uil uil-shopping-bag"></i> Add to Cart</a>
                                    </figure>
                                    <div class="post-header">
                                        <div class="d-flex flex-row align-items-center justify-content-between mb-2">
                                            <div class="post-category text-ash mb-0">Home & Kitchen</div>
                                            <span class="ratings four"></span>
                                        </div>
                                        <h2 class="post-title h3 fs-22"><a href="./shop-product.html" class="link-dark">Q&Q Wall Clock</a></h2>
                                        <p class="price"><span class="amount">$55.00</span></p>
                                    </div>
                                    <!-- /.post-header -->
                                </div>
                                <!-- /.item -->
                                <div class="project item col-md-6 col-xl-4">
                                    <figure class="rounded mb-6">
                                        <img src="./assets/img/photos/sh8.jpg" srcset="./assets/img/photos/sh8@2x.jpg 2x" alt="" />
                                        <a class="item-like" href="#" data-bs-toggle="white-tooltip" title="Add to wishlist"><i class="uil uil-heart"></i></a>
                                        <a class="item-view" href="#" data-bs-toggle="white-tooltip" title="Quick view"><i class="uil uil-eye"></i></a>
                                        <a href="#" class="item-cart"><i class="uil uil-shopping-bag"></i> Add to Cart</a>
                                    </figure>
                                    <div class="post-header">
                                        <div class="d-flex flex-row align-items-center justify-content-between mb-2">
                                            <div class="post-category text-ash mb-0">Electronics</div>
                                        </div>
                                        <h2 class="post-title h3 fs-22"><a href="./shop-product.html" class="link-dark">Earphones</a></h2>
                                        <p class="price"><span class="amount">$55.00</span></p>
                                    </div>
                                    <!-- /.post-header -->
                                </div>
                                <!-- /.item -->
                                <div class="project item col-md-6 col-xl-4">
                                    <figure class="rounded mb-6">
                                        <img src="./assets/img/photos/sh9.jpg" srcset="./assets/img/photos/sh9@2x.jpg 2x" alt="" />
                                        <a class="item-like" href="#" data-bs-toggle="white-tooltip" title="Add to wishlist"><i class="uil uil-heart"></i></a>
                                        <a class="item-view" href="#" data-bs-toggle="white-tooltip" title="Quick view"><i class="uil uil-eye"></i></a>
                                        <a href="#" class="item-cart"><i class="uil uil-shopping-bag"></i> Add to Cart</a>
                                    </figure>
                                    <div class="post-header">
                                        <div class="d-flex flex-row align-items-center justify-content-between mb-2">
                                            <div class="post-category text-ash mb-0">Accessories</div>
                                            <span class="ratings five"></span>
                                        </div>
                                        <h2 class="post-title h3 fs-22"><a href="./shop-product.html" class="link-dark">Apple Watch Milano Loop</a></h2>
                                        <p class="price"><span class="amount">$55.00</span></p>
                                    </div>
                                    <!-- /.post-header -->
                                </div>
                                <!-- /.item -->
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.grid -->
                        <nav class="d-flex" aria-label="pagination">
                            <ul class="pagination">
                                <li class="page-item disabled">
                                    <a class="page-link" href="#" aria-label="Previous">
                                        <span aria-hidden="true"><i class="uil uil-arrow-left"></i></span>
                                    </a>
                                </li>
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Next">
                                        <span aria-hidden="true"><i class="uil uil-arrow-right"></i></span>
                                    </a>
                                </li>
                            </ul>
                            <!-- /.pagination -->
                        </nav>
                        <!-- /nav -->
                    </div>
                    <!-- /column -->
                    <aside class="col-lg-3 sidebar">
                        <div class="widget mt-1">
                            <h4 class="widget-title mb-3">Categories</h4>
                            <ul class="list-unstyled ps-0">
                                <li class="mb-1">
                                    <a href="#" class="align-items-center rounded link-body" data-bs-toggle="collapse" data-bs-target="#clothing-collapse" aria-expanded="true"> Clothing <span class="fs-sm text-muted ms-1">(21)</span>
                                    </a>
                                    <div class="collapse show mt-1" id="clothing-collapse" style="">
                                        <ul class="btn-toggle-nav list-unstyled ps-2">
                                            <li><a href="#" class="link-body">Dresses</a></li>
                                            <li><a href="#" class="link-body">Knitwear</a></li>
                                            <li><a href="#" class="link-body">Jeans</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="mb-1">
                                    <a href="#" class="align-items-center rounded collapsed link-body" data-bs-toggle="collapse" data-bs-target="#electronics-collapse" aria-expanded="false"> Electronics <span class="fs-sm text-muted ms-1">(19)</span>
                                    </a>
                                    <div class="collapse mt-1" id="electronics-collapse" style="">
                                        <ul class="btn-toggle-nav list-unstyled ps-2">
                                            <li><a href="#" class="link-body">Headphones</a></li>
                                            <li><a href="#" class="link-body">Computers</a></li>
                                            <li><a href="#" class="link-body">Cameras</a></li>
                                            <li><a href="#" class="link-body">Annually</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="mb-1">
                                    <a href="#" class="align-items-center rounded collapsed link-body" data-bs-toggle="collapse" data-bs-target="#shoes-collapse" aria-expanded="false"> Shoes <span class="fs-sm text-muted ms-1">(12)</span>
                                    </a>
                                    <div class="collapse mt-1" id="shoes-collapse" style="">
                                        <ul class="btn-toggle-nav list-unstyled ps-2">
                                            <li><a href="#" class="link-body">Sneakers</a></li>
                                            <li><a href="#" class="link-body">Sandals</a></li>
                                            <li><a href="#" class="link-body">Boots</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="mb-1">
                                    <a href="#" class="align-items-center rounded collapsed link-body" data-bs-toggle="collapse" data-bs-target="#home-collapse" aria-expanded="false"> Home & Kitchen <span class="fs-sm text-muted ms-1">(16)</span>
                                    </a>
                                    <div class="collapse mt-1" id="home-collapse" style="">
                                        <ul class="btn-toggle-nav list-unstyled ps-2">
                                            <li><a href="#" class="link-body">Clocks</a></li>
                                            <li><a href="#" class="link-body">Kettles</a></li>
                                            <li><a href="#" class="link-body">Kitchenware</a></li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!-- /.widget -->
                        <div class="widget">
                            <h4 class="widget-title mb-3">Rating</h4>
                            <div class="form-check mb-1">
                                <input class="form-check-input" type="radio" name="rating" id="rating5" checked>
                                <label class="form-check-label" for="rating5">
                                    <span class="ratings five"></span>
                                </label>
                            </div>
                            <!-- /.form-check -->
                            <div class="form-check mb-1">
                                <input class="form-check-input" type="radio" name="rating" id="rating4">
                                <label class="form-check-label" for="rating4">
                                    <span class="ratings four"></span>
                                </label>
                            </div>
                            <!-- /.form-check -->
                            <div class="form-check mb-1">
                                <input class="form-check-input" type="radio" name="rating" id="rating3">
                                <label class="form-check-label" for="rating3">
                                    <span class="ratings three"></span>
                                </label>
                            </div>
                            <!-- /.form-check -->
                            <div class="form-check mb-1">
                                <input class="form-check-input" type="radio" name="rating" id="rating2">
                                <label class="form-check-label" for="rating2">
                                    <span class="ratings two"></span>
                                </label>
                            </div>
                            <!-- /.form-check -->
                            <div class="form-check mb-1">
                                <input class="form-check-input" type="radio" name="rating" id="rating1">
                                <label class="form-check-label" for="rating1">
                                    <span class="ratings one"></span>
                                </label>
                            </div>
                            <!-- /.form-check -->
                        </div>
                        <!-- /.widget -->
                        <div class="widget">
                            <h4 class="widget-title mb-3">Size</h4>
                            <div class="form-check mb-1">
                                <input class="form-check-input" type="checkbox" id="xs" checked>
                                <label class="form-check-label" for="xs">XS <span class="fs-sm text-muted ms-1">(23)</span></label>
                            </div>
                            <div class="form-check mb-1">
                                <input class="form-check-input" type="checkbox" id="s">
                                <label class="form-check-label" for="s">S <span class="fs-sm text-muted ms-1">(253)</span></label>
                            </div>
                            <div class="form-check mb-1">
                                <input class="form-check-input" type="checkbox" id="m">
                                <label class="form-check-label" for="m">M <span class="fs-sm text-muted ms-1">(65)</span></label>
                            </div>
                            <div class="form-check mb-1">
                                <input class="form-check-input" type="checkbox" id="l">
                                <label class="form-check-label" for="l">L <span class="fs-sm text-muted ms-1">(156)</span></label>
                            </div>
                            <div class="form-check mb-1">
                                <input class="form-check-input" type="checkbox" id="xl">
                                <label class="form-check-label" for="xl">XL <span class="fs-sm text-muted ms-1">(74)</span></label>
                            </div>
                        </div>
                        <!-- /.widget -->
                        <div class="widget">
                            <h4 class="widget-title mb-3">Price</h4>
                            <div class="form-check mb-1">
                                <input class="form-check-input" type="radio" name="price" id="price1" checked>
                                <label class="form-check-label" for="price1"> $0.00 - $50.00 </label>
                            </div>
                            <!-- /.form-check -->
                            <div class="form-check mb-1">
                                <input class="form-check-input" type="radio" name="price" id="price2">
                                <label class="form-check-label" for="price2"> $0.00 - $50.00 </label>
                            </div>
                            <!-- /.form-check -->
                            <div class="form-check mb-1">
                                <input class="form-check-input" type="radio" name="price" id="price3">
                                <label class="form-check-label" for="price3"> $50.00 - $100.00 </label>
                            </div>
                            <!-- /.form-check -->
                            <div class="form-check mb-1">
                                <input class="form-check-input" type="radio" name="price" id="price4">
                                <label class="form-check-label" for="price4"> $150.00 - $200.00 </label>
                            </div>
                            <!-- /.form-check -->
                            <div class="row">
                                <div class="col-7 col-md-5 col-lg-12 col-xl-10 col-xxl-10">
                                    <div class="d-flex align-items-center mt-4">
                                        <input type="number" class="form-control form-control-sm" placeholder="$0.00" min="0">
                                        <div class="text-muted mx-2">‒</div>
                                        <input type="number" class="form-control form-control-sm" placeholder="$50.00" max="50">
                                    </div>
                                </div>
                                <!-- /column -->
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.widget -->
                    </aside>
                    <!-- /column .sidebar -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </section>
        <!-- /section -->
        <section class="wrapper bg-gray">
            <div class="container py-12 py-md-14">
                <div class="row gx-lg-8 gx-xl-12 gy-8">
                    <div class="col-md-6 col-lg-4">
                        <div class="d-flex flex-row">
                            <div>
                                <img src="./assets/img/icons/solid/shipment.svg" class="svg-inject icon-svg icon-svg-sm solid-mono text-navy me-4" alt="" />
                            </div>
                            <div>
                                <h4 class="mb-1">Free Shipping</h4>
                                <p class="mb-0">Duis mollis gravida commodo id luctus erat porttitor ligula, eget lacinia odio sem.</p>
                            </div>
                        </div>
                    </div>
                    <!--/column -->
                    <div class="col-md-6 col-lg-4">
                        <div class="d-flex flex-row">
                            <div>
                                <img src="./assets/img/icons/solid/push-cart.svg" class="svg-inject icon-svg icon-svg-sm solid-mono text-navy me-4" alt="" />
                            </div>
                            <div>
                                <h4 class="mb-1">30 Days Return</h4>
                                <p class="mb-0">Duis mollis gravida commodo id luctus erat porttitor ligula, eget lacinia odio sem.</p>
                            </div>
                        </div>
                    </div>
                    <!--/column -->
                    <div class="col-md-6 col-lg-4">
                        <div class="d-flex flex-row">
                            <div>
                                <img src="./assets/img/icons/solid/verify.svg" class="svg-inject icon-svg icon-svg-sm solid-mono text-navy me-4" alt="" />
                            </div>
                            <div>
                                <h4 class="mb-1">2-Years Warranty</h4>
                                <p class="mb-0">Duis mollis gravida commodo id luctus erat porttitor ligula, eget lacinia odio sem.</p>
                            </div>
                        </div>
                    </div>
                    <!--/column -->
                </div>
                <!--/.row -->
            </div>
            <!-- /.container -->
        </section>
        <!-- /section -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="bg-dark text-inverse">
        <div class="container py-13 py-md-15">
            <div class="row gy-6 gy-lg-0">
                <div class="col-md-4 col-lg-3">
                    <div class="widget">
                        <img class="mb-4" src="./assets/img/logo-light.png" srcset="./assets/img/logo-light@2x.png 2x" alt="" />
                        <p class="mb-4">© 2023 Sandbox. <br class="d-none d-lg-block" />All rights reserved.</p>
                        <nav class="nav social social-white">
                            <a href="#"><i class="uil uil-twitter"></i></a>
                            <a href="#"><i class="uil uil-facebook-f"></i></a>
                            <a href="#"><i class="uil uil-dribbble"></i></a>
                            <a href="#"><i class="uil uil-instagram"></i></a>
                            <a href="#"><i class="uil uil-youtube"></i></a>
                        </nav>
                        <!-- /.social -->
                    </div>
                    <!-- /.widget -->
                </div>
                <!-- /column -->
                <div class="col-md-4 col-lg-3">
                    <div class="widget">
                        <h4 class="widget-title text-white mb-3">Get in Touch</h4>
                        <address class="pe-xl-15 pe-xxl-17">Moonshine St. 14/05 Light City, London, United Kingdom</address>
                        <a href="mailto:#">info@email.com</a><br /> 00 (123) 456 78 90
                    </div>
                    <!-- /.widget -->
                </div>
                <!-- /column -->
                <div class="col-md-4 col-lg-3">
                    <div class="widget">
                        <h4 class="widget-title text-white mb-3">Learn More</h4>
                        <ul class="list-unstyled  mb-0">
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Our Story</a></li>
                            <li><a href="#">Projects</a></li>
                            <li><a href="#">Terms of Use</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                        </ul>
                    </div>
                    <!-- /.widget -->
                </div>
                <!-- /column -->
                <div class="col-md-12 col-lg-3">
                    <div class="widget">
                        <h4 class="widget-title text-white mb-3">Our Newsletter</h4>
                        <p class="mb-5">Subscribe to our newsletter to get our news & deals delivered to you.</p>
                        <div class="newsletter-wrapper">
                            <!-- Begin Mailchimp Signup Form -->
                            <div id="mc_embed_signup2">
                                <form action="https://elemisfreebies.us20.list-manage.com/subscribe/post?u=aa4947f70a475ce162057838d&amp;id=b49ef47a9a" method="post" id="mc-embedded-subscribe-form2" name="mc-embedded-subscribe-form" class="validate dark-fields" target="_blank" novalidate>
                                    <div id="mc_embed_signup_scroll2">
                                        <div class="mc-field-group input-group form-floating">
                                            <input type="email" value="" name="EMAIL" class="required email form-control" placeholder="Email Address" id="mce-EMAIL2">
                                            <label for="mce-EMAIL2">Email Address</label>
                                            <input type="submit" value="Join" name="subscribe" id="mc-embedded-subscribe2" class="btn btn-primary ">
                                        </div>
                                        <div id="mce-responses2" class="clear">
                                            <div class="response" id="mce-error-response2" style="display:none"></div>
                                            <div class="response" id="mce-success-response2" style="display:none"></div>
                                        </div> <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                        <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_ddc180777a163e0f9f66ee014_4b1bcfa0bc" tabindex="-1" value=""></div>
                                        <div class="clear"></div>
                                    </div>
                                </form>
                            </div>
                            <!--End mc_embed_signup-->
                        </div>
                        <!-- /.newsletter-wrapper -->
                    </div>
                    <!-- /.widget -->
                </div>
                <!-- /column -->
            </div>
            <!--/.row -->
        </div>
        <!-- /.container -->
    </footer>
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    @livewireScripts
    <script src="https://cdn.jsdelivr.net/gh/livewire/turbolinks@v0.1.x/dist/livewire-turbolinks.js" data-turbolinks-eval="false" data-turbo-eval="false"></script>
    <script src="{{ asset('sandbox/assets/js/plugins.js') }}"></script>
    <script src="{{ asset('sandbox/assets/js/theme.js') }}"></script>
    <script type="text/javascript">
        $(document).on('click', '.dropdown-menu', ($event) => $event.stopPropagation());
        if ($(window).width() < 992) {
            $('.dropdown-menu a').click(($event) => {
                $event.preventDefault();
                if ($(this).next('.submenu').length) {
                    $(this).next('.submenu').toggle();
                }
                $('.dropdown').on('hide.bs.dropdown', () => $(this).find('.submenu').hide());
            });
        }
    </script>
</body>

</html>