<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Requests\SurveyRequest;
use App\Http\Resources\Survey\SurveyCollection;
use App\Http\Resources\Survey\SurveyResource;
use App\Model\Answer;
use App\Model\Survey;
use App\Model\SurveyQuestion;
use Illuminate\Http\Request;

class SurveyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $user = $request->user();
        if($user->role == 0)
            $data = Survey::paginate(10);
        else if($user->role == 1)
            $data = Survey::where('company_id',$user->company->id)->paginate(10);
        return response()->json(new SurveyCollection($data), 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SurveyRequest $request)
    {
        $data = $request->all();
        $data['company_id'] = $request->user()->company->id;
        $survey = Survey::create($data);
        foreach ($request->questions as $question){
            $question = json_decode($question,true);
            $question['survey_id'] = $survey->id;

            $survey_question = SurveyQuestion::create($question);
            if($survey_question->type != 2 && count($question['answers']) > 0){
                foreach ($question['answers'] as $answer){
                    $ans['answer'] = $answer['answer'];
                    $ans['question_id'] = $survey_question->id;
                    Answer::create($ans);
                }
            }
        }
        return response()->json([
            'success' => 1,
            'data' => new SurveyResource($survey),
            'msg' => 'The Survey has been added successfully'
        ], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Survey $survey)
    {
        $surv = Survey::with('questions.answers')->find($survey->id);
        return response()->json([
            'success' => 1,
            'data' => new SurveyResource($surv),
        ], 200);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SurveyRequest $request, Survey $survey)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Survey $survey)
    {
        $survey->delete();
        return response()->json([
            'success' => 1,
            'msg' => 'The Survey has been deleted successfully'
        ], 200);
    }
}
