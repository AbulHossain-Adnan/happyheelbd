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
        <table class="table" id="data_table">
            <thead>
              <tr>
                <th>p code</th>
                <th>p name</th>
                <th>image</th>
                <th>Category</th>
                <th>Brand</th>
                <th>Quantity</th>
                <th>Quantity</th>
                <th>Quantity</th>
                <th>Quantity</th>
                <th>Quantity</th>
                <th>Quantity</th>

                <th>Actiove</th>
               
              </tr>
            </thead>
            <tbody>
              
             
            
            </tbody>
          </table>
        </div><!-- table-wrapper -->
      </div><!-- card -->

      <script type="text/javascript">

$(function () {

  var oTable = $('#data_table').DataTable({

      processing: true,

      serverSide: true,

      ajax: "{{ route('stock.index') }}",

      columns: [

          {data: 'id', name: 'id'},

          {data: 'product_code', name: 'product_code'},
          {data: 'product_name', name: 'product_name'},
          {data: 'category_name', name: 'category_name'},
          {data: 'brand_name', name: 'brand_name'},
          {data: 'product_quantity', name: 'product_quantity'},
          {data: 'product_quantity', name: 'product_quantity'},
          {data: 'product_quantity', name: 'product_quantity'},
          {data: 'product_quantity', name: 'product_quantity'},
          {data: 'product_quantity', name: 'product_quantity'},
          {data: 'product_quantity', name: 'product_quantity'},
          {data: 'action', name: 'action', orderable: false, searchable: false},

      ]

  });

    

});

</script>
@endsection