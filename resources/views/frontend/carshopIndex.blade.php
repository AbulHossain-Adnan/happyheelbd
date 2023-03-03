
@extends('layouts.frontend_layout')

@section('frontendContent')

@include('frontend.indexNav')

<!-- Characteristics -->
<link rel="stylesheet" href="sweetalert2.min.css">
<div class="characteristics">
    <div class="container">
        <div class="row">

            <!-- Char. Item -->
            <div class="col-lg-3 col-md-6 char_col">

                <div class="char_item d-flex flex-row align-items-center justify-content-start">
                    <div class="char_icon"><img src="{{ asset('frontend') }}/images/char_1.png" alt="">
                    </div>
                    <div class="char_content">
                        <div class="char_title">Free Delivery</div>
                        <div class="char_subtitle">from $50</div>
                    </div>
                </div>
            </div>

            <!-- Char. Item -->
            <div class="col-lg-3 col-md-6 char_col">

                <div class="char_item d-flex flex-row align-items-center justify-content-start">
                    <div class="char_icon"><img src="{{ asset('frontend') }}/images/char_2.png" alt="">
                    </div>
                    <div class="char_content">
                        <div class="char_title">Free Delivery</div>
                        <div class="char_subtitle">from $50</div>
                    </div>
                </div>
            </div>

            <!-- Char. Item -->
            <div class="col-lg-3 col-md-6 char_col">

                <div class="char_item d-flex flex-row align-items-center justify-content-start">
                    <div class="char_icon"><img src="{{ asset('frontend') }}/images/char_3.png" alt="">
                    </div>
                    <div class="char_content">
                        <div class="char_title">Free Delivery</div>
                        <div class="char_subtitle">from $50</div>
                    </div>
                </div>
            </div>

            <!-- Char. Item -->
            <div class="col-lg-3 col-md-6 char_col">

                <div class="char_item d-flex flex-row align-items-center justify-content-start">
                    <div class="char_icon"><img src="{{ asset('frontend') }}/images/char_4.png" alt="">
                    </div>
                    <div class="char_content">
                        <div class="char_title">Free Delivery</div>
                        <div class="char_subtitle">from $50</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Deals of the week -->

<div class="deals_featured">
    <div class="container">
        <div class="row">
            <div class="col d-flex flex-lg-row flex-column align-items-center justify-content-start">

                <!-- Deals -->

                <div class="deals">
                    <div class="deals_title">Deals of the Week</div>
                    <div class="deals_slider_container">

                        <!-- Deals Slider -->
                        <div class="owl-carousel owl-theme deals_slider">
                            @foreach($hot_deals as $item)
                            <!-- Deals Item -->
                            <div class="owl-item deals_item">
                                <div class="deals_image"><img src="{{asset('product_images/'.$item->image_one)}}" alt="">
                                </div>
                                <div class="deals_content">
                                    <div class="deals_info_line d-flex flex-row justify-content-start">
                                        <div class="deals_item_category"><a href="#"></a></div>
                                        <div class="deals_item_price_a ml-auto">${{$item->product_price}}</div>
                                    </div>
                                    <div class="deals_info_line d-flex flex-row justify-content-start">
                                        <div class="deals_item_name">{{$item->selling_price}}</div>
                                        <div class="deals_item_price ml-auto">${{$item->discount_price}}</div>
                                    </div>
                                    <div class="available">
                                        <div class="available_line d-flex flex-row justify-content-start">
                                            <div class="available_title">Available: <span>6</span></div>
                                            <div class="sold_title ml-auto">Already sold: <span>28</span>
                                            </div>
                                        </div>
                                        <div class="available_bar"><span style="width:17%"></span></div>
                                    </div>
                                    <div class="deals_timer d-flex flex-row align-items-center justify-content-start">
                                        <div class="deals_timer_title_container">
                                            <div class="deals_timer_title">Hurry Up</div>
                                            <div class="deals_timer_subtitle">Offer ends in:</div>
                                        </div>
                                        <div class="deals_timer_content ml-auto">
                                            <div class="deals_timer_box clearfix" data-target-time="">
                                                <div class="deals_timer_unit">
                                                    <div id="deals_timer1_hr" class="deals_timer_hr"></div>
                                                    <span>hours</span>
                                                </div>
                                                <div class="deals_timer_unit">
                                                    <div id="deals_timer1_min" class="deals_timer_min">
                                                    </div>
                                                    <span>mins</span>
                                                </div>
                                                <div class="deals_timer_unit">
                                                    <div id="deals_timer1_sec" class="deals_timer_sec">
                                                    </div>
                                                    <span>secs</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
@endforeach
                            <!-- Deals Item -->
                          
                        </div>

                    </div>

                    <div class="deals_slider_nav_container">
                        <div class="deals_slider_prev deals_slider_nav"><i class="fas fa-chevron-left ml-auto"></i>
                        </div>
                        <div class="deals_slider_next deals_slider_nav"><i class="fas fa-chevron-right ml-auto"></i>
                        </div>
                    </div>
                </div>

                <!-- Featured -->
                <div class="featured">
                    <div class="tabbed_container">
                        <div class="tabs">
                            <ul class="clearfix">
                                <li class="active">Featured</li>
                                <li>On Sale</li>
                                <li>Best Rated</li>
                            </ul>
                            <div class="tabs_line"><span></span></div>
                        </div>

                        <!-- Product Panel -->
                        <div class="product_panel panel active">
                            <div class="featured_slider slider">
                                @foreach($feachereds as $item)
                                <!-- Slider Item -->
                                <div class="featured_slider_item">
                                    <div class="border_active"></div>
                                    <div
                                        class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                        <a href="{{ route('singleproduct.show',$item->id) }}">
                                        <div
                                            class="product_image d-flex flex-column align-items-center justify-content-center">
                                           <img src="{{ asset('product_images/'.$item->image_one) }}" style="width: 130px;height: 125px;">

                                        </div>
                                        </a>
                                        <div class="product_content">
                                            @if($item->discount_price == null)
                                              <div class="product_price discount">{{ $item->selling_price }}</div>
                                            @else
                                              <div class="product_price discount">${{ $item->discount_price }}<span>${{ $item->selling_price }}</span></div>
                                            @endif
                                          
                                            <div class="product_name">
                                                <div>{{ $item->product_name }}</div>
                                            </div>
                                            <div class="product_extras">
                                                <div class="product_color">
                                                    <input type="radio" checked name="product_color"
                                                        style="background:#b19c83">
                                                    <input type="radio" name="product_color" style="background:#000000">
                                                    <input type="radio" name="product_color" style="background:#999999">
                                                </div>
                                             
                                                <button type="submit" class="product_cart_button adddcart" data-toggle="modal" data-target="#cartmodal" id="{{ $item->id }} " onclick="productview(this.id)" >BUY NOW</button>


                                            

                                            </div>
                                        </div>
                                        <!-- <button  class="addwish" data-id={{ $item->id }}> -->
                                        <button  class="addwish" id="{{$item->id}}"  onclick="addwish(this.id)">

                                        <div class="product_fav">
                                            
                                            <i class="fas fa-heart"></i>

                                        </div>
                                       </button>
                                        <ul class="product_marks">
                                            
                                         @if($item->discount_price == null)
                                          <li class="product_mark product_discount " style="background:blue;">new</li>
                                            @else
                                             @php
                                        $amout=$item->selling_price-$item->discount_price;
                                        @endphp
                                            <li class="product_mark product_discount">{{ round($amout/$item->selling_price*100) }}%</li>
                                            @endif
                                           
                                           
                                        </ul>
                                    </div>
                                </div>
                                @endforeach


                            </div>
                            <div class="featured_slider_dots_cover"></div>
                        </div>

                        <!-- Product Panel -->
                  
                        <div class="product_panel panel">
                            <div class="featured_slider slider">
                                @foreach($tends as $item)
                                <!-- Slider Item -->
                                <div class="featured_slider_item">
                                    <div class="border_active"></div>
                                    <div
                                        class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                          <a href="{{ route('singleproduct.show',$item->id) }}">
                                        <div
                                            class="product_image d-flex flex-column align-items-center justify-content-center">
                                            <img src="{{ asset('product_images/'.$item->image_one) }}" style="width: 130px;height: 125px;">
                                        </div>
                                    </a>
                                        <div class="product_content">
                                             @if($item->discount_price == null)
                                              <div class="product_price discount">{{ $item->selling_price }}</div>
                                            @else
                                              <div class="product_price discount">${{ $item->discount_price }}<span>${{ $item->selling_price }}</span></div>
                                            @endif
                                            <div class="product_name">
                                                <div>{{ $item->product_name }}</div>
                                            </div>
                                            <div class="product_extras">
                                                <div class="product_color">
                                                    <input type="radio" checked name="product_color"
                                                        style="background:#b19c83">
                                                    <input type="radio" name="product_color" style="background:#000000">
                                                    <input type="radio" name="product_color" style="background:#999999">
                                                </div>
                                                <button type="submit" class="product_cart_button addcart" data-toggle="modal" data-target="#cartmodal" id="{{ $item->id }} " onclick="productview(this.id)" >BUY NOW</button>
                                            </div>
                                        </div>
                                         <button  class="addwish" id="{{$item->id}}"  onclick="addwish(this.id)">

                                        <div class="product_fav">
                                            
                                            <i class="fas fa-heart"></i>

                                        </div>
                                       </button>
                                        <ul class="product_marks">

                                            @if($item->discount_price == null)
                                          <li class="product_mark product_discount " style="background:blue;">new</li>
                                            @else
                                             @php
                                        $amout=$item->selling_price-$item->discount_price;
                                        @endphp
                                            <li class="product_mark product_discount">{{ round($amout/$item->selling_price*100) }}%</li>
                                            @endif
                                            
                                            
                                        </ul>
                                    </div>
                                </div>
                                @endforeach


                            </div>
                            <div class="featured_slider_dots_cover"></div>
                        </div>
                       
                        <!-- Product Panel -->


                       
                        <div class="product_panel panel">
                            <div class="featured_slider slider">
                                @foreach($best_rateds as $item)
                                <!-- Slider Item -->
                                <div class="featured_slider_item">
                                    <div class="border_active"></div>
                                    <div
                                        class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                         <a href="{{ route('singleproduct.show',$item->id) }}">
                                        <div
                                            class="product_image d-flex flex-column align-items-center justify-content-center">
                                             <img src="{{ asset('product_images/'.$item->image_one) }}"style="width: 130px;height: 125px;">
                                        </div>
                                    </a>
                                        <div class="product_content">
                                              @if($item->discount_price == null)
                                              <div class="product_price discount">{{ $item->selling_price }}</div>
                                            @else
                                              <div class="product_price discount">${{ $item->discount_price }}<span>${{ $item->selling_price }}</span></div>
                                            @endif
                                            <div class="product_name">
                                                <div>{{ $item->product_name }}</div>
                                            </div>
                                            <div class="product_extras">
                                                <div class="product_color">
                                                    <input type="radio" checked name="product_color"
                                                        style="background:#b19c83">
                                                    <input type="radio" name="product_color" style="background:#000000">
                                                    <input type="radio" name="product_color" style="background:#999999">
                                                </div>
                                           
                                                <button type="submit" class="product_cart_button addcart" data-toggle="modal" data-target="#cartmodal" id="{{ $item->id }} " onclick="productview(this.id)" >BUY NOW</button>
                                            </div>
                                        </div>
                                         <button  class="addwish" id="{{$item->id}}"  onclick="addwish(this.id)">

                                        <div class="product_fav">
                                            
                                            <i class="fas fa-heart"></i>

                                        </div>
                                       </button>
                                        <ul class="product_marks">
                                            @if($item->discount_price == null)
                                          <li class="product_mark product_discount " style="background:blue;">new</li>
                                            @else
                                             @php
                                        $amout=$item->selling_price-$item->discount_price;
                                        @endphp
                                            <li class="product_mark product_discount">{{ round($amout/$item->selling_price*100) }}%</li>
                                            @endif
                                            
                                           
                                           
                                            
                                        </ul>
                                    </div>
                                </div>

                                @endforeach
                            </div>
                            <div class="featured_slider_dots_cover"></div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<!-- Popular Categories -->

<div class="popular_categories">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="popular_categories_content">
                    <div class="popular_categories_title">Popular Categories</div>
                    <div class="popular_categories_slider_nav">
                        <div class="popular_categories_prev popular_categories_nav"><i
                                class="fas fa-angle-left ml-auto"></i></div>
                        <div class="popular_categories_next popular_categories_nav"><i
                                class="fas fa-angle-right ml-auto"></i></div>
                    </div>
                    <div class="popular_categories_link"><a href="#">full catalog</a></div>
                </div>
            </div>

            <!-- Popular Categories Slider -->

            <div class="col-lg-9">
                <div class="popular_categories_slider_container">
                    <div class="owl-carousel owl-theme popular_categories_slider">
                @foreach($categories as $item)
                        <!-- Popular Categories Item -->
                        <div class="owl-item">
                            <div class="popular_category d-flex flex-column align-items-center justify-content-center">
                                <div class="popular_category_image"><img
                                        src="{{ asset('frontend') }}/images/popular_1.png" alt="">
                                </div>
                                <div class="popular_category_text">{{ $item->category_name }}</div>
                            </div>
                        </div>
                @endforeach             
        </div>
    </div>
</div>

<!-- Banner -->

<div class="banner_2">
    <div class="banner_2_background"
        style="background-image:url({{ asset('frontend') }}/images/banner_2_background.jpg)"></div>
    <div class="banner_2_container">
        <div class="banner_2_dots"></div>
        <!-- Banner 2 Slider -->

        <div class="owl-carousel owl-theme banner_2_slider">


@foreach($middle_sliders as $item)
            <!-- Banner 2 Slider Item -->
            <div class="owl-item">
                <div class="banner_2_item">
                    <div class="container fill_height">
                        <div class="row fill_height">
                            <div class="col-lg-4 col-md-6 fill_height">
                                <div class="banner_2_content">
                                    <div class="banner_2_category"><h4></h3>{{ @$item->category->name }}</h4></div>

                                    <div class="banner_2_title">{{ $item->product_name }}</div>
                                     <div class="banner_2_title"><h4>{{ @$item->brand->brand_name }}</h4></div><br>
                                    <div class="banner_2_text"><h2>${{ $item->selling_price }}</h2></div>
                                    <div class="rating_r rating_r_4 banner_2_rating">
                                        <i></i><i></i><i></i><i></i><i></i></div>
                                    <div class="button banner_2_button"><a href="#">Explore</a></div>
                                </div>

                            </div>
                            <div class="col-lg-8 col-md-6 fill_height">
                                <div class="banner_2_image_container">
                                    <div class="banner_2_image">
                                            <img src="{{ asset('product_images/'.$item->image_two) }}" style="width: 650px;height: 400px;">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

          @endforeach


        </div>
    </div>
</div>

<!-- Hot New Arrivals -->

	<div class="new_arrivals">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="tabbed_container">
						<div class="tabs clearfix tabs-right">
							<div class="new_arrivals_title">BMW</div>
							<ul class="clearfix">
								<li class="active">Featured</li>
								
								
							</ul>
							<div class="tabs_line"><span></span></div>
						</div>
						<div class="row">
							<div class="col-lg-9" style="z-index:1;">

								<!-- Product Panel -->
								<div class="product_panel panel active">
									<div class="arrivals_slider slider">




										 @php
                        $cat=DB::table('categories')->first();
                        $catid=$cat->id;
                        $mobiles=\App\Models\Product::with('brand','category')->where('status',1)->where('category_id',$catid)->limit(12)->get();
                        @endphp

                            @foreach($mobiles as $item)

                                    <!-- Slider Item -->
                                    <div class="arrivals_slider_item">
                                        <div class="border_active"></div>
                                        <div
                                            class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                            <a href="{{ route('singleproduct.show',$item->id) }}">
                                            <div
                                                class="product_image d-flex flex-column align-items-center justify-content-center">
                                              <img src="{{ asset('product_images/'.$item->image_one) }}" style="width: 130px;height: 125px;">
                                            </div>
                                        </a>
                                            <div class="product_content">
                                                @if($item->discount_price == null)
                                              <div class="product_price discount">{{ $item->selling_price }}</div>
                                            @else
                                              <div class="product_price discount">${{ $item->discount_price }}<span>${{ $item->selling_price }}</span></div>
                                            @endif

                                                

                                                <div class="product_name">
                                                    <div>{{ $item->product_name }}</div>
                                                </div>
                                                <div class="product_extras">
                                                    <div class="product_color">
                                                        <input type="radio" checked name="product_color"
                                                            style="background:#b19c83">
                                                        <input type="radio" name="product_color"
                                                            style="background:#000000">
                                                        <input type="radio" name="product_color"
                                                            style="background:#999999">
                                                    </div>
                                                    <button type="submit" class="product_cart_button addcart" data-toggle="modal" data-target="#cartmodal" id="{{ $item->id }} " onclick="productview(this.id)" >BUY NOW</button>
                                                </div>
                                            </div>
                                            
                                             <button  class="addwish" data-id={{ $item->id }}>
                                            <div class="product_fav"><i class="fas fa-heart"></i></div>

                                            <ul class="product_marks">

                                                @php
                                                $amount= $item->selling_price - $item->discount_price;
                                                @endphp

                                                @if($item->discount_price == null)
                                                  <li class="product_mark product_new" style="background:blue;">new</li>

                                                @else
                                                 <li class="product_mark product_new">{{ round($amount/$item->selling_price*100 )}}%</li>
                                                @endif
                                             
                                               
                                            </ul>
                                        </div>
                                    </div>
                                  
                                    @endforeach




									</div>
									<div class="arrivals_slider_dots_cover"></div>
								</div>

							</div>

                    
							<div class="col-lg-3">
					
                         @php
                        $category=DB::table('categories')->first();
                        $cat_id=$category->id;
                        $mobile=\App\Models\Product::with('brand','category')->where('status',1)->where('category_id',$cat_id)->first();
                        @endphp

                           
								<div class="arrivals_single clearfix">
									<div class="d-flex flex-column align-items-center justify-content-center">
										<div class="arrivals_single_image"> 
                                            <img src="{{asset('product_images/'.@$mobile->image_two)}}" style="width: 215px;height: 200px;"></div>
										<div class="arrivals_single_content">
											<div class="arrivals_single_category"><a href="#"></a></div>
											<div class="arrivals_single_name_container clearfix">
												<div class="arrivals_single_name"><a href="#">{{@$mobile->product_name}}</a></div>
												<div class="arrivals_single_price text-right">{{@$mobile->selling_price}}</div>
											</div>
											<div class="rating_r rating_r_4 arrivals_single_rating"></div>
											<form action="#"><button type="submit" class="arrivals_single_button" data-toggle="modal" data-target="#cartmodal" id="{{ $item->id }} " onclick="productview(this.id)">BUY NOW</button></form>
											
										</div>
										<div class="arrivals_single_fav product_fav active"><i class="fas fa-heart"></i></div>
										<ul class="arrivals_single_marks product_marks">
											<li class="arrivals_single_mark product_mark product_new">new</li>
										</ul>
									</div>
								</div>
						
								
							</div>
                            
						</div>
								
					</div>
				</div>
			</div>
		</div>		
	</div>

<!-- end -->
	<!-- Best Sellers -->






<!-- Hot New Arrivals -->

	<div class="new_arrivals">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="tabbed_container">
						<div class="tabs clearfix tabs-right">
							<div class="new_arrivals_title">LAMBORGINI</div>
							<ul class="clearfix">
								<li class="active">Featured</li>
								
								
							</ul>
							<div class="tabs_line"><span></span></div>
						</div>
						<div class="row">
							<div class="col-lg-9" style="z-index:1;">

								<!-- Product Panel -->
								<div class="product_panel panel active">
									<div class="arrivals_slider slider">




						@php
                        $watch=DB::table('categories')->skip(2)->first();
                        // ->skip(1)->limit(12)->get()
                        $watchid=$watch->id;
                        $watch_products=\App\Models\Product::with('brand','category')->where('status',1)->where('category_id',$watchid)->get();
                        @endphp

                            @foreach($watch_products as $item)

                                    <!-- Slider Item -->
                                    <div class="arrivals_slider_item">
                                        <div class="border_active"></div>
                                        <div
                                            class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                            <a href="{{ route('singleproduct.show',$item->id) }}">
                                            <div
                                                class="product_image d-flex flex-column align-items-center justify-content-center">
                                              <img src="{{ asset('product_images/'.$item->image_one) }}" style="width: 130px;height: 125px;">
                                            </div>
                                        </a>
                                            <div class="product_content">
                                                @if($item->discount_price == null)
                                              <div class="product_price discount">{{ $item->selling_price }}</div>
                                            @else
                                              <div class="product_price discount">${{ $item->discount_price }}<span>${{ $item->selling_price }}</span></div>
                                            @endif

                                                

                                                <div class="product_name">
                                                    <div>{{ $item->product_name }}</div>
                                                </div>
                                                <div class="product_extras">
                                                    <div class="product_color">
                                                        <input type="radio" checked name="product_color"
                                                            style="background:#b19c83">
                                                        <input type="radio" name="product_color"
                                                            style="background:#000000">
                                                        <input type="radio" name="product_color"
                                                            style="background:#999999">
                                                    </div>
                                                    <button type="submit" class="product_cart_button addcart" data-toggle="modal" data-target="#cartmodal" id="{{ $item->id }} " onclick="productview(this.id)" >BUY NOW</button>
                                                </div>
                                            </div>
                                            
                                             <button  class="addwish" data-id={{ $item->id }}>
                                            <div class="product_fav"><i class="fas fa-heart"></i></div>

                                            <ul class="product_marks">

                                                @php
                                                $amount= $item->selling_price - $item->discount_price;
                                                @endphp

                                                @if($item->discount_price == null)
                                                  <li class="product_mark product_new" style="background:blue;">new</li>

                                                @else
                                                 <li class="product_mark product_new">{{ round($amount/$item->selling_price*100 )}}%</li>
                                                @endif
                                             
                                               
                                            </ul>
                                        </div>
                                    </div>
                                  
                                    @endforeach




									</div>
									<div class="arrivals_slider_dots_cover"></div>
								</div>

							</div>

                    
							<div class="col-lg-3">
					
                         @php
                        $category=DB::table('categories')->skip(2)->first();
                        $cat_idd=$category->id;
                        $watch=\App\Models\Product::with('brand','category')->where('status',1)->where('category_id',$cat_idd)->first();
                        @endphp

                           
								<div class="arrivals_single clearfix">
									<div class="d-flex flex-column align-items-center justify-content-center">
										<div class="arrivals_single_image"> <img src="{{asset('product_images/'.@$watch->image_two)}}"style="width: 215px;height: 200px;"></div>
										<div class="arrivals_single_content">
											<div class="arrivals_single_category"><a href="#"></a></div>
											<div class="arrivals_single_name_container clearfix">
												<div class="arrivals_single_name"><a href="#"></a></div>
												<div class="arrivals_single_price text-right"></div>
											</div>
											<div class="rating_r rating_r_4 arrivals_single_rating"><i></i><i></i><i></i><i></i><i></i></div>
											<form action="#"><button type="submit" class="arrivals_single_button" data-toggle="modal" data-target="#cartmodal" id="{{ $item->id }} " onclick="productview(this.id)">BUY NOW</button></form>
											
										</div>
										<div class="arrivals_single_fav product_fav active"><i class="fas fa-heart"></i></div>
										<ul class="arrivals_single_marks product_marks">
											<li class="arrivals_single_mark product_mark product_new">new</li>
										</ul>
									</div>
								</div>
						
								
							</div>
                            
						</div>
								
					</div>
				</div>
			</div>
		</div>		
	</div>

<!-- end -->







<!-- Hot New Arrivals -->

	<div class="new_arrivals">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="tabbed_container">
						<div class="tabs clearfix tabs-right">
							<div class="new_arrivals_title">FERRARI</div>
							<ul class="clearfix">
								<li class="active">Featured</li>
								
								
							</ul>
							<div class="tabs_line"><span></span></div>
						</div>
						<div class="row">
							<div class="col-lg-9" style="z-index:1;">

								<!-- Product Panel -->
								<div class="product_panel panel active">
									<div class="arrivals_slider slider">




					  @php
                        $laptop=DB::table('categories')->skip(4)->first();
                        // ->skip(1)->limit(12)->get()
                        $laptopid=$laptop->id;
                        $laptops=\App\Models\Product::with('brand','category')->where('status',1)->where('category_id',$laptopid)->limit(10)->get();
                        @endphp

                            @foreach($laptops as $item)
                                    <!-- Slider Item -->
                                    <div class="arrivals_slider_item">
                                        <div class="border_active"></div>
                                        <div
                                            class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                            <a href="{{ route('singleproduct.show',$item->id) }}">
                                            <div
                                                class="product_image d-flex flex-column align-items-center justify-content-center">
                                              <img src="{{ asset('product_images/'.$item->image_one) }}" style="width: 130px;height: 125px;">
                                            </div>
                                        </a>
                                            <div class="product_content">
                                                @if($item->discount_price == null)
                                              <div class="product_price discount">{{ $item->selling_price }}</div>
                                            @else
                                              <div class="product_price discount">${{ $item->discount_price }}<span>${{ $item->selling_price }}</span></div>
                                            @endif

                                                

                                                <div class="product_name">
                                                    <div>{{ $item->product_name }}</div>
                                                </div>
                                                <div class="product_extras">
                                                    <div class="product_color">
                                                        <input type="radio" checked name="product_color"
                                                            style="background:#b19c83">
                                                        <input type="radio" name="product_color"
                                                            style="background:#000000">
                                                        <input type="radio" name="product_color"
                                                            style="background:#999999">
                                                    </div>
                                                    <button type="submit" class="product_cart_button addcart" data-toggle="modal" data-target="#cartmodal" id="{{ $item->id }} " onclick="productview(this.id)" >BUY NOW</button>
                                                </div>
                                            </div>
                                            
                                             <button  class="addwish" data-id={{ $item->id }}>
                                            <div class="product_fav"><i class="fas fa-heart"></i></div>

                                            <ul class="product_marks">

                                                @php
                                                $amount= $item->selling_price - $item->discount_price;
                                                @endphp

                                                @if($item->discount_price == null)
                                                  <li class="product_mark product_new" style="background:blue;">new</li>

                                                @else
                                                 <li class="product_mark product_new">{{ round($amount/$item->selling_price*100 )}}%</li>
                                                @endif
                                             
                                               
                                            </ul>
                                        </div>
                                    </div>
                                  
                                    @endforeach




									</div>
									<div class="arrivals_slider_dots_cover"></div>
								</div>

							</div>

                    
							<div class="col-lg-3">
					
                         @php
                        $categoryy=DB::table('categories')->skip(4)->first();
                        $cat_iddd=$categoryy->id;
                        $laptop=\App\Models\Product::with('brand','category')->where('status',1)->where('category_id',$cat_iddd)->first();
                        @endphp

                           
								<div class="arrivals_single clearfix">
									<div class="d-flex flex-column align-items-center justify-content-center">
										<div class="arrivals_single_image"> <img src="{{asset('product_images/'.@$laptop->image_two)}}"style="width: 215px;height: 200px;"></div>
										<div class="arrivals_single_content">
											<div class="arrivals_single_category"><a href="#"></a></div>
											<div class="arrivals_single_name_container clearfix">
												<div class="arrivals_single_name"><a href="#">{{@$laptop->product_name}}</a></div>
												<div class="arrivals_single_price text-right">{{@$laptop->selling_price}}</div>
											</div>
											<div class="rating_r rating_r_4 arrivals_single_rating"></div>
											<form action="#"><button type="submit" class="arrivals_single_button" data-toggle="modal" data-target="#cartmodal" id="{{ $item->id }} " onclick="productview(this.id)">BUY NOW</button></form>
											
										</div>
										<div class="arrivals_single_fav product_fav active"><i class="fas fa-heart"></i></div>
										<ul class="arrivals_single_marks product_marks">
											<li class="arrivals_single_mark product_mark product_new">new</li>
										</ul>
									</div>
								</div>
						
								
							</div>
                            
						</div>
								
					</div>
				</div>
			</div>
		</div>		
	</div>

<!-- end -->

















   





<!-- Best Sellers -->

<div class="best_sellers">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="tabbed_container">
                    <div class="tabs clearfix tabs-right">
                        <div class="new_arrivals_title">Hot And Best Rated Product
                         
                          </div>
                        <ul class="clearfix">
                            <li class="active"></li>
                          
                        </ul>
                        <div class="tabs_line"><span></span></div>
                    </div>

                    <div class="bestsellers_panel panel active">

                        <!-- Best Sellers Slider -->

                        <div class="bestsellers_slider slider">

                       
                            @foreach($best_sellers as $item)
                            <!-- Best Sellers Item -->
                            <div class="bestsellers_item discount">
                                <div
                                    class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                    <a href="{{ route('singleproduct.show',$item->id) }}">
                                    <div class="bestsellers_image"><img src="{{asset('product_images/'.$item->image_one)}}"
                                            alt="" style="width: 130px;height: 125px;"></div></a>
                                    <div class="bestsellers_content">
                                        <div class="bestsellers_category"><a href="#"></a></div>
                                        <div class="bestsellers_name">
                                                {{$item->product_name}}</div>
                                        <div class="rating_r rating_r_4 bestsellers_rating">
                                            <i></i><i></i><i></i><i></i><i></i></div>
                                         @if($item->discount_price == null)
                                              <div class="product_price discount">{{ $item->selling_price }}</div>
                                            @else
                                              <div class="product_price discount">${{ $item->discount_price }}<span>${{ $item->selling_price }}</span></div>
                                            @endif
                                    </div>
                                </div>
                                <div class="bestsellers_fav active"><i class="fas fa-heart"></i></div>
                                <ul class="bestsellers_marks">
                                    <li class="bestsellers_mark bestsellers_discount">
                                        @if(!$item->discount_price == NULL)
                                        <?php 
                                        $discount=$item->selling_price - $item->discount_price;

                                         ?>

                                       {{ $discount/$item->selling_price*100 }}%


                                    </li>
                                    @else
                                    <li class="bestsellers_mark bestsellers_new">new</li>
                                    @endif
                                </ul>
                            </div>
                             @endforeach


                                </div>
                              
                                <ul class="bestsellers_marks">
                                    <li class="bestsellers_mark bestsellers_discount">-25%</li>
                                    <li class="bestsellers_mark bestsellers_new">new</li>
                                </ul>
                            </div>

                            <!-- Best Sellers Item -->
                          

                        </div>
                    </div>

                    <div class="bestsellers_panel panel">

                        <!-- Best Sellers Slider -->

                        <div class="bestsellers_slider slider">

                            <!-- Best Sellers Item -->
                            <div class="bestsellers_item discount">
                                <div
                                    class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                    <div class="bestsellers_image"><img src="{{ asset('frontend') }}/images/best_1.png"
                                            alt=""></div>
                                    <div class="bestsellers_content">
                                        <div class="bestsellers_category"><a href="#">Headphones</a></div>
                                        <div class="bestsellers_name"><a href="product.html">Xiaomi Redmi
                                                Note
                                                4</a></div>
                                        <div class="rating_r rating_r_4 bestsellers_rating">
                                            <i></i><i></i><i></i><i></i><i></i></div>
                                        <div class="bestsellers_price discount">$225<span>$300</span></div>
                                    </div>
                                </div>
                                <div class="bestsellers_fav active"><i class="fas fa-heart"></i></div>
                                <ul class="bestsellers_marks">
                                    <li class="bestsellers_mark bestsellers_discount">-25%</li>
                                    <li class="bestsellers_mark bestsellers_new">new</li>
                                </ul>
                            </div>

                            <!-- Best Sellers Item -->
                            <div class="bestsellers_item discount">
                                <div
                                    class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                    <div class="bestsellers_image"><img src="{{ asset('frontend') }}/images/best_2.png"
                                            alt=""></div>
                                    <div class="bestsellers_content">
                                        <div class="bestsellers_category"><a href="#">Headphones</a></div>
                                        <div class="bestsellers_name"><a href="product.html">Xiaomi Redmi
                                                Note
                                                4</a></div>
                                        <div class="rating_r rating_r_4 bestsellers_rating">
                                            <i></i><i></i><i></i><i></i><i></i></div>
                                        <div class="bestsellers_price discount">$225<span>$300</span></div>
                                    </div>
                                </div>
                                <div class="bestsellers_fav"><i class="fas fa-heart"></i></div>
                                <ul class="bestsellers_marks">
                                    <li class="bestsellers_mark bestsellers_discount">-25%</li>
                                    <li class="bestsellers_mark bestsellers_new">new</li>
                                </ul>
                            </div>

                            <!-- Best Sellers Item -->
                            <div class="bestsellers_item">
                                <div
                                    class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                    <div class="bestsellers_image"><img src="{{ asset('frontend') }}/images/best_3.png"
                                            alt=""></div>
                                    <div class="bestsellers_content">
                                        <div class="bestsellers_category"><a href="#">Headphones</a></div>
                                        <div class="bestsellers_name"><a href="product.html">Xiaomi Redmi
                                                Note
                                                4</a></div>
                                        <div class="rating_r rating_r_4 bestsellers_rating">
                                            <i></i><i></i><i></i><i></i><i></i></div>
                                        <div class="bestsellers_price discount">$225<span>$300</span></div>
                                    </div>
                                </div>
                                <div class="bestsellers_fav"><i class="fas fa-heart"></i></div>
                                <ul class="bestsellers_marks">
                                    <li class="bestsellers_mark bestsellers_discount">-25%</li>
                                    <li class="bestsellers_mark bestsellers_new">new</li>
                                </ul>
                            </div>

                            <!-- Best Sellers Item -->
                            <div class="bestsellers_item">
                                <div
                                    class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                    <div class="bestsellers_image"><img src="{{ asset('frontend') }}/images/best_4.png"
                                            alt=""></div>
                                    <div class="bestsellers_content">
                                        <div class="bestsellers_category"><a href="#">Headphones</a></div>
                                        <div class="bestsellers_name"><a href="product.html">Xiaomi Redmi
                                                Note
                                                4</a></div>
                                        <div class="rating_r rating_r_4 bestsellers_rating">
                                            <i></i><i></i><i></i><i></i><i></i></div>
                                        <div class="bestsellers_price discount">$225<span>$300</span></div>
                                    </div>
                                </div>
                                <div class="bestsellers_fav"><i class="fas fa-heart"></i></div>
                                <ul class="bestsellers_marks">
                                    <li class="bestsellers_mark bestsellers_discount">-25%</li>
                                    <li class="bestsellers_mark bestsellers_new">new</li>
                                </ul>
                            </div>

                            <!-- Best Sellers Item -->
                            <div class="bestsellers_item discount">
                                <div
                                    class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                    <div class="bestsellers_image"><img src="{{ asset('frontend') }}/images/best_5.png"
                                            alt=""></div>
                                    <div class="bestsellers_content">
                                        <div class="bestsellers_category"><a href="#">Headphones</a></div>
                                        <div class="bestsellers_name"><a href="product.html">Xiaomi Redmi
                                                Note
                                                4</a></div>
                                        <div class="rating_r rating_r_4 bestsellers_rating">
                                            <i></i><i></i><i></i><i></i><i></i></div>
                                        <div class="bestsellers_price discount">$225<span>$300</span></div>
                                    </div>
                                </div>
                                <div class="bestsellers_fav active"><i class="fas fa-heart"></i></div>
                                <ul class="bestsellers_marks">
                                    <li class="bestsellers_mark bestsellers_discount">-25%</li>
                                    <li class="bestsellers_mark bestsellers_new">new</li>
                                </ul>
                            </div>

                            <!-- Best Sellers Item -->
                            <div class="bestsellers_item">
                                <div
                                    class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                    <div class="bestsellers_image"><img src="{{ asset('frontend') }}/images/best_6.png"
                                            alt=""></div>
                                    <div class="bestsellers_content">
                                        <div class="bestsellers_category"><a href="#">Headphones</a></div>
                                        <div class="bestsellers_name"><a href="product.html">Xiaomi Redmi
                                                Note
                                                4</a></div>
                                        <div class="rating_r rating_r_4 bestsellers_rating">
                                            <i></i><i></i><i></i><i></i><i></i></div>
                                        <div class="bestsellers_price discount">$225<span>$300</span></div>
                                    </div>
                                </div>
                                <div class="bestsellers_fav active"><i class="fas fa-heart"></i></div>
                                <ul class="bestsellers_marks">
                                    <li class="bestsellers_mark bestsellers_discount">-25%</li>
                                    <li class="bestsellers_mark bestsellers_new">new</li>
                                </ul>
                            </div>

                            <!-- Best Sellers Item -->
                            <div class="bestsellers_item discount">
                                <div
                                    class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                    <div class="bestsellers_image"><img src="{{ asset('frontend') }}/images/best_1.png"
                                            alt=""></div>
                                    <div class="bestsellers_content">
                                        <div class="bestsellers_category"><a href="#">Headphones</a></div>
                                        <div class="bestsellers_name"><a href="product.html">Xiaomi Redmi
                                                Note
                                                4</a></div>
                                        <div class="rating_r rating_r_4 bestsellers_rating">
                                            <i></i><i></i><i></i><i></i><i></i></div>
                                        <div class="bestsellers_price discount">$225<span>$300</span></div>
                                    </div>
                                </div>
                                <div class="bestsellers_fav active"><i class="fas fa-heart"></i></div>
                                <ul class="bestsellers_marks">
                                    <li class="bestsellers_mark bestsellers_discount">-25%</li>
                                    <li class="bestsellers_mark bestsellers_new">new</li>
                                </ul>
                            </div>

                            <!-- Best Sellers Item -->
                            <div class="bestsellers_item discount">
                                <div
                                    class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                    <div class="bestsellers_image"><img src="{{ asset('frontend') }}/images/best_2.png"
                                            alt=""></div>
                                    <div class="bestsellers_content">
                                        <div class="bestsellers_category"><a href="#">Headphones</a></div>
                                        <div class="bestsellers_name"><a href="product.html">Xiaomi Redmi
                                                Note
                                                4</a></div>
                                        <div class="rating_r rating_r_4 bestsellers_rating">
                                            <i></i><i></i><i></i><i></i><i></i></div>
                                        <div class="bestsellers_price discount">$225<span>$300</span></div>
                                    </div>
                                </div>
                                <div class="bestsellers_fav"><i class="fas fa-heart"></i></div>
                                <ul class="bestsellers_marks">
                                    <li class="bestsellers_mark bestsellers_discount">-25%</li>
                                    <li class="bestsellers_mark bestsellers_new">new</li>
                                </ul>
                            </div>

                            <!-- Best Sellers Item -->
                            <div class="bestsellers_item">
                                <div
                                    class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                    <div class="bestsellers_image"><img src="{{ asset('frontend') }}/images/best_3.png"
                                            alt=""></div>
                                    <div class="bestsellers_content">
                                        <div class="bestsellers_category"><a href="#">Headphones</a></div>
                                        <div class="bestsellers_name"><a href="product.html">Xiaomi Redmi
                                                Note
                                                4</a></div>
                                        <div class="rating_r rating_r_4 bestsellers_rating">
                                            <i></i><i></i><i></i><i></i><i></i></div>
                                        <div class="bestsellers_price discount">$225<span>$300</span></div>
                                    </div>
                                </div>
                                <div class="bestsellers_fav"><i class="fas fa-heart"></i></div>
                                <ul class="bestsellers_marks">
                                    <li class="bestsellers_mark bestsellers_discount">-25%</li>
                                    <li class="bestsellers_mark bestsellers_new">new</li>
                                </ul>
                            </div>

                            <!-- Best Sellers Item -->
                            <div class="bestsellers_item">
                                <div
                                    class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                    <div class="bestsellers_image"><img src="{{ asset('frontend') }}/images/best_4.png"
                                            alt=""></div>
                                    <div class="bestsellers_content">
                                        <div class="bestsellers_category"><a href="#">Headphones</a></div>
                                        <div class="bestsellers_name"><a href="product.html">Xiaomi Redmi
                                                Note
                                                4</a></div>
                                        <div class="rating_r rating_r_4 bestsellers_rating">
                                            <i></i><i></i><i></i><i></i><i></i></div>
                                        <div class="bestsellers_price discount">$225<span>$300</span></div>
                                    </div>
                                </div>
                                <div class="bestsellers_fav"><i class="fas fa-heart"></i></div>
                                <ul class="bestsellers_marks">
                                    <li class="bestsellers_mark bestsellers_discount">-25%</li>
                                    <li class="bestsellers_mark bestsellers_new">new</li>
                                </ul>
                            </div>

                            <!-- Best Sellers Item -->
                            <div class="bestsellers_item discount">
                                <div
                                    class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                    <div class="bestsellers_image"><img src="{{ asset('frontend') }}/images/best_5.png"
                                            alt=""></div>
                                    <div class="bestsellers_content">
                                        <div class="bestsellers_category"><a href="#">Headphones</a></div>
                                        <div class="bestsellers_name"><a href="product.html">Xiaomi Redmi
                                                Note
                                                4</a></div>
                                        <div class="rating_r rating_r_4 bestsellers_rating">
                                            <i></i><i></i><i></i><i></i><i></i></div>
                                        <div class="bestsellers_price discount">$225<span>$300</span></div>
                                    </div>
                                </div>
                                <div class="bestsellers_fav active"><i class="fas fa-heart"></i></div>
                                <ul class="bestsellers_marks">
                                    <li class="bestsellers_mark bestsellers_discount">-25%</li>
                                    <li class="bestsellers_mark bestsellers_new">new</li>
                                </ul>
                            </div>

                            <!-- Best Sellers Item -->
                            <div class="bestsellers_item">
                                <div
                                    class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                    <div class="bestsellers_image"><img src="{{ asset('frontend') }}/images/best_6.png"
                                            alt=""></div>
                                    <div class="bestsellers_content">
                                        <div class="bestsellers_category"><a href="#">Headphones</a></div>
                                        <div class="bestsellers_name"><a href="product.html">Xiaomi Redmi
                                                Note
                                                4</a></div>
                                        <div class="rating_r rating_r_4 bestsellers_rating">
                                            <i></i><i></i><i></i><i></i><i></i></div>
                                        <div class="bestsellers_price discount">$225<span>$300</span></div>
                                    </div>
                                </div>
                                <div class="bestsellers_fav active"><i class="fas fa-heart"></i></div>
                                <ul class="bestsellers_marks">
                                    <li class="bestsellers_mark bestsellers_discount">-25%</li>
                                    <li class="bestsellers_mark bestsellers_new">new</li>
                                </ul>
                            </div>

                        </div>
                    </div>

                    <div class="bestsellers_panel panel">

                        <!-- Best Sellers Slider -->

                        <div class="bestsellers_slider slider">

                            <!-- Best Sellers Item -->
                            <div class="bestsellers_item discount">
                                <div
                                    class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                    <div class="bestsellers_image"><img src="{{ asset('frontend') }}/images/best_1.png"
                                            alt=""></div>
                                    <div class="bestsellers_content">
                                        <div class="bestsellers_category"><a href="#">Headphones</a></div>
                                        <div class="bestsellers_name"><a href="product.html">Xiaomi Redmi
                                                Note
                                                4</a></div>
                                        <div class="rating_r rating_r_4 bestsellers_rating">
                                            <i></i><i></i><i></i><i></i><i></i></div>
                                        <div class="bestsellers_price discount">$225<span>$300</span></div>
                                    </div>
                                </div>
                                <div class="bestsellers_fav active"><i class="fas fa-heart"></i></div>
                                <ul class="bestsellers_marks">
                                    <li class="bestsellers_mark bestsellers_discount">-25%</li>
                                    <li class="bestsellers_mark bestsellers_new">new</li>
                                </ul>
                            </div>

                            <!-- Best Sellers Item -->
                            <div class="bestsellers_item discount">
                                <div
                                    class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                    <div class="bestsellers_image"><img src="{{ asset('frontend') }}/images/best_2.png"
                                            alt=""></div>
                                    <div class="bestsellers_content">
                                        <div class="bestsellers_category"><a href="#">Headphones</a></div>
                                        <div class="bestsellers_name"><a href="product.html">Xiaomi Redmi
                                                Note
                                                4</a></div>
                                        <div class="rating_r rating_r_4 bestsellers_rating">
                                            <i></i><i></i><i></i><i></i><i></i></div>
                                        <div class="bestsellers_price discount">$225<span>$300</span></div>
                                    </div>
                                </div>
                                <div class="bestsellers_fav"><i class="fas fa-heart"></i></div>
                                <ul class="bestsellers_marks">
                                    <li class="bestsellers_mark bestsellers_discount">-25%</li>
                                    <li class="bestsellers_mark bestsellers_new">new</li>
                                </ul>
                            </div>

                            <!-- Best Sellers Item -->
                            <div class="bestsellers_item">
                                <div
                                    class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                    <div class="bestsellers_image"><img src="{{ asset('frontend') }}/images/best_3.png"
                                            alt=""></div>
                                    <div class="bestsellers_content">
                                        <div class="bestsellers_category"><a href="#">Headphones</a></div>
                                        <div class="bestsellers_name"><a href="product.html">Xiaomi Redmi
                                                Note
                                                4</a></div>
                                        <div class="rating_r rating_r_4 bestsellers_rating">
                                            <i></i><i></i><i></i><i></i><i></i></div>
                                        <div class="bestsellers_price discount">$225<span>$300</span></div>
                                    </div>
                                </div>
                                <div class="bestsellers_fav"><i class="fas fa-heart"></i></div>
                                <ul class="bestsellers_marks">
                                    <li class="bestsellers_mark bestsellers_discount">-25%</li>
                                    <li class="bestsellers_mark bestsellers_new">new</li>
                                </ul>
                            </div>

                            <!-- Best Sellers Item -->
                            <div class="bestsellers_item">
                                <div
                                    class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                    <div class="bestsellers_image"><img src="{{ asset('frontend') }}/images/best_4.png"
                                            alt=""></div>
                                    <div class="bestsellers_content">
                                        <div class="bestsellers_category"><a href="#">Headphones</a></div>
                                        <div class="bestsellers_name"><a href="product.html">Xiaomi Redmi
                                                Note
                                                4</a></div>
                                        <div class="rating_r rating_r_4 bestsellers_rating">
                                            <i></i><i></i><i></i><i></i><i></i></div>
                                        <div class="bestsellers_price discount">$225<span>$300</span></div>
                                    </div>
                                </div>
                                <div class="bestsellers_fav"><i class="fas fa-heart"></i></div>
                                <ul class="bestsellers_marks">
                                    <li class="bestsellers_mark bestsellers_discount">-25%</li>
                                    <li class="bestsellers_mark bestsellers_new">new</li>
                                </ul>
                            </div>

                            <!-- Best Sellers Item -->
                            <div class="bestsellers_item discount">
                                <div
                                    class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                    <div class="bestsellers_image"><img src="{{ asset('frontend') }}/images/best_5.png"
                                            alt=""></div>
                                    <div class="bestsellers_content">
                                        <div class="bestsellers_category"><a href="#">Headphones</a></div>
                                        <div class="bestsellers_name"><a href="product.html">Xiaomi Redmi
                                                Note
                                                4</a></div>
                                        <div class="rating_r rating_r_4 bestsellers_rating">
                                            <i></i><i></i><i></i><i></i><i></i></div>
                                        <div class="bestsellers_price discount">$225<span>$300</span></div>
                                    </div>
                                </div>
                                <div class="bestsellers_fav active"><i class="fas fa-heart"></i></div>
                                <ul class="bestsellers_marks">
                                    <li class="bestsellers_mark bestsellers_discount">-25%</li>
                                    <li class="bestsellers_mark bestsellers_new">new</li>
                                </ul>
                            </div>

                            <!-- Best Sellers Item -->
                            <div class="bestsellers_item">
                                <div
                                    class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                    <div class="bestsellers_image"><img src="{{ asset('frontend') }}/images/best_6.png"
                                            alt=""></div>
                                    <div class="bestsellers_content">
                                        <div class="bestsellers_category"><a href="#">Headphones</a></div>
                                        <div class="bestsellers_name"><a href="product.html">Xiaomi Redmi
                                                Note
                                                4</a></div>
                                        <div class="rating_r rating_r_4 bestsellers_rating">
                                            <i></i><i></i><i></i><i></i><i></i></div>
                                        <div class="bestsellers_price discount">$225<span>$300</span></div>
                                    </div>
                                </div>
                                <div class="bestsellers_fav active"><i class="fas fa-heart"></i></div>
                                <ul class="bestsellers_marks">
                                    <li class="bestsellers_mark bestsellers_discount">-25%</li>
                                    <li class="bestsellers_mark bestsellers_new">new</li>
                                </ul>
                            </div>

                            <!-- Best Sellers Item -->
                            <div class="bestsellers_item discount">
                                <div
                                    class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                    <div class="bestsellers_image"><img src="{{ asset('frontend') }}/images/best_1.png"
                                            alt=""></div>
                                    <div class="bestsellers_content">
                                        <div class="bestsellers_category"><a href="#">Headphones</a></div>
                                        <div class="bestsellers_name"><a href="product.html">Xiaomi Redmi
                                                Note
                                                4</a></div>
                                        <div class="rating_r rating_r_4 bestsellers_rating">
                                            <i></i><i></i><i></i><i></i><i></i></div>
                                        <div class="bestsellers_price discount">$225<span>$300</span></div>
                                    </div>
                                </div>
                                <div class="bestsellers_fav active"><i class="fas fa-heart"></i></div>
                                <ul class="bestsellers_marks">
                                    <li class="bestsellers_mark bestsellers_discount">-25%</li>
                                    <li class="bestsellers_mark bestsellers_new">new</li>
                                </ul>
                            </div>

                            <!-- Best Sellers Item -->
                            <div class="bestsellers_item discount">
                                <div
                                    class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                    <div class="bestsellers_image"><img src="{{ asset('frontend') }}/images/best_2.png"
                                            alt=""></div>
                                    <div class="bestsellers_content">
                                        <div class="bestsellers_category"><a href="#">Headphones</a></div>
                                        <div class="bestsellers_name"><a href="product.html">Xiaomi Redmi
                                                Note
                                                4</a></div>
                                        <div class="rating_r rating_r_4 bestsellers_rating">
                                            <i></i><i></i><i></i><i></i><i></i></div>
                                        <div class="bestsellers_price discount">$225<span>$300</span></div>
                                    </div>
                                </div>
                                <div class="bestsellers_fav"><i class="fas fa-heart"></i></div>
                                <ul class="bestsellers_marks">
                                    <li class="bestsellers_mark bestsellers_discount">-25%</li>
                                    <li class="bestsellers_mark bestsellers_new">new</li>
                                </ul>
                            </div>

                            <!-- Best Sellers Item -->
                            <div class="bestsellers_item">
                                <div
                                    class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                    <div class="bestsellers_image"><img src="{{ asset('frontend') }}/images/best_3.png"
                                            alt=""></div>
                                    <div class="bestsellers_content">
                                        <div class="bestsellers_category"><a href="#">Headphones</a></div>
                                        <div class="bestsellers_name"><a href="product.html">Xiaomi Redmi
                                                Note
                                                4</a></div>
                                        <div class="rating_r rating_r_4 bestsellers_rating">
                                            <i></i><i></i><i></i><i></i><i></i></div>
                                        <div class="bestsellers_price discount">$225<span>$300</span></div>
                                    </div>
                                </div>
                                <div class="bestsellers_fav"><i class="fas fa-heart"></i></div>
                                <ul class="bestsellers_marks">
                                    <li class="bestsellers_mark bestsellers_discount">-25%</li>
                                    <li class="bestsellers_mark bestsellers_new">new</li>
                                </ul>
                            </div>

                            <!-- Best Sellers Item -->
                            <div class="bestsellers_item">
                                <div
                                    class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                    <div class="bestsellers_image"><img src="{{ asset('frontend') }}/images/best_4.png"
                                            alt=""></div>
                                    <div class="bestsellers_content">
                                        <div class="bestsellers_category"><a href="#">Headphones</a></div>
                                        <div class="bestsellers_name"><a href="product.html">Xiaomi Redmi
                                                Note
                                                4</a></div>
                                        <div class="rating_r rating_r_4 bestsellers_rating">
                                            <i></i><i></i><i></i><i></i><i></i></div>
                                        <div class="bestsellers_price discount">$225<span>$300</span></div>
                                    </div>
                                </div>
                                <div class="bestsellers_fav"><i class="fas fa-heart"></i></div>
                                <ul class="bestsellers_marks">
                                    <li class="bestsellers_mark bestsellers_discount">-25%</li>
                                    <li class="bestsellers_mark bestsellers_new">new</li>
                                </ul>
                            </div>

                            <!-- Best Sellers Item -->
                            <div class="bestsellers_item discount">
                                <div
                                    class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                    <div class="bestsellers_image"><img src="{{ asset('frontend') }}/images/best_5.png"
                                            alt=""></div>
                                    <div class="bestsellers_content">
                                        <div class="bestsellers_category"><a href="#">Headphones</a></div>
                                        <div class="bestsellers_name"><a href="product.html">Xiaomi Redmi
                                                Note
                                                4</a></div>
                                        <div class="rating_r rating_r_4 bestsellers_rating">
                                            <i></i><i></i><i></i><i></i><i></i></div>
                                        <div class="bestsellers_price discount">$225<span>$300</span></div>
                                    </div>
                                </div>
                                <div class="bestsellers_fav active"><i class="fas fa-heart"></i></div>
                                <ul class="bestsellers_marks">
                                    <li class="bestsellers_mark bestsellers_discount">-25%</li>
                                    <li class="bestsellers_mark bestsellers_new">new</li>
                                </ul>
                            </div>

                            <!-- Best Sellers Item -->
                            <div class="bestsellers_item">
                                <div
                                    class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                    <div class="bestsellers_image"><img src="{{ asset('frontend') }}/images/best_6.png"
                                            alt=""></div>
                                    <div class="bestsellers_content">
                                        <div class="bestsellers_category"><a href="#">Headphones</a></div>
                                        <div class="bestsellers_name"><a href="product.html">Xiaomi Redmi
                                                Note
                                                4</a></div>
                                        <div class="rating_r rating_r_4 bestsellers_rating">
                                            <i></i><i></i><i></i><i></i><i></i></div>
                                        <div class="bestsellers_price discount">$225<span>$300</span></div>
                                    </div>
                                </div>
                                <div class="bestsellers_fav active"><i class="fas fa-heart"></i></div>
                                <ul class="bestsellers_marks">
                                    <li class="bestsellers_mark bestsellers_discount">-25%</li>
                                    <li class="bestsellers_mark bestsellers_new">new</li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<!-- Adverts -->

<div class="adverts">
    <div class="container">
        <div class="row">

            <div class="col-lg-4 advert_col">

                <!-- Advert Item -->

                <div class="advert d-flex flex-row align-items-center justify-content-start">
                    <div class="advert_content">
                        <div class="advert_title"><a href="#">Trends 2018</a></div>
                        <div class="advert_text">Lorem ipsum dolor sit amet, consectetur adipiscing Donec
                            et.
                        </div>
                    </div>
                    <div class="ml-auto">
                        <div class="advert_image"><img src="{{ asset('frontend') }}/images/adv_1.png" alt="">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 advert_col">

                <!-- Advert Item -->

                <div class="advert d-flex flex-row align-items-center justify-content-start">
                    <div class="advert_content">
                        <div class="advert_subtitle">Trends 2018</div>
                        <div class="advert_title_2"><a href="#">Sale -45%</a></div>
                        <div class="advert_text">Lorem ipsum dolor sit amet, consectetur.</div>
                    </div>
                    <div class="ml-auto">
                        <div class="advert_image"><img src="{{ asset('frontend') }}/images/adv_2.png" alt="">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 advert_col">

                <!-- Advert Item -->

                <div class="advert d-flex flex-row align-items-center justify-content-start">
                    <div class="advert_content">
                        <div class="advert_title"><a href="#">Trends 2018</a></div>
                        <div class="advert_text">Lorem ipsum dolor sit amet, consectetur.</div>
                    </div>
                    <div class="ml-auto">
                        <div class="advert_image"><img src="{{ asset('frontend') }}/images/adv_3.png" alt="">
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- Trends -->

<div class="trends">
    <div class="trends_background" style="background-image:url({{ asset('frontend') }}/images/trends_background.jpg)">
    </div>
    <div class="trends_overlay"></div>
    <div class="container">
        <div class="row">

            <!-- Trends Content -->
            <div class="col-lg-3">
                <div class="trends_container">
                    <h2 class="trends_title">Bye one Get one Free</h2>
                    <div class="trends_text">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing Donec et.</p>
                    </div>
                    <div class="trends_slider_nav">
                        <div class="trends_prev trends_nav"><i class="fas fa-angle-left ml-auto"></i></div>
                        <div class="trends_next trends_nav"><i class="fas fa-angle-right ml-auto"></i></div>
                    </div>
                </div>
            </div>

            <!-- Trends Slider -->
            <div class="col-lg-9">
                <div class="trends_slider_container">

                    <!-- Trends Slider -->

                    <div class="owl-carousel owl-theme trends_slider">
                        
                        @foreach($byeonegetones as $item)
                        <!-- Trends Slider Item -->
                        <div class="owl-item">
                            <div class="trends_item is_new">
                                <a href="{{ route('singleproduct.show',$item->id) }}">
                                <div class="trends_image d-flex flex-column align-items-center justify-content-center">
                                    <img src="{{ asset('product_images/'.$item->image_one) }}" style="width: 130px;height: 210px;"></div></a>
                                <div class="trends_content">
                                    <div class="trends_category"><a href="#"></a></div>
                                    <div class="trends_info clearfix">
                                        <div class="trends_name">{{ $item->product_name }}</div>
                                        <div class="trends_price">${{ $item->selling_price }}</div>
                                    </div>
                                </div>
                                <ul class="trends_marks">
                                      @if($item->discount_price == null)
                                          <li class="trends_mark trends_new" style="background:red;">new</li>
                                            @else
                                             @php
                                        $amout=$item->selling_price-$item->discount_price;
                                        @endphp
                                           
                                              <li class="trends_mark trends_new">{{ round($amout/$item->selling_price*100) }}%</li>
                                            @endif
                                 
                                </ul>
                                 <button  class="addwish" data-id={{ $item->id }}>
                                <div class="trends_fav"><i class="fas fa-heart"></i></div>
                            </button>

                            </div>
                              <button type="submit" class=" btn btn-danger product_cart_button addcart"  id="{{ $item->id }} " onclick="productview(this.id)" >Add to Cart</button>
                        </div>
                        @endforeach
                      

                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- Reviews -->

<div class="reviews">
    <div class="container">
        <div class="row">
            <div class="col">

                <div class="reviews_title_container">
                    <h3 class="reviews_title">Latest Reviews</h3>
                    <div class="reviews_all ml-auto"><a href="#">view all <span>reviews</span></a></div>
                </div>

                <div class="reviews_slider_container">

                    <!-- Reviews Slider -->
                    <div class="owl-carousel owl-theme reviews_slider">

                        <!-- Reviews Slider Item -->
                        <div class="owl-item">
                            <div class="review d-flex flex-row align-items-start justify-content-start">
                                <div>
                                    <div class="review_image"><img src="{{ asset('frontend') }}/images/review_1.jpg"
                                            alt=""></div>
                                </div>
                                <div class="review_content">
                                    <div class="review_name">Roberto Sanchez</div>
                                    <div class="review_rating_container">
                                        <div class="rating_r rating_r_4 review_rating">
                                            <i></i><i></i><i></i><i></i><i></i></div>
                                        <div class="review_time">2 day ago</div>
                                    </div>
                                    <div class="review_text">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas
                                            fermentum laoreet.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Reviews Slider Item -->
                        <div class="owl-item">
                            <div class="review d-flex flex-row align-items-start justify-content-start">
                                <div>
                                    <div class="review_image"><img src="{{ asset('frontend') }}/images/review_2.jpg"
                                            alt=""></div>
                                </div>
                                <div class="review_content">
                                    <div class="review_name">Brandon Flowers</div>
                                    <div class="review_rating_container">
                                        <div class="rating_r rating_r_4 review_rating">
                                            <i></i><i></i><i></i><i></i><i></i></div>
                                        <div class="review_time">2 day ago</div>
                                    </div>
                                    <div class="review_text">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas
                                            fermentum laoreet.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Reviews Slider Item -->
                        <div class="owl-item">
                            <div class="review d-flex flex-row align-items-start justify-content-start">
                                <div>
                                    <div class="review_image"><img src="{{ asset('frontend') }}/images/review_3.jpg"
                                            alt=""></div>
                                </div>
                                <div class="review_content">
                                    <div class="review_name">Emilia Clarke</div>
                                    <div class="review_rating_container">
                                        <div class="rating_r rating_r_4 review_rating">
                                            <i></i><i></i><i></i><i></i><i></i></div>
                                        <div class="review_time">2 day ago</div>
                                    </div>
                                    <div class="review_text">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas
                                            fermentum laoreet.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Reviews Slider Item -->
                        <div class="owl-item">
                            <div class="review d-flex flex-row align-items-start justify-content-start">
                                <div>
                                    <div class="review_image"><img src="{{ asset('frontend') }}/images/review_1.jpg"
                                            alt=""></div>
                                </div>
                                <div class="review_content">
                                    <div class="review_name">Roberto Sanchez</div>
                                    <div class="review_rating_container">
                                        <div class="rating_r rating_r_4 review_rating">
                                            <i></i><i></i><i></i><i></i><i></i></div>
                                        <div class="review_time">2 day ago</div>
                                    </div>
                                    <div class="review_text">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas
                                            fermentum laoreet.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Reviews Slider Item -->
                        <div class="owl-item">
                            <div class="review d-flex flex-row align-items-start justify-content-start">
                                <div>
                                    <div class="review_image"><img src="{{ asset('frontend') }}/images/review_2.jpg"
                                            alt=""></div>
                                </div>
                                <div class="review_content">
                                    <div class="review_name">Brandon Flowers</div>
                                    <div class="review_rating_container">
                                        <div class="rating_r rating_r_4 review_rating">
                                            <i></i><i></i><i></i><i></i><i></i></div>
                                        <div class="review_time">2 day ago</div>
                                    </div>
                                    <div class="review_text">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas
                                            fermentum laoreet.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Reviews Slider Item -->
                        <div class="owl-item">
                            <div class="review d-flex flex-row align-items-start justify-content-start">
                                <div>
                                    <div class="review_image"><img src="{{ asset('frontend') }}/images/review_3.jpg"
                                            alt=""></div>
                                </div>
                                <div class="review_content">
                                    <div class="review_name">Emilia Clarke</div>
                                    <div class="review_rating_container">
                                        <div class="rating_r rating_r_4 review_rating">
                                            <i></i><i></i><i></i><i></i><i></i></div>
                                        <div class="review_time">2 day ago</div>
                                    </div>
                                    <div class="review_text">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas
                                            fermentum laoreet.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="reviews_dots"></div>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- Brands -->

<div class="brands">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="brands_slider_container">

                    <!-- Brands Slider -->

                    <div class="owl-carousel owl-theme brands_slider">
                        @foreach($brands as $item)
                        <div class="owl-item">
                            <div class="brands_item d-flex flex-column justify-content-center"><img
                                    src="{{asset('images/'.$item->brand_photo)}}" alt=""></div>
                        </div>
                      @endforeach

                    </div>

                    <!-- Brands Slider Navigation -->
                    <div class="brands_nav brands_prev"><i class="fas fa-chevron-left"></i></div>
                    <div class="brands_nav brands_next"><i class="fas fa-chevron-right"></i></div>

                </div>
            </div>
        </div>
    </div>
</div>

<!-- Newsletter -->

<div class="newsletter">
    <div class="container">
        <div class="row">
            <div class="col">
                <div
                    class="newsletter_container d-flex flex-lg-row flex-column align-items-lg-center align-items-center justify-content-lg-start justify-content-center">
                    <div class="newsletter_title_container">
                        <div class="newsletter_icon"><img src="{{ asset('frontend') }}/images/send.png" alt="">
                        </div>
                        <div class="newsletter_title">Sign up for Newsletter</div>
                        <div class="newsletter_text">
                            <p>...and receive %20 coupon for first shopping.</p>
                        </div>
                    </div>
                    <div class="newsletter_content clearfix">
                      
                       
                            <input type="email" class="newsletter_input" id="newsemail" name="newsletter" required="required"
                                placeholder="Enter your email address">
                                 @error('newsletter')
                         <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            <button class="newsletter_button" onclick="addnewsletter()">Subscribe</button>
                     
                        <div class="newsletter_unsubscribe_link"><a href="#">unsubscribe</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>








<script type="text/javascript">
    $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
    
$(document).ready(function(){
    $(".addwish").on('click',function(){


        let $id =$(this).data('id');
        if($id){
            $.ajax({
                url:"/wishlist/added/"+$id,
                type:"GET",
                datatype:"json",
                success:function(data){
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

                   
                },
            });
        }

    });
});

</script>



<div class="modal fade" id="cartmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModallevel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModallevel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <div class="row">
  <div class="col-sm-4">
    
    <div class="form-group">
        <div class="card">

    <img src="" id="pimage" name="image" style="width:220px;height: 200px;">
    <div class="card-body">
          <li class="list-group-item">Product_Title::<span id="ptname"></span></li>
    </div>
    </div>
  </div>
</div>
   <div class="col-sm-4">
    <ul class="list-group">
        <li class="list-group-item">Product Code::<span id="pcname"></span></li>
  <li class="list-group-item">Product Name::<span id="pname"></span></li>
  <li class="list-group-item" >Category Name::<span id="cname"></span></li>
  <li class="list-group-item">Brand name::<span id="bname"></span></li>
  <li class="list-group-item">Stock::<span class="badge badge-success" id="stock"></span></li>



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
               <input type="number"  name="qty" id="quantity" class="form-control" value="1" pattern="[0-9]"  >
        </div>
         
    <button class="bth btn-primary btn-sm" id="addtocarttest" type="submit" onclick="addtocart()">Add to card</button>
        
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