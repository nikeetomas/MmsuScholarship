@extends('layouts.master')

@section('content')
    
    <div class="row">
      <div class="col-md-12">          
          @if(session('status'))
                <div class="alert alert-success" role="alert">
                  {{ session('status') }}
                </div>
                @endif
            <div class="card">
              <div class="card-header"> 
              <div>
                <!-- Button trigger modal -->
               <a href="{{ route('scholarshipdeduction.create') }}"  type="submit" class="btn btn-dark float-right" >Add Deduction</a>
               </div>
              <h2> Scholarship Deductions </h2>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                <table id="datatable" class="table table-bordered table-hover">
                    <thead>

                      <th>ID</th>                   
                      <th>Scholarship</th>
                      <!-- <th>Semester Charged</th>
                      <th>Funded By</th> -->
                      <th>Percent</th>
                      <th>Fund</th>
                      <th>Fund Description</th>
                      <th>Action</th>
                      
                   
                    </thead>
                    <tbody>
                      @foreach ( $data as $row)
                      <tr>
                        <td>{{ $row->id }}</td>
                        <td>{{ $row->scholarship }}</td>

                        <td>{{ $row->percent }}</td>
                        <td>{{ $row->fund }}</td>
                        <td>{{ $row->fund_desc }}</td>
                  
                       <td>
                       <a href="{{  route('scholarshipdeduction.edit', $row->id) }}" class="btn btn-warning btn-sm btn-icon">
                          <i class="far fa-edit"></i>
                      </a>  
                         
                      <a href="{{  route('delete', $row->id) }}" class="btn btn-danger btn-sm btn-icon">
                      <i class="far fa-trash-alt"></i>
             
                            </a>
                          
                       </td>

                    </tr>
                    @endforeach
                    </tbody>
                </table>
           
            </div>
        </div>
    </div>
</div>
<!--END OF CRUD-->

@endsection
@section('scripts')
<script>
  $(document).ready( function () {
    $('#datatable').DataTable();
});
</script>

@endsection