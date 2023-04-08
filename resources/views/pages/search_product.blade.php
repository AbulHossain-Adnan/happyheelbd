@extends('layouts.shopwisemaster')
@section('content')
<!-- START SECTION BREADCRUMB -->
{{-- <div class="breadcrumb_section bg_gray page-title-mini">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="page-title">
                    <h1>Search Products</h1>
                </div>
            </div>
            <div class="col-md-6">
                <ol class="breadcrumb justify-content-md-end">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active">Shop Left Sidebar</li>
                </ol>
            </div>
        </div>
    </div>
</div> --}}
<!-- END SECTION BREADCRUMB -->

<!-- START MAIN CONTENT -->
<div class="main_content">

<!-- START SECTION SHOP -->
<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <div class="row align-items-center mb-4 pb-1">
                    <div class="col-12">
                        <div class="product_header">
                            <div class="product_header_left">
                                {{-- <div class="custom_select">
                                    <select class="form-control form-control-sm">
                                        <option value="order">Default sorting</option>
                                        <option value="popularity">Sort by popularity</option>
                                        <option value="date">Sort by newness</option>
                                        <option value="price">Sort       price: low to high</option>
                                        <option value="price-desc">Sort by price: high to low</option>
                                    </select>
                                </div> --}}
                            </div>
                            <div class="product_header_right">
                                <div class="products_view">
                                    {{-- <a href="javascript:Void(0);" class="shorting_icon grid active"><i class="ti-view-grid"></i></a>
                                    <a href="javascript:Void(0);" class="shorting_icon list"><i class="ti-layout-list-thumb"></i></a> --}}
                                </div>
                                {{-- <div class="custom_select">
                                    <select class="form-control form-control-sm">
                                        <option value="">Showing</option>
                                        <option value="9">9</option>
                                        <option value="12">12</option>
                                        <option value="18">18</option>
                                    </select>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div> 
                <div class="row shop_container">


                @foreach($products as $item)

                    <div class="col-md-4 col-6">
                        <div class="product">
                            <div class="product_img">
                                <a href="shop-product-detail.html">
                                    <img src="{{ asset('product_images/'.@$item->attributes[0]['product_image']) }}">
                                </a>
                                <div class="product_action_box">
                                    <ul class="list_none pr_action_btn">
                                        <li class="add-to-cart">
                                             <a type="button" type="button" id="{{ $item->id }} " data-bs-toggle="modal"
                                                    data-bs-target="#cartmodal" onclick="productview(this.id)">
                                                    <i class="icon-basket-loaded"></i>
                                                </a>
                                        </li>
                                        
                                        <li>
                                           <a href="{{url('/product-quick-view/'.$item->id)}}"
                                                    class="popup-ajax"><i class="icon-magnifier-add"></i></a>
                                        </li>
                                        <li>
                                             <a id="{{$item->id}}" onclick="addwish(this.id)"><i class="icon-heart"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_info">
                                <h6 class="product_title"><a href="{{url('/singleproduct/'.$item->id)}}">{{ $item->product_name }}</a></h6>
                                <div class="product_price">
                                     <span class="pr_flash">New</span>
                                    <span class="price">{{@$item->discount_price}} TK</span>
                                        <del>
                                            {{@$item->selling_price}} TK
                                        </del>
                                    <div class="on_sale">
                                         @php
                                                $amout=$item->selling_price-$item->discount_price;
                                                @endphp
                                         <span>{{ round($amout/$item->selling_price*100) }}% Off</span>
                                    </div>
                                </div>
                                <div class="rating_wrap">
                                    <div class="rating">
                                        <div class="product_rate" style="width:80%"></div>
                                    </div>
                                    <span class="rating_num">(21)</span>
                                </div>
                                <div class="pr_desc">
                                    <p></p>
                                </div>
                                <div class="pr_switch_wrap">
                                    <div class="product_color_switch">
                                        <span class="active" data-color="#87554B"></span>
                                        <span data-color="#333333"></span>
                                        <span data-color="#DA323F"></span>
                                    </div>
                                </div>
                                <div class="list_product_action_box">
                                    <ul class="list_none pr_action_btn">
                                        <li class="add-to-cart"><a href="#"><i class="icon-basket-loaded"></i> Add To Cart</a></li>
                                        
                                        <li><a href="shop-quick-view.html" class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
                                        <li><a href="#"><i class="icon-heart"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
            @endforeach
 {!! $products->links() !!}
                </div>
               <!--  <div class="row">
                    <div class="col-12">
                        <ul class="pagination mt-3 justify-content-center pagination_style1">
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#"><i class="linearicons-arrow-right"></i></a></li>
                        </ul>
                    </div>
                </div> -->
            </div>
            <div class="col-lg-3 order-lg-first mt-4 pt-2 mt-lg-0 pt-lg-0">
                <div class="sidebar">
                    <div class="widget">
                        <h5 class="widget_title">Filter</h5>
                        <div class="filter_price">
                             <div id="price_filter" data-min="0" data-max="500" data-min-value="50" data-max-value="300" data-price-sign="$"></div>
                           <!--   <div class="price_range">
                                 <span>Price: <span id="flt_price"></span></span>
                                 <input type="hidden" id="price_first">
                                 <input type="hidden" id="price_second">
                             </div> -->
                         </div>
                    </div>

                    <div class="widget">
                        <h5 class="widget_title">Price</h5> 
                        <ul class="list_brand">
                    <li>
                                <a href="{{URL::current()}}" >ALL</a></li>
                                <li><a href="{{URL::current().'?sort=price_asc'}}" >Price-Low to High</a></li>
                                <li><a href="{{URL::current().'?sort=price_dsc'}}" > Price-High to Low</a></li>
                                <li><a href="{{URL::current().'?sort=newest'}}" > Price-Newes Product</a></li>
                                <!-- <li><a href="{{URL::current().'?sort=popolarity'}}" > Popolarity</a></li> -->

                        </ul>
                    </div>
                    <div class="widget">
                        <h5 class="widget_title">Size</h5>
                        <div class="product_size_switch">


    <span><a href="{{URL::current().'?sort=size_37  '}}" >37</a></span>
    <span><a href="{{URL::current().'?sort=price_asc'}}" >38</a></span>
    <span><a href="{{URL::current().'?sort=price_asc'}}" >39</a></span>
    <span><a href="{{URL::current().'?sort=price_asc'}}" >40</a></span>
    <span><a href="{{URL::current().'?sort=price_asc'}}" >41</a></span> 

               
                        </div>
                    </div>
                    <div class="widget">
                        <h5 class="widget_title">Color</h5>
                        <div class="product_color_switch">
                            <span data-color="#87554B"></span>
                            <span data-color="#333333"></span>
                            <span data-color="#DA323F"></span>
                            <span data-color="#2F366C"></span>
                            <span data-color="#B5B6BB"></span>
                            <span data-color="#B9C2DF"></span>
                            <span data-color="#5FB7D4"></span>
                            <span data-color="#2F366C"></span>
                        </div>
                    </div>
                    <div class="widget">
                        <div class="shop_banner">
                            <div class="banner_img overlay_bg_20">
                                <img src="{{ asset('templateassets') }}/assets/images/sidebar_banner_img.jpg" alt="sidebar_banner_img">
                            </div> 
                            <div class="shop_bn_content2 text_white">
                                <h5 class="text-uppercase shop_subtitle">New Collection</h5>
                                <h3 class="text-uppercase shop_title">Sale 30% Off</h3>
                                <a href="#" class="btn btn-white rounded-0 btn-sm text-uppercase">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END SECTION SHOP -->


</div>

</div>














<script type="text/javascript">
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
</script>


<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script type="text/javascript">

    $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
</script>
    

 {{-- <script>
    @if(Session::has('message'))
                var type="{{Session::get('alert-type','success')}}"
                switch(type){
                    case 'info':
                         toastr.info("{{ Session::get('message') }}");
                         break;
                    case 'success':
                        toastr.success("{{ Session::get('message') }}");
                        break;
                    case 'warning':
                       toastr.warning("{{ Session::get('message') }}");
                        break;
                    case 'error':
                        toastr.error("{{ Session::get('message') }}");
                        break;
                }
              @endif
  </script> --}}



<script type="text/javascript">
    function addtocart(){
       $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

       var id=$('#product_id').val();
       var color=$('#color').val();
       var size=$('#size').val();
       var quantity=$('#quantity2').val();


       $.ajax({
        type:'POST',
        datatype:'json',
        data:{product_id:id,color:color,size:size,quantity:quantity},
        url:"/addtocart",
        success:function(data){
            console.log(data)
            minicart();
           
            $("#cartmodal").modal('hide')

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
        else{
        Toast.fire({
        icon: 'error',
        title: data.error
        })
        }

        }
       })
    }




function addwish(id){
   
    $.ajax({
        type:"GET",
        datatype:"json",
        url:"/addwishlistt/"+id,
        success:function(data){
            miniwishlist();
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

                    }
                    else{
                        Toast.fire({
                          icon: 'error',
                          title: data.error
                        })
                    }

        }
    })



}

function addnewsletter(){
 
     $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
     let newsletterr= $('#newsemail').val();

     $.ajax({
        type:'POST',
        datatype:'json',
        data:{newsletter:newsletterr},
        url:'/add/newsletter',
        success:function(data){
            $('#newsemail').val("")
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

                    }
                    else{
                        Toast.fire({
                          icon: 'error',
                          title: data.error
                        })
                    }
        }
        })
}

</script>

@endsection