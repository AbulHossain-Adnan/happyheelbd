@extends('layouts.shopwisemaster')

@section('content')



<!-- START SECTION BANNER -->
<div class="banner_section slide_medium shop_banner_slider staggered-animation-wrap">
    <div id="carouselExampleControls" class="carousel slide carousel-fade light_arrow" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item background_bg active"
                data-img-src="{{ asset('templateassets') }}/assets/images/bs7.jpg">
                <div class="banner_slide_content banner_content_inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-7 col-10">
                                <div class="banner_content overflow-hidden">
                                    <h2 class="staggered-animation" data-animation="slideInLeft"
                                        data-animation-delay="0.5s">LED 75 INCH F58</h2>
                                    <h5 class="mb-3 mb-sm-4 staggered-animation font-weight-light"
                                        data-animation="slideInLeft" data-animation-delay="1s">Get up to <span
                                            class="text_default">50%</span> off Today Only!</h5>
                                    <a class="btn btn-fill-out staggered-animation text-uppercase"
                                        href="shop-left-sidebar.html" data-animation="slideInLeft"
                                        data-animation-delay="1.5s">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item background_bg" data-img-src="{{ asset('templateassets') }}/assets/images/bs1.png">
                <div class="banner_slide_content banner_content_inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 col-10">
                                <div class="banner_content overflow-hidden">
                                    <h2 class="staggered-animation" data-animation="slideInLeft"
                                        data-animation-delay="0.5s">Smart Phones</h2>
                                    <h5 class="mb-3 mb-sm-4 staggered-animation font-weight-light"
                                        data-animation="slideInLeft" data-animation-delay="1s"><span
                                            class="text_default">50%</span> off in all products</h5>
                                    <a class="btn btn-fill-out staggered-animation text-uppercase"
                                        href="shop-left-sidebar.html" data-animation="slideInLeft"
                                        data-animation-delay="1.5s">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item background_bg" data-img-src="{{ asset('templateassets') }}/assets/images/bs1.png">
                <div class="banner_slide_content banner_content_inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 col-10">
                                <div class="banner_content overflow-hidden">
                                    <h2 class="staggered-animation" data-animation="slideInLeft"
                                        data-animation-delay="0.5s">Beat Headphone</h2>
                                    <h5 class="mb-3 mb-sm-4 staggered-animation font-weight-light"
                                        data-animation="slideInLeft" data-animation-delay="1s">Taking your Viewing
                                        Experience to Next Level</h5>
                                    <a class="btn btn-fill-out staggered-animation text-uppercase"
                                        href="shop-left-sidebar.html" data-animation="slideInLeft"
                                        data-animation-delay="1.5s">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-bs-slide="prev"><i
                class="ion-chevron-left"></i></a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-bs-slide="next"><i
                class="ion-chevron-right"></i></a>
    </div>
</div>
<!-- END SECTION BANNER -->

<!-- END MAIN CONTENT -->
<div class="main_content">

    <!-- START SECTION BANNER -->

    <!-- START SECTION CATEGORIES -->
    <div class="section small_pb small_pt">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="heading_s4 text-center">
                        <h2>Top Categories</h2>
                    </div>
                    <p class="text-center leads">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus
                        blandit massa enim Nullam nunc varius.</p>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-12">
                    <div class="cat_slider cat_style1 mt-4 mt-md-0 carousel_slider owl-carousel owl-theme nav_style5"
                        data-loop="true" data-dots="false" data-nav="true" data-margin="30"
                        data-responsive='{"0":{"items": "2"}, "480":{"items": "3"}, "576":{"items": "4"}, "768":{"items": "5"}, "991":{"items": "6"}, "1199":{"items": "7"}}'>
                        <div class="item">
                            <div class="categories_box">
                                <a href="#">
                                    <img src="{{ asset('templateassets') }}/assets/images/cat_img1.png"
                                        alt="cat_img1" />
                                    <span>Television</span>
                                </a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="categories_box">
                                <a href="#">
                                    <img src="{{ asset('templateassets') }}/assets/images/cat_img2.png"
                                        alt="cat_img2" />
                                    <span>Mobile</span>
                                </a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="categories_box">
                                <a href="#">
                                    <img src="{{ asset('templateassets') }}/assets/images/cat_img3.png"
                                        alt="cat_img3" />
                                    <span>Headphone</span>
                                </a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="categories_box">
                                <a href="#">
                                    <img src="{{ asset('templateassets') }}/assets/images/cat_img4.png"
                                        alt="cat_img4" />
                                    <span>Watch</span>
                                </a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="categories_box">
                                <a href="#">
                                    <img src="{{ asset('templateassets') }}/assets/images/cat_img5.png"
                                        alt="cat_img5" />
                                    <span>Game</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <!-- START SECTION SHOP -->
    <div class="section small_pt">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="heading_s1 text-center">
                        <h2>Trending Products</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="product_slider carousel_slider owl-carousel owl-theme dot_style1" data-loop="false"
                        data-margin="20"
                        data-responsive='{"0":{"items": "1"}, "481":{"items": "2"}, "768":{"items": "3"}, "991":{"items": "4"}}'>
                        @foreach ($tends as $item)
                        <div class="item">
                            <div class="product_wrap">
                                <div class="product_img">
                                    <a href="{{url('/singleproduct/2')}}">
                                        <img src="{{ asset('product_images/'.@$item->image_one) }}" alt="el_img2">
                                        <img class="product_hover_img"
                                            src="{{ asset('product_images/'.@$item->image_one) }}" alt="el_hover_img2">
                                    </a>
                                    <div class="product_action_box">
                                        <ul class="list_none pr_action_btn">
                                            <li class="add-to-cart">
                                                <button type="button" id="{{ $item->id }} " data-bs-toggle="modal"
                                                    data-bs-target="#cartmodal" onclick="productview(this.id)">
                                                    <i class="icon-basket-loaded"></i>
                                                </button>
                                            </li>
                                            <li><a href="shop-compare.html" class="popup-ajax"><i
                                                        class="icon-shuffle"></i></a></li>
                                            <li><a href="{{url('/product-quick-view/'.$item->id)}}"
                                                    class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
                                            <li>
                                                <button id="{{$item->id}}" onclick="addwish(this.id)"><i class="icon-heart"></i></button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product_info">
                                    <h6 class="product_title"><a href="{{url('/singleproduct/'.$item->id)}}">Smart Watch
                                            External</a></h6>
                                    <div class="product_price">
                                        <span class="price">${{@$item->selling_price}}</span>
                                        <del>${{@$item->discount_price}}</del>
                                        <div class="on_sale">
                                            <span>25% Off</span>
                                        </div>
                                    </div>
                                    <div class="rating_wrap">
                                        <div class="rating">
                                            <div class="product_rate" style="width:68%"></div>
                                        </div>
                                        <span class="rating_num">(15)</span>
                                    </div>
                                    <div class="pr_desc">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit
                                            massa enim. Nullam id varius nunc id varius nunc.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END SECTION SHOP -->
     <!-- START SECTION SHOP -->
    <div class="section small_pt">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="heading_s1 text-center">
                        <h2>Exclusive Products</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="product_slider carousel_slider owl-carousel owl-theme dot_style1" data-loop="false"
                        data-margin="20"
                        data-responsive='{"0":{"items": "1"}, "481":{"items": "2"}, "768":{"items": "3"}, "991":{"items": "4"}}'>
                        @foreach ($tends as $item)
                        <div class="item">
                            <div class="product_wrap">
                                <div class="product_img">
                                    <a href="{{url('/singleproduct/2')}}">
                                        <img src="{{ asset('product_images/'.@$item->image_one) }}" alt="el_img2">
                                        <img class="product_hover_img"
                                            src="{{ asset('product_images/'.@$item->image_one) }}" alt="el_hover_img2">
                                    </a>
                                    <div class="product_action_box">
                                        <ul class="list_none pr_action_btn">
                                            <li class="add-to-cart">
                                                <button type="button" id="{{ $item->id }} " data-bs-toggle="modal"
                                                    data-bs-target="#cartmodal" onclick="productview(this.id)">
                                                    <i class="icon-basket-loaded"></i>
                                                </button>
                                            </li>
                                            <li><a href="shop-compare.html" class="popup-ajax"><i
                                                        class="icon-shuffle"></i></a></li>
                                            <li><a href="{{url('/product-quick-view/'.$item->id)}}"
                                                    class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
                                            <li>
                                                <button id="{{$item->id}}" onclick="addwish(this.id)"><i class="icon-heart"></i></button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product_info">
                                    <h6 class="product_title"><a href="{{url('/singleproduct/'.$item->id)}}">Smart Watch
                                            External</a></h6>
                                    <div class="product_price">
                                        <span class="price">${{@$item->selling_price}}</span>
                                        <del>${{@$item->discount_price}}</del>
                                        <div class="on_sale">
                                            <span>25% Off</span>
                                        </div>
                                    </div>
                                    <div class="rating_wrap">
                                        <div class="rating">
                                            <div class="product_rate" style="width:68%"></div>
                                        </div>
                                        <span class="rating_num">(15)</span>
                                    </div>
                                    <div class="pr_desc">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit
                                            massa enim. Nullam id varius nunc id varius nunc.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END SECTION SHOP -->
     <!-- START SECTION SHOP -->
    <div class="section small_pt">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="heading_s1 text-center">
                        <h2>Hot Deals</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="product_slider carousel_slider owl-carousel owl-theme dot_style1" data-loop="false"
                        data-margin="20"
                        data-responsive='{"0":{"items": "1"}, "481":{"items": "2"}, "768":{"items": "3"}, "991":{"items": "4"}}'>
                        @foreach ($tends as $item)
                        <div class="item">
                            <div class="product_wrap">
                                <div class="product_img">
                                    <a href="{{url('/singleproduct/2')}}">
                                        <img src="{{ asset('product_images/'.@$item->image_one) }}" alt="el_img2">
                                        <img class="product_hover_img"
                                            src="{{ asset('product_images/'.@$item->image_one) }}" alt="el_hover_img2">
                                    </a>
                                    <div class="product_action_box">
                                        <ul class="list_none pr_action_btn">
                                            <li class="add-to-cart">
                                                <button type="button" id="{{ $item->id }} " data-bs-toggle="modal"
                                                    data-bs-target="#cartmodal" onclick="productview(this.id)">
                                                    <i class="icon-basket-loaded"></i>
                                                </button>
                                            </li>
                                            <li><a href="shop-compare.html" class="popup-ajax"><i
                                                        class="icon-shuffle"></i></a></li>
                                            <li><a href="{{url('/product-quick-view/'.$item->id)}}"
                                                    class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
                                            <li> <button id="{{$item->id}}" onclick="addwish(this.id)"><i class="icon-heart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product_info">
                                    <h6 class="product_title"><a href="{{url('/singleproduct/'.$item->id)}}">Smart Watch
                                            External</a></h6>
                                    <div class="product_price">
                                        <span class="price">${{@$item->selling_price}}</span>
                                        <del>${{@$item->discount_price}}</del>
                                        <div class="on_sale">
                                            <span>25% Off</span>
                                        </div>
                                    </div>
                                    <div class="rating_wrap">
                                        <div class="rating">
                                            <div class="product_rate" style="width:68%"></div>
                                        </div>
                                        <span class="rating_num">(15)</span>
                                    </div>
                                    <div class="pr_desc">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit
                                            massa enim. Nullam id varius nunc id varius nunc.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END SECTION SHOP -->





    <!-- START SECTION SHOP -->

    {{-- black banner --}}
    <!-- START SECTION BANNER -->
    <div class="section pb_20 small_pt">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="sale-banner mb-3 mb-md-4">

                        <a class="hover_effect1" href="#">
                            <img src="{{ asset('product_images/'.@$banner->image_two) }}" alt="shop_banner_img11">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END SECTION BANNER -->
    <!-- END SECTION SHOP -->


    {{-- start load more --}}


    <!-- START SECTION SHOP -->
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="row align-items-center mb-4 pb-1">
                    </div>
                    <div class="row shop_container loadmore" data-item="8" data-item-show="4"
                        data-finish-message="No More Item to Show" data-btn="Load More">

                        @foreach ($tends as $item)
                        <div class="col-lg-3 col-md-4 col-6 grid_item">
                            <div class="product">
                                <div class="product_img">
                                    <a href="shop-product-detail.html">
                                        <img src="{{ asset('product_images/'.@$item->image_one) }}" alt="product_img1">
                                    </a>
                                    <div class="product_action_box">
                                        <ul class="list_none pr_action_btn">
                                            <li class="add-to-cart">
                                                 <button type="button" id="{{ $item->id }} " data-bs-toggle="modal"
                                                    data-bs-target="#cartmodal" onclick="productview(this.id)">
                                                    <i class="icon-basket-loaded"></i>
                                                </button>
                                                </li>
                                            <li><a href="shop-compare.html" class="popup-ajax"><i
                                                        class="icon-shuffle"></i></a></li>
                                            <li><a href="{{url('/product-quick-view/'.$item->id)}}"
                                                    class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
                                            <li> <button id="{{$item->id}}" onclick="addwish(this.id)"><i class="icon-heart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product_info">
                                    <h6 class="product_title"><a href="shop-product-detail.html">Blue Dress For
                                            Woman</a></h6>
                                    <div class="product_price">
                                        <span class="price">$45.00</span>
                                        <del>$55.25</del>
                                        <div class="on_sale">
                                            <span>35% Off</span>
                                        </div>
                                    </div>
                                    <div class="rating_wrap">
                                        <div class="rating">
                                            <div class="product_rate" style="width:80%"></div>
                                        </div>
                                        <span class="rating_num">(21)</span>
                                    </div>
                                    <div class="pr_desc">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit
                                            massa enim. Nullam id varius nunc id varius nunc.</p>
                                    </div>
                                    <div class="pr_switch_wrap">
                                        <div class="product_color_switch">
                                            <span class="active" data-color="#87554B"></span>
                                            <span data-color="#333333"></span>
                                            <span data-color="#DA323F"></span>
                                        </div>
                                    </div>
                                    <div class="list_product_action_box">
                                        <ul class="list_none pr_action_btn">
                                            <li class="add-to-cart"><a href="#"><i class="icon-basket-loaded"></i> Add
                                                    To Cart</a></li>
                                            <li><a href="shop-compare.html" class="popup-ajax"><i
                                                        class="icon-shuffle"></i></a></li>
                                            <li><a href="{{url('/product-quick-view/'.$item->id)}}"
                                                    class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
                                            <li> <button id="{{$item->id}}" onclick="addwish(this.id)"><i class="icon-heart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                           @foreach ($tends as $item)
                        <div class="col-lg-3 col-md-4 col-6 grid_item">
                            <div class="product">
                                <div class="product_img">
                                    <a href="shop-product-detail.html">
                                        <img src="{{ asset('product_images/'.@$item->image_one) }}" alt="product_img1">
                                    </a>
                                    <div class="product_action_box">
                                        <ul class="list_none pr_action_btn">
                                            <li class="add-to-cart">
                                                 <button type="button" id="{{ $item->id }} " data-bs-toggle="modal"
                                                    data-bs-target="#cartmodal" onclick="productview(this.id)">
                                                    <i class="icon-basket-loaded"></i>
                                                </button>
                                                </li>
                                            <li><a href="shop-compare.html" class="popup-ajax"><i
                                                        class="icon-shuffle"></i></a></li>
                                            <li><a href="{{url('/product-quick-view/'.$item->id)}}"
                                                    class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
                                            <li> <button id="{{$item->id}}" onclick="addwish(this.id)"><i class="icon-heart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product_info">
                                    <h6 class="product_title"><a href="shop-product-detail.html">Blue Dress For
                                            Woman</a></h6>
                                    <div class="product_price">
                                        <span class="price">$45.00</span>
                                        <del>$55.25</del>
                                        <div class="on_sale">
                                            <span>35% Off</span>
                                        </div>
                                    </div>
                                    <div class="rating_wrap">
                                        <div class="rating">
                                            <div class="product_rate" style="width:80%"></div>
                                        </div>
                                        <span class="rating_num">(21)</span>
                                    </div>
                                    <div class="pr_desc">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit
                                            massa enim. Nullam id varius nunc id varius nunc.</p>
                                    </div>
                                    <div class="pr_switch_wrap">
                                        <div class="product_color_switch">
                                            <span class="active" data-color="#87554B"></span>
                                            <span data-color="#333333"></span>
                                            <span data-color="#DA323F"></span>
                                        </div>
                                    </div>
                                    <div class="list_product_action_box">
                                        <ul class="list_none pr_action_btn">
                                            <li class="add-to-cart"><a href="#"><i class="icon-basket-loaded"></i> Add
                                                    To Cart</a></li>
                                            <li><a href="shop-compare.html" class="popup-ajax"><i
                                                        class="icon-shuffle"></i></a></li>
                                            <li><a href="{{url('/product-quick-view/'.$item->id)}}"
                                                    class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
                                            <li> <button id="{{$item->id}}" onclick="addwish(this.id)"><i class="icon-heart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                           @foreach ($tends as $item)
                        <div class="col-lg-3 col-md-4 col-6 grid_item">
                            <div class="product">
                                <div class="product_img">
                                    <a href="shop-product-detail.html">
                                        <img src="{{ asset('product_images/'.@$item->image_one) }}" alt="product_img1">
                                    </a>
                                    <div class="product_action_box">
                                        <ul class="list_none pr_action_btn">
                                            <li class="add-to-cart">
                                                 <button type="button" id="{{ $item->id }} " data-bs-toggle="modal"
                                                    data-bs-target="#cartmodal" onclick="productview(this.id)">
                                                    <i class="icon-basket-loaded"></i>
                                                </button>
                                                </li>
                                            <li><a href="shop-compare.html" class="popup-ajax"><i
                                                        class="icon-shuffle"></i></a></li>
                                            <li><a href="{{url('/product-quick-view/'.$item->id)}}"
                                                    class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
                                            <li> <button id="{{$item->id}}" onclick="addwish(this.id)"><i class="icon-heart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product_info">
                                    <h6 class="product_title"><a href="shop-product-detail.html">Blue Dress For
                                            Woman</a></h6>
                                    <div class="product_price">
                                        <span class="price">$45.00</span>
                                        <del>$55.25</del>
                                        <div class="on_sale">
                                            <span>35% Off</span>
                                        </div>
                                    </div>
                                    <div class="rating_wrap">
                                        <div class="rating">
                                            <div class="product_rate" style="width:80%"></div>
                                        </div>
                                        <span class="rating_num">(21)</span>
                                    </div>
                                    <div class="pr_desc">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit
                                            massa enim. Nullam id varius nunc id varius nunc.</p>
                                    </div>
                                    <div class="pr_switch_wrap">
                                        <div class="product_color_switch">
                                            <span class="active" data-color="#87554B"></span>
                                            <span data-color="#333333"></span>
                                            <span data-color="#DA323F"></span>
                                        </div>
                                    </div>
                                    <div class="list_product_action_box">
                                        <ul class="list_none pr_action_btn">
                                            <li class="add-to-cart"><a href="#"><i class="icon-basket-loaded"></i> Add
                                                    To Cart</a></li>
                                            <li><a href="shop-compare.html" class="popup-ajax"><i
                                                        class="icon-shuffle"></i></a></li>
                                            <li><a href="{{url('/product-quick-view/'.$item->id)}}"
                                                    class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
                                            <li> <button id="{{$item->id}}" onclick="addwish(this.id)"><i class="icon-heart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                           @foreach ($tends as $item)
                        <div class="col-lg-3 col-md-4 col-6 grid_item">
                            <div class="product">
                                <div class="product_img">
                                    <a href="shop-product-detail.html">
                                        <img src="{{ asset('product_images/'.@$item->image_one) }}" alt="product_img1">
                                    </a>
                                    <div class="product_action_box">
                                        <ul class="list_none pr_action_btn">
                                            <li class="add-to-cart">
                                                 <button type="button" id="{{ $item->id }} " data-bs-toggle="modal"
                                                    data-bs-target="#cartmodal" onclick="productview(this.id)">
                                                    <i class="icon-basket-loaded"></i>
                                                </button>
                                                </li>
                                            <li><a href="shop-compare.html" class="popup-ajax"><i
                                                        class="icon-shuffle"></i></a></li>
                                            <li><a href="{{url('/product-quick-view/'.$item->id)}}"
                                                    class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
                                            <li> <button id="{{$item->id}}" onclick="addwish(this.id)"><i class="icon-heart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product_info">
                                    <h6 class="product_title"><a href="shop-product-detail.html">Blue Dress For
                                            Woman</a></h6>
                                    <div class="product_price">
                                        <span class="price">$45.00</span>
                                        <del>$55.25</del>
                                        <div class="on_sale">
                                            <span>35% Off</span>
                                        </div>
                                    </div>
                                    <div class="rating_wrap">
                                        <div class="rating">
                                            <div class="product_rate" style="width:80%"></div>
                                        </div>
                                        <span class="rating_num">(21)</span>
                                    </div>
                                    <div class="pr_desc">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit
                                            massa enim. Nullam id varius nunc id varius nunc.</p>
                                    </div>
                                    <div class="pr_switch_wrap">
                                        <div class="product_color_switch">
                                            <span class="active" data-color="#87554B"></span>
                                            <span data-color="#333333"></span>
                                            <span data-color="#DA323F"></span>
                                        </div>
                                    </div>
                                    <div class="list_product_action_box">
                                        <ul class="list_none pr_action_btn">
                                            <li class="add-to-cart"><a href="#"><i class="icon-basket-loaded"></i> Add
                                                    To Cart</a></li>
                                            <li><a href="shop-compare.html" class="popup-ajax"><i
                                                        class="icon-shuffle"></i></a></li>
                                            <li><a href="{{url('/product-quick-view/'.$item->id)}}"
                                                    class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
                                            <li> <button id="{{$item->id}}" onclick="addwish(this.id)"><i class="icon-heart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                       

                    

                        {{-- <div class="col-lg-3 col-md-4 col-6 grid_item">
                            <div class="product">
                                <div class="product_img">
                                    <a href="shop-product-detail.html">
                                        <img src="{{ asset('templateassets') }}/assets/images/product_img2.jpg"
                                            alt="product_img2">
                                    </a>
                                    <div class="product_action_box">
                                        <ul class="list_none pr_action_btn">
                                            <li class="add-to-cart"><a href="#"><i class="icon-basket-loaded"></i> Add
                                                    To Cart</a></li>
                                            <li><a href="shop-compare.html" class="popup-ajax"><i
                                                        class="icon-shuffle"></i></a></li>
                                            <li><a href="{{url('/product-quick-view/'.$item->id)}}"
                                                    class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
                                            <li> <button id="{{$item->id}}" onclick="addwish(this.id)"><i class="icon-heart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product_info">
                                    <h6 class="product_title"><a href="shop-product-detail.html">Lether Gray Tuxedo</a>
                                    </h6>
                                    <div class="product_price">
                                        <span class="price">$55.00</span>
                                        <del>$95.00</del>
                                        <div class="on_sale">
                                            <span>25% Off</span>
                                        </div>
                                    </div>
                                    <div class="rating_wrap">
                                        <div class="rating">
                                            <div class="product_rate" style="width:68%"></div>
                                        </div>
                                        <span class="rating_num">(15)</span>
                                    </div>
                                    <div class="pr_desc">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit
                                            massa enim. Nullam id varius nunc id varius nunc.</p>
                                    </div>
                                    <div class="pr_switch_wrap">
                                        <div class="product_color_switch">
                                            <span class="active" data-color="#847764"></span>
                                            <span data-color="#0393B5"></span>
                                            <span data-color="#DA323F"></span>
                                        </div>
                                    </div>
                                    <div class="list_product_action_box">
                                        <ul class="list_none pr_action_btn">
                                            <li class="add-to-cart"><a href="#"><i class="icon-basket-loaded"></i> Add
                                                    To Cart</a></li>
                                            <li><a href="shop-compare.html" class="popup-ajax"><i
                                                        class="icon-shuffle"></i></a></li>
                                            <li><a href="{{url('/product-quick-view/'.$item->id)}}"
                                                    class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
                                            <li> <button id="{{$item->id}}" onclick="addwish(this.id)"><i class="icon-heart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-6 grid_item">
                            <div class="product">
                                <span class="pr_flash">New</span>
                                <div class="product_img">
                                    <a href="shop-product-detail.html">
                                        <img src="{{ asset('templateassets') }}/assets/images/product_img3.jpg"
                                            alt="product_img3">
                                    </a>
                                    <div class="product_action_box">
                                        <ul class="list_none pr_action_btn">
                                            <li class="add-to-cart"><a href="#"><i class="icon-basket-loaded"></i> Add
                                                    To Cart</a></li>
                                            <li><a href="shop-compare.html" class="popup-ajax"><i
                                                        class="icon-shuffle"></i></a></li>
                                            <li><a href="{{url('/product-quick-view/'.$item->id)}}"
                                                    class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
                                            <li> <button id="{{$item->id}}" onclick="addwish(this.id)"><i class="icon-heart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product_info">
                                    <h6 class="product_title"><a href="shop-product-detail.html">woman full sliv
                                            dress</a></h6>
                                    <div class="product_price">
                                        <span class="price">$68.00</span>
                                        <del>$99.00</del>
                                    </div>
                                    <div class="rating_wrap">
                                        <div class="rating">
                                            <div class="product_rate" style="width:87%"></div>
                                        </div>
                                        <span class="rating_num">(25)</span>
                                    </div>
                                    <div class="pr_desc">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit
                                            massa enim. Nullam id varius nunc id varius nunc.</p>
                                    </div>
                                    <div class="pr_switch_wrap">
                                        <div class="product_color_switch">
                                            <span class="active" data-color="#333333"></span>
                                            <span data-color="#7C502F"></span>
                                            <span data-color="#2F366C"></span>
                                            <span data-color="#874A3D"></span>
                                        </div>
                                    </div>
                                    <div class="list_product_action_box">
                                        <ul class="list_none pr_action_btn">
                                            <li class="add-to-cart"><a href="#"><i class="icon-basket-loaded"></i> Add
                                                    To Cart</a></li>
                                            <li><a href="shop-compare.html" class="popup-ajax"><i
                                                        class="icon-shuffle"></i></a></li>
                                            <li><a href="{{url('/product-quick-view/'.$item->id)}}"
                                                    class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
                                            <li> <button id="{{$item->id}}" onclick="addwish(this.id)"><i class="icon-heart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-6 grid_item">
                            <div class="product">
                                <div class="product_img">
                                    <a href="shop-product-detail.html">
                                        <img src="{{ asset('templateassets') }}/assets/images/product_img4.jpg"
                                            alt="product_img4">
                                    </a>
                                    <div class="product_action_box">
                                        <ul class="list_none pr_action_btn">
                                            <li class="add-to-cart"><a href="#"><i class="icon-basket-loaded"></i> Add
                                                    To Cart</a></li>
                                            <li><a href="shop-compare.html" class="popup-ajax"><i
                                                        class="icon-shuffle"></i></a></li>
                                            <li><a href="{{url('/product-quick-view/'.$item->id)}}"
                                                    class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
                                            <li> <button id="{{$item->id}}" onclick="addwish(this.id)"><i class="icon-heart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product_info">
                                    <h6 class="product_title"><a href="shop-product-detail.html">light blue Shirt</a>
                                    </h6>
                                    <div class="product_price">
                                        <span class="price">$69.00</span>
                                        <del>$89.00</del>
                                        <div class="on_sale">
                                            <span>20% Off</span>
                                        </div>
                                    </div>
                                    <div class="rating_wrap">
                                        <div class="rating">
                                            <div class="product_rate" style="width:70%"></div>
                                        </div>
                                        <span class="rating_num">(22)</span>
                                    </div>
                                    <div class="pr_desc">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit
                                            massa enim. Nullam id varius nunc id varius nunc.</p>
                                    </div>
                                    <div class="pr_switch_wrap">
                                        <div class="product_color_switch">
                                            <span class="active" data-color="#333333"></span>
                                            <span data-color="#A92534"></span>
                                            <span data-color="#B9C2DF"></span>
                                        </div>
                                    </div>
                                    <div class="list_product_action_box">
                                        <ul class="list_none pr_action_btn">
                                            <li class="add-to-cart"><a href="#"><i class="icon-basket-loaded"></i> Add
                                                    To Cart</a></li>
                                            <li><a href="shop-compare.html" class="popup-ajax"><i
                                                        class="icon-shuffle"></i></a></li>
                                            <li><a href="{{url('/product-quick-view/'.$item->id)}}"
                                                    class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
                                            <li> <button id="{{$item->id}}" onclick="addwish(this.id)"><i class="icon-heart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-6 grid_item">
                            <div class="product">
                                <div class="product_img">
                                    <a href="shop-product-detail.html">
                                        <img src="{{ asset('templateassets') }}/assets/images/product_img5.jpg"
                                            alt="product_img5">
                                    </a>
                                    <div class="product_action_box">
                                        <ul class="list_none pr_action_btn">
                                            <li class="add-to-cart"><a href="#"><i class="icon-basket-loaded"></i> Add
                                                    To Cart</a></li>
                                            <li><a href="shop-compare.html" class="popup-ajax"><i
                                                        class="icon-shuffle"></i></a></li>
                                            <li><a href="{{url('/product-quick-view/'.$item->id)}}"
                                                    class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
                                            <li> <button id="{{$item->id}}" onclick="addwish(this.id)"><i class="icon-heart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product_info">
                                    <h6 class="product_title"><a href="shop-product-detail.html">blue dress for
                                            woman</a></h6>
                                    <div class="product_price">
                                        <span class="price">$45.00</span>
                                        <del>$55.25</del>
                                        <div class="on_sale">
                                            <span>35% Off</span>
                                        </div>
                                    </div>
                                    <div class="rating_wrap">
                                        <div class="rating">
                                            <div class="product_rate" style="width:80%"></div>
                                        </div>
                                        <span class="rating_num">(21)</span>
                                    </div>
                                    <div class="pr_desc">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit
                                            massa enim. Nullam id varius nunc id varius nunc.</p>
                                    </div>
                                    <div class="pr_switch_wrap">
                                        <div class="product_color_switch">
                                            <span class="active" data-color="#87554B"></span>
                                            <span data-color="#333333"></span>
                                            <span data-color="#5FB7D4"></span>
                                        </div>
                                    </div>
                                    <div class="list_product_action_box">
                                        <ul class="list_none pr_action_btn">
                                            <li class="add-to-cart"><a href="#"><i class="icon-basket-loaded"></i> Add
                                                    To Cart</a></li>
                                            <li><a href="shop-compare.html" class="popup-ajax"><i
                                                        class="icon-shuffle"></i></a></li>
                                            <li><a href="{{url('/product-quick-view/'.$item->id)}}"
                                                    class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
                                            <li> <button id="{{$item->id}}" onclick="addwish(this.id)"><i class="icon-heart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-6 grid_item">
                            <div class="product">
                                <span class="pr_flash bg-danger">Hot</span>
                                <div class="product_img">
                                    <a href="shop-product-detail.html">
                                        <img src="{{ asset('templateassets') }}/assets/images/product_img6.jpg"
                                            alt="product_img6">
                                    </a>
                                    <div class="product_action_box">
                                        <ul class="list_none pr_action_btn">
                                            <li class="add-to-cart"><a href="#"><i class="icon-basket-loaded"></i> Add
                                                    To Cart</a></li>
                                            <li><a href="shop-compare.html" class="popup-ajax"><i
                                                        class="icon-shuffle"></i></a></li>
                                            <li><a href="{{url('/product-quick-view/'.$item->id)}}"
                                                    class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
                                            <li> <button id="{{$item->id}}" onclick="addwish(this.id)"><i class="icon-heart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product_info">
                                    <h6 class="product_title"><a href="shop-product-detail.html">Blue casual check
                                            shirt</a></h6>
                                    <div class="product_price">
                                        <span class="price">$55.00</span>
                                        <del>$95.00</del>
                                        <div class="on_sale">
                                            <span>25% Off</span>
                                        </div>
                                    </div>
                                    <div class="rating_wrap">
                                        <div class="rating">
                                            <div class="product_rate" style="width:68%"></div>
                                        </div>
                                        <span class="rating_num">(15)</span>
                                    </div>
                                    <div class="pr_desc">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit
                                            massa enim. Nullam id varius nunc id varius nunc.</p>
                                    </div>
                                    <div class="pr_switch_wrap">
                                        <div class="product_color_switch">
                                            <span class="active" data-color="#87554B"></span>
                                            <span data-color="#333333"></span>
                                        </div>
                                    </div>
                                    <div class="list_product_action_box">
                                        <ul class="list_none pr_action_btn">
                                            <li class="add-to-cart"><a href="#"><i class="icon-basket-loaded"></i> Add
                                                    To Cart</a></li>
                                            <li><a href="shop-compare.html" class="popup-ajax"><i
                                                        class="icon-shuffle"></i></a></li>
                                            <li><a href="{{url('/product-quick-view/'.$item->id)}}"
                                                    class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
                                            <li> <button id="{{$item->id}}" onclick="addwish(this.id)"><i class="icon-heart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-6 grid_item">
                            <div class="product">
                                <span class="pr_flash bg-success">Sale</span>
                                <div class="product_img">
                                    <a href="shop-product-detail.html">
                                        <img src="{{ asset('templateassets') }}/assets/images/product_img7.jpg"
                                            alt="product_img7">
                                    </a>
                                    <div class="product_action_box">
                                        <ul class="list_none pr_action_btn">
                                            <li class="add-to-cart"><a href="#"><i class="icon-basket-loaded"></i> Add
                                                    To Cart</a></li>
                                            <li><a href="shop-compare.html" class="popup-ajax"><i
                                                        class="icon-shuffle"></i></a></li>
                                            <li><a href="{{url('/product-quick-view/'.$item->id)}}"
                                                    class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
                                            <li> <button id="{{$item->id}}" onclick="addwish(this.id)"><i class="icon-heart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product_info">
                                    <h6 class="product_title"><a href="shop-product-detail.html">white black line
                                            dress</a></h6>
                                    <div class="product_price">
                                        <span class="price">$68.00</span>
                                        <del>$99.00</del>
                                        <div class="on_sale">
                                            <span>20% Off</span>
                                        </div>
                                    </div>
                                    <div class="rating_wrap">
                                        <div class="rating">
                                            <div class="product_rate" style="width:87%"></div>
                                        </div>
                                        <span class="rating_num">(25)</span>
                                    </div>
                                    <div class="pr_desc">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit
                                            massa enim. Nullam id varius nunc id varius nunc.</p>
                                    </div>
                                    <div class="pr_switch_wrap">
                                        <div class="product_color_switch">
                                            <span class="active" data-color="#333333"></span>
                                            <span data-color="#7C502F"></span>
                                            <span data-color="#2F366C"></span>
                                        </div>
                                    </div>
                                    <div class="list_product_action_box">
                                        <ul class="list_none pr_action_btn">
                                            <li class="add-to-cart"><a href="#"><i class="icon-basket-loaded"></i> Add
                                                    To Cart</a></li>
                                            <li><a href="shop-compare.html" class="popup-ajax"><i
                                                        class="icon-shuffle"></i></a></li>
                                            <li><a href="{{url('/product-quick-view/'.$item->id)}}"
                                                    class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
                                            <li> <button id="{{$item->id}}" onclick="addwish(this.id)"><i class="icon-heart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-6 grid_item">
                            <div class="product">
                                <div class="product_img">
                                    <a href="shop-product-detail.html">
                                        <img src="{{ asset('templateassets') }}/assets/images/product_img8.jpg"
                                            alt="product_img8">
                                    </a>
                                    <div class="product_action_box">
                                        <ul class="list_none pr_action_btn">
                                            <li class="add-to-cart"><a href="#"><i class="icon-basket-loaded"></i> Add
                                                    To Cart</a></li>
                                            <li><a href="shop-compare.html" class="popup-ajax"><i
                                                        class="icon-shuffle"></i></a></li>
                                            <li><a href="{{url('/product-quick-view/'.$item->id)}}"
                                                    class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
                                            <li> <button id="{{$item->id}}" onclick="addwish(this.id)"><i class="icon-heart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product_info">
                                    <h6 class="product_title"><a href="shop-product-detail.html">Men blue jins Shirt</a>
                                    </h6>
                                    <div class="product_price">
                                        <span class="price">$69.00</span>
                                        <del>$89.00</del>
                                        <div class="on_sale">
                                            <span>20% Off</span>
                                        </div>
                                    </div>
                                    <div class="rating_wrap">
                                        <div class="rating">
                                            <div class="product_rate" style="width:70%"></div>
                                        </div>
                                        <span class="rating_num">(22)</span>
                                    </div>
                                    <div class="pr_desc">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit
                                            massa enim. Nullam id varius nunc id varius nunc.</p>
                                    </div>
                                    <div class="pr_switch_wrap">
                                        <div class="product_color_switch">
                                            <span class="active" data-color="#333333"></span>
                                            <span data-color="#444653"></span>
                                            <span data-color="#B9C2DF"></span>
                                        </div>
                                    </div>
                                    <div class="list_product_action_box">
                                        <ul class="list_none pr_action_btn">
                                            <li class="add-to-cart"><a href="#"><i class="icon-basket-loaded"></i> Add
                                                    To Cart</a></li>
                                            <li><a href="shop-compare.html" class="popup-ajax"><i
                                                        class="icon-shuffle"></i></a></li>
                                            <li><a href="{{url('/product-quick-view/'.$item->id)}}"
                                                    class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
                                            <li> <button id="{{$item->id}}" onclick="addwish(this.id)"><i class="icon-heart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-6 grid_item">
                            <div class="product">
                                <div class="product_img">
                                    <a href="shop-product-detail.html">
                                        <img src="{{ asset('templateassets') }}/assets/images/product_img9.jpg"
                                            alt="product_img9">
                                    </a>
                                    <div class="product_action_box">
                                        <ul class="list_none pr_action_btn">
                                            <li class="add-to-cart"><a href="#"><i class="icon-basket-loaded"></i> Add
                                                    To Cart</a></li>
                                            <li><a href="shop-compare.html" class="popup-ajax"><i
                                                        class="icon-shuffle"></i></a></li>
                                            <li><a href="{{url('/product-quick-view/'.$item->id)}}"
                                                    class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
                                            <li> <button id="{{$item->id}}" onclick="addwish(this.id)"><i class="icon-heart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product_info">
                                    <h6 class="product_title"><a href="shop-product-detail.html">T-Shirt Form Girls</a>
                                    </h6>
                                    <div class="product_price">
                                        <span class="price">$45.00</span>
                                        <del>$55.25</del>
                                        <div class="on_sale">
                                            <span>35% Off</span>
                                        </div>
                                    </div>
                                    <div class="rating_wrap">
                                        <div class="rating">
                                            <div class="product_rate" style="width:80%"></div>
                                        </div>
                                        <span class="rating_num">(21)</span>
                                    </div>
                                    <div class="pr_desc">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit
                                            massa enim. Nullam id varius nunc id varius nunc.</p>
                                    </div>
                                    <div class="pr_switch_wrap">
                                        <div class="product_color_switch">
                                            <span class="active" data-color="#B5B6BB"></span>
                                            <span data-color="#333333"></span>
                                            <span data-color="#DA323F"></span>
                                        </div>
                                    </div>
                                    <div class="list_product_action_box">
                                        <ul class="list_none pr_action_btn">
                                            <li class="add-to-cart"><a href="#"><i class="icon-basket-loaded"></i> Add
                                                    To Cart</a></li>
                                            <li><a href="shop-compare.html" class="popup-ajax"><i
                                                        class="icon-shuffle"></i></a></li>
                                            <li><a href="{{url('/product-quick-view/'.$item->id)}}"
                                                    class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
                                            <li> <button id="{{$item->id}}" onclick="addwish(this.id)"><i class="icon-heart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-6 grid_item">
                            <div class="product">
                                <span class="pr_flash bg-danger">Hot</span>
                                <div class="product_img">
                                    <a href="shop-product-detail.html">
                                        <img src="{{ asset('templateassets') }}/assets/images/product_img10.jpg"
                                            alt="product_img10">
                                    </a>
                                    <div class="product_action_box">
                                        <ul class="list_none pr_action_btn">
                                            <li class="add-to-cart"><a href="#"><i class="icon-basket-loaded"></i> Add
                                                    To Cart</a></li>
                                            <li><a href="shop-compare.html" class="popup-ajax"><i
                                                        class="icon-shuffle"></i></a></li>
                                            <li><a href="{{url('/product-quick-view/'.$item->id)}}"
                                                    class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
                                            <li> <button id="{{$item->id}}" onclick="addwish(this.id)"><i class="icon-heart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product_info">
                                    <h6 class="product_title"><a href="shop-product-detail.html">Red &amp; Black check
                                            shirt</a></h6>
                                    <div class="product_price">
                                        <span class="price">$55.00</span>
                                        <del>$95.00</del>
                                        <div class="on_sale">
                                            <span>25% Off</span>
                                        </div>
                                    </div>
                                    <div class="rating_wrap">
                                        <div class="rating">
                                            <div class="product_rate" style="width:68%"></div>
                                        </div>
                                        <span class="rating_num">(15)</span>
                                    </div>
                                    <div class="pr_desc">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit
                                            massa enim. Nullam id varius nunc id varius nunc.</p>
                                    </div>
                                    <div class="pr_switch_wrap">
                                        <div class="product_color_switch">
                                            <span class="active" data-color="#E8ADA9"></span>
                                            <span data-color="#C38F77"></span>
                                            <span data-color="#BE7154"></span>
                                        </div>
                                    </div>
                                    <div class="list_product_action_box">
                                        <ul class="list_none pr_action_btn">
                                            <li class="add-to-cart"><a href="#"><i class="icon-basket-loaded"></i> Add
                                                    To Cart</a></li>
                                            <li><a href="shop-compare.html" class="popup-ajax"><i
                                                        class="icon-shuffle"></i></a></li>
                                            <li><a href="{{url('/product-quick-view/'.$item->id)}}"
                                                    class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
                                            <li> <button id="{{$item->id}}" onclick="addwish(this.id)"><i class="icon-heart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-6 grid_item">
                            <div class="product">
                                <div class="product_img">
                                    <a href="shop-product-detail.html">
                                        <img src="{{ asset('templateassets') }}/assets/images/product_img11.jpg"
                                            alt="product_img11">
                                    </a>
                                    <div class="product_action_box">
                                        <ul class="list_none pr_action_btn">
                                            <li class="add-to-cart"><a href="#"><i class="icon-basket-loaded"></i> Add
                                                    To Cart</a></li>
                                            <li><a href="shop-compare.html" class="popup-ajax"><i
                                                        class="icon-shuffle"></i></a></li>
                                            <li><a href="{{url('/product-quick-view/'.$item->id)}}"
                                                    class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
                                            <li> <button id="{{$item->id}}" onclick="addwish(this.id)"><i class="icon-heart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product_info">
                                    <h6 class="product_title"><a href="shop-product-detail.html">Black dress for
                                            woman</a></h6>
                                    <div class="product_price">
                                        <span class="price">$68.00</span>
                                        <del>$99.00</del>
                                        <div class="on_sale">
                                            <span>20% Off</span>
                                        </div>
                                    </div>
                                    <div class="rating_wrap">
                                        <div class="rating">
                                            <div class="product_rate" style="width:87%"></div>
                                        </div>
                                        <span class="rating_num">(25)</span>
                                    </div>
                                    <div class="pr_desc">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit
                                            massa enim. Nullam id varius nunc id varius nunc.</p>
                                    </div>
                                    <div class="pr_switch_wrap">
                                        <div class="product_color_switch">
                                            <span class="active" data-color="#090909"></span>
                                            <span data-color="#AC644D"></span>
                                        </div>
                                    </div>
                                    <div class="list_product_action_box">
                                        <ul class="list_none pr_action_btn">
                                            <li class="add-to-cart"><a href="#"><i class="icon-basket-loaded"></i> Add
                                                    To Cart</a></li>
                                            <li><a href="shop-compare.html" class="popup-ajax"><i
                                                        class="icon-shuffle"></i></a></li>
                                            <li><a href="{{url('/product-quick-view/'.$item->id)}}"
                                                    class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
                                            <li> <button id="{{$item->id}}" onclick="addwish(this.id)"><i class="icon-heart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-6 grid_item">
                            <div class="product">
                                <span class="pr_flash bg-success">Sale</span>
                                <div class="product_img">
                                    <a href="shop-product-detail.html">
                                        <img src="{{ asset('templateassets') }}/assets/images/product_img12.jpg"
                                            alt="product_img7">
                                    </a>
                                    <div class="product_action_box">
                                        <ul class="list_none pr_action_btn">
                                            <li class="add-to-cart"><a href="#"><i class="icon-basket-loaded"></i> Add
                                                    To Cart</a></li>
                                            <li><a href="shop-compare.html" class="popup-ajax"><i
                                                        class="icon-shuffle"></i></a></li>
                                            <li><a href="{{url('/product-quick-view/'.$item->id)}}"
                                                    class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
                                            <li> <button id="{{$item->id}}" onclick="addwish(this.id)"><i class="icon-heart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product_info">
                                    <h6 class="product_title"><a href="shop-product-detail.html">Black T-shirt for
                                            woman</a></h6>
                                    <div class="product_price">
                                        <span class="price">$68.00</span>
                                        <del>$99.00</del>
                                        <div class="on_sale">
                                            <span>20% Off</span>
                                        </div>
                                    </div>
                                    <div class="rating_wrap">
                                        <div class="rating">
                                            <div class="product_rate" style="width:87%"></div>
                                        </div>
                                        <span class="rating_num">(25)</span>
                                    </div>
                                    <div class="pr_desc">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit
                                            massa enim. Nullam id varius nunc id varius nunc.</p>
                                    </div>
                                    <div class="pr_switch_wrap">
                                        <div class="product_color_switch">
                                            <span class="active" data-color="#333333"></span>
                                            <span data-color="#7C502F"></span>
                                            <span data-color="#2F366C"></span>
                                        </div>
                                    </div>
                                    <div class="list_product_action_box">
                                        <ul class="list_none pr_action_btn">
                                            <li class="add-to-cart"><a href="#"><i class="icon-basket-loaded"></i> Add
                                                    To Cart</a></li>
                                            <li><a href="shop-compare.html" class="popup-ajax"><i
                                                        class="icon-shuffle"></i></a></li>
                                            <li><a href="{{url('/product-quick-view/'.$item->id)}}"
                                                    class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
                                            <li> <button id="{{$item->id}}" onclick="addwish(this.id)"><i class="icon-heart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-6 grid_item">
                            <div class="product">
                                <div class="product_img">
                                    <a href="shop-product-detail.html">
                                        <img src="{{ asset('templateassets') }}/assets/images/product_img13.jpg"
                                            alt="product_img13">
                                    </a>
                                    <div class="product_action_box">
                                        <ul class="list_none pr_action_btn">
                                            <li class="add-to-cart"><a href="#"><i class="icon-basket-loaded"></i> Add
                                                    To Cart</a></li>
                                            <li><a href="shop-compare.html" class="popup-ajax"><i
                                                        class="icon-shuffle"></i></a></li>
                                            <li><a href="{{url('/product-quick-view/'.$item->id)}}"
                                                    class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
                                            <li> <button id="{{$item->id}}" onclick="addwish(this.id)"><i class="icon-heart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product_info">
                                    <h6 class="product_title"><a href="shop-product-detail.html">Pink Dress For
                                            Woman</a></h6>
                                    <div class="product_price">
                                        <span class="price">$65.00</span>
                                        <del>$80.00</del>
                                        <div class="on_sale">
                                            <span>30% Off</span>
                                        </div>
                                    </div>
                                    <div class="rating_wrap">
                                        <div class="rating">
                                            <div class="product_rate" style="width:68%"></div>
                                        </div>
                                        <span class="rating_num">(28)</span>
                                    </div>
                                    <div class="pr_desc">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit
                                            massa enim. Nullam id varius nunc id varius nunc.</p>
                                    </div>
                                    <div class="pr_switch_wrap">
                                        <div class="product_color_switch">
                                            <span class="active" data-color="#EEBAAC"></span>
                                            <span data-color="#2F100F"></span>
                                        </div>
                                    </div>
                                    <div class="list_product_action_box">
                                        <ul class="list_none pr_action_btn">
                                            <li class="add-to-cart"><a href="#"><i class="icon-basket-loaded"></i> Add
                                                    To Cart</a></li>
                                            <li><a href="shop-compare.html" class="popup-ajax"><i
                                                        class="icon-shuffle"></i></a></li>
                                            <li><a href="{{url('/product-quick-view/'.$item->id)}}"
                                                    class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
                                            <li> <button id="{{$item->id}}" onclick="addwish(this.id)"><i class="icon-heart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-6 grid_item">
                            <div class="product">
                                <div class="product_img">
                                    <a href="shop-product-detail.html">
                                        <img src="{{ asset('templateassets') }}/assets/images/product_img14.jpg"
                                            alt="product_img14">
                                    </a>
                                    <div class="product_action_box">
                                        <ul class="list_none pr_action_btn">
                                            <li class="add-to-cart"><a href="#"><i class="icon-basket-loaded"></i> Add
                                                    To Cart</a></li>
                                            <li><a href="shop-compare.html" class="popup-ajax"><i
                                                        class="icon-shuffle"></i></a></li>
                                            <li><a href="{{url('/product-quick-view/'.$item->id)}}"
                                                    class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
                                            <li> <button id="{{$item->id}}" onclick="addwish(this.id)"><i class="icon-heart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product_info">
                                    <h6 class="product_title"><a href="shop-product-detail.html">White shirt for man</a>
                                    </h6>
                                    <div class="product_price">
                                        <span class="price">$55.00</span>
                                        <del>$60.00</del>
                                    </div>
                                    <div class="rating_wrap">
                                        <div class="rating">
                                            <div class="product_rate" style="width:68%"></div>
                                        </div>
                                        <span class="rating_num">(15)</span>
                                    </div>
                                    <div class="pr_desc">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit
                                            massa enim. Nullam id varius nunc id varius nunc.</p>
                                    </div>
                                    <div class="pr_switch_wrap">
                                        <div class="product_color_switch">
                                            <span class="active" data-color="#EAE9ED"></span>
                                            <span data-color="#050505"></span>
                                            <span data-color="#BE7154"></span>
                                        </div>
                                    </div>
                                    <div class="list_product_action_box">
                                        <ul class="list_none pr_action_btn">
                                            <li class="add-to-cart"><a href="#"><i class="icon-basket-loaded"></i> Add
                                                    To Cart</a></li>
                                            <li><a href="shop-compare.html" class="popup-ajax"><i
                                                        class="icon-shuffle"></i></a></li>
                                            <li><a href="{{url('/product-quick-view/'.$item->id)}}"
                                                    class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
                                            <li> <button id="{{$item->id}}" onclick="addwish(this.id)"><i class="icon-heart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-6 grid_item">
                            <div class="product">
                                <div class="product_img">
                                    <a href="shop-product-detail.html">
                                        <img src="{{ asset('templateassets') }}/assets/images/product_img15.jpg"
                                            alt="product_img14">
                                    </a>
                                    <div class="product_action_box">
                                        <ul class="list_none pr_action_btn">
                                            <li class="add-to-cart"><a href="#"><i class="icon-basket-loaded"></i> Add
                                                    To Cart</a></li>
                                            <li><a href="shop-compare.html" class="popup-ajax"><i
                                                        class="icon-shuffle"></i></a></li>
                                            <li><a href="{{url('/product-quick-view/'.$item->id)}}"
                                                    class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
                                            <li> <button id="{{$item->id}}" onclick="addwish(this.id)"><i class="icon-heart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product_info">
                                    <h6 class="product_title"><a href="shop-product-detail.html">Pink Dress for Baby
                                            Kids</a></h6>
                                    <div class="product_price">
                                        <span class="price">$55.00</span>
                                        <del>$60.00</del>
                                    </div>
                                    <div class="rating_wrap">
                                        <div class="rating">
                                            <div class="product_rate" style="width:68%"></div>
                                        </div>
                                        <span class="rating_num">(15)</span>
                                    </div>
                                    <div class="pr_desc">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit
                                            massa enim. Nullam id varius nunc id varius nunc.</p>
                                    </div>
                                    <div class="pr_switch_wrap">
                                        <div class="product_color_switch">
                                            <span class="active" data-color="#DC8998"></span>
                                            <span data-color="#F0E9EF"></span>
                                        </div>
                                    </div>
                                    <div class="list_product_action_box">
                                        <ul class="list_none pr_action_btn">
                                            <li class="add-to-cart"><a href="#"><i class="icon-basket-loaded"></i> Add
                                                    To Cart</a></li>
                                            <li><a href="shop-compare.html" class="popup-ajax"><i
                                                        class="icon-shuffle"></i></a></li>
                                            <li><a href="{{url('/product-quick-view/'.$item->id)}}"
                                                    class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
                                            <li> <button id="{{$item->id}}" onclick="addwish(this.id)"><i class="icon-heart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-6 grid_item">
                            <div class="product">
                                <div class="product_img">
                                    <a href="shop-product-detail.html">
                                        <img src="{{ asset('templateassets') }}/assets/images/product_img9.jpg"
                                            alt="product_img12">
                                    </a>
                                    <div class="product_action_box">
                                        <ul class="list_none pr_action_btn">
                                            <li class="add-to-cart"><a href="#"><i class="icon-basket-loaded"></i> Add
                                                    To Cart</a></li>
                                            <li><a href="shop-compare.html" class="popup-ajax"><i
                                                        class="icon-shuffle"></i></a></li>
                                            <li><a href="{{url('/product-quick-view/'.$item->id)}}"
                                                    class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
                                            <li> <button id="{{$item->id}}" onclick="addwish(this.id)"><i class="icon-heart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product_info">
                                    <h6 class="product_title"><a href="shop-product-detail.html">White T-shirt for
                                            woman</a></h6>
                                    <div class="product_price">
                                        <span class="price">$69.00</span>
                                        <del>$89.00</del>
                                    </div>
                                    <div class="rating_wrap">
                                        <div class="rating">
                                            <div class="product_rate" style="width:68%"></div>
                                        </div>
                                        <span class="rating_num">(22)</span>
                                    </div>
                                    <div class="pr_desc">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit
                                            massa enim. Nullam id varius nunc id varius nunc.</p>
                                    </div>
                                    <div class="pr_switch_wrap">
                                        <div class="product_color_switch">
                                            <span class="active" data-color="#1B1B25"></span>
                                            <span data-color="#444653"></span>
                                        </div>
                                    </div>
                                    <div class="list_product_action_box">
                                        <ul class="list_none pr_action_btn">
                                            <li class="add-to-cart"><a href="#"><i class="icon-basket-loaded"></i> Add
                                                    To Cart</a></li>
                                            <li><a href="shop-compare.html" class="popup-ajax"><i
                                                        class="icon-shuffle"></i></a></li>
                                            <li><a href="{{url('/product-quick-view/'.$item->id)}}"
                                                    class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
                                            <li> <button id="{{$item->id}}" onclick="addwish(this.id)"><i class="icon-heart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END SECTION SHOP -->


    {{-- end --}}
















    <!-- START SECTION TESTIMONIAL -->



    {{-- <div class="section bg_redon">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="heading_s1 text-center">
                        <h2>Our Client Say!</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <div class="testimonial_wrap testimonial_style1 carousel_slider owl-carousel owl-theme nav_style2"
                        data-nav="true" data-dots="false" data-center="true" data-loop="true" data-autoplay="true"
                        data-items='1'>
                        <div class="testimonial_box">
                            <div class="testimonial_desc">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aliquam amet animi
                                    blanditiis consequatur debitis dicta distinctio, enim error eum iste libero modi nam
                                    natus perferendis possimus quasi sint sit tempora voluptatem.</p>
                            </div>
                            <div class="author_wrap">
                                <div class="author_img">
                                    <img src="{{ asset('templateassets') }}/assets/images/user_img1.jpg"
                                        alt="user_img1" />
                                </div>
                                <div class="author_name">
                                    <h6>Lissa Castro</h6>
                                    <span>Designer</span>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial_box">
                            <div class="testimonial_desc">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aliquam amet animi
                                    blanditiis consequatur debitis dicta distinctio, enim error eum iste libero modi nam
                                    natus perferendis possimus quasi sint sit tempora voluptatem.</p>
                            </div>
                            <div class="author_wrap">
                                <div class="author_img">
                                    <img src="{{ asset('templateassets') }}/assets/images/user_img2.jpg"
                                        alt="user_img2" />
                                </div>
                                <div class="author_name">
                                    <h6>Alden Smith</h6>
                                    <span>Designer</span>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial_box">
                            <div class="testimonial_desc">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aliquam amet animi
                                    blanditiis consequatur debitis dicta distinctio, enim error eum iste libero modi nam
                                    natus perferendis possimus quasi sint sit tempora voluptatem.</p>
                            </div>
                            <div class="author_wrap">
                                <div class="author_img">
                                    <img src="{{ asset('templateassets') }}/assets/images/user_img3.jpg"
                                        alt="user_img3" />
                                </div>
                                <div class="author_name">
                                    <h6>Daisy Lana</h6>
                                    <span>Designer</span>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial_box">
                            <div class="testimonial_desc">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aliquam amet animi
                                    blanditiis consequatur debitis dicta distinctio, enim error eum iste libero modi nam
                                    natus perferendis possimus quasi sint sit tempora voluptatem.</p>
                            </div>
                            <div class="author_wrap">
                                <div class="author_img">
                                    <img src="{{ asset('templateassets') }}/assets/images/user_img4.jpg"
                                        alt="user_img4" />
                                </div>
                                <div class="author_name">
                                    <h6>John Becker</h6>
                                    <span>Designer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}



    <!-- END SECTION TESTIMONIAL -->

    <!-- START SECTION BLOG -->


    {{-- letes news --}}

    {{-- <div class="section pb_20">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8">
                    <div class="heading_s1 text-center">
                        <h2>Latest News</h2>
                    </div>
                    <p class="leads text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                        tempor incididunt ut labore.</p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="blog_post blog_style2 box_shadow1">
                        <div class="blog_img">
                            <a href="blog-single.html">
                                <img src="{{ asset('templateassets') }}/assets/images/el_blog_img1.jpg"
                                    alt="el_blog_img1">
                            </a>
                        </div>
                        <div class="blog_content bg-white">
                            <div class="blog_text">
                                <h5 class="blog_title"><a href="blog-single.html">But I must explain to you how all this
                                        mistaken idea</a></h5>
                                <ul class="list_none blog_meta">
                                    <li><a href="#"><i class="ti-calendar"></i> April 14, 2018</a></li>
                                    <li><a href="#"><i class="ti-comments"></i> 2 Comment</a></li>
                                </ul>
                                <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't
                                    anything hidden in the text</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="blog_post blog_style2 box_shadow1">
                        <div class="blog_img">
                            <a href="blog-single.html">
                                <img src="{{ asset('templateassets') }}/assets/images/el_blog_img2.jpg"
                                    alt="el_blog_img2">
                            </a>
                        </div>
                        <div class="blog_content bg-white">
                            <div class="blog_text">
                                <h5 class="blog_title"><a href="blog-single.html">On the other hand we provide denounce
                                        with righteous</a></h5>
                                <ul class="list_none blog_meta">
                                    <li><a href="#"><i class="ti-calendar"></i> April 14, 2018</a></li>
                                    <li><a href="#"><i class="ti-comments"></i> 2 Comment</a></li>
                                </ul>
                                <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't
                                    anything hidden in the text</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="blog_post blog_style2 box_shadow1">
                        <div class="blog_img">
                            <a href="blog-single.html">
                                <img src="{{ asset('templateassets') }}/assets/images/el_blog_img3.jpg"
                                    alt="el_blog_img2">
                            </a>
                        </div>
                        <div class="blog_content bg-white">
                            <div class="blog_text">
                                <h5 class="blog_title"><a href="blog-single.html">Why is a ticket to Lagos so
                                        expensive?</a></h5>
                                <ul class="list_none blog_meta">
                                    <li><a href="#"><i class="ti-calendar"></i> April 14, 2018</a></li>
                                    <li><a href="#"><i class="ti-comments"></i> 2 Comment</a></li>
                                </ul>
                                <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't
                                    anything hidden in the text</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}


    <!-- END SECTION BLOG -->

    <!-- START SECTION CLIENT LOGO -->


    {{-- <div class="section small_pt">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="client_logo carousel_slider owl-carousel owl-theme" data-dots="false" data-margin="30"
                        data-loop="true" data-autoplay="true"
                        data-responsive='{"0":{"items": "2"}, "480":{"items": "3"}, "767":{"items": "4"}, "991":{"items": "5"}}'>
                        <div class="item">
                            <div class="cl_logo">
                                <img src="{{ asset('templateassets') }}/assets/images/cl_logo1.png" alt="cl_logo" />
                            </div>
                        </div>
                        <div class="item">
                            <div class="cl_logo">
                                <img src="{{ asset('templateassets') }}/assets/images/cl_logo2.png" alt="cl_logo" />
                            </div>
                        </div>
                        <div class="item">
                            <div class="cl_logo">
                                <img src="{{ asset('templateassets') }}/assets/images/cl_logo3.png" alt="cl_logo" />
                            </div>
                        </div>
                        <div class="item">
                            <div class="cl_logo">
                                <img src="{{ asset('templateassets') }}/assets/images/cl_logo4.png" alt="cl_logo" />
                            </div>
                        </div>
                        <div class="item">
                            <div class="cl_logo">
                                <img src="{{ asset('templateassets') }}/assets/images/cl_logo5.png" alt="cl_logo" />
                            </div>
                        </div>
                        <div class="item">
                            <div class="cl_logo">
                                <img src="{{ asset('templateassets') }}/assets/images/cl_logo6.png" alt="cl_logo" />
                            </div>
                        </div>
                        <div class="item">
                            <div class="cl_logo">
                                <img src="{{ asset('templateassets') }}/assets/images/cl_logo7.png" alt="cl_logo" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- END SECTION CLIENT LOGO -->

    <!-- START SECTION SUBSCRIBE NEWSLETTER -->
    <div class="section bg_default small_pt small_pb">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="newsletter_text text_white">
                        <h3>Join Our Newsletter Now</h3>
                        <p> Register now to get updates on promotions. </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="newsletter_form2">
                            <form>
                            <input type="email" required="" class="form-control rounded-0"
                               id="newsemail" name="newsletter" required="required"
                                placeholder="Enter your email address">
                                 @error('newsletter')
                               <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            <button type="button" onclick="addnewsletter()" class="btn btn-dark rounded-0" name="submit"
                                value="Submit">Subscribe</button>
                       </form> 
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- START SECTION SUBSCRIBE NEWSLETTER -->

</div>
<!-- END MAIN CONTENT -->

<div class="modal fade" id="cartmodal" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModallevel" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModallevel">Modal title</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <div class="card">
                                                    <img src="" id="pimage" name="image"
                                                        style="width:235px;height: 200px;">
                                                    <div class="card-body">
                                                        <li class="list-group-item">Product_Title::<span
                                                                id="ptname"></span></li>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <ul class="list-group">
                                                <li class="list-group-item">Product Code::<span id="pcname"></span></li>
                                                <li class="list-group-item">Product Name::<span id="pname"></span></li>
                                                <li class="list-group-item">Category Name::<span id="cname"></span></li>
                                                <li class="list-group-item">Brand name::<span id="bname"></span></li>
                                                <li class="list-group-item">Stock::<span class="badge badge-success"
                                                        id="stock"></span></li>
                                            </ul>
                                        </div>

                                        <div class="col-sm-4">

                                            <input type="hidden" id="product_id" name="product_id">
                                            <div class="form-group">
                                                <label for="exampleInputColor">Color </label>
                                                <select class="form-control input-lg" id="color" name="color">
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputColor">Size </label>
                                                <select class="form-control input-lg" id="size" name="size">
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputQuantity">Quantity </label>
                                                <input type="number" name="qty" id="quantity" class="form-control"
                                                    value="1" pattern="[0-9]">
                                            </div>
                                            <br>
                                            <button class="bth btn-primary btn-sm" id="addtocarttest" type="submit"
                                                onclick="addtocart()">Add to card</button>

                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div> 











               <script type="text/javascript">
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
</script>


<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script type="text/javascript">

    $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
    
    function productview(id){
      

        $.ajax({
          
            type:"GET",
            datatype:"json",
            url:"/productview/"+id,
            success:function(data){

                 $("#pcname").text(data.product.product_code);
                 $("#ptname").text(data.product.product_name);
                $("#pname").text(data.product.product_name);
                $("#pimage").attr('src','/product_images/'+data.product.image_one);
                $("#cname").text(data.product.category.category_name);
                $("#bname").text(data.product.brand.brand_name);
                $("#product_id").val(data.product.id);
               $("#stock").text(data.product.product_quantity);


               if( data.product.product_quantity < $('#quantity').val() ){
                   $("#test").text(data.product.brand.brand_name);  
               }
               else{
                $("#test").text(data.product.product_quantity);
               }


              
                $("#quantity").focus(function(){
                $(this).blur(); 
                    });







                var d=$('select[name="color"]').empty();
                $.each(data.color,function(key,value){
                    $('select[name="color"]').append('<option value="'+value+'">'+value+'</option>');
                });
                var e=$('select[name="size"]').empty();
                $.each(data.size ,function(key,value){
                $('select[name="size"]').append('<option value ="'+value+'">'+value+'</option>');

            });
 
  
            }
            
        })

    }
</script>

 <script>
    @if(Session::has('message'))
                var type="{{Session::get('alert-type','success')}}"
                switch(type){
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
    function addtocart(){
       $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

       var id=$('#product_id').val();
       var color=$('#color').val();
       var size=$('#size').val();
       var quantity=$('#quantity').val();


       $.ajax({
        type:'POST',
        datatype:'json',
        data:{product_id:id,color:color,size:size,quantity:quantity},
        url:"/addtocart",
        success:function(data){
            console.log(data)
            minicart();
           
            $("#cartmodal").modal('hide')

                const Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 3000,
                    timerProgressBar: true,
                    didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                    }
                    })
                    if ($.isEmptyObject(data.error)){
        Toast.fire({
        icon: 'success',
        title: data.success
        })
        $('#applycouponfield').hide();
        }
        else{
        Toast.fire({
        icon: 'error',
        title: data.error
        })
        }

        }
       })
    }




function addwish(id){
   
    $.ajax({
        type:"GET",
        datatype:"json",
        url:"/addwishlistt/"+id,
        success:function(data){
            miniwishlist();
              const Toast = Swal.mixin({
                      toast: true,
                      position: 'top-end',
                      showConfirmButton: false,
                      timer: 3000,
                      timerProgressBar: true,
                      didOpen: (toast) => {
                        toast.addEventListener('mouseenter', Swal.stopTimer)
                        toast.addEventListener('mouseleave', Swal.resumeTimer)
                      }
                    })
                    if ($.isEmptyObject(data.error)){
                         Toast.fire({
                      icon: 'success',
                      title: data.success
                    })

                    }
                    else{
                        Toast.fire({
                          icon: 'error',
                          title: data.error
                        })
                    }

        }
    })



}

function addnewsletter(){
 
     $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
     let newsletterr= $('#newsemail').val();

     $.ajax({
        type:'POST',
        datatype:'json',
        data:{newsletter:newsletterr},
        url:'/add/newsletter',
        success:function(data){
            $('#newsemail').val("")
              const Toast = Swal.mixin({
                      toast: true,
                      position: 'top-end',
                      showConfirmButton: false,
                      timer: 3000,
                      timerProgressBar: true,
                      didOpen: (toast) => {
                        toast.addEventListener('mouseenter', Swal.stopTimer)
                        toast.addEventListener('mouseleave', Swal.resumeTimer)
                      }
                    })
                    if ($.isEmptyObject(data.error)){
                         Toast.fire({
                      icon: 'success',
                      title: data.success
                    })

                    }
                    else{
                        Toast.fire({
                          icon: 'error',
                          title: data.error
                        })
                    }
        }
        })
}

</script>

@endsection