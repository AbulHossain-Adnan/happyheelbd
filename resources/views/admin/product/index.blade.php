@extends('admin.admin_layout')
@section('adminMain')
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
      <a class="breadcrumb-item" href="index.html">Starlight</a>
      <a class="breadcrumb-item" href="index.html">Tables</a>
      <span class="breadcrumb-item active">Data Table</span>
    </nav>

    <div class="sl-pagebody">
     

      <div class="card pd-20 pd-sm-40">
       
        
        <div class="table-wrapper">
          <a class="btn btn-success" style="float: right" href="{{ route('products.create') }}" class="nav-link">Add product+</a>
          <table id="datatable" class="table display responsive nowrap table-responsive table-bordered">
            <thead>
              <tr>
                <th class="wd-10p">image</th>
                <th class="wd-15p">Product code</th>
                <th class="wd-15p">Product name</th>
               <!--  <th class="wd-15p">Category</th>
                <th class="wd-10p">Brand</th> -->
                <th class="wd-25p">Quantity</th>
                <!-- <th class="wd-25p">status</th> -->
                <th class="wd-25p">Action</th>
              </tr>
            </thead>
            <tbody>
              
             
            </tbody>
          </table>
        </div><!-- table-wrapper -->
      </div><!-- card -->
      
     
<!-- start datatable script  -->
<script type="text/javascript">

$(function () {

  var oTable = $('#datatable').DataTable({

      // processing: false,
     "order": [[ 0, "desc" ]],

      serverSide: true,

      ajax: "{{ route('products.index') }}",

      columns: [

        {data: 'image_one', name: 'image_one'},
          {data: 'product_code', name: 'product_code'},
          {data: 'product_name', name: 'product_name'},
          {data: 'product_quantity', name: 'product_quantity'},
          // {data: 'category_name', name: 'category_name'},
          // {data: 'brand_name', name: 'brand_name'},
          {data: 'action', name: 'action', orderable: false, searchable: false},

      ]

  });
});
</script>

<!-- end datatable script  -->



<!-- script for delete -->
<script>
  function deletedata(id){
   
    console.log(id);
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
      url:"/products/"+id,
      success:function(){
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


<script>
 $(document).ready(function(){
  $('body').on('click','#down',function(){
    let id=$(this).data('id');
    $.ajax({
      type:'GET',
      datatype:'json',
      url:"/product/status/updated/"+id,
      success:function(response){
       $('#datatable').DataTable().ajax.reload();
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
            title: 'Status updated succesfully'
          })
      }
    })
  })
 })
</script>

@endsection()