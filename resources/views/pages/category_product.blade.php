@extends('layouts.shopwisemaster')
@section('content')

<!-- START SECTION BREADCRUMB -->
{{-- <div class="breadcrumb_section bg_gray page-title-mini">
    <div class="container"><!-- STRART CONTAINER -->
        <div class="row align-items-center">
        	<div class="col-md-6">
                <div class="page-title">
            		<h1>Shop Load More</h1>
                </div>
            </div>
            <div class="col-md-6">
                <ol class="breadcrumb justify-content-md-end">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active">Shop Load More</li>
                </ol>
            </div>
        </div>
    </div><!-- END CONTAINER-->
</div> --}}
<!-- END SECTION BREADCRUMB -->

<!-- START MAIN CONTENT -->
<div class="main_content">

<!-- START SECTION SHOP -->
<div class="section">
	<div class="container">
    	<div class="row">
			<div class="col-12">
            	<div class="row align-items-center mb-4 pb-1">
                    <div class="col-12">
                        <div class="product_header">
                            <div class="product_header_left">
                                <div class="custom_select">
                                    <select class="form-control form-control-sm">
                                        <option value="order">Default sorting</option>
                                        <option value="popularity">Sort by popularity</option>
                                        <option value="date">Sort by newness</option>
                                        <option value="price">Sort by price: low to high</option>
                                        <option value="price-desc">Sort by price: high to low</option>
                                    </select>
                                </div>
                            </div>
                            <div class="product_header_right">
                            	<div class="products_view">
                                    
                                </div>
                                <div class="custom_select">
                                    <select class="form-control form-control-sm">
                                        <option value="">Showing</option>
                                        <option value="9">9</option>
                                        <option value="12">12</option>
                                        <option value="18">18</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
                <div class="row shop_container loadmore" data-item="8" data-item-show="4" data-finish-message="No More Item to Show" data-btn="Load More">
                    
                    @foreach($products as $item)
                    <div class="col-lg-3 col-md-4 col-6 grid_item">
                        <div class="product">
                            <div class="">
                                <a href="{{url('/singleproduct/'.$item->id.'/'.$item->product_name)}}">
                                        <img src="{{ asset('product_images/'.@$item->attributes[0]['product_image']) }}" alt="product_img1">
                                   </a>
                                <div class="product_action_box">
                                    <ul class="list_none pr_action_btn">
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
                                    <h6 class="product_title"> <a href="{{url('/singleproduct/'.$item->id.'/'.$item->product_name)}}">{{$item->product_name}}</a></h6>
                                    <div class="product_price">
                                        <span class="price">{{@$item->discount_price}} TK</span>
                                        <del>
                                            {{@$item->selling_price}} TK
                                        </del>
                                        <div class="on_sale">
                                            @php
                                                $amout=$item->selling_price-$item->discount_price;
                                                @endphp
                                            <span>{{ round(@$amout/$item->selling_price*100) }}% Off</span>
                                        </div>
                                    </div>
                                    <div class="rating_wrap">
                                        <div class="rating">
                                            <div class="product_rate" style="width:90%"></div>
                                        </div>
                                        <span class="rating_num"></span>
                                    </div>
                                    <div class="pr_desc">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit
                                            massa enim. Nullam id varius nunc id varius nunc.</p>
                                    </div>
                                  <!--   <div class="pr_switch_wrap">
                                        <div class="product_color_switch">
                                            <span class="active" data-color="#87554B"></span>
                                            <span data-color="#333333"></span>
                                            <span data-color="#DA323F"></span>
                                        </div>
                                    </div> -->
                                    <div class="list_product_action_box">
                                        <ul class="list_none pr_action_btn">
                                            <li class="add-to-cart"><a href="#"><i class="icon-basket-loaded"></i> Add ddd
                                                    To Cart</a></li>
                                           
                                            <li><a href="{{url('/product-quick-view/'.$item->id)}}"
                                                    class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
                                            <li> <a id="{{$item->id}}" onclick="addwish(this.id)"><i class="icon-heart"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                        </div>
                    </div>
                    @endforeach
                </div>
        	</div>
        </div>
    </div>
</div>
</div>

    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

     </script>

    <script>
        @if (Session::has('message'))
            var type = "{{ Session::get('alert-type', 'success') }}"
            switch (type) {
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
    </script>



    <!-- displayed selected size  -->
    <script>
        var selectedSize = $('input[name="size"]:checked').val();
        $("#size_display").html("Size:" + " " + selectedSize);

        // when size value will be changed
        $(document).ready(function() {
            // Add a change event listener to the radio button inputs
            $('input[name="size"]').change(function() {
                // Retrieve the value of the selected input
                var selectedSize = $('input[name="size"]:checked').val();

                $("#size_display").html("Size:" + " " + selectedSize);
            });
        });
    </script>


    <!-- displayed selected size  -->
    {{-- <script>
        var selectedColor = $('input[name="color"]:checked').val();
        $("#color_display").html("Color:" + " " + selectedColor);

        $(document).ready(function() {
           
            $('input[name="color"]').change(function() {
              
                var selectedColor = $('input[name="color"]:checked').val();
                $("#color_display").html("Color:" + " " + selectedColor);
            });
        });
    </script> --}}


{{-- product added to shopping cart  --}}
    <script type="text/javascript">
        function addtocart() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            var id = $('#product_id').val();
            var attribute_id = $('#attribute_id').val();
            var size = $('input[name="size"]:checked').val();
            var quantity = $('#quantity').val();
            $.ajax({
                type: 'POST',
                datatype: 'json',
                data: {
                    product_id: id,
                    attribute_id: attribute_id,
                    size: size,
                    quantity: quantity
                },
                url: "/addtocart",
                success: function(data) {
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
                    if ($.isEmptyObject(data.error)) {
                        Toast.fire({
                            icon: 'success',
                            title: data.success
                        })
                        $('#applycouponfield').hide();
                    } else {
                        Toast.fire({
                            icon: 'error',
                            title: data.error
                        })
                    }

                }
            })
        }


    //  get attribute_id when clicked image    
        function selectAttribute(id){
             var dataId = $('#attribute_id').val(id);
            console.log(dataId);
        }
    // end 

        function addwish(id) {

            $.ajax({
                type: "GET",
                datatype: "json",
                url: "/addwishlistt/" + id,
                success: function(data) {
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
                    if ($.isEmptyObject(data.error)) {
                        Toast.fire({
                            icon: 'success',
                            title: data.success
                        })

                    } else {
                        Toast.fire({
                            icon: 'error',
                            title: data.error
                        })
                    }

                }
            })



        }

      
        function addnewsletter() {

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            let newsletterr = $('#newsemail').val();

            $.ajax({
                type: 'POST',
                datatype: 'json',
                data: {
                    newsletter: newsletterr
                },
                url: '/add/newsletter',
                success: function(data) {
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
                    if ($.isEmptyObject(data.error)) {
                        Toast.fire({
                            icon: 'success',
                            title: data.success
                        })

                    } else {
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
