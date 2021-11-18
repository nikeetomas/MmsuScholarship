@extends('layouts.master')

@section('title')
    Student Scholarships Records | MMSU Scholarship
@endsection

@section('content')
<div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
              <h4 class="card-title"> Student Scholarships Records </h4>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="scholartable" class="table table-bordered table-hover">
                  <thead>
                   
                    <th>First <br> Name</th>  
                    <th>Last <br> Name</th> 
                    <th>Middle <br> Name</th>  
                    <th>Section</th>
                    <th>Degree</th>

                    <th>College</th>

                    <th>Status</th>
                    <th>Gender</th>
                    <th>School <br> Year</th>

                    <th>Scholarship</th>
                   
                  </thead>
                  <tbody>
                  @foreach ( $scholarships as $row)
                      <tr>
                         <td>{{ $row->fname }}</td>
                         <td>{{ $row->lname }}</td>
                         <td>{{ $row->mname }}</td>
                         <td>{{ $row->section }}</td>
                         <td>{{ $row->abbr}}</td>
                         <td>{{ $row->collegeabbr}}</td>


                          @if($row->status == 0)
                            <td>Single</td>
                          @elseif($row->status == 1)
                            <td>Married</td>
                          @elseif($row->status == 2)
                            <td>Widowed</td>
                          @else
                            <td>--NONE--</td>
                          @endif

                  
                        @if($row->sex == 1)
                          <td>Female</td>
                        @else($row->sex == 2)
                          <td>Male</td>
                        @endif

                         <td>{{ $row->cy}}</td>
                         <td>{{ $row->scholarship }}</td>

                       
                    
                    </tr>
                    @endforeach
                  </tbody>
                </table>
            </div>
@endsection

@section('scripts')
<script>
  $(document).ready( function () {
    $('#scholartable').DataTable({
      responsive: true,
      dom:
        "<'row'<'col-sm-4'l><'col-sm-4'B><'col-sm-4'f>>" +
        "<'row'<'col-sm-12'rt>>" +
        "<'row'<'col-sm-5'i><'col-sm-7'p>>",
        lengthMenu: [
                      [10, 25, 50, 75, 100, -1],
                      [10, 25, 50, 75, 100, "All"],
                  ],
        columnDefs: [
          { responsivePriority: 0, targets: 9},
          { responsivePriority: 1, targets: 7},
          { responsivePriority: 2, targets: 6 },
      ],
      buttons: [
        {
            extend: "excelHtml5",
            messageTop: "Mariano Marcos State University",
            filename: "scholars",
            exportOptions: {
                columns: ":visible",
            },
            className: "btn btn-outline-success btn-sm",
        },
        {
            extend: "colvis",
            className: "btn btn-outline-primary btn-sm",
        },
    ],
    });
});
</script>

@endsection