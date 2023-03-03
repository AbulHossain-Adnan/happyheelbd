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
         
        <form action="{{ route('user_role.store') }}" method="post">
        @csrf
          <div class="form-layout">
            <div class="row mg-b-25">
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Name: <span class="tx-danger">*</span></label>
                  @error('name')
                  <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    
                  <input class="form-control" type="text" name="name"  placeholder="Enter user name">
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
                  <input class="form-control" type="email" name="email" placeholder="Enter user email">
                </div>
              </div><!-- col-4 -->
             
             
             
         
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Password<span class="tx-danger">*</span></label>
                  @error('password')
                  <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  <input class="form-control" type="password" name="password" placeholder="Enter password">
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
              <input type="checkbox" name="product" value="1">
              <span>Product</span>
            </label>
            </div><!-- col-4 -->



            <div class="col-lg-4">
            <label class="ckbox">
              <input type="checkbox" name="category" value="1">
              <span>Category</span>
            </label>
            </div><!-- col-4 -->






            <div class="col-lg-4">
            <label class="ckbox">
              <input type="checkbox" name="coupon" value="1">
              <span>Coupon</span>
            </label>
            </div><!-- col-4 -->




            <div class="col-lg-4">
            <label class="ckbox">
              <input type="checkbox" name="division" value="1">
              <span>Division</span>
            </label>
            </div><!-- col-4 -->



          



            <div class="col-lg-4">
            <label class="ckbox">
              <input type="checkbox" name="orders" value="1">
              <span>Orders</span>
            </label>
            </div><!-- col-4 -->


             <div class="col-lg-4">
            <label class="ckbox">
              <input type="checkbox" name="seo" value="1">
              <span>Seo</span>
            </label>
            </div><!-- col-4 -->



            <div class="col-lg-4">
            <label class="ckbox">
              <input type="checkbox" name="report" value="1">
              <span>Report</span>
            </label>
            </div><!-- col-4 -->
              <div class="col-lg-4">
            <label class="ckbox">
              <input type="checkbox" name="return_order" value="1">
              <span>Return Order</span>
            </label>
            </div><!-- col-4 -->
              <div class="col-lg-4">
            <label class="ckbox">
              <input type="checkbox" name="contact_msg" value="1">
              <span>Contact message</span>
            </label>
            </div><!-- col-4 --> 

             <div class="col-lg-4">
            <label class="ckbox">
              <input type="checkbox" name="product_comment" value="1">
              <span>Product Comment</span>
            </label>
            </div><!-- col-4 --> 

             <div class="col-lg-4">
            <label class="ckbox">
              <input type="checkbox" name="site_setting" value="1">
              <span>Site Seting</span>
            </label>
            </div><!-- col-4 -->

             <div class="col-lg-4">
            <label class="ckbox">
              <input type="checkbox" name="post" value="1">
              <span>Post</span>
            </label>
            </div><!-- col-4 -->
              <div class="col-lg-4">
            <label class="ckbox">
              <input type="checkbox" name="stock" value="1">
              <span>Stock</span>
            </label>
            </div><!-- col-4 -->
            </div><!-- row -->
            <br>
            <br>

            <div class="form-layout-footer">
              <button class="btn btn-info mg-r-5">Submit Form</button>
              <button class="btn btn-secondary">Cancel</button>
            </div><!-- form-layout-footer -->
          </div><!-- form-layout -->
        </div><!-- card -->
        </form>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/bootstrap.tagsinput/0.8.0/bootstrap-tagsinput.min.js"></script>
        


        
@endsection