@extends('layouts.frontend_layout')
@section('frontendContent')
<div class="col-sm-10 m-auto " >
  <div class="row">
    <div class="col-sm-6" >
      <div><h3>Shipping Area</h3></div>
      <div class="card" style="border-radius: 25px;">
        <div class="card-body">
          
          <form method="post" action="{{route('final_step')}}">
            @csrf
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputAddress2">Full Name</label>
                <input type="text" class="form-control" name="name" id="inputAddress2" placeholder="Enter you full name" required="name">
              </div>
              <div class="form-group col-md-6">
                <label for="inputEmail4">Phone Number</label>
                <input type="text" class="form-control" name="pnumber" placeholder="Enter your phone Number" required="pnumber" >
              </div>
              <div class="form-group col-md-12">
                <label for="inputEmail4">Division:</label>
                @error('brand_id')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <select class="form-control" data-placeholder="Choose country" name="division_id" required="division_id">
                  <option label="Choose division"></option>
                  @foreach ($divisions as $item)
                  <option value="{{$item->id}}">{{$item->division}}</option>
                  @endforeach
                </select>
                <!-- </div> -->
              </div>
              
              <div class="form-group col-md-12">
                <label for="inputEmail4">District:</label>
                @error('brand_id')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <select class="form-control" data-placeholder="Choose country" name="district_id" required="district_id">
                  
                </select>
                <!-- </div> -->
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-12">
                <label for="inputEmail4">Area:</label>
                @error('brand_id')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <select class="form-control" data-placeholder="Choose country" name="area_id" placeholder="sdfs" required="area_id">
                  
                </select>
                <!-- </div> -->
              </div>
              <div class="form-group col-md-12">
                <label for="inputZip">Adress</label>
                <input type="text" name="adress" class="form-control" placeholder="Example:Uttora,sector:9house:20" id="inputZip" required="adress">
              </div>
              <div class="form-group col-md-12">
                <label for="inputZip">Zip</label>
                <input type="text" name="zip" class="form-control" id="inputZip" required="zip">
              </div>
            </div>
            
          </div>
        </div><br>
      </div>
      <div class="col-sm-6">
        <div><h3>Order Details</h3></div>
        <div class="card" style="border-radius: 25px;">
          <div class="card-body">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">id</th>
                  <th scope="col">name</th>
                  <th scope="col">price</th>
                  <th scope="col">color</th>
                  <th scope="col">size</th>
                </tr>
              </thead>
              <tbody>
                @foreach($cart as $item)
                <tr>
                  <td>{{$item->id}}</td>
                  <td>{{$item->name}}</td>
                  <td>{{$item->price*$item->qty}}</td>
                  <td>{{$item->options->color}}</td>
                  <td>{{$item->options->size}}</td>
                </tr>
                @endforeach
              </tbody>
            </table>
            <ul class="list-group" style="border: 2px solid red;border-radius: 10px">
              <li class="list-group-item"><h4>Subtotal:: {{$carts['subtotal']}}$</h4></li>
              <li class="list-group-item"><h4>Discount=>   {{$carts['discount']}}%({{$carts['discount_amount']}}$)</h4></li>
              <li class="list-group-item"><h4>Coupon Name: {{$carts['name']}}</h4></li>
              <li class="list-group-item"><h4>Grand Total:: {{$carts['grand_total']}}$</h4></li>
              @if($carts['name'] == "NULL")
              <input type="hidden" value="0" name="discount">
              <input type="hidden" value="{{Cart::subtotal()}}" name="subtotal">
              @else
              <input type="hidden" value="{{$carts['grand_total']}}" name="subtotal">
              <input type="hidden" value="{{$carts['discount_amount']}}" name="discount">
              @endif
            </ul>
          </div>
        </div><br>
        <div><h3>Payment Process</h3></div><br>
        <div class="row">
          <div class="col-lg-4">
            <label class="ckbox">
              <input type="radio" name="payment" value="cash_on" checked="">
              <img src="{{ asset('frontend') }}/payments/cashon1.jpg" width="100"
              alt="">
            </label>
            </div><!-- col-4 -->
            
            <div class="col-lg-4">
              <label class="ckbox">
                <input type="radio" name="payment" value="bkash">
                <img src="{{ asset('frontend') }}/payments/bkash.jpg" width="100"
                alt="">
              </label>
            </div>
            <div class="col-lg-4">
              <label class="ckbox">
                <input type="radio" name="payment" value="stripe">
                <img src="{{ asset('frontend') }}/payments/stripe.jpg" width="100"
                alt="">
              </label>
            </div>
            <br><br>
            <!-- col-4 -->
            
          </div><br><br>
          
          <button type="submit" style="border-radius: 25px;" class="btn btn-success">Place Order</button>
          
        </form>
      </div>
    </div>
    
    <script type="text/javascript">
    $(document).ready(function(){
    $('select[name="division_id"]').on('change',function(){
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
    
    $('select[name="district_id"]').empty();
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
  
    $('select[name="area_id"]').empty();
     $('#area_id').html('<option value="">Select Area</option>');
    $.each(data, function(key, value){
        
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