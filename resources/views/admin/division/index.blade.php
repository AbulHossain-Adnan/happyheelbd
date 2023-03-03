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
    <a  type="button" class="btn btn-warning btn-sm " style="float: right" data-toggle="modal"
    data-target="#modaldemo3">Add New</a>
    </h6>
    
    <div class="table-wrapper">
      <table id="datatable1" class="table display responsive nowrap text-center">
        <thead>
          <tr>
            <th class="wd-15p">Id</th>
            <th class="wd-15p">Division</th>
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
            <form method="post" action="" id="formdata">
              @csrf
              <div class="modal-body pd-20">
                <div class="form-group">
                  <label for="exampleInputEmail1">Division Name</label>
                  <input name="division" type="text" class="form-control" id="division1"
                  aria-describedby="emailHelp" placeholder="Enter Division Name"
                  class="@error('division_name') is-invalid @enderror">
                  
                </div>
                </div><!-- modal-body -->
                <div class="modal-footer">
                  <button type="submit" id="adddivision" class="btn btn-info pd-x-20">Add Division</button>
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
                  <form method="post" action="{{ url('division/updated') }}">
                    @csrf
                    
                    <input type="hidden" id="dataid" name="id" value="">
                    <div class="modal-body pd-20">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Division Name</label>
                        <input name="division_name" type="text" class="form-control" id="divname"
                        aria-describedby="emailHelp" placeholder="Enter Category Name"
                        class="@error('division_name') is-invalid @enderror">
                        <input name="id" type="hidden" class="form-control" id="divid">
                        @error('category_name')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                      </div>
                      </div><!-- modal-body -->
                      <div class="modal-footer">
                        <button type="button" id="updatebtn" class="btn btn-info pd-x-20">Update</button>
                        <button type="button" class="btn btn-secondary pd-x-20" data-dismiss="modal">Close</button>
                      </div>
                    </form>
                  </div>
                  </div><!-- modal-dialog -->
                  </div><!-- modal -->
                  {{-- end modal here  --}}
                  <!-- modal form validation -->
                  <script>
                  $(document).ready(function(){
                  $("#formdata").validate({
                  rules: {
                  division: {
                  required: true,
                  minlength:4,
                  lettersonly:true
                  
                  }
                  },
                  messages: {
                  division:{
                  required:"division name field is required",
                  minlength:"Atlast 4 charecter required"
                  
                  }
                  
                  }
                  });
                  })
                  </script>

                  <!-- script for fetch data -->
                  <script>
                  function divisionalldata(){
                  $.ajax({
                  type:"GET",
                  datatype:'json',
                  url:"/division/create",
                  success:function(response){
                  rows=""
                  $.each(response, function(key,value){
                  rows+=`
                  <tr>
                    <td>${value.id}</td>
                    <td>${value.division}</td>
                    <td>
                      <form method="post" action="">
                        @csrf
                        
                        <a src="" type="button" id="editdata" data-id="${value.id}" class="btn btn-warning btn-sm "  id="edit" data-id="">edit</a>
                        
                        <button type="button" value="" onclick="deletedata(${value.id})"  class="btn btn-danger btn-sm ">delete</button>
                        
                      </form>
                    </td>
                  </tr>
                  
                  `
                  })
                  $('tbody').html(rows)
                  }
                  })
                  }
                  divisionalldata();
                  </script>
                  
                <!-- script for store data -->
                  <script>
                  $(document).ready(function(){
                  $('body').on('submit','#formdata', function(e){
                  e.preventDefault();
                  let formdata= new FormData($('#formdata')[0]);
                  $.ajax({
                  type:"POST",
                  url:"/division",
                  data:formdata,
                  contentType: false,
                  processData: false,
                  success:function(response){
                  divisionalldata();
                  $('#division1').val('')
                  $('#modaldemo3').modal('hide')
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
                  <!-- script for edit -->
                  <script>
                  $(document).ready(function(){
                  $('body').on('click','#editdata', function(){
                  let id =$(this).data('id');
                  $.ajax({
                  type:"GET",
                  datatype:"json",
                  url:"division/"+id+"/edit",
                  success:function(response){
                  $('#divname').val(response.division)
                  $('#divid').val(response.id)
                  $('#modaldemo4').modal('show')
                  }
                  })
                  })
                  })
                  </script>
                  <!-- script for update -->
                  <script>
                  $(document).ready(function(){
                  $('body').on('click','#updatebtn', function(){
                  let division=$('#divname').val();
                  let id =$('#divid').val();
                  $.ajaxSetup({
                  headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                  }
                  });
                  $.ajax({
                  type:"PUT",
                  datatype:'json',
                  url:"/division/"+id,
                  data:{division:division},
                  success:function(response){
                  divisionalldata();
                  $('#divname').val('')
                  $('#modaldemo4').modal('hide')
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
                  title: 'Data update succesflly'
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
                  url:"/division/"+id,
                  success:function(response){
                  
                  swalWithBootstrapButtons.fire(
                  'Deleted!',
                  'Your file has been deleted.',
                  'success'
                  ).then((result)=>{
                  divisionalldata();
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