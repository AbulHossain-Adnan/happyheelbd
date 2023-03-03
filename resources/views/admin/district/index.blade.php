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
                            <th class="wd-15p">District</th>
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
                        <label for="exampleInputEmail1">District Name</label>
                        <input name="district" type="text" class="form-control" id="district_nameid"
                            aria-describedby="emailHelp" placeholder="Enter District Name"
                            class="@error('category_name') is-invalid @enderror">
                        @error('division_name')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                      <div class="form-group">
                        <span class="text-danger" id="id_error"></span>
                        <select class="form-control select2" data-placeholder="Choose country" id="divisionid" name="division_id">
                    <option label="Choose division"></option>

                        @foreach ($divisions as $item)
                        
                    <option id="division_id" value="{{$item->id}}">{{$item->division}}</option>

                    @endforeach
                 
                  </select>
          </div>


                </div><!-- modal-body -->
                <div class="modal-footer">
                    <button type="submit" id="adddistrict" class="btn btn-info pd-x-20">Add District</button>
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
            <form method="post" action="{{ url('district/updated') }}">
                @csrf
               
                <input type="hidden" id="dataid" name="id" value="">
                <div class="modal-body pd-20">
                    <div class="form-group">
                        <label for="exampleInputEmail1">District Name</label>
                        <input name="district_name" type="text" class="form-control" id="district_name1"
                            aria-describedby="emailHelp" placeholder="Enter District Name"
                            class="@error('division_name') is-invalid @enderror">
                             <input name="disid" type="hidden"  id="disid">
                        @error('district_name')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                     <div class="form-group">
                        <span class="text-danger" id="id_error"></span>
                        <select class="form-control select2" data-placeholder="Choose country" id="division_id" name="division_id">
                    <option label="Choose division"></option>

                        @foreach ($divisions as $item)
                        
                    <option id="division_id" value="{{$item->id}}">{{$item->division}}</option>

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



<!-- modal for delete// -->

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
        <form method="post" action="{{url('/district/delete/')}}">
            @csrf
            @method('DELETE')
       <h5> Are You Sure You Want to Delete this ?</h5>
       <input type="hidden" name="district_id" id="district_id">
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
  $('document').ready(function(){
     $("#formdata").validate({
        rules: {
            district: {
                required: true,
                minlength: 4,
                lettersonly:true,
               
            },
                  division_id:"required",
        
        },
        messages: {
            district_name:{
                required:"district name field is required",
                minlength:"At last 4 charecter required"}
           
            
        }
    });
  })
</script>


<!-- scrip for fatch data -->
<script>
    function districtalldata(){

        $.ajax({
            type:"GET",
            datatype:'json',
            url:"/district/create",
            success:function(response){
                rows=""
                $.each(response, function(key,value){
                    rows+=` 
                         <tr>
                            <td>${value.id}</td>
                            <td>${value.district}</td>
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

    districtalldata();
</script>


<!-- scrip for store data -->

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
            url:"/district",
            data:formdata,
            contentType: false,
            processData:false,
            success:function(response){
                console.log(response)
                $('#modaldemo3').modal('hide') 
                
                districtalldata();
                $('#district_nameid').val('')
                $('#division_id').val('')

                
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
        url:"district/"+id+"/edit", 
        success:function(response){
            console.log(response)
            $('#district_name1').val(response.district)
            $('#division_id').val(response.division_id)
            $('#disid').val(response.id)
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
        let district=$('#district_name1').val();
        let division_id=$('#division_id').val();
        let id=$('#disid').val();
        $.ajaxSetup({
            headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        $.ajax({
            type:"PUT",
            datatype:'json',
            url:"/district/"+id,
            data:{district:district,division_id:division_id},
            success:function(response){
                districtalldata();
                console.log(response)
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
            url:"/district/"+id,
            success:function(response){
               
                    swalWithBootstrapButtons.fire(
      'deleted!',
      'data deleted successfully.',
      'success'
    ).then((result)=>{
         districtalldata();
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