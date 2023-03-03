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
    <h6 class="card-body-title">Category List
    <a href="#" class="btn btn-success btn-sm " style="float: right" data-toggle="modal"
    data-target="#modaldemo3">Add New</a>
    
    </h6>
    
    <div class="table-wrapper">
      <table id="datatable1" class="table display responsive nowrap text-center example">
        <thead>
          <tr>
            <th class="wd-15p">Serial</th>
            <th class="wd-15p">Category Name</th>
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
            <form method="post" action="" id="newModalForm">
              @csrf
              <div class="modal-body pd-20">
                <div class="form-group">
                  <label for="exampleInputEmail1">Category Name</label>
                  <input name="category_name" type="text" class="form-control" id="category_name"
                  aria-describedby="emailHelp" placeholder="Enter Category Name"
                  class="@error('category_name') is-invalid @enderror">
                  @error('category_name')
                  <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                </div>
                </div><!-- modal-body -->
                <div class="modal-footer">
                  <button type="submit" class="btn btn-info pd-x-20">Add Category</button>
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
                  <form method="post" action="" id="formdata2">
                    @csrf
                    <input type="hidden" id="dataid" name="id" value="">
                    <div class="modal-body pd-20">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Category Name</label>
                        <input name="category_name1" type="text" class="form-control" id="category_name1"
                        aria-describedby="emailHelp" placeholder="Enter Category Name"
                        class="@error('category_name') is-invalid @enderror">
                        @error('category_name')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                      </div>
                      </div><!-- modal-body -->
                      <div class="modal-footer">
                        <button type="button" id="updatebtn" class="btn btn-info pd-x-20">Update</button>
                        <button type="submit" class="btn btn-secondary pd-x-20" data-dismiss="modal">Close</button>
                      </div>
                    </form>
                  </div>
                  </div><!-- modal-dialog -->
                  </div><!-- modal -->
                  {{-- end modal here  --}}



                 
 <!-- script for fatch data -->
                  <script>
                  function allcategorydata(){
                  $.ajax({
                  type:'GET',
                  datatype:'json',
                  url:"/admin/category",
                  success:function(response){
                  let rows=""
                  $.each(response, function(key, value){
                  rows+=`
                  <tr>
                    <td>${value.id}</td>
                    <td>${value.category_name}</td>
                    <td>
                      <form method="post" action="">
                        @csrf
                        
                        <a src="" class="btn btn-warning btn-sm"  id="edit" onclick="editdata(${value.id})" data-idd="${value.id}">edit/view</a>
                        
                        <button type="button" value="${value.id}" class="btn btn-danger btn-sm" onclick="deletedata(${value.id})"data-id="${value.id}" id="deletetest">delete</button>
                        
                      </form>
                    </td>
                  </tr>
                  `
                  })
                  $('tbody').html(rows)
                  }
                  })
                  }
                  allcategorydata();
                  
                  </script>
                  <!-- script for add data -->
                  <script>
                  $(document).ready(function(){
                  $('body').on('submit','#newModalForm',function(e){
                  e.preventDefault();
                  let formdata= new FormData($('#newModalForm')[0]);
                  $.ajaxSetup({
                  headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                  }
                  });
                  $.ajax({
                  type:'POST',
                  url:"/admin/category",
                  data:formdata,
                  contentType: false,
                  processData: false,
                  success:function(response){
                    allcategorydata();
                 
                  $('#modaldemo3').modal('hide')
                  $('#category_name').val('')
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



                  <!-- modal add form validation -->
                  <script>
                  $(document).ready(function(){
                  $("#newModalForm").validate({
                  rules: {
                  category_name: {
                  required: true,
                   minlength: 2,

                  },
                  },
                  messages: {
                  category_name:{
                    required:"category name field is required",
                    minlength:jQuery.validator.format("At least {0} characters required!")
                }
                  
                  }
                  });
                  })
                  </script>



                   <!-- modal edit form validation -->
                  <script>
                  $(document).ready(function(){
                  $("#formdata2").validate({
                  rules: {
                  category_name1: {
                  required: true,
                   minlength: 2,

                  },
                  },
                  messages: {
                  category_name1:{
                    required:"category name field is required",
                    minlength:jQuery.validator.format("At least {0} characters required!")
                }
                  
                  }

                  });
                  })
                  </script>

                
                  <!-- script for eidit data -->
                  <script>
                  function editdata(id){

                  $.ajax({
                  type:'GET',
                  url:"/admin/category/"+id+"/edit",
                  datatype:"json",
                  success:function(response){
                  console.log(response)
                  $('#category_name1').val(response.category_name)
                  $('#dataid').val(response.id)
                  $('#modaldemo4').modal('show')
                  }
                  })
                  }
                  </script>


                  <!-- script for udate data -->
                  <script>
                  $(document).ready(function(){
                  $('body').on('click','#updatebtn',function(){
                  let id =$('#dataid').val();
                  let category_name =$('#category_name1').val();
                  
                  $.ajaxSetup({
                  headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                  }
                  });
                  $.ajax({
                  type:"PUT",
                  data:{category_name:category_name},
                  url:"/admin/category/"+id,
                  success:function(response){
                  allcategorydata();
                  $('#modaldemo4').modal('hide')
                  $('#category_name1').val('')
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
                  $(document).ready(function(){
                  $('body').on('click','#deletetest',function(){
                  let id = $(this).data('id');
                  
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
                  type:'DELETE',
                  datatype:'json',
                  url:"/admin/category/"+id,
                  success:function(response){
                   
                     allcategorydata();
                  swalWithBootstrapButtons.fire(
                  'Deleted!',
                  'category data deleted successfully.',
                  'success'
                  ).then((result)=>{
                  
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
                  })
                  })
                  </script>
                  @endsection
                 