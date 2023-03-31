@extends('layouts.shopwisemaster')
@section('content')
    <!-- START SECTION BREADCRUMB -->
    <div class="breadcrumb_section bg_gray page-title-mini">
        <div class="container">
            <!-- STRART CONTAINER -->
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="page-title">
                        <h1>Product Detail's <i class="fa-solid fa-circle-info"></i> <i class="fa-solid fa-circle-info"></i>
                        </h1>
                    </div>
                </div>
                <div class="col-md-6">
                    <ol class="breadcrumb justify-content-md-end">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Pages</a></li>
                        <li class="breadcrumb-item active">Product Detail</li>
                    </ol>
                </div>
            </div>
        </div><!-- END CONTAINER-->
    </div>
    <!-- END SECTION BREADCRUMB -->

    <!-- START MAIN CONTENT -->
    <div class="main_content">

        <!-- START SECTION SHOP -->
        <div class="section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 mb-4 mb-md-0">
                        <div class="product-image">
                            <div class="product_img_box">

                                <img id="product_img"
                                    src='{{ asset('product_images/' . @$product->attributes[0]['product_image']) }}'
                                    data-zoom-image="{{ asset('product_images/' . @$product->attributes[0]['product_image']) }}"
                                    alt="product_img1" />
                                <a href="#" class="product_img_zoom" title="Zoom">
                                    <span class="linearicons-zoom-in"></span>
                                </a>
                            </div>
                            <div id="pr_item_gallery" class="product_gallery_item slick_slider" data-slides-to-show="4"
                                data-slides-to-scroll="1" data-infinite="false">
                                @foreach ($product->attributes as $key => $file)
                                    <div class="item">
                                        <a href="{{ $key }}" class="product_gallery_item active" onclick="selectAttribute({{$file->id}})"
                                            data-image="{{ asset('product_images/' . @$file->product_image) }}"
                                            data-zoom-image="{{ asset('product_images/' . @$file->product_image) }}">
                                            <img src="{{ asset('product_images/' . @$file->product_image) }}"
                                                alt="product_small_img1" />
                                        </a>
                                         <input type="hidden" value="{{$file->id}}" id="attribute_id">
                                          <label class="form-check-label"
                                                    for="inlineRadio1">{{ $file->product_color }}</label>
                                    </div>
                                    {{-- <a href="{{$key}}" class="product_gallery_item active" data-image="{{ asset('product_images/'.@$file->product_image) }}" data-zoom-image="{{ asset('product_images/'.@$file->product_image) }}">
                         <img src="{{ asset('product_images/'.@$file->product_image) }}" alt="product_small_img1"/>
                        </a> --}}
                                @endforeach

                                <!--  <div class="item">
                                                                                                                                                                                                                    <a href="#" class="product_gallery_item" data-image="{{ asset('product_images/' . @$product->image_two) }}" data-zoom-image="{{ asset('product_images/' . @$product->image_two) }}">
                                                                                                                                                                                                                        <img src="{{ asset('product_images/' . @$product->image_two) }}" alt="product_small_img2" />
                                                                                                                                                                                                                    </a>
                                                                                                                                                                                                                </div> -->

                            </div>
                        </div>
                    </div>









                    <div class="col-lg-6 col-md-6">
                        <div class="pr_detail">
                            <div class="product_description">
                                <h4 class="product_title"><a href="#">{{ $product->product_name }}</a></h4>
                                <div class="product_price">
                                    @php
                                        $amout = $product->selling_price - $product->discount_price;
                                    @endphp
                                    <span class="price"> TK{{ $product->discount_price }}</span>
                                    <del> TK {{ $product->selling_price }}</del>
                                    <div class="on_sale">
                                        <span>
                                            {{ round(($amout / $product->selling_price) * 100) }}% Off
                                        </span>
                                    </div>
                                </div>
                                <div class="rating_wrap">
                                    <div class="rating">
                                        <div class="product_rate" style="width:90%"></div>
                                    </div>
                                    <span class="rating_num"></span>
                                </div>
                                <div class="pr_desc">
                                    <!-- <p>{{ $product->product_details }}</p> -->
                                    <p>{!! $product->product_details !!}</p>


                                </div>
                                <div class="product_sort_info">
                                    <ul>
                                        <li><i class="linearicons-shield-check"></i> Offer is valid only for happyhealbd.com
                                        </li>
                                        <li><i class="linearicons-sync"></i> Good Quality</li>
                                        <li><i class="linearicons-bag-dollar"></i> Cash on Delivery available</li>
                                    </ul>
                                    <b class="text-black">
                                        <h4>এখান থেকে জুতার রঙ এবং আকার নির্বাচন করুন</h4>
                                    </b>
                                </div>
                                <div class="pr_switch_wrap">
                                    <span class="" id="size_display">Size:</span>
                                    <div class="">
                                        @php
                                            $i = 0;
                                        @endphp

                                        @foreach ($product_size as $key => $size)
                                            <div class="form-check form-check-inline">
                                                <input style="border: 1px solid red;" class="form-check-input"
                                                    type="radio" name="size" id="size"
                                                    value="{{ $size }}" {{ $key == 0 ? 'checked' : '' }}>
                                                <label class="form-check-label"
                                                    for="inlineRadio1">{{ $size }}</label>
                                            </div>
                                        @endforeach

                                    </div>

                                </div>
                                <div class="">

                            <span class="" >Color: </span>
                            <div class="product_color_switch">
                                <div id="pr_item_gallery" class="product_gallery_item slick_slider" data-slides-to-show="4"
                                data-slides-to-scroll="1" data-infinite="false">
                                @foreach ($product->attributes as $key => $item)
                                    <div class="item">
                                        <a href="{{ $key }}" class="product_gallery_item active" onclick="selectAttribute({{$item->id}})"
                                        
                                            data-image="{{ asset('product_images/' . @$item->product_image) }}"
                                            data-zoom-image="{{ asset('product_images/' . @$item->product_image) }}">
                                            
                                            <img src="{{ asset('product_images/' . @$item->product_image) }}"
                                                alt="product_small_img1" 
                                                />  
                                                
                                        </a>
                                        <input type="hidden" value="{{$item->id}}" id="attribute_id">
                                         {{-- <input class="form-check-input" type="radio" name="color" id="color"
                                                    value="{{ $item->product_color }}" {{ $key == 0 ? 'checked' : '' }}>  --}}
                                                <label class="form-check-label"
                                                    for="inlineRadio1">{{ $item->product_color }}</label>
                                    </div>
                                  
                                @endforeach

                                <!--  <div class="item">
                                                                                                                                                                                                                    <a href="#" class="product_gallery_item" data-image="{{ asset('product_images/' . @$product->image_two) }}" data-zoom-image="{{ asset('product_images/' . @$product->image_two) }}">
                                                                                                                                                                                                                        <img src="{{ asset('product_images/' . @$product->image_two) }}" alt="product_small_img2" />
                                                                                                                                                                                                                    </a>
                                                                                                                                                                                                                </div> -->

                            </div>




{{--                                        
                                            <div class="form-check form-check-inline">

                                                <img src="{{ asset('product_images/' . @$value->product_image) }}" width="40px;"
                                                alt="product_small_img1" />
                                                <input class="form-check-input" type="radio" name="color" id="color"
                                                    value="{{ $value->product_color }}" {{ $key == 0 ? 'checked' : '' }}>
                                                <label class="form-check-label"
                                                    for="inlineRadio1">{{ $value->product_color }}</label>
                                            </div> --}}
                                        {{-- @endforeach --}}
                                    </div>
                                </div>
                            </div>
                            <hr />
                            <div class="cart_extra">
                                <div class="cart-product-quantity">
                                    <div class="quantity">

                                        <input type="hidden" id="product_id" value="{{ $product->id }}"
                                            name="product_id">


                                        <input type="button" value="-" class="minus">
                                        <input type="text" id="quantity" name="qty" value="1"
                                            title="Qty" class="qty" size="4" pattern="[0-9]">
                                        <input type="button" value="+" class="plus">
                                    </div>
                                </div>
                                <div class="cart_btn">
                                    <button id="addtocarttest" onclick="addtocart()"
                                        class="btn btn-fill-out btn-addtocart " type="button">
                                        <i class="icon-basket-loaded"></i> Add to cart
                                    </button>
                                    <!-- <button   id="{{ $product->id }} "  class="btn btn-fill-out btn-addtocart"
                                                                                                                                                                                                                    data-bs-toggle="modal" data-bs-target="#cartmodal" onclick="productview(this.id)" type="button"><i class="icon-basket-loaded"></i> Add to cart</button> -->
                                    <a class="add_compare" href="#"><i class="icon-shuffle"></i></a>

                                    <!-- <a class="add_wishlist" href="#"><i class="icon-heart"></i></a> -->

                                    <a class="add_wishlist" id="{{ $product->id }}" onclick="addwish(this.id)"><i
                                            class="icon-heart"></i></a>


                                </div>
                            </div>
                            <hr />
                            <ul class="product-meta">

                                <li>Category: <a href="#">Women Shoes</a></li>
                                <li>Tags: <a href="#" rel="tag">Happy Heels</a>, <a href="#"
                                        rel="tag">Women Shoes</a> </li>
                            </ul>

                            <div class="product_share">
                                <span>Social-Media:</span>
                                <ul class="social_icons">
                                    <li><a href="https://www.facebook.com/happyheels2020"><i
                                                class="ion-social-facebook"></i></a></li>


                                    <li><a href="https://www.instagram.com/happyheels2020/"><i
                                                class="ion-social-instagram-outline"></i></a></li>
                                </ul>
                            </div>



                            <div class="card mb-3">
                                <img src="{{ asset('templateassets/assets/images/women/size2.jpg') }}"
                                    class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Size Measurement</h5>
                                    <p class="card-text">This will help you to get idea about your foot size. Be sure about
                                        your foot size and get best product from us we will love to give you our best <i
                                            class="fa-solid fa-face-smile"></i> <i class="fa-solid fa-face-smile"></i> <i
                                            class="fa-sharp fa-solid fa-heart"></i> <i
                                            class="fa-sharp fa-solid fa-heart"></i> <i
                                            class="fa-sharp fa-solid fa-heart"></i></p>
                                    <p class="card-text"><small class="text-muted"></small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>














                <div class="row">
                    <div class="col-12">
                        <div class="large_divider clearfix"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="tab-style3">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="Description-tab" data-bs-toggle="tab"
                                        href="#Description" role="tab" aria-controls="Description"
                                        aria-selected="true">Description</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="Additional-info-tab" data-bs-toggle="tab"
                                        href="#Additional-info" role="tab" aria-controls="Additional-info"
                                        aria-selected="false">Additional info</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="Reviews-tab" data-bs-toggle="tab" href="#Reviews"
                                        role="tab" aria-controls="Reviews" aria-selected="false">Reviews
                                        ({{ $product->reviews->count() }})</a>
                                </li>
                            </ul>
                            <div class="tab-content shop_info_tab">
                                <div class="tab-pane fade show active" id="Description" role="tabpanel"
                                    aria-labelledby="Description-tab">
                                    {!! $product->product_details !!}

                                </div>
                                <div class="tab-pane fade" id="Additional-info" role="tabpanel"
                                    aria-labelledby="Additional-info-tab">
                                    <table class="table table-bordered">
                                        <tr>
                                            <td>Stock</td>
                                            <td>5 </td>
                                        </tr>
                                        <tr>
                                            <td>Colors</td>
                                            <td>
                                                @foreach ($product_color as $color)
                                                    {{ $color }},
                                                @endforeach
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Sizes</td>
                                            <td>
                                                @foreach ($product_size as $size)
                                                    {{ $size }},
                                                @endforeach
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Material</td>
                                            <td>Artificial Leather</td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="tab-pane fade" id="Reviews" role="tabpanel" aria-labelledby="Reviews-tab">
                                    <div class="comments">
                                        <h5 class="product_tab_title">{{ $product->reviews->count() }} Review For
                                            <span>{{ $product->product_name }}</span>
                                        </h5>
                                        <ul class="list_none comment_list mt-4">

                                            @forelse ($product->reviews as $review)
                                                <li>
                                                    <div class="comment_img">
                                                        <img src="{{ asset($review->user->image) }}" alt="user1" />
                                                    </div>
                                                    <div class="comment_block">
                                                        <div class="rating_wrap">
                                                            <div class="rating">
                                                                <div class="product_rate" style="width:90%"></div>
                                                            </div>
                                                        </div>
                                                        <p class="customer_meta">
                                                            <span class="review_author">{{ $review->user->name }}</span>
                                                            <span
                                                                class="comment-date">{{ \Carbon\Carbon::parse($review->created_at)->format('D, d M Y') }}</span>
                                                        </p>
                                                        <div class="description">
                                                            <p>{{ $review->comment }}</p>
                                                        </div>
                                                    </div>
                                                </li>

                                            @empty
                                                <li>
                                                    <p>No Review Found..</p>
                                                </li>
                                            @endforelse

                                        </ul>
                                    </div>

                                    @auth
                                        @include('user.inc.review_form');
                                    @endauth
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="small_divider"></div>
                        <div class="divider"></div>
                        <div class="medium_divider"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="heading_s1">
                            <h3>You may also like <i class="fa-solid fa-face-smile"></i> <i
                                    class="fa-solid fa-face-smile"></i> <i class="fa-solid fa-face-smile"></i> </h3>
                        </div>
                        <div class="releted_product_slider carousel_slider owl-carousel owl-theme" data-margin="20"
                            data-responsive='{"0":{"items": "1"}, "481":{"items": "2"}, "768":{"items": "3"}, "1199":{"items": "4"}}'>

                            @foreach ($releted_products as $product)

                                <div class="item">
                                    <div class="product">
                                        <div class="">
                                            <a href="{{url('/singleproduct/'.$product->id)}}">
                                                <img src="{{ asset('product_images/' . @$product->attributes[0]['product_image']) }}"
                                                    alt="product_img1">
                                            </a>
                                            <div class="product_action_box">
                                                <ul class="list_none pr_action_btn">
                                                    {{-- <li class="add-to-cart">
                                                        <a type="button" id="{{ $product->id }} "
                                                            data-bs-toggle="modal" data-bs-target="#cartmodal"
                                                            onclick="productview(this.id)">
                                                            <i class="icon-basket-loaded"></i>
                                                        </a>
                                                    </li>  --}}
                                                    <li>
                                                        <a href="{{ url('/product-quick-view/' . $product->id) }}"
                                                            class="popup-ajax"><i class="icon-magnifier-add"></i></a>
                                                    </li>
                                                    <li>
                                                        <a id="{{ $product->id }}" onclick="addwish(this.id)"><i
                                                                class="icon-heart"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product_info">
                                            <h6 class="product_title"><a
                                                    href="{{ url('/singleproduct/' . $product->id) }}">{{ $product->product_name }}</a>
                                            </h6>
                                            <div class="product_price">
                                                <span class="price"> TK {{ $product->discount_price }}</span>
                                                <del>TK {{ $product->selling_price }}</del>
                                                <div class="on_sale">
                                                    @php
                                                        $amout = $product->selling_price - $product->discount_price;
                                                    @endphp
                                                    <span>{{ round(($amout / $product->selling_price) * 100) }}%</span>
                                                </div>
                                            </div>
                                            <div class="rating_wrap">
                                                <div class="rating">
                                                    <div class="product_rate" style="width:90%"></div>
                                                </div>
                                                <span class="rating_num"></span>
                                            </div>
                                            <div class="pr_desc">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus
                                                    blandit massa enim. Nullam id varius nunc id varius nunc.</p>
                                            </div>
                                            <div class="pr_switch_wrap">
                                                <div class="product_color_switch">
                                                    <span class="active" data-color="#87554B"></span>
                                                    <span data-color="#333333"></span>
                                                    <span data-color="#DA323F"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach



                            <!--   <div class="item">
                                                                                                                                                                                                                <div class="product">
                                                                                                                                                                                                                    <div class="product_img">
                                                                                                                                                                                                                        <a href="shop-product-detail.html">
                                                                                                                                                                                                                            <img src="{{ asset('product_images/' . @$product->image_one) }}" alt="product_img1">
                                                                                                                                                                                                                        </a>
                                                                                                                                                                                                                        <div class="product_action_box">
                                                                                                                                                                                                                            <ul class="list_none pr_action_btn">
                                                                                                                                                                                                                                <li class="add-to-cart"><a href="#"><i class="icon-basket-loaded"></i> Add To Cart</a></li>
                                                                                                                                                                                                                                <li><a href="shop-compare.html"><i class="icon-shuffle"></i></a></li>
                                                                                                                                                                                                                                <li><a href="shop-quick-view.html" class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
                                                                                                                                                                                                                                <li><a href="#"><i class="icon-heart"></i></a></li>
                                                                                                                                                                                                                            </ul>
                                                                                                                                                                                                                        </div>
                                                                                                                                                                                                                    </div>
                                                                                                                                                                                                                    <div class="product_info">
                                                                                                                                                                                                                        <h6 class="product_title"><a href="shop-product-detail.html">Blue Dress For Woman</a></h6>
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
                                                                                                                                                                                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p>
                                                                                                                                                                                                                        </div>
                                                                                                                                                                                                                        <div class="pr_switch_wrap">
                                                                                                                                                                                                                            <div class="product_color_switch">
                                                                                                                                                                                                                                <span class="active" data-color="#87554B"></span>
                                                                                                                                                                                                                                <span data-color="#333333"></span>
                                                                                                                                                                                                                                <span data-color="#DA323F"></span>
                                                                                                                                                                                                                            </div>
                                                                                                                                                                                                                        </div>
                                                                                                                                                                                                                    </div>
                                                                                                                                                                                                                </div>
                                                                                                                                                                                                            </div>

                                                                                                                                                                                                            <div class="item">
                                                                                                                                                                                                                <div class="product">
                                                                                                                                                                                                                    <div class="product_img">
                                                                                                                                                                                                                        <a href="shop-product-detail.html">
                                                                                                                                                                                                                            <img src="{{ asset('product_images/' . @$product->image_one) }}" alt="product_img1">
                                                                                                                                                                                                                        </a>
                                                                                                                                                                                                                        <div class="product_action_box">
                                                                                                                                                                                                                            <ul class="list_none pr_action_btn">
                                                                                                                                                                                                                                <li class="add-to-cart"><a href="#"><i class="icon-basket-loaded"></i> Add To Cart</a></li>
                                                                                                                                                                                                                                <li><a href="shop-compare.html"><i class="icon-shuffle"></i></a></li>
                                                                                                                                                                                                                                <li><a href="shop-quick-view.html" class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
                                                                                                                                                                                                                                <li><a href="#"><i class="icon-heart"></i></a></li>
                                                                                                                                                                                                                            </ul>
                                                                                                                                                                                                                        </div>
                                                                                                                                                                                                                    </div>
                                                                                                                                                                                                                    <div class="product_info">
                                                                                                                                                                                                                        <h6 class="product_title"><a href="shop-product-detail.html">Blue Dress For Woman</a></h6>
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
                                                                                                                                                                                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p>
                                                                                                                                                                                                                        </div>
                                                                                                                                                                                                                        <div class="pr_switch_wrap">
                                                                                                                                                                                                                            <div class="product_color_switch">
                                                                                                                                                                                                                                <span class="active" data-color="#87554B"></span>
                                                                                                                                                                                                                                <span data-color="#333333"></span>
                                                                                                                                                                                                                                <span data-color="#DA323F"></span>
                                                                                                                                                                                                                            </div>
                                                                                                                                                                                                                        </div>
                                                                                                                                                                                                                    </div>
                                                                                                                                                                                                                </div>
                                                                                                                                                                                                            </div>

                                                                                                                                                                                                            <div class="item">
                                                                                                                                                                                                                <div class="product">
                                                                                                                                                                                                                    <div class="product_img">
                                                                                                                                                                                                                        <a href="shop-product-detail.html">
                                                                                                                                                                                                                            <img src="{{ asset('product_images/' . @$product->image_one) }}" alt="product_img1">
                                                                                                                                                                                                                        </a>
                                                                                                                                                                                                                        <div class="product_action_box">
                                                                                                                                                                                                                            <ul class="list_none pr_action_btn">
                                                                                                                                                                                                                                <li class="add-to-cart"><a href="#"><i class="icon-basket-loaded"></i> Add To Cart</a></li>
                                                                                                                                                                                                                                <li><a href="shop-compare.html"><i class="icon-shuffle"></i></a></li>
                                                                                                                                                                                                                                <li><a href="shop-quick-view.html" class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
                                                                                                                                                                                                                                <li><a href="#"><i class="icon-heart"></i></a></li>
                                                                                                                                                                                                                            </ul>
                                                                                                                                                                                                                        </div>
                                                                                                                                                                                                                    </div>
                                                                                                                                                                                                                    <div class="product_info">
                                                                                                                                                                                                                        <h6 class="product_title"><a href="shop-product-detail.html">Blue Dress For Woman</a></h6>
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
                                                                                                                                                                                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p>
                                                                                                                                                                                                                        </div>
                                                                                                                                                                                                                        <div class="pr_switch_wrap">
                                                                                                                                                                                                                            <div class="product_color_switch">
                                                                                                                                                                                                                                <span class="active" data-color="#87554B"></span>
                                                                                                                                                                                                                                <span data-color="#333333"></span>
                                                                                                                                                                                                                                <span data-color="#DA323F"></span>
                                                                                                                                                                                                                            </div>
                                                                                                                                                                                                                        </div>
                                                                                                                                                                                                                    </div>
                                                                                                                                                                                                                </div>
                                                                                                                                                                                                            </div>
                                                                                                                                                                                                           <div class="item">
                                                                                                                                                                                                                <div class="product">
                                                                                                                                                                                                                    <div class="product_img">
                                                                                                                                                                                                                        <a href="shop-product-detail.html">
                                                                                                                                                                                                                            <img src="{{ asset('product_images/' . @$product->image_one) }}" alt="product_img1">
                                                                                                                                                                                                                        </a>
                                                                                                                                                                                                                        <div class="product_action_box">
                                                                                                                                                                                                                            <ul class="list_none pr_action_btn">
                                                                                                                                                                                                                                <li class="add-to-cart"><a href="#"><i class="icon-basket-loaded"></i> Add To Cart</a></li>
                                                                                                                                                                                                                                <li><a href="shop-compare.html"><i class="icon-shuffle"></i></a></li>
                                                                                                                                                                                                                                <li><a href="shop-quick-view.html" class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
                                                                                                                                                                                                                                <li><a href="#"><i class="icon-heart"></i></a></li>
                                                                                                                                                                                                                            </ul>
                                                                                                                                                                                                                        </div>
                                                                                                                                                                                                                    </div>
                                                                                                                                                                                                                    <div class="product_info">
                                                                                                                                                                                                                        <h6 class="product_title"><a href="shop-product-detail.html">Blue Dress For Woman</a></h6>
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
                                                                                                                                                                                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p>
                                                                                                                                                                                                                        </div>
                                                                                                                                                                                                                        <div class="pr_switch_wrap">
                                                                                                                                                                                                                            <div class="product_color_switch">
                                                                                                                                                                                                                                <span class="active" data-color="#87554B"></span>
                                                                                                                                                                                                                                <span data-color="#333333"></span>
                                                                                                                                                                                                                                <span data-color="#DA323F"></span>
                                                                                                                                                                                                                            </div>
                                                                                                                                                                                                                        </div>
                                                                                                                                                                                                                    </div>
                                                                                                                                                                                                                </div>
                                                                                                                                                                                                            </div>
                                                                                                                                                                                                           <div class="item">
                                                                                                                                                                                                                <div class="product">
                                                                                                                                                                                                                    <div class="product_img">
                                                                                                                                                                                                                        <a href="shop-product-detail.html">
                                                                                                                                                                                                                            <img src="{{ asset('product_images/' . @$product->image_one) }}" alt="product_img1">
                                                                                                                                                                                                                        </a>
                                                                                                                                                                                                                        <div class="product_action_box">
                                                                                                                                                                                                                            <ul class="list_none pr_action_btn">
                                                                                                                                                                                                                                <li class="add-to-cart"><a href="#"><i class="icon-basket-loaded"></i> Add To Cart</a></li>
                                                                                                                                                                                                                                <li><a href="shop-compare.html"><i class="icon-shuffle"></i></a></li>
                                                                                                                                                                                                                                <li><a href="shop-quick-view.html" class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
                                                                                                                                                                                                                                <li><a href="#"><i class="icon-heart"></i></a></li>
                                                                                                                                                                                                                            </ul>
                                                                                                                                                                                                                        </div>
                                                                                                                                                                                                                    </div>
                                                                                                                                                                                                                    <div class="product_info">
                                                                                                                                                                                                                        <h6 class="product_title"><a href="shop-product-detail.html">Blue Dress For Woman</a></h6>
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
                                                                                                                                                                                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p>
                                                                                                                                                                                                                        </div>
                                                                                                                                                                                                                        <div class="pr_switch_wrap">
                                                                                                                                                                                                                            <div class="product_color_switch">
                                                                                                                                                                                                                                <span class="active" data-color="#87554B"></span>
                                                                                                                                                                                                                                <span data-color="#333333"></span>
                                                                                                                                                                                                                                <span data-color="#DA323F"></span>
                                                                                                                                                                                                                            </div>
                                                                                                                                                                                                                        </div>
                                                                                                                                                                                                                    </div>
                                                                                                                                                                                                                </div>
                                                                                                                                                                                                            </div>
                                                                                                                                                                                                           <div class="item">
                                                                                                                                                                                                                <div class="product">
                                                                                                                                                                                                                    <div class="product_img">
                                                                                                                                                                                                                        <a href="shop-product-detail.html">
                                                                                                                                                                                                                            <img src="{{ asset('product_images/' . @$product->image_one) }}" alt="product_img1">
                                                                                                                                                                                                                        </a>
                                                                                                                                                                                                                        <div class="product_action_box">
                                                                                                                                                                                                                            <ul class="list_none pr_action_btn">
                                                                                                                                                                                                                                <li class="add-to-cart"><a href="#"><i class="icon-basket-loaded"></i> Add To Cart</a></li>
                                                                                                                                                                                                                                <li><a href="shop-compare.html"><i class="icon-shuffle"></i></a></li>
                                                                                                                                                                                                                                <li><a href="shop-quick-view.html" class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
                                                                                                                                                                                                                                <li><a href="#"><i class="icon-heart"></i></a></li>
                                                                                                                                                                                                                            </ul>
                                                                                                                                                                                                                        </div>
                                                                                                                                                                                                                    </div>
                                                                                                                                                                                                                    <div class="product_info">
                                                                                                                                                                                                                        <h6 class="product_title"><a href="shop-product-detail.html">Blue Dress For Woman</a></h6>
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
                                                                                                                                                                                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p>
                                                                                                                                                                                                                        </div>
                                                                                                                                                                                                                        <div class="pr_switch_wrap">
                                                                                                                                                                                                                            <div class="product_color_switch">
                                                                                                                                                                                                                                <span class="active" data-color="#87554B"></span>
                                                                                                                                                                                                                                <span data-color="#333333"></span>
                                                                                                                                                                                                                                <span data-color="#DA323F"></span>
                                                                                                                                                                                                                            </div>
                                                                                                                                                                                                                        </div>
                                                                                                                                                                                                                    </div>
                                                                                                                                                                                                                </div>
                                                                                                                                                                                                            </div>
                                                                                                                                                                                                           <div class="item">
                                                                                                                                                                                                                <div class="product">
                                                                                                                                                                                                                    <div class="product_img">
                                                                                                                                                                                                                        <a href="shop-product-detail.html">
                                                                                                                                                                                                                            <img src="{{ asset('product_images/' . @$product->image_one) }}" alt="product_img1">
                                                                                                                                                                                                                        </a>
                                                                                                                                                                                                                        <div class="product_action_box">
                                                                                                                                                                                                                            <ul class="list_none pr_action_btn">
                                                                                                                                                                                                                                <li class="add-to-cart"><a href="#"><i class="icon-basket-loaded"></i> Add To Cart</a></li>
                                                                                                                                                                                                                                <li><a href="shop-compare.html"><i class="icon-shuffle"></i></a></li>
                                                                                                                                                                                                                                <li><a href="shop-quick-view.html" class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
                                                                                                                                                                                                                                <li><a href="#"><i class="icon-heart"></i></a></li>
                                                                                                                                                                                                                            </ul>
                                                                                                                                                                                                                        </div>
                                                                                                                                                                                                                    </div>
                                                                                                                                                                                                                    <div class="product_info">
                                                                                                                                                                                                                        <h6 class="product_title"><a href="shop-product-detail.html">Blue Dress For Woman</a></h6>
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
                                                                                                                                                                                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p>
                                                                                                                                                                                                                        </div>
                                                                                                                                                                                                                        <div class="pr_switch_wrap">
                                                                                                                                                                                                                            <div class="product_color_switch">
                                                                                                                                                                                                                                <span class="active" data-color="#87554B"></span>
                                                                                                                                                                                                                                <span data-color="#333333"></span>
                                                                                                                                                                                                                                <span data-color="#DA323F"></span>
                                                                                                                                                                                                                            </div>
                                                                                                                                                                                                                        </div>
                                                                                                                                                                                                                    </div>
                                                                                                                                                                                                                </div>
                                                                                                                                                                                                            </div> -->


                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END SECTION SHOP -->

        <!-- START SECTION SUBSCRIBE NEWSLETTER -->
        <div class="section bg_default small_pt small_pb">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="heading_s1 mb-md-0 heading_light">
                            <h3>Subscribe Our Newsletter</h3>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="newsletter_form">
                            <form>
                                <input type="text" required="" class="form-control rounded-0"
                                    placeholder="Enter Email Address">
                                <button type="submit" class="btn btn-dark rounded-0" name="submit"
                                    value="Submit">Subscribe</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- START SECTION SUBSCRIBE NEWSLETTER -->

    </div>
    <!-- END MAIN CONTENT -->




    <!-- <div class="modal fade" id="cartmodal" tabindex="-1" role="dialog"
                                                                                                                                                                                                                aria-labelledby="exampleModallevel" aria-hidden="true">
                                                                                                                                                                                                                <div class="modal-dialog modal-lg" role="document">
                                                                                                                                                                                                                    <div class="modal-content">
                                                                                                                                                                                                                        <div class="modal-header">
                                                                                                                                                                                                                            <h5 class="modal-title" id="exampleModallevel">Modal title</h5>
                                                                                                                                                                                                                            <a type="button" class="btn-close" data-bs-dismiss="modal"
                                                                                                                                                                                                                                aria-label="Close"></a>
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
                                                                                                                                                                                                                                 <a class="bth btn-primary btn-sm" id="addtocarttest" type="submit"
                                                                                                                                                                                                                                        onclick="addtocart()">Add to card</a>

                                                                                                                                                                                                                                </div>

                                                                                                                                                                                                                            </div>
                                                                                                                                                                                                                        </div>

                                                                                                                                                                                                                    </div>
                                                                                                                                                                                                                </div>
                                                                                                                                                                                                            </div> -->



    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

    //     function productview(id) {


    //         $.ajax({

    //             type: "GET",
    //             datatype: "json",
    //             url: "/productview/" + id,
    //             success: function(data) {

    //                 $("#pcname").text(data.product.product_code);
    //                 $("#ptname").text(data.product.product_name);
    //                 $("#pname").text(data.product.product_name);
    //                 $("#pimage").attr('src', '/product_images/' + data.product.image_one);
    //                 $("#cname").text(data.product.category.category_name);
    //                 $("#bname").text(data.product.brand.brand_name);
    //                 $("#product_id").val(data.product.id);
    //                 $("#stock").text(data.product.product_quantity);


    //                 if (data.product.product_quantity < $('#quantity').val()) {
    //                     $("#test").text(data.product.brand.brand_name);
    //                 } else {
    //                     $("#test").text(data.product.product_quantity);
    //                 }

    //                 $("#quantity").focus(function() {
    //                     $(this).blur();
    //                 });


    //                 var d = $('select[name="color"]').empty();
    //                 $.each(data.color, function(key, value) {
    //                     $('select[name="color"]').append('<option value="' + value + '">' + value +
    //                         '</option>');
    //                 });
    //                 var e = $('select[name="size"]').empty();
    //                 $.each(data.size, function(key, value) {
    //                     $('select[name="size"]').append('<option value ="' + value + '">' + value +
    //                         '</option>');

    //                 });


    //             }

    //         })

    //     }
    // </script>

    <script>
        @if (Session::has('message'))
            var type = "{{ Session::get('alert-type', 'success') }}"
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
    function addtocart_two(){
        alert('hi')

       $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

       var id=$('#product_id').val();
       // var color=$('#color').val();
       // var size=$('#size').val();
       var color=$('input[name="color"]:checked').val();
       var size=$('input[name="size"]:checked').val();
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

</script>



    <!-- displayed selected size  -->
    <script>
        var selectedSize = $('input[name="size"]:checked').val();
        $("#size_display").html("Size:" + " " + selectedSize);

        // when size value will be changed
        $(document).ready(function() {
            // Add a change event listener to the radio button inputs
            $('input[name="size"]').change(function() {
                // Retrieve the value of the selected input
                var selectedSize = $('input[name="size"]:checked').val();

                $("#size_display").html("Size:" + " " + selectedSize);
            });
        });
    </script>


    <!-- displayed selected size  -->
    <script>
        var selectedColor = $('input[name="color"]:checked').val();
        $("#color_display").html("Color:" + " " + selectedColor);

        // when size value will be changed
        $(document).ready(function() {
            // Add a change event listener to the radio button inputs
            $('input[name="color"]').change(function() {
                // Retrieve the value of the selected input
                var selectedColor = $('input[name="color"]:checked').val();
                $("#color_display").html("Color:" + " " + selectedColor);
            });
        });
    </script>



    <script type="text/javascript">
        function addtocart() {
            alert('addtocart');
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            var id = $('#product_id').val();
            // var color=$('#color').val();
            // var size=$('#size').val();
            // var color = $('input[name="color"]:checked').val();
            var attribute_id = $('#attribute_id').val();
            var size = $('input[name="size"]:checked').val();
            var quantity = $('#quantity').val();
            $.ajax({
                type: 'POST',
                datatype: 'json',
                data: {
                    product_id: id,
                    attribute_id: attribute_id,
                    size: size,
                    quantity: quantity
                },
                url: "/addtocart",
                success: function(data) {
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
                    if ($.isEmptyObject(data.error)) {
                        Toast.fire({
                            icon: 'success',
                            title: data.success
                        })
                        $('#applycouponfield').hide();
                    } else {
                        Toast.fire({
                            icon: 'error',
                            title: data.error
                        })
                    }

                }
            })
        }


        function selectAttribute(id){
             var dataId = $('#attribute_id').val(id);
            console.log(dataId);
        }

        function addwish(id) {

            $.ajax({
                type: "GET",
                datatype: "json",
                url: "/addwishlistt/" + id,
                success: function(data) {
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
                    if ($.isEmptyObject(data.error)) {
                        Toast.fire({
                            icon: 'success',
                            title: data.success
                        })

                    } else {
                        Toast.fire({
                            icon: 'error',
                            title: data.error
                        })
                    }

                }
            })



        }

      



        function addnewsletter() {

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            let newsletterr = $('#newsemail').val();

            $.ajax({
                type: 'POST',
                datatype: 'json',
                data: {
                    newsletter: newsletterr
                },
                url: '/add/newsletter',
                success: function(data) {
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
                    if ($.isEmptyObject(data.error)) {
                        Toast.fire({
                            icon: 'success',
                            title: data.success
                        })

                    } else {
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
