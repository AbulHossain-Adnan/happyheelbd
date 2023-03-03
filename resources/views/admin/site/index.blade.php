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
        <!-- <h5>Site Settings</h5>
        <p>This is related to site setting</p> -->
      </div><!-- sl-page-title -->

      <div class="card pd-20 pd-sm-40">
        <h6 class="card-body-title">Site Settings</h6>
        <!-- <p class="mg-b-20 mg-sm-b-30">This is related to Site setting </p> -->
        
        <div class="table-wrapper">
          <a class="btn btn-success btn-sm" style="float: right" data-toggle="modal" data-target="#test" href="" class="nav-link">Add Site Setting+</a>
          <table id="datatable" class="table display responsive nowrap">

            <thead>
              <tr>
                <th class="wd-15p">Phone</th>
                <th class="wd-15p">Email</th>
                <th class="wd-20p">Address</th>
                <th class="wd-15p">Company Name</th>
                <th class="wd-10p">Facebook</th>
                <th class="wd-25p">Google</th>
                <th class="wd-25p">Action</th>

              </tr>
            </thead>
            <tbody>
              
    
            </tbody>
          </table>
        </div><!-- table-wrapper -->
      </div><!-- card -->



<!-- modal for add data -->
<div class="modal fade bd-example-modal-lg" id="test" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">


        <div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title">New product Add</h6>
          <p class="mg-b-20 mg-sm-b-30">New Product Add Form</p>
        <form id="formdata" action="" method="post">
        @csrf
          <div class="form-layout">
            <div class="row mg-b-25">
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Phone: <span class="tx-danger">*</span></label>
                  @error('Product_name')
                  <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    
                  <input class="form-control" type="text" name="phone" id="phone"  placeholder="Enter phone number">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Email <span class="tx-danger">*</span></label>
                  @error('Product_code')
                  <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  <input class="form-control" type="text" name="email" id="email" placeholder="Enter Email">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Address<span class="tx-danger">*</span></label>
                  @error('Product_quantity')
                  <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  <input class="form-control" type="text" name="address" id="address" placeholder="Enter address">
                </div>
              </div><!-- col-4 -->
             
              
             
            
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Company Name<span class="tx-danger">*</span></label>
                  @error('product_size')
                  <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  <input class="form-control" type="text" name="company_name"  id="company_name" data-role="tagsinput" placeholder="Enter company name">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Facebook Url<span class="tx-danger">*</span></label>
                  @error('Product_color')
                  <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  <input class="form-control" type="text" name="facebook" id="facebook" data-role="tagsinput" placeholder="Enter product color">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Google<span class="tx-danger">*</span></label>
                  @error('selling_price')
                  <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  <input class="form-control" type="text" name="google" id="google" placeholder="Enter product selling price">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">tweeter<span class="tx-danger">*</span></label>
                  @error('video_link')
                  <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  <input class="form-control" id="tweeter" name="tweeter" placeholder="video link">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Youtube<span class="tx-danger">*</span></label>
                  @error('discount_price')
                  <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  <input class="form-control" type="text" name="youtube" id="youtube" placeholder="Enter product discount price">
                </div>
              </div><!-- col-4 --><br><br>
            </div>
        </div>
         <div class="form-layout-footer">
              <button type="submit" class="btn btn-info mg-r-5">Submit Form</button>
              <button type="button" class="btn btn-secondary pd-x-20" data-dismiss="modal">Close</button>
            </div>
    </form>
</div>
    </div>
  </div>
</div>










<!-- modal for edit data -->
<div class="modal fade bd-example-modal-lg" id="test2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title">New product Add</h6>
          <p class="mg-b-20 mg-sm-b-30">New Product Add Form</p>
               <form id="formdata2" action="" method="post" >
        @csrf
          <div class="form-layout">
            <div class="row mg-b-25">
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Phone: <span class="tx-danger">*</span></label>
                  @error('Product_name')
                  <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    
                    <input type="hidden" id="siteid" name="id" >
                  <input class="form-control" type="text" name="phone" id="phone1"  placeholder="Enter phone number">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Email <span class="tx-danger">*</span></label>
                  @error('Product_code')
                  <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  <input class="form-control" type="text" name="email" id="email1" placeholder="Enter Email">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Address<span class="tx-danger">*</span></label>
                  @error('Product_quantity')
                  <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  <input class="form-control" type="text" name="address" id="address1" placeholder="Enter address">
                </div>
              </div><!-- col-4 -->
             
              
             
            
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Company Name<span class="tx-danger">*</span></label>
                  @error('product_size')
                  <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  <input class="form-control" type="text" name="company_name"  id="company_name1" data-role="tagsinput" placeholder="Enter company name">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Facebook Url<span class="tx-danger">*</span></label>
                  @error('Product_color')
                  <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  <input class="form-control" type="text" name="facebook" id="facebook1" data-role="tagsinput" placeholder="Enter product color">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Google<span class="tx-danger">*</span></label>
                  @error('selling_price')
                  <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  <input class="form-control" type="text" name="google" id="google1" placeholder="Enter product selling price">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">tweeter<span class="tx-danger">*</span></label>
                  @error('video_link')
                  <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  <input class="form-control" id="tweeter1" name="tweeter" placeholder="video link">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Youtube<span class="tx-danger">*</span></label>
                  @error('discount_price')
                  <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  <input class="form-control" type="text" name="youtube" id="youtube1" placeholder="Enter product discount price">
                </div>
              </div><!-- col-4 --><br><br>
            </div>
        </div>
         <div class="form-layout-footer">
              <button type="submit" class="btn btn-info mg-r-5">Update</button>
              <button type="button" class="btn btn-secondary pd-x-20" data-dismiss="modal">Close</button>
            </div>
    </form>
</div>
    </div>
  </div>
</div>






<!-- start datatable script  -->
<script type="text/javascript">

$(function () {

  var oTable = $('#datatable').DataTable({

      processing: true,

      serverSide: true,

      ajax: "{{ route('site.index') }}",

      columns: [

          {data: 'phone', name: 'phone'},
          {data: 'email', name: 'email'},
          {data: 'address', name: 'address'},
          {data: 'company_name', name: 'company_name'},
          {data: 'facebook', name: 'facebook'},
          {data: 'google', name: 'google'},
          {data: 'action', name: 'action', orderable: false, searchable: false},

      ]

  });
});
</script>

<!-- end datatable script  -->













<!--store  form validation -->
<script>
  $('document').ready(function(){
     $("#formdata").validate({
        rules: {
           phone: {
                required: true,
                minlength: 11,
                maxlength: 11,
                digits:true 
            },
            
            email: {
                required: true,
                email: true 
            },
           
            address: {
                required: true,
                minlength: 4,
                lettersonly:true,
               
            },
             company_name:"required",
             facebook: {
                required: true,
                url:true,
               
            },
            google: {
                required: true,
                url:true
               
            },
            tweeter: {
                required: true,
                url:true,
               
            },
             youtube: {
                required: true,
                url:true,
               
            }
     
        
        },
        messages: {
            
               email:{
                required:"email  field is required",
                email:" please enter valid email"
              },
              phone:{
                required:"phone  field is required",
                minlength:" 11 digits number required",
                maxlength:" max 11 digits number allowed",

              },
              
               address:{
                required:"address  field is required",
                minlength:"At last 4 charecter  required",
        
              }
        }
    });
  })
</script>



<!-- script for store data-->
<script>
          $(document).ready(function(){
            $('body').on('submit','#formdata',function(e){
              e.preventDefault();
              let formdata= new FormData($('#formdata')[0]);
              $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
          type:'POST',
          url:"/site",
          data:formdata,
          contentType: false,
          processData: false,
          success:function(response){
           $('#datatable').DataTable().ajax.reload();
            $('#test').modal('hide')
          $('#company_name').val('')
            $('#phone').val('')
            $('#email').val('')
            $('#address').val('')
            $('#facebook').val('')
            $('#google').val('')
            $('#tweeter').val('')
            $('#youtube').val('')
          

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
<!-- end store script  -->



<!-- start edit data  -->
<script>
  function editdata(id){

    $.ajax({
      type:'GET',
      url:"/site/"+id+"/edit",
      datatype:"json",
      success:function(response){
         $('#test2').modal('show')
        $('#siteid').val(response.id)
        $('#phone1').val(response.phone)
        $('#email1').val(response.email)
        $('#address1').val(response.address)
        $('#company_name1').val(response.company_name)
        $('#facebook1').val(response.facebook)
        $('#google1').val(response.google)
        $('#tweeter1').val(response.tweeter)
        $('#youtube1').val(response.youtube) 
      }
    })
  }
</script>

<!-- end edit data -->


<!-- start update data -->
  <script>
        $(document).ready(function(){
          $('body').on('submit','#formdata2',function(e){
            e.preventDefault();
            let formdata= new FormData($('#formdata2')[0]);
            $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });
        $.ajax({
          type:'POST',
          url:"/site/updated",
          data:formdata,
          contentType: false,
          processData: false,
          success:function(response){
            $('#datatable').DataTable().ajax.reload();
            $('#test2').modal('hide')
            $('#phone1').val('')
            $('#siteid').val('')
            $('#email1').val('')
            $('#company_name1').val('')
            $('#address1').val('')
            $('#facebook1').val('')
            $('#google1').val('')
            $('#tweeter1').val('')
            $('#youtube1').val('')
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
              url:"/site/"+id,
              success:function(response){
                
                swalWithBootstrapButtons.fire(
                'Deleted!',
                'Your file has been deleted.',
                'success'
                ).then((result)=>{
                    $('#datatable').DataTable().ajax.reload();
                })
              }
          })
  } else if (
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
<!-- end delete script  -->

@endsection
