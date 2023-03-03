<!-- Main Navigation -->

<nav class="main_nav">
    <div class="container">
        <div class="row">
            <div class="col">

                <div class="main_nav_content d-flex flex-row">

                    <!-- Categories Menu -->

                    <div class="cat_menu_container">
                        <div class="cat_menu_title d-flex flex-row align-items-center justify-content-start">
                            <div class="cat_burger"><span></span><span></span><span></span></div>
                            <div class="cat_menu_text">categories</div>
                        </div>

                        <ul class="cat_menu">
                           
                            @foreach($categories as $item) 

                            <li class="hassubs">
                                <a href="{{ route('category.show',$item->id) }}">{{ $item->category_name }}<i class="fas fa-chevron-right"></i></a>
                                <ul>

                                    
                                    @php
                                    $subcategories=DB::table('sub_categories')->where('category_id',$item->id)->get()
                                    @endphp

                                    @foreach($subcategories as $item)
                                        <a href="{{url('/subcategory/product/show/'.$item->id)}}">{{ $item->sub_category_name }}<i class="fas fa-chevron-right"></i></a>
                                        @endforeach
                                     
                                </ul>
                            </li>
                             @endforeach
                        </ul>
                    </div>










                    <!-- Main Nav Menu -->

                     <div class="main_nav_menu ml-auto">
                                <ul class="standard_dropdown main_nav_dropdown">
                                    <li><a href="#">{{__('msg.front_home')}}<i class="fas fa-chevron-down"></i></a></li>
                                    <li><a href="{{url('/shop/page/')}}">{{__('msg.front_shop')}}<i class="fas fa-chevron-down"></i></a></li>
                                   
                                    <li class="hassubs">
                                        <a href="#">{{__('msg.front_brand')}}<i class="fas fa-chevron-down"></i></a>
                                        <ul>
                                            @foreach($brands as $item)
                                            <li>
                                                <a href="">{{$item->brand_name}}<i class="fas fa-chevron-down"></i></a>
                                              
                                            </li>
                                           @endforeach
                                        </ul>
                                    </li>
                                    <li class="hassubs">
                                        
                                        <ul>
                                            <li><a href="{{url('/shop/page/')}}">Shop<i class="fas fa-chevron-down"></i></a></li>
                                           
                                            <li><a href="{{ route('cart.show') }}">Cart<i class="fas fa-chevron-down"></i></a></li>
                                            <li><a href="{{url('/user/contact/')}}">Contact<i class="fas fa-chevron-down"></i></a></li>
                                        </ul>
                                    </li>
                                   
                                    <li><a href="{{url('/user/contact/')}}">{{__('msg.front_contact')}}<i class="fas fa-chevron-down"></i></a></li>
                                </ul>
                            </div>
                     




                               

















                    <!-- Menu Trigger -->

                    <div class="menu_trigger_container ml-auto">
                        <div class="menu_trigger d-flex flex-row align-items-center justify-content-end">
                            <div class="menu_burger">
                                <div class="menu_trigger_text">menu</div>
                                <div class="cat_burger menu_burger_inner">
                                    <span></span><span></span><span></span></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</nav>

<!-- Menu -->

<div class="page_menu">
    <div class="container">
        <div class="row">
            <div class="col">

                <div class="page_menu_content">

                    <div class="page_menu_search">
                        <form action="#">
                            <input type="search" required="required" class="page_menu_search_input"
                                placeholder="Search for products...">
                        </form>
                    </div>
                    <ul class="page_menu_nav">
                        <li class="page_menu_item has-children">
                            <a href="#">Language<i class="fa fa-angle-down"></i></a>
                            <ul class="page_menu_selection">
                                <li><a href="#">English<i class="fa fa-angle-down"></i></a></li>
                                <li><a href="#">Italian<i class="fa fa-angle-down"></i></a></li>
                                <li><a href="#">Spanish<i class="fa fa-angle-down"></i></a></li>
                                <li><a href="#">Japanese<i class="fa fa-angle-down"></i></a></li>
                            </ul>
                        </li>
                        <li class="page_menu_item has-children">
                            <a href="#">Currency<i class="fa fa-angle-down"></i></a>
                            <ul class="page_menu_selection">
                                <li><a href="#">US Dollar<i class="fa fa-angle-down"></i></a></li>
                                <li><a href="#">EUR Euro<i class="fa fa-angle-down"></i></a></li>
                                <li><a href="#">GBP British Pound<i class="fa fa-angle-down"></i></a></li>
                                <li><a href="#">JPY Japanese Yen<i class="fa fa-angle-down"></i></a></li>
                            </ul>
                        </li>
                        <li class="page_menu_item">
                            <a href="#">Home<i class="fa fa-angle-down"></i></a>
                        </li>
                        <li class="page_menu_item has-children">
                            <a href="#">Super Deals<i class="fa fa-angle-down"></i></a>
                            <ul class="page_menu_selection">
                                <li><a href="#">Super Deals<i class="fa fa-angle-down"></i></a></li>
                                <li class="page_menu_item has-children">
                                    <a href="#">Menu Item<i class="fa fa-angle-down"></i></a>
                                    <ul class="page_menu_selection">
                                        <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                        <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                        <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                        <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                            </ul>
                        </li>
                        <li class="page_menu_item has-children">
                            <a href="#">Featured Brands<i class="fa fa-angle-down"></i></a>
                            <ul class="page_menu_selection">
                                @foreach($brands as $item)
                                <li><a href="#">Featured Brands<i class="fa fa-angle-down"></i></a></li>
                               @endforeach
                            </ul>
                        </li>
                        <li class="page_menu_item has-children">
                            <a href="#">Trending Styles<i class="fa fa-angle-down"></i></a>
                            <ul class="page_menu_selection">
                                <li><a href="#">Trending Styles<i class="fa fa-angle-down"></i></a></li>
                                <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                            </ul>
                        </li>
                       
                        <li class="page_menu_item"><a href="contact.html">contact<i class="fa fa-angle-down"></i></a>
                        </li>
                    </ul>

                    <div class="menu_contact">
                        <div class="menu_contact_item">
                            <div class="menu_contact_icon"><img src="{{ asset('frontend') }}/images/phone_white.png"
                                    alt=""></div>
                            +38 068 005 3570
                        </div>
                        <div class="menu_contact_item">
                            <div class="menu_contact_icon"><img src="{{ asset('frontend') }}/images/mail_white.png"
                                    alt=""></div><a href="mailto:fastsales@gmail.com">fastsales@gmail.com</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</header>

<!-- Banner -->

<div class="banner">
        <div class="banner_background" style="background-image:url({{ asset('frontend') }}/images/banner_background.jpg)"></div>
   
  <div class="container fill_height">
        <div class="row fill_height">
            <div class="banner_product_image"> <img src="{{asset('product_images/'.$main_sliders->image_one)}}" style="height:450px ;width:600px ;"></div>
            <div class="col-lg-5 offset-lg-4 fill_height">
                <div class="banner_content">
                    <h2 class="banner_text">CAR'S BD</h2>
                    <h3 class="banner_text">{{$main_sliders->product_name}}</h3>
                    <h4 class="banner_text">{{$main_sliders->product_code}}</h4>
                
                   <h4 class="product_content">
                                            @if($main_sliders->discount_price == null)
                                              <div class="product_price discount">{{ $main_sliders->selling_price }}</div>
                                            @else
                                              <div class="product_price discount">${{ $main_sliders->discount_price }}<span>${{ $main_sliders->selling_price }}</span></div>
                                            @endif
                                        </h4>
                    <h4 class="banner_text">where you </h4>
                    <h4 class="banner_text">want to go</h4>
                    <h4 class="banner_text"></h4>
                    
                   

                   
                    <div class="banner_product_name">{{ $main_sliders->brand->brand_name }}</div>
                    <div class="button banner_button"><a href="#">{{__('msg.front_shopnow')}}</a></div>
                </div>
            </div>
        </div>
    </div>
</div>
