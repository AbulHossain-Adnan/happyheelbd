@extends('layouts.frontend_layout')
@section('frontendContent')
<link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/styles/cart_styles.css">
<link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/styles/cart_responsive.css">
 
	<!-- Cart -->

	<div class="cart_section">
		<div class="container">
			<div class="row">
				<div class="col-lg-10 offset-lg-1">
					<div class="cart_container">
						<div class="cart_title">Shopping Cart</div>
						<div class="cart_items">
							<ul class="cart_list">
{{ $cart }}
								@foreach($cart as $item)
							
								<li class="cart_item clearfix">
									<div class="cart_item_image"><img src="{{ asset('product_images/'.$item->options->image) }}" alt=""></div>
									<div class="cart_item_info d-flex flex-md-row flex-column justify-content-between">
										<div class="cart_item_name cart_info_col">
											<div class="cart_item_title">Name</div>
											<div class="cart_item_text">{{ $item->name }}</div>
										</div>
										<div class="cart_item_color cart_info_col">
											<div class="cart_item_title">Color</div>
											<div class="cart_item_text">{{ $item->options->color }}</div>
										</div>
										<div class="cart_item_color cart_info_col">
											<div class="cart_item_title">Size</div>
											<div class="cart_item_text">{{ $item->options->size }}</div>
										</div>
										<div class="cart_item_quantity cart_info_col">
											<div class="cart_item_title">Quantity</div><br>
											<form action="{{ route('cart.update') }}" method="post">
												@csrf
												<input type="hidden" name="product_id" value="{{ $item->rowId }}">
											<input type="number" value="{{ $item->qty }}" name="qty" style="width:50px;">
											<button class="btn btn-success btn-sm" type="submit">ok</button>
											</form>
										</div>
										<div class="cart_item_price cart_info_col">
											<div class="cart_item_title">Price</div>
											<div class="cart_item_text">{{ $item->price }}</div>
										</div>
										<div class="cart_item_total cart_info_col">
											<div class="cart_item_title">Total</div>
											<div class="cart_item_text">{{ $item->qty*$item->price }}</div>
										</div>
										<div class="cart_item_total cart_info_col">
											<div class="cart_item_title">Action</div><br>
											<a class="btn btn-danger btn-sm" href="{{ route('coupon_cart.delete',$item->rowId) }}">X</a>
										</div>
									</div>
								</li>
								@endforeach
							</ul>
						</div>
						<br><br><br>
						
						<!-- Order Total -->
					{{-- 	<div class="order_total">
							
							<div class="order_total_content text-md-right">
								<div class="order_total_title">Order Total:</div>
								<div class="order_total_amount">$2000</div>
								<div class="order_total_title">Order Total:</div>
								
							</div>


						</div><br><br><br><br> --}}

						<div class="row">
						  <div class="col-sm-6">
						   
						      
						      <form method="post" action="{{ route('coupon.apply')}}">
						      	@csrf
								  <div class="form-group">
								    <label for="exampleInputEmail1"><h2>Coupon</h2></label>
								    <input type="text" class="form-control" name="coupon_name" aria-describedby="emailHelp" placeholder="Enter Coupon">
								  
								  </div>
								
								  <button type="submit" class="btn btn-primary">Apply coupon</button>
								</form>
						     
						   
						  </div>
						  
						  <div class="col-sm-6">
						    
						     	
							
							<div class="order_total_content text-md-right">
								<div class="order_total_title">Order Total:</div>
								<div class="order_total_amount">$2000</div>
							
								
							</div>
								<div class="order_total_content text-md-right">
								<div class="order_total_title">Discount:</div>
								<div class="order_total_amount">{{ $couponase->discount }}%</div>
							
								
							</div>
								<div class="order_total_content text-md-right">
								<div class="order_total_title">Discount Amount:</div>
								<div class="order_total_amount">$2000</div>
							
								
							</div>
								<div class="order_total_content text-md-right">
								<div class="order_total_title">Order Total:</div>
								<div class="order_total_amount">$2000</div>
							
								
							</div>
							

						
						      <div class="cart_buttons">
									<button type="button" class="button cart_button_clear">All Clear</button>
									<button type="button" class="button cart_button_checkout">Checkout</button>
								</div>
						      </div>
						   
						 
						</div>





						
					</div>
				</div>
			</div>
		</div>
	</div>



@endsection