@extends('admin.admin_layout')
@section('adminMain')
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
      <a class="breadcrumb-item" href="index.html">Starlight</a>
      <a class="breadcrumb-item" href="index.html">Tables</a>
      <span class="breadcrumb-item active">Data Table</span>
    </nav>

    <div class="sl-pagebody">
      <div class="sl-page-title">
      
      </div><!-- sl-page-title -->

      <div class="card pd-20 pd-sm-40">
        <div class="table-wrapper">
          <table id="datatable1" class="table display responsive nowrap">
            <thead>
              <tr>
                <th class="wd-15p">Id</th>
                <th class="wd-15p"> name</th>
                <th class="wd-20p">email</th>
                <th class="wd-15p">phone</th>
                <th class="wd-10p">message</th>
                <th class="wd-10p">Action</th>

               
              </tr>
            </thead>
            <tbody>
              
            
              
             
          
             
            
            </tbody>
          </table>
        </div><!-- table-wrapper -->
      </div><!-- card -->











        <!-- Large modal -->


<div class="modal fade bd-example-modal-lg" id="seenmodal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="row">
  <div class="col-sm-12">
    <div class="card">
      <div class="card-body">
<ul class="list-group">
  <li class="list-group-item active">Contact Message Info</li>
  <li id="id" class="list-group-item">Dapibus ac facilisis in</li>
  <li id="name" class="list-group-item">Morbi leo risus</li>
  <li id="email" class="list-group-item">Porta ac consectetur ac</li>
  <li id="phone" class="list-group-item">Vestibulum at eros</li>
  <li id="message" class="list-group-item">Vestibulum at eros</li>

</ul>

      </div>
    </div>
  </div>
    </div>
  </div>
</div>
      




<script>
  function allcontactmsg(){
    $.ajax({
      type:"GET",
      datatype:'json',
      url:"/contact/messages",
      success:function(response){
        rows=""
        $.each(response,function(key, value){
          rows+=`
           <tr>
                <td>${value.id}</td>
                <td>${value.name}</td>
                <td>${value.email}</td>
                <td>${value.phone}</td>
                <td>${value.message}</td>
                <td>
                ${value.status == 0 
                  ?`<button type="button"  onclick="seen(${value.id})" class="btn btn-warning btn-sm" type="button">Unseen</button><br>`
                  :` <button type="button" onclick="unseen(${value.id})" class="btn btn-success btn-sm" type="button">mark as seen</button>`
                }
                
                </td>
            
              </tr>

           `
        })
        $('tbody').html(rows)
      }
    })

  }
  allcontactmsg();
</script>


<script>
  function seen(id){
    $.ajax({
      type:"GET",
      url:"/contact/message/seen/"+id,
      datatype:'json',
      success:function(data){
        allcontactmsg();
        $('#seenmodal').modal('show')
        $('#id').html(` 
          ID==>${data.id}
          `)
        $('#name').html(` 
          Name==>${data.name}
          `)
        $('#email').html(` 
          Email==>${data.email}
          `)
        $('#phone').html(` 
          Phone==>${data.phone}
          `)
        $('#message').html(` 
          Message==>${data.message}
          `)
        
      }
    })
  }
</script>


<script>
  function unseen(id){
    $.ajax({
      type:"GET",
      url:"/contact/message/unseen/"+id,
      datatype:'json',
      success:function(data){
        console.log(data)
      allcontactmsg();
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
  title: 'contact message mark as unseen '
})
        
      }
    })
  }
</script>

@endsection