@extends('admin.admin_layout')
@section('adminMain')
<!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">Starlight</a>
        <a class="breadcrumb-item" href="index.html">Tables</a>
        <span class="breadcrumb-item active">Data Table</span>
    </nav>
    <div class="card pd-20 pd-sm-40">
        <h6 class="card-body-title">Category List
        <a href="#" class="btn btn-warning btn-sm " style="float: right" data-toggle="modal"
        data-target="#modaldemo3">Add New</a>
        </h6>
        
        <div class="table-wrapper">
            <table id="datatable1" class="table display responsive nowrap text-center">
                <thead>
                    <tr>
                        <th class="wd-15p">Serial</th>
                        <th class="wd-15p">Coupon</th>
                        <th class="wd-15p">Discount</th>
                        <th class="wd-15p">coupon start</th>
                        <th class="wd-15p">coupon end</th>
                        <th class="wd-15p">status</th>
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
                        <form id="formdata" method="post">
                            @csrf
                            <div class="modal-body pd-20">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Couponh Name</label>
                                    <input name="coupon_name" type="text" id="coupon_name" class="form-control" id=""
                                    aria-describedby="emailHelp" placeholder="Enter Category Name"
                                    class="@error('coupon_name') is-invalid @enderror">
                                    @error('coupon_name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Coupon Discount</label>
                                    <input id="coupon_discount" name="coupon_discount" type="text" class="form-control" id=""
                                    aria-describedby="emailHelp" placeholder="Enter Category Name"
                                    class="@error('coupon_discount') is-invalid @enderror">
                                    @error('coupon_discount')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Coupon start</label>
                                    <input id="coupon_start" name="coupon_start" type="date"  class="form-control" id="coupon_start"
                                    aria-describedby="emailHelp" placeholder="Enter Category Name"
                                    class="@error('coupon_discount') is-invalid @enderror">
                                    @error('coupon_discount')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Coupon end</label>
                                    <input id="coupon_end" name="coupon_end" type="date" class="form-control" id="coupon_end"
                                    aria-describedby="emailHelp" placeholder="Enter Category Name"
                                    class="@error('coupon_discount') is-invalid @enderror">
                                    @error('coupon_discount')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                
                                </div><!-- modal-body -->
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-info pd-x-20">Add Coupon</button>
                                    <button type="button" class="btn btn-secondary pd-x-20" data-dismiss="modal">Close</button>
                                </div>
                            </form>
                        </div>
                        </div><!-- modal-dialog -->
                        </div><!-- modal -->
                        {{-- end modal here  --}} --> --> -->
                        <!-- LARGE MODAL for edit -->
                        <div id="editmodal" class="modal fade">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content tx-size-sm">
                                    <div class="modal-header pd-x-20">
                                        <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Message Preview</h6>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form id="formdata2" method="post">
                                        @csrf
                                        <div class="modal-body pd-20">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Couponh Name</label>
                                                <input name="coupon_name" type="text" id="coupon_name1" class="form-control" id=""
                                                aria-describedby="emailHelp" placeholder="Enter Category Name"
                                                class="@error('coupon_name') is-invalid @enderror">
                                                <input name="couponid" type="hidden" id="coupid">
                                                @error('coupon_name')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Coupon Discount</label>
                                                <input id="coupon_discount1" name="coupon_discount" type="text" class="form-control" id=""
                                                aria-describedby="emailHelp" placeholder="Enter Category Name"
                                                class="@error('coupon_discount') is-invalid @enderror">
                                                @error('coupon_discount')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Coupon start</label>
                                                <input id="coupon_start1" name="coupon_start" type="date"  class="form-control" id="coupon_start"
                                                aria-describedby="emailHelp" placeholder="Enter Category Name"
                                                class="@error('coupon_discount') is-invalid @enderror">
                                                @error('coupon_discount')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Coupon end</label>
                                                <input id="coupon_end1" name="coupon_end" type="date" class="form-control" id="coupon_end"
                                                aria-describedby="emailHelp" placeholder="Enter Category Name"
                                                class="@error('coupon_discount') is-invalid @enderror">
                                                @error('coupon_discount')
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
                                                    <form method="post" action="{{url('/coupon/delete/')}}">
                                                        @csrf
                                                        @method('DELETE')
                                                        <h5> Are You Sure You Want to Delete this ?</h5>
                                                        <input type="hidden" name="coupon_id" id="data_id">
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-danger">Yes I want to delete</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- script for data added validation -->
                                    <script>
                                    $('document').ready(function(){
                                    $("#formdata").validate({
                                    rules: {
                                    coupon_name: {
                                    required: true,
                                    minlength:2
                                    
                                    },
                                    coupon_discount: {
                                    required: true,
                                    digits: true,
                                    maxlength: 2,
                                    minlength: 1
                                    },
                                    coupon_start: {
                                    required: true,
                                    },
                                    coupon_end: {
                                    required: true,
                                    },
                                    },
                                    messages: {
                                    coupon_name:{
                                        required:"coupon name field is not valid",
                                        minlength:"Atlast 2 charecter required"
                                    },
                                    coupon_discount:{
                                        required:"coupon discount field is not valid",
                                         maxlength:"Max 2 digits allowed",
                                        minlength:"Atlast 1 charecter required"
                                    },
                                    coupon_start:"coupon start field is not valid",
                                    coupon_end:"coupon end field is not valid",
                                    
                                    }
                                    });
                                    })
                                    </script>
                                    <!-- script for data edit validation -->
                                    <script>
                                    $('document').ready(function(){
                                    $("#formdata").validate({
                                    rules: {
                                    coupon_name: {
                                    noSpace: true,
                                    required: true,
                                    
                                    },
                                    coupon_discount: {
                                    required: true,
                                    digits: true,
                                    maxlength: 2,
                                    minlength: 1
                                    },
                                    coupon_start: {
                                    required: true,
                                    },
                                    coupon_end: {
                                    required: true,
                                    },
                                    },
                                    messages: {
                                    coupon_name:"coupon name field is not valid",
                                    coupon_discount:"coupon discount field is not valid",
                                    coupon_start:"coupon start field is not valid",
                                    coupon_end:"coupon end field is not valid",
                                    
                                    }
                                    });
                                    })
                                    </script>
                                    <script>
                                    $(document).ready(function(){
                                    $('body').on('click',"#edit",function(){
                                    let id = $(this).data('id')
                                    $.get(`/coupon/edit/`+id,function(data){
                                    $("#dataid").val(id)
                                    $("#coupon_name").val(data.coupon)
                                    $("#coupon_discount").val(data.discount)
                                    $("#editmodal").modal('show')
                                    })
                                    })
                                    })
                                    </script>
                                    <script type="text/javascript">
                                    $('document').ready(function(){
                                    $('body').on('click','#coupondelete', function(){
                                    let coupon_id = $(this).val();
                                    $('#deletemodal1').modal('show')
                                    $('#data_id').val(coupon_id)
                                    })
                                    })
                                    </script>
                                    <!-- scrip for add data -->
                                    <script>
                                    $(document).ready(function(){
                                    $('body').on('submit','#formdata',function(e){
                                    e.preventDefault();
                                    let formdata = new FormData($('#formdata')[0]);
                                    $.ajaxSetup({
                                    headers: {
                                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                    }
                                    });
                                    $.ajax({
                                    type:'POST',
                                    data:formdata,
                                    url:"/coupon",
                                    contentType: false,
                                    processData: false,
                                    success:function(response){
                                    couponalldata();
                                    console.log(response)
                                    $('#coupon_name').val('')
                                    $('#coupon_discount').val('')
                                    $('#coupon_start').val('')
                                    $('#coupon_end').val('')
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
                                    <!-- script for all data -->
                                    <script>
                                    function couponalldata(){
                                    $.ajax({
                                    type:"GET",
                                    datatype:'json',
                                    url:"/coupon",
                                    success:function(response){
                                    rows=""
                                    $.each(response, function(key,value){
                                    rows+=`
                                    <tr>
                                        <td>${value.id}</td>
                                        <td>${value.coupon}</td>
                                        <td>${value.discount}%</td>
                                        <td>${value.coupon_started}</td>
                                        <td>${value.coupon_end}</td>
                                        <td>
                                            
                                            
                                            <span class="badge badge-pill badge-success">Valid</span>
                                            
                                        </td>
                                        <td>
                                            <form method="post" action="">
                                                @csrf
                                                
                                                <a src="" type="button" class="btn btn-warning btn-sm "onclick="editdata(${value.id})">edit</a>
                                                
                                                <button type="button" onclick="deletecoupon(${value.id})" value="" class="btn btn-danger btn-sm ">delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                    `
                                    });
                                    $('tbody').html(rows)
                                    }
                                    })
                                    }
                                    couponalldata();
                                    </script>
                                    <script>
                                    function editdata(id){
                                    $.ajax({
                                    type:'GET',
                                    datatype:'json',
                                    url:"/coupon/"+id+"/edit",
                                    success:function(response){
                                    console.log(response)
                                    
                                    $('#coupid').val(response.id)
                                    $('#coupon_name1').val(response.coupon)
                                    $('#coupon_discount1').val(response.discount)
                                    $('#coupon_start1').val(response.coupon_started)
                                    $('#coupon_end1').val(response.coupon_end)
                                    $('#editmodal').modal('show')
                                    
                                    
                                    }
                                    })
                                    }
                                    </script>
                                    <!-- script for update -->
                                    <script>
                                    $(document).ready(function(){
                                    $('body').on('click','#updatebtn',function(){
                                    let id=$('#coupid').val();
                                    let coupon=$('#coupon_name1').val();
                                    let discount=$('#coupon_discount1').val();
                                    let coupon_start=$('#coupon_start1').val();
                                    let coupon_end=$('#coupon_end1').val();
                                    $.ajaxSetup({
                                    headers: {
                                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                    }
                                    });
                                    $.ajax({
                                    type:'PUT',
                                    datatype:'json',
                                    data:{id:id,coupon:coupon,discount:discount,coupon_start:coupon_start,coupon_end:coupon_end},
                                    url:"/coupon/"+id,
                                    
                                    success:function(response){
                                    couponalldata();
                                    console.log(response)
                                    $('#coupon_name').val('')
                                    $('#coupon_discount').val('')
                                    $('#coupon_start').val('')
                                    $('#coupon_end').val('')
                                    $('#editmodal').modal('hide')
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
                                    <script>
                                    function deletecoupon(id){
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
                                    url:"/coupon/"+id,
                                    success:function(response){
                                    
                                    swalWithBootstrapButtons.fire(
                                    'Deleted!',
                                    'Your file has been deleted.',
                                    'success'
                                    ).then((result)=>{
                                    couponalldata();
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