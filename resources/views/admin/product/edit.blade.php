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
          <h6 class="card-body-title">New product Add</h6>
          <p class="mg-b-20 mg-sm-b-30">New Product Add Form</p>
        <form action="{{ route('products.update',$product->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        
          <div class="form-layout">
            <div class="row mg-b-25">
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Product Name: <span class="tx-danger">*</span></label>
                  @error('Product_name')
                  <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <input class="form-control" type="hidden" name="id" value="{{$product->id}}">
                  <input class="form-control" type="text" name="product_name"  value="{{$product->product_name}}">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Product Code: <span class="tx-danger">*</span></label>
                  @error('Product_code')
                  <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  <input class="form-control" type="text" name="product_code"  value="{{$product->product_code}}">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Quantity<span class="tx-danger">*</span></label>
                  @error('Product_quantity')
                  <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  <input class="form-control" type="text" name="product_quantity" value="{{$product->product_quantity}}">
                </div>
              </div><!-- col-4 -->
             
              <div class="col-lg-6">
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">Category: <span class="tx-danger">*</span></label>
                  @error('category_id')
                  <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  <select class="form-control select2" data-placeholder="Choose country" name="category_id" value="{{$product->category_id}}">
                    <option label="Choose category"></option>

                   
                        @foreach ($categories as $item)
                            
                      
                    
                    <option value="{{$item->id}}" <?php 

                    if($item->id == $product->category_id){
                      echo "selected";
                    }


                  ?>>{{$item->category_name}}</option>

                    @endforeach
                 
                  </select>
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-6">
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">Subcategory: <span class="tx-danger">*</span></label>
                  <select class="form-control select2" data-placeholder="Choose country" name="subcategory_id">
                   
                  </select>
                </div>
              </div><!-- col-4 -->
              {{-- <div class="col-lg-4">
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">Brand: <span class="tx-danger">*</span></label>
                  @error('brand_id')
                  <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  <select class="form-control select2" data-placeholder="Choose country" name="brand_id" value="{{$product->brand_id}}">

                    <option label="Choose brand"></option>
                    @foreach ($brands as $item)  
                    <option value="{{$item->id}}" <?php 

                    if($item->id == $product->brand_id){
                      echo "selected";
                    }


                  ?>>{{$item->brand_name}}</option>
                    @endforeach
                   
                  </select>
                </div>
              </div> --}}
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">Product size<span class="tx-danger">*</span></label>
                  @error('product_size')
                  <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  <input class="form-control" type="text" name="product_size" id="size" data-role="tagsinput" value="{{$product->product_size}}">
                </div>
              </div><!-- col-4 -->

                <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">Heel size<span class="tx-danger">*</span></label>
                  @error('product_size')
                  <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  <input class="form-control" type="text" name="heel_size" id="size" data-role="tagsinput" value="{{$product->heel_size}}">
                </div>
              </div><!-- col-4 -->

               <div  id="input_fields_wrap" >
            <div class="row input_field" id="addMore" >

              @foreach($product->productAttributes as $item)

              <div class="col-lg-4" id="inputRow">
                <div class="form-group">
                  <label class="form-control-label">Product color<span class="tx-danger">*</span></label>
                  @error('Product_color')
                  <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  <input class="form-control" type="text" name="product_color[]" id="color" placeholder="Enter product color"  value="{{$item->product_color}}">
                </div>
              </div><!-- col-4 -->

              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Product Image <span class="tx-danger">*</span></label>
                
                  <input class="form-control" type="file" name="product_image[]" >
                </div>
              </div>

              <div class="col-lg-2 mt-4">
                <div class="form-group">
                  {{-- <label class="form-control-label">Old image <span class="tx-danger">*</span></label> --}}
                
                  <img src="{{asset('product_images/'.$item->product_image)}}" width="60">
                </div>
              </div>


              
              <div class="col-lg-2 mt-4">
                <div class="form-group">
                <button type="hidden" class="btn btn-danger hidden"  id="removeRow">delete</button>
                </div>
              </div><!-- col-4 -->
             @endforeach
            </div>
            </div>

                <div class="col-lg-12 ">
                <div class="form-group float-right">
                <button type="button" class="btn btn-success" onclick="addMore()">addMore</button>
                </div>
              </div><!-- col-4 -->


              {{-- <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Product color<span class="tx-danger">*</span></label>
                  @error('Product_color')
                  <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  <input class="form-control" type="text" name="product_color" id="color" data-role="tagsinput" value="{{$product->product_color}}">
                </div>
              </div><!-- col-4 --> --}}
           


               <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">Selling price<span class="tx-danger">*</span></label>
                  @error('selling_price')
                  <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  <input class="form-control" type="text" name="selling_price" placeholder="Enter product selling price" value="{{old('selling_price')}}" value="{{$product->selling_price}}">
                </div>
              </div><!-- col-4 -->
  
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">discount price<span class="tx-danger">*</span></label>
                  @error('discount_price')
                  <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  <input class="form-control" type="text" name="discount_price" placeholder="Enter product discount price" value="{{old('discount_price')}}">
                </div>
              </div><!-- col-4 -->
          
      
              <div class="col-lg-12">
                <div class="form-group">
                  <label class="form-control-label">Product details<span class="tx-danger">*</span></label>
                  @error('product_details')
                  <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  <textarea class="form-control" type="text" name="product_details" id="summernote"> value="{{$product->product_details}}"</textarea>
                 
                </div>
              </div><!-- col-4 -->
           
             
            <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label"> Main Banner Image<span class="tx-danger">*</span></label>
                  @error('image_one')
                  <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  <input class="form-control" type="file" id="file" name="image_one" onchange="readURL(this)" >
                  <img src="#" alt="" id="one">
                </div>
              </div> 

              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label"> Mid Banner Image<span class="tx-danger">*</span></label>
                  @error('image_one')
                  <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  <input class="form-control" type="file" id="file" name="image_two" onchange="readURL2(this)" >
                  <img src="#" alt="" id="two">
                </div>
              </div> 
            
      
            
          <!--     <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label"> Old image one (main slider)<span class="tx-danger">*</span></label>
                  @error('image_one')
                  <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  <input class="form-control" type="file" id="file" name="image_one" onchange="readURL(this)" value="{{$product->image_one}}">
                  <img src="#" alt="" id="one">
                  <img src="{{asset('product_images/'.$product->image_one)}}" width="100">
                </div>
              </div> -->

            <!--   <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label"> Old image two (main slider)<span class="tx-danger">*</span></label>
                  @error('image_two')
                  <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  <input class="form-control" type="file" onchange="readURL2(this)" name="image_two" >
                  <img src="#" alt="" id="two">
                  <img src="{{asset('product_images/'.$product->image_two)}}" alt="" width="100">
                </div>
              </div> -->
           <!--    <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label"> image three (main slider)<span class="tx-danger">*</span></label>
                  @error('image_three')
                  <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  <input class="form-control" type="file" name="image_three" onchange="readURL3(this)" >
                  <img src="#" alt="" id="three">
                 <img src="{{asset('product_images/'.$product->image_three)}}" alt="" width="100">
                      
                 
                </div>
              </div>
 -->
             

               @foreach($product->files as $file)

              <div class="col-lg-2">
                <div class="form-group">
                  <label class="form-control-label"> image<span class="tx-danger">*</span></label><br>
                  <img src="{{asset('product_images/'.@$file->product_image)}}" width="100">
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
            <label class="ckbox">
              @if($product->main_slider == '1')
              <input type="checkbox" name="main_slider" value="1" checked>
              @else
              <input type="checkbox" name="main_slider" value="1">
              @endif
              <span>Main banner </span>
            </label>
            </div><!-- col-4 -->



            <div class="col-lg-4">
            <label class="ckbox">
               @if($product->mid_slider == '1')
              <input type="checkbox" name="mid_slider" value="1" checked>
              @else
              <input type="checkbox" name="mid_slider" value="1">
              @endif
              <span>Mid Banner</span>
            </label>
            </div><!-- col-4 -->






            <div class="col-lg-4">
            <label class="ckbox">
               @if($product->hot_deal == '1')
              <input type="checkbox" name="hot_deal" value="1" checked>
              @else
              <input type="checkbox" name="hot_deal" value="1">
              @endif
              <span>Hot Deal</span>
            </label>
            </div><!-- col-4 -->



{{-- 
            <div class="col-lg-4">
            <label class="ckbox">
               @if($product->hot_new == '1')
              <input type="checkbox" name="hot_new" value="1" checked>
              @else
              <input type="checkbox" name="hot_new" value="1">
              @endif
              <span>hot new</span>
            </label>
            </div> --}}



          



            <div class="col-lg-4">
            <label class="ckbox">
              @if($product->trend == '1')
              <input type="checkbox" name="trend" value="1" checked>
              @else
              <input type="checkbox" name="trend" value="1">
              @endif
              <span>Trend Product</span>
            </label>
            </div><!-- col-4 -->




             {{-- <div class="col-lg-4">
            <label class="ckbox">
              @if($product->byeonegetone == '1')
              <input type="checkbox" name="byeonegetone" value="1" checked>
              @else
              <input type="checkbox" name="byeonegetone" value="1">
              @endif
              <span>byeonegetone</span>
            </label>
            </div> --}}



            <div class="col-lg-4">
            <label class="ckbox">
                @if($product->best_rated == '1')
              <input type="checkbox" name="best_rated" value="1" checked>
              @else
              <input type="checkbox" name="best_rated" value="1">
              @endif
              <span>best rated</span>
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

     <script type="text/javascript">
        function readURL4(input){
          if(input.files && input.files[0]){
            let reader = new FileReader();
               reader.onload = function(e){
              $('#fore')
              .attr('src', e.target.result)
              .width(100)
              .height(100);

            };
            reader.readAsDataURL(input.files[0]);
          }
        }
        
    </script>

     <script type="text/javascript">
        function readURL5(input){
          if(input.files && input.files[0]){
            let reader = new FileReader();
               reader.onload = function(e){
              $('#five')
              .attr('src', e.target.result)
              .width(100)
              .height(100);

            };
            reader.readAsDataURL(input.files[0]);
          }
        }
        
    </script>

     <script type="text/javascript">
      
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});


      $(document).ready(function(){
        $('select[name="category_id"]').on('change',function(){
          var category_id = $(this).val();
          if(category_id){
            $.ajax({
              type:"GET",
              dataType:"json",
              url:"/get_subcategory/"+category_id,
              success:function(data){
                $('select[name="subcategory_id"]').empty();
                $.each(data, function(key, value){
                  $('select[name="subcategory_id"]').append('<option value ="'+ value.id + '">' + value.sub_category_name + '</option>');
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