@extends('layouts.shopwisemaster')
@section('content')
<!-- START SECTION BREADCRUMB -->
<div class="breadcrumb_section bg_gray page-title-mini">
    <div class="container"><!-- STRART CONTAINER -->
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="page-title">
                    <h1>Contact</h1>
                </div>
            </div>
            <div class="col-md-6">
                <ol class="breadcrumb justify-content-md-end">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active">Contact</li>
                </ol>
            </div>
        </div>
    </div><!-- END CONTAINER-->
</div>
<!-- END SECTION BREADCRUMB -->

<!-- START MAIN CONTENT -->
<div class="main_content">

<!-- START SECTION CONTACT -->
<div class="section pb_70">
    <div class="container">
        <div class="row">
            <div class="col-xl-4 col-md-6">
                <div class="contact_wrap contact_style3">
                    <div class="contact_icon">
                        <i class="linearicons-map2"></i>
                    </div>
                    <div class="contact_text">
                        <span>Address</span>
                       <p>Kamrangirchar Purbo Rasulpur, Rony Market, 3 number goli, <br>1211 Dhaka, Bangladesh</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="contact_wrap contact_style3">
                    <div class="contact_icon">
                        <i class="linearicons-envelope-open"></i>
                    </div>
                    <div class="contact_text">
                        <span>Email Address</span>
                        <a href="mailto:info@sitename.com">happyheels2020@gmail.com</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="contact_wrap contact_style3">
                    <div class="contact_icon">
                        <i class="linearicons-tablet2"></i>
                    </div>
                    <div class="contact_text">
                        <span>Phone</span>
                        <p>01771915770</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END SECTION CONTACT -->

<!-- START SECTION CONTACT -->
<div class="section pt-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="heading_s1">
                    <h2>Get In touch</h2>
                </div>
                <p class="leads">Contact us for any queries</p>
                <div class="field_form">
                    <form method="post" name="enq">
                        <div class="row">
                            <div class="form-group col-md-6 mb-3">
                                <input required placeholder="Enter Name *" id="name" class="form-control" name="name" type="text">
                             </div>
                            <div class="form-group col-md-6 mb-3">
                                <input required placeholder="Enter Email *" id="email" class="form-control" name="email" type="email">
                            </div>
                            <div class="form-group col-md-12 mb-3">
                                <input required placeholder="Enter Phone No. *" id="phone" class="form-control" name="phone">
                            </div>
                            {{-- <div class="form-group col-md-6 mb-3">
                                <input placeholder="Enter Subject" id="subject" class="form-control" name="subject">
                            </div> --}}
                            <div class="form-group col-md-12 mb-3">
                                <textarea required placeholder="Message *" id="message" class="form-control" name="message" rows="4"></textarea>
                            </div>
                            <div class="col-md-12 mb-3">
                                <button type="button" title="Submit Your Message!" class="btn btn-fill-out" onclick="sendMessage()">Send Message</button>
                            </div>
                            <div class="col-md-12 mb-3">
                                <div id="alert-msg" class="alert-msg text-center"></div>
                            </div>
                        </div>
                    </form>     
                </div>
            </div>
        </div>
    </div>
</div>
</div>


<script type="text/javascript">

function sendMessage(){
   
var name = $('#name').val();
var email = $('#email').val();
var phone = $('#phone').val();
var message = $('#message').val();

	$.ajax({
		type:"POST",
		datatype:"json",
		data:{name:name,email:email,phone:phone,message:message},
		url:"/send/message/",
		success:function(data){
			var name = $('#name').val("");
			var email = $('#email').val("");
			var phone = $('#phone').val("");
			var message = $('#message').val("");
				
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
		
		
	});
}


</script>






@endsection