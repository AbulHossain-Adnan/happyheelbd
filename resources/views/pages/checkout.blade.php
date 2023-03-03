@extends('layouts.shopwisemaster')
@section('content')
<!-- START SECTION BREADCRUMB -->
<div class="breadcrumb_section bg_gray page-title-mini">
    <div class="container"><!-- STRART CONTAINER -->
        <div class="row align-items-center">
        	<div class="col-md-6">
                <div class="page-title">
            		<h1>Checkout</h1>
                </div>
            </div>
            <div class="col-md-6">
                <ol class="breadcrumb justify-content-md-end">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active">Checkout</li>
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
            <div class="col-lg-6">
            	<div class="toggle_info">
                	<span><i class="fas fa-user"></i>Returning customer? <a href="#loginform" data-bs-toggle="collapse" class="collapsed" aria-expanded="false">Click here to login</a></span>
                </div>
                <div class="panel-collapse collapse login_form" id="loginform">
                    <div class="panel-body">
                    	<p>If you have shopped with us before, please enter your details below. If you are a new customer, please proceed to the Billing &amp; Shipping section.</p>
                    	<form method="post" action="{{url('/final/step')}}">
                        @csrf
                            <div class="form-group mb-3">
                                <input type="text" required="" class="form-control" name="email" placeholder="Username Or Email">
                            </div>
                            <div class="form-group mb-3">
                                <input class="form-control" required="" type="password" name="password" placeholder="Password">
                            </div>
                            <div class="login_footer form-group mb-3">
                                <div class="chek-form">
                                    <div class="custome-checkbox">
                                        <input class="form-check-input" type="checkbox" name="checkbox" id="remember" value="">
                                        <label class="form-check-label" for="remember"><span>Remember me</span></label>
                                    </div>
                                </div>
                                <a href="#">Forgot password?</a>
                            </div>
                            <div class="form-group mb-3">
                                <button type="submit" class="btn btn-fill-out btn-block" name="login">Log in</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
            	<div class="toggle_info">
            		<span><i class="fas fa-tag"></i>Have a coupon? <a href="#coupon" data-bs-toggle="collapse" class="collapsed" aria-expanded="false">Click here to enter your code</a></span>
                </div>
                <div class="panel-collapse collapse coupon_form" id="coupon">
                    <div class="panel-body">
                    	<p>If you have a coupon code, please apply it below.</p>
                        <div class="coupon field_form input-group">
                            <input type="text" value="" class="form-control" placeholder="Enter Coupon Code..">
                            <div class="input-group-append">
                                <button class="btn btn-fill-out btn-sm" type="submit">Apply Coupon</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
            	<div class="medium_divider"></div>
            	<div class="divider center_icon"><i class="linearicons-credit-card"></i></div>
            	<div class="medium_divider"></div>
            </div>
        </div>
        <div class="row">
        	<div class="col-md-6">
            	<div class="heading_s1">
            		<h4>Billing Details</h4>
                </div>
                <form method="post" action="{{url('/final/step')}}">
                    @csrf
                    <div class="form-group mb-3">
                           <label for="exampleInputEmail1" class="form-label">Full Name*</label>
                        <input type="text" class="form-control" name="name" id="inputAddress2" placeholder="Enter you full name" required="name">
                    </div>
                    <div class="form-group mb-3">
                           <label for="exampleInputEmail1" class="form-label">Phone Number*</label>
                        <input type="text" class="form-control" name="pnumber" placeholder="Enter your phone Number" required="pnumber" >
                    </div>
                   
                    <div class="form-group mb-3">
                        <div class="custom_select">
                               <label for="exampleInputEmail1" class="form-label">Division*</label>
                            <select class="form-control"  name="division_id" required="division_id">
                                <option value="">Select an option...</option>

                                @foreach ($divisions as $item)
                                <option value="{{$item->id}}">{{$item->division}}</option>
                                @endforeach
                               
                            </select>
                        </div>
                    </div>

                     <div class="form-group mb-3">
                        <div class="custom_select">
                               <label for="exampleInputEmail1" class="form-label">District*</label>
                           <select class="form-control" data-placeholder="Choose country" name="district_id" required="district_id">
                              <option value="">Select District</option>
                          </select>
                        </div>
                    </div>

                      <div class="form-group mb-3">
                        <div class="custom_select">
                               <label for="exampleInputEmail1" class="form-label">Thana*</label>
                           <select class="form-control" data-placeholder="Choose country" name="area_id" placeholder="sdfs" required="area_id">
                              <option value="">Select Area</option>
                           </select>
                        </div>
                    </div>
                    <div class="form-group mb-3">
                           <label for="exampleInputEmail1" class="form-label">Address*</label>
                        <input type="text" name="adress" class="form-control" placeholder="Example:Uttora,sector:9house:20" id="inputZip" required="address">
                    </div>
                    <div class="form-group mb-3">
                         <input type="text" name="zip" class="form-control" id="inputZip" placeholder="Zip">
                    </div>
                    {{-- <div class="form-group mb-3">
                        <input class="form-control" required type="text" name="city" placeholder="City / Town *">
                    </div>
                    <div class="form-group mb-3">
                        <input class="form-control" required type="text" name="state" placeholder="State / County *">
                    </div>
                    <div class="form-group mb-3">
                        <input class="form-control" required type="text" name="zipcode" placeholder="Postcode / ZIP *">
                    </div>
                    <div class="form-group mb-3">
                        <input class="form-control" required type="text" name="phone" placeholder="Phone *">
                    </div> --}}
                    {{-- <div class="form-group mb-3">
                        <input class="form-control" required type="text" name="email" placeholder="Email address *">
                    </div> --}}
                    {{-- <div class="form-group mb-3">
                        <div class="chek-form">
                            <div class="custome-checkbox">
                                <input class="form-check-input" type="checkbox" name="checkbox" id="createaccount">
                                <label class="form-check-label label_info" for="createaccount"><span>Create an account?</span></label>
                            </div>
                        </div>
                    </div> --}}
                    {{-- <div class="form-group create-account mb-3">
                        <input class="form-control" required type="password" placeholder="Password" name="password" >
                    </div> --}}



                    {{-- <div class="ship_detail">
                    	<div class="form-group mb-3">
                    	<div class="chek-form">
                            <div class="custome-checkbox">
                                <input class="form-check-input" type="checkbox" name="checkbox" id="differentaddress">
                                <label class="form-check-label label_info" for="differentaddress"><span>Ship to a different address?</span></label>
                            </div>
                        </div>
                    </div>
                    	<div class="different_address">
                        <div class="form-group mb-3">
                            <input type="text" required class="form-control" name="fname" placeholder="First name *">
                        </div>
                        <div class="form-group mb-3">
                            <input type="text" required class="form-control" name="lname" placeholder="Last name *">
                        </div>
                        <div class="form-group mb-3">
                            <input class="form-control" required type="text" name="cname" placeholder="Company Name">
                        </div>
                        <div class="form-group mb-3">
                            <div class="custom_select">
                                <select class="form-control">
                                    <option value="">Select an option...</option>
                                    <option value="AX">Aland Islands</option>
                                    <option value="AF">Afghanistan</option>
                                    <option value="AL">Albania</option>
                                    <option value="DZ">Algeria</option>
                                    <option value="AD">Andorra</option>
                                    <option value="AO">Angola</option>
                                    <option value="AI">Anguilla</option>
                                    <option value="AQ">Antarctica</option>
                                    <option value="AG">Antigua and Barbuda</option>
                                    <option value="AR">Argentina</option>
                                    <option value="AM">Armenia</option>
                                    <option value="AW">Aruba</option>
                                    <option value="AU">Australia</option>
                                    <option value="AT">Austria</option>
                                    <option value="AZ">Azerbaijan</option>
                                    <option value="BS">Bahamas</option>
                                    <option value="BH">Bahrain</option>
                                    <option value="BD">Bangladesh</option>
                                    <option value="BB">Barbados</option>
                                    <option value="BY">Belarus</option>
                                    <option value="PW">Belau</option>
                                    <option value="BE">Belgium</option>
                                    <option value="BZ">Belize</option>
                                    <option value="BJ">Benin</option>
                                    <option value="BM">Bermuda</option>
                                    <option value="BT">Bhutan</option>
                                    <option value="BO">Bolivia</option>
                                    <option value="BQ">Bonaire, Saint Eustatius and Saba</option>
                                    <option value="BA">Bosnia and Herzegovina</option>
                                    <option value="BW">Botswana</option>
                                    <option value="BV">Bouvet Island</option>
                                    <option value="BR">Brazil</option>
                                    <option value="IO">British Indian Ocean Territory</option>
                                    <option value="VG">British Virgin Islands</option>
                                    <option value="BN">Brunei</option>
                                    <option value="BG">Bulgaria</option>
                                    <option value="BF">Burkina Faso</option>
                                    <option value="BI">Burundi</option>
                                    <option value="KH">Cambodia</option>
                                    <option value="CM">Cameroon</option>
                                    <option value="CA">Canada</option>
                                    <option value="CV">Cape Verde</option>
                                    <option value="KY">Cayman Islands</option>
                                    <option value="CF">Central African Republic</option>
                                    <option value="TD">Chad</option>
                                    <option value="CL">Chile</option>
                                    <option value="CN">China</option>
                                    <option value="CX">Christmas Island</option>
                                    <option value="CC">Cocos (Keeling) Islands</option>
                                    <option value="CO">Colombia</option>
                                    <option value="KM">Comoros</option>
                                    <option value="CG">Congo (Brazzaville)</option>
                                    <option value="CD">Congo (Kinshasa)</option>
                                    <option value="CK">Cook Islands</option>
                                    <option value="CR">Costa Rica</option>
                                    <option value="HR">Croatia</option>
                                    <option value="CU">Cuba</option>
                                    <option value="CW">CuraÇao</option>
                                    <option value="CY">Cyprus</option>
                                    <option value="CZ">Czech Republic</option>
                                    <option value="DK">Denmark</option>
                                    <option value="DJ">Djibouti</option>
                                    <option value="DM">Dominica</option>
                                    <option value="DO">Dominican Republic</option>
                                    <option value="EC">Ecuador</option>
                                    <option value="EG">Egypt</option>
                                    <option value="SV">El Salvador</option>
                                    <option value="GQ">Equatorial Guinea</option>
                                    <option value="ER">Eritrea</option>
                                    <option value="EE">Estonia</option>
                                    <option value="ET">Ethiopia</option>
                                    <option value="FK">Falkland Islands</option>
                                    <option value="FO">Faroe Islands</option>
                                    <option value="FJ">Fiji</option>
                                    <option value="FI">Finland</option>
                                    <option value="FR">France</option>
                                    <option value="GF">French Guiana</option>
                                    <option value="PF">French Polynesia</option>
                                    <option value="TF">French Southern Territories</option>
                                    <option value="GA">Gabon</option>
                                    <option value="GM">Gambia</option>
                                    <option value="GE">Georgia</option>
                                    <option value="DE">Germany</option>
                                    <option value="GH">Ghana</option>
                                    <option value="GI">Gibraltar</option>
                                    <option value="GR">Greece</option>
                                    <option value="GL">Greenland</option>
                                    <option value="GD">Grenada</option>
                                    <option value="GP">Guadeloupe</option>
                                    <option value="GT">Guatemala</option>
                                    <option value="GG">Guernsey</option>
                                    <option value="GN">Guinea</option>
                                    <option value="GW">Guinea-Bissau</option>
                                    <option value="GY">Guyana</option>
                                    <option value="HT">Haiti</option>
                                    <option value="HM">Heard Island and McDonald Islands</option>
                                    <option value="HN">Honduras</option>
                                    <option value="HK">Hong Kong</option>
                                    <option value="HU">Hungary</option>
                                    <option value="IS">Iceland</option>
                                    <option value="IN">India</option>
                                    <option value="ID">Indonesia</option>
                                    <option value="IR">Iran</option>
                                    <option value="IQ">Iraq</option>
                                    <option value="IM">Isle of Man</option>
                                    <option value="IL">Israel</option>
                                    <option value="IT">Italy</option>
                                    <option value="CI">Ivory Coast</option>
                                    <option value="JM">Jamaica</option>
                                    <option value="JP">Japan</option>
                                    <option value="JE">Jersey</option>
                                    <option value="JO">Jordan</option>
                                    <option value="KZ">Kazakhstan</option>
                                    <option value="KE">Kenya</option>
                                    <option value="KI">Kiribati</option>
                                    <option value="KW">Kuwait</option>
                                    <option value="KG">Kyrgyzstan</option>
                                    <option value="LA">Laos</option>
                                    <option value="LV">Latvia</option>
                                    <option value="LB">Lebanon</option>
                                    <option value="LS">Lesotho</option>
                                    <option value="LR">Liberia</option>
                                    <option value="LY">Libya</option>
                                    <option value="LI">Liechtenstein</option>
                                    <option value="LT">Lithuania</option>
                                    <option value="LU">Luxembourg</option>
                                    <option value="MO">Macao S.A.R., China</option>
                                    <option value="MK">Macedonia</option>
                                    <option value="MG">Madagascar</option>
                                    <option value="MW">Malawi</option>
                                    <option value="MY">Malaysia</option>
                                    <option value="MV">Maldives</option>
                                    <option value="ML">Mali</option>
                                    <option value="MT">Malta</option>
                                    <option value="MH">Marshall Islands</option>
                                    <option value="MQ">Martinique</option>
                                    <option value="MR">Mauritania</option>
                                    <option value="MU">Mauritius</option>
                                    <option value="YT">Mayotte</option>
                                    <option value="MX">Mexico</option>
                                    <option value="FM">Micronesia</option>
                                    <option value="MD">Moldova</option>
                                    <option value="MC">Monaco</option>
                                    <option value="MN">Mongolia</option>
                                    <option value="ME">Montenegro</option>
                                    <option value="MS">Montserrat</option>
                                    <option value="MA">Morocco</option>
                                    <option value="MZ">Mozambique</option>
                                    <option value="MM">Myanmar</option>
                                    <option value="NA">Namibia</option>
                                    <option value="NR">Nauru</option>
                                    <option value="NP">Nepal</option>
                                    <option value="NL">Netherlands</option>
                                    <option value="AN">Netherlands Antilles</option>
                                    <option value="NC">New Caledonia</option>
                                    <option value="NZ">New Zealand</option>
                                    <option value="NI">Nicaragua</option>
                                    <option value="NE">Niger</option>
                                    <option value="NG">Nigeria</option>
                                    <option value="NU">Niue</option>
                                    <option value="NF">Norfolk Island</option>
                                    <option value="KP">North Korea</option>
                                    <option value="NO">Norway</option>
                                    <option value="OM">Oman</option>
                                    <option value="PK">Pakistan</option>
                                    <option value="PS">Palestinian Territory</option>
                                    <option value="PA">Panama</option>
                                    <option value="PG">Papua New Guinea</option>
                                    <option value="PY">Paraguay</option>
                                    <option value="PE">Peru</option>
                                    <option value="PH">Philippines</option>
                                    <option value="PN">Pitcairn</option>
                                    <option value="PL">Poland</option>
                                    <option value="PT">Portugal</option>
                                    <option value="QA">Qatar</option>
                                    <option value="IE">Republic of Ireland</option>
                                    <option value="RE">Reunion</option>
                                    <option value="RO">Romania</option>
                                    <option value="RU">Russia</option>
                                    <option value="RW">Rwanda</option>
                                    <option value="ST">São Tomé and Príncipe</option>
                                    <option value="BL">Saint Barthélemy</option>
                                    <option value="SH">Saint Helena</option>
                                    <option value="KN">Saint Kitts and Nevis</option>
                                    <option value="LC">Saint Lucia</option>
                                    <option value="SX">Saint Martin (Dutch part)</option>
                                    <option value="MF">Saint Martin (French part)</option>
                                    <option value="PM">Saint Pierre and Miquelon</option>
                                    <option value="VC">Saint Vincent and the Grenadines</option>
                                    <option value="SM">San Marino</option>
                                    <option value="SA">Saudi Arabia</option>
                                    <option value="SN">Senegal</option>
                                    <option value="RS">Serbia</option>
                                    <option value="SC">Seychelles</option>
                                    <option value="SL">Sierra Leone</option>
                                    <option value="SG">Singapore</option>
                                    <option value="SK">Slovakia</option>
                                    <option value="SI">Slovenia</option>
                                    <option value="SB">Solomon Islands</option>
                                    <option value="SO">Somalia</option>
                                    <option value="ZA">South Africa</option>
                                    <option value="GS">South Georgia/Sandwich Islands</option>
                                    <option value="KR">South Korea</option>
                                    <option value="SS">South Sudan</option>
                                    <option value="ES">Spain</option>
                                    <option value="LK">Sri Lanka</option>
                                    <option value="SD">Sudan</option>
                                    <option value="SR">Suriname</option>
                                    <option value="SJ">Svalbard and Jan Mayen</option>
                                    <option value="SZ">Swaziland</option>
                                    <option value="SE">Sweden</option>
                                    <option value="CH">Switzerland</option>
                                    <option value="SY">Syria</option>
                                    <option value="TW">Taiwan</option>
                                    <option value="TJ">Tajikistan</option>
                                    <option value="TZ">Tanzania</option>
                                    <option value="TH">Thailand</option>
                                    <option value="TL">Timor-Leste</option>
                                    <option value="TG">Togo</option>
                                    <option value="TK">Tokelau</option>
                                    <option value="TO">Tonga</option>
                                    <option value="TT">Trinidad and Tobago</option>
                                    <option value="TN">Tunisia</option>
                                    <option value="TR">Turkey</option>
                                    <option value="TM">Turkmenistan</option>
                                    <option value="TC">Turks and Caicos Islands</option>
                                    <option value="TV">Tuvalu</option>
                                    <option value="UG">Uganda</option>
                                    <option value="UA">Ukraine</option>
                                    <option value="AE">United Arab Emirates</option>
                                    <option value="GB">United Kingdom (UK)</option>
                                    <option value="US">USA (US)</option>
                                    <option value="UY">Uruguay</option>
                                    <option value="UZ">Uzbekistan</option>
                                    <option value="VU">Vanuatu</option>
                                    <option value="VA">Vatican</option>
                                    <option value="VE">Venezuela</option>
                                    <option value="VN">Vietnam</option>
                                    <option value="WF">Wallis and Futuna</option>
                                    <option value="EH">Western Sahara</option>
                                    <option value="WS">Western Samoa</option>

                                    <option value="YE">Yemen</option>
                                    <option value="ZM">Zambia</option>
                                    <option value="ZW">Zimbabwe</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <input type="text" class="form-control" name="billing_address" required="" placeholder="Address *">
                        </div>
                        <div class="form-group mb-3">
                            <input type="text" class="form-control" name="billing_address2" required="" placeholder="Address line2">
                        </div>
                        <div class="form-group mb-3">
                            <input class="form-control" required type="text" name="city" placeholder="City / Town *">
                        </div>
                        <div class="form-group mb-3">
                            <input class="form-control" required type="text" name="state" placeholder="State / County *">
                        </div>
                        <div class="form-group mb-3">
                            <input class="form-control" required type="text" name="zipcode" placeholder="Postcode / ZIP *">
                        </div>
                    </div>
                    </div>
                    <div class="heading_s1">
                        <h4>Additional information</h4>
                    </div>
                    <div class="form-group mb-0">
                        <textarea rows="5" class="form-control" placeholder="Order notes"></textarea>
                    </div> --}}



                {{-- </form> --}}
            </div>
            <div class="col-md-6">
                <div class="order_review">
                    <div class="heading_s1">
                        <h4>Your Orders</h4>
                    </div>
                    <div class="table-responsive order_table">
                        <table class="table">
                            <thead>
                                <tr>
                                   
                                    <th>Name</th>
                                    <th>Price</th>
                                    <th>color</th>
                                    <th>size</th>
                                </tr>
                            </thead>
                            <tbody>
                               @foreach($cart as $item)
                                <tr>
                                 
                                  <td>{{$item->name}}</td>
                                  <td>{{$item->price*$item->qty}}</td>
                                  <td>{{$item->options->color}}</td>
                                  <td>{{$item->options->size}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>SubTotal Charge:</th>
                                    <td class="product-subtotal">{{$carts['subtotal']}} taka</td>
                                </tr>
                                <tr >
                                  
                                    <th>Shipping</th>
                                     <p>inside dhaka sheeping charge 80 taka and outside dhaka delivary charge 150 taka</p>

                                    <td id="sheeping_charge"></td>
                                </tr>
                                <tr>
                                    <th>Total</th>
                                    <td id="total" class="product-subtotal">{{$carts['grand_total']}} taka</td>
                                </tr>
                                 @if($carts['name'] == "NULL")
                                <input type="hidden" value="0" name="discount">
                                <input type="hidden" value="{{Cart::subtotal()}}" name="subtotal">
                                <input type="hidden" id="sheeping" name="sheeping">

                                @else
                                <input type="hidden" value="{{$carts['grand_total']}}" name="subtotal">
                                <input type="hidden" value="{{$carts['discount_amount']}}" name="discount">
                                 <input type="hidden" id="sheeping" name="sheeping">
                                @endif
                            </tfoot>
                        </table>
                    </div>
                     <div class="row">
          <div class="col-lg-4">
            <label class="ckbox">
              <input type="radio" name="payment" value="cash_on" checked="">
              <img src="{{ asset('frontend') }}/payments/cashon1.jpg" width="100"
              alt="">
            </label>
            </div><!-- col-4 -->
            
            <div class="col-lg-4">
              <label class="ckbox">
                <input type="radio" name="payment" value="bkash">
                <img src="{{ asset('frontend') }}/payments/bkash.jpg" width="100"
                alt="">
              </label>
            </div>
            <div class="col-lg-4">
              <label class="ckbox">
                <input type="radio" name="payment" value="stripe">
                <img src="{{ asset('frontend') }}/payments/stripe.jpg" width="100"
                alt="">
              </label>
            </div>
            <br><br>
            <!-- col-4 -->
            
          </div><br><br>
          
          
          <button type="submit" class="btn btn-fill-out btn-block">Place Order</button>
        </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END SECTION SHOP -->

<!-- START SECTION SUBSCRIBE NEWSLETTER -->
<div class="section bg_default small_pt small_pb">
	<div class="container">	
    	<div class="row align-items-center">	
            <div class="col-md-6">
                <div class="heading_s1 mb-md-0 heading_light">
                    <h3>Subscribe Our Newsletter</h3>
                </div>
            </div>
            <div class="col-md-6">
                <div class="newsletter_form">
                    <form>
                        <input type="text" required="" class="form-control rounded-0" placeholder="Enter Email Address">
                        <button type="submit" class="btn btn-dark rounded-0" name="submit" value="Submit">Subscribe</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- START SECTION SUBSCRIBE NEWSLETTER -->

</div>
<script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <script type="text/javascript">
    $(document).ready(function(){
    $('select[name="division_id"]').on('change',function() {
    var division_id = $(this).val();
    if(division_id){
    $.ajaxSetup({
    headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
    });
    $.ajax({
    type:"GET",
    dataType:"json",
    url:"/get_district/"+division_id,
    success:function(data){
     
    
    $('select[name="district_id"]').empty();
    $('#district_id').html('<option value="">Select District</option>');
    $.each(data, function(key, value){
      
    $('select[name="district_id"]').append('<option value ="'+ value.id + '">' + value.district + '</option>');
    
    });
    },
    });
    }else{
    alert('danger');
    }
    });
    });
    $(document).ready(function(){
    $('select[name="district_id"]').on('change',function(){
    var district_id = $(this).val();
    if(district_id){

       
    $.ajaxSetup({
    headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
    });
    $.ajax({
    type:"GET",
    dataType:"json",
    url:"/get_area/"+district_id,
    success:function(data){

        $('#sheeping_charge').html(data.sheeping + '  taka');

         $('#total').html(data.total + '  taka');

        $('#sheeping').val(data.sheeping);


     $('#area_id').html('<option value="">Select Area</option>');
    $.each(data.district, function(key, value){

    $('select[name="area_id"]').append('<option value ="'+ value.id + '">' + value.area + '</option>');
    
    });
    },
    });
    }else{
    alert('danger');
    }
    });
    });
    </script>
    
    @endsection