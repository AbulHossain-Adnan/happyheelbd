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
            <h6 class="card-body-title">Seo
                <a href="#" class="btn btn-warning btn-sm " style="float: right" data-toggle="modal"
                    data-target="#modaldemo3">Add New</a>


                    
            </h6>
          
            <div class="table-wrapper">
                <table id="datatable1" class="table display responsive nowrap text-center">
                    <thead>
                        <tr>
                            <th class="wd-15p">Serial</th>
                            <th class="wd-15p">meta title</th>
                            <th class="wd-15p">meta author/th>
                            <th class="wd-15p">meta tag</th>
                            <th class="wd-15p">meta description</th>
                            <th class="wd-15p">google analytics</th>
                            <th class="wd-15p">bing analyticst</th>
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
        <div class="modal-content tx-size-lg">
            <div class="modal-header pd-x-60">
                <h6 class="tx-34 mg-b-0 tx-uppercase tx-inverse tx-bold">Add Seo</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="post" action="" id="formdata">
                @csrf
                <div class="modal-body pd-10">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Meta Title</label>
                        <input name="meta_title" type="text" id="meta_title" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp" placeholder="Enter Meta Title Name"
                            class="@error('category_name_eng') is-invalid @enderror">


                        @error('meta_title')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Meta Author</label>
                        <input name="meta_author" type="text" class="form-control" id="meta_author"
                            aria-describedby="emailHelp" placeholder="Enter Meta Author Name"
                            class="@error('category_name_eng') is-invalid @enderror">
                        @error('meta_author')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Meta tag</label>
                        <input name="meta_tag" id="meta_tag" type="text" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp" placeholder="Enter Meta Tag Name"
                            class="@error('category_name_eng') is-invalid @enderror">
                        @error('meta_tag')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Meta Description</label>
                        <input name="meta_description" type="text" class="form-control" id="meta_description"
                            aria-describedby="emailHelp" placeholder="Enter Meta Description Name"
                            class="@error('category_name_eng') is-invalid @enderror">
                        @error('meta_description')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Google Analytics</label>
                        <input name="google_analytics" type="text" class="form-control" id="google_analytics"
                            aria-describedby="emailHelp" placeholder="Enter Google Analytics Name"
                            class="@error('category_name_eng') is-invalid @enderror">
                        @error('google_analytics')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                     <div class="form-group">
                        <label for="exampleInputEmail1">bing analyticst</label>
                        <input name="bing_analyticst" type="text" class="form-control" id="bing_analyticst"
                            aria-describedby="emailHelp" placeholder="Enter bing analyticst Name"
                            class="@error('category_name_eng') is-invalid @enderror">
                        @error('bing_analyticst')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                
              
                </div><!-- modal-body -->
                <div class="modal-footer">
                    <button type="submit" id="addseobtn" class="btn btn-info pd-x-20">Add Seo</button>
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
          <form method="post" action="{{ url('/seo/updated/') }} ">
                @csrf
                <div class="modal-body pd-20">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Meta Title</label>
                        <input name="meta_title" type="text" class="form-control" id="meta_title1" value="" 
                            aria-describedby="emailHelp" placeholder="Enter Category Name"
                            class="@error('category_name_eng') is-invalid @enderror">
                        @error('meta_title')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <input type="hidden" name="id" id="id">
                    </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Meta Author</label>
                        <input name="meta_author" type="text" class="form-control" id="meta_author1"
                            aria-describedby="emailHelp" placeholder="Enter Category Name"
                            class="@error('category_name_eng') is-invalid @enderror">
                        @error('post_title_eng')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Meta tag</label>
                        <input name="meta_tag" type="text" class="form-control" id="meta_tag1"
                            aria-describedby="emailHelp" placeholder="Enter Category Name"
                            class="@error('category_name_eng') is-invalid @enderror">
                            <input type="hidden" id="id" name="id">
                        @error('post_title_eng')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Meta Description</label>
                        <input name="meta_description" type="text" class="form-control" id="meta_description1"
                            aria-describedby="emailHelp" placeholder="Enter Category Name"
                            class="@error('category_name_eng') is-invalid @enderror">
                        @error('post_title_eng')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Google Analytics</label>
                        <input name="google_analytics" type="text" class="form-control" id="google_analytics1"
                            aria-describedby="emailHelp" placeholder="Enter Category Name"
                            class="@error('category_name_eng') is-invalid @enderror">
                        @error('post_title_eng')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                     <div class="form-group">
                        <label for="exampleInputEmail1">bing analyticst</label>
                        <input name="bing_analyticst" type="text" class="form-control" id="bing_analyticst1"
                            aria-describedby="emailHelp" placeholder="Enter Category Name"
                            class="@error('category_name_eng') is-invalid @enderror">
                        @error('post_title_eng')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
              
                </div><!-- modal-body -->
                <div class="modal-footer">
                    <button type="button" id="updatebtn" class="btn btn-info pd-x-20">Update Seo</button>
                    <button type="button" class="btn btn-secondary pd-x-20" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div><!-- modal-dialog -->
</div><!-- modal -->
{{-- end modal here  --}}





<!-- Button trigger modal -->


<!-- Modal -->
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
        <form method="post" action="{{url('/seo/delete/')}}">
            @csrf
            @method('DELETE')
       <h5> Are You Sure You Want to Delete this ?</h5>
       <input type="hidden" name="seo_id" id="data_id">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-danger">Yes I want to delete</button>
        </form>
      </div>
    </div>
  </div>
</div>




<script>
   $('document').ready(function(){
    $('body').on('click','#edit',function(){
      let id = $(this).data('id');
      $.ajax({
        type:"GET",
        datatype:'json',
        url:"/seo/edit/"+id,
        success:function(data){
        
        $('#meta_title1').val(data.meta_title)
          $('#meta_author1').val(data.meta_author)
          $('#meta_description1').val(data.meta_description)
          $('#meta_tag1').val(data.meta_tag)
          $('#google_analytics1').val(data.google_analytics)
          $('#bing_analyticst1').val(data.bing_analyticst)
          $('#id').val(data.id)
            $('#modaldemo4').modal('show')

        }


      })
    })
   })


</script>

<script type="text/javascript">

  $('document').ready(function(){
     $("#formdata").validate({
        rules: {
            meta_title: {
                required: true,
            },

            meta_author: {
                required: true,
            },
          
              meta_tag: {
                required: true,
            },
          
              meta_description: {
                required: true,
            },
          
              google_analytics: {
                required: true,
            },
           
              bing_analyticst: {
                required: true,
            },
             
        },
        messages: {
            meta_title:"meta title field is required",
             meta_author:"meta author field is required",
             meta_tag:"meta tag field is required",
             meta_description:"meta description field is required",
             google_analytics:"google_analytics field is required",
             bing_analyticst:"bing_analyticst field is required",
            
        }
    });
  })
</script>

<script type="text/javascript">
    
    $('document').ready(function(){
        $('body').on('click','#deletemodal', function(){
            let delete_id=$(this).val();
            
            $('#deletemodal1').modal('show')
            $('#data_id').val(delete_id)
        })
        
    })
</script>



<!-- scrip for add data -->
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
            url:"/seo",
            data:formdata,
            contentType: false,
            processData: false,
            success:function(response){
                console.log(response)
                seoalldata();
                $('#meta_title').val('')
                $('#meta_author').val('')
                $('#meta_tag').val('')
                $('#meta_description').val('')
                $('#google_analytics').val('')
                $('#bing_analyticst').val('')
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


<!-- scrip for fatch data -->
<script>
    function seoalldata(){

        $.ajax({
            type:"GET",
            datatype:'json',
            url:"/seo/create",
            success:function(response){
                rows=""
                $.each(response, function(key,value){
                    rows+=` 
                         <tr>
                            <td>${value.id}</td>
                            <td>${value.meta_title}</td>
                            <td>${value.meta_author}</td>
                            <td>${value.meta_tag}</td>
                            <td>${value.meta_description}</td>
                            <td>${value.google_analytics}</td>
                            <td>${value.bing_analyticst}</td>
                           

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

    seoalldata();
</script>



<!-- script for edit -->
<script>
    $(document).ready(function(){
        $('body').on('click','#editdata', function(){
            let id =$(this).data('id');
            $.ajax({
                 type:"GET",
        datatype:"json",
        url:"/seo/"+id+"/edit", 
        success:function(response){
            $('#meta_title1').val(response.meta_title)
            $('#id').val(response.id)
            $('#meta_author1').val(response.meta_author)
            $('#meta_tag1').val(response.meta_tag)
            $('#meta_description1').val(response.meta_description)
            $('#google_analytics1').val(response.google_analytics)
            $('#google_analytics1').val(response.google_analytics)
            $('#bing_analyticst1').val(response.bing_analyticst)
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
        let meta_title=$('#meta_title1').val();
        let id=$('#id').val();
        let meta_author=$('#meta_author1').val();
        let meta_tag=$('#meta_tag1').val();
        let meta_description=$('#meta_description1').val();
        let google_analytics=$('#google_analytics1').val();
        let bing_analyticst=$('#bing_analyticst1').val();
        $.ajaxSetup({
            headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        $.ajax({
            type:"PUT",
            datatype:'json',
            url:"/seo/"+id,
            data:{meta_title:meta_title,meta_author:meta_author,meta_tag:meta_tag,meta_description:meta_description,google_analytics:google_analytics,bing_analyticst:bing_analyticst},
            success:function(response){
                console.log(response)
                seoalldata()
                $('#meta_title1').val('')
                $('#id').val('')
                $('#meta_author1').val('')
                $('#meta_tag1').val('')
                $('#meta_description1').val('')
                $('#google_analytics1').val('')
                $('#bing_analyticst1').val('')
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
            url:"/seo/"+id,
            success:function(response){
               
                    swalWithBootstrapButtons.fire(
      'Deleted!',
      'Your file has been deleted.',
      'success'
    ).then((result)=>{
         seoalldata();
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