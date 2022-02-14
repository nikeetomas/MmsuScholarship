@extends('layouts.master')

@section('title')
    Dashboard
@endsection

@section('content')
              
<div class="card">
  <div class="card-header font-weight-bold">
    All References
  </div>
  <div class="card-body">
  <table id="datatable" class="table table-hover">
     <thead>  
        <th>Title</th>  
        <th>Author</th> 
        <th>Original Text</th>
        <th>Paraphrase Text</th>
        <th>Link</th>  
        <th>Citation</th>
       
                  
      </thead>
  </table>
  </div>
</div>

@endsection
