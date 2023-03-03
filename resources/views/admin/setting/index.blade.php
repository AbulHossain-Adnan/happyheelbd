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
                            <th class="wd-15p">Id</th>
                            <th class="wd-15p">vat</th>
                            <th class="wd-15p">shipping_charge</th>
                            <th class="wd-15p">shopname</th>
                            <th class="wd-15p">email</th>
                            <th class="wd-15p">phone</th>
                            <th class="wd-15p">address</th>
                            <th class="wd-15p">logo</th>
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
            <form id="formdata" method="post" action="" enctype="multipart/form-data">
                @csrf
                <div class="modal-body pd-20">

                    <div class="form-group">
                        <label for="exampleInputEmail1">vat</label>
                        <input name="vat" type="text" class="form-control" id="vat"
                            aria-describedby="emailHelp" placeholder="Enter Division Name"
                            class="@error('category_name') is-invalid @enderror">
                        @error('vat')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                     <div class="form-group">
                        <label for="exampleInputEmail1">shipping_charge</label>
                        <input name="shipping_charge" type="text" class="form-control" id="shiping_charge"
                            aria-describedby="emailHelp" placeholder="Enter Division Name"
                            class="@error('category_name') is-invalid @enderror">
                        @error('vat')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div> <div class="form-group">
                        <label for="exampleInputEmail1">shopname</label>
                        <input name="shopname" type="text" class="form-control" id="shopname"
                            aria-describedby="emailHelp" placeholder="Enter shopname Name"
                            class="@error('category_name') is-invalid @enderror">
                        @error('vat')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div> <div class="form-group">
                        <label for="exampleInputEmail1">email</label>
                        <input name="email" type="email" class="form-control" id="email"
                            aria-describedby="emailHelp" placeholder="Enter Division Name"
                            class="@error('category_name') is-invalid @enderror">
                        @error('vat')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div> <div class="form-group">
                        <label for="exampleInputEmail1">phone</label>
                        <input name="phone" type="text" class="form-control" id="phone"
                            aria-describedby="emailHelp" placeholder="Enter Division Name"
                            class="@error('category_name') is-invalid @enderror">
                        @error('vat')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div> <div class="form-group">
                        <label for="exampleInputEmail1">address</label>
                        <input name="address" type="text" class="form-control" id="address"
                            aria-describedby="emailHelp" placeholder="Enter address Name"
                            class="@error('category_name') is-invalid @enderror">
                        @error('vat')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">logo</label>
                        <input name="logo" type="file" class="form-control" id="file"
                            aria-describedby="emailHelp" placeholder="Enter Division Name"
                            class="@error('category_name') is-invalid @enderror">
                        @error('vat')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>



                </div><!-- modal-body -->
                <div class="modal-footer">
                    <button type="submit" class="btn btn-info pd-x-20">submit form</button>
                    <button type="button" class="btn btn-secondary pd-x-20" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div><!-- modal-dialog -->
</div><!-- modal -->
{{-- end modal here  --}}

<!-- LARGE MODAL for edit -->
<!-- LARGE MODAL -->
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
                <div class="modal-body pd-20">

                    <div class="form-group">
                        <label for="exampleInputEmail1">vat</label>
                        <input name="vat" type="text" class="form-control" id="vat12"
                            aria-describedby="emailHelp" placeholder="Enter Division Name"
                            class="@error('category_name') is-invalid @enderror">
                        @error('vat')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                     <div class="form-group">
                        <label for="exampleInputEmail1">shipping_charge</label>
                        <input name="shipping_charge" type="text" class="form-control" id="shipping_charge1"
                            aria-describedby="emailHelp" placeholder="Enter Division Name"
                            class="@error('category_name') is-invalid @enderror">
                        @error('vat')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div> <div class="form-group">
                        <label for="exampleInputEmail1">shopname</label>
                        <input name="shopname" type="text" class="form-control" id="shopname1"
                            aria-describedby="emailHelp" placeholder="Enter shopname Name"
                            class="@error('category_name') is-invalid @enderror">
                             <input type="hidden" id="settingid" name="id">
                        @error('vat')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div> <div class="form-group">
                        <label for="exampleInputEmail1">email</label>
                        <input name="email" type="email" class="form-control" id="email1"
                            aria-describedby="emailHelp" placeholder="Enter Division Name"
                            class="@error('category_name') is-invalid @enderror">
                           
                        @error('vat')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div> <div class="form-group">
                        <label for="exampleInputEmail1">phone</label>
                        <input name="phone" type="text" class="form-control" id="phone1"
                            aria-describedby="emailHelp" placeholder="Enter Division Name"
                            class="@error('category_name') is-invalid @enderror">
                        @error('vat')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div> <div class="form-group">
                        <label for="exampleInputEmail1">address</label>
                        <input name="address" type="text" class="form-control" id="address1"
                            aria-describedby="emailHelp" placeholder="Enter address Name"
                            class="@error('category_name') is-invalid @enderror">
                        @error('vat')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror





                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">logo</label>
                        <input name="logo" type="file" class="form-control" id="logo1"
                            aria-describedby="emailHelp" placeholder="Enter Division Name"
                            class="@error('category_name') is-invalid @enderror">
                        @error('vat')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>



                </div><!-- modal-body -->
                <div class="modal-footer">
                    <button type="submit" class="btn btn-info pd-x-20">submit form</button>
                    <button type="button" class="btn btn-secondary pd-x-20" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div><!-- modal-dialog -->
</div><!-- modal -->
{{-- end modal here  --}}



<!-- script for form validateion -->
<script>
  $('document').ready(function(){
     $("#formdata").validate({
        rules: {
            vat: {
                required: true,
                minlength: 1,
               
                digits:true
           
            },
             shipping_charge: {
                required: true,
                minlength: 1,
                maxlength: 3,
                digits:true,
               
            },
            shopname: {
                required: true,
                minlength: 2,
                
               
            },
            email: {
                required: true,
                email: true
               
               
            },
            phone: {
                required: true,
                minlength: 11,
                maxlength: 11,
                digits:true

               
            },
            address: {
                required: true,
                minlength: 4,
                lettersonly:true,
               
            },
             logo: {
                required: true,
                
                extension:true,
               
            }
       
        
        },
        messages: {
            vat:{
                required:"vat name field is required",
                minlength:"At last 1 digit required"
               
            },
            shipping_charge:{
                required:"shipping charge  field is required",
                minlength:"At last 1 digit required",
                maxlength:"max length 3 allowed"
            },
                 
               email:{
                required:"email  field is required",
                email:" please enter valid email"
              },
              phone:{
                required:"phone  field is required",
                minlength:" 11 digits number required",
                maxlength:" max 11 digits number allowed",

              },
               shopname:{
                required:"shopname  field is required",
                minlength:"At last 2 charecter  required",
        
              },
               address:{
                required:"address  field is required",
                minlength:"At last 4 charecter  required",
        
              },
               logo:{
                required:"logo  field is required",
                extension:"png,svg,pdg logo formate allowed"
        
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
            let formdata= new FormData($('#formdata')[0]);
            $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
            $.ajax({
                type:"POST",
                url:"/setting",
                data:formdata,
                contentType: false,
                processData: false,
                success:function(response){

                    $('#modaldemo3').modal('hide')
                    settingalldata()
                    $('#vat').val('')
                    $('#shiping_charge').val('')
                    $('#shopname').val('')
                    $('#email').val('')
                    $('#phone').val('')
                    $('#address').val('')
                    $('#file').val('')

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




<!-- script for fethch data -->
<script>
    function settingalldata(){
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type:"GET",
            datatype:'json',
            url:"/setting/create",
            success:function(response){
                rows=""
                $.each(response, function(key, value){
                    rows+=` 
                     <tr>
                            <td>${value.id}</td>
                            <td>
                            <img src="{{asset('images/${value.logo}')}}" width="100" alt="">

                            </td>

                            <td>${value.shipping_charge}</td>
                            <td>${value.shopname}</td>
                            <td>${value.email}</td>
                            <td>${value.phone}</td>
                            <td>${value.address}</td>
                            <td>
                            ${value.vat}
                            </td>
                            <td>
                            <button class="btn btn-warning btn-sm" type="button" id="editdata" data-id="${value.id}">edit</button>
                            <button class="btn btn-danger btn-sm" type="button" onclick="deletedata(${value.id})">delete</button>

                            </td>
                            </tr> 

                    `
                })
                $('tbody').html(rows)
            }
        })

    }
    settingalldata()
</script>


<!-- script for edit data -->

<script>
    $(document).ready(function(){
        $('body').on('click','#editdata',function(){
            let id = $(this).data('id');
           $.ajax({
            type:"GET",
            datatype:'json',
            url:"/setting/"+id+"/edit",
            success:function(response){
                $('#modaldemo4').modal('show')
                $('#settingid').val(response.id)
                $('#vat12').val(response.vat)
                $('#shipping_charge1').val(response.shipping_charge)
                $('#shopname1').val(response.shopname)
                $('#email1').val(response.email)
                $('#phone1').val(response.phone)
                $('#address1').val(response.address)
                $('#logo1').val(response.logo)         
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
            let formdata2= new FormData($('#formdata2')[0]);
            $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
            $.ajax({
                type:"POST",
                url:"/setting/updated",
                data:formdata2,
                contentType: false,
                processData: false,
                success:function(response){
                    $('#modaldemo4').modal('hide')
                    settingalldata()
                $('#settingid').val('')
                $('#vat12').val('')
                $('#shipping_charge1').val('')
                $('#shopname1').val('')
                $('#email1').val('')
                $('#phone1').val('')
                $('#address1').val('')
                $('#logo1').val('')

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
                                url:"/setting/"+id,
                                success:function(response){
                                   
                                    console.log(response)
                                     swalWithBootstrapButtons.fire(
                              'Deleted!',
                              'Your file has been deleted.',
                              'success'
                            ).then((result)=>{
                               settingalldata(); 
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