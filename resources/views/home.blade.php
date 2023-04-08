@extends('layouts.shopwisemaster')
@section('content')
<!-- START SECTION BREADCRUMB -->
<div class="breadcrumb_section bg_gray page-title-mini">
    <div class="container"><!-- STRART CONTAINER -->
        <div class="row align-items-center">
        	<div class="col-md-6">
                <!-- <div class="page-title">
            		<h1>My Account</h1>
                </div> -->
            </div>
            <div class="col-md-6">
                <ol class="breadcrumb justify-content-md-end">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active">My Account</li>
                </ol>
            </div>
        </div>
    </div><!-- END CONTAINER-->
</div>
<!-- END SECTION BREADCRUMB -->

<!-- START MAIN CONTENT -->
<div class="main_content">

<!-- START SECTION SHOP -->
<div class="section">
	<div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-4">
                <div class="dashboard_menu">
                    <ul class="nav nav-tabs flex-column" role="tablist">
                      <li class="nav-item">
                        <a class="nav-link active" id="dashboard-tab" data-bs-toggle="tab" href="#dashboard" role="tab" aria-controls="dashboard" aria-selected="false"><i class="ti-layout-grid2"></i>Dashboard</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="orders-tab" data-bs-toggle="tab" href="#orders" role="tab" aria-controls="orders" aria-selected="false"><i class="ti-shopping-cart-full"></i>Orders</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="address-tab" data-bs-toggle="tab" href="#address" role="tab" aria-controls="address" aria-selected="true"><i class="ti-location-pin"></i>My Address</a>
                      </li>
                      <!-- <li class="nav-item">
                        <a class="nav-link" id="account-detail-tab" data-bs-toggle="tab" href="#account-detail" role="tab" aria-controls="account-detail" aria-selected="true"><i class="ti-id-badge"></i>Account details</a>
                      </li> -->
                      <li class="nav-item">
                        <a class="nav-link" href="{{ route('user.logout') }}"><i class="ti-lock"></i>Logout</a>
                        
                      </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-9 col-md-8">
                <div class="tab-content dashboard_content">
                  	<div class="tab-pane fade active show" id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
                    	<div class="card">
                        	<div class="card-header">
                                <h3>Dashboard</h3>
                            </div>
                            <div class="card-body">
                    			<p>From your account dashboard. you can easily check &amp; view your <a href="javascript:void(0);" onclick="$('#orders-tab').trigger('click')">recent orders</a>, manage your <a href="javascript:void(0);" onclick="$('#address-tab').trigger('click')">shipping and billing addresses</a> and <a href="javascript:void(0);" onclick="$('#account-detail-tab').trigger('click')">edit your password and account details.</a></p>
                            </div>
                        </div>
                  	</div>
                  	<div class="tab-pane fade" id="orders" role="tabpanel" aria-labelledby="orders-tab">
                    	<div class="card">
                        	<div class="card-header">
                                <h3>Orders</h3>
                            </div>
                            <div class="card-body">
                    			<div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Order Code</th>
                                                <th>Date</th>
                                                <th>Status</th>
                                                <th>Return Status</th>

                                                <th>SubTotal</th>
                                                <th>Discount</th>
                                                <th>Total</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($orders as $item)
                                                
                                            <tr>
                                                <td>{{ $item->status_code }}</td>
                                                <td>{{ $item->date }}</td>
                                                <td> 
                                                    @if($item->status == 0)
                                                   
                                                     <span class="badge bg-primary">Pending</span>
                                                    @elseif($item->status == 1)
                                                      
                                                         <span class="badge bg-primary">Payment accept</span>
                                                        @elseif($item->status == 2)
                                                       
                                                         <span class="badge bg-primary">Progress</span>
                                                        @elseif($item->status == 3)
                                                      
                                                         <span class="badge bg-primary">Delevared</span>
                                                        @else
                                                       
                                                         <span class="badge bg-primary">Cancel</span>
                                                    
                                                    @endif 
                                                </td>
                                               
                                                <td>
                                                     @if($item->return == 0)
                                                      <span class="badge bg-warning">no requested</span>
                                                 
                                                   
                                                    @elseif($item->return == 2)
                                                       
                                                         <span class="badge bg-success">approved</span>
                                                        @elseif($item->return == 3)
                                                       
                                                        <span class="badge bg-danger">canceled</span>

                                                        @else
                                                      
                                                         <span class="badge bg-primary">requested</span>
                                                        @endif
                                                </td>
                                                <td>{{ $item->subtotal }}</td>
                                                <td>{{ $item->discount }}</td>
                                                <td>{{ $item->paying_amount }}</td>

                            
                                                <td>
                                                    @if($item->status == 3)
                                                <a class="btn btn-info btn-sm" href="{{url('/user/order/details/'.$item->id)}}">view</a>
                                                <a class="btn btn-danger btn-sm " href="{{url('/user/order/return/'.$item->id)}}">return</a>

                                                        @else
                                                        <a class="btn btn-primary btn-sm" href="{{url('/user/order/details/'.$item->id)}}">view</a>
                                                        @endif
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                  	</div>
					<div class="tab-pane fade" id="address" role="tabpanel" aria-labelledby="address-tab">
                    	<div class="row">
                        	<!-- <div class="col-lg-6">
                                <div class="card mb-3 mb-lg-0">
                                    <div class="card-header">
                                        <h3>Billing Address</h3>
                                    </div>
                                    <div class="card-body">
                                        <address>House #15
                                            <br>Road #1<br>
                                            Block #C <br>
                                            Angali <br> 
                                            Vedora <br>
                                            1212</address>
                                        <p>New York</p>
                                        <a href="#" class="btn btn-fill-out">Edit</a>
                                    </div>
                                </div>
                            </div> -->
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3>Shipping Address</h3>
                                    </div>
                                    <div class="card-body">
                                <address><b>Division:</b> {{@$shipping_address->division}}<br><br>
                                <address><b>District:</b> {{@$shipping_address->district}}<br><br>
                                <address><b>Area:</b> {{@$shipping_address->area}}<br><br>
                                <address><b>Zip:</b> {{@$shipping_address->zip}}<br><br>
                                <address><b>Address:</b> {{@$shipping_address->address}}<br>

                                           
                                        <p>Bangladesh</p>
                                        <!-- <a href="#" class="btn btn-fill-out">Edit</a> -->
                                    </div>
                                </div>
                            </div>
                        </div>
					</div>
                    <div class="tab-pane fade" id="account-detail" role="tabpanel" aria-labelledby="account-detail-tab">
						<!-- <div class="card">
                        	<div class="card-header">
                                <h3>Account Details</h3>
                            </div>
                            <div class="card-body">
                    			<p>Already have an account? <a href="#">Log in instead!</a></p>
                                <form method="post" name="enq">
                                    <div class="row">
                                        <div class="form-group col-md-6 mb-3">
                                        	<label>First Name <span class="required">*</span></label>
                                            <input required="" class="form-control" name="name" type="text">
                                         </div>
                                         <div class="form-group col-md-6 mb-3">
                                        	<label>Last Name <span class="required">*</span></label>
                                            <input required="" class="form-control" name="phone">
                                        </div>
                                        <div class="form-group col-md-12 mb-3">
                                        	<label>Display Name <span class="required">*</span></label>
                                            <input required="" class="form-control" name="dname" type="text">
                                        </div>
                                        <div class="form-group col-md-12 mb-3">
                                        	<label>Email Address <span class="required">*</span></label>
                                            <input required="" class="form-control" name="email" type="email">
                                        </div>
                                        <div class="form-group col-md-12 mb-3">
                                        	<label>Current Password <span class="required">*</span></label>
                                            <input required="" class="form-control" name="password" type="password">
                                        </div>
                                        <div class="form-group col-md-12 mb-3">
                                        	<label>New Password <span class="required">*</span></label>
                                            <input required="" class="form-control" name="npassword" type="password">
                                        </div>
                                        <div class="form-group col-md-12 mb-3">
                                        	<label>Confirm Password <span class="required">*</span></label>
                                            <input required="" class="form-control" name="cpassword" type="password">
                                        </div>
                                        <div class="col-md-12">
                                            <button type="submit" class="btn btn-fill-out" name="submit" value="Submit">Save</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div> -->
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- END SECTION SHOP -->

<!-- START SECTION SUBSCRIBE NEWSLETTER -->

<!-- START SECTION SUBSCRIBE NEWSLETTER -->

</div>
<!-- END MAIN CONTENT -->
@endsection