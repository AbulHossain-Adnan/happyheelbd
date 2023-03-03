<div class="ajax_quick_view">
  <div class="row">
    <div class="col-lg-6 col-md-6 mb-4 mb-md-0">
      <div class="product-image">
        <div class="product_img_box">
          <img id="product_img" src='{{ asset('product_images/'.@$product->files[0]['product_image']) }}' data-zoom-image="{{ asset('product_images/'.@$product->files[0]['product_image']) }}"
          alt="product_img1" />
        </div>
        <div
          id="pr_item_gallery"
          class="product_gallery_item slick_slider"
          data-slides-to-show="4"
          data-slides-to-scroll="1"
          data-infinite="false"
        >


@foreach($product->files as $file)
          <div class="item">
            <a
              href="#"
              class="product_gallery_item active"
              data-image="{{ asset('product_images/'.@$file->product_image) }}"
              data-zoom-image="{{ asset('product_images/'.@$file->product_image) }}"
            >
              <img
                src="{{ asset('product_images/'.@$file->product_image) }}"
                alt="product_small_img1"
              />
            </a>
          </div>
  @endforeach
          
        
        </div>
      </div>
    </div>
    <div class="col-lg-6 col-md-6">
      <div class="pr_detail">
        <div class="product_description">
          <h4 class="product_title"><a href="#">{{$product->product_name}}</a></h4>
          <div class="product_price">
            <span class="price">{{$product->discount_price}} TK</span>
            <del>{{$product->selling_price}} TK</del>
            <div class="on_sale">
              @php
              $amout=$product->selling_price-$product->discount_price;
              @endphp
              <span>{{ round($amout/$product->selling_price*100) }}% Off</span>
            </div>
          </div>
          <div class="rating_wrap">
            <div class="rating">
              <div class="product_rate" style="width: 100%"></div>
            </div>
            <span class="rating_num"></span>
          </div>
          <div class="pr_desc">
           
              <p>{!! $product->product_details !!}</p>
           
          </div>
          <div class="product_sort_info">
            <ul>
              <li>
                <i class="linearicons-shield-check"></i> Offer is valid only for happyhealbd.com
              </li>
              <li><i class="linearicons-sync"></i> Good Quality</li>
              <li>
                <i class="linearicons-bag-dollar"></i> Cash on Delivery
                available
              </li>
            </ul>
          </div>
            <input type="hidden" id="product_id" name="product_id" value="{{$product->id}}">
          <div class="pr_switch_wrap">
            <span class="switch_lable">Color: </span>
            <div class="product_color_switch">
               @foreach ($product_color as $key=>$color)

              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="color" id="color" {{$key == 0? "checked" :"" }} value="{{$color}}" >
                <label class="form-check-label" for="inlineRadio1">{{$color}}</label>
              </div>
               @endforeach
            </div>
          </div>
          <div class="pr_switch_wrap">
            <span class="switch_lable">Size: </span>
            <div class="product_size_switch">
              @php
               $i=0;
              @endphp
             
              @foreach ($product_size as $key=>$size)

              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="size" id="size" value="{{$size}}" {{$key == 0? "checked" :"" }} >
                <label class="form-check-label" for="inlineRadio1">{{$size}}</label>
              </div>

            
              @endforeach
            
            </div>
          </div>
        </div>
        <hr />
        <div class="cart_extra">
          <div class="cart-product-quantity">
              
              <!-- <label for="exampleInputQuantity">Quantity </label> -->
              <input style="width: 90px;height: 50px;" type="number" name="qty" id="quantity" class="form-control"
                                   value="1" pattern="[0-9]">
             
          </div>
          <div class="cart_btn">
      <button id="addtocarttest" onclick="addtocart_two()" class="btn btn-fill-out btn-addtocart " type="button">
              <i class="icon-basket-loaded"></i> Add to cart
            </button>


         



                                                

         <!--    <a class="add_compare" href="#"><i class="icon-shuffle"></i></a>
            <a class="add_wishlist" href="#">
              <i class="icon-heart"></i>
            </a> -->
          </div>
        </div>
        <hr />
        <ul class="product-meta">
         
          <li>Category: <a href="#">Women Shoes</a></li>
          <li>
            Tags: <a href="#" rel="tag">Happyheelbd</a>,
            <a href="#" rel="tag">Women Shoes</a>
          </li>
        </ul>

        <div class="product_share">
          <span>Share:</span>
          <ul class="social_icons">
            <li>
              <a href="#"><i class="ion-social-facebook"></i></a>
            </li>
            <li>
              <a href="#"><i class="ion-social-twitter"></i></a>
            </li>
            <li>
              <a href="#"><i class="ion-social-googleplus"></i></a>
            </li>
            <li>
              <a href="#"><i class="ion-social-youtube-outline"></i></a>
            </li>
            <li>
              <a href="#"><i class="ion-social-instagram-outline"></i></a>
            </li>
          </ul>
        </div>


          <div class="card mb-3">
                  <img src="{{ asset('templateassets/assets/images/women/size2.jpg') }}" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Size Measurement</h5>
                    <p class="card-text">This will help you to get idea about your foot size. Be sure about your foot size and get best product from us we will love to give you our best  <i class="fa-solid fa-face-smile"></i> <i class="fa-solid fa-face-smile"></i> <i class="fa-sharp fa-solid fa-heart"></i> <i class="fa-sharp fa-solid fa-heart"></i> <i class="fa-sharp fa-solid fa-heart"></i></p>
                    <p class="card-text"><small class="text-muted"></small></p>
                  </div>
                </div>




      </div>
    </div>
  </div>
</div>
<script src="{{ asset('templateassets') }}/assets/js/scripts.js"></script>
