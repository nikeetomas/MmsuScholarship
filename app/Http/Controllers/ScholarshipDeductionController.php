<?php

namespace App\Http\Controllers;

use App\Models\ScholarshipDeduction;
use App\Models\Scholarship;
use App\Models\Fund;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ScholarshipDeductionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data= DB::table('scholarship_deductions')
        ->distinct()
         -> join('scholarships','scholarship_deductions.scholarship_id', '=', 'scholarships.id')
         -> join('fund','fund.fund_id','=','scholarship_deductions.fund_id')
         -> select(['scholarship_deductions.id',
                    'scholarship_deductions.percent',
                    'scholarships.scholarship',
                    'fund.fund_desc','fund.fund'])
         ->get();

        // $data= DB::table('scholarships')
        // ->distinct()
        //  -> join('scholarship_deductions','scholarship_deductions.scholarship_id', '=', 'scholarships.id')
        //  -> join('fund','fund.fund_id','=','scholarship_deductions.fund_id')
    
        //  ->get(['scholarships.scholarship','scholarships.sem_charged','scholarships.funded_by'
        // ,'scholarship_deductions.percent', 'scholarship_deductions.fund','fund.fund_desc']);

 
        return view('admin.scholarshipdeduction', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $scholarship = Scholarship::all();
        $sdeduction = ScholarshipDeduction::all();
        $fund = Fund::all();
        // $scholarshipdeduction= ScholarshipDeduction::all();

        return view('admin.sdeduction-create')->with('scholarship', $scholarship)
                                                ->with('scholarshipdeduction',$sdeduction)
                                                ->with('fund',$fund);
                                                
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $scholarship = new Scholarship;

       $scholarship->scholarship_type = 0;
        $scholarship->scholarship = $request->scholarship;
        $scholarship->discount= 0;
        $scholarship->sem_charged =0;
        $scholarship->funded_by = 0;
        $scholarship-> save();

        
        $scholarship_id = $scholarship->id;


        $sdeductions = new ScholarshipDeduction;
        $sdeductions->scholarship_id=$scholarship_id;
        $sdeductions->fund_id= 0;
        $sdeductions->percent = $request->percent;
        $sdeductions->fund = 0;
        $fundid =  $sdeductions->id;
       // $sdeductions->fund = $request->fund;
        $sdeductions->save();
        $fund = new Fund;
        $fund->fund = $request->fund;
        $fund->fund_desc = $request->fund_desc;
        $fund->save();


        return redirect('/scholarshipdeduction')->with('status', 'Data Added Successfully');
    

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
