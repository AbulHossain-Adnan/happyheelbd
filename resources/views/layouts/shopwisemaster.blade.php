<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="Anil z" name="author">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
        content="Shopwise is Powerful features and You Can Use The Perfect Build this Template For Any eCommerce Website. The template is built for sell Fashion Products, Shoes, Bags, Cosmetics, Clothes, Sunglasses, Furniture, Kids Products, Electronics, Stationery Products and Sporting Goods.">
    <meta name="keywords"
        content="ecommerce, electronics store, Fashion store, furniture store,  bootstrap 4, clean, minimal, modern, online store, responsive, retail, shopping, ecommerce store">
    <script src="{{ asset('templateassets') }}/assets/js/jquery-3.6.0.min.js"></script>
    <!-- SITE TITLE -->
    <title>HAPPYHEEL'S</title>
    <!-- Favicon Icon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('templateassets') }}/assets/images/favicon.png">
    <!-- Animation CSS -->
    <link rel="stylesheet" href="{{ asset('templateassets') }}/assets/css/animate.css">
    <!-- Latest Bootstrap min CSS -->
    <link rel="stylesheet" href="{{ asset('templateassets') }}/assets/bootstrap/css/bootstrap.min.css">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">
    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="{{ asset('templateassets') }}/assets/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('templateassets') }}/assets/css/ionicons.min.css">
    <link rel="stylesheet" href="{{ asset('templateassets') }}/assets/css/themify-icons.css">
    <link rel="stylesheet" href="{{ asset('templateassets') }}/assets/css/linearicons.css">
    <link rel="stylesheet" href="{{ asset('templateassets') }}/assets/css/flaticon.css">
    <link rel="stylesheet" href="{{ asset('templateassets') }}/assets/css/simple-line-icons.css">
    <!--- owl carousel CSS-->
    <link rel="stylesheet" href="{{ asset('templateassets') }}/assets/owlcarousel/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ asset('templateassets') }}/assets/owlcarousel/css/owl.theme.css">
    <link rel="stylesheet" href="{{ asset('templateassets') }}/assets/owlcarousel/css/owl.theme.default.min.css">
    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="{{ asset('templateassets') }}/assets/css/magnific-popup.css">
    <!-- Slick CSS -->
    <link rel="stylesheet" href="{{ asset('templateassets') }}/assets/css/slick.css">
    <link rel="stylesheet" href="{{ asset('templateassets') }}/assets/css/slick-theme.css">
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{ asset('templateassets') }}/assets/css/style.css">
    <link rel="stylesheet" href="{{ asset('templateassets') }}/assets/css/responsive.css">
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

    <script src="https://kit.fontawesome.com/8f1447907f.js" crossorigin="anonymous"></script>
</head>

<body>

    <!-- Messenger Chat Plugin Code -->
    <div id="fb-root"></div>

    <!-- Your Chat Plugin code -->
    <div id="fb-customer-chat" class="fb-customerchat">
    </div>

    <script>
      var chatbox = document.getElementById('fb-customer-chat');
      chatbox.setAttribute("page_id", "117250924658896");
      chatbox.setAttribute("attribution", "biz_inbox");
    </script>

    <!-- Your SDK code -->
    <script>
      window.fbAsyncInit = function() {
        FB.init({
          xfbml            : true,
          version          : 'v16.0'
        });
      };

      (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
    </script>

    <!-- LOADER -->
    <div class="preloader">
        <div class="lds-ellipsis">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <!-- END LOADER -->

    <!-- Home Popup Section -->

    <!-- End Screen Load Popup Section -->

    <!-- START HEADER -->
    <header class="header_wrap fixed-top header_with_topbar">
        <div class="top-header">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="d-flex align-items-center justify-content-center justify-content-md-start">
                            <!--   <div class="lng_dropdown me-2">
                            <select name="countries" class="custome_select">
                                <option value='en' data-image="{{ asset('templateassets') }}/assets/images/eng.png" data-title="English">English</option>
                                <option value='fn' data-image="{{ asset('templateassets') }}/assets/images/fn.png" data-title="France">France</option>
                                <option value='us' data-image="{{ asset('templateassets') }}/assets/images/us.png" data-title="United States">United States</option>
                            </select>
                        </div>  -->
                            <!--   <div class="me-3">
                            <select name="countries" class="custome_select">
                                <option value='USD' data-title="USD">USD</option>
                                <option value='EUR' data-title="EUR">EUR</option>
                                <option value='GBR' data-title="GBR">GBR</option>
                            </select>
                        </div> -->
                            <ul class="contact_detail text-center text-lg-start">
                                <li>Customer Care: <i class="ti-mobile"></i><span>01771915770</span></li>




                                <li><a href="{{ url('/') }}"><img class="logo_light"
                                            src="{{ asset('templateassets') }}/assets/images/happy2.png"
                                            alt="HAPPYHEEL'S" /></a> </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="text-center text-md-end">
                            <ul class="header_list">

                                <li>
                                    @if (Auth::check())
                                        <a href="wishlist.html" id="wishlistfield">

                                            <i class="ti-heart"></i><span>Wishlist</span></a>
                                    @else
                                    @endif

                                </li>
                                <li>

                                    @if (Auth::check())
                                <li><a href="{{ url('/home') }}">{{ Auth::user()->name }} <i
                                            class="fa-solid fa-house"></i></a></li>
                            @else
                                <a href="{{ route('login') }}" class="nav-link">
                                    Sign In/Sign Up
                                    <i class="linearicons-user"></i>
                                </a>
                                @endif

                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom_header dark_skin main_menu_uppercase">
            <div class="container">
                <nav class="navbar navbar-expand-lg">
                    <a type="button" class="navbar-brand" href="{{ url('/') }}">
                        <img class="logo_light" src="{{ asset('templateassets') }}/assets/images/happy2.png"
                            alt="logo" />
                        <img style="height: 60px;width: 80px;" class="logo_dark"
                            src="{{ asset('templateassets') }}/assets/images/happy2.png" alt="logo" />
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-expanded="false">
                        <span class="ion-android-menu"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <li class="dropdown">
                                <a class="nav-link " href="{{ url('/') }}">Home</a>

                            </li>
                            <li class="dropdown">
                                <a class="nav-link " href="{{ url('shop/page') }}">Shop</a>

                            </li>

                             <li class="dropdown">
                                    <a data-bs-toggle="dropdown" class="nav-link dropdown-toggle active" href="#">Women Shoes</a>
                                    <div class="dropdown-menu">
                                        <ul> 
                                            @if(isset($category_products))
                                            @foreach ($category_products as $item)
                                                
                                            <li><a class="dropdown-item nav-link nav_item" href="{{url('category/shop/products'.'/'.$item->id.'/'.$item->brand_name)}}">{{@$item->brand_name}}</a></li>
                                            @endforeach
                                            @endif
                                
                                        </ul>
                                    </div>   
                                </li>

                            <li><a class="nav-link nav_item" href="{{ url('user/contact') }}">Contact Us</a></li>
                        </ul>
                    </div>
                    <ul class="navbar-nav attr-nav align-items-center">
                        <li><a href="javascript:void(0);" class="nav-link search_trigger"><i
                                    class="linearicons-magnifier"></i></a>
                            <div class="search_wrap">
                                <span class="close-search"><i class="ion-ios-close-empty"></i></span>
                                <form>
                                    <input type="text" placeholder="Search" class="form-control"
                                        id="search_input">
                                    <button type="submit" class="search_icon"><i
                                            class="ion-ios-search-strong"></i></button>
                                </form>
                            </div>
                            <div class="search_overlay"></div>
                        </li>
                        <li class="dropdown cart_dropdown" id="cartfield">


                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <!-- END HEADER -->
    @yield('content')

     <div class="section bg_default small_pt small_pb">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="newsletter_text text_white">
                        <h3>Join Our Newsletter Now</h3>
                        <p> Register now to get updates on promotions. </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="newsletter_form2">
                    <form>
                        <input type="email" required="" class="form-control rounded-0" id="newsemail" placeholder="Enter Email Address">
                        <button type="button" onclick="addnewsletter()" class="btn btn-dark rounded-0" name="submit" value="Submit">Subscribe</button>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
   

    <!-- START FOOTER -->
    <footer class="footer_dark">
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="widget">
                            <div class="footer_logo">
                                <a href="#"><img
                                        src="{{ asset('templateassets') }}/assetsimages/logo_light.png"
                                        alt="HAPPY HEEL'S" /></a>
                            </div>
                            <p>Welcome to Happy Heel's. Get your best Shoes Collection'S </p>
                        </div>
                        <div class="widget">
                            <ul class="social_icons social_white">
                                <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                                <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                                <li><a href="#"><i class="ion-social-googleplus"></i></a></li>
                                <li><a href="#"><i class="ion-social-youtube-outline"></i></a></li>
                                <li><a href="#"><i class="ion-social-instagram-outline"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-6">
                        <div class="widget">
                            <h6 class="widget_title">Useful Links</h6>
                            <ul class="widget_links">
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">FAQ</a></li>
                                <li><a href="#">Location</a></li>
                                <li><a href="#">Affiliates</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-6">
                        <div class="widget">
                            <h6 class="widget_title">Category</h6>
                            <ul class="widget_links">
                                <li><a href="#">Men</a></li>
                                <li><a href="#">Woman</a></li>
                                <li><a href="#">Kids</a></li>
                                <li><a href="#">Best Saller</a></li>
                                <li><a href="#">New Arrivals</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6">
                        <div class="widget">
                            <h6 class="widget_title">My Account</h6>
                            <ul class="widget_links">
                                <li><a href="#">My Account</a></li>
                                <li><a href="#">Discount</a></li>
                                <li><a href="#">Returns</a></li>
                                <li><a href="#">Orders History</a></li>
                                <li><a href="#">Order Tracking</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="widget">
                            <h6 class="widget_title">Contact Info</h6>
                            <ul class="contact_info contact_info_light">
                                <li>
                                    <i class="ti-location-pin"></i>
                                    <p>Kamrangirchar Purbo Rasulpur, Rony Market, 3 number goli, <br>1211 Dhaka,
                                        Bangladesh</p>
                                </li>
                                <li>
                                    <i class="ti-email"></i>
                                    <a href="mailto:info@sitename.com">happyheels2020@gmail.com
                                </li>
                                <li>
                                    <i class="ti-mobile">01771915770</i>
                                    <p></p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom_footer border-top-tran">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <p class="mb-md-0 text-center text-md-start">©All Rights Reserved by HAPPY HEEL'S</p>
                    </div>
                    <div class="col-md-6">
                        <ul class="footer_payment text-center text-lg-end">
                            <li><a href="#"><img src="{{ asset('templateassets') }}/assets/images/visa.png"
                                        alt="visa"></a></li>
                            <li><a href="#"><img src="{{ asset('templateassets') }}/assets/images/discover.png"
                                        alt="discover"></a></li>
                            <li><a href="#"><img
                                        src="{{ asset('templateassets') }}/assets/images/master_card.png"
                                        alt="master_card"></a></li>
                            <li><a href="#"><img src="{{ asset('templateassets') }}/assets/images/paypal.png"
                                        alt="paypal"></a></li>
                            <li><a href="#"><img
                                        src="{{ asset('templateassets') }}/assets/images/amarican_express.png"
                                        alt="amarican_express"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- END FOOTER -->

    <a href="#" class="scrollup" style="display: none;"><i class="ion-ios-arrow-up"></i></a>

    <!-- Latest jQuery -->
    <!-- <script src="{{ asset('templateassets') }}/assets/js/jquery-3.6.0.min.js"></script> -->
    <!-- popper min js -->
    <script src="{{ asset('templateassets') }}/assets/js/popper.min.js"></script>
    <!-- Latest compiled and minified Bootstrap -->
    <script src="{{ asset('templateassets') }}/assets/bootstrap/js/bootstrap.min.js"></script>
    <!-- owl-carousel min js  -->
    <script src="{{ asset('templateassets') }}/assets/owlcarousel/js/owl.carousel.min.js"></script>
    <!-- magnific-popup min js  -->
    <script src="{{ asset('templateassets') }}/assets/js/magnific-popup.min.js"></script>
    <!-- waypoints min js  -->
    <script src="{{ asset('templateassets') }}/assets/js/waypoints.min.js"></script>
    <!-- parallax js  -->
    <script src="{{ asset('templateassets') }}/assets/js/parallax.js"></script>
    <!-- countdown js  -->
    <script src="{{ asset('templateassets') }}/assets/js/jquery.countdown.min.js"></script>
    <!-- imagesloaded js -->
    <script src="{{ asset('templateassets') }}/assets/js/imagesloaded.pkgd.min.js"></script>
    <!-- isotope min js -->
    <script src="{{ asset('templateassets') }}/assets/js/isotope.min.js"></script>
    <!-- jquery.dd.min js -->
    <script src="{{ asset('templateassets') }}/assets/js/jquery.dd.min.js"></script>
    <!-- slick js -->
    <script src="{{ asset('templateassets') }}/assets/js/slick.min.js"></script>
    <!-- elevatezoom js -->
    <script src="{{ asset('templateassets') }}/assets/js/jquery.elevatezoom.js"></script>
    <!-- scripts js -->
    <script src="{{ asset('templateassets') }}/assets/js/scripts.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    @yield('scripts')


    <script type="text/javascript">
        function minicart() {

            $.ajax({
                type: "GET",
                datatype: "json",
                url: "/minicart/",
                success: function(data) {

                    $('#cartfield').html(`

                   <a class="nav-link cart_trigger" href="{{ route('cart.show') }}" >
                            <i class="linearicons-bag2"></i>
                        <span class="cart_count">${data.cart_count}</span><span class="amount">
                        <span class="currency_symbol"></span>${data.subtotal} TK</span>
                    </a>

            `)
                }

            })
        }

        minicart();
    </script>

    <script>
        function miniwishlist() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                type: "GET",
                datatype: "json",
                url: "/miniwishlist/",
                success: function(data) {
                    $('#wishlistfield').html(`


             <a href="{{ url('/user/wishlist/') }}" class="nav-link">
             Wishlist
                        <i class="linearicons-heart"></i>
                        <span class="wishlist_count">${data.wishlist}</span>
                    </a>

                `)
                }
            })
        }
        miniwishlist();
    </script>


<script>
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
</body>

</html>
