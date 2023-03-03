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
       
        <div class="card-deck">
  <div class="card">
    <div class="card-body">
    <form method="post" action="{{route('date.search')}}">
      @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Search By date</label>
    <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="date">
   
  </div>

  <button type="submit" class="btn btn-primary">Search</button>
</form>
    </div>
  </div>
  <div class="card">
    <div class="card-body">
     <form method="post" action="{{route('month.search')}}">
      @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Search By Month</label>
    <select class="form-control" name="month">
      
      <option>january</option>
      <option>february</option>
      <option>march</option>
      <option>april</option>
      <option>may</option>
      <option>jun</option>
      <option>julay</option>
      <option>august</option>
      <option>septemmer</option>
      <option>october</option>
      <option>november</option>
      <option>december</option>
    </select>
   
  </div>

  <button type="submit" class="btn btn-primary">Search</button>
</form>
    </div>
  </div>
  <div class="card">
    <div class="card-body">
      <form method="post" action="{{route('year.search')}}">
      @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Search By Year</label>
    <select class="form-control" name="year">
      
      <option>2000</option>
      <option>2001</option>
      <option>2002</option>
      <option>2003</option>
      <option>2004</option>
      <option>2005</option>
      <option>2006</option>
      <option>2007</option>
      <option>2008</option>
      <option>2009</option>
      <option>2010</option>
      <option>2011</option>
      <option>2012</option>
      <option>2013</option>
      <option>2014</option>
      <option>2015</option>
      <option>2016</option>
      <option>2017</option>
      <option>2018</option>
      <option>2019</option>
      <option>2020</option>
      <option>2021</option>
      <option>2022</option>

    </select>
   
  </div>

  <button type="submit" class="btn btn-primary">Search</button>
</form>
    </div>
  </div>
</div>
    
      </div>
    </div>
  </div>

      <!-- card -->






















@endsection




















