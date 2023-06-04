@extends('layouts.shopwisemaster')
@section('content')

<!-- START SECTION BREADCRUMB -->
<div class="breadcrumb_section bg_gray page-title-mini">
    <div class="container"><!-- STRART CONTAINER -->
        <div class="row align-items-center">
        	<div class="col-md-6">
                <div class="page-title">
            		<h1>Shopping Cart</h1>
                </div>
            </div>
            <div class="col-md-6">
                <ol class="breadcrumb justify-content-md-end">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active">Shopping Cart</li>
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
                <div class="table-responsive shop_cart_table">
                	<table class="table">
                    	<thead>
                        	<tr>
                            	<th class="product-thumbnail">&nbsp;</th>
                                <th class="product-name">Product</th>
                                <th class="product-name">Color</th>
                                <th class="product-name">Size</th>


                                <th class="product-price">Price</th>
                                <th class="product-quantity">Quantity</th>
                                <th class="product-subtotal">Total</th>
                                <th class="product-remove">Remove</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                        
                        </tbody>
                        <tfoot>
                        	<tr>
                            	<td colspan="6" class="px-0">
                                	<div class="row g-0 align-items-center">

                                    	<div class="col-lg-5 col-md-6 mb-3 mt-3 mb-md-0">
                                            <div class="coupon field_form input-group">
                                                <input type="text" value="" id="coupon_name" name="coupon_name" class="form-control form-control-sm" placeholder="Enter Coupon Code..">
                                                	<button onclick="applycoupon()" class="btn btn-fill-out btn-sm" type="submit">Apply Coupon</button>
                                                </div>
                                            </div>
                                    	</div>
                                        <div class="col-lg-8 col-md-6  text-start  text-md-end">
                                            {{-- <button class="btn btn-line-fill btn-sm" type="submit">Update Cart</button> --}}
                                        </div> 
                                    </div>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
            	<div class="medium_divider"></div>
            	<div class="divider center_icon"><i class="ti-shopping-cart-full"></i></div>
            	<div class="medium_divider"></div>
            </div>
        </div>
        <div class="row">
        	<div class="col-md-6">
            	<div class="heading_s1 mb-3">
            		<h6>Calculate Cart</h6>
                </div>
              
            </div>


            
            <div class="col-md-6">
            	<div class="border p-3 p-md-4">
                    <div class="heading_s1 mb-3">
                        
                    </div>
                    <div class="table-responsive">
                         <div class="col-md-6 m-auto">
                        <div class="" id="cartcalculationfield">
                            <tbody>
                               
                            </tbody>
                        </div>
                    </div>
                    </div>
                    {{-- <a href="#" class="btn btn-fill-out">Proceed To CheckOut</a> --}}
                    <form action="{{ route('checkout') }}" method="post">
									@csrf
									<input type="hidden" value="null" name="name">
									<input type="hidden" value="0" name="discount">
									<input type="hidden" value="0" name="discount_amount">
									<input type="hidden" value="{{Cart::subtotal()}}" name="subtotal">
									<input type="hidden" value="{{Cart::subtotal()}}" name="grand_total">
									<input type="hidden" value="0" name="discount_amount">
									<div class="cart_buttons" id="couponvaluefield">
									<button class="btn btn-fill-out">Proceed To CheckOut</button>
										
									</div>
								</form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- END MAIN CONTENT -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
	<script type="text/javascript">
	$.ajaxSetup({
	headers: {
	'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	}
	});
	function alldata(){
		$.ajax({
			type:"GET",
			datatype:"json",
			url:"cartdata",
			success:function(response){
				var rows=""
				$.each(response, function(key,value){

					console.log(value.options.color);
				console.log('sfsdflsdfs')

					rows+=`
                    <tr>
                        <td class="product-thumbnail"><a href="#"><img src="product_images/${value.options.image}" width="100" alt="product1"></a></td>
                        <td class="product-name" data-title="Product"><a href="#">${value.name}</a></td>
                         <td class="product-color" data-title="Product"><a href="#">${value.options.color}</a></td>
                          <td class="product-size" data-title="Product"><a href="#">${value.options.size}</a></td>
                        <td class="product-price" data-title="Price">${value.price}</td>
                        <td class="product-quantity" data-title="Quantity"><div class="quantity">
                            ${value.qty>1
                                ?`<input type="button" id="${value.rowId}" onclick="quantitydecrement(this.id)" value="-" class="minus">`
                                :`<input type="button" id="${value.rowId}" onclick="quantitylowalert()" value="-"  class="minus">`
                                 
                                }
                       
                        <input id="quantity_name" name="quantity_name" value="${value.qty}"  title="Qty" class="qty" size="4">
                        <button type="button" id="${value.rowId}"  onclick="quantityincrement(this.id)"   class="plus" >+</button>
                        </div></td>
                        <td class="product-subtotal" data-title="Total">${value.subtotal}</td>
                        <td class="product-remove" data-title="Remove"><button id='${value.rowId}' onclick="cart_remove(this.id)"><i class="ti-close"></i></button></td>
                        </tr>
								`
						});
				$('tbody').html(rows)
				}
			});
		}
		alldata();

        function quantitylowalert(){
            alert("You Can Not purchase less then 1")
        }


       
		function quantityincrement(rowId){
			$.ajaxSetup({
		headers: {
		'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		}
		});
			$.ajax({
				type:"GET",
				datatype:"json",
				url:"increment/"+rowId,
				success:function(response){
				cartcalculation();
				alldata();
				minicart();
				}
			})
		}
		function quantitydecrement(rowId){
			$.ajaxSetup({
		headers: {
		'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		}
		});
			$.ajax({
				type:"GET",
				datatype:"json",
				url:"decrement/"+rowId,
				success:function(response){
				
				cartcalculation();
				alldata();
				minicart();
				}
			})
		}
		alldata();
		function cart_remove(id){
			$.ajax({
				type:"GET",
				datatype:"json",
				url:"cartremove/"+id,
				success:function(data){
					cartcalculation();
					alldata();
					minicart();
					$('#applycouponfield').show();
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
		Toast.fire({
		icon: 'success',
		title: 'cart remove succesfully'
		})
				}
			})
		}
		function applycoupon(){
		var coupon_name = $('#coupon_name').val();
			$.ajaxSetup({
		headers: {
		'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		}
		});
			$.ajax({
				type:"POST",
				datatype:"json",
				data:{coupon_name:coupon_name},
				url:"applycouponn",
				success:function(data) {
					console.log(data)
					$('#couponvaluefield').html(`
						<input type="hidden" value="${data[0]}" name="name">
                        <input type="hidden" value="${data[3]}" name="discount">
                        <input type="hidden" value="${data[2]}" name="discount_amount">
                        <input type="hidden" value="${data[1]}" name="subtotal">
                        <input type="hidden" value="${data[4]}" name="grand_total">
                         <button class="btn btn-fill-out">Proceed To CheckOut</button>
						`)
						cartcalculation();
						$('#coupon_name').val('');
					
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
		else {
            Toast.fire({
            icon: 'error',
            title: data.error
		    })
	     }
		
    }
				
})
;}
		
		function cartcalculation(){
			$.ajax({
				type:"GET",
				datatype:"json",
				url:"cartcal",
				success:function(data){
			
					if(data.total){
						$("#cartcalculationfield").html(`

                                 <tr>
                                    <td class="cart_total_label"><h4>Cart Totals: ${data.total} TK<h4></td>
                                   
                                </tr>
                                 <form action="{{ route('checkout') }}" method="post">
									@csrf
									<input type="hidden" value="null" name="name">
									<input type="hidden" value="0" name="discount">
									<input type="hidden" value="0" name="discount_amount">
									<input type="hidden" value="{{Cart::subtotal()}}" name="subtotal">
									<input type="hidden" value="{{Cart::subtotal()}}" name="grand_total">
									<input type="hidden" value="0" name="discount_amount">
									<div class="cart_buttons" id="couponvaluefield">
									<button class="btn btn-fill-out">Proceed To CheckOut</button>
										
									</div>
								</form>
                              
							`);
					}
					else{
						$('#cartcalculationfield').html(`
							<tr>
								<th>
									<div>
									<div class="order_total_title">Cart Totals: ${data.subtotal}</div>
													
											</div>
											<div>
												<div class="order_total_title">Coupon name: ${data.name}</div>
												
												
													<button type="submit" class="btn btn-danger btn sm" onclick="couponremove()">x</button>
										
												
												<div>
														<div class="order_total_title">discount: ${data.discount}% =${data.discount_amount}</div>
														
												</div>
												
												<div>
														<div class="order_total_title">Grand Total:${data.grand_total} tk</div>
														
												</div>
									</th>
								</tr>
								`)
						}
					}
				})
			}
			cartcalculation();
				
			function couponremove(){
				$.ajax({
					type:"GET",
					datatype:"json",
					url:"couponremove",
					success:function(data){
						
						$('#couponvaluefield').html(`
							<input type="hidden" value="null" name="name">
										<input type="hidden" value="0" name="discount">
										<input type="hidden" value="0" name="discount_amount">
										<input type="hidden" value="null" name="subtotal">
										<input type="hidden" value="0" name="grand_total">
										<input type="hidden" value="null" name="discount_amount">
										

                                         <form action="{{ route('checkout') }}" method="post">
									@csrf
									<input type="hidden" value="null" name="name">
									<input type="hidden" value="0" name="discount">
									<input type="hidden" value="0" name="discount_amount">
									<input type="hidden" value="{{Cart::subtotal()}}" name="subtotal">
									<input type="hidden" value="{{Cart::subtotal()}}" name="grand_total">
									<input type="hidden" value="0" name="discount_amount">
									<div class="cart_buttons" id="couponvaluefield">
									<button class="btn btn-fill-out">Proceed To CheckOut</button>
										
									</div>
								</form>
		
							`)
						cartcalculation();
						minicart();
						$('#applycouponfield').show();
						
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
			Toast.fire({
			icon: 'success',
			title: 'coupon remove succesfully'
			})
					}
				})
			}
				
			</script>


		<script>
			$(document).ready(function(){
				$('body').on('click','#test',function(){
					
						alert('sdf')
				})
			})
		</script>
			
@endsection