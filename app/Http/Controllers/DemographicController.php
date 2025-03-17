<?php

namespace App\Http\Controllers;

use App\Model\DemographicDetail;
use Illuminate\Http\Request;

use App\Helpers\ImageHelper;
use App\Model\Company;
use App\Model\Demographic;
use Maatwebsite\Excel\Facades\Excel;

use App\Imports\DemographicImport;
use App\Model\CompanyEmployee;
//use Auth;
use Illuminate\Support\Facades\Auth as FacadesAuth;
use Illuminate\Support\Facades\Session as FacadesSession;


class DemographicController extends Controller
{
       /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $query['data'] = Demographic::with('company')->get();
        return view('demographic',$query);
    }

    public function create()
    {
        $query['company'] = Company::all();
        $query['company2'] = Company::all();
        return view('create-demographic',$query);
    }
    
    public function store(Request $request)
    {
        //dd($request);
        $this->validate($request, [
            'demographic'=>'required',
            'demographic_ar'=>'required'
        ]);
       
        $data['demographic'] = $request->demographic;
        $data['demographic_ar'] = $request->demographic_ar;
        $data['company_id'] = $request->company_id;
        
        $Demographic = Demographic::create($data);

        return redirect('demographic')->with('success','The Demographic has been added successfully');
    }


    public function importDemographic(Request $request)
    {
        $company_id = $request->company_id2;
        FacadesSession::flash('tab', 'second');
        
        Excel::import(new DemographicImport($company_id), $request->file('file'));

        return redirect('demographic')->with('success', 'The Demographic has been added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Demographic $Demographic)
    {
        $query['data'] = Demographic::with('company')->find($Demographic->id);
         
        return view('demographic',$query);
    }

    public function edit(Demographic $Demographic)
    {
        $query['company'] = Company::all();
        $query['demographic_detail']= DemographicDetail::where('demographic_id','=',$Demographic->id)->get();
        $query['single'] = $Demographic;
        return view('edit-demographic',$query);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Demographic $Demographic)
    {
        $this->validate($request, [
            'demographic'=>'required',
            'demographic_ar'=>'required'
        ]);
        $data = $request->all();
        $Demographic->update($data);
        return redirect('demographic');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Demographic $Demographic)
    {
        $Demographic->delete();
        return redirect('demographic')->with('success','The Demographic has been deleted successfully');
    }
}
