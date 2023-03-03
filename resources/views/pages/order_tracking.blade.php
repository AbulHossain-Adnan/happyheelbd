@extends('layouts.app')

@section('user_home')

<div class="row" >
  <div class="col-sm-4 m-0">
  	
  	<h3>Order status bar</h3><br>

     @if($check->status == 0)
<div class="progress">
 <div class="progress-bar bg-danger" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
 </div><br><br>
 <h4>Note: Order pending</h4>
 @elseif($check->status == 1)

<div class="progress">
	<div class="progress-bar bg-danger" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
 <div class="progress-bar bg-warning" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
 </div><br><br>
 <h4>Note:Payment accepted</h4>

 @elseif($check->status == 2)
 <div class="progress">
	<div class="progress-bar bg-danger" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
 <div class="progress-bar bg-warning" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
 <div class="progress-bar bg-primary" role="progressbar" style="width: 30%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
 </div><br><br>
 <h4>Note:Your order progress</h4>

 @elseif($check->status == 3)
  <div class="progress">
	<div class="progress-bar bg-danger" role="progressbar" style="width: 20%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
 <div class="progress-bar bg-warning" role="progressbar" style="width: 30%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
 <div class="progress-bar bg-primary" role="progressbar" style="width: 20%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>

 <div class="progress-bar bg-success" role="progressbar" style="width: 30%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
</div><br><br>
 <h4>Note: order complete</h4>

@else
 <div class="progress">
 	<div class="progress-bar bg-danger" role="progressbar" style="width: 100%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
 </div><br><br>
 <h3>Order Status:Your order is canceled</h3>
@endif
  
  </div>


  <div class="col-sm-6 m-auto">
  	 <h3>Order details</h3>
  
       <ul class="list-group">
  <li class="list-group-item"><b>User Id</b>::{{$check->user_id}}</li>
  <li class="list-group-item"><b>Payment Type</b>::{{$check->payment_type}}</li>
  <li class="list-group-item"><b>Ballance Transection</b>::{{$check->blnc_transection}}</li>
  <li class="list-group-item"><b>Subtotal</b>::{{$check->subtotal}}</li>
  <li class="list-group-item"><b>Discount</b>::{{$check->discount}}</li>
  <li class="list-group-item"><b>Paying Amount</b>::{{$check->paying_amount}}</li>
  <li class="list-group-item"><b>Shipping</b>::{{$check->shipping}}</li>
  <li class="list-group-item"><b>Vat::</b>{{$check->vat}}</li>
  <li class="list-group-item"><b>Status Code::</b>{{$check->status_code}}</li>


</ul>
     
    
  </div>
</div>





@endsection