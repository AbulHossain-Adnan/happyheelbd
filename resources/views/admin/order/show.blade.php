@extends('admin.admin_layout')
<link href="https://cdn.jsdelivr.net/bootstrap.tagsinput/0.8.0/bootstrap-tagsinput.css" rel="stylesheet"/>
@section('adminMain')

<div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">Starlight</a>
        <a class="breadcrumb-item" href="index.html">Forms</a>
        <span class="breadcrumb-item active">Form Layouts</span>
      </nav>

        

  
             <div class="card pd-20 pd-sm-40">
          <h2 class="card-body-title"></h2>
         
       
        
          <div class="form-layout">
            <div class="row mg-b-25">
             

             <div class="row">
  <div class="col-sm-6">
    <div class="card">
    	  <h2 class="mg-b-20 mg-sm-b-30">Order View</h2>
      <div class="card-body">
       
      	<div class="form-layout">
            <div class="row mg-b-25">
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">User Name: <span class="tx-danger">*</span></label><br>
                   
                 {{$orders->name}}
              
                </div>
              </div><!-- col-4 -->
                <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Phone Number: <span class="tx-danger">*</span></label><br>
                 
                 <b>{{$orders->blnc_transection}}</b>
                </div>
              </div><!-- col-4 --> 
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">paymtype: <span class="tx-danger">*</span></label><br>
                 
                 <b>{{$orders->payment_type}}</b>
                </div>
              </div><!-- col-4 -->
             
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">subtotal: <span class="tx-danger">*</span></label><br>
                 
                 <b>{{$orders->subtotal}}</b>
                </div>
              </div><!-- col-4 -->
               <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">discount: <span class="tx-danger">*</span></label><br>
                 
                 <b>{{$orders->discount}}</b>
                </div>
              </div><!-- col-4 --> 
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">payamount: <span class="tx-danger">*</span></label><br>
                 
                 <b>{{$orders->paying_amount}}</b>
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">shipping: <span class="tx-danger">*</span></label><br>
                 
                 <b>{{$orders->shipping}}</b>
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">vat: <span class="tx-danger">*</span></label><br>
                 
                 <b>{{$orders->vat}}</b>
                </div>
              </div><!-- col-4 -->
               <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">status: <span class="tx-danger">*</span></label>
                 
                
                  @if($orders->status == 0)
                   <span class="badge badge-danger">Pending</span>
                
                  @elseif($orders->status == 1)
                    <span class="badge badge-success">Payment accept</span>
                      @elseif($orders->status == 2)
                    <span class="badge badge-info">Progress</span>
                      @elseif($orders->status == 3)
                    <span class="badge badge-success">Delevared</span>
                      @else
                    <span class="badge badge-danger">Cancel</span>
                 
                  @endif
               
                </div>
              </div><!-- col-4 -->

          </div>
      </div>

      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
    	  <h2 class="mg-b-20 mg-sm-b-30">Shipping View</h2>
      <div class="card-body">
       
          <div class="form-layout">
            <div class="row mg-b-25">
               <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Division: <span class="tx-danger">*</span></label>
                 
                 <b>{{$orders->Shipping->division}}</b>
                </div>
              </div><!-- col-4 --> <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">District: <span class="tx-danger">*</span></label><br>
                 
                 <b>{{$orders->Shipping->district}}</b>
                </div>
              </div><!-- col-4 -->
               <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Thana: <span class="tx-danger">*</span></label><br>
                 
                 <b>{{$orders->Shipping->area}}</b>
                </div>
              </div><!-- col-4 --> 
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">zip: <span class="tx-danger">*</span></label><br>
                 
                 <b>{{$orders->Shipping->zip}}</b>
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">address: <span class="tx-danger">*</span></label><br>
                 
                 <b>{{$orders->Shipping->address}}</b>
                </div>
              </div><!-- col-4 -->
             

          </div>
      </div>
      </div>


      </div>
    </div>
  </div>
</div>
             

          </div>


      </div>



  



<div class="card pd-20 pd-sm-40">
  <div class="table-wrapper">
  	 <h2 class="mg-b-20 mg-sm-b-30">Order details View</h2>
         
          <table class="table display responsive nowrap">
            <thead>
              <tr>
                <th class="wd-15p">product name</th>
                <th class="wd-15p">product code</th>
                <th class="wd-15p">image</th>
                <th class="wd-20p">color</th>
                <th class="wd-15p">size</th>
                <th class="wd-15p">price</th>

                <th class="wd-10p">quantity</th>
                <th class="wd-10p">subtotal</th>
                

      

              
              </tr>
            </thead>
            <tbody>
              
            
              @foreach($order_details as $item)
              <tr>

               
              		<td>{{$item->product->product_name}}</td>
              		<td>{{$item->product->product_code}}</td>
              		<td>
              			<img src="{{asset('product_images/'.@$item->product->files[0]['product_image'])}}" width="80">
              		</td>
              		<td>{{$item->color}}</td>

              		<td>{{$item->size}}</td>
              		<td>{{$item->price}}</td>

              		<td>{{$item->quantity}}</td>
              		<td>{{$item->subtotal}}</td>
    
              </tr>
          
             @endforeach
            
            </tbody>
          </table><br><br>
          @if($orders->status == 0)

          
          <a class="btn btn-primary btn-lg btn-block" href="{{url('/admin/payment/accept/'.$orders->id)}}">Payment Accept</a>

			<a class="btn btn-danger btn-lg btn-block" href="{{url('/admin/order/cancel/'.$orders->id)}}">Order Cancel</a>

			@elseif($orders->status == 1)

			<a class="btn btn-info btn-lg btn-block" href="{{url('/admin/order/progress/'.$orders->id)}}">Order Progress</a>

			@elseif($orders->status == 2)
			<a class="btn btn-success btn-lg btn-block" href="{{url('/admin/delevary/success/'.$orders->id)}}">Delivary Success</a>

			@elseif($orders->status == 3)
			<span class="text-success" style="text-center">------------------------------------------------------------------------------------------------------------------This Order delivary completed---------------------------------------------------</span>
      @else
      <span class="text-danger text-center">-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------This Order is not valid</span>
			@endif
			


        </div>
    </div>


  </div>

  </div>

 
@endsection