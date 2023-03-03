@extends('admin.admin_layout')
@section('adminMain')
<!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
  <nav class="breadcrumb sl-breadcrumb">
    <a class="breadcrumb-item" href="index.html">Starlight</a>
    <a class="breadcrumb-item" href="index.html">Tables</a>
    <span class="breadcrumb-item active">Data Table</span>
  </nav>
  <div class="sl-pagebody">
  <div class="card pd-20 pd-sm-40">
    <h6 class="card-body-title">Brand List
    <a href="#" class="btn btn-success btn-sm " style="float: right" data-toggle="modal"
    data-target="#modaldemo3">Add New+</a>
    </h6>
    
    <div class="table-wrapper">
      <table id="datatable1" class="table display responsive nowrap text-center">
        <thead>
          <tr>
            <th class="wd-15p">Serial</th>
            <th class="wd-15p">brand name</th>
            <th class="wd-15p">brand image</th>
            <th class="wd-20p">Action</th>
          </tr>
        </thead>
        <tbody>
          
          
          
        </tbody>
      </table>
      </div><!-- table-wrapper -->
      </div><!-- card -->
      </div><!-- sl-pagebody -->
      </div><!-- sl-mainpanel -->
      <!-- ########## END: MAIN PANEL ########## -->
      {{-- start modal here  --}}
      <!-- LARGE MODAL -->
      <div id="modaldemo3" class="modal fade">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content tx-size-sm">
            <div class="modal-header pd-x-20">
              <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Message Preview</h6>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form id="fromvalidation" method="post" action="" enctype="multipart/form-data">
              @csrf
              <div class="modal-body pd-20">
                <div class="form-group">
                  <label for="exampleInputEmail1">brand Name</label>
                  <input name="brand_name" type="text" class="form-control" id="brand_name"
                  aria-describedby="emailHelp" placeholder="Enter brand Name"
                  class="@error('brand_name') is-invalid @enderror">
                  @error('category_name')
                  <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                </div>
                
                
                <div class="form-group">
                  <label for="exampleInputEmail1">brand photo</label>
                  <input name="brand_photo" type="file" class="form-control" id="brand_photo"
                  aria-describedby="emailHelp" placeholder="Enter brand Name"
                  class="@error('brand_photo') is-invalid @enderror">
                  @error('brand_photo')
                  <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                </div>
                </div><!-- modal-body -->
                <div class="modal-footer">
                  <button type="submit" class="btn btn-info pd-x-20">Add brand</button>
                  <button type="button" class="btn btn-secondary pd-x-20" data-dismiss="modal">Close</button>
                </div>
              </form>
            </div>
            </div><!-- modal-dialog -->
            </div><!-- modal -->
            {{-- end modal here  --}}
            <!-- LARGE MODAL for edit -->
            <div id="modaldemo4" class="modal fade">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content tx-size-sm">
                  <div class="modal-header pd-x-20">
                    <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Message Preview</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <form id="formdata2" method="post" action="" enctype="multipart/form-data">
                    @csrf
                    
                    <input type="hidden" id="dataid" name="id" value="">
                    <div class="modal-body pd-20">
                      <div class="form-group">
                        <label for="exampleInputEmail1">brand Name</label>
                        <input name="brand_name" type="text" class="form-control" id="brand_name1"
                        aria-describedby="emailHelp" placeholder="Enter brand Name"
                        class="@error('brand_name') is-invalid @enderror">
                        <input name="id" type="hidden"  id="brandupid">
                        @error('brand_name')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                      </div>
                      
                      <div class="form-group">
                        <label for="exampleInputEmail1">New brand photo</label>
                        <input name="brand_photo" type="file" class="form-control" id="brand_photo1"
                        aria-describedby="emailHelp" placeholder="Enter brand photo"
                        class="@error('brand_photo') is-invalid @enderror">
                        @error('brand_name')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                      </div>
                      </div><!-- modal-body -->
                      <div class="modal-footer">
                        <button type="submit" class="btn btn-info pd-x-20">Update</button>
                        <button type="button" class="btn btn-secondary pd-x-20" data-dismiss="modal">Close</button>
                      </div>
                    </form>
                  </div>
                  </div><!-- modal-dialog -->
                  </div><!-- modal -->
                  {{-- end modal here  --}}
                  <!-- modal for delete -->
                  <div class="modal fade" id="deletemodal1" tabindex="1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h3 class="modal-title" id="exampleModalLongTitle">Confirm?</h3>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <form method="post" action="{{url('/brand/delete/')}}">
                            @csrf
                            @method('DELETE')
                            <h5> Are You Sure You Want to Delete this ?</h5>
                            <input type="hidden" name="brand_id" id="data_id">
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-danger">Yes I want to delete</button>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
    


                  <!-- script for form validation -->
                  <script>
                  $(document).ready(function(){
                  $("#fromvalidation").validate({
                  rules: {


                  brand_name: {
                  required: true,
                  minlength: 2
                  },




                  brand_photo: {
                  required: true,
                  extension:"jpeg|jpg|png|gif"
                  
                  }
                  },
                  messages: {
                  brand_name:{
                    required:"brand name field is required",
                    minlength:"Atlas 2 charecter required"
                },
                  brand_photo:{
                    required:"brand photo field is required",
                    extension:"Only jpeg,jpg,png,git formate allowed"
                  }
                }
                  })
                })
                  </script>



                  <!-- SCRIPT FOR fetch data -->
                  <script>
                  function allbranddata(){
                  $.ajax({
                  type:'GET',
                  datatype:'json',
                  url:"/brand",
                  success:function(response){
                 let rows="";
                  $.each(response, function(key ,value){
                      console.log(value)
                  rows+=`
                  <tr>
                    <td>${key+1}</td>
                    <td>${value.brand_name}</td>
                    <td>
                      
                      <img src="{{'/images/${value.brand_photo}'}}" width="100">
                    </td>
                    
                    <td>
                      <form method="post" action="">
                        @csrf
                        @method('DELETE')
                        <a src="" class="btn btn-success btn-sm " data-id=${value.id})" id="edit" data-id="">edit</a>
                        <a src="" class="btn btn-warning btn-sm " onclick="viewdata(${value.id})" id="edit" data-id="">view</a>
                        <button type="button" onclick="deletedata(${value.id})" class="btn btn-danger btn-sm ">delete</button>
                        
                      </form>
                    </td>
                  </tr>
                  `
                  })
                  $('tbody').html(rows)
                  }
                  })
                  }
                  allbranddata();
                  </script>


                  <!-- SCRIPT FOR ADD DATA -->
                  <script>
                  $(document).ready(function(){
                  $('body').on('submit','#fromvalidation', function(e){
                  e.preventDefault();
                  let formdata= new FormData($('#fromvalidation')[0]);
                  $.ajaxSetup({
                  headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                  }
                  });
                  $.ajax({
                  type:"POST",
                  url:"/brand",
                  data:formdata,
                  contentType: false,
                  processData: false,
                  success:function(response){
                  allbranddata();
                  $('#modaldemo3').modal('hide')
                  $('#brand_name').val('')
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
                  title: 'data added  successfully'
                  })
                  
                  }
                  })
                  })
                  })
                  </script>



                  <!-- scipt for edit data -->
                  <script>
                  $(document).ready(function(){
                  $('body').on('click',"#edit",function(){
                  let id = $(this).data('id')
                  $.get(`/brand/${id}/edit`,function(data){
                  $("#brandupid").val(id)
                  $("#brand_name1").val(data.brand_name)
                  $("#modaldemo4").modal('show')
                  })
                  })
                  })
                  </script>
                  <script type="text/javascript">
                  
                  </script>
                  <script>
                  $(document).ready(function(){
                  $('body').on('submit','#formdata2', function(e){
                  e.preventDefault();
                  let formdata= new FormData($('#formdata2')[0]);
                  $.ajaxSetup({
                  headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                  }
                  });
                  $.ajax({
                  type:"POST",
                  url:"/brand/updated",
                  data:formdata,
                  contentType: false,
                  processData: false,
                  success:function(response){
                  console.log(response)
                  allbranddata();
                  $('#modaldemo4').modal('hide')
                  $('#brand_name1').val('')
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
                  title: 'Data updated succesfully'
                  })
                  
                  }
                  })
                  })
                  })
                  </script>

                  <!-- script for delete data -->
                  <script>
                  function deletedata(id){
                  $.ajaxSetup({
                  headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                  }
                  });
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
                  $.ajax({
                  type:'DELETE',
                  datatype:'json',
                  url:"/brand/"+id,
                  success:function(response){
                  
                  console.log(response)
                  swalWithBootstrapButtons.fire(
                  'deleted!',
                  'brand data deleted successfully.',
                  'success'
                  ).then((result)=>{
                  allbranddata();
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