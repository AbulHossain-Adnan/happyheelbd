<!DOCTYPE html>
<html lang="en">

<head>
    <title>OneTech</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="OneTech shop project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/styles/contact_styles.css">
<link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/styles/contact_responsive.css">

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
                                </div>+38 068 005 3570
                            </div>
                            <div class="top_bar_contact_item">
                                <div class="top_bar_icon"><img src="{{ asset('frontend') }}/images/mail.png" alt="">
                                </div><a href="mailto:fastsales@gmail.com">fastsales@gmail.com</a>
                            </div>
                            <div class="top_bar_content ml-auto">
                                <div class="top_bar_menu">
                                    <ul class="standard_dropdown top_bar_dropdown">
                                        <li>
                                            <a href="{{route('login')}}">Sing in /Sing up<i class="fas fa-chevron-down"></i></a>
                                           
                                        </li>
                                      
                                    </ul>
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
                                            <input type="search" required="required" class="header_search_input"
                                                placeholder="Search for products...">
                                            <div class="custom_dropdown">
                                                <div class="custom_dropdown_list">
                                                    <span class="custom_dropdown_placeholder clc">All Categories</span>
                                                    <i class="fas fa-chevron-down"></i>
                                                    <ul class="custom_list clc">
                                                      
                                                    </ul>
                                                </div>
                                            </div>
                                            <button type="submit" class="header_search_button trans_300"
                                                value="Submit"><img src="{{ asset('frontend') }}/images/search.png"
                                                    alt=""></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Wishlist -->
                  
                    </div>
                </div>
            </div>


    <div class="contact_form">
        <div class="container">
            <div class="row">
              
                <div class="col-lg-5 offset-lg-1 m-auto" style="border: 1px solid gray;border-radius: 25px; padding: 10px;">
                    <div class="contact_form_container">
                        <div class="contact_form_title">Sine up</div>

                        <form action="{{ route('register.post') }}" method="post" enctype="multipart/form-data">
                            @csrf
                      <div class="form-group">
                        <label for="exampleInputEmail1">Name</label>
                         <input placeholder="Name" id="name" type="text"
                            class="form-control @error('name') is-invalid @enderror" name="name"
                            value="{{ old('name') }}" required autocomplete="name" autofocus>

                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Email</label>
                        <input placeholder="Email" type="email"
                            class="form-control" name="email"
                          >
                      </div>
                       <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input placeholder="Password" id="password" type="password"
                            class="form-control @error('password') is-invalid @enderror" name="password" required
                            autocomplete="new-password">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                      </div>
                       <div class="form-group">
                        <label for="exampleInputPassword1">Confirm Password</label>
                       <input placeholder="Confirm Password" id="password-confirm" type="password" class="form-control"
                            name="password_confirmation" required autocomplete="new-password">
                      </div>
                       <div class="form-group">
                        <label for="exampleInputPassword1">Image</label>
                       <input placeholder="Confirm Password" id="password-confirm" type="file" class="form-control"
                            name="image" >
                      </div>
                    
                      <button type="submit" class="btn btn-info">Register</button>
                 </form>
                    </div>
                </div>

            </div>


        </div>

        <div class="panel"></div>
    </div>


           
            <!-- Footer -->

            <footer class="footer">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-3 footer_col">
                            <div class="footer_column footer_contact">
                                <div class="logo_container">
                                    <div class="logo"><a href="{{url('/')}}">HOME</a></div>
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
</body>

</html>