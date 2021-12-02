@extends('layouts.master')

@section('title')
   Add Scholarship Deductions
@endsection

@section('content')
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

              <form action="#" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                <!-- /.form-group -->
                <div class="form-group">
                  <label>Scholarship</label>
                <input type="text"  name="scholarship" value="{{ $sdetail->scholarship }}" class="form-control" >
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              
                <div class="form-group">
                  <label>Percent</label>
                <input type="text"  name="percent" value="{{ $sdetail->percent }}" class="form-control" >
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="form-group">
                  <label>Fund</label>
                  <input type="text"  name="fund" value="{{ $sdetail->fund }}" class="form-control" >
               </div>

               <div class="form-group">
                  <label>Fund Description</label>
                  <input type="text"  name="fund_desc" value="{{ $sdetail->fund_desc }}" class="form-control" >
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
                           
                                <br>
                                    <input type="submit"class="btn btn-primary"></input>
                                    <a href="/scholarshipdeduction" class="btn btn-danger">Cancel</a>
                    </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection