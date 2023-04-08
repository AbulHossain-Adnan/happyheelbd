@extends('layouts.shopwisemaster')
@section('content')

<!-- START SECTION BANNER -->
<div class="banner_section slide_medium shop_banner_slider staggered-animation-wrap">
    <div id="carouselExampleControls" class="carousel slide carousel-fade light_arrow" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item background_bg active"
                data-img-src="{{ asset('templateassets') }}/assets/images/women/eidBanner.jpg" loading="lazy">
                <div class="banner_slide_content banner_content_inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-7 col-10">
                                <div class="banner_content overflow-hidden">
                                    <h2 class="staggered-animation" data-animation="slideInLeft"
                                        data-animation-delay="0.5s"></h2>
                                    <h5 class="mb-3 mb-sm-4 staggered-animation font-weight-light"
                                        data-animation="slideInLeft" data-animation-delay="1s"> <span
                                            class="text_default"></span> </h5>
                                    <a class="btn btn-fill-out staggered-animation text-uppercase"
                                        href="{{url('shop/page')}}" data-animation="slideInLeft"
                                        data-animation-delay="1.5s">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item background_bg" data-img-src="{{ asset('templateassets') }}/assets/images/women/romadan2.jpg" loading="lazy">
                <div class="banner_slide_content banner_content_inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 col-10">
                                <div class="banner_content overflow-hidden">
                                    <h2 class="staggered-animation" data-animation="slideInLeft "
                                        data-animation-delay="0.5s"></h2>
                                    <h5 class="mb-3 mb-sm-4 staggered-animation font-weight-light"
                                        data-animation="slideInLeft" data-animation-delay="1s"><span
                                            class="text_default"></span> </h5>
                                    <a class="btn btn-fill-out staggered-animation text-uppercase"
                                        href="{{url('shop/page')}}" data-animation="slideInLeft"
                                        data-animation-delay="1.5s">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item background_bg" data-img-src="{{ asset('templateassets') }}/assets/images/women/romadan8.jpg" loading="lazy">
                <div class="banner_slide_content banner_content_inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 col-10">
                                <div class="banner_content overflow-hidden">
                                    <h2 class="staggered-animation text-white" data-animation="slideInLeft"
                                        data-animation-delay="0.5s"></h2>
                                    <h5 class="mb-3 mb-sm-4 staggered-animation font-weight-light text-white"
                                        data-animation="slideInLeft" data-animation-delay="1s">Taking your Viewing
                                     </h5>
                                    <a class="btn btn-fill-out staggered-animation text-uppercase"
                                        href="{{url('shop/page')}}" data-animation="slideInLeft"
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




 <!-- START SECTION SHOP -->
   

     <div class="section small_pt small_pb">
	<div class="container">
    	<div class="row">
			<div class="col-md-12">
            	<div class="heading_tab_header">
                    <div class="heading_s2">
                        <h2>EID COLLECTIONS <i class="fa-solid fa-fire"></i></h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
            	<div class="product_slider carousel_slider owl-carousel owl-theme nav_style1" data-loop="false" data-dots="false" data-nav="true" data-margin="20" data-responsive='{"0":{"items": "1"}, "481":{"items": "2"}, "768":{"items": "3"}, "1199":{"items": "4"}}'>
                	  @foreach ($eid_collections as $item)
                    <div class="item">
                        <div class="product">
                            <div class="">
                                <a href="{{url('/singleproduct/'.$item->id.'/'.$item->product_name)}}">
                                    <img src="{{ asset('product_images/'.@$item->attributes[0]['product_image']) }}" alt="product_img1">
                                </a>
                                <div class="product_action_box">
                                
                                </div>
                            </div>
                             <div class="product_info">
                                    <h6 class="product_title"><a href="{{url('/singleproduct/'.$item->id.'/'.$item->product_name)}}">{{$item->product_name}}</a></h6>

                                    <div class="product_price">
                                        <span class="pr_flash">New</span>

                                          @if($item->discount_price == null)
                                          <li class="product_mark product_discount " style="background:blue;">new</li>
                                            @else

                                                @php
                                                $amout=$item->selling_price-$item->discount_price;
                                                @endphp
                                        <span class="price">{{@$item->discount_price}} TK</span>
                                        <del>
                                            {{@$item->selling_price}} TK
                                        </del>
                                        <div class="on_sale">
                                            <span>{{ round($amout/$item->selling_price*100) }}%</span>
                                        </div>
                                                @endif

                                    </div>
                                    <div class="rating_wrap">
                                        <div class="rating">
                                            <div class="product_rate" style="width:98%"></div>
                                        </div>
                                        <span class="rating_num"></span>
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




    <div class="section small_pt small_pb">
	<div class="container">
    	<div class="row">
			<div class="col-md-12">
            	<div class="heading_tab_header">
                    <div class="heading_s2">
                        <h2>BEST SELLER <i class="fa-solid fa-fire"></i></h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
            	<div class="product_slider carousel_slider owl-carousel owl-theme nav_style1" data-loop="false" data-dots="false" data-nav="true" data-margin="20" data-responsive='{"0":{"items": "1"}, "481":{"items": "2"}, "768":{"items": "3"}, "1199":{"items": "4"}}'>
                	  @foreach ($best_serllers as $item)
                    <div class="item">
                        <div class="product">
                            <div class="">
                                <a href="{{url('/singleproduct/'.$item->id.'/'.$item->product_name)}}">
                                    <img src="{{ asset('product_images/'.@$item->attributes[0]['product_image']) }}" alt="product_img1">
                                </a>
                                <div class="product_action_box">
                                
                                </div>
                            </div>
                             <div class="product_info">
                                    <h6 class="product_title"><a href="{{url('/singleproduct/'.$item->id.'/'.$item->product_name)}}">{{$item->product_name}}</a></h6>

                                    <div class="product_price">
                                        <span class="pr_flash">Sell</span>

                                          @if($item->discount_price == null)
                                          <li class="product_mark product_discount " style="background:blue;">new</li>
                                            @else

                                                @php
                                                $amout=$item->selling_price-$item->discount_price;
                                                @endphp
                                        <span class="price">{{@$item->discount_price}} TK</span>
                                        <del>
                                            {{@$item->selling_price}} TK
                                        </del>
                                        <div class="on_sale">
                                            <span>{{ round($amout/$item->selling_price*100) }}%</span>
                                        </div>
                                                @endif

                                    </div>
                                    <div class="rating_wrap">
                                        <div class="rating">
                                            <div class="product_rate" style="width:98%"></div>
                                        </div>
                                        <span class="rating_num"></span>
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



      <!-- START SECTION BANNER -->
    <div class="section pb_20 small_pt">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="sale-banner mb-3 mb-md-4">

                        <a class="hover_effect1" href="#">
                            <img src="{{ asset('templateassets/assets/images/women/romadan2.jpg') }}" loading="lazy" alt="shop_banner_img11">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div> 







@if(!$block_heels->isEmpty())
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="heading_tab_header">
                    <div class="heading_s2">
                        <h2>BLOCK HEELS</h2>
                    </div>
                    {{-- <div class="deal_timer">
                    	<div class="countdown_time countdown_style1" data-time="2021/09/28 13:22:15"></div>
                    </div> --}}
                </div>
                    <div class="row align-items-center mb-4 pb-1">
                    </div>
                         <div id="list_view_product" class="row shop_container loadmore" data-item="8" data-item-show="4"
                        data-finish-message="No More Item to Show" data-btn="Load More"> 

                       @foreach($block_heels as $item)
                        <div class="col-lg-3 col-md-4 col-6 grid_item">
                            <div class="product">
                                 <span class="pr_flash">New</span>
                                <div class="">
                                   <a href="{{url('/singleproduct/'.$item->id.'/'.$item->product_name)}}">
                                        <img src="{{ asset('product_images/'.@$item->attributes[0]['product_image']) }}" alt="product_img1">
                                   </a>
                                    <div class="product_action_box">
                                        <ul class="list_none pr_action_btn">
                                            {{-- <li class="add-to-cart">
                                                 <a type="button" id="{{ $item->id }} " data-bs-toggle="modal"
                                                    data-bs-target="#cartmodal" onclick="productview(this.id)">
                                                    <i class="icon-basket-loaded"></i>
                                                </a>
                                                </li> --}}
                                           
                                            <li>
                                                <a href="{{url('/product-quick-view/'.$item->id)}}"
                                                    class="popup-ajax"><i class="icon-magnifier-add"></i></a>
                                                </li>
                                            <li> 
                                                <a id="{{$item->id}}" onclick="addwish(this.id)"><i class="icon-heart"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product_info">
                                    <h6 class="product_title"><a href="{{url('/singleproduct/'.$item->id.'/'.$item->product_name)}}">{{$item->product_name}}</a></h6>
                                    <div class="product_price">
                                        <span class="price">{{@$item->discount_price}} TK</span>
                                        <del>
                                            {{@$item->selling_price}} TK
                                        </del>
                                        <div class="on_sale">
                                            @php
                                                $amout=$item->selling_price-$item->discount_price;
                                                @endphp
                                            <span>{{ round(@$amout/$item->selling_price*100) }}% Off</span>
                                        </div>
                                    </div>
                                    <div class="rating_wrap">
                                        <div class="rating">
                                            <div class="product_rate" style="width:90%"></div>
                                        </div>
                                        <span class="rating_num"></span>
                                    </div>
                                    <div class="pr_desc">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit
                                            massa enim. Nullam id varius nunc id varius nunc.</p>
                                    </div>
                                  <!--   <div class="pr_switch_wrap">
                                        <div class="product_color_switch">
                                            <span class="active" data-color="#87554B"></span>
                                            <span data-color="#333333"></span>
                                            <span data-color="#DA323F"></span>
                                        </div>
                                    </div> -->
                                    <div class="list_product_action_box">
                                        <ul class="list_none pr_action_btn">
                                            <li class="add-to-cart"><a href="#"><i class="icon-basket-loaded"></i> Add ddd
                                                    To Cart</a></li>
                                           
                                            <li><a href="{{url('/product-quick-view/'.$item->id)}}"
                                                    class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
                                            <li> <a id="{{$item->id}}" onclick="addwish(this.id)"><i class="icon-heart"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        @endforeach

                        <div class="container bg-light">
                        <div class="col-md-12 text-center mt-2">
                            <a href="{{url('category/shop/products/1')}}" type="button" class="btn btn-outline-danger">view all</a>
                        </div>
                    </div>

                    </div>
                       
                </div>
            </div>
        </div>
    </div>
@endif



@if(!$pencil_heels->empty())
 <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="heading_tab_header">
                    <div class="heading_s2">
                        <h2>PENCIL HEELS</h2>
                    </div>
                    {{-- <div class="deal_timer">
                    	<div class="countdown_time countdown_style1" data-time="2021/09/28 13:22:15"></div>
                    </div> --}}
                </div>
                    <div class="row align-items-center mb-4 pb-1">
                    </div>
                         <div id="list_view_product" class="row shop_container loadmore" data-item="8" data-item-show="4"
                        data-finish-message="No More Item to Show" data-btn="Load More"> 

                       @foreach($pencil_heels as $item)
                        <div class="col-lg-3 col-md-4 col-6 grid_item">
                            <div class="product">
                                 <span class="pr_flash">New</span>
                                <div class="">
                                   <a href="{{url('/singleproduct/'.$item->id.'/'.$item->product_name)}}">
                                        <img src="{{ asset('product_images/'.@$item->attributes[0]['product_image']) }}" alt="product_img1">
                                   </a>
                                    <div class="product_action_box">
                                        <ul class="list_none pr_action_btn">
                                            {{-- <li class="add-to-cart">
                                                 <a type="button" id="{{ $item->id }} " data-bs-toggle="modal"
                                                    data-bs-target="#cartmodal" onclick="productview(this.id)">
                                                    <i class="icon-basket-loaded"></i>
                                                </a>
                                                </li> --}}
                                           
                                            <li>
                                                <a href="{{url('/product-quick-view/'.$item->id)}}"
                                                    class="popup-ajax"><i class="icon-magnifier-add"></i></a>
                                                </li>
                                            <li> 
                                                <a id="{{$item->id}}" onclick="addwish(this.id)"><i class="icon-heart"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product_info">
                                    <h6 class="product_title"><a href="{{url('/singleproduct/'.$item->id.'/'.$item->product_name)}}">{{$item->product_name}}</a></h6>
                                    <div class="product_price">
                                        <span class="price">{{@$item->discount_price}} TK</span>
                                        <del>
                                            {{@$item->selling_price}} TK
                                        </del>
                                        <div class="on_sale">
                                            @php
                                                $amout=$item->selling_price-$item->discount_price;
                                                @endphp
                                            <span>{{ round(@$amout/$item->selling_price*100) }}% Off</span>
                                        </div>
                                    </div>
                                    <div class="rating_wrap">
                                        <div class="rating">
                                            <div class="product_rate" style="width:90%"></div>
                                        </div>
                                        <span class="rating_num"></span>
                                    </div>
                                    <div class="pr_desc">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit
                                            massa enim. Nullam id varius nunc id varius nunc.</p>
                                    </div>
                                  <!--   <div class="pr_switch_wrap">
                                        <div class="product_color_switch">
                                            <span class="active" data-color="#87554B"></span>
                                            <span data-color="#333333"></span>
                                            <span data-color="#DA323F"></span>
                                        </div>
                                    </div> -->
                                    <div class="list_product_action_box">
                                        <ul class="list_none pr_action_btn">
                                            <li class="add-to-cart"><a href="#"><i class="icon-basket-loaded"></i> Add ddd
                                                    To Cart</a></li>
                                           
                                            <li><a href="{{url('/product-quick-view/'.$item->id)}}"
                                                    class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
                                            <li> <a id="{{$item->id}}" onclick="addwish(this.id)"><i class="icon-heart"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        @endforeach

                        <div class="container bg-light">
                    <div class="col-md-12 text-center">
                        <a href="{{url('category/shop/products/2')}}" type="button" class="btn btn-outline-danger">view all</a>
                    </div>
    </div>

        </div>
             
                </div>
            </div>
        </div>
    </div>

@endif



    <div class="section pb_20 small_pt">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="sale-banner mb-3 mb-md-4">

                        <a class="hover_effect1" href="#">
                            <img src="{{ asset('templateassets/assets/images/women/romadan1.png') }}" alt="shop_banner_img11">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div> 



  





    <!-- START SECTION SHOP -->
   



      

    

     <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="heading_tab_header">
                    <div class="heading_s2">
                        <h2>TRANSPARENT HEELS</h2>
                    </div>
                    {{-- <div class="deal_timer">
                    	<div class="countdown_time countdown_style1" data-time="2021/09/28 13:22:15"></div>
                    </div> --}}
                </div>
                    <div class="row align-items-center mb-4 pb-1">
                    </div>
                         <div id="list_view_product" class="row shop_container loadmore" data-item="8" data-item-show="4"
                        data-finish-message="No More Item to Show" data-btn="Load More"> 

                       @foreach($transparent_heels as $item)
                        <div class="col-lg-3 col-md-4 col-6 grid_item">
                            <div class="product">
                                 <span class="pr_flash">New</span>
                                <div class="">
                                   <a href="{{url('/singleproduct/'.$item->id.'/'.$item->product_name)}}">
                                        <img src="{{ asset('product_images/'.@$item->attributes[0]['product_image']) }}" alt="product_img1">
                                   </a>
                                    <div class="product_action_box">
                                        <ul class="list_none pr_action_btn">
                                            {{-- <li class="add-to-cart">
                                                 <a type="button" id="{{ $item->id }} " data-bs-toggle="modal"
                                                    data-bs-target="#cartmodal" onclick="productview(this.id)">
                                                    <i class="icon-basket-loaded"></i>
                                                </a>
                                                </li> --}}
                                           
                                            <li>
                                                <a href="{{url('/product-quick-view/'.$item->id)}}"
                                                    class="popup-ajax"><i class="icon-magnifier-add"></i></a>
                                                </li>
                                            <li> 
                                                <a id="{{$item->id}}" onclick="addwish(this.id)"><i class="icon-heart"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product_info">
                                    <h6 class="product_title"><a href="{{url('/singleproduct/'.$item->id.'/'.$item->product_name)}}">{{$item->product_name}}</a></h6>
                                    <div class="product_price">
                                        <span class="price">{{@$item->discount_price}} TK</span>
                                        <del>
                                            {{@$item->selling_price}} TK
                                        </del>
                                        <div class="on_sale">
                                            @php
                                                $amout=$item->selling_price-$item->discount_price;
                                                @endphp
                                            <span>{{ round(@$amout/$item->selling_price*100) }}% Off</span>
                                        </div>
                                    </div>
                                    <div class="rating_wrap">
                                        <div class="rating">
                                            <div class="product_rate" style="width:90%"></div>
                                        </div>
                                        <span class="rating_num"></span>
                                    </div>
                                    <div class="pr_desc">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit
                                            massa enim. Nullam id varius nunc id varius nunc.</p>
                                    </div>
                                  <!--   <div class="pr_switch_wrap">
                                        <div class="product_color_switch">
                                            <span class="active" data-color="#87554B"></span>
                                            <span data-color="#333333"></span>
                                            <span data-color="#DA323F"></span>
                                        </div>
                                    </div> -->
                                    <div class="list_product_action_box">
                                        <ul class="list_none pr_action_btn">
                                            <li class="add-to-cart"><a href="#"><i class="icon-basket-loaded"></i> Add ddd
                                                    To Cart</a></li>
                                           
                                            <li><a href="{{url('/product-quick-view/'.$item->id)}}"
                                                    class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
                                            <li> <a id="{{$item->id}}" onclick="addwish(this.id)"><i class="icon-heart"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        @endforeach

                        <div class="container bg-light">
                        <div class="col-md-12 text-center mt-2">
                            <a href="{{url('category/shop/products/4')}}" type="button" class="btn btn-outline-danger">view all</a>
                        </div>
                    </div>

                    </div>
                       
                </div>
            </div>
        </div>
    </div>


    @if(!$balance_heels->isEmpty())
     <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="heading_tab_header">
                    <div class="heading_s2">
                        <h2>BALANCE HEELS</h2>
                    </div>
                    {{-- <div class="deal_timer">
                    	<div class="countdown_time countdown_style1" data-time="2021/09/28 13:22:15"></div>
                    </div> --}}
                </div>
                    <div class="row align-items-center mb-4 pb-1">
                    </div>
                         <div id="list_view_product" class="row shop_container loadmore" data-item="8" data-item-show="4"
                        data-finish-message="No More Item to Show" data-btn="Load More"> 

                       @foreach($balance_heels as $item)
                        <div class="col-lg-3 col-md-4 col-6 grid_item">
                            <div class="product">
                                 <span class="pr_flash">New</span>
                                <div class="">
                                   <a href="{{url('/singleproduct/'.$item->id.'/'.$item->product_name)}}">
                                        <img src="{{ asset('product_images/'.@$item->attributes[0]['product_image']) }}" alt="product_img1">
                                   </a>
                                    <div class="product_action_box">
                                        <ul class="list_none pr_action_btn">
                                            {{-- <li class="add-to-cart">
                                                 <a type="button" id="{{ $item->id }} " data-bs-toggle="modal"
                                                    data-bs-target="#cartmodal" onclick="productview(this.id)">
                                                    <i class="icon-basket-loaded"></i>
                                                </a>
                                                </li> --}}
                                           
                                            <li>
                                                <a href="{{url('/product-quick-view/'.$item->id)}}"
                                                    class="popup-ajax"><i class="icon-magnifier-add"></i></a>
                                                </li>
                                            <li> 
                                                <a id="{{$item->id}}" onclick="addwish(this.id)"><i class="icon-heart"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product_info">
                                    <h6 class="product_title"><a href="{{url('/singleproduct/'.$item->id.'/'.$item->product_name)}}">{{$item->product_name}}</a></h6>
                                    <div class="product_price">
                                        <span class="price">{{@$item->discount_price}} TK</span>
                                        <del>
                                            {{@$item->selling_price}} TK
                                        </del>
                                        <div class="on_sale">
                                            @php
                                                $amout=$item->selling_price-$item->discount_price;
                                                @endphp
                                            <span>{{ round(@$amout/$item->selling_price*100) }}% Off</span>
                                        </div>
                                    </div>
                                    <div class="rating_wrap">
                                        <div class="rating">
                                            <div class="product_rate" style="width:90%"></div>
                                        </div>
                                        <span class="rating_num"></span>
                                    </div>
                                    <div class="pr_desc">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit
                                            massa enim. Nullam id varius nunc id varius nunc.</p>
                                    </div>
                                  <!--   <div class="pr_switch_wrap">
                                        <div class="product_color_switch">
                                            <span class="active" data-color="#87554B"></span>
                                            <span data-color="#333333"></span>
                                            <span data-color="#DA323F"></span>
                                        </div>
                                    </div> -->
                                    <div class="list_product_action_box">
                                        <ul class="list_none pr_action_btn">
                                            <li class="add-to-cart"><a href="#"><i class="icon-basket-loaded"></i> Add ddd
                                                    To Cart</a></li>
                                           
                                            <li><a href="{{url('/product-quick-view/'.$item->id)}}"
                                                    class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
                                            <li> <a id="{{$item->id}}" onclick="addwish(this.id)"><i class="icon-heart"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        @endforeach

                        <div class="container bg-light">
                        <div class="col-md-12 text-center mt-2">
                            <a href="{{url('category/shop/products/5')}}" type="button" class="btn btn-outline-danger">view all</a>
                        </div>
                    </div>

                    </div>
                       
                </div>
            </div>
        </div>
    </div>
    @endif

     @if(!$flat_sandles->empty())
        <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="heading_tab_header">
                    <div class="heading_s2">
                        <h2>FLAT SANDLE</h2>
                    </div>
                    {{-- <div class="deal_timer">
                    	<div class="countdown_time countdown_style1" data-time="2021/09/28 13:22:15"></div>
                    </div> --}}
                </div>
                    <div class="row align-items-center mb-4 pb-1">
                    </div>
                         <div id="list_view_product" class="row shop_container loadmore" data-item="8" data-item-show="4"
                        data-finish-message="No More Item to Show" data-btn="Load More"> 

                       @foreach($flat_sandles as $item)
                        <div class="col-lg-3 col-md-4 col-6 grid_item">
                            <div class="product">
                                 <span class="pr_flash">New</span>
                                <div class="">
                                   <a href="{{url('/singleproduct/'.$item->id.'/'.$item->product_name)}}">
                                        <img src="{{ asset('product_images/'.@$item->attributes[0]['product_image']) }}" alt="product_img1">
                                   </a>
                                    <div class="product_action_box">
                                        <ul class="list_none pr_action_btn">
                                            {{-- <li class="add-to-cart">
                                                 <a type="button" id="{{ $item->id }} " data-bs-toggle="modal"
                                                    data-bs-target="#cartmodal" onclick="productview(this.id)">
                                                    <i class="icon-basket-loaded"></i>
                                                </a>
                                                </li> --}}
                                           
                                            <li>
                                                <a href="{{url('/product-quick-view/'.$item->id)}}"
                                                    class="popup-ajax"><i class="icon-magnifier-add"></i></a>
                                                </li>
                                            <li> 
                                                <a id="{{$item->id}}" onclick="addwish(this.id)"><i class="icon-heart"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product_info">
                                    <h6 class="product_title"><a href="{{url('/singleproduct/'.$item->id.'/'.$item->product_name)}}">{{$item->product_name}}</a></h6>
                                    <div class="product_price">
                                        <span class="price">{{@$item->discount_price}} TK</span>
                                        <del>
                                            {{@$item->selling_price}} TK
                                        </del>
                                        <div class="on_sale">
                                            @php
                                                $amout=$item->selling_price-$item->discount_price;
                                                @endphp
                                            <span>{{ round(@$amout/$item->selling_price*100) }}% Off</span>
                                        </div>
                                    </div>
                                    <div class="rating_wrap">
                                        <div class="rating">
                                            <div class="product_rate" style="width:90%"></div>
                                        </div>
                                        <span class="rating_num"></span>
                                    </div>
                                    <div class="pr_desc">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit
                                            massa enim. Nullam id varius nunc id varius nunc.</p>
                                    </div>
                                  <!--   <div class="pr_switch_wrap">
                                        <div class="product_color_switch">
                                            <span class="active" data-color="#87554B"></span>
                                            <span data-color="#333333"></span>
                                            <span data-color="#DA323F"></span>
                                        </div>
                                    </div> -->
                                    <div class="list_product_action_box">
                                        <ul class="list_none pr_action_btn">
                                            <li class="add-to-cart"><a href="#"><i class="icon-basket-loaded"></i> Add ddd
                                                    To Cart</a></li>
                                           
                                            <li><a href="{{url('/product-quick-view/'.$item->id)}}"
                                                    class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
                                            <li> <a id="{{$item->id}}" onclick="addwish(this.id)"><i class="icon-heart"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        @endforeach

                        <div class="container bg-light">
                         <div class="col-md-12 text-center">
                        <a href="{{url('category/shop/products/3')}}" type="button" class="btn btn-outline-danger">view all</a>
                    </div>
            </div>

                    </div>
                    <div class="auto-load text-center" style="display: none;">
                    <img style="width:200px;height: 200px;" src="{{asset('images/loader7.gif')}}">
                </div>
        </div>
            </div>
        </div>
    </div>
@endif
 

      <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                     <div class="">
                    <div class="heading_s2">
                        <h2>All Products</h2><br>
                    </div>
                    <div class="row align-items-center mb-4 pb-1">
                    </div>
                    <!-- id="list_view_product" -->

                         <div id="list_view_product" class="row shop_container loadmore" data-item="8" data-item-show="4"
                        data-finish-message="No More Item to Show" data-btn="Load More"> 




                       
                        @foreach($all_products as $item)
                        <div class="col-lg-3 col-md-4 col-6 grid_item">
                            <div class="product">
                                 <span class="pr_flash">New</span>
                                <div class="">
                                   <a href="{{url('/singleproduct/'.$item->id.'/'.$item->product_name)}}">
                                        <img src="{{ asset('product_images/'.@$item->attributes[0]['product_image']) }}" alt="product_img1">
                                   </a>
                                    <div class="product_action_box">
                                        <ul class="list_none pr_action_btn">
                                            {{-- <li class="add-to-cart">
                                                 <a type="button" id="{{ $item->id }} " data-bs-toggle="modal"
                                                    data-bs-target="#cartmodal" onclick="productview(this.id)">
                                                    <i class="icon-basket-loaded"></i>
                                                </a>
                                                </li> --}}
                                           
                                            <li>
                                                <a href="{{url('/product-quick-view/'.$item->id)}}"
                                                    class="popup-ajax"><i class="icon-magnifier-add"></i></a>
                                                </li>
                                            <li> 
                                                <a id="{{$item->id}}" onclick="addwish(this.id)"><i class="icon-heart"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product_info">
                                    <h6 class="product_title"><a href="{{url('/singleproduct/'.$item->id.'/'.$item->product_name)}}">{{$item->product_name}}</a></h6>
                                    <div class="product_price">
                                        <span class="price">{{@$item->discount_price}} TK</span>
                                        <del>
                                            {{@$item->selling_price}} TK
                                        </del>
                                        <div class="on_sale">
                                            @php
                                                $amout=$item->selling_price-$item->discount_price;
                                                @endphp
                                            <span>{{ round(@$amout/$item->selling_price*100) }}% Off</span>
                                        </div>
                                    </div>
                                    <div class="rating_wrap">
                                        <div class="rating">
                                            <div class="product_rate" style="width:90%"></div>
                                        </div>
                                        <span class="rating_num"></span>
                                    </div>
                                    <div class="pr_desc">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit
                                            massa enim. Nullam id varius nunc id varius nunc.</p>
                                    </div>
                                  <!--   <div class="pr_switch_wrap">
                                        <div class="product_color_switch">
                                            <span class="active" data-color="#87554B"></span>
                                            <span data-color="#333333"></span>
                                            <span data-color="#DA323F"></span>
                                        </div>
                                    </div> -->
                                    <div class="list_product_action_box">
                                        <ul class="list_none pr_action_btn">
                                            <li class="add-to-cart"><a href="#"><i class="icon-basket-loaded"></i> Add ddd
                                                    To Cart</a></li>
                                           
                                            <li><a href="{{url('/product-quick-view/'.$item->id)}}"
                                                    class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
                                            <li> <a id="{{$item->id}}" onclick="addwish(this.id)"><i class="icon-heart"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        @endforeach
                    </div>
                         <div class="container bg-light">
                        <div class="col-md-12 text-center mt-2">
                            <a href="{{url('all/shop/products')}}" type="button" class="btn btn-outline-danger">view all</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>


    <!-- START SECTION CATEGORIES -->

<div class="section small_pb small_pt">
	<div class="container">
    	<div class="row justify-content-center">
			<div class="col-md-6">
                <div class="heading_s4 text-center">
                    <h2>All Shoes Categories</h2>
                </div>
               
            </div>
		</div>
        <div class="row align-items-center">
            <div class="col-12">
                <div class="cat_slider cat_style1 mt-4 mt-md-0 carousel_slider owl-carousel owl-theme nav_style5" data-loop="false" data-dots="false" data-nav="false" data-margin="30" data-responsive='{"0":{"items": "2"}, "480":{"items": "3"}, "576":{"items": "4"}, "768":{"items": "5"}, "991":{"items": "6"}, "1199":{"items": "7"}}'>
                    
                @foreach($category_products as $item)
                    <div class="item">
                        <div class="categories_box">
                            <a href="{{url('category/shop/products'.'/'.$item->id.'/'.$item->brand_name)}}">
                                <img src="{{ asset('images/'.@$item->brand_photo) }}" alt="cat_img1"/>
                                <span>{{$item->brand_name}}</span>
                            </a>
                        </div>
                    </div>
                 @endforeach
                </div>
            </div>
        </div>
    </div>
</div>




 



    <!-- END SECTION SHOP -->


 

{{-- </div>                 
</div>  --}}


   

<script type="text/javascript">

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
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
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
                console.log('chenge')
                // Retrieve the value of the selected input
                var selectedColor = $('input[name="color"]:checked').val();
                $("#color_display").html("Color:" + " " + selectedColor);
            });
        });
    </script>



 <script type="text/javascript">
        function addtocart() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            var id = $('#product_id').val();
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


           //  get attribute_id when clicked image    
        function selectAttribute(id){
             var dataId = $('#attribute_id').val(id);
            console.log(dataId);
        }
    // end 


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