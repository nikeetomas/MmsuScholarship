@extends('layouts.master')

@section('title')
   Add Scholarship
@endsection

@section('content')
 <!-- SELECT2 EXAMPLE -->
 <div class="card card-default">
          <div class="card-header bg-gradient-info">
            <h3 class="card-title">Scholarship</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
              <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-remove"></i></button>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="row">
              <div class="col-md-6">

              <form action="/scholarship"  method="POST" enctype="multipart/form-data">
                            @csrf
                <div class="form-group">
                  <label>Scholarship Type</label>
                  <select class="form-control " name="scholarship_type"style="width: 100%;">
                  <option></option>
                    <option value="0"> Other Study Grants </option>
                    <option value="1">Academic Scholars </option>
                    <option value="2">  Student Assistantship Programs </option>
                    <option value="3"> Other Government Funded Scholarship with MOA/JMC to MMSU </option>
                  </select>
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                  <label>Scholarship</label>
                <input type="text"  name="scholarship" class="form-control" >
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-6">
                <div class="form-group">
                  <label>Semester Charged</label>
                  <select class="form-control" name="sem_charged" style="width: 100%;">
                    <option></option>
                    <option value="1">1st Semester</option>
                    <option value="2">2nd Semester</option>
                    <option value="12">1st & 2nd Semester</option>
                    <option value="123">1st, 2nd Semester & Midyear</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Funded By</label>
                <input type="text"  name="funded_by" class="form-control" >
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-6">
                <div class="form-group">
                  <label>Status</label>
                  <select class="form-control " name="active"style="width: 100%;">
                  <option > </option>
                  <option value="0">Active</option>
                  <option value="1">Inactive</option>
                  </select>
                </div>
                <!-- /.form-group -->
              </div>
            </div>
            <!-- /.row -->
          </div>
          <!-- /.card-body -->
          <div class="card-footer ">
          </div>
        </div>
        <!-- /.card -->
<div class="card card-default">
          <div class="card-header  bg-gradient-info">
            <h3 class="card-title">Scholarship Details</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
              <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-remove"></i></button>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="row">
              <div class="col-md-6">
                  
              <form action="/scholarship"  method="POST" enctype="multipart/form-data">
                            @csrf
                <div class="form-group">
                  <label>Applicable Policy</label>
                  <input type="text"  name="appli_poli" class="form-control" >
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                  <label>Qualification</label>
                <input type="text"  name="qualification" class="form-control" >
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-6">
                <div class="form-group">
                  <label>Amount of Grant or Stipend</label>
                  <input type="text"  name="amount_of_grant" class="form-control">
                </div>
                <div class="form-group">
                  <label>General Guideline</label>
                <input type="text"  name="gen_guideline" class="form-control" >
                </div>
                <!-- /.form-group -->
              </div>
              
              <!-- /.col -->
              <div class="col-md-6">
                <div class="form-group">
                  <label>Contact Information</label>
                  <input type="text"  name="contact_info" class="form-control" >
                </div>
           <span>
            <input type="submit"class="btn btn-outline-primary"></input>
                <a href="/scholarship" class="btn btn-outline-danger">Cancel</a>

           
                
            </span>
            
              </div>
            </div>
          
          </div>
          <!-- /.card-body -->
          <div class="card-footer">
          </div>
        </div>
<!-- <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">

                            <form action="/scholarship"  method="POST" enctype="multipart/form-data">
                            @csrf -->
<!--                       
                            <div class="form-group">
                                <label for="">Scholarship Type</label>
                            <input type="text"  name="scholarship_type" class="form-control" >
                            <select name="scholarship_type" class="form-control">
                              <option > </option>
                                     <option value="1"> Other Study Grants </option>
                                     <option value="2">Academic Scholars </option>
                                     <option value="3"> Student Assistantship Programs </option>
                                     <option value="4"> Other Government Funded Scholarship with MOA/JMC to MMSU </option>
                                    </select>
                            </div>

                            <div class="form-group">
                                <label for="">Scholarship</label>
                                <input type="text"  name="scholarship" class="form-control" >
                            </div>

                            <div class="form-group">
                                <label for="">Discount</label>
                                <input type="text"  name="discount" class="form-control" >
                            </div> -->

                            <!-- <div class="form-group">
                                <label for="">Semester Charged</label>
                            <input type="text"  name="sem_charged" class="form-control" placeholder="Select [1 - 1st Semester] [2 - 2nd Semester] [12 - 1st & 2nd Semester] [123 - 1st & 2nd Semester & Mid Year]">
                            <select name="sem_charged" class="form-control">
                            <option > </option>
                                        <option value="1">1st Semester</option>
                                        <option value="2">2nd Semester</option>
                                        <option value="12">1st & 2nd Semester</option>
                                        <option value="123">1st, 2nd Semester & Midyear</option>
                                    </select>
                            </div>

                            <div class="form-group">
                                <label for="">Funded By</label>
                                <input type="text"  name="funded_by" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="">Applicable Policy</label>
                                <input type="text"  name="appli_poli" class="form-control">
                            </div> 
                            
                            <div class="form-group">
                                <label for="">Qualification</label>
                                <input type="text"  name="qualification" class="form-control">
                            </div> 
                            
                            <div class="form-group">
                                <label for="">Amount of Grant/Stipend</label>
                                <input type="text"  name="amount_of_grant" class="form-control">
                            </div> 
                            
                            <div class="form-group">
                                <label for="">General Guidelines</label>
                                <input type="text"  name="gen_guideline" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="">Contact Information</label>
                                <input type="text"  name="contact_info" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="">Status</label>
                            <input type="text" class="form-control" placeholder="Press [ 1 - Active] [ 0 - Inactive]">
                                <select name="active" class="form-control">
                                <option > </option>
                                    <option value="1">Active</option>
                                    <option value="2">Inactive</option>
                                </select>
                                <br>
                                    <input type="submit"class="btn btn-primary"></input>
                                    <a href="/scholarship" class="btn btn-danger">Cancel</a>
                            </div>
                    </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
-->

@endsection 