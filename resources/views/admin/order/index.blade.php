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
         
          <table id="datatable1" class="table display responsive nowrap">
            <thead>
              <tr>
                <th class="wd-15p">Name</th>
                  <th class="wd-20p">Phone number</th>
                  <th class="wd-20p">Order Area</th>

                <th class="wd-15p">Paytype</th>
              
                <th class="wd-15p">Sub total</th>
                <th class="wd-10p">Shipping</th>
                <th class="wd-25p">Total</th>
               <!--  <th class="wd-25p">shipping</th>
                <th class="wd-25p">vat</th> -->
               
                <th class="wd-25p">Date</th>
                <th class="wd-25p">Status</th>

                <th class="wd-25p">Action</th>
              </tr>
            </thead>
            <tbody>
              
              @foreach ($orders as $item)    
              
              <tr>
               <td>{{$item->name}}</td>
                <td>{{$item->blnc_transection}}</td>
                <td>{{$item->Shipping->address}}</td>

               <td>{{$item->payment_type}}</td>

              
               <td>{{$item->subtotal}}</td>
               <td>{{$item->shipping}}</td>
               <td>{{$item->paying_amount}}</td>
             <!--   <td>{{$item->shipping}}</td>
               <td>{{$item->vat}}</td> -->
             
               <td>{{$item->date}}</td>

                <td>
                  @if($item->status == 0)
                   <span class="badge badge-warning">Pending</span>
                
                  @elseif($item->status == 1)
                    <span class="badge badge-success">Payment accept</span>
                      @elseif($item->status == 2)
                    <span class="badge badge-info">Progress</span>
                      @elseif($item->status == 3)
                    <span class="badge badge-success">Delevared</span>
                      @else
                    <span class="badge badge-danger">Cancel</span>
                 
                  @endif
                </td>
                <td>
                  <form method="post" action="">
                    @csrf
                    <input type="hidden" value="{{$item->id}}" name="product_id">
                
                  <a class="btn btn-primary btn-sm" href="{{ route('order.show',$item->id) }}"><i class="fa fa-eye"></i></a>
                
                 
                 
                </form>
                </td>
             
                
              </tr>
              @endforeach
             
            
            </tbody>
          </table>
        </div><!-- table-wrapper -->
      </div><!-- card -->
@endsection