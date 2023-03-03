@extends('admin.admin_layout')
@section('adminMain')


<!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">Starlight</a>
        <a class="breadcrumb-item" href="index.html">Forms</a>
        <span class="breadcrumb-item active">Form Layouts</span>
      </nav>

<a class="btn btn-primary" href="{{ route('admin.home') }}" class="nav-link">Home</a>
        <div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title">User Create</h6>
         
        <form action="{{ url('/admin/user/update/'.$users->id) }}" method="post">
        @csrf
          <div class="form-layout">
            <div class="row mg-b-25">
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Name: <span class="tx-danger">*</span></label>
                  @error('name')
                  <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    
                  <input class="form-control" type="text" name="name"  placeholder="Enter user name" value="{{$users->name}}">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Phone: <span class="tx-danger">*</span></label>
                  @error('phone')
                  <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  <input class="form-control" type="text" name="phone"  placeholder="Enter user phone number">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Email<span class="tx-danger">*</span></label>
                  @error('Product_quantity')
                  <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  <input class="form-control" type="email" name="email" placeholder="Enter user email" value="{{$users->email}}">
                </div>
              </div><!-- col-4 -->
             
             
             
         
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Password<span class="tx-danger">*</span></label>
                  @error('password')
                  <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  <input class="form-control" type="password" name="password" placeholder="Enter password" value="{{$users->password}}">
                </div>
              </div><!-- col-4 -->
           

              
              <br> <br>
           
            
             
              
            </div><!-- row -->
            <br> <br> <br>
            <hr>
            <br>
                   <br>
                  
                
              
            <div class="row">
            <div class="col-lg-4">
            <label class="ckbox">
            	@if($users->product == 1)
              <input type="checkbox" name="product" value="1" checked>
              @else

              <input type="checkbox" name="product" value="1">
              @endif

              <span>Product</span>
            </label>
            </div><!-- col-4 -->



            <div class="col-lg-4">
            <label class="ckbox">
            	@if($users->category == 1)
              <input type="checkbox" name="category" value="1" checked>
              @else
              <input type="checkbox" name="category" value="1">

              @endif
              <span>Category</span>
            </label>
            </div><!-- col-4 -->






            <div class="col-lg-4">
            <label class="ckbox">
            	@if($users->coupon ==1)
              <input type="checkbox" name="coupon" value="1" checked>
              @else
              <input type="checkbox" name="coupon" value="1">
              @endif

              <span>Coupon</span>
            </label>
            </div><!-- col-4 -->




            <div class="col-lg-4">
            <label class="ckbox">
            	@if($users->division ==1)
              <input type="checkbox" name="division" value="1" checked>
              @else
              <input type="checkbox" name="division" value="1">
              @endif
              <span>Division</span>
            </label>
            </div><!-- col-4 -->



          



            <div class="col-lg-4">
            <label class="ckbox">
            	@if($users->orders == 1)
              <input type="checkbox" name="orders" value="1" checked>
              @else
              <input type="checkbox" name="orders" value="1">
              @endif

              <span>Orders</span>
            </label>
            </div><!-- col-4 -->


             <div class="col-lg-4">
            <label class="ckbox">
            	@if($users->seo ==1)
              <input type="checkbox" name="seo" value="1" checked>
              @else
              <input type="checkbox" name="seo" value="1">
              @endif
              <span>Seo</span>
            </label>
            </div><!-- col-4 -->



            <div class="col-lg-4">
            <label class="ckbox">
            	@if($users->reports  == 1)
              <input type="checkbox" name="report" value="1" checked>
              @else
               <input type="checkbox" name="report" value="1">

              @endif
             
              <span>Report</span>
            </label>
            </div><!-- col-4 -->

              <div class="col-lg-4">
            <label class="ckbox">
            	@if($users->return_order  == 1)
            	 <input type="checkbox" name="return_order" value="1" checked>
            	@else
            	 <input type="checkbox" name="return_order" value="1">
            	@endif
             
              <span>Return Order</span>
            </label>
            </div><!-- col-4 -->


          



              <div class="col-lg-4">
            <label class="ckbox">
            	@if($users->contact_message == 1)

              <input type="checkbox" name="contact_msg" value="1" checked>
              @else
              <input type="checkbox" name="contact_msg" value="1">
              @endif
              <span>Contact message</span>
            </label>
            </div><!-- col-4 -->  <div class="col-lg-4">
            <label class="ckbox">
            	@if($users->product_comment)
              <input type="checkbox" name="product_comment" value="1" checked>
              @else
              <input type="checkbox" name="product_comment" value="1">
              @endif
              <span>Product Comment</span>
            </label>
            </div><!-- col-4 -->  <div class="col-lg-4">
            <label class="ckbox">
            	@if($users->site_setting)
              <input type="checkbox" name="site_setting" value="1" checked>
              @else
              <input type="checkbox" name="site_setting" value="1">
              @endif
              <span>Site Seting</span>
            </label>
            </div><!-- col-4 -->
            </div><!-- row -->
            <br>
            <br>

            <div class="form-layout-footer">
              <button  type="Submit" class="btn btn-info mg-r-5">Submit Form</button>
              <button class="btn btn-secondary">Cancel</button>
            </div><!-- form-layout-footer -->
          </div><!-- form-layout -->
        </div><!-- card -->
        </form>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/bootstrap.tagsinput/0.8.0/bootstrap-tagsinput.min.js"></script>
        
   
@endsection