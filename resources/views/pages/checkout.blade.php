@extends('layouts.shopwisemaster')
@section('content')
<!-- START SECTION BREADCRUMB -->
<div class="breadcrumb_section bg_gray page-title-mini">
    <div class="container"><!-- STRART CONTAINER -->
        <div class="row align-items-center">
        	<div class="col-md-6">
                <div class="page-title">
            		<h1>Checkout</h1>
                </div>
            </div>
            <div class="col-md-6">
                <ol class="breadcrumb justify-content-md-end">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active">Checkout</li>
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
            <div class="col-lg-6">
            	<div class="toggle_info">
                	{{-- <span><i class="fas fa-user"></i>Returning customer? <a href="#loginform" data-bs-toggle="collapse" class="collapsed" aria-expanded="false">Click here to login</a></span> --}}
                </div>
                <div class="panel-collapse collapse login_form" id="loginform">
                    <div class="panel-body">
                    	<p>If you have shopped with us before, please enter your details below. If you are a new customer, please proceed to the Billing &amp; Shipping section.</p>
                    	<form method="post" action="{{url('/final/step')}}">
                        @csrf
                            <div class="form-group mb-3">
                                <input type="text" required="" class="form-control" name="email" placeholder="Username Or Email">
                            </div>
                            <div class="form-group mb-3">
                                @error('name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <input class="form-control" required="" type="password" name="password" placeholder="Password">
                            </div>
                            <div class="login_footer form-group mb-3">
                                <div class="chek-form">
                                    <div class="custome-checkbox">
                                        <input class="form-check-input" type="checkbox" name="checkbox" id="remember" value="">
                                        <label class="form-check-label" for="remember"><span>Remember me</span></label>
                                    </div>
                                </div>
                                <a href="#">Forgot password?</a>
                            </div>
                            <div class="form-group mb-3">
                                <button type="submit" class="btn btn-fill-out btn-block" name="login">Log in</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
            	<div class="toggle_info">
            		{{-- <span><i class="fas fa-tag"></i>Have a coupon? <a href="#coupon" data-bs-toggle="collapse" class="collapsed" aria-expanded="false">Click here to enter your code</a></span> --}}
                </div>
                <div class="panel-collapse collapse coupon_form" id="coupon">
                    <div class="panel-body">
                    	<p>If you have a coupon code, please apply it below.</p>
                        <div class="coupon field_form input-group">
                            <input type="text" value="" class="form-control" placeholder="Enter Coupon Code..">
                            <div class="input-group-append">
                                <!-- <button class="btn btn-fill-out btn-sm" type="submit">Apply Coupon</button> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
            	<div class="medium_divider"></div>
            	<div class="divider center_icon"><i class="linearicons-credit-card"></i></div>
            	<div class="medium_divider"></div>
            </div>
        </div>
        <div class="row">
        	<div class="col-md-6">
            	<div class="heading_s1">
            		<h4>Billing Details</h4>
                </div>
                <form method="post" action="{{url('/final/step')}}">
                    @csrf
                    <div class="form-group mb-3">
                         @error('name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                           <label for="exampleInputEmail1" class="form-label">Full Name*</label>
                        <input type="text" class="form-control" name="name" id="inputAddress2" placeholder="Enter you full name" required="name">
                    </div>
                    <div class="form-group mb-3">
                         @error('email')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                           <label for="exampleInputEmail1" class="form-label">Email*</label>
                        <input type="email" class="form-control" name="email" placeholder="Enter your email">
                    </div>

                     <div class="form-group mb-3">
                         @error('pnumber')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                           <label for="exampleInputEmail1" class="form-label">Phone Number*</label>
                        <input type="text" class="form-control" name="pnumber" placeholder="Enter your phone Number" required="pnumber" >
                    </div>
                   
                    <div class="form-group mb-3">
                        <div class="custom_select">
                             @error('division_id')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                               <label for="exampleInputEmail1" class="form-label">Division*</label>
                            <select class="form-control"  name="division_id" required="division_id">
                                <option value="">Select an option...</option>

                                @foreach ($divisions as $item)
                                <option value="{{$item->id}}">{{$item->division}}</option>
                                @endforeach
                               
                            </select>
                        </div>
                    </div>

                     <div class="form-group mb-3">
                        <div class="custom_select">
                             @error('district_id')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                               <label for="exampleInputEmail1" class="form-label">District*</label>
                           <select class="form-control" data-placeholder="Choose country" name="district_id" required="district_id">
                              <option value="">Select District</option>
                          </select>
                        </div>
                    </div>

                      <div class="form-group mb-3">
                        <div class="custom_select">
                             @error('area_id')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                               <label for="exampleInputEmail1" class="form-label">Thana*</label>
                           <select class="form-control" data-placeholder="Choose country" name="area_id" placeholder="sdfs" required="area_id">
                              <option value="">Select Area</option>
                           </select>
                        </div>
                    </div>
                    <div class="form-group mb-3">
                         @error('adress')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                           <label for="exampleInputEmail1" class="form-label">Address*</label>
                        <input type="text" name="adress" class="form-control" placeholder="Example:Uttora,sector:9house:20" id="inputZip" required="address">
                    </div>
                    {{-- <div class="form-group mb-3">
                         <input type="text" name="zip" class="form-control" id="inputZip" placeholder="Zip">
                    </div> --}}
             
            </div>
            <div class="col-md-6">
                <div class="order_review">
                    <div class="heading_s1">
                        <h4>Your Orders</h4>
                    </div>
                    <div class="table-responsive order_table">
                        <table class="table">
                            <thead>
                                <tr>
                                   
                                    <th>Name</th>
                                    <th>Price</th>
                                    <th>color</th>
                                    <th>size</th>
                                </tr>
                            </thead>
                            <tbody>
                               @foreach($cart as $item)
                                <tr>
                                 
                                  <td>{{$item->name}}</td>
                                  <td>{{$item->price*$item->qty}}</td>
                                  <td>{{$item->options->color}}</td>
                                  <td>{{$item->options->size}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>SubTotal Charge:</th>
                                    <td class="product-subtotal">{{$carts['subtotal']}} taka</td>
                                </tr>
                                <tr >
                                  
                                    <th>Shipping</th>
                                     <p>ঢাকার ভিতরে শিপিং চার্জ ৮০  টাকা সময় 2-3 দিন এবং ঢাকার বাইরে ডেলিভারি চার্জ ১৫০ টাকা সময় 4-5 দিন</p>

                                    <td id="sheeping_charge"></td>
                                </tr>
                                <tr>
                                    <th>Total</th>
                                    <td id="total" class="product-subtotal">{{$carts['grand_total']}} taka</td>
                                </tr>
                                 @if($carts['name'] == "NULL")
                                <input type="hidden" value="0" name="discount">
                                <input type="hidden" value="{{Cart::subtotal()}}" name="subtotal">
                                <input type="hidden" id="sheeping" name="sheeping">

                                @else
                                <input type="hidden" value="{{$carts['grand_total']}}" name="subtotal">
                                <input type="hidden" value="{{$carts['discount_amount']}}" name="discount">
                                 <input type="hidden" id="sheeping" name="sheeping">
                                @endif
                            </tfoot>
                        </table>
                    </div>
                     {{-- <div class="row"> --}}
          <div class="col-lg-12">
            <label class="ckbox">
              <input type="radio" name="payment" value="cash_on" checked="">
              <img src="{{ asset('frontend') }}/payments/cashon1.jpg" width="100"
              alt="">
            </label>
            </div><!-- col-4 -->

             <div class="col-lg-12">
            <label class="ckbox">
              {{-- <input type="radio" name="payment" value="cash_on" checked=""> --}}
              <img src="{{ asset('frontend') }}/payments/bkash.jpg" width="100"
              alt=""><br> 01771915770
            </label>
            </div><!-- col-4 -->

             
            
            
            <div class="col-lg-4">
              <label class="ckbox">
                
                {{-- <input type="radio" name="payment" value="stripe"> --}}
                <img src="{{ asset('frontend') }}/payments/nogod.png" width="100"
                alt=""> 01771915770
              
              </label>
            </div>

             <div class="col-lg-12">
            <label class="ckbox">
              {{-- <input type="radio" name="payment" value="cash_on" checked=""> --}}
              <img src="{{ asset('frontend') }}/payments/rocket.png" width="100"
              alt=""><br> 01987754836
            </label>
            </div><!-- col-4 -->
            <br><br>
            <!-- col-4 -->
            
          {{-- </div><br><br> --}}
          
          
          <button type="submit" class="btn btn-fill-out btn-block">Place Order</button>
        </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END SECTION SHOP -->


<!-- START SECTION SUBSCRIBE NEWSLETTER -->

</div>
<script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <script type="text/javascript">
    $(document).ready(function(){
    $('select[name="division_id"]').on('change',function() {
    var division_id = $(this).val();
    if(division_id){
    $.ajaxSetup({
    headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
    });
    $.ajax({
    type:"GET",
    dataType:"json",
    url:"/get_district/"+division_id,
    success:function(data){
     
    
    $('select[name="district_id"]').val("choose one");
    $('#district_id').html('<option value="">Select District</option>');
    $.each(data, function(key, value){
      
    $('select[name="district_id"]').append('<option value ="'+ value.id + '">' + value.district + '</option>');
    
    });
    },
    });
    }else{
    alert('danger');
    }
    });
    });
    $(document).ready(function(){
    $('select[name="district_id"]').on('change',function(){
    var district_id = $(this).val();
    if(district_id){

       
    $.ajaxSetup({
    headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
    });
    $.ajax({
    type:"GET",
    dataType:"json",
    url:"/get_area/"+district_id,
    success:function(data){

        $('#sheeping_charge').html(data.sheeping + '  taka');

         $('#total').html(data.total + '  taka');

        $('#sheeping').val(data.sheeping);


     $('#area_id').html('<option value="">Select Area</option>');
    $.each(data.district, function(key, value){

    $('select[name="area_id"]').append('<option value ="'+ value.id + '">' + value.area + '</option>');
    
    });
    },
    });
    }else{
    alert('danger');
    }
    });
    });
    </script>
    
    @endsection