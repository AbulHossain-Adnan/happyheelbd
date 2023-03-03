<div class="ajax_quick_view">
  <div class="row">
    <div class="col-lg-6 col-md-6 mb-4 mb-md-0">
      <div class="product-image">
        <div class="product_img_box">
          <img id="product_img" src='{{ asset('product_images/'.@$product->image_one) }}' data-zoom-image="{{ asset('product_images/'.@$product->image_one) }}"
          alt="product_img1" />
        </div>
        <div
          id="pr_item_gallery"
          class="product_gallery_item slick_slider"
          data-slides-to-show="4"
          data-slides-to-scroll="1"
          data-infinite="false"
        >
          <div class="item">
            <a
              href="#"
              class="product_gallery_item active"
              data-image="{{ asset('product_images/'.@$product->image_one) }}"
              data-zoom-image="{{ asset('product_images/'.@$product->image_one) }}"
            >
              <img
                src="{{ asset('product_images/'.@$product->image_one) }}"
                alt="product_small_img1"
              />
            </a>
          </div>
          <div class="item">
            <a
              href="#"
              class="product_gallery_item"
              data-image="{{ asset('product_images/'.@$product->image_one) }}"
              data-zoom-image="{{ asset('product_images/'.@$product->image_one) }}"
            >
              <img
                src="{{ asset('product_images/'.@$product->image_one) }}"
                alt="product_small_img2"
              />
            </a>
          </div>
          <div class="item">
            <a
              href="#"
              class="product_gallery_item"
              data-image="{{ asset('product_images/'.@$product->image_one) }}"
              data-zoom-image="{{ asset('product_images/'.@$product->image_one) }}"
            >
              <img
                src="{{ asset('product_images/'.@$product->image_one) }}"
                alt="product_small_img3"
              />
            </a>
          </div>
          <div class="item">
            <a
              href="#"
              class="product_gallery_item"
              data-image="{{ asset('product_images/'.@$product->image_one) }}"
              data-zoom-image="{{ asset('product_images/'.@$product->image_one) }}"
            >
              <img
                src="{{ asset('product_images/'.@$product->image_one) }}"
                alt="product_small_img4"
              />
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-6 col-md-6">
      <div class="pr_detail">
        <div class="product_description">
          <h4 class="product_title"><a href="#">{{$product->product_name}}</a></h4>
          <div class="product_price">
            <span class="price">${{$product->discount_price}}{{$product->id}}</span>
            <del>${{$product->selling_price}}</del>
            <div class="on_sale">
              @php
              $amout=$product->selling_price-$product->discount_price;
              @endphp
              <span>{{ round($amout/$product->selling_price*100) }}% Off</span>
            </div>
          </div>
          <div class="rating_wrap">
            <div class="rating">
              <div class="product_rate" style="width: 80%"></div>
            </div>
            <span class="rating_num">(21)</span>
          </div>
          <div class="pr_desc">
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus
              blandit massa enim. Nullam id varius nunc id varius nunc.
            </p>
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
            <span class="switch_lable">Color</span>
            <div class="product_color_switch">
               @foreach ($product_color as $color)
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="color" id="color" value="{{$color}}" checked >
                <label class="form-check-label" for="inlineRadio1">{{$color}}</label>
              </div>
               @endforeach
            </div>
          </div>
          <div class="pr_switch_wrap">
            <span class="switch_lable">Size</span>
            <div class="product_size_switch">
              @php
               $i=0;
              @endphp
             
              @foreach ($product_size as $size)

              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="size" id="size" value="{{$size}}" checked>
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
      <button id="addtocarttest" onclick="addtocart()" class="btn btn-fill-out btn-addtocart " type="button">
              <i class="icon-basket-loaded"></i> Add to cart
            </button>


         



                                                

            <a class="add_compare" href="#"><i class="icon-shuffle"></i></a>
            <a class="add_wishlist" href="#"><i class="icon-heart"></i></a>
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
      </div>
    </div>
  </div>
</div>
<script src="{{ asset('templateassets') }}/assets/js/scripts.js"></script>
