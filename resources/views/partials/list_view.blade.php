
  @foreach($all_products as $item)
                        <div class="col-lg-3 col-md-4 col-6 grid_item">
                            <div class="product">
                                 <span class="pr_flash">New</span>
                                <div class="">
                                   <a href="{{url('/singleproduct/'.$item->id)}}">
                                        <img src="{{ asset('product_images/'.@$item->attributes[0]['product_image']) }}" alt="product_img1">
                                   </a>
                                    <div class="product_action_box">
                                        <ul class="list_none pr_action_btn">
                                            {{-- <li class="add-to-cart">
                                                 <a type="button" id="{{ $item->id }} " data-bs-toggle="modal"
                                                    data-bs-target="#cartmodal" onclick="productview(this.id)">
                                                    <i class="icon-basket-loaded"></i>
                                                </a>
                                                </li> --}}
                                           
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
                                    <h6 class="product_title"><a href="{{url('/singleproduct/'.$item->id)}}">{{$item->product_name}}</a></h6>
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
               