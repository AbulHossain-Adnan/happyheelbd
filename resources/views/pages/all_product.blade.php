@extends('layouts.shopwisemaster')
@section('content')

<!-- START SECTION BREADCRUMB -->
<div class="breadcrumb_section bg_gray page-title-mini">
    <div class="container"><!-- STRART CONTAINER -->
        <div class="row align-items-center">
        	<div class="col-md-6">
                <div class="page-title">
            		<h1>Shop Load More</h1>
                </div>
            </div>
            <div class="col-md-6">
                <ol class="breadcrumb justify-content-md-end">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active">Shop Load More</li>
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
			<div class="col-12">
            	<div class="row align-items-center mb-4 pb-1">
                    <div class="col-12">
                        <div class="product_header">
                            <div class="product_header_left">
                                <div class="custom_select">
                                    <select class="form-control form-control-sm">
                                        <option value="order">Default sorting</option>
                                        <option value="popularity">Sort by popularity</option>
                                        <option value="date">Sort by newness</option>
                                        <option value="price">Sort by price: low to high</option>
                                        <option value="price-desc">Sort by price: high to low</option>
                                    </select>
                                </div>
                            </div>
                            <div class="product_header_right">
                            	<div class="products_view">
                                    
                                </div>
                                <div class="custom_select">
                                    <select class="form-control form-control-sm">
                                        <option value="">Showing</option>
                                        <option value="9">9</option>
                                        <option value="12">12</option>
                                        <option value="18">18</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
                <div class="row shop_container loadmore" data-item="8" data-item-show="4" data-finish-message="No More Item to Show" data-btn="Load More">
                    
                    @foreach($products as $item)
                    <div class="col-lg-3 col-md-4 col-6 grid_item">
                        <div class="product">
                            <div class="">
                                <a href="{{url('/singleproduct/'.$item->id)}}">
                                        <img src="{{ asset('product_images/'.@$item->attributes[0]['product_image']) }}" alt="product_img1">
                                   </a>
                                <div class="product_action_box">
                                    <ul class="list_none pr_action_btn">
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
                                    <h6 class="product_title"><a href="{{url('/singleproduct/'.$item->id)}}">{{$item->product_name}}</a></h6>
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
                        <input type="text" required="" class="form-control rounded-0" placeholder="Enter Email Address">
                        <button type="submit" class="btn btn-dark rounded-0" name="submit" value="Submit">Subscribe</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- START SECTION SUBSCRIBE NEWSLETTER -->

</div>
<!-- END MAIN CONTENT -->

@endsection
