<?php
use App\Http\Controllers\Admin\Category\CategoryController;
use App\Http\Controllers\Admin\Coupon\CouponController;
use App\Http\Controllers\Admin\Division\DivisionController;
use App\Http\Controllers\Admin\District\DistrictController;
use App\Http\Controllers\Admin\Site\Site_settingController;
use App\Http\Controllers\Admin\Setting\SettingController;
use App\Http\Controllers\Admin\Category\SubCategoryController;
use App\Http\Controllers\Admin\User_Role\UserroleController;
use App\Http\Controllers\Admin\Seo\SeoController;
use App\Http\Controllers\Order_detailsController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ShippingController;
use App\Http\Controllers\Admin\Area\AreaController;
use App\Http\Controllers\Admin\Brand\BrandController;
use App\Http\Controllers\Admin\Product\ProductController;
use App\Http\Controllers\AsadController;
use Illuminate\Support\Facades\Route;






// Route for forntend*********************************
Route::get('/test', [App\Http\Controllers\LoadMoreController::class, 'loadMore']);
Route::post('/test_post', [App\Http\Controllers\LoadMoreController::class, 'loadMorePost'])->name('test_post');

Route::get('/', [App\Http\Controllers\FrontendController::class, 'index']);



// admin route 
Route::get('/admin/home', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('admin.home');
Route::get('/admin', [App\Http\Controllers\Admin\LoginController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin', [App\Http\Controllers\Admin\LoginController::class, 'login']);
Route::get('/admin/logout', [App\Http\Controllers\Admin\HomeController::class, 'logout'])->name('admin.logout');





// Route for  Category
Route::group(['middleware' => 'auth:admin'], function () {

  Route::group(
    ['as' => 'admin.', 'prefix' => 'admin'],
    function () {
      Route::resource('category', CategoryController::class);
    }
  );


  // Route for product controller

  Route::resource('products', ProductController::class);


  // route for setting
  Route::get('/admin/setting/', [App\Http\Controllers\Admin\Setting\SettingController::class, 'index']);
  Route::POST('/setting/updated', [App\Http\Controllers\Admin\Setting\SettingController::class, 'updated']);
  Route::resource('setting', SettingController::class);

  // Route for Status controller
  Route::group(
    ['prefix' => 'status'],
    function () {
      Route::get('/active/{id}', [App\Http\Controllers\Admin\Status\StatusController::class, 'active'])
        ->name('status.active');
      Route::get('/deactive/{id}', [App\Http\Controllers\Admin\Status\StatusController::class, 'deactive'])
        ->name('status.deactive');
    }
  );




  // Route userroutecontroller
  Route::get('/user/order/return/{order_id}', [App\Http\Controllers\User\UserReturnController::class, 'orderreturn'])
    ->name('order.return');
  Route::get('order/return/request/', [App\Http\Controllers\User\UserReturnController::class, 'orderreturnrequest']);
  Route::get('all/return/request', [App\Http\Controllers\User\UserReturnController::class, 'allreturnrequest']);
  Route::get('order/return/canel/', [App\Http\Controllers\User\UserReturnController::class, 'allreturnrequest']);
  Route::get('order/approve/cancel/{order_id}', [App\Http\Controllers\User\UserReturnController::class, 'returncancel']);
  Route::get('order/return/approve/{order_id}', [App\Http\Controllers\User\UserReturnController::class, 'orderreturnapprove']);





  // route for subCategory
  Route::resource('subCategory', SubCategoryController::class);










  // Route for Brand 
  Route::post('/brand/updated', [App\Http\Controllers\Admin\Brand\BrandController::class, 'updated']);
  Route::resource('brand', BrandController::class);




  // route for coupon\ 
  Route::resource('coupon', CouponController::class);




  //   Route for Division
  Route::post('division/updated', [App\Http\Controllers\Admin\Division\DivisionController::class, 'updated']);
  Route::DELETE('/division/delete/', [App\Http\Controllers\Admin\Division\DivisionController::class, 'destroy']);
  Route::resource('division', DivisionController::class);
  // Route for Admin Acess districtController
  Route::post('district/updated', [App\Http\Controllers\Admin\District\DistrictController::class, 'updated']);
  Route::DELETE('/district/delete/', [App\Http\Controllers\Admin\District\DistrictController::class, 'destroy']);

  // Route for Admin Acess districtController
  Route::resource('district', DistrictController::class);


  // Route for Division
  Route::resource('division', DivisionController::class);


  // route for Admin access area
  Route::resource('area', AreaController::class);

  // Route for db2_set_option(resource, options, type)
  Route::resource('seo', SeoController::class);


  // Route for OrderController
  Route::get('/admin/accept/payment/', [App\Http\Controllers\OrderController::class, 'acceptpayment'])
    ->name('accept.payment');
  Route::get('/admin/cancel/order/', [App\Http\Controllers\OrderController::class, 'cancel'])
    ->name('order.cancel');
  Route::get('/admin/order/progress/', [App\Http\Controllers\OrderController::class, 'progress'])
    ->name('order.progress');
  Route::get('/admin/delivary/success/', [App\Http\Controllers\OrderController::class, 'delivarysuccess'])
    ->name('delivary.success');
  Route::get('/admin/payment/accept/{order_id}', [App\Http\Controllers\OrderController::class, 'paymentaccept']);
  Route::get('/admin/order/cancel/{order_id}', [App\Http\Controllers\OrderController::class, 'ordercancel']);
  Route::get('/admin/order/progress/{order_id}', [App\Http\Controllers\OrderController::class, 'orderprogress']);
  Route::get('/admin/delevary/success/{order_id}', [App\Http\Controllers\OrderController::class, 'orderdelivarysuccess']);
  Route::resource('order', OrderController::class);


  // Route for db2_set_option(resource, options, type)
  Route::get('/seo/edit/{id}', [App\Http\Controllers\Admin\Seo\SeoController::class, 'edit']);
  Route::POST('/seo/updated/', [App\Http\Controllers\Admin\Seo\SeoController::class, 'update']);
  Route::DELETE('/seo/delete/', [App\Http\Controllers\Admin\Seo\SeoController::class, 'destroy']);
  Route::resource('seo', SeoController::class);




  // Route for Report
  Route::get('/today/order/report/', [App\Http\Controllers\Admin\Report\ReportController::class, 'todayreport'])
    ->name('today.orders');
  Route::get('/today/delivary/orders/', [App\Http\Controllers\Admin\Report\ReportController::class, 'todaydelivary'])
    ->name('today.delivarys');
  Route::get('/this/month/delivarys/', [App\Http\Controllers\Admin\Report\ReportController::class, 'thismonth'])
    ->name('this.month');
  Route::get('/this/year/delivarys/', [App\Http\Controllers\Admin\Report\ReportController::class, 'thisyear'])
    ->name('this.year');
  Route::get('/report/search/', [App\Http\Controllers\Admin\Report\ReportController::class, 'reportsearch'])
    ->name('report.search');
  Route::POST('/admin/report/month/search/', [App\Http\Controllers\Admin\Report\ReportController::class, 'monthsearch'])
    ->name('month.search');
  Route::POST('/admin/report/year/search/', [App\Http\Controllers\Admin\Report\ReportController::class, 'yearsearch'])
    ->name('year.search');
  Route::POST('/admin/report/date/search/', [App\Http\Controllers\Admin\Report\ReportController::class, 'datesearch'])
    ->name('date.search');




  // Route for userolecontroller
  // Route::group(
  //   ['prefix' => 'admin'],
  //   function () {
  //     Route::get('/create/user_roll/', [App\Http\Controllers\Admin\User_Role\UserroleController::class, 'createrole'])
  //       ->name('create.role');
  //     Route::POST('/user_roll/store/', [App\Http\Controllers\Admin\User_Role\UserroleController::class, 'userrolestore'])
  //       ->name('user_role.store');
  //     Route::get('/all/user_roll/', [App\Http\Controllers\Admin\User_Role\UserroleController::class, 'alluserroll'])
  //       ->name('alluser.role');
  //   }
  // );
  // action
  Route::get('/user/role/edit/{id}', [App\Http\Controllers\Admin\User_Role\UserroleController::class, 'useredit']);
  Route::DELETE('/user/role/delete/{id}', [App\Http\Controllers\Admin\User_Role\UserroleController::class, 'userdelete']);
  Route::POST('/admin/user/update/{id}', [App\Http\Controllers\Admin\User_Role\UserroleController::class, 'userupdate']);


});


Route::POST('/user_roll/updated', [App\Http\Controllers\Admin\User_Role\UserroleController::class, 'userroleupdated']);
Route::resource('user_role', UserroleController::class);




Auth::routes(['verify' => true]);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/user_custom/', [App\Http\Controllers\HomeController::class, 'userlogin'])
  ->name('user_custom');
Route::get('/user/registration/', [App\Http\Controllers\HomeController::class, 'userregister'])
  ->name('user.register');
Route::POST('/user/registration/post/', [App\Http\Controllers\HomeController::class, 'registerpost'])
  ->name('register.post');
Route::get('/user/order/details/{order_id}', [App\Http\Controllers\HomeController::class, 'orderdetail']);
Route::get('/logout', [App\Http\Controllers\HomeController::class, 'logout'])->name('user.logout');
Route::get('change/password', [App\Http\Controllers\HomeController::class, 'change_password'])
  ->name('change.password');
Route::POST('update/password', [App\Http\Controllers\HomeController::class, 'update_password'])
  ->name('update.password');
Route::POST('/user/profile_image/update/{id}', [App\Http\Controllers\HomeController::class, 'userprofileimageupdate']);


// about us 
Route::get('/about-us', [App\Http\Controllers\AboutController::class, 'aboutuspage']);



// route for checkout Controller 
Route::post('/checkout', [App\Http\Controllers\Checkout\CheckoutController::class, 'checkout']);
Route::post('/checkoutpage', [App\Http\Controllers\Checkout\CheckoutController::class, 'checkoutpage'])->name('checkout');
;


Route::post('/final/step', [App\Http\Controllers\Checkout\CheckoutController::class, 'payment'])->name('final_step');
// Route for stripe payment 
Route::get('stripe', [App\Http\Controllers\StripePaymentController::class, 'stripe']);
Route::post('stripe', [App\Http\Controllers\StripePaymentController::class, 'stripePost'])->name('stripe.post');




Route::get('/get_subcategory/{id}', [App\Http\Controllers\Admin\Product\ProductController::class, 'getsubcat']);
Route::get('/subcategory/product/show/{id}', [
  App\Http\Controllers\Admin\Category\SubCategoryController::class,
  'subcategoryshow'
]);







// Route for site setting
Route::POST('/site/updated/', [App\Http\Controllers\Admin\Site\Site_settingController::class, 'updated']);
Route::resource('site', Site_settingController::class);



// route for post
Route::get('/post/category/', [App\Http\Controllers\Admin\PostController::class, 'postcategory']);
Route::POST('/post/category/store/', [App\Http\Controllers\Admin\PostController::class, 'postcategorystore']);
Route::get('/post/category/edit/{id}', [App\Http\Controllers\Admin\PostController::class, 'postcategoryedit']);
Route::POST('/post/category/updated/', [App\Http\Controllers\Admin\PostController::class, 'postcategoryupdate']);
Route::DELETE('/post/category/delete/{id}', [App\Http\Controllers\Admin\PostController::class, 'postcategorydelete']);
Route::get('/add/post/', [App\Http\Controllers\Admin\PostController::class, 'addpost']);
Route::POST('/post/store/', [App\Http\Controllers\Admin\PostController::class, 'poststore']);
Route::get('/post/edit/{id}', [App\Http\Controllers\Admin\PostController::class, 'postedit']);
Route::POST('/post/updated/', [App\Http\Controllers\Admin\PostController::class, 'postupdated']);
Route::DELETE('/post/delete/{id}', [App\Http\Controllers\Admin\PostController::class, 'postdelete']);







// Route for contact
Route::get('/user/contact', [App\Http\Controllers\ContactController::class, 'contact']);
Route::POST('/send/message/', [App\Http\Controllers\ContactController::class, 'sendmessage']);



// sorting test

Route::POST('/sorting/test', [App\Http\Controllers\ShopController::class, 'sorting']);

Route::get('/sorting/red', [App\Http\Controllers\ShopController::class, 'sortingred']);




Route::POST('/product/updated', [App\Http\Controllers\Admin\Product\ProductController::class, 'updated']);
Route::get('/product/status/updated/{id}', [App\Http\Controllers\Admin\Product\ProductController::class, 'statusupdate']);
Route::resource('product', ProductController::class);
Route::get('loadmore', [App\Http\Controllers\Admin\Product\ProductController::class, 'loadmore']);





// rotue for shop controller 
Route::get('shop/page', [App\Http\Controllers\ShopController::class, 'shoppage']);
Route::get('/category/shop/products/{id}', [App\Http\Controllers\ShopController::class, 'categoryshopproducts']);
Route::get('/brand/shop/products/{id}', [App\Http\Controllers\ShopController::class, 'brandshopproducts']);
// Route for stockcontroller 
Route::get('/admin/stock/management/', [App\Http\Controllers\Admin\Stock\StockController::class, 'stock'])->name('stock.index');

// search page 

Route::get('search/page', [App\Http\Controllers\SearchController::class, 'search']);




// Route for user Access
// route for product 
Route::get('productview/{id}', [App\Http\Controllers\User\UserController::class, 'productview']);
Route::POST('search/product', [App\Http\Controllers\User\UserController::class, 'search']);
Route::POST('/find/product', [App\Http\Controllers\User\UserController::class, 'findproduct']);
Route::get('/product-quick-view/{id}', [App\Http\Controllers\User\UserController::class, 'quickview']);




// Route for user access districtController
Route::get('/get_district/{division_id}', [App\Http\Controllers\User\UserController::class, 'getdistrict']);
// route for user Acess area
Route::get('/get_area/{district_id}', [App\Http\Controllers\User\UserController::class, 'getarea']);
Route::get('/singleproduct/{id}', [App\Http\Controllers\User\UserController::class, 'singleproduct'])
  ->name('singleproduct.show');
// route for user  category
Route::get('category/page/{id}', [App\Http\Controllers\User\UserController::class, 'categoryshow'])
  ->name('category.show');




// Route for cart
Route::get('/add/cart/{id}', [App\Http\Controllers\Cart\CartController::class, 'addcart'])->name('cart.added');
Route::get('/cart_show', [App\Http\Controllers\Cart\CartController::class, 'cart_show'])->name('cart.show');
Route::POST('applycouponn', [App\Http\Controllers\Cart\CartController::class, 'appcoupon']);
Route::get('cartdata', [App\Http\Controllers\Cart\CartController::class, 'alldata']);
Route::get('increment/{rowId}', [App\Http\Controllers\Cart\CartController::class, 'increment']);
Route::get('decrement/{rowId}', [App\Http\Controllers\Cart\CartController::class, 'decrement']);
Route::get('cartremove/{rowId}', [App\Http\Controllers\Cart\CartController::class, 'destroy']);
Route::get('cartcal', [App\Http\Controllers\Cart\CartController::class, 'cartcal']);
Route::get('couponremove', [App\Http\Controllers\Cart\CartController::class, 'couponremove']);
Route::get('/minicart/', [App\Http\Controllers\Cart\CartController::class, 'minicart']);




// Route for wishlist
Route::get('/wishlist/added/{id}', [App\Http\Controllers\Wishlist\WishlistController::class, 'addwishlist'])
  ->name('wish.added');
Route::get('/wishlist/', [App\Http\Controllers\Wishlist\WishlistController::class, 'wishlist'])
  ->name('wish.list');
//  Route::get('/wishlist/',[App\Http\Controllers\Wishlist\WishlistController::class,'wishlist'])
//  ->name('wish.list');
Route::get('/addwishlistt/{id}', [App\Http\Controllers\Wishlist\WishlistController::class, 'wishlistt']);
Route::get('/addwishlisttt/{id}', [App\Http\Controllers\Wishlist\WishlistController::class, 'wishlisttt']);

Route::get('/miniwishlist/', [App\Http\Controllers\Wishlist\WishlistController::class, 'miniwishlist']);
Route::get('/user/wishlist', [App\Http\Controllers\Wishlist\WishlistController::class, 'userwishlist']);




// Route for cart

Route::get('/check', [App\Http\Controllers\Cart\CartController::class, 'check']);
Route::get('/cart_show', [App\Http\Controllers\Cart\CartController::class, 'cart_show'])
  ->name('cart.show');
Route::get('/cart/remove/{rowId}', [App\Http\Controllers\Cart\CartController::class, 'cartremove'])
  ->name('cart.delete');
Route::get('/coupon_cart/remove/{rowId}', [App\Http\Controllers\Admin\Coupon\CouponController::class, 'cartremove'])
  ->name('coupon_cart.delete');
Route::post('/cart/update/', [App\Http\Controllers\Cart\CartController::class, 'cartupdate'])
  ->name('cart.update');
Route::POST('/addtocart', [App\Http\Controllers\Cart\CartController::class, 'addtocart'])
  ->name('addto.cart');



// route for socialite
Route::get('login/google', [App\Http\Controllers\Googlecontroller::class, 'redirectToGoogle']);
Route::get('/login/google/callback', [App\Http\Controllers\Googlecontroller::class, 'handleGoogleCallback']);

// route for facebook login
Route::get('auth/facebook', [App\Http\Controllers\Facebookcontroller::class, 'redirectToFacebook']);

Route::get('/login/facebook/callback', [App\Http\Controllers\Facebookcontroller::class, 'handleFacebookCallback']);





//   Route for ordercontroller
Route::POST('/order/tracking/', [App\Http\Controllers\OrderController::class, 'ordertracking']);
Route::resource('order_details', Order_detailsController::class);
Route::resource('shipping', ShippingController::class);



// route for blog
Route::get('/blog/post', [App\Http\Controllers\BlogController::class, 'blogpost']);
Route::get('/blog/details', [App\Http\Controllers\BlogController::class, 'blogdetails']);
Route::get('/blog/video', [App\Http\Controllers\BlogController::class, 'blogvideo']);


// Route for localization
Route::get('/local/{local}', [App\Http\Controllers\BlogController::class, 'switch']);
// Route for newsletter
Route::POST('/add/newsletter', [App\Http\Controllers\NewsLetterController::class, 'addnewsletter']);



// rotue fotct/messages', [App\Http\Controllers\Admin\Contact\AdminContactController::class, 'contactmessage');
