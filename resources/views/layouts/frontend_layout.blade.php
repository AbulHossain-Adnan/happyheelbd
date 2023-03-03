<!DOCTYPE html>
<html lang="en">

<head>
    
    <title>CAR AUTOMOBILE BD</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    @if(!$seos->meta_title == null) 
     <meta name="title" content="{{$seos->meta_title}}">
    @else
    @endif  @if(!$seos->meta_author == null) 
     <meta name="author" content="{{$seos->meta_author}}">
    @else
    @endif  @if(!$seos->meta_description == null) 
     <meta name="description" content="{{$seos->meta_description}}">
    @else
    @endif  @if(!$seos->meta_tag == null) 
     <meta name="tag" content="{{$seos->meta_tag}}">
    @else
    @endif
      @if(!$seos->google_analytics == null) 
     <meta name="google" content="{{$seos->google_analytics}}">
    @else
    @endif
     @if(!$seos->bing_analyticst == null) 
     <meta name="bing" content="{{$seos->bing_analyticst}}">
    @else
    @endif




    <meta name="description" content="OneTech shop project">
    <meta name="description" content="my name is adnan">

    <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/styles/bootstrap4/bootstrap.min.css">
    <link href="{{ asset('frontend') }}/plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet"
        type="text/css">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/plugins/OwlCarousel2-2.2.1/owl.carousel.css">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('frontend') }}/plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/plugins/OwlCarousel2-2.2.1/animate.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/plugins/slick-1.8.0/slick.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/styles/main_styles.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/styles/responsive.css">
    <script src="sweetalert2.min.js"></script>
<link rel="stylesheet" href="sweetalert2.min.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="{{ asset('frontend') }}/js/jquery.min.js"></script>
 
  
    
       <style>
        .header_search_form_container{
            position: relative;
        }
        #product_suggession{
            position: absolute;
            top:70;
            left: 0;
            width: 100%;
            background: #fff;
            z-index: 999;
            border-radius: 4px;
            margin-top: 2px;

        }

    </style>
      

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
                            <div class="top_bar_contact_item">
                                <div class="top_bar_icon"><img src="{{ asset('frontend') }}/images/phone.png" alt="">
                                </div>

                                  @if($site_setting)
                              
                                {{$site_setting->phone}}
                                @else
                           
                                @endif


                            </div>
                            <div class="top_bar_contact_item">
                                <div class="top_bar_icon"><img src="{{ asset('frontend') }}/images/mail.png" alt="">
                                </div><a href="mailto:fastsales@gmail.com">


                                  @if($site_setting)
                                {{$site_setting->email}}
                                @else
                                sdfsdf
                                @endif


                            </a>
                            </div>

                            
                            
                             
                             
                            <div class="top_bar_content ml-auto">
                               


                              <!--   <div class="top_bar_menu">
                                    <ul class="standard_dropdown top_bar_dropdown">
                                        <li>
                                            <a href="#">language<i class="fas fa-chevron-down"></i></a>
                                            <ul>
                                                <li><a href="/local/en/">English</a></li>
                                                <li><a href="/local/bn/">Bangla</a></li>
                                               
                                            </ul>
                                        </li>
                                       
                                    </ul>
                                </div> -->
                                 <div class="top_bar_menu">
                                     @if(Auth::Check())

                                   <div class="top_bar_menu">
                                    <ul class="standard_dropdown top_bar_dropdown">
                                      
                                        <li>
                                           <a class="text-primary" href="" data-toggle="modal" data-target="#exampleModalCenter">My Order tracking</a>
                                        </li>
                                    </ul>
                                </div>
                                @else
                                @endif


                                </div>
                                <div class="top_bar_user">
                                    <div class="user_icon"><img src="{{ asset('frontend') }}/images/user.svg" alt="">
                                    </div>
                                    @if(Auth::check())
                                   <div>  <ul class="standard_dropdown top_bar_dropdown">
                                      
                                        <li>
                                            <a href="{{route('home')}}">Profile -> {{Auth::user()->name}}<i class="fas fa-chevron-down"></i><i class="fas fa-user-alt"></i></a>
                                            <ul>
                                                <li><a href="{{ route('change.password') }}">edit profile</a></li>
                                                <li><a href="{{ url('/user/wishlist') }}">Wish List</a></li>
                                                <li><a href="{{ route('user.logout') }}">Logout</a></li>
                                               
                                            </ul>
                                        </li>
                                    </ul></div>
                                   @else
                                   <div><a href="{{ route('login') }}">Sign in/Sign up</a></div>
                                   @endif
                                   
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
                                <div class="logo"><a href="{{ route('home') }}">Home</a></div>
                            </div>
                        </div>






                        <!-- Search -->
                        <div class="col-lg-6 col-12 order-lg-2 order-3 text-lg-left text-right">
                            <div class="header_search">
                                <div class="header_search_content">
                                    <div class="header_search_form_container">
                                         <form action="{{url('search/product')}}" method="post" class="header_search_form clearfix">
                                    
                                            @csrf
                                          
                                            <input type="search" name="search" onfocus="showsearch()" onblur="hidesearch()" required="required" id="search" value="{{request()->input('search')}}" class="header_search_input"
                                                placeholder="Search for products...">
                                            <div class="custom_dropdown">
                                                <div class="custom_dropdown_list">
                                                    <span class="custom_dropdown_placeholder clc"></span>
                                                    <i class=""></i>
                                                    <ul class="custom_list clc">
                                                       
                                                        
                                                      
                                                    </ul>
                                                </div>
                                            </div>
                                            <button type="submit" class="header_search_button trans_300"
                                                value="Submit"><img src="/frontend/images/search.png"
                                                    alt=""></button>
                                        </form>
                                       
                                    </div>


                                </div>

                            </div>
                            
                                        <div id=product_suggession>
                                          
                                           
                                        </div>
                               
                        </div>


                       






                        <!-- Wishlist -->
                        <div class="col-lg-4 col-9 order-lg-3 order-2 text-lg-left text-right">
                            <div class="wishlist_cart d-flex flex-row align-items-center justify-content-end">

                                @guest
                                @else



                                  <div class="wishlist d-flex flex-row align-items-center justify-content-end" id="wishlistfield">




                                   <!--  <div class="wishlist_icon"><img src="{{ asset('frontend') }}/images/heart.png"
                                            alt=""></div>
                                    <div class="wishlist_content">
                                        <div class="wishlist_text"><a href="#">Wishlist</a></div>

                                        @php
                                        $wishlist=\App\Models\Wishlist::where('user_id',Auth::id())->get();

                                        @endphp


                                        <div class="wishlist_count">{{ count($wishlist) }}</div>
                                    </div> -->




                                </div>

                                @endguest
                              











                                <!-- Cart -->
                                <div class="cart" id="cartfield">
                            

                                </div>
                            </div>
                        </div>
                    </div>
               











            @yield('frontendContent')
            <!-- Footer -->

            <footer class="footer">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-3 footer_col">
                            <div class="footer_column footer_contact">
                                <div class="logo_container">
                                    <div class="logo"><a href="{{ route('home') }}">CAR AUTOMOBILE BD</a></div>
                                </div>
                                <div class="footer_title">Got Question? Call Us 24/7</div>
                                <div class="footer_phone">  @if($site_setting)
                                {{$site_setting->phone}}
                                @else
                                @endif</div>
                                <div class="footer_contact_text">
                                    <p>  @if($site_setting)
                                {{$site_setting->address}}
                                @else
                                @endif</p>
                                    <p>  @if($site_setting)
                                {{$site_setting->company_name}}
                                @else
                                @endif</p>
                                </div>
                                <div class="footer_social">
                                    <ul>
                                        <li><a href="  @if($site_setting)
                                {{$site_setting->facebook}}
                                @else
                                @endif"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="  @if($site_setting)
                                {{$site_setting->company_name}}
                                @else
                                @endif"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="  @if($site_setting)
                                {{$site_setting->tweeter}}
                                @else
                                @endif"><i class="fab fa-youtube"></i></a></li>
                                        <li><a href="  @if($site_setting)
                                {{$site_setting->google}}
                                @else
                                @endif"><i class="fab fa-google"></i></a></li>
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
                                <div class="footer_subtitle">Gadgets</div>
                                <ul class="footer_list">
                                    <li><a href="#">Car Electronics</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-2">
                            <div class="footer_column">
                                <ul class="footer_list footer_list_2">
                                    <li><a href="#">Video Games & Consoles</a></li>
                                    <li><a href="#">Accessories</a></li>
                                    <li><a href="#">Cameras & Photos</a></li>
                                    <li><a href="#">Hardware</a></li>
                                    <li><a href="#">Computers & Laptops</a></li>
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

                            <div
                                class="copyright_container d-flex flex-sm-row flex-column align-items-center justify-content-start">
                                <div class="copyright_content">
                                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                    Copyright &copy;<script>
                                        document.write(new Date().getFullYear());
                                    </script> All rights reserved | This template is made with <i class="fa fa-heart"
                                        aria-hidden="true"></i> by <a href="https://colorlib.com"
                                        target="_blank">Colorlib</a>
                                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                </div>
                                <div class="logos ml-sm-auto">
                                    <ul class="logos_list">
                                        <li><a href="#"><img src="{{ asset('frontend') }}/images/logos_1.png"
                                                    alt=""></a>
                                        </li>
                                        <li><a href="#"><img src="{{ asset('frontend') }}/images/logos_2.png"
                                                    alt=""></a>
                                        </li>
                                        <li><a href="#"><img src="{{ asset('frontend') }}/images/logos_3.png"
                                                    alt=""></a>
                                        </li>
                                        <li><a href="#"><img src="{{ asset('frontend') }}/images/logos_4.png"
                                                    alt=""></a>
                                        </li>
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
    <script src="{{ asset('frontend') }}/plugins/slick-1.8.0/slick.js"></script>
    <script src="{{ asset('frontend') }}/plugins/easing/easing.js"></script>
    <script src="{{ asset('frontend') }}/js/custom.js"></script>
   <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script  type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<div class="modal fade" id="testmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModallevel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModallevel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <div class="row">
 
  

<div class="col-sm-4">
                    
    
    <input type="hidden" id="product_id" name="product_id">
                 <div class="form-group">
                <label for="exampleInputColor">Color </label>
                <select class="form-control input-lg" id="color" name="color">                          
              
             </select>
        </div>
         <div class="form-group">
                <label for="exampleInputColor">Size </label>
                <select class="form-control input-lg" id="size" name="size">

             </select>
        </div>
          <div class="form-group">
                <label for="exampleInputQuantity">Quantity </label>
               <input type="number" name="qty" id="quantity" class="form-control" value="1" pattern="[0-9]"  >
        </div>
         
    <button class="bth btn-primary btn-sm" type="submit" onclick="addtocart()">Addv to card</button>
        
  </div>
  
</div>
      </div>
     
      </div>
    </div>
  </div>


    <script>
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
  </script>

  
<


     

<script type="text/javascript">
    
function minicart(){

    $.ajax({
        type:"GET",
        datatype:"json",
        url:"/minicart/",
        success:function(data){

                  $('#cartfield').html(`


             <div class="cart_container d-flex flex-row align-items-center justify-content-end">
                                        <div class="cart_icon">
                                            <img src="{{ asset('frontend') }}/images/cart.png" alt="">
                                            <div class="cart_count"><span>${data.cart_count}</span></div>
                                        </div>
                                        <div class="cart_content">
                                            <div class="cart_text"><a href="{{ route('cart.show') }}">Cart</a></div>
                                            <div class="cart_price">${data.subtotal}</div>
                                        </div>
                                    </div>


            `)

  
          

        }

    })
}

minicart(); 



function miniwishlist(){
    $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

    $.ajax({
        type:"GET",
        datatype:"json",
        url:"/miniwishlist/",
        success:function(data){
            $('#wishlistfield').html(`

                 <div class="wishlist_icon"><img src="{{ asset('frontend') }}/images/heart.png"
                                            alt=""></div>
                                    <div class="wishlist_content">
                                        <div class="wishlist_text"><a href="{{url('/user/wishlist/')}}">Wishlist</a></div>

                                        <div class="wishlist_count">${data.wishlist}</div>
                                    </div>

                `)
        }
    })
}
miniwishlist();







</script>
<script type="text/javascript">
       $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
    $("body").on('keyup',"#search",function(){
        let search= $('#search').val();
        if(search.length > 0){
            $.ajax({
                type:"POST",
                data:{search:search},
                url:"/find/product",
                success:function(response){
                   $('#product_suggession').html(response)

                  
                   
                }
            })

        }
         if(search.length <1){
                   $('#product_suggession').html("")

                   }
    });
</script>



  

<script type="text/javascript">
    
    function showsearch(){
        $('#product_suggession').slideDown();
    }
     function hidesearch(){
        $('#product_suggession').slideUp();
    }
</script>
   

</body>

</html>
