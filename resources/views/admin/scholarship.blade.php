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
               <a href="{{ route('scholarship.create') }}"  type="submit" class="btn btn-dark float-right" >Add Scholarship</a>
               </div>
              <h2> Scholarships </h2>
              </div>
              <!-- @if(session('status'))
                <div class="alert alert-success" role="alert">
                  {{ session('status') }}
                </div>
                @endif
               -->
               <!-- <div>
               <a href="{{ route('scholarship.create') }}"  type="submit" class="btn btn-dark " >Add Scholarship</a>
               </div> -->
              <!-- /.card-header -->
              <div class="card-body">
              <table id="datatable" class="table table-bordered table-hover">
                  <thead>
                      <th>ID</th>
                      <th>Scholarship  Type</th>
                      <th>Scholarship</th>
                      <th>Sem Charged</th>
                      <th>Funded  By</th>
                      <th>Status</th>
                      <th>Applicable Policy</th>
                      <th>Qualification</th>
                      <th>Amount of  Grant/Stipend</th>
                      <th>Contact Information</th>
                      <th>General Guidelines</th>
                      <th>Action</th>
              
                    </thead>
                    <tbody>
                      @foreach ( $scholarships as $scholarships)
                     
                      <tr>
                         <td>{{ $scholarships->id }}</td> 

                        @if ($scholarships->scholarship_type == 0)
                        <td>Other Study Grants</td>  
                        @elseif ($scholarships->scholarship_type == 1)
                        <td>Academic Scholars</td>
                        @elseif ($scholarships->scholarship_type == 2)
                        <td>Student Assistantship Programs</td>
                        @elseif ($scholarships->scholarship_type == 3)
                        <td>Other Government Funded Scholarship with MOA/JMC to MMSU</td>
                        @elseif ($scholarships->scholarship_type == 4)
                        <td>Privately-Funded Scholarships with MOA/Contract to MMSU</td>
                        @else
                        <td>--NONE--</td>
                        @endif

                        <td>{{ $scholarships->scholarship }}</td>


                        @if ($scholarships->sem_charged == 1)
                        <td>1st Semester</td>
                        @elseif($scholarships->sem_charged == 2)
                        <td> 2nd Semester</td>
                        @elseif($scholarships->sem_charged == 3)
                        <td>Mid Year</td>
                        @elseif($scholarships->sem_charged == 12)
                        <td>1st Semester <br> 2nd Semester</td>
                        @elseif( $scholarships->sem_charged == 123)
                        <td>1st Semester <br>2nd Semester <br> Mid Year</td>
                        @else
                        <td>--NONE--</td>
                        @endif

                        <td>{{ $scholarships->funded_by }}</td> 
                        @if($scholarships->active == 1)
                        <td>Active</td>
                        @else ($scholarships->active == 0)
                       <td> Inactive</td>
                        @endif 
                        <td>{{ $scholarships->appli_poli}}</td>  
                        <td>{{$scholarships->qualification }}</td>  
                        <td>{{ $scholarships->amount_of_grant }}</td>    
                        <td>{{ $scholarships->contact_info }}</td>  
                        <td>{{ $scholarships->gen_guideline }}</td>  
      
                   

                        <td>
                      
                          <a href=" {{ route('scholarship.edit',$scholarships->id)}}" class="btn btn-warning btn-sm btn-icon">
                          <i class="far fa-edit"></i>
                          </a>
                          
                        </td>
<!-- 
                        <td>
                          
                          <form action="/scholarship-delete/{{ $scholarships->id }}" method="POST">
                          {{ csrf_field() }}
                          {{method_field('DELETE')}}
                            <button type="submit" class="btn btn-danger">Delete</button>
                          </form>
                          
                        </td> -->
                    </tr>
                    @endforeach
                   
                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
</div>
                </table>
            </div>
@endsection
@section('scripts')
<script>
  $(document).ready( function () {
    $('#datatable').DataTable({
      responsive: true,
      dom:
        "<'row'<'col-sm-4'l><'col-sm-4'B><'col-sm-4'f>>" +
        "<'row'<'col-sm-12'rt>>" +
        "<'row'<'col-sm-5'i><'col-sm-7'p>>",
      lengthMenu: [
                      [6, 25, 50, 75, 100, -1],
                      [6, 25, 50, 75, 100, "All"],
                  ],

    columnDefs: [
          { responsivePriority: 0, targets: 10 },
          { responsivePriority: 1, targets: 9 },
          { responsivePriority: 2, targets: 8 },
      ],

      buttons: [
        {
            extend: "excelHtml5",
            messageTop: "Mariano Marcos State University",
            filename: "scholarship_program",
            exportOptions: {
                columns: ":visible",
            },
            className: "btn btn-outline-success btn-sm",
        },
        // {
        //     extend: "pdfHtml5",
        //     messageTop: "Mariano Marcos State University",
        //     exportOptions: {
        //         columns: ":visible",
        //     },
        //     className: "btn btn-outline-danger btn-sm",
        // },
        {
            extend: "colvis",
            className: "btn btn-outline-primary btn-sm",
        },
    ],

    });
});
</script>

@endsection