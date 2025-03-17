<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Helpers\ImageHelper;
use App\Model\Company;
use App\Model\Demographic;
use App\Model\DemographicDetail;

class DemographicDetailController extends Controller
{
       /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $query['data'] = Demographic::with('company')->get();
        return view('edit-demographic',$query);
    }

    public function create()
    {
        $query['demographic'] = Demographic::all();
        return view('edit-demographic',$query);
    }
    
    public function store(Request $request)
    {
        $this->validate($request, [
            'demographic_detail'=>'required',
            'demographic_detail_ar'=>'required'
        ]);
       
        $data['demographic_detail'] = $request->demographic_detail;
        $data['demographic_detail_ar'] = $request->demographic_detail_ar;
        $data['demographic_id'] = $request->demographic_id;
        
        $DemographicDetail = DemographicDetail::create($data);

        $query['company'] = Company::all();
        $query['demographic_detail']= DemographicDetail::where('demographic_id','=',$request->demographic_id)->get();
        $query['single'] = Demographic::find($request->demographic_id);
        return view('edit-demographic',$query);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(DemographicDetail $DemographicDetail)
    {
        $query['data'] = DemographicDetail::with('demographic')->find($DemographicDetail->id);
         
        return view('demographic',$query);
    }

    public function edit(DemographicDetail $DemographicDetail)
    {
        $query['demographic'] = Demographic::all();
        return view('edit-demographic',$query);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DemographicDetail $DemographicDetail)
    {
        $this->validate($request, [
            'demographic_detail'=>'required',
            'demographic_detail_ar'=>'required'
        ]);
        $data = $request->all();
        $DemographicDetail->update($data);
        return redirect('demographic')->with('success','The DemographicDetail has been Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(DemographicDetail $DemographicDetail)
    {
        

        $query['company'] = Company::all();
        $query['demographic_detail']= DemographicDetail::where('demographic_id','=',$DemographicDetail->demographic_id)->get();
        $query['single'] = Demographic::find($DemographicDetail->demographic_id);
        $DemographicDetail->delete();
        return view('edit-demographic',$query);
    }
}
