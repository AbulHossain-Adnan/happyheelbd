@extends('admin.admin_layout')
<link href="https://cdn.jsdelivr.net/bootstrap.tagsinput/0.8.0/bootstrap-tagsinput.css" rel="stylesheet"/>
@section('adminMain')

<!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">Starlight</a>
        <a class="breadcrumb-item" href="index.html">Forms</a>
        <span class="breadcrumb-item active">Form Layouts</span>
      </nav>

        <div class="card pd-20 pd-sm-40">
          <h2 class="card-body-title"></h2>
          <h2 class="mg-b-20 mg-sm-b-30">Product view</h2>
       
        
          <div class="form-layout">
            <div class="row mg-b-25">
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Product Name: <span class="tx-danger">*</span></label><br>
                   
                   <b> {{$product->product_name}}</b>
              
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Product Code: <span class="tx-danger">*</span></label><br>
                 
                 <b>{{$product->product_code}}</b>
                </div>
              </div><!-- col-4 -->
          

                <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Quantity<span class="tx-danger">*</span></label><br>
                 

                 <b>{{$product->product_quantity}}</b>
                </div>
              </div><!-- col-4 -->

                <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Category Name<span class="tx-danger">*</span></label><br>
                 

                 <b>{{$product->category->category_name}}</b>
                </div>
              </div><!-- col-4 -->

                {{-- <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Brand Name<span class="tx-danger">*</span></label><br>
                 

                 <b>{{$product->brand->brand_name}}</b>
                </div>
              </div><!-- col-4 --> --}}





             
             
            
        

              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Product size<span class="tx-danger">*</span></label><br>
                
              <b> {{$product->product_size}}</b>
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Product color<span class="tx-danger">*</span></label><br>
                 
             <b>{{$product->product_color}}</b>
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Selling price<span class="tx-danger">*</span></label><br>
               <b>{{$product->selling_price}}</b>
                </div>
              </div><!-- col-4 -->
              
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">discount price<span class="tx-danger">*</span></label><br>
                
                <b>{{$product->discount_price}}</b>
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">status<span class="tx-danger">*</span></label><br>
                  @if($product->status == '1')
                  <span class="badge badge-success">Active</span>
                  @else
                  <span class="badge badge-danger">Dactive</span>
                  @endif
                </div>
              </div><!-- col-4 -->

              <div class="col-lg-12">
                <div class="form-group">
                  <label class="form-control-label">Product details<span class="tx-danger">*</span></label>
                
            
               {!! $product->product_details !!}
             
                 
                </div>
              </div><!-- col-4 -->
        
            @foreach($product->attributes as $file)
              <div class="col-lg-2">
                <div class="form-group">
                  <label class="form-control-label"> image<span class="tx-danger">*</span></label><br>
                  <img src="{{asset('product_images/'.$file->product_image)}}" width="100">
                </div>
              </div><!-- col-4 -->
          @endforeach
                
              
              <br> <br>
           
            
             
              
            </div><!-- row -->
            <br> <br> <br>
            <hr>
            <br>
                   <br>
                  
                
              
            <div class="row">
            <div class="col-lg-4">
              @if($product->main_slider == '1')
              
              <span class="badge badge-success">Active</span>
              @else
              <span class="badge badge-danger">Inactive</span>
              @endif
              <span>Main Slider</span>
            </label>
            </div><!-- col-4 -->



            <div class="col-lg-4">
            
               @if($product->mid_slider == '1')
              
              <span class="badge badge-success">Active</span>
              @else
              <span class="badge badge-danger">Inactive</span>
              @endif
              <span>Mid Slider</span>
            </label>
            </div><!-- col-4 --><br>






            <div class="col-lg-4">
             @if($product->hot_deal == '1')
              
              <span class="badge badge-success">Active</span>
              @else
              <span class="badge badge-danger">Inactive</span>
              @endif
              <span>Hot Deal</span>
            </label>
            </div><!-- col-4 --><br>




            {{-- <div class="col-lg-4">
             @if($product->hot_new == '1')
              
              <span class="badge badge-success">Active</span>
              @else
              <span class="badge badge-danger">Inactive</span>
              @endif
              <span>Hot New</span>
            </label>
            </div> --}}



          



            <div class="col-lg-4">
             @if($product->trend == '1')
              
              <span class="badge badge-success">Active</span>
              @else
              <span class="badge badge-danger">Inactive</span>
              @endif
              <span>trend product</span>
            </label>
            </div><!-- col-4 -->

            <div class="col-lg-4">
             @if($product->best_rated == '1')
              
              <span class="badge badge-success">Active</span>
              @else
              <span class="badge badge-danger">Inactive</span>
              @endif
              <span>best rated</span>
            </label>
            </div><!-- col-4 -->
            </div><!-- row -->
            <br>
            <br>

            <div class="form-layout-footer">
               <a class="btn btn-success" href="{{ route('products.index') }}" class="nav-link">Back</a>
              
            </div><!-- form-layout-footer -->
          </div><!-- form-layout -->
        </div><!-- card -->
        </form>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/bootstrap.tagsinput/0.8.0/bootstrap-tagsinput.min.js"></script>
        

        <script type="text/javascript">
        function readURL(input){
          if(input.files && input.files[0]){
            let reader = new FileReader();
               reader.onload = function(e){
              $('#one')
              .attr('src', e.target.result)
              .width(100)
              .height(100);

            };
            reader.readAsDataURL(input.files[0]);
          }
        }
        
        </script>


        <script type="text/javascript">
        function readURL2(input){
          if(input.files && input.files[0]){
            let reader = new FileReader();
               reader.onload = function(e){
              $('#two')
              .attr('src', e.target.result)
              .width(100)
              .height(100);

            };
            reader.readAsDataURL(input.files[0]);
          }
        }
        
        </script>


        <script type="text/javascript">
        function readURL3(input){
          if(input.files && input.files[0]){
            let reader = new FileReader();
               reader.onload = function(e){
              $('#three')
              .attr('src', e.target.result)
              .width(100)
              .height(100);

            };
            reader.readAsDataURL(input.files[0]);
          }
        }
        
    </script>

@endsection