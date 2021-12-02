@extends('layouts.master')

@section('title')
   Add Scholarship Deductions
@endsection

@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">

                            <form action="/scholarshipdeduction"  method="POST" enctype="multipart/form-data">
                            @csrf
            
                            <div class="form-group">
                        <label for="">Scholarship</label>
                      <select name="scholarship" id="scholarship" class="form-control">
                        <option value="">--Choose Scholarship Program--</option>
                          @foreach($scholarship as $row)
                            <option value="{{ $row->id }}">
                              {{ $row->scholarship }}
                            </option>
                          @endforeach

                      </select>
                    </th>

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
                            </div> -->

                            <!-- <div class="form-group">
                                <label for="">Funded By</label>
                                <input type="text"  name="funded_by" class="form-control">
                            </div> -->

                            <div class="form-group">
                                <label for="">Percent</label>
                                <input type="text"  name="percent" class="form-control">
                            </div> 

                            
                         
                            <div class="form-group">
                                <label for="">Fund</label>
                                <select name="fund" id="fund" class="form-control">
                                    <option value="">--- Select Fund---</option>
                                    @foreach($fund as $row)
                                        <option value="{{ $row->fund_id }}">
                                        {{ $row->fund }}
                                        </option>
                                    @endforeach
                                    </select>
                            </div> 
                            
                            <div class="form-group">
                                <label for="">Fund Description</label>
                                <select name="fund_desc" id="fund_desc" class="form-control">
                                    <option value="">---Select Fund Description---</option>
                                    @foreach($fund as $row)
                                        <option value="{{ $row->fund_desc }}">
                                        {{ $row->fund_desc}}
                                        </option>
                                    @endforeach
                                    </select>
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