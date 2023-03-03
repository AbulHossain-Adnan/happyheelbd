 <!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <!-- Twitter -->
  <meta name="twitter:site" content="@themepixels">
  <meta name="twitter:creator" content="@themepixels">
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="Starlight">
  <meta name="twitter:description" content="Premium Quality and Responsive UI for Dashboard.">
  <meta name="twitter:image" content="http://themepixels.me/starlight/img/starlight-social.png">

  <!-- Facebook -->
  <meta property="og:url" content="http://themepixels.me/starlight">
  <meta property="og:title" content="Starlight">
  <meta property="og:description" content="Premium Quality and Responsive UI for Dashboard.">

  <meta property="og:image" content="http://themepixels.me/starlight/img/starlight-social.png">
  <meta property="og:image:secure_url" content="http://themepixels.me/starlight/img/starlight-social.png">
  <meta property="og:image:type" content="image/png">
  <meta property="og:image:width" content="1200">
  <meta property="og:image:height" content="600">

  <!-- Meta -->
  <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
  <meta name="author" content="ThemePixels">
  <meta name="csrf-token" content="{{ csrf_token() }}" />

  <title>Starlight Responsive Bootstrap 4 Admin Template</title>

  <!-- vendor css -->
  <link href="https://cdn.jsdelivr.net/bootstrap.tagsinput/0.8.0/bootstrap-tagsinput.css" rel="stylesheet"/>
  <link href="{{ asset('backend') }}/lib/font-awesome/css/font-awesome.css" rel="stylesheet">
  <link href="{{ asset('backend') }}/lib/Ionicons/css/ionicons.css" rel="stylesheet">
  <link href="{{ asset('backend') }}/lib/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">
  <link href="{{ asset('backend') }}/lib/rickshaw/rickshaw.min.css" rel="stylesheet">


  <link href="{{ asset('backend') }}/lib/highlightjs/github.css" rel="stylesheet">
  <link href="{{ asset('backend') }}/lib/datatables/jquery.dataTables.css" rel="stylesheet">
  <link href="{{ asset('backend') }}/lib/select2/css/select2.min.css" rel="stylesheet">
  <!-- Starlight CSS -->
  <link rel="stylesheet" href="{{ asset('backend') }}/css/starlight.css">
  <link rel="stylesheet" href="{{ asset('backend') }}/css/all.min.css">
  <link rel="stylesheet" href="{{ asset('backend') }}/css/fontawesome.min.css">

  <link href="{{ asset('backend') }}/lib/summernote/summernote-bs4.css" rel="stylesheet">
   <!-- <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"> -->
<!-- <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script> -->
<script src="{{ asset('backend') }}/js/jquery.min.js"></script>
<!-- <link rel="stylesheet" href="sweetalert2.min.css"> -->



    <script src="sweetalert2.min.js"></script>
<link rel="stylesheet" href="sweetalert2.min.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>







 
</head>

<body>
@guest
@else

  <!-- ########## START: LEFT PANEL ########## -->
  <div class="sl-logo"><a href=""><i class="icon ion-android-star-outline"></i> starlight</a></div>
  <div class="sl-sideleft">
    <div class="input-group input-group-search">
      <input type="search" name="search" class="form-control" placeholder="Search">
      <span class="input-group-btn">
        <button class="btn"><i class="fa fa-search"></i></button>
      </span><!-- input-group-btn -->
    </div><!-- input-group -->

    <label class="sidebar-label">Navigation</label>
    <div class="sl-sideleft-menu">
      <a href="{{route('admin.home')}}" class="sl-menu-link {{'admin/home' == request()->path()?'active':''}}">
        <div class="sl-menu-item">
          <i class="menu-item-icon icon ion-ios-home-outline tx-22"></i>
          <span class="menu-item-label">Dashboard</span>
        </div><!-- menu-item -->
        

      </a><!-- sl-menu-link -->
     
    

    
{{-- @if( Auth::check() && Auth()->user()->product == 1) --}}
     <a href="{{ route('products.index') }}" class="sl-menu-link {{'admin/product/add' == request()->path()?'active':''}} {{'admin/product/all' == request()->path()?'active':''}}">
        <div class="sl-menu-item {{'admin/product/add' == request()->path()?'active':''}}">
       <i class="fas fa-cubes"></i>
          <span class="menu-item-label">Product</span>
          
        </div><!-- menu-item -->
      </a><!-- sl-menu-link -->
     
      {{-- @else
      @endif
        --}}
  
        {{-- @if( Auth::check() && !Auth::user()->type == 2)
         <a href="{{ route('products.index') }}" class="sl-menu-link  {{'admin/product/add' == request()->path()?'active':''}} {{'admin/product/all' == request()->path()?'active':''}}">
        <div class="sl-menu-item ">
        <i class="fas fa-cubes"></i>
          <span class="menu-item-label">Product</span>
        </div><!-- menu-item -->
      </a><!-- sl-menu-link -->
     
      @else
      @endif --}}



{{-- @if( Auth::check() && Auth()->user()->category == 1) --}}

        <a href="#" class="sl-menu-link  {{'admin/category/create' == request()->path()?'active':''}} {{'subCategory/create' == request()->path()?'active':''}} {{'brand/create' == request()->path()?'active':''}}">
          <div class="sl-menu-item">
         <i class="fas fa-layer-group"></i>
            <span class="menu-item-label">Category</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <ul class="sl-menu-sub nav flex-column">
          <li class="nav-item"><a href="{{ route('admin.category.create') }}" class="nav-link">Category</a></li>
          <li class="nav-item"><a href="{{route('subCategory.create') }}" class="nav-link">Sub Category</a></li>
          <li class="nav-item"><a href="{{ route('brand.create') }}" class="nav-link">Brands</a></li>
        </ul>
        {{-- @else
        @endif --}}

     



{{-- @if(Auth::check() && !Auth::user()->type == 2)
 <a href="#" class="sl-menu-link {{'admin/category/create' == request()->path()?'active':''}} {{'subCategory/create' == request()->path()?'active':''}} {{'brand/create' == request()->path()?'active':''}}">
          <div class="sl-menu-item">
        <i class="fas fa-layer-group"></i>
            <span class="menu-item-label">Category</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <ul class="sl-menu-sub nav flex-column">
          <li class="nav-item"><a href="{{ route('admin.category.create') }}" class="nav-link">Category</a></li>
          <li class="nav-item"><a href="{{route('subCategory.create') }}" class="nav-link">Sub Category</a></li>
          <li class="nav-item"><a href="{{ route('brand.create') }}" class="nav-link">Brands</a></li>
        </ul>
@else
@endif --}}

       


          {{-- @if(Auth::check() && Auth::user()->coupon == 1) --}}
         <a href="{{ route('coupon.create') }}" class="sl-menu-link  {{'coupon/create' == request()->path()?'active':''}}">
        <div class="sl-menu-item">
         <i class="fas fa-dollar-sign"></i>
          <span class="menu-item-label">Coupon</span>
        
        </div><!-- menu-item -->
      </a><!-- sl-menu-link -->
   

      {{-- @else
      @endif --}}


          {{-- @if(Auth::check() && !Auth::user()->type == 2)
           <a href="{{ route('coupon.create') }}" class="sl-menu-link {{'coupon/create' == request()->path()?'active':''}}">
        <div class="sl-menu-item">
        <i class="fas fa-dollar-sign"></i>
          <span class="menu-item-label">Coupon</span>
        
        </div><!-- menu-item -->
      </a><!-- sl-menu-link -->
   
          @else
          @endif --}}



{{-- @if(Auth::check() && Auth::user()->division == 1) --}}

      <a href="#" class="sl-menu-link {{'division' == request()->path()?'active':''}} {{'district' == request()->path()?'active':''}} {{'area' == request()->path()?'active':''}}">
          <div class="sl-menu-item">
        <i class="fas fa-cart-arrow-down"></i>
            <span class="menu-item-label">Division</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <ul class="sl-menu-sub nav flex-column">
          <li class="nav-item"><a href="{{ route('division.index') }}" class="nav-link">Division</a></li>
          <li class="nav-item"><a href="{{ route('district.index') }}" class="nav-link">District</a></li>
          <li class="nav-item"><a href="{{ route('area.index') }}" class="nav-link">Area</a></li>
        </ul>
        {{-- @else
        @endif --}}



{{-- @if(Auth::check() && !Auth::user()->type == 2)
 <a href="#" class="sl-menu-link {{'division' == request()->path()?'active':''}} {{'district' == request()->path()?'active':''}} {{'area' == request()->path()?'active':''}}">
          <div class="sl-menu-item">
   <i class="fas fa-cart-arrow-down"></i>
            <span class="menu-item-label">Division</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <ul class="sl-menu-sub nav flex-column">
          <li class="nav-item"><a href="{{ route('division.index') }}" class="nav-link">Division</a></li>
          <li class="nav-item"><a href="{{ route('district.index') }}" class="nav-link">District</a></li>
          <li class="nav-item"><a href="{{ route('area.index') }}" class="nav-link">Area</a></li>
        </ul>
@else
@endif --}}



        {{-- @if(Auth::check() && Auth::user()->orders == 1) --}}

         <a href="#" class="sl-menu-link {{'order' == request()->path()?'active':''}} {{'admin/accept/payment' == request()->path()?'active':''}} {{'admin/cancel/order' == request()->path()?'active':''}} {{'admin/order/progress' == request()->path()?'active':''}} {{'admin/delivary/success' == request()->path()?'active':''}}">
          <div class="sl-menu-item">
        <i class="fab fa-sellcast"></i>
            <span class="menu-item-label">Orders</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <ul class="sl-menu-sub nav flex-column">
          <li class="nav-item"><a href="{{ route('order.index') }}" class="nav-link">New Orders</a></li>
          <li class="nav-item"><a href="{{url('/admin/accept/payment/')}}" class="nav-link">Payment Accept</a></li>
           <li class="nav-item"><a href="{{ url('/admin/cancel/order/') }}" class="nav-link">Cancel Order</a></li>
            <li class="nav-item"><a href="{{ url('/admin/order/progress/') }}" class="nav-link">Progress Delevary</a></li>
         
          <li class="nav-item"><a href="{{url('/admin/delivary/success/') }}" class="nav-link">delivarysuccess</a></li>
        </ul>

        {{-- @else
        @endif --}}


        {{-- @if(Auth::check() && !Auth::user()->type == 2)
        <a href="#" class="sl-menu-link {{'order' == request()->path()?'active':''}} {{'admin/accept/payment' == request()->path()?'active':''}} {{'admin/cancel/order' == request()->path()?'active':''}} {{'admin/order/progress' == request()->path()?'active':''}} {{'admin/delivary/success' == request()->path()?'active':''}}">
          <div class="sl-menu-item">
        <i class="fab fa-sellcast"></i>
            <span class="menu-item-label">Orders</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <ul class="sl-menu-sub nav flex-column">
          <li class="nav-item"><a href="{{ route('order.index') }}" class="nav-link">New Orders</a></li>
          <li class="nav-item"><a href="{{url('/admin/accept/payment/')}}" class="nav-link">Payment Accept</a></li>
           <li class="nav-item"><a href="{{ url('/admin/cancel/order/') }}" class="nav-link">Cancel Order</a></li>
            <li class="nav-item"><a href="{{ url('/admin/order/progress/') }}" class="nav-link">Progress Delevary</a></li>
         
          <li class="nav-item"><a href="{{url('/admin/delivary/success/') }}" class="nav-link">delivarysuccess</a></li>
        </ul>
        @else
        @endif --}}



{{-- @if(Auth::check() && Auth::user()->seo == 1) --}}
 
       <a href="{{route('seo.index')}}" class="sl-menu-link {{'seo' == request()->path()?'active':''}}">
        <div class="sl-menu-item">
        <i class="fas fa-hashtag"></i>
          <span class="menu-item-label">Seo</span>
       
        </div><!-- menu-item -->
      </a><!-- sl-menu-link -->
    
      {{-- @else
      @endif --}}



{{-- @if(Auth::check() && !Auth::user()->type == 2)
 <a href="{{route('seo.index')}}" class="sl-menu-link {{'seo' == request()->path()?'active':''}}">
        <div class="sl-menu-item">
        <i class="fas fa-hashtag"></i>
          <span class="menu-item-label">Seo</span>
       
        </div><!-- menu-item -->
      </a><!-- sl-menu-link -->
    
@else
@endif --}}




      {{-- @if(Auth::check() && Auth::user()->reports == 1) --}}
       <a href="#" class="sl-menu-link {{'today/order/report' == request()->path()?'active':''}} {{'today/delivary/orders' == request()->path()?'active':''}} {{'this/month/delivarys' == request()->path()?'active':''}} {{'this/year/delivarys' == request()->path()?'active':''}} {{'report/search' == request()->path()?'active':''}}">
          <div class="sl-menu-item">
      <i class="fas fa-calculator"></i>
            <span class="menu-item-label">Reports</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <ul class="sl-menu-sub nav flex-column">
          <li class="nav-item"><a href="{{ route('today.orders') }}" class="nav-link">Today Orders</a></li>
          <li class="nav-item"><a href="{{ route('today.delivarys') }}" class="nav-link">Todays delivary</a></li>
           <li class="nav-item"><a href="{{ route('this.month') }}" class="nav-link">This Month delivarys</a></li>
            <li class="nav-item"><a href="{{ route('this.year') }}" class="nav-link">This year delivarys</a></li>
         
          <li class="nav-item"><a href="{{route('report.search')}}" class="nav-link">Report Search</a></li>
        </ul>
        {{-- @else
        @endif --}}


      {{-- @if(Auth::check() && !Auth::user()->type == 2)
      <a href="#" class="sl-menu-link {{'today/order/report' == request()->path()?'active':''}} {{'today/delivary/orders' == request()->path()?'active':''}} {{'this/month/delivarys' == request()->path()?'active':''}} {{'this/year/delivarys' == request()->path()?'active':''}} {{'report/search' == request()->path()?'active':''}}">
          <div class="sl-menu-item">
       <i class="fas fa-calculator"></i>
            <span class="menu-item-label">Reports</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <ul class="sl-menu-sub nav flex-column">
          <li class="nav-item"><a href="{{ route('today.orders') }}" class="nav-link">Today Orders</a></li>
          <li class="nav-item"><a href="{{ route('today.delivarys') }}" class="nav-link">Todays delivary</a></li>
           <li class="nav-item"><a href="{{ route('this.month') }}" class="nav-link">This Month delivarys</a></li>
            <li class="nav-item"><a href="{{ route('this.year') }}" class="nav-link">This year delivarys</a></li>
         
          <li class="nav-item"><a href="{{route('report.search')}}" class="nav-link">Report Search</a></li>
        </ul>
      @else
      @endif --}}



     


        {{-- @if(Auth::check() && Auth::user()->return_order == 1) --}}
        <a href="#" class="sl-menu-link {{'order/return/request' == request()->path()?'active':''}} {{'all/return/request' == request()->path()?'active':''}}">
          <div class="sl-menu-item">
          <i class="fas fa-undo-alt"></i>
            <span class="menu-item-label">Return Order</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <ul class="sl-menu-sub nav flex-column">
          <li class="nav-item"><a href="{{ url('order/return/request') }}" class="nav-link">Return Request</a></li>
          <li class="nav-item"><a href="{{ url('all/return/request') }}" class="nav-link">All Request</a></li>
        </ul>
        {{-- @else
        @endif --}}
{{-- 
        @if(Auth::check() && !Auth::user()->type == 2)
        <a href="#" class="sl-menu-link {{'order/return/request' == request()->path()?'active':''}} {{'all/return/request' == request()->path()?'active':''}}">
          <div class="sl-menu-item">
         <i class="fas fa-undo-alt"></i>
            <span class="menu-item-label">Return Order</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <ul class="sl-menu-sub nav flex-column">
           <li class="nav-item"><a href="{{ url('order/return/request') }}" class="nav-link">Return Request</a></li>
        <li class="nav-item"><a href="{{ url('all/return/request') }}" class="nav-link">All Request</a></li>
        </ul>
        @else
        @endif --}}

        {{-- @if(Auth::check() && Auth::user()->contact_message == 1) --}}
        <a href="{{url('comtact/messages')}}" class="sl-menu-link {{'comtact/messages' == request()->path()?'active':''}} ">
          <div class="sl-menu-item">
          <i class="fas fa-search-location"></i>
            <span class="menu-item-label">Contact Message</span>
         
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
     
        {{-- @else
        @endif --}}


        {{-- @if(Auth::check() && Auth::user()->type == NULL) --}}
          {{-- <a href="{{url('comtact/messages')}}" class="sl-menu-link {{'comtact/messages' == request()->path()?'active':''}}">
          <div class="sl-menu-item">
         <i class="fas fa-search-location"></i>
            <span class="menu-item-label">Contact Message</span>
          
          </div><!-- menu-item -->
        </a><!-- sl-menu-link --> --}}
     
          {{-- @else
          @endif --}}


      

         {{-- @if(Auth::check() && Auth::user()->site_setting == 1) --}}
         <a href="{{ route('site.index') }}" class="sl-menu-link {{'site' == request()->path()?'active':''}}">
          <div class="sl-menu-item">
        <i class="fas fa-wrench"></i>
            <span class="menu-item-label">Site</span>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
      
        {{-- @else
        @endif --}}
     

{{-- 
        @if(Auth::check() && Auth::user()->type == NULL)
          <a href="{{ route('site.index') }}" class="sl-menu-link {{'site' == request()->path()?'active':''}}">
          <div class="sl-menu-item">
          <i class="fas fa-wrench"></i>
            <span class="menu-item-label">Site</span>
           
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
       
        @else
        @endif --}}




      





  {{-- @if(Auth::check() && Auth::user()->post == 1) --}}
       <a href="#" class="sl-menu-link {{'add/post' == request()->path()?'active':''}} {{'post/category' == request()->path()?'active':''}}">
          <div class="sl-menu-item">
           <i class="fas fa-user-plus"></i>
            <span class="menu-item-label">Post</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <ul class="sl-menu-sub nav flex-column">
          <li class="nav-item"><a href="{{ route('today.orders') }}" class="nav-link">Add Post</a></li>
           <li class="nav-item"><a href="{{ url('/post/category/') }}" class="nav-link">Add post Category</a></li>
         </ul>
        {{-- @else
        @endif --}}


      {{-- @if(Auth::check() && !Auth::user()->type == NULL)
      <a href="#" class="sl-menu-link {{'add/post' == request()->path()?'active':''}} {{'post/category' == request()->path()?'active':''}}">
          <div class="sl-menu-item">
          <i class="fas fa-user-plus"></i>
            <span class="menu-item-label">Post</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <ul class="sl-menu-sub nav flex-column">
          <li class="nav-item"><a href="{{url('/add/post/') }}" class="nav-link">Add Post</a></li>
           <li class="nav-item"><a href="{{ url('/post/category/') }}" class="nav-link">Add post Category</a></li>
         </ul>
      @else
      @endif --}}





{{-- @if(Auth()->check() && !Auth()->user()->type == NULL) --}}
  
    <a href="{{url('/admin/stock/management/')}}" class="sl-menu-link  {{'admin/stock/management' == request()->path()?'active':''}}">
        <div class="sl-menu-item">
         <i class="fas fa-dollar-sign"></i>
          <span class="menu-item-label">Stock</span>
        
        </div><!-- menu-item -->
      </a><!-- sl-menu-link -->
   
   
   
        {{-- @else
        @endif --}}


{{-- @if(Auth()->check() && !Auth()->user()->type == 2)
     <a href="{{url('/admin/stock/management/')}}" class="sl-menu-link  {{'admin/stock/management' == request()->path()?'active':''}}">
        <div class="sl-menu-item">
         <i class="fas fa-dollar-sign"></i>
          <span class="menu-item-label">Stock</span>
        
        </div><!-- menu-item -->
      </a><!-- sl-menu-link -->

      @else
      @endif --}}





      


    </div><!-- sl-sideleft-menu -->

    <br>
  </div><!-- sl-sideleft -->

   
      
  <!-- ########## END: LEFT PANEL ########## -->

  <!-- ########## START: HEAD PANEL ########## -->
  <div class="sl-header">
    <div class="sl-header-left">
      <div class="navicon-left hidden-md-down"><a id="btnLeftMenu" href=""><i class="icon ion-navicon-round"></i></a>
      </div>
      <div class="navicon-left hidden-lg-up"><a id="btnLeftMenuMobile" href=""><i
            class="icon ion-navicon-round"></i></a></div>
    </div><!-- sl-header-left -->
    <div class="sl-header-right">
      <nav class="nav">
        <div class="dropdown">
          <a href="" class="nav-link nav-link-profile" data-toggle="dropdown">
            <span class="logged-name">
              @if(Auth::check())
              {{Auth()->user()->name}}
              @else

              @endif

              <span class="hidden-md-down"></span></span>
            <img src="{{ asset('backend') }}/img/img3.jpg" class="wd-32 rounded-circle" alt="">
          </a>
          <div class="dropdown-menu dropdown-menu-header wd-200">
            <ul class="list-unstyled user-profile-nav">
              <li><a href=""><i class="icon ion-ios-person-outline"></i> Edit Profile</a></li>
              <li><a href=""><i class="icon ion-ios-gear-outline"></i> Settings</a></li>
              <li><a href=""><i class="icon ion-ios-download-outline"></i> Downloads</a></li>
              <li><a href=""><i class="icon ion-ios-star-outline"></i> Favorites</a></li>
              <li><a href=""><i class="icon ion-ios-folder-outline"></i> Collections</a></li>
              <li><a href="{{ route('admin.logout') }}"><i class="icon ion-power"></i> Sign Out</a></li>
            </ul>
          </div><!-- dropdown-menu -->
        </div><!-- dropdown -->
      </nav>
      <div class="navicon-right">
        <a id="btnRightMenu" href="" class="pos-relative">
          <i class="icon ion-ios-bell-outline"></i>
          <!-- start: if statement -->
          <span class="square-8 bg-danger"></span>
          <!-- end: if statement -->
        </a>
      </div><!-- navicon-right -->
    </div><!-- sl-header-right -->
  </div><!-- sl-header -->
  <!-- ########## END: HEAD PANEL ########## -->
  @endguest
  <!-- ########## START: RIGHT PANEL ########## -->
  <div class="sl-sideright">
    <ul class="nav nav-tabs nav-fill sidebar-tabs" role="tablist">
      <li class="nav-item">
        <a class="nav-link active" data-toggle="tab" role="tab" href="#messages">Messages (2)</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="tab" role="tab" href="#notifications">Notifications (8)</a>
      </li>
    </ul><!-- sidebar-tabs -->

    <!-- Tab panes -->
    <div class="tab-content">
      <div class="tab-pane pos-absolute a-0 mg-t-60 active" id="messages" role="tabpanel">
        <div class="media-list">
          <!-- loop starts here -->
          <a href="" class="media-list-link">
            <div class="media">
              <img src="{{ asset('backend') }}/img/img3.jpg" class="wd-40 rounded-circle" alt="">
              <div class="media-body">
                <p class="mg-b-0 tx-medium tx-gray-800 tx-13">Donna Seay</p>
                <span class="d-block tx-11 tx-gray-500">2 minutes ago</span>
                <p class="tx-13 mg-t-10 mg-b-0">A wonderful serenity has taken possession of my entire soul, like these
                  sweet mornings of spring.</p>
              </div>
            </div><!-- media -->
          </a>
          <!-- loop ends here -->
          <a href="" class="media-list-link">
            <div class="media">
              <img src="{{ asset('backend') }}/img/img4.jpg" class="wd-40 rounded-circle" alt="">
              <div class="media-body">
                <p class="mg-b-0 tx-medium tx-gray-800 tx-13">Samantha Francis</p>
                <span class="d-block tx-11 tx-gray-500">3 hours ago</span>
                <p class="tx-13 mg-t-10 mg-b-0">My entire soul, like these sweet mornings of spring.</p>
              </div>
            </div><!-- media -->
          </a>
          <a href="" class="media-list-link">
            <div class="media">
              <img src="{{ asset('backend') }}/img/img7.jpg" class="wd-40 rounded-circle" alt="">
              <div class="media-body">
                <p class="mg-b-0 tx-medium tx-gray-800 tx-13">Robert Walker</p>
                <span class="d-block tx-11 tx-gray-500">5 hours ago</span>
                <p class="tx-13 mg-t-10 mg-b-0">I should be incapable of drawing a single stroke at the present
                  moment...</p>
              </div>
            </div><!-- media -->
          </a>
          <a href="" class="media-list-link">
            <div class="media">
              <img src="{{ asset('backend') }}/img/img5.jpg" class="wd-40 rounded-circle" alt="">
              <div class="media-body">
                <p class="mg-b-0 tx-medium tx-gray-800 tx-13">Larry Smith</p>
                <span class="d-block tx-11 tx-gray-500">Yesterday, 8:34pm</span>

                <p class="tx-13 mg-t-10 mg-b-0">When, while the lovely valley teems with vapour around me, and the
                  meridian sun strikes...</p>
              </div>
            </div><!-- media -->
          </a>
          <a href="" class="media-list-link">
            <div class="media">
              <img src="{{ asset('backend') }}/img/img3.jpg" class="wd-40 rounded-circle" alt="">
              <div class="media-body">
                <p class="mg-b-0 tx-medium tx-gray-800 tx-13">Donna Seay</p>
                <span class="d-block tx-11 tx-gray-500">Jan 23, 2:32am</span>
                <p class="tx-13 mg-t-10 mg-b-0">A wonderful serenity has taken possession of my entire soul, like these
                  sweet mornings of spring.</p>
              </div>
            </div><!-- media -->
          </a>
        </div><!-- media-list -->
        <div class="pd-15">
          <a href=""
            class="btn btn-secondary btn-block bd-0 rounded-0 tx-10 tx-uppercase tx-mont tx-medium tx-spacing-2">View
            More Messages</a>
        </div>
      </div><!-- #messages -->

      <div class="tab-pane pos-absolute a-0 mg-t-60 overflow-y-auto" id="notifications" role="tabpanel">
        <div class="media-list">
          <!-- loop starts here -->
          <a href="" class="media-list-link read">
            <div class="media pd-x-20 pd-y-15">
              <img src="{{ asset('backend') }}/img/img8.jpg" class="wd-40 rounded-circle" alt="">
              <div class="media-body">
                <p class="tx-13 mg-b-0 tx-gray-700"><strong class="tx-medium tx-gray-800">Suzzeth Bungaos</strong>
                  tagged you and 18 others in a post.</p>
                <span class="tx-12">October 03, 2017 8:45am</span>
              </div>
            </div><!-- media -->
          </a>
          <!-- loop ends here -->
          <a href="" class="media-list-link read">
            <div class="media pd-x-20 pd-y-15">
              <img src="{{ asset('backend') }}/img/img9.jpg" class="wd-40 rounded-circle" alt="">
              <div class="media-body">
                <p class="tx-13 mg-b-0 tx-gray-700"><strong class="tx-medium tx-gray-800">Mellisa Brown</strong>
                  appreciated your work <strong class="tx-medium tx-gray-800">The Social Network</strong></p>
                <span class="tx-12">October 02, 2017 12:44am</span>
              </div>
            </div><!-- media -->
          </a>
          <a href="" class="media-list-link read">
            <div class="media pd-x-20 pd-y-15">
              <img src="{{ asset('backend') }}/img/img10.jpg" class="wd-40 rounded-circle" alt="">
              <div class="media-body">
                <p class="tx-13 mg-b-0 tx-gray-700">20+ new items added are for sale in your <strong
                    class="tx-medium tx-gray-800">Sale Group</strong></p>
                <span class="tx-12">October 01, 2017 10:20pm</span>
              </div>
            </div><!-- media -->
          </a>
          <a href="" class="media-list-link read">
            <div class="media pd-x-20 pd-y-15">
              <img src="{{ asset('backend') }}/img/img5.jpg" class="wd-40 rounded-circle" alt="">
              <div class="media-body">
                <p class="tx-13 mg-b-0 tx-gray-700"><strong class="tx-medium tx-gray-800">Julius Erving</strong> wants
                  to connect with you on your conversation with <strong class="tx-medium tx-gray-800">Ronnie
                    Mara</strong></p>
                <span class="tx-12">October 01, 2017 6:08pm</span>
              </div>
            </div><!-- media -->
          </a>
          <a href="" class="media-list-link read">
            <div class="media pd-x-20 pd-y-15">
              <img src="{{ asset('backend') }}/img/img8.jpg" class="wd-40 rounded-circle" alt="">
              <div class="media-body">
                <p class="tx-13 mg-b-0 tx-gray-700"><strong class="tx-medium tx-gray-800">Suzzeth Bungaos</strong>
                  tagged you and 12 others in a post.</p>
                <span class="tx-12">September 27, 2017 6:45am</span>
              </div>
            </div><!-- media -->
          </a>
          <a href="" class="media-list-link read">
            <div class="media pd-x-20 pd-y-15">
              <img src="{{ asset('backend') }}/img/img10.jpg" class="wd-40 rounded-circle" alt="">
              <div class="media-body">
                <p class="tx-13 mg-b-0 tx-gray-700">10+ new items added are for sale in your <strong
                    class="tx-medium tx-gray-800">Sale Group</strong></p>
                <span class="tx-12">September 28, 2017 11:30pm</span>
              </div>
            </div><!-- media -->
          </a>
          <a href="" class="media-list-link read">
            <div class="media pd-x-20 pd-y-15">
              <img src="{{ asset('backend') }}/img/img9.jpg" class="wd-40 rounded-circle" alt="">
              <div class="media-body">
                <p class="tx-13 mg-b-0 tx-gray-700"><strong class="tx-medium tx-gray-800">Mellisa Brown</strong>
                  appreciated your work <strong class="tx-medium tx-gray-800">The Great Pyramid</strong></p>
                <span class="tx-12">September 26, 2017 11:01am</span>
              </div>
            </div><!-- media -->
          </a>
          <a href="" class="media-list-link read">
            <div class="media pd-x-20 pd-y-15">
              <img src="{{ asset('backend') }}/img/img5.jpg" class="wd-40 rounded-circle" alt="">
              <div class="media-body">
                <p class="tx-13 mg-b-0 tx-gray-700"><strong class="tx-medium tx-gray-800">Julius Erving</strong> wants
                  to connect with you on your conversation with <strong class="tx-medium tx-gray-800">Ronnie
                    Mara</strong></p>
                <span class="tx-12">September 23, 2017 9:19pm</span>
              </div>
            </div><!-- media -->
          </a>
        </div><!-- media-list -->
      </div><!-- #notifications -->

    </div><!-- tab-content -->
  </div><!-- sl-sideright -->
  <!-- ########## END: RIGHT PANEL ########## --->



  @yield('adminMain')


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/additional-methods.min.js"></script>
  <script src="{{ asset('backend') }}/lib/jquery/jquery.js"></script>
  <script src="{{ asset('backend') }}/lib/popper.js/popper.js"></script>
  <script src="{{ asset('backend') }}/lib/bootstrap/bootstrap.js"></script>
  <script src="{{ asset('backend') }}/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js"></script>
  <script src="{{ asset('backend') }}/lib/highlightjs/highlight.pack.js"></script>
  <script src="{{ asset('backend') }}/lib/datatables/jquery.dataTables.js"></script>
  <script src="{{ asset('backend') }}/lib/datatables-responsive/dataTables.responsive.js"></script>
  <script src="{{ asset('backend') }}/lib/select2/js/select2.min.js"></script>
  <script src="{{ asset('backend') }}/lib/jquery-ui/jquery-ui.js"></script>
  <script>
    $(function(){
            'use strict';
    
            $('#datatable1').DataTable({
              responsive: true,
              language: {
                searchPlaceholder: 'Search...',
                sSearch: '',
                lengthMenu: '_MENU_ items/page',
              }
            });
    
            $('#datatable2').DataTable({
              bLengthChange: false,
              searching: false,
              responsive: true
            });
    
            // Select2
            $('.dataTables_length select').select2({ minimumResultsForSearch: Infinity });
    
          });
  </script>

  <script src="{{ asset('backend') }}/lib/jquery.sparkline.bower/jquery.sparkline.min.js"></script>
  <script src="{{ asset('backend') }}/lib/d3/d3.js"></script>
  <script src="{{ asset('backend') }}/lib/rickshaw/rickshaw.min.js"></script>
  <script src="{{ asset('backend') }}/lib/chart.js/Chart.js"></script>
  <script src="{{ asset('backend') }}/lib/Flot/jquery.flot.js"></script>
  <script src="{{ asset('backend') }}/lib/Flot/jquery.flot.pie.js"></script>
  <script src="{{ asset('backend') }}/lib/Flot/jquery.flot.resize.js"></script>
  <script src="{{ asset('backend') }}/lib/flot-spline/jquery.flot.spline.js"></script>
  <script src="{{ asset('backend') }}/lib/medium-editor/medium-editor.js"></script>
    <script src="{{ asset('backend') }}/lib/summernote/summernote-bs4.min.js"></script>
    <script  type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>


    <script>
      $(function(){
        'use strict';

        // Inline editor
        var editor = new MediumEditor('.editable');

        // Summernote editor
        $('#summernote').summernote({
          height: 150,
          tooltip: false
        })
      });
    </script>
 
  <script src="{{ asset('backend') }}/js/starlight.js"></script>
  <script src="{{ asset('backend') }}/js/ResizeSensor.js"></script>
  <script src="{{ asset('backend') }}/js/dashboard.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="sweetalert2.all.min.js"></script>
<script src="sweetalert2.min.js"></script>

 

        



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


  

</body>

</html>