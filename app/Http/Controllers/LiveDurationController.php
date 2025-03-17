<?php

namespace App\Http\Controllers;

use App\Model\Company;
use App\Model\LiveDuration;
use App\Model\SurveyCompany;
use Illuminate\Http\Request;

class LiveDurationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(SurveyCompany $survey_company)
    {

        $query['data'] = SurveyCompany::with('liveDurations')->find($survey_company->id);
       
        return view('live_duratons',$query);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(SurveyCompany $survey_company)
    {
        $query['data'] = $survey_company;
        return view('create-live',$query);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,SurveyCompany $survey_company)
    {
        $survey_company->liveDurations()->create([
            'start_date' => $request->start_date,
            'end_date' => $request->end_date
        ]);
        return redirect('company/'.$survey_company->id.'/live_duration')->with('success','Live Durations has been added successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\LiveDuration  $liveDuration
     * @return \Illuminate\Http\Response
     */
    public function show(LiveDuration $liveDuration)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\LiveDuration  $liveDuration
     * @return \Illuminate\Http\Response
     */
    public function edit(SurveyCompany $survey_company,LiveDuration $liveDuration)
    {
        $query['data'] = $survey_company;
        $query['single'] = $liveDuration;
        return view('create-live',$query);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\LiveDuration  $liveDuration
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SurveyCompany $survey_company,LiveDuration $liveDuration)
    {
        $liveDuration->update([
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
        ]);
        return redirect('company/'.$survey_company->id.'/live_duration')->with('success','Live Durations has been Updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\LiveDuration  $liveDuration
     * @return \Illuminate\Http\Response
     */
    public function destroy(SurveyCompany $survey_company,LiveDuration $liveDuration)
    {
        $liveDuration->delete();
        return redirect('company/'.$survey_company->id.'/live_duration')->with('success','The company has been deleted successfully');
    }
}
