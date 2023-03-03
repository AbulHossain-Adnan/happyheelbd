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
            <h6 class="card-body-title">Post Category List
                <a href="#" class="btn btn-warning btn-sm " style="float: right" data-toggle="modal"
                    data-target="#modaldemo3">Add New</a>


                    
            </h6>
          
            <div class="table-wrapper">
                <table id="datatable1" class="table display responsive nowrap text-center">
                    <thead>
                        <tr>
                            <th class="wd-15p">Serial</th>
                            <th class="wd-15p">category id</th>
                            <th class="wd-15p">post_title_english</th>
                            <th class="wd-15p">post_title_bangla</th>
                            <th class="wd-15p">post image</th>
                            <th class="wd-15p">post_details_english</th>
                            <th class="wd-15p">post_details_bangla</th>
                            <th class="wd-20p">Action</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($posts as $key=>$item)


                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $item->category_id }}</td>
                            <td>{{ $item->post_title_eng }}</td>
                            <td>{{ $item->post_title_bng }}</td>
                            <td>
                                <img src="{{asset('post_images/'.$item->post_image)}}" width="70">
                            </td>
                            <td>{{ $item->post_details_eng }}</td>
                            <td>{{ $item->post_details_bng }}</td>





                            <td>
                                <form method="post" action="{{url('/post/delete/'.$item->id)}}">
                                    @csrf
                                    @method('DELETE')
                                    <a src="" class="btn btn-warning btn-sm "  id="edit" data-id="{{ $item->id }}">edit</a>
                          
                           <button type="submit" class="btn btn-danger btn-sm ">delete</button>
                        
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
            <form method="post" action="{{ url('/post/store/') }} " enctype=multipart/form-data id="postformvalidate">
                @csrf
                <div class="modal-body pd-20">
                    <div class="form-group">
            <span class="text-danger" id="id_error"></span>
            <select class="form-control select2" data-placeholder="Choose country" id="category_id" name="category_id">
                    <option label="Choose category"></option>

                        @foreach ($categories as $item)
                        
                    <option id="category_id" value="{{$item->id}}">{{$item->category_name}}</option>

                    @endforeach
                 
                  </select>
          </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">post title english</label>
                        <input name="post_title_eng" type="text" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp" placeholder="Enter Category Name"
                            class="@error('category_name_eng') is-invalid @enderror">
                        @error('post_title_eng')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">post title bangla</label>
                        <input name="post_title_bng" type="text" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp" placeholder="Enter Category Name"
                            class="@error('category_name_eng') is-invalid @enderror">
                        @error('post_title_eng')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                     <div class="form-group">
                        <label for="exampleInputEmail1">post image</label>
                        <input name="post_image" type="file" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp" placeholder="Enter Category Name"
                            class="@error('post_image') is-invalid @enderror">
                        @error('post_title_eng')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                     <div class="form-group">
                        <label for="exampleInputEmail1">post detais english</label>

                        <textarea name="post_details_eng" type="text" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp" placeholder="Enter Category Name"
                            class="@error('category_name_eng') is-invalid @enderror"></textarea>
                     
                    </div>
                     <div class="form-group">
                        <label for="exampleInputEmail1">post detais english</label>

                        <textarea name="post_details_bng" type="text" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp" placeholder="Enter Category Name"
                            class="@error('category_name_eng') is-invalid @enderror"></textarea>
                    </div>
                </div><!-- modal-body -->
                <div class="modal-footer">
                    <button type="submit" class="btn btn-info pd-x-20">Add Post</button>
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
            <form method="post" action="{{ url('/post/updated/') }} " enctype=multipart/form-data>
                @csrf
                <div class="modal-body pd-20">
                    <div class="form-group">
            <span class="text-danger" id="id_error"></span>
            <select class="form-control select2" data-placeholder="Choose country" id="category_id" name="category_id">
                    <option label="Choose category"></option>

                        @foreach ($categories as $item)
                        
                    <option id="category_id" value="{{$item->id}}">{{$item->category_name}}</option>

                    @endforeach
                 
                  </select>
          </div>





                    <div class="form-group">
                        <label for="exampleInputEmail1">post title english</label>
                        <input name="post_title_eng" type="text" class="form-control" id="post_title_eng"
                            aria-describedby="emailHelp" placeholder="Enter Category Name"
                            class="@error('category_name_eng') is-invalid @enderror">
                            <input type="hidden" name="id" id="dataid">
                        @error('post_title_eng')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">post title bangla</label>
                        <input name="post_title_bng" type="text" class="form-control" id="post_title_bng"
                            aria-describedby="emailHelp" placeholder="Enter Category Name"
                            class="@error('category_name_eng') is-invalid @enderror">
                        @error('post_title_eng')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                     <div class="form-group">
                        <label for="exampleInputEmail1">post image</label>
                        <input name="post_image" type="file" class="form-control" id="post_image"
                            aria-describedby="emailHelp" placeholder="Enter Category Name"
                            class="@error('post_image') is-invalid @enderror">
                        @error('post_title_eng')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                     <div class="form-group">
                        <label for="exampleInputEmail1">post detais english</label>
                        <input name="post_details_eng" type="text" class="form-control" id="post_details_eng"
                            aria-describedby="emailHelp" placeholder="Enter Category Name"
                            class="@error('category_name_eng') is-invalid @enderror">
                        @error('post_title_eng')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                     <div class="form-group">
                        <label for="exampleInputEmail1">post details bangla</label>
                        <input name="post_details_bng" type="text" class="form-control" id="post_details_bng"
                            aria-describedby="emailHelp" placeholder="Enter Category Name"
                            class="@error('category_name_eng') is-invalid @enderror">
                        @error('post_title_eng')
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


@endsection
@section('script')

<script>
   $('document').ready(function(){
   	$('body').on('click','#edit',function(){
   		let id = $(this).data('id');
   		$.ajax({
   			type:"GET",
   			datatype:'json',
   			url:"/post/edit/"+id,
   			success:function(data){

   				$('#modaldemo4').modal('show')
                $('#category_id').val(data.category_id)
   				$('#post_title_eng').val(data.post_title_eng)
   				$('#post_title_bng').val(data.post_title_bng)
                $('#post_details_bng').val(data.post_details_bng)
                $('#post_details_eng').val(data.post_details_eng)
   				$('#dataid').val(data.id)

   			}


   		})
   	})
   })
  
   
</script>
 
 
 
 
 
<script>

  $('document').ready(function(){
     $("#postformvalidate").validate({
        rules: {
            category_id: {
                required: true,
            },

            post_title_eng: {
                required: true,
            },
             post_image: {
                required: true,
            },

            post_details_eng: {
                required: true,
            },
             post_details_bng: {
                required: true,
            },
        },
        messages: {
            category_id:"category id field is required",
             post_title_eng:"post title field is required",
             post_title_bng:"post title  field is required",
             post_image:"post field is required",
             post_details_eng:"post details field is required",
             post_details_bng:"post details field is required",
            
        }
    });
  })
</script>

@endsection