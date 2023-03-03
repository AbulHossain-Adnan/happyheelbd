<!DOCTYPE html>
<html lang="en">
<head>
<title>Shop</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="OneTech shop project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/styles/bootstrap4/bootstrap.min.css">
<link href="{{ asset('frontend') }}/plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/plugins/jquery-ui-1.12.1.custom/jquery-ui.css">
<link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/styles/shop_styles.css">
<link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/styles/shop_responsive.css">

</head>

<body>

<div class="super_container">
  
  <!-- Header -->
  
  <header class="header">

    <!-- Top Bar -->

    <div class="top_bar">
      <div class="container">
        <div class="row">
          <div class="col d-flex flex-row">
            <div class="top_bar_contact_item"><div class="top_bar_icon"><img src="images/phone.png" alt=""></div>01998100733</div>
            <div class="top_bar_contact_item"><div class="top_bar_icon"><img src="images/mail.png" alt=""></div><a href="mailto:fastsales@gmail.com">alhossain.a92@gmail.com</a></div>
            <div class="top_bar_content ml-auto">
              <div class="top_bar_menu">
                <ul class="standard_dropdown top_bar_dropdown">
                  <li>
                    <a href="#">language<i class="fas fa-chevron-down"></i></a>
                    <ul>
                      <li><a href="#">english</a></li>
                      <li><a href="#">bangla</a></li>
                   
                    </ul>
                  </li>
                 
                </ul>
              </div>
              <div class="top_bar_user">
                <div class="user_icon"><img src="{{ asset('frontend') }}/images/user.svg" alt=""></div>
                <div><a href="{{route('login')}}">Sign in/Sign Up</a></div>
               
              </div>
            </div>
          </div>
        </div>
      </div>    
    </div>

    <!-- Header Main -->

    <div class="header_main">
      <div class="container">
        <div class="row">

          <!-- Logo -->
          <div class="col-lg-2 col-sm-3 col-3 order-1">
            <div class="logo_container">
              <div class="logo"><a href="{{url('/')}}">HOME</a></div>
            </div>
          </div>

          <!-- Search -->
          <div class="col-lg-6 col-12 order-lg-2 order-3 text-lg-left text-right">
            <div class="header_search">
              <div class="header_search_content">
                <div class="header_search_form_container">
                  <form action="#" class="header_search_form clearfix">
                    <input type="search" required="required" class="header_search_input" placeholder="Search for products...">
                    <div class="custom_dropdown">
                      <div class="custom_dropdown_list">
                        <span class="custom_dropdown_placeholder clc">All Categories</span>
                        <i class="fas fa-chevron-down"></i>
                        <ul class="custom_list clc">
                          <li><a class="clc" href="#">All Categories</a></li>
                          <li><a class="clc" href="#">Computers</a></li>
                          <li><a class="clc" href="#">Laptops</a></li>
                          <li><a class="clc" href="#">Cameras</a></li>
                          <li><a class="clc" href="#">Hardware</a></li>
                          <li><a class="clc" href="#">Smartphones</a></li>
                        </ul>
                      </div>
                    </div>
                    <button type="submit" class="header_search_button trans_300" value="Submit"><img src="{{ asset('frontend') }}/images/search.png" alt=""></button>
                  </form>
                </div>
              </div>
            </div>
          </div>

          <!-- Wishlist -->
        
        </div>
      </div>
    </div>
    
    <!-- Main Navigation -->

    <nav class="main_nav">
      <div class="container">
        <div class="row">
          <div class="col">
            
            <div class="main_nav_content d-flex flex-row">

              <!-- Categories Menu -->

            

              <!-- Main Nav Menu -->

            

              <!-- Menu Trigger -->

              <div class="menu_trigger_container ml-auto">
                <div class="menu_trigger d-flex flex-row align-items-center justify-content-end">
                  <div class="menu_burger">
                    <div class="menu_trigger_text">menu</div>
                    <div class="cat_burger menu_burger_inner"><span></span><span></span><span></span></div>
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
                  <input type="search" required="required" class="page_menu_search_input" placeholder="Search for products...">
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
                    <li><a href="#">Featured Brands<i class="fa fa-angle-down"></i></a></li>
                    <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                    <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                    <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
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
                <li class="page_menu_item"><a href="blog.html">blog<i class="fa fa-angle-down"></i></a></li>
                <li class="page_menu_item"><a href="contact.html">contact<i class="fa fa-angle-down"></i></a></li>
              </ul>
              
              <div class="menu_contact">
                <div class="menu_contact_item"><div class="menu_contact_icon"><img src="images/phone_white.png" alt=""></div>+38 068 005 3570</div>
                <div class="menu_contact_item"><div class="menu_contact_icon"><img src="images/mail_white.png" alt=""></div><a href="mailto:fastsales@gmail.com">fastsales@gmail.com</a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </header>
  
  <!-- Home -->

  <div class="home">
    <div class="home_background parallax-window" data-parallax="scroll" data-image-src="images/shop_background.jpg"></div>
    <div class="home_overlay"></div>
    <div class="home_content d-flex flex-column align-items-center justify-content-center">
      
      <h2 class="home_title">Products</h2>
      
      
    </div>
  </div>

  <!-- Shop -->

  <div class="shop">
    <div class="container">
      <div class="row">
        <div class="col-lg-3">

          <!-- Shop Sidebar -->
          <div class="shop_sidebar">
            <div class="sidebar_section">
              <div class="sidebar_title">Categories</div>
              <ul class="sidebar_categories">
                @foreach($categories as $item)
                <li><a href="{{url('/category/shop/products/'.$item->id)}}">{{$item->category_name}}</a></li>
                @endforeach
              </ul>
            </div>
            <div class="sidebar_section filter_by_section">
              <div class="sidebar_title">Filter By</div>
              <div class="sidebar_subtitle">Price</div>
              <div class="filter_price">
                <div id="slider-range" class="slider_range"></div>
                <p>Range: </p>
                <p><input type="text" id="amount" class="amount" readonly style="border:0; font-weight:bold;"></p>
              </div>
            </div>

            <div class="sidebar_section">
              <div class="sidebar_subtitle color_subtitle">Filter By</div>
              <ul class="colors_list">
                <li><a href=""><b><span style="color:black">SortBy:</span></b><br>
                <li><a href="{{URL::current()}}" >ALL</a></li>

                <li><a href="{{URL::current().'?sort=price_asc'}}" >Price-Low to High</a></li>
                <li><a href="{{URL::current().'?sort=price_dsc'}}" > Price-High to Low</a></li>
                <li><a href="{{URL::current().'?sort=newest'}}" > Price-Newes Product</a></li>
                <li><a href="{{URL::current().'?sort=popolarity'}}" > Popolarity</a></li>
                
              </ul>
            </div>



            <div class="sidebar_section">
              <div class="sidebar_subtitle color_subtitle">Color</div>
              <ul class="colors_list">
                <li class="color"><a href="{{URL::current().'?sort=yellow'}}" style="background: #FFFF00;"></a></li>
                <li class="color"><a href="{{URL::current().'?sort=black'}}" style="background: #000000;"></a></li>
                <li class="color"><a href="{{URL::current().'?sort=blue'}}" style="background: #0000FF;"></a></li>
                <li class="color"><a href="{{URL::current().'?sort=red'}}" style="background: #df3b3b;"></a></li>
                <li class="color"><a href="{{URL::current().'?sort=white'}}" style="background: #ffffff; border: solid 1px #e1e1e1;"></a></li>
              </ul>
            </div>
            <div class="sidebar_section">
              <div class="sidebar_subtitle brands_subtitle">Brands</div>
              <ul class="brands_list">
                @foreach($brands as $item)
                <li class="brand"><a href="{{url('/brand/shop/products/'.$item->id)}}">{{$item->brand_name}}</a></li>
                @endforeach
              </ul>


            </div>
          </div>

        </div>

        <div class="col-lg-9">
          
          <!-- Shop Content -->

          <div class="shop_content">
            <div class="shop_bar clearfix">
              <div class="shop_
              _count"><span>@foreach($products as $item)
                @endforeach
                {{count($products);}}</span> products found</div>
              <div class="shop_sorting">
                <span>Sort by:</span>
                <ul>
                  <li>
                    <span class="sorting_text">highest rated<i class="fas fa-chevron-down"></span></i>
                    <ul>
                      <li class="shop_sorting_button" data-isotope-option='{ "sortBy": "original-order" }'>highest rated</li>
                      <li class="shop_sorting_button" data-isotope-option='{ "sortBy": "name" }'>name</li>
                      <li class="shop_sorting_button"data-isotope-option='{ "sortBy": "price" }'>price</li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>

            <div class="product_grid">
              <div class="product_grid_border"></div>
              @foreach($products as $item)
              <!-- Product Item -->
              <div class="product_item is_new">
                <div class="product_border"></div>
                <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="{{asset('product_images/'.$item->image_one)}}" alt=""></div>
                <div class="product_content">
                    @if($item->discount_price == null)
                                              <div class="product_price discount">{{ $item->selling_price }}</div>
                                            @else
                                              <div class="product_price discount">${{ $item->discount_price }}<span>${{ $item->selling_price }}</span></div>
                                            @endif
                  <div class="product_name"><div><a href="{{ route('singleproduct.show',$item->id) }}" tabindex="0">{{$item->product_name}}-{{$item->product_code}}</a></div></div>
                </div>
                <div class="product_fav"><i class="fas fa-heart"></i></div>
                <ul class="product_marks">
                  <li class="product_mark product_discount">

                        @if($item->discount_price == null)
                                          <li class="product_mark product_discount " style="background:blue;">new</li>
                                            @else
                                             @php
                                        $amout=$item->selling_price-$item->discount_price;
                                        @endphp
                                            <li class="product_mark product_discount">{{ $amout/$item->selling_price*100 }}%</li>
                                            @endif
                                           


                  </li>
                  <li class="product_mark product_new">{{ $amout/$item->selling_price*100 }}%</li>
                </ul>
              </div>
              @endforeach
              <!-- Product Item -->
            

            </div>

            <!-- Shop Page Navigation -->

            <div class="shop_page_nav d-flex flex-row">
              <div class="page_prev d-flex flex-column align-items-center justify-content-center"><i class="fas fa-chevron-left"></i></div>
              <ul class="page_nav d-flex flex-row">
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">...</a></li>
                <li><a href="#">21</a></li>
              </ul>
              <div class="page_next d-flex flex-column align-items-center justify-content-center"><i class="fas fa-chevron-right"></i></div>
            </div>

          </div>

        </div>
      </div>
    </div>
  </div>

  <!-- Recently Viewed -->

  <div class="viewed">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="viewed_title_container">
            <h3 class="viewed_title">Recently Viewed</h3>
            <div class="viewed_nav_container">
              <div class="viewed_nav viewed_prev"><i class="fas fa-chevron-left"></i></div>
              <div class="viewed_nav viewed_next"><i class="fas fa-chevron-right"></i></div>
            </div>
          </div>

          <div class="viewed_slider_container">
            
            <!-- Recently Viewed Slider -->

            <div class="owl-carousel owl-theme viewed_slider">
              
              <!-- Recently Viewed Item -->
              <div class="owl-item">
                <div class="viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                  <div class="viewed_image"><img src="{{ asset('frontend') }}/images/view_1.jpg" alt=""></div>
                  <div class="viewed_content text-center">
                    <div class="viewed_price">$225<span>$300</span></div>
                    <div class="viewed_name"><a href="#">Beoplay H7</a></div>
                  </div>
                  <ul class="item_marks">
                    <li class="item_mark item_discount">-25%</li>
                    <li class="item_mark item_new">new</li>
                  </ul>
                </div>
              </div>

              <!-- Recently Viewed Item -->
              <div class="owl-item">
                <div class="viewed_item d-flex flex-column align-items-center justify-content-center text-center">
                  <div class="viewed_image"><img src="{{ asset('frontend') }}/images/view_2.jpg" alt=""></div>
                  <div class="viewed_content text-center">
                    <div class="viewed_price">$379</div>
                    <div class="viewed_name"><a href="#">LUNA Smartphone</a></div>
                  </div>
                  <ul class="item_marks">
                    <li class="item_mark item_discount">-25%</li>
                    <li class="item_mark item_new">new</li>
                  </ul>
                </div>
              </div>

              <!-- Recently Viewed Item -->
              <div class="owl-item">
                <div class="viewed_item d-flex flex-column align-items-center justify-content-center text-center">
                  <div class="viewed_image"><img src="{{ asset('frontend') }}/images/view_3.jpg" alt=""></div>
                  <div class="viewed_content text-center">
                    <div class="viewed_price">$225</div>
                    <div class="viewed_name"><a href="#">Samsung J730F...</a></div>
                  </div>
                  <ul class="item_marks">
                    <li class="item_mark item_discount">-25%</li>
                    <li class="item_mark item_new">new</li>
                  </ul>
                </div>
              </div>

              <!-- Recently Viewed Item -->
              <div class="owl-item">
                <div class="viewed_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                  <div class="viewed_image"><img src="{{ asset('frontend') }}/images/view_4.jpg" alt=""></div>
                  <div class="viewed_content text-center">
                    <div class="viewed_price">$379</div>
                    <div class="viewed_name"><a href="#">Huawei MediaPad...</a></div>
                  </div>
                  <ul class="item_marks">
                    <li class="item_mark item_discount">-25%</li>
                    <li class="item_mark item_new">new</li>
                  </ul>
                </div>
              </div>

              <!-- Recently Viewed Item -->
              <div class="owl-item">
                <div class="viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                  <div class="viewed_image"><img src="{{ asset('frontend') }}/images/view_5.jpg" alt=""></div>
                  <div class="viewed_content text-center">
                    <div class="viewed_price">$225<span>$300</span></div>
                    <div class="viewed_name"><a href="#">Sony PS4 Slim</a></div>
                  </div>
                  <ul class="item_marks">
                    <li class="item_mark item_discount">-25%</li>
                    <li class="item_mark item_new">new</li>
                  </ul>
                </div>
              </div>

              <!-- Recently Viewed Item -->
              <div class="owl-item">
                <div class="viewed_item d-flex flex-column align-items-center justify-content-center text-center">
                  <div class="viewed_image"><img src="{{ asset('frontend') }}/images/view_6.jpg" alt=""></div>
                  <div class="viewed_content text-center">
                    <div class="viewed_price">$375</div>
                    <div class="viewed_name"><a href="#">Speedlink...</a></div>
                  </div>
                  <ul class="item_marks">
                    <li class="item_mark item_discount">-25%</li>
                    <li class="item_mark item_new">new</li>
                  </ul>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Brands -->

  <div class="brands">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="brands_slider_container">
            
            <!-- Brands Slider -->

            <div class="owl-carousel owl-theme brands_slider">
              
              <div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="{{ asset('frontend') }}/images/brands_1.jpg" alt=""></div></div>
              <div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="{{ asset('frontend') }}/images/brands_2.jpg" alt=""></div></div>
              <div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="{{ asset('frontend') }}/images/brands_3.jpg" alt=""></div></div>
              <div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="{{ asset('frontend') }}/images/brands_4.jpg" alt=""></div></div>
              <div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="{{ asset('frontend') }}/images/brands_5.jpg" alt=""></div></div>
              <div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="{{ asset('frontend') }}/images/brands_6.jpg" alt=""></div></div>
              <div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="{{ asset('frontend') }}/images/brands_7.jpg" alt=""></div></div>
              <div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="{{ asset('frontend') }}/images/brands_8.jpg" alt=""></div></div>

            </div>
            
            <!-- Brands Slider Navigation -->
            <div class="brands_nav brands_prev"><i class="fas fa-chevron-left"></i></div>
            <div class="brands_nav brands_next"><i class="fas fa-chevron-right"></i></div>

          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Newsletter -->

  <div class="newsletter">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="newsletter_container d-flex flex-lg-row flex-column align-items-lg-center align-items-center justify-content-lg-start justify-content-center">
            <div class="newsletter_title_container">
              <div class="newsletter_icon"><img src="{{ asset('frontend') }}/images/send.png" alt=""></div>
              <div class="newsletter_title">Sign up for Newsletter</div>
              <div class="newsletter_text"><p>...and receive %20 coupon for first shopping.</p></div>
            </div>
            <div class="newsletter_content clearfix">
              <form action="#" class="newsletter_form">
                <input type="email" class="newsletter_input" required="required" placeholder="Enter your email address">
                <button class="newsletter_button">Subscribe</button>
              </form>
              <div class="newsletter_unsubscribe_link"><a href="#">unsubscribe</a></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Footer -->

  <footer class="footer">
    <div class="container">
      <div class="row">

        <div class="col-lg-3 footer_col">
          <div class="footer_column footer_contact">
            <div class="logo_container">
              <div class="logo"><a href="#">OneTech</a></div>
            </div>
            <div class="footer_title">Got Question? Call Us 24/7</div>
            <div class="footer_phone">+38 068 005 3570</div>
            <div class="footer_contact_text">
              <p>17 Princess Road, London</p>
              <p>Grester London NW18JR, UK</p>
            </div>
            <div class="footer_social">
              <ul>
                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                <li><a href="#"><i class="fab fa-google"></i></a></li>
                <li><a href="#"><i class="fab fa-vimeo-v"></i></a></li>
              </ul>
            </div>
          </div>
        </div>

        <div class="col-lg-2 offset-lg-2">
          <div class="footer_column">
            <div class="footer_title">Find it Fast</div>
            <ul class="footer_list">
              <li><a href="#">Computers & Laptops</a></li>
              <li><a href="#">Cameras & Photos</a></li>
              <li><a href="#">Hardware</a></li>
              <li><a href="#">Smartphones & Tablets</a></li>
              <li><a href="#">TV & Audio</a></li>
            </ul>
            
          </div>
        </div>

        

        <div class="col-lg-2">
          <div class="footer_column">
            <div class="footer_title">Customer Care</div>
            <ul class="footer_list">
              <li><a href="#">My Account</a></li>
              <li><a href="#">Order Tracking</a></li>
              <li><a href="#">Wish List</a></li>
              <li><a href="#">Customer Services</a></li>
              <li><a href="#">Returns / Exchange</a></li>
              <li><a href="#">FAQs</a></li>
              <li><a href="#">Product Support</a></li>
            </ul>
          </div>
        </div>

      </div>
    </div>
  </footer>

  <!-- Copyright -->

  <div class="copyright">
    <div class="container">
      <div class="row">
        <div class="col">
          
          <div class="copyright_container d-flex flex-sm-row flex-column align-items-center justify-content-start">
            <div class="copyright_content"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</div>
            <div class="logos ml-sm-auto">
              <ul class="logos_list">
                <li><a href="#"><img src="images/logos_1.png" alt=""></a></li>
                <li><a href="#"><img src="images/logos_2.png" alt=""></a></li>
                <li><a href="#"><img src="images/logos_3.png" alt=""></a></li>
                <li><a href="#"><img src="images/logos_4.png" alt=""></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script src="{{ asset('frontend') }}/js/jquery-3.3.1.min.js"></script>
<script src="{{ asset('frontend') }}/styles/bootstrap4/popper.js"></script>
<script src="{{ asset('frontend') }}/styles/bootstrap4/bootstrap.min.js"></script>
<script src="{{ asset('frontend') }}/plugins/greensock/TweenMax.min.js"></script>
<script src="{{ asset('frontend') }}/plugins/greensock/TimelineMax.min.js"></script>
<script src="{{ asset('frontend') }}/plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="{{ asset('frontend') }}/plugins/greensock/animation.gsap.min.js"></script>
<script src="{{ asset('frontend') }}/plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="{{ asset('frontend') }}/plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="{{ asset('frontend') }}/plugins/easing/easing.js"></script>
<script src="{{ asset('frontend') }}/plugins/Isotope/isotope.pkgd.min.js"></script>
<script src="{{ asset('frontend') }}/plugins/jquery-ui-1.12.1.custom/jquery-ui.js"></script>
<script src="{{ asset('frontend') }}/plugins/parallax-js-master/parallax.min.js"></script>
<script src="{{ asset('frontend') }}/js/shop_custom.js"></script>
</body>

</html>