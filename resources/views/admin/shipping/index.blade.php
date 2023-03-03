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
        <h5>Data Table</h5>
        <p>DataTables is a plug-in for the jQuery Javascript library.</p>
      </div><!-- sl-page-title -->

      <div class="card pd-20 pd-sm-40">
        <h6 class="card-body-title">Basic Responsive DataTable</h6>
        <p class="mg-b-20 mg-sm-b-30">Searching, ordering and paging goodness will be immediately added to the table, as shown in this example.</p>
        
        <div class="table-wrapper">
         
          <table id="datatable1" class="table display responsive nowrap">
            <thead>
              <tr>
                <th class="wd-15p">userid</th>
                <th class="wd-15p">division</th>
                <th class="wd-20p">district</th>
                <th class="wd-15p">area</th>
                <th class="wd-10p">zip</th>
               <!--  <th class="wd-25p">address</th>
                <th class="wd-25p">shipping</th> -->
                <th class="wd-25p">vat</th>
                <th class="wd-25p">subtotal</th>
              

                <th class="wd-25p">Action</th>
              </tr>
            </thead>
            <tbody>
              
              @foreach ($shippings as $item)    
              
              <tr>
               <td>{{$item->user_id}}</td>
               <td>{{$item->division}}</td>
               <td>{{$item->district}}</td>
               <td>{{$item->area}}</td>
               <td>{{$item->zip}}</td>
               <td>{{$item->address}}</td>
             <!--   <td>{{$item->shipping}}</td>
               <td>{{$item->vat}}</td> -->
               <td>{{$item->subtotal}}</td>

               
                
                <td>
                  <form method="post" action="{{ route('product.delete') }}">
                    @csrf
                    <input type="hidden" value="{{$item->id}}" name="product_id">
                  <a class="btn btn-success btn-sm" href="{{ route('product.edit',$item->id) }}"><i class="fa fa-edit"></i></a>
                  <a class="btn btn-warning btn-sm" href="{{ route('product.show',$item->id) }}"><i class="fa fa-eye"></i></a>
                  @if($item->status == 1)
                  <a class="btn btn-primary btn-sm" href="{{ route('status.active',$item->id) }}"><i class="fa fa-thumbs-up"></i></a>
                  @else
                    <a class="btn btn-warning btn-sm" href="{{ route('status.deactive',$item->id) }}"><i class="fa fa-thumbs-down"></i></a>
                    @endif
                 
                  <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                </form>
                </td>
             
                
              </tr>
              @endforeach
             
            
            </tbody>
          </table>
        </div><!-- table-wrapper -->
      </div><!-- card -->
@endsection