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
               <a href="#"  type="submit" class="btn btn-dark float-right" >Add Deduction</a>
               </div>
              <h2> Scholarship Deductions </h2>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                <table id="datatable" class="table table-bordered table-hover">
                    <thead>

                    
                      <th>Scholarship</th>
                      <th>Semester Charged</th>
                      <th>Funded By</th>
                      <th>Percent</th>
                      <th>Fund</th>
                      <th>Fund Description</th>
                      <th>Action</th>
                      
                   
                    </thead>
                    <tbody>
                      @foreach ( $data as $row)
                      <tr>
                  
                        <td>{{ $row->scholarship }}</td>
                        
                        @if ( $row->sem_charged == 1)
                        <td>1st Semester</td>
                        @elseif( $row->sem_charged == 2)
                        <td> 2nd Semester</td>
                        @elseif( $row->sem_charged == 3)
                        <td>Mid Year</td>
                        @elseif( $row->sem_charged == 12)
                        <td>1st Semester <br> 2nd Semester</td>
                        @elseif(  $row->sem_charged == 123)
                        <td>1st Semester <br>2nd Semester <br> Mid Year</td>
                        @else
                        <td>--NONE--</td>
                        @endif
                        <td>{{ $row->funded_by }}</td>
                        <td>{{ $row->percent }}</td>
                        <td>{{ $row->fund }}</td>
                        <td>{{ $row->fund_desc }}</td>
                  
                       <td>
                          <a href="#" class="btn btn-warning">Edit </a>

                           
                          <form action="" method="POST">
                          {{ csrf_field() }}
                          {{method_field('DELETE')}}
                            <button type="submit" class="btn btn-danger">Delete</button>
                          </form>
                         
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