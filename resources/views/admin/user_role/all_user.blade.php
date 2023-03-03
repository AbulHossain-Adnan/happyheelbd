@extends('admin.admin_layout')
@section('adminMain')
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
      <a class="breadcrumb-item" href="index.html">Starlight</a>
      <a class="breadcrumb-item" href="index.html">Tables</a>
      <span class="breadcrumb-item active">Data Table</span>
    </nav>

    <div class="sl-pagebody">
      <div class="sl-page-title">
      </div><!-- sl-page-title -->
      <div class="card pd-20 pd-sm-40">
        <div class="table-wrapper">
          <button class="btn btn-success" style="float: right;" data-toggle="modal" data-target=".bd-example-modal-lg" type="button">Add New User</button>
          <table id="datatable1" class="table display responsive nowrap">
            <thead>
              <tr>
              
                <th class="wd-15p">Name</th>
                <th class="wd-10p">Email</th>
                <th class="wd-25p">Access</th>
                <th class="wd-25p">Action</th>
              </tr>
            </thead>
            <tbody>
    
            </tbody>
          </table>
        </div><!-- table-wrapper -->
      </div><!-- card -->

      <!-- Large modal -->



<!-- modal for added data -->
<div class="modal fade bd-example-modal-lg" id="addmodal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
 <a class="btn btn-primary" href="#" class="nav-link">Create New User</a>
        <div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title">User Create</h6>
         
        <form id="formdata" action="" method="post">
        @csrf
          <div class="form-layout">
            <div class="row mg-b-25">
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Name: <span class="tx-danger">*</span></label>
                  @error('name')
                  <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    
                  <input class="form-control" type="text" id="name" name="name"  placeholder="Enter user name">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Phone: <span class="tx-danger">*</span></label>
                  @error('phone')
                  <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  <input class="form-control" type="text" id="phone" name="phone"  placeholder="Enter user phone number">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Email<span class="tx-danger">*</span></label>
                  @error('Product_quantity')
                  <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  <input class="form-control" id="email" type="email" name="email" placeholder="Enter user email">
                </div>
              </div><!-- col-4 -->
             
             
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Password<span class="tx-danger">*</span></label>
                  @error('password')
                  <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  <input class="form-control" id="password" type="password" name="password" placeholder="Enter password">
                </div>
              </div><!-- col-4 -->
              <br> <br>
            </div><!-- row -->
            <br> <br> <br>
            <hr>
            <br>
                   <br>
            <div class="row">
            <div id="test12" class="col-lg-4">
            <label class="ckbox">
              <input type="checkbox" id="product" name="product" value="1">
              <span>Product</span>
            </label>
            </div><!-- col-4 -->



            <div class="col-lg-4">
            <label class="ckbox">
              <input type="checkbox" id="category" name="category" value="1">
              <span>Category</span>
            </label>
            </div><!-- col-4 -->


            <div class="col-lg-4">
            <label class="ckbox">
              <input type="checkbox" id="coupon" name="coupon" value="1">
              <span>Coupon</span>
            </label>
            </div><!-- col-4 -->


            <div class="col-lg-4">
            <label class="ckbox">
              <input type="checkbox" id="division" name="division" value="1">
              <span>Division</span>
            </label>
            </div><!-- col-4 -->

            <div class="col-lg-4">
            <label class="ckbox">
              <input type="checkbox" id="orders" name="orders" value="1">
              <span>Orders</span>
            </label>
            </div><!-- col-4 -->



             <div class="col-lg-4">
            <label class="ckbox">
              <input type="checkbox" id="seo" name="seo" value="1">
              <span>Seo</span>
            </label>
            </div><!-- col-4 -->

            <div class="col-lg-4">
            <label class="ckbox">
              <input type="checkbox" id="report" name="report" value="1">
              <span>Report</span>
            </label>
            </div><!-- col-4 -->
              <div class="col-lg-4">
            <label class="ckbox">
              <input type="checkbox" id="return_order" name="return_order" value="1">
              <span>Return Order</span>
            </label>
            </div><!-- col-4 -->
              <div class="col-lg-4">
            <label class="ckbox">
              <input type="checkbox" id="contact_msg" name="contact_msg" value="1">
              <span>Contact message</span>
            </label>
            </div><!-- col-4 --> 

             <div class="col-lg-4">
            <label class="ckbox">
              <input type="checkbox" id="product_comment" name="product_comment" value="1">
              <span>Product Comment</span>
            </label>
            </div><!-- col-4 --> 

             <div class="col-lg-4">
            <label class="ckbox">
              <input type="checkbox" id="site_setting" name="site_setting" value="1">
              <span>Site Seting</span>
            </label>
            </div><!-- col-4 -->

             <div class="col-lg-4">
            <label class="ckbox">
              <input type="checkbox" id="post" name="post" value="1">
              <span>Post</span>
            </label>
            </div><!-- col-4 -->
              <div class="col-lg-4">
            <label class="ckbox">
              <input type="checkbox" id="stock" name="stock" value="1">
              <span>Stock</span>
            </label>
            </div><!-- col-4 -->
            </div><!-- row -->
            <br>
            <br>

            <div class="form-layout-footer">
              <button type="submit" id="addbtn" class="btn btn-info mg-r-5">Submit Form</button>
              <button type="button" class="btn btn-secondary pd-x-20" data-dismiss="modal">Close</button>
            </div><!-- form-layout-footer -->
          </div><!-- form-layout -->
        </div><!-- card -->
        </form>
       
    </div>
  </div>
</div>


<!-- Modal for Edit -->
<div class="modal fade bd-example-modal-lg" id="edit_modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
     <a class="btn btn-primary" href="#" class="nav-link">Create New User</a>
        <div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title">User Create</h6>
        <form id="formdata2" action="{{ route('user_role.store') }}" method="post">
        @csrf
          <div class="form-layout">
            <div class="row mg-b-25">
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Name: <span class="tx-danger">*</span></label>
                  @error('name')
                  <div class="alert alert-danger">{{ $message }}</div>
                    @enderror 
                  <input class="form-control" type="text" id="name1" name="name"  placeholder="Enter user name">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Phone: <span class="tx-danger">*</span></label>
                  @error('phone')
                  <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  <input class="form-control" type="text" id="phone1" name="phone"  placeholder="Enter user phone number">
                  <input type="hidden" id="userid" name="userid">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Email<span class="tx-danger">*</span></label>
                  @error('Product_quantity')
                  <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  <input class="form-control" id="email1" type="email" name="email" placeholder="Enter user email">
                </div>
              </div><!-- col-4 -->
      
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Password<span class="tx-danger">*</span></label>
                  @error('password')
                  <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  <input class="form-control" id="password1" type="password" name="password" placeholder="Enter password">
                  <input id="product3" type="hidden" name="product">
                  <input id="division3" type="hidden" name="division">
                  <input id="category3" type="hidden" name="category">
                  <input id="coupon3" type="hidden" name="coupon">
                  <input id="seo3" type="hidden" name="seo">
                  <input id="site_setting3" type="hidden" name="site_setting">
                  <input id="product_comment3" type="hidden" name="product_comment">
                  <input id="orders3" type="hidden" name="orders">
                  <input id="contact_message3" type="hidden" name="contact_message">
                  <input id="return_order3" type="hidden" name="return_order">
                  <input id="post3" type="hidden" name="post">
                  <input id="stock3" type="hidden" name="stock">
                  <input id="orders3" type="hidden" name="orders">

                 

                </div>
              </div><!-- col-4 -->
              <br> <br>
            </div><!-- row -->
            <br> <br> <br>
            <br>
            <br>
            <br>
            <div class="row">
            <div class="col-lg-4">
            <label id="product2" class="ckbox">
              <input type="checkbox" id="product1" name="product" checked="product" value="1">
              <span>Product</span>
            </label>
            </div><!-- col-4 -->
            <div class="col-lg-4">
            <label id="category2"  class="ckbox">
              <input type="checkbox" id="category1" name="category" value="1">
              <span>Category</span>
            </label>
            </div><!-- col-4 -->
            <div class="col-lg-4">
            <label id="coupon2" class="ckbox">
              <input type="checkbox" id="coupon1" name="coupon" value="1">
              <span>Coupon</span>
            </label>
            </div><!-- col-4 -->
            <div  class="col-lg-4">
            <label id="division2" class="ckbox">
              <input type="checkbox" id="division1" name="division" value="1">
              <span>Division</span>
            </label>
            </div><!-- col-4 -->
            <div class="col-lg-4">
            <label id="orders2" class="ckbox">
              <input type="checkbox" id="orders1" name="orders" value="1">
              <span>Orders</span>
            </label>
            </div><!-- col-4 -->
             <div class="col-lg-4">
            <label id="seo2" class="ckbox">
              <input type="checkbox" id="seo1" name="seo" value="1">
              <span>Seo</span>
            </label>
            </div><!-- col-4 -->
            <div class="col-lg-4">
            <label id="report2" class="ckbox">
              <input type="checkbox" id="report1" name="report" value="1">
              <span>Report</span>
            </label>
            </div><!-- col-4 -->
              <div class="col-lg-4">
            <label id="return_order2" class="ckbox">
              <input type="checkbox" id="return_order1" name="return_order" value="1">
              <span>Return Order</span>
            </label>
            </div><!-- col-4 -->
              <div class="col-lg-4">
            <label id="contact_msg2" class="ckbox">
              <input type="checkbox" id="contact_msg1" name="contact_msg" value="1">
              <span>Contact message</span>
            </label>
            </div><!-- col-4 --> 
             <div class="col-lg-4">
            <label id="product_comment2" class="ckbox">
              <input type="checkbox" id="product_comment1" name="product_comment" value="1">
              <span>Product Comment</span>
            </label>
            </div><!-- col-4 --> 
             <div class="col-lg-4">
            <label id="site_setting2" class="ckbox">
              <input type="checkbox" id="site_setting1" name="site_setting" value="1">
              <span>Site Seting</span>
            </label>
            </div><!-- col-4 -->
             <div class="col-lg-4">
            <label id="post2" class="ckbox">
              <input type="checkbox" id="post1" name="post" value="1">
              <span>Post</span>
            </label>
            </div><!-- col-4 -->
              <div class="col-lg-4">
            <label id="stock2" class="ckbox">
              <input type="checkbox" id="stock1" name="stock" value="1">
              <span>Stock</span>
            </label>
            </div><!-- col-4 -->
            </div><!-- row -->
            <br>
            <br>
            <div class="form-layout-footer">
              <button type="submit" id="updatebtn" class="btn btn-info mg-r-5">Update</button>
              <button type="button" class="btn btn-secondary pd-x-20" data-dismiss="modal">Close</button>
            </div><!-- form-layout-footer -->
          </div><!-- form-layout -->
        </div><!-- card -->
        </form>
    </div>
  </div>
</div>
    </div>
  </div>
</div>


<!-- script for form validate -->

<script>
  $('document').ready(function(){
     $("#formdata").validate({
        rules: {
            name: {
                required: true,
                minlength: 2,
                lettersonly:true,
               
            },
            phone:{

              required: true,
              minlength: 11,
              digits:true

            },
             email:{
              required: true,
              email:true

            },
            password:"required",
                 
        
        },
        messages: {
            name:{
                required:"name  field is required",
                minlength:"At last 2 charecter required"
              },
              phone:{
                required:"phone  field is required",
                minlength:" 11 digits number required"
              },
               email:{
                required:"email  field is required",
                email:" please enter valid email"
              }
           
            
        }
    });
  })
</script>


<!-- script for add data -->
<script>
  $(document).ready(function(){
    $('body').on('submit','#formdata',function(e){
      e.preventDefault();
      let formdata=new FormData($('#formdata')[0]);
             $.ajaxSetup({
            headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
            });
      $.ajax({
        type:"POST",
        url:"/user_role",
        data:formdata,
        contentType: false,
        processData: false,
        success:function(data){
           $('#addmodal').modal('hide')
                  useralldata();
         
                $('#name').val('')
                $('#phone').val('')
                $('#email').val('')
                $('#password').val('')
                 $("#product").prop("checked", false);
                 $("#orders").prop("checked", false);
                 $("#category").prop("checked", false);
                 $("#coupon").prop("checked", false);
                 $("#division").prop("checked", false);
                 $("#seo").prop("checked", false);
                 $("#report").prop("checked", false);
                 $("#return_order").prop("checked", false);
                 $("#contact_msg").prop("checked", false);
                 $("#product_comment").prop("checked", false);
                 $("#site_setting").prop("checked", false);
                 $("#post").prop("checked", false);
                 $("#stock").prop("checked", false);
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

          Toast.fire({
            icon: 'success',
            title: 'Data added succesflly'
          })
         

        }

      })
    })
  })
</script>


<!-- scrip for fatch data -->
<script>
    function useralldata(){

        $.ajax({
            type:"GET",
            datatype:'json',
            url:"/user_role/create",
            success:function(response){
                rows=""
                $.each(response, function(key,value){
                    rows+=` 
                         <tr>
               <td>${value.name}</td>
               <td>${value.email}</td>
               <td> 
               ${value.product == 1
                ?` <span class="badge badge-danger">product</span>`
                :``
               }
               ${value.post == 1
                ?` <span class="badge badge-danger">product</span>`
                :``
               }
               ${value.category == 1
                ?` <span class="badge badge-info">category</span>`
                :``
               }

                ${value.coupon == 1
                ?` <span class="badge badge-warning">coupon</span>`
                :``
               }
               ${value.stock == 1
                ?` <span class="badge badge-info">Stock</span>`
                :``
               }
                ${value.division == 1
                ?` <span class="badge badge-primary">division</span>`
                :``
               }
                ${value.orders == 1
                ?` <span class="badge badge-success">orders</span>`
                :``
               }
                ${value.seo == 1
                ?` <span class="badge badge-info">seo</span>`
                :``
               }<br>
                
                 ${value.reports == 1
                ?` <span class="badge badge-danger">reports</span>`
                :``
               }
                ${value.site_setting == 1
                ?` <span class="badge badge-success">site_setting</span>`
                :``
               }
                ${value.return_order == 1
                ?` <span class="badge badge-danger">return_order</span>`
                :``
               }
                ${value.contact_message == 1
                ?` <span class="badge badge-info">contact_message</span>`
                :``
               }
                ${value.product_comment == 1
                ?` <span class="badge badge-danger">product_comment</span>`
                :``
               }
                
               </td>
             
                <td>
                  <form method="post" action="">
                    @csrf
                    @method("DELETE")
                  
                   
                
                  <a type="button" class="btn btn-primary btn-sm" id="editdata" data-id="${value.id}"><i class="fa fa-edit"></i></a>
                
                 <button type="button" class="btn btn-danger btn-sm" onclick="deletedata(${value.id})"><i class="fa fa-trash"></i></button>
                 
                </form>
                </td>
             
                
              </tr>
                 
                    `
                })
                $('tbody').html(rows)
            }
        })

    }

    useralldata();
</script>





<!-- script for edit data -->
<script>
  $(document).ready(function(){
    $('body').on('click','#editdata', function(){
      let id= $(this).data('id');

      $.ajax({
        type:"GET",
        datatype:"json",
        url:"/user_role/"+id+"/edit",
        success:function(data){
          $('#edit_modal').modal('show')
                $('#userid').val(data.id)

                $('#name1').val(data.name)
                $('#phone1').val(data.phone)
                $('#email1').val(data.email)
                $('#password1').val(data.password)
                $('#product1').val(data.product)
                $('#division1').val(data.division)
                $('#division2').html(`
                  ${data.division == 1 
                    ?`   <input type="checkbox" checked="division" id="division1" name="division" value="1">
                      <span>Division</span>`
                    :`  <input type="checkbox" id="division1" name="division" value="1">
                    <span>Division</span>`

                  }

                  `)
                 $('#product2').html(`
                  ${data.product == 1 
                    ?`   <input type="checkbox" checked="product" id="product1" name="product" value="1">
                      <span>Product</span>`
                    :`  <input type="checkbox"  id="product1" name="product" value="1">
                    <span>Product</span>`

                  }

                  `)
                   $('#category2').html(`
                  ${data.category == 1 
                    ?`   <input type="checkbox" checked="category" id="category1" name="category" value="1">
                      <span>Category</span>`
                    :`  <input type="checkbox"  id="category1" name="category" value="1">
                    <span>Category</span>`

                  }

                  `)
                     $('#coupon2').html(`
                  ${data.coupon == 1 
                    ?`   <input type="checkbox" checked="coupon" id="coupon1" name="coupon" value="1">
                      <span>Coupon</span>`
                    :`  <input type="checkbox"  id="coupon1" name="coupon" value="1">
                    <span>Coupon</span>`

                  }

                  `)
                     $('#return_order2').html(`
                  ${data.return_order == 1 
                    ?`   <input type="checkbox" checked="return_order" id="return_order1" name="return_order" value="1">
                      <span>return_order</span>`
                    :`  <input type="checkbox"  id="return_order" name="return_order" value="1">
                    <span>return_order</span>`

                  }

                  `)
                     $('#orders2').html(`
                  ${data.orders == 1 
                    ?`   <input type="checkbox" checked="orders" id="orders1" name="orders" value="1">
                      <span>Orders</span>`
                    :`  <input type="checkbox"  id="orders1" name="orders" value="1">
                    <span>Orders</span>`

                  }

                  `)
                     $('#seo2').html(`
                  ${data.seo == 1 
                    ?`   <input type="checkbox" checked="seo" id="seo1" name="seo" value="1">
                      <span>Seo</span>`
                    :`  <input type="checkbox"  id="seo1" name="seo" value="1">
                    <span>Seo</span>`

                  }

                  `)
                     $('#report2').html(`
                  ${data.reports == 1 
                    ?`   <input type="checkbox" checked="reports" id="reports1" name="reports" value="1">
                      <span>Reports</span>`
                    :`  <input type="checkbox" id="reports1" name="reports" value="1">
                    <span>Reports</span>`

                  }

                  `)
                     $('#site_setting2').html(`
                  ${data.site_setting == 1 
                    ?`   <input type="checkbox" checked="site_setting" id="site_setting1" name="site_setting" value="1">
                      <span>Site Setting</span>`
                    :`  <input type="checkbox"  id="site_setting1" name="site_setting" value="1">
                    <span>Site Setting</span>`

                  }

                  `)
                     $('#product_comment2').html(`
                  ${data.product_comment == 1 
                    ?`   <input type="checkbox" checked="product_comment" id="product_comment1" name="product_comment" value="1">
                      <span>product comment2</span>`
                    :`  <input type="checkbox" id="product_comment1" name="product_comment" value="1">
                    <span>product_comment2</span>`

                  }

                  `)
                     $('#post2').html(`
                  ${data.post == 1 
                    ?`   <input type="checkbox" checked="post" id="post1" name="post" value="1">
                      <span>post</span>`
                    :`  <input type="checkbox"  id="post1" name="post" value="1">
                    <span>post</span>`

                  }

                  `)
                     $('#stock2').html(`
                  ${data.stock == 1 
                    ?`   <input type="checkbox" checked="stock" id="stock1" name="stock" value="1">
                      <span>Stock</span>`
                    :`  <input type="checkbox"  id="stock1" name="stock" value="1">
                    <span>Stock</span>`

                  }

                  `)
                     $('#contact_msg2').html(`
                  ${data.contact_message == 1 
                    ?`   <input type="checkbox" checked="contact_message" id="contact_message1" name="contact_messagc" value="1">
                      <span>contact_message</span>`
                    :`  <input type="checkbox"  id="contact_message1" name="contact_message" value="1">
                    <span>contact_message</span>`

                  }

                  `)
                       $('#product3').val(data.product)
                        $('#category3').val(data.category)
                        $('#site_setting3').val(data.site_setting)
                        $('#stock3').val(data.stock)
                        $('#seo3').val(data.seo)
                        $('#division3').val(data.division)
                        $('#orders3').val(data.orders)
                        $('#return_order3').val(data.return_order)
                        $('#reports3').val(data.reports)
                        $('#post3').val(data.post)
                        $('#contact_message3').val(data.contact_message)
                        $('#product_comment3').val(data.product_comment)
                        $('#coupon3').val(data.coupon)
                      

        }
      })

    })
  })
</script>















<!-- script for update -->
<script>
  $(document).ready(function(){
    $('body').on('submit','#formdata2',function(e){
      e.preventDefault();
      let formdata=new FormData($('#formdata2')[0]);
             $.ajaxSetup({
            headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
            });
      $.ajax({
        type:"POST",
        url:"/user_roll/updated",
        data:formdata,
        contentType: false,
        processData: false,
        success:function(data){
          console.log(data)
         $('#edit_modal').modal('hide')
          
                  useralldata();
         
                $('#name').val('')
                $('#phone').val('')
                $('#email').val('')
                $('#password').val('')
                 $("#product").prop("checked", false);
                 $("#orders").prop("checked", false);
                 $("#category").prop("checked", false);
                 $("#coupon").prop("checked", false);
                 $("#division").prop("checked", false);
                 $("#seo").prop("checked", false);
                 $("#report").prop("checked", false);
                 $("#return_order").prop("checked", false);
                 $("#contact_msg").prop("checked", false);
                 $("#product_comment").prop("checked", false);
                 $("#site_setting").prop("checked", false);
                 $("#post").prop("checked", false);
                 $("#stock").prop("checked", false);
                                        $('#product3').val('')
                        $('#category3').val('')
                        $('#site_setting3').val('')
                        $('#stock3').val('')
                        $('#seo3').val('')
                        $('#division3').val('')
                        $('#orders3').val('')
                        $('#return_order3').val('')
                        $('#reports3').val('')
                        $('#post3').val('')
                        $('#contact_message3').val('')
                        $('#product_comment3').val()
                        $('#coupon3').val('')
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

          Toast.fire({
            icon: 'success',
            title: 'Data updated succesflly'
          })
         

        }

      })
    })
  })
</script>



<!-- script for delete -->
<script>
    function deletedata(id){

const swalWithBootstrapButtons = Swal.mixin({
  customClass: {
    confirmButton: 'btn btn-success',
    cancelButton: 'btn btn-danger'
  },
  buttonsStyling: false
})

swalWithBootstrapButtons.fire({
  title: 'Are you sure?',
  text: "You won't be able to revert this!",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonText: 'Yes, delete it!',
  cancelButtonText: 'No, cancel!',
  reverseButtons: true
}).then((result) => {
  if (result.isConfirmed) {

 $.ajaxSetup({
            headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        $.ajax({
            type:"DELETE",
            datatype:"json",
            url:"/user_role/"+id,
            success:function(response){
               
                    swalWithBootstrapButtons.fire(
      'Deleted!',
      'Your file has been deleted.',
      'success'
    ).then((result)=>{
         useralldata();
    })

            }
        })

  } else if (
    /* Read more about handling dismissals below */
    result.dismiss === Swal.DismissReason.cancel
  ) {
    swalWithBootstrapButtons.fire(
      'Cancelled',
      'Your imaginary file is safe :)',
      'error'
    )
  }
})
   
    }
</script>
@endsection