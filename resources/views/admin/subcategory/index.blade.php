@extends('admin.admin_layout')
@section('adminMain')
<div class="sl-mainpanel">
  <nav class="breadcrumb sl-breadcrumb">
    <a class="breadcrumb-item" href="index.html">Starlight</a>
    <a class="breadcrumb-item" href="index.html">Tables</a>
    <span class="breadcrumb-item active">Data Table</span>
  </nav>
  <div class="sl-pagebody">
  <div class="row">
    <div class="col-sm-8">
      <div class="card">
        <div class="card-body">
          <div class="card pd-20 pd-sm-40">
            <h6 class="card-body-title">Category List
            
            </h6>
            
            <div class="table-wrapper">
              <table id="datatable1" class="table display responsive nowrap text-center">
                <thead>
                  <tr>
                    <th class="wd-15p">Id</th>
                    <th class="wd-15p">sub category Name</th>
                    <th class="wd-15p">Category Id</th>
                    <th class="wd-20p">Action</th>
                  </tr>
                </thead>
                <tbody>
                  
                  
                </tbody>
              </table>
              </div><!-- table-wrapper -->
              </div><!-- card -->
              
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title" id="addtitle">Subcategory Add</h5>
              <h5 class="card-title" id="updatetitle">Subcategory update</h5>
              <form id="formdata" method="post">
                @csrf
              <div class="form-group">
                <label for="exampleInputEmail1">Sub_category Name</label>
                <span class="text-danger" id="name_error"></span>
                <input type="hidden" id="id">
                <input type="text" class="form-control" id="sub_category_name" name="sub_category_name" aria-describedby="emailHelp" >
              </div>
              <div class="form-group">
                <span class="text-danger" id="id_error"></span>
                <select class="form-control select2" data-placeholder="Choose country" id="category_id" name="category_id">
                  <option label="Choose category"></option>
                  @foreach ($categories as $item)

                  <option id="category_id" value="{{$item->id}}">{{$item->category_name}}</option>
                  @endforeach
                  
                </select>
              </div>
              <div class="form-check">
              
              </div>
              <button type="submit" id="subbtn" class="btn btn-primary btn-sm">Submit</button>
              <button type="button" class="btn btn-warning btn-sm" id="upbtn" onclick="updata()">Update</button>
              
              </form>
            </div>
          </div>
        </div>
      </div>
      
    </div>
    </div>





<!-- script for form validation -->
<script>

                $(document).ready(function(){
                  $("#formdata").validate({
                  rules: {
                  sub_category_name: {
                  required: true,
                  minlength: 2
                  },
                  category_id:"required",

                  },
                  messages: {
                  sub_category_name:{
                    required:"subcategory  name field is required",
                    minlength:"Atlast 2 charecter required"
                }
                  
                  }
                  });
                  })
</script>


<!-- script for fetch data -->
    <script type="text/javascript">
    $.ajaxSetup({
    headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
    });
    $("#addtitle").show();
    $("#subbtn").show();
    $("#updatetitle").hide();
    $("#upbtn").hide();
    function alldata(){
    $.ajax({
    type:'GET',
    datatype:'json',
    url:'/subCategory',
    success:function(response){
    let rows="";
    $.each(response, function(key ,value){
    console.log(value)
    rows+=`
    <tr>
      <td>${value.id}</td>
      <td>${value.sub_category_name}</td>
      <td>${value.category_id}</td>
      <td><button class="btn btn-info btn-sm" onclick="editData(${value.id})">edit//view</button>
        
      <button class="btn btn-danger btn-sm" onclick="deletedata(${value.id})">delete</button></td>
    </tr>
    `
    });
    $('tbody').html(rows)
    }
    })
    }
    alldata()
    // End Read data*****************************************
    function cleardata(){
    $("#sub_category_name").val('');
    $("#category_id").val('');
    $("#name_error").text('');
    $('#id_error').text('');
    }


</script>

<!-- script for data add -->
<script>
    $(document).ready(function(){
        $('body').on('submit','#formdata',function(e){
            e.preventDefault();
            let formdata=new FormData($('#formdata')[0]);
            $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
            $.ajax({
                type:"POST",
                url:"/subCategory",
                data:formdata,
                contentType: false,
                processData: false,
                success:function(data){
                     alldata();
    cleardata();
    
    $("#subbtn").show();
    $("#updatetitle").hide();
    $('#upbtn').hide();
    
    Swal.fire({
    toast:true,
    position: 'top-end',
    icon: 'success',
    title: 'data added successfully',
    showConfirmButton: false,
    timer: 1500
    });

                    
                }
            })
        })
    })
</script>


<!-- script for edit data -->
    <script>
    function editData(id){
    $("#addtitle").hide();
    $("#subbtn").hide();
    $("#updatetitle").show();
    $("#upbtn").show();
    $.ajaxSetup({
    headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
    });
    $.ajax({
    type:"GET",
    datatype:"json",
    url:"/subCategory/"+id+"/edit",
    success:function(data){
    $("#id").val(data.id);
    $("#sub_category_name").val(data.sub_category_name);
    $("#category_id").val(data.category_id);
    }
    })
    }
// script for update data
    function updata(){
    $.ajaxSetup({
    headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
    });
    let sub_category_name= $("#sub_category_name").val();
    let category_id=$("#category_id").val();
    let id =$("#id").val()
    $.ajax({
    type:"PUT",
    datatype:"json",
    data:{sub_category_name:sub_category_name,category_id:category_id},
    url:"/subCategory/"+id,
    success:function(data){
    alldata();
    cleardata();
    
    $("#subbtn").show();
    $("#updatetitle").hide();
    $('#upbtn').hide();
    
    Swal.fire({
    toast:true,
    position: 'top-end',
    icon: 'success',
    title: 'data updated successfully',
    showConfirmButton: false,
    timer: 1500
    });
    
    $("#addtitle").show();
    
    
    alldata();
    
    }
    })
    }
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
    type:"DELETE",
    datatype:"json",
    url:"/subCategory/"+id,
    success:function(data){
    
    swalWithBootstrapButtons.fire(
    ' DELETED!',
    'subcategory deleted successfully.',
    'success'
    ).then((result)=>{
    alldata()
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