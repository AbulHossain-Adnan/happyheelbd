<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="Anil z" name="author">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
        content="Shopwise is Powerful features and You Can Use The Perfect Build this Template For Any eCommerce Website. The template is built for sell Fashion Products, Shoes, Bags, Cosmetics, Clothes, Sunglasses, Furniture, Kids Products, Electronics, Stationery Products and Sporting Goods.">
    <meta name="keywords"
        content="ecommerce, electronics store, Fashion store, furniture store,  bootstrap 4, clean, minimal, modern, online store, responsive, retail, shopping, ecommerce store">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <!-- SITE TITLE -->
    <title>Shopwise - eCommerce Bootstrap 5 HTML Template</title>
    <!-- Favicon Icon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('templateassets') }}/assets/images/favicon.png">
    <!-- Animation CSS -->
    <link rel="stylesheet" href="{{ asset('templateassets') }}/assets/css/animate.css">
    <!-- Latest Bootstrap min CSS -->
    <link rel="stylesheet" href="{{ asset('templateassets') }}/assets/bootstrap/css/bootstrap.min.css">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">
    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="{{ asset('templateassets') }}/assets/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('templateassets') }}/assets/css/ionicons.min.css">
    <link rel="stylesheet" href="{{ asset('templateassets') }}/assets/css/themify-icons.css">
    <link rel="stylesheet" href="{{ asset('templateassets') }}/assets/css/linearicons.css">
    <link rel="stylesheet" href="{{ asset('templateassets') }}/assets/css/flaticon.css">
    <link rel="stylesheet" href="{{ asset('templateassets') }}/assets/css/simple-line-icons.css">
    <!--- owl carousel CSS-->
    <link rel="stylesheet" href="{{ asset('templateassets') }}/assets/owlcarousel/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ asset('templateassets') }}/assets/owlcarousel/css/owl.theme.css">
    <link rel="stylesheet" href="{{ asset('templateassets') }}/assets/owlcarousel/css/owl.theme.default.min.css">
    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="{{ asset('templateassets') }}/assets/css/magnific-popup.css">
    <!-- Slick CSS -->
    <link rel="stylesheet" href="{{ asset('templateassets') }}/assets/css/slick.css">
    <link rel="stylesheet" href="{{ asset('templateassets') }}/assets/css/slick-theme.css">
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{ asset('templateassets') }}/assets/css/style.css">
    <link rel="stylesheet" href="{{ asset('templateassets') }}/assets/css/responsive.css">
    <script src="sweetalert2.min.js"></script>
    <link rel="stylesheet" href="sweetalert2.min.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">


    {{-- <style>
        .wrapper>ul#results li {
            margin-bottom: 2px;
            background: #e2e2e2;
            padding: 20px;
            list-style: none;
        }

        .ajax-loading {
            text-align: center;
        }
    </style> --}}




</head>

<body>

    <!-- LOADER -->
    <div class="preloader">
        <div class="lds-ellipsis">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <!-- END LOADER -->

    <!-- Home Popup Section -->
    <div class="modal fade subscribe_popup" id="onload-popup" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="ion-ios-close-empty"></i></span>
                    </button>
                    <div class="row g-0">
                        <div class="col-sm-10 m-auto">
                            <iframe src="https://www.youtube.com/embed/7e90gBu4pas" allow="autoplay; encrypted-media"
                                allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Screen Load Popup Section -->

    <!-- START HEADER -->
    <header class="header_wrap">
        <div class="top-header light_skin bg_dark d-none d-md-block">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-8">
                        <div class="header_topbar_info">
                            <div class="header_offer">
                                <span>Free Ground Shipping Over $250</span>
                            </div>
                            <div class="download_wrap">
                                <span class="me-3">Download App</span>
                                <ul class="icon_list text-center text-lg-start">
                                    <li><a href="#"><i class="fab fa-apple"></i></a></li>
                                    <li><a href="#"><i class="fab fa-android"></i></a></li>
                                    <li><a href="#"><i class="fab fa-windows"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-4">
                        <div class="d-flex align-items-center justify-content-center justify-content-md-end">
                            <div class="lng_dropdown">
                                <select name="countries" class="custome_select">
                                    <option value='en' data-image="{{ asset('templateassets') }}/assets/images/eng.png"
                                        data-title="English">English</option>
                                    <option value='fn' data-image="{{ asset('templateassets') }}/assets/images/fn.png"
                                        data-title="France">France</option>
                                    <option value='us' data-image="{{ asset('templateassets') }}/assets/images/us.png"
                                        data-title="United States">United States</option>
                                </select>
                            </div>
                            <div class="ms-3">
                                <select name="countries" class="custome_select">
                                    <option value='USD' data-title="USD">USD</option>
                                    <option value='EUR' data-title="EUR">EUR</option>
                                    <option value='GBR' data-title="GBR">GBR</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="middle-header dark_skin">
            <div class="container">
                <div class="nav_block">
                    <a class="navbar-brand" href="index.html">
                        <img class="logo_light" src="{{ asset('templateassets') }}/assets/images/logo_light.png"
                            alt="logo">
                        <img class="logo_dark" src="{{ asset('templateassets') }}/assets/images/logo_dark.png"
                            alt="logo">
                    </a>
                    <div class="product_search_form radius_input search_form_btn">
                        <form>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="custom_select">
                                        <select class="first_null not_chosen">
                                            <option value="">All Category</option>
                                            <option value="Dresses">Dresses</option>
                                            <option value="Shirt-Tops">Shirt &amp; Tops</option>
                                            <option value="T-Shirt">T-Shirt</option>
                                            <option value="Pents">Pents</option>
                                            <option value="Jeans">Jeans</option>
                                        </select>
                                    </div>
                                </div>
                                <input class="form-control" placeholder="Search Product..." required="" type="text">
                                <button type="submit" class="search_btn3">Search</button>
                            </div>
                        </form>
                    </div>
                    <ul class="navbar-nav attr-nav align-items-center">
                        <li>
                            <a href="{{route('login')}}" class="nav-link">
                                <i class="linearicons-user">

                                </i>
                            </a>
                        </li>
                        <li id="wishlistfield">

                        </li>
                        <li class="dropdown cart_dropdown" id="cartfield">
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="bottom_header dark_skin main_menu_uppercase border-top">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4 col-sm-6 col-3">
                        <div class="categories_wrap">
                            <button type="button" data-bs-toggle="collapse" data-bs-target="#navCatContent"
                                aria-expanded="false" class="categories_btn categories_menu">
                                <span>All Categories </span><i class="linearicons-menu"></i>
                            </button>
                            <div id="navCatContent" class="navbar collapse">
                                <ul>
                                    <li class="dropdown dropdown-mega-menu">
                                        <a class="dropdown-item nav-link dropdown-toggler" href="#"
                                            data-bs-toggle="dropdown"><i class="flaticon-tv"></i>
                                            <span>Computer</span></a>
                                        <div class="dropdown-menu">
                                            <ul class="mega-menu d-lg-flex">
                                                <li class="mega-menu-col col-lg-7">
                                                    <ul class="d-lg-flex">
                                                        <li class="mega-menu-col col-lg-6">
                                                            <ul>
                                                                <li class="dropdown-header">Featured Item</li>
                                                                <li><a class="dropdown-item nav-link nav_item"
                                                                        href="#">Vestibulum sed</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item"
                                                                        href="#">Donec porttitor</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item"
                                                                        href="#">Donec vitae facilisis</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item"
                                                                        href="#">Curabitur tempus</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item"
                                                                        href="#">Vivamus in tortor</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item"
                                                                        href="#">Donec vitae ante ante</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item"
                                                                        href="#">Etiam ac rutrum</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item"
                                                                        href="#">Quisque condimentum</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="mega-menu-col col-lg-6">
                                                            <ul>
                                                                <li class="dropdown-header">Popular Item</li>
                                                                <li><a class="dropdown-item nav-link nav_item"
                                                                        href="#">Curabitur laoreet</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item"
                                                                        href="#">Vivamus in tortor</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item"
                                                                        href="#">Donec vitae facilisis</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item"
                                                                        href="#">Quisque condimentum</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item"
                                                                        href="#">Etiam ac rutrum</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item"
                                                                        href="#">Donec vitae ante ante</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item"
                                                                        href="#">Donec porttitor</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item"
                                                                        href="#">Curabitur tempus</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="mega-menu-col col-lg-5">
                                                    <div class="header-banner2">
                                                        <img src="{{ asset('templateassets') }}/assets/images/menu_banner7.jpg"
                                                            alt="menu_banner1">
                                                        <div class="banne_info">
                                                            <h6>10% Off</h6>
                                                            <h4>Computers</h4>
                                                            <a href="#">Shop now</a>
                                                        </div>
                                                    </div>
                                                    <div class="header-banner2">
                                                        <img src="{{ asset('templateassets') }}/assets/images/menu_banner8.jpg"
                                                            alt="menu_banner2">
                                                        <div class="banne_info">
                                                            <h6>15% Off</h6>
                                                            <h4>Top Laptops</h4>
                                                            <a href="#">Shop now</a>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="dropdown dropdown-mega-menu">
                                        <a class="dropdown-item nav-link dropdown-toggler" href="#"
                                            data-bs-toggle="dropdown"><i class="flaticon-responsive"></i> <span>Mobile &
                                                Tablet</span></a>
                                        <div class="dropdown-menu">
                                            <ul class="mega-menu d-lg-flex">
                                                <li class="mega-menu-col col-lg-7">
                                                    <ul class="d-lg-flex">
                                                        <li class="mega-menu-col col-lg-6">
                                                            <ul>
                                                                <li class="dropdown-header">Featured Item</li>
                                                                <li><a class="dropdown-item nav-link nav_item"
                                                                        href="#">Vestibulum sed</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item"
                                                                        href="#">Donec porttitor</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item"
                                                                        href="#">Donec vitae facilisis</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item"
                                                                        href="#">Curabitur tempus</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item"
                                                                        href="#">Vivamus in tortor</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item"
                                                                        href="#">Donec vitae ante ante</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item"
                                                                        href="#">Etiam ac rutrum</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="mega-menu-col col-lg-6">
                                                            <ul>
                                                                <li class="dropdown-header">Popular Item</li>
                                                                <li><a class="dropdown-item nav-link nav_item"
                                                                        href="#">Curabitur laoreet</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item"
                                                                        href="#">Vivamus in tortor</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item"
                                                                        href="#">Donec vitae facilisis</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item"
                                                                        href="#">Quisque condimentum</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item"
                                                                        href="#">Etiam ac rutrum</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item"
                                                                        href="#">Donec vitae ante ante</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item"
                                                                        href="#">Donec porttitor</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="mega-menu-col col-lg-5">
                                                    <div class="header-banner2">
                                                        <a href="#"><img
                                                                src="{{ asset('templateassets') }}/assets/images/menu_banner6.jpg"
                                                                alt="menu_banner"></a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="dropdown dropdown-mega-menu">
                                        <a class="dropdown-item nav-link dropdown-toggler" href="#"
                                            data-bs-toggle="dropdown"><i class="flaticon-camera"></i>
                                            <span>Camera</span></a>
                                        <div class="dropdown-menu">
                                            <ul class="mega-menu d-lg-flex">
                                                <li class="mega-menu-col col-lg-7">
                                                    <ul class="d-lg-flex">
                                                        <li class="mega-menu-col col-lg-6">
                                                            <ul>
                                                                <li class="dropdown-header">Featured Item</li>
                                                                <li><a class="dropdown-item nav-link nav_item"
                                                                        href="#">Vestibulum sed</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item"
                                                                        href="#">Donec porttitor</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item"
                                                                        href="#">Donec vitae facilisis</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item"
                                                                        href="#">Curabitur tempus</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item"
                                                                        href="#">Vivamus in tortor</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item"
                                                                        href="#">Donec vitae ante ante</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item"
                                                                        href="#">Etiam ac rutrum</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="mega-menu-col col-lg-6">
                                                            <ul>
                                                                <li class="dropdown-header">Popular Item</li>
                                                                <li><a class="dropdown-item nav-link nav_item"
                                                                        href="#">Curabitur laoreet</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item"
                                                                        href="#">Vivamus in tortor</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item"
                                                                        href="#">Donec vitae facilisis</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item"
                                                                        href="#">Quisque condimentum</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item"
                                                                        href="#">Etiam ac rutrum</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item"
                                                                        href="#">Donec vitae ante ante</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item"
                                                                        href="#">Donec porttitor</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="mega-menu-col col-lg-5">
                                                    <div class="header-banner2">
                                                        <a href="#"><img
                                                                src="{{ asset('templateassets') }}/assets/images/menu_banner9.jpg"
                                                                alt="menu_banner"></a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="dropdown dropdown-mega-menu">
                                        <a class="dropdown-item nav-link dropdown-toggler" href="#"
                                            data-bs-toggle="dropdown"><i class="flaticon-plugins"></i>
                                            <span>Accessories</span></a>
                                        <div class="dropdown-menu">
                                            <ul class="mega-menu d-lg-flex">
                                                <li class="mega-menu-col col-lg-4">
                                                    <ul>
                                                        <li class="dropdown-header">Woman's</li>
                                                        <li><a class="dropdown-item nav-link nav_item"
                                                                href="shop-list-left-sidebar.html">Vestibulum sed</a>
                                                        </li>
                                                        <li><a class="dropdown-item nav-link nav_item"
                                                                href="shop-left-sidebar.html">Donec porttitor</a></li>
                                                        <li><a class="dropdown-item nav-link nav_item"
                                                                href="shop-right-sidebar.html">Donec vitae facilisis</a>
                                                        </li>
                                                        <li><a class="dropdown-item nav-link nav_item"
                                                                href="shop-list.html">Curabitur tempus</a></li>
                                                        <li><a class="dropdown-item nav-link nav_item"
                                                                href="shop-load-more.html">Vivamus in tortor</a></li>
                                                    </ul>
                                                </li>
                                                <li class="mega-menu-col col-lg-4">
                                                    <ul>
                                                        <li class="dropdown-header">Men's</li>
                                                        <li><a class="dropdown-item nav-link nav_item"
                                                                href="shop-cart.html">Donec vitae ante ante</a></li>
                                                        <li><a class="dropdown-item nav-link nav_item"
                                                                href="checkout.html">Etiam ac rutrum</a></li>
                                                        <li><a class="dropdown-item nav-link nav_item"
                                                                href="wishlist.html">Quisque condimentum</a></li>
                                                        <li><a class="dropdown-item nav-link nav_item"
                                                                href="compare.html">Curabitur laoreet</a></li>
                                                        <li><a class="dropdown-item nav-link nav_item"
                                                                href="order-completed.html">Vivamus in tortor</a></li>
                                                    </ul>
                                                </li>
                                                <li class="mega-menu-col col-lg-4">
                                                    <ul>
                                                        <li class="dropdown-header">Kid's</li>
                                                        <li><a class="dropdown-item nav-link nav_item"
                                                                href="shop-product-detail.html">Donec vitae
                                                                facilisis</a></li>
                                                        <li><a class="dropdown-item nav-link nav_item"
                                                                href="shop-product-detail-left-sidebar.html">Quisque
                                                                condimentum</a></li>
                                                        <li><a class="dropdown-item nav-link nav_item"
                                                                href="shop-product-detail-right-sidebar.html">Etiam ac
                                                                rutrum</a></li>
                                                        <li><a class="dropdown-item nav-link nav_item"
                                                                href="shop-product-detail-thumbnails-left.html">Donec
                                                                vitae ante ante</a></li>
                                                        <li><a class="dropdown-item nav-link nav_item"
                                                                href="shop-product-detail-thumbnails-left.html">Donec
                                                                porttitor</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li><a class="dropdown-item nav-link nav_item" href="coming-soon.html"><i
                                                class="flaticon-headphones"></i> <span>Headphones</span></a></li>
                                    <li><a class="dropdown-item nav-link nav_item" href="404.html"><i
                                                class="flaticon-console"></i> <span>Gaming</span></a></li>
                                    <li><a class="dropdown-item nav-link nav_item" href="login.html"><i
                                                class="flaticon-watch"></i> <span>Watches</span></a></li>
                                    <li><a class="dropdown-item nav-link nav_item" href="register.html"><i
                                                class="flaticon-music-system"></i> <span>Home Audio & Theater</span></a>
                                    </li>
                                    <li><a class="dropdown-item nav-link nav_item" href="coming-soon.html"><i
                                                class="flaticon-monitor"></i> <span>TV & Smart Box</span></a></li>
                                    <li><a class="dropdown-item nav-link nav_item" href="404.html"><i
                                                class="flaticon-printer"></i> <span>Printer</span></a></li>
                                    <li>
                                        <ul class="more_slide_open">
                                            <li><a class="dropdown-item nav-link nav_item" href="login.html"><i
                                                        class="flaticon-fax"></i> <span>Fax Machine</span></a></li>
                                            <li><a class="dropdown-item nav-link nav_item" href="register.html"><i
                                                        class="flaticon-mouse"></i> <span>Mouse</span></a></li>
                                        </ul>
                                    </li>
                                </ul>
                                <div class="more_categories">More Categories</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-8 col-sm-6 col-9">
                        <nav class="navbar navbar-expand-lg">
                            <button class="navbar-toggler side_navbar_toggler" type="button" data-bs-toggle="collapse"
                                data-bs-target="#navbarSidetoggle" aria-expanded="false">
                                <span class="ion-android-menu"></span>
                            </button>
                            <div class="pr_search_icon">
                                <a href="javascript:void(0);" class="nav-link pr_search_trigger"><i
                                        class="linearicons-magnifier"></i></a>
                            </div>
                            <div class="collapse navbar-collapse mobile_side_menu" id="navbarSidetoggle">
                                <ul class="navbar-nav">
                                    <li>
                                        <a class="nav-link " href="{{url('/')}}">Home</a>
                                    </li>


                                    <li class="dropdown">
                                        <a class="dropdown-toggle nav-link" href="#" data-bs-toggle="dropdown">Pages</a>
                                        <div class="dropdown-menu">
                                            <ul>
                                                <li><a class="dropdown-item nav-link nav_item"
                                                        href="{{ url('/about-us') }}">About Us</a></li>
                                                <li><a class="dropdown-item nav-link nav_item"
                                                        href="{{ url('/user/contact') }}">Contact Us</a></li>
                                                <li><a class="dropdown-item nav-link nav_item"
                                                        href="{{ route('login') }}">Login</a></li>
                                                <li><a class="dropdown-item nav-link nav_item"
                                                        href="{{ route('register') }}">Register</a></li>

                                            </ul>
                                        </div>
                                    </li>
                                    <li class="dropdown dropdown-mega-menu">
                                        <a class="dropdown-toggle nav-link" href="#"
                                            data-bs-toggle="dropdown">Products</a>
                                        <div class="dropdown-menu">
                                            <ul class="mega-menu d-lg-flex">
                                                <li class="mega-menu-col col-lg-3">
                                                    <ul>
                                                        <li class="dropdown-header">Woman's</li>
                                                        <li><a class="dropdown-item nav-link nav_item"
                                                                href="shop-list-left-sidebar.html">Vestibulum sed</a>
                                                        </li>
                                                        <li><a class="dropdown-item nav-link nav_item"
                                                                href="shop-left-sidebar.html">Donec porttitor</a></li>
                                                        <li><a class="dropdown-item nav-link nav_item"
                                                                href="shop-right-sidebar.html">Donec vitae facilisis</a>
                                                        </li>
                                                        <li><a class="dropdown-item nav-link nav_item"
                                                                href="shop-list.html">Curabitur tempus</a></li>
                                                        <li><a class="dropdown-item nav-link nav_item"
                                                                href="shop-load-more.html">Vivamus in tortor</a></li>
                                                    </ul>
                                                </li>
                                                <li class="mega-menu-col col-lg-3">
                                                    <ul>
                                                        <li class="dropdown-header">Men's</li>
                                                        <li><a class="dropdown-item nav-link nav_item"
                                                                href="shop-cart.html">Donec vitae ante ante</a></li>
                                                        <li><a class="dropdown-item nav-link nav_item"
                                                                href="checkout.html">Etiam ac rutrum</a></li>
                                                        <li><a class="dropdown-item nav-link nav_item"
                                                                href="wishlist.html">Quisque condimentum</a></li>
                                                        <li><a class="dropdown-item nav-link nav_item"
                                                                href="compare.html">Curabitur laoreet</a></li>
                                                        <li><a class="dropdown-item nav-link nav_item"
                                                                href="order-completed.html">Vivamus in tortor</a></li>
                                                    </ul>
                                                </li>
                                                <li class="mega-menu-col col-lg-3">
                                                    <ul>
                                                        <li class="dropdown-header">Kid's</li>
                                                        <li><a class="dropdown-item nav-link nav_item"
                                                                href="shop-product-detail.html">Donec vitae
                                                                facilisis</a></li>
                                                        <li><a class="dropdown-item nav-link nav_item"
                                                                href="shop-product-detail-left-sidebar.html">Quisque
                                                                condimentum</a></li>
                                                        <li><a class="dropdown-item nav-link nav_item"
                                                                href="shop-product-detail-right-sidebar.html">Etiam ac
                                                                rutrum</a></li>
                                                        <li><a class="dropdown-item nav-link nav_item"
                                                                href="shop-product-detail-thumbnails-left.html">Donec
                                                                vitae ante ante</a></li>
                                                        <li><a class="dropdown-item nav-link nav_item"
                                                                href="shop-product-detail-thumbnails-left.html">Donec
                                                                porttitor</a></li>
                                                    </ul>
                                                </li>
                                                <li class="mega-menu-col col-lg-3">
                                                    <ul>
                                                        <li class="dropdown-header">Accessories</li>
                                                        <li><a class="dropdown-item nav-link nav_item"
                                                                href="shop-product-detail.html">Donec vitae
                                                                facilisis</a></li>
                                                        <li><a class="dropdown-item nav-link nav_item"
                                                                href="shop-product-detail-left-sidebar.html">Quisque
                                                                condimentum</a></li>
                                                        <li><a class="dropdown-item nav-link nav_item"
                                                                href="shop-product-detail-right-sidebar.html">Etiam ac
                                                                rutrum</a></li>
                                                        <li><a class="dropdown-item nav-link nav_item"
                                                                href="shop-product-detail-thumbnails-left.html">Donec
                                                                vitae ante ante</a></li>
                                                        <li><a class="dropdown-item nav-link nav_item"
                                                                href="shop-product-detail-thumbnails-left.html">Donec
                                                                porttitor</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                            <div class="d-lg-flex menu_banners row g-3 px-3">
                                                <div class="col-lg-6">
                                                    <div class="header-banner">
                                                        <div class="sale-banner">
                                                            <a class="hover_effect1" href="#">
                                                                <img src="{{ asset('templateassets') }}/assets/images/shop_banner_img7.jpg"
                                                                    alt="shop_banner_img7">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="header-banner">
                                                        <div class="sale-banner">
                                                            <a class="hover_effect1" href="#">
                                                                <img src="{{ asset('templateassets') }}/assets/images/shop_banner_img8.jpg"
                                                                    alt="shop_banner_img8">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <a class=" nav-link" href="{{ url('/blog/post')}}">Blog</a>

                                    </li>
                                    <li class="dropdown dropdown-mega-menu">
                                        <a class=" nav-link" href="{{ url('/shop/page')}}">Shop</a>

                                    </li>
                                    <li><a class="nav-link nav_item" href="{{ url('/user/contact')}}">Contact Us</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="contact_phone contact_support">
                                <i class="linearicons-phone-wave"></i>
                                <span>123-456-7689</span>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- END HEADER -->

















    @yield('content')

    <!-- START FOOTER -->
    <footer class="footer_dark">
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="widget">
                            <div class="footer_logo">
                                <a href="#"><img src="{{ asset('templateassets')}}/assets/images/logo_light.png"
                                        alt="logo" /></a>
                            </div>
                            <p>If you are going to use of Lorem Ipsum need to be sure there isn't hidden of text</p>
                        </div>
                        <div class="widget">
                            <ul class="social_icons social_white">
                                <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                                <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                                <li><a href="#"><i class="ion-social-googleplus"></i></a></li>
                                <li><a href="#"><i class="ion-social-youtube-outline"></i></a></li>
                                <li><a href="#"><i class="ion-social-instagram-outline"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-6">
                        <div class="widget">
                            <h6 class="widget_title">Useful Links</h6>
                            <ul class="widget_links">
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">FAQ</a></li>
                                <li><a href="#">Location</a></li>
                                <li><a href="#">Affiliates</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-6">
                        <div class="widget">
                            <h6 class="widget_title">Category</h6>
                            <ul class="widget_links">
                                <li><a href="#">Men</a></li>
                                <li><a href="#">Woman</a></li>
                                <li><a href="#">Kids</a></li>
                                <li><a href="#">Best Saller</a></li>
                                <li><a href="#">New Arrivals</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6">
                        <div class="widget">
                            <h6 class="widget_title">My Account</h6>
                            <ul class="widget_links">
                                <li><a href="#">My Account</a></li>
                                <li><a href="#">Discount</a></li>
                                <li><a href="#">Returns</a></li>
                                <li><a href="#">Orders History</a></li>
                                <li><a href="#">Order Tracking</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="widget">
                            <h6 class="widget_title">Contact Info</h6>
                            <ul class="contact_info contact_info_light">
                                <li>
                                    <i class="ti-location-pin"></i>
                                    <p>123 Street, Old Trafford, New South London , UK</p>
                                </li>
                                <li>
                                    <i class="ti-email"></i>
                                    <a href="mailto:info@sitename.com">info@sitename.com</a>
                                </li>
                                <li>
                                    <i class="ti-mobile"></i>
                                    <p>+ 457 789 789 65</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom_footer border-top-tran">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <p class="mb-md-0 text-center text-md-start">© 2020 All Rights Reserved by Bestwebcreator</p>
                    </div>
                    <div class="col-md-6">
                        <ul class="footer_payment text-center text-lg-end">
                            <li><a href="#"><img src="{{ asset('templateassets') }}/assets/images/visa.png"
                                        alt="visa"></a></li>
                            <li><a href="#"><img src="{{ asset('templateassets') }}/assets/images/discover.png"
                                        alt="discover"></a></li>
                            <li><a href="#"><img src="{{ asset('templateassets') }}/assets/images/master_card.png"
                                        alt="master_card"></a></li>
                            <li><a href="#"><img src="{{ asset('templateassets') }}/assets/images/paypal.png"
                                        alt="paypal"></a></li>
                            <li><a href="#"><img src="{{ asset('templateassets') }}/assets/images/amarican_express.png"
                                        alt="amarican_express"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- END FOOTER -->

    <a href="#" class="scrollup" style="display: none;"><i class="ion-ios-arrow-up"></i></a>

    <!-- Latest jQuery -->
    <script src="{{ asset('templateassets') }}/assets/js/jquery-3.6.0.min.js"></script>
    <!-- popper min js -->
    <script src="{{ asset('templateassets') }}/assets/js/popper.min.js"></script>
    <!-- Latest compiled and minified Bootstrap -->
    <script src="{{ asset('templateassets') }}/assets/bootstrap/js/bootstrap.min.js"></script>
    <!-- owl-carousel min js  -->
    <script src="{{ asset('templateassets') }}/assets/owlcarousel/js/owl.carousel.min.js"></script>
    <!-- magnific-popup min js  -->
    <script src="{{ asset('templateassets') }}/assets/js/magnific-popup.min.js"></script>
    <!-- waypoints min js  -->
    <script src="{{ asset('templateassets') }}/assets/js/waypoints.min.js"></script>
    <!-- parallax js  -->
    <script src="{{ asset('templateassets') }}/assets/js/parallax.js"></script>
    <!-- countdown js  -->
    <script src="{{ asset('templateassets') }}/assets/js/jquery.countdown.min.js"></script>
    <!-- imagesloaded js -->
    <script src="{{ asset('templateassets') }}/assets/js/imagesloaded.pkgd.min.js"></script>
    <!-- isotope min js -->
    <script src="{{ asset('templateassets') }}/assets/js/isotope.min.js"></script>
    <!-- jquery.dd.min js -->
    <script src="{{ asset('templateassets') }}/assets/js/jquery.dd.min.js"></script>
    <!-- slick js -->
    <script src="{{ asset('templateassets') }}/assets/js/slick.min.js"></script>
    <!-- elevatezoom js -->
    <script src="{{ asset('templateassets') }}/assets/js/jquery.elevatezoom.js"></script>
    <!-- scripts js -->
    <script src="{{ asset('templateassets') }}/assets/js/scripts.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script>
        @if (Session:: has('message'))
        var type = "{{Session::get('alert-type','success')}}"
        switch (type) {
            case 'info':
                toastr.info("{{ Session::get('message') }}");
                break;
            case 'success':
                toastr.success("{{ Session::get('message') }}");
                break;
            case 'warning':
                toastr.warning("{{ Session::get('message') }}");
                break;
            case 'error':
                toastr.error("{{ Session::get('message') }}");
                break;
        }
        @endif
    </script>

    <script type="text/javascript">

            function minicart() {

            $.ajax({
                type: "GET",
                datatype: "json",
                url: "/minicart/",
                success: function (data) {

                    $('#cartfield').html(`

                   <a class="nav-link cart_trigger" href="{{ route('cart.show') }}" >
                            <i class="linearicons-bag2"></i>
                        <span class="cart_count">${data.cart_count}</span><span class="amount">
                        <span class="currency_symbol">$</span>${data.subtotal}</span>
                    </a>

            `)
                }

            })
        }

        minicart(); 
    </script>

    <script>

        function miniwishlist() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                type: "GET",
                datatype: "json",
                url: "/miniwishlist/",
                success: function (data) {
                    $('#wishlistfield').html(`


             <a href="{{url('/user/wishlist/')}}" class="nav-link">
                        <i class="linearicons-heart"></i>
                        <span class="wishlist_count">${data.wishlist}</span>
                    </a>

                `)
                }
            })
        }
        miniwishlist();
    </script>






</body>

</html>