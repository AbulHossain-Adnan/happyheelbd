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
    <a href="#" class="btn btn-warning btn-sm " style="float: right" data-toggle="modal"
    data-target="#modaldemo3">Add New</a>
    </h6>
    
    <div class="table-wrapper">
      <table id="datatable1" class="table display responsive nowrap text-center">
        <thead>
          <tr>
            <th class="wd-15p">Id</th>
            
            <th class="wd-15p">area</th>
            <th class="wd-20p">Action</th>
          </tr>
        </thead>
        <tbody>
          
          @foreach($areas as $item)
          <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->area}}</td>
            <td>
              <form method="post" action="">
                @csrf
                @method('DELETE')
                <a src="" class="btn btn-warning btn-sm "  id="edit" data-id="{{$item->id}}">edit</a>
                
                <button type="button" value="{{$item->id}}" id="areadelete" class="btn btn-danger btn-sm ">delete</button>
                
              </form>
            </td>
          </tr>
          @endforeach
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
                  <label for="exampleInputEmail1">Area Name</label>
                  <input name="area" type="text" class="form-control" id="area__nameid"
                  aria-describedby="emailHelp" placeholder="Enter Area Name"
                  class="@error('area_name') is-invalid @enderror">
                  @error('area_name')
                  <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                </div>
                <div class="form-group">
                  <span class="text-danger" id="id_error"></span>
                  <select class="form-control select2" data-placeholder="Choose country" id="district_id4" name="district_id">
                    <option label="Choose district"></option>
                    @foreach ($districts as $item)
                    
                    <option id="district_id" value="{{$item->id}}">{{$item->district}}</option>
                    @error('district_id')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    @endforeach
                    
                    
                  </select>
                </div>
                </div><!-- modal-body -->
                <div class="modal-footer">
                  <button type="submit" id="addarea" class="btn btn-info pd-x-20">Add Area</button>
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
                  <form method="post" action="">
                    @csrf
                    
                    <input type="hidden" id="dataid" name="id" value="">
                    <div class="modal-body pd-20">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Area Name</label>
                        <input name="area_name" type="text" class="form-control" id="area_name2"
                        aria-describedby="emailHelp" placeholder="Enter area Name"
                        class="@error('area_name') is-invalid @enderror">
                        <input name="id" id="arid" type="hidden"
                        >
                        @error('area_name')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                      </div>
                      <div class="form-group">
                        <span class="text-danger" id="id_error"></span>
                        <select class="form-control select2" data-placeholder="Choose country" id="district_id12" name="district_id">
                          <option label="Choose district"></option>
                          @foreach ($districts as $item)
                          
                          <option id="district_id12" value="{{$item->id}}">{{$item->district}}</option>
                          @error('district_id')
                          <div class="alert alert-danger">{{ $message }}</div>
                          @enderror
                          @endforeach
                          
                        </select>
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







                 <!--script for add data -->
                    <script>
                  $(document).ready(function(){
                  $('body').on('submit','#formdata', function(e){
                  e.preventDefault();
                  let formdata= new FormData($('#formdata')[0]);
                  $.ajaxSetup({
                  headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                  }
                  });
                  $.ajax({
                  type:"POST",
                  url:"/area",
                  data:formdata,
                  contentType:false,
                  processData:false,
                  success:function(response){
                    console.log(response)
                 
                  $('#modaldemo3').modal('hide')
                   areaalldata()
                   $('#area__nameid').val('')
                   $('#district_id4').val('')
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



                  <!-- script for form validation -->
<script>
  $('document').ready(function(){
     $("#formdata").validate({
        rules: {
            area: {
                required: true,
                minlength: 4,
                lettersonly:true,
               
            },
                  district_id:"required",
        
        },
        messages: {
            area:{
                required:"area name field is required",
                minlength:"At last 4 charecter required"}
           
            
        }
    });
  })
</script>
                  <!-- scrip for  data -->
                  <!-- scrip for fatch data -->
                  <script>
                  function areaalldata(){
                  $.ajax({
                  type:"GET",
                  datatype:'json',
                  url:"/area/create",
                  success:function(response){
                  rows=""
                  $.each(response, function(key,value){
                  rows+=`
                  <tr>
                    <td>${value.id}</td>
                    <td>${value.area}</td>
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
                  areaalldata();
                  </script>
 



                  <!-- script for edit -->
                  <script>
                  $(document).ready(function(){
                  $('body').on('click','#editdata', function(){
                  let id =$(this).data('id');
                  $.ajax({
                  type:"GET",
                  datatype:"json",
                  url:"/area/"+id+"/edit",
                  success:function(response){
                  $('#area_name2').val(response.area)
                  $('#district_id12').val(response.district_id)
                  $('#arid').val(response.id)
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
                  let area=$('#area_name2').val();
                  let district_id=$('#district_id12').val();
                  let id=$('#arid').val();
                  $.ajaxSetup({
                  headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                  }
                  });
                  $.ajax({
                  type:"PUT",
                  datatype:'json',
                  url:"/area/"+id,
                  data:{area:area,district_id:district_id},
                  success:function(response){
                      console.log(response)
                  areaalldata();
                  $('#area_name2').val('')
                  $('#district_id12').val('')
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
                  url:"/area/"+id,
                  success:function(response){
                  
                  swalWithBootstrapButtons.fire(
                  'deleted!',
                  'data deleted successfully.',
                  'success'
                  ).then((result)=>{
                  areaalldata();
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