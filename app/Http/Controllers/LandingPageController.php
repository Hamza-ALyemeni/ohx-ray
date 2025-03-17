<?php

namespace App\Http\Controllers;

use App\Model\CompanyEmployee;
use App\User;
use App\Model\Employee;
use App\Model\Survey;
use App\Model\SurveyCompany;
use App\Model\SurveyEmployee;
use App\Model\SurveyQuestion;
use App\Model\SurveySolution;
use Illuminate\Http\Request;
use Exception;

class LandingPageController extends Controller
{
    public function index($id,$survey_company_id ,$token = false)
    {
        
        $query['id'] = $id;
        $query['survey_company_id'] = $survey_company_id;
        $query['token'] = $token;
        if ($token) {
            $user = Employee::where('token', $token)->first();
            if ($user) {
               /* $survey_employee = SurveyEmployee::where('employee_id', $user->id)->where('survey_id', $id)->first();
                if ($survey_employee) {
                    if($survey_employee->solutions()->count()!=0){
                        return redirect('thank2');
                    }   
                }*/
            }else{
                 return view('error');
            }
        }
        return view('landing-page', $query);
    }
    // public function thank(){
    //     return User::where('id',1)->delete();
    // }
    public function take_survey($language, Survey $survey,$survey_company_id, $token = false)
    {
     try{
            if(!$token){
                $token=$survey_company_id;
                $user = Employee::where('token', $token)->first();
                $company=CompanyEmployee::where('employee_id',$user->id)->first();
                $survey_company=SurveyCompany::where('company_id',$company->company_id)
                ->orderBy('id', 'DESC')
                ->first();

                $survey_company_id=$survey_company->id;
            }
            $query['survey'] = Survey::with('questions.answers')->find($survey->id);
            
            if ($token) {
                $user = Employee::where('token', $token)->first();
                if ($user) {
                    $survey_employee = SurveyEmployee::where('employee_id', $user->id)->where('survey_company_id', $survey_company_id)->where('survey_id', $survey->id)->first();
                    if (!$survey_employee) {
                        $survey_employee = SurveyEmployee::create([
                            'employee_id' => $user->id,
                            'survey_id' => $survey->id,
                            'survey_company_id'=>$survey_company_id,
                        ]);
                    }

                    //dd($survey_employee);
                
                    
                    $query['survey_employee'] = $survey_employee;
                    if($survey_employee->solutions()->count()!=0){
                        return redirect('thank2');
                    }else{
                        $survey_employee['survey_time_at']=date('Y-m-d H:i:s');
                        $survey_employee->update();
                    }
                }else{
                    return view('error');
                }
            }
            $query['language'] = $language;
            
            if ($language == 'en')
                return view('take_survey', $query);
            else
                return view('take_survey_ar', $query);
        }catch (Exception $e) {
            return view('error');
        }
    }

    public function SurveySolution(Request $request)
    {
        
        $arr = [];
        try{
            if (count($request->question) > 0) {
                if (@$request->survey_employee_id && $request->survey_employee_id) {
                    $survey_employee = SurveyEmployee::find($request->survey_employee_id);
                } else {
                    $survey_employee = SurveyEmployee::create([
                        'employee_id' => $request->employee_id,
                        'survey_id' => $request->survey,
                        'survey_company_id'=>$request->survey_company,
                        'survey_time_at'=>date('Y-m-d H:i:s'),
                    ]);
                }
                //$survey_employee->solutions()->delete();
                foreach ($request->question as $q_id => $ans) {
                    $question = SurveyQuestion::find($q_id);
                    if ($question->type == 3) {
                        foreach ($ans as $an) {
                            array_push($arr,[
                                'survey_employee_id' => $survey_employee->id,
                                'question_id' => $q_id,
                                'answer_id' => $an,
                                'created_at'=>date('Y-m-d H:i:s'),
                                'updated_at'=> date('Y-m-d H:i:s')
                            ]);
    //                        SurveySolution::create([
    //                            'survey_employee_id' => $survey_employee->id,
    //                            'question_id' => $q_id,
    //                            'answer_id' => $an
    //                        ]);
                        }
                    } else {
                        array_push($arr,[
                            'survey_employee_id' => $survey_employee->id,
                            'question_id' => $q_id,
                            'answer_id' => $ans,
                            'created_at'=>date('Y-m-d H:i:s'),
                            'updated_at'=> date('Y-m-d H:i:s')
                        ]);

                    }

                }
            }
            SurveySolution::insert($arr);
            
            $survey_employee->employee()->update(['token' => null]);
            
            
            if ($request->language == 'en')
                return redirect('thank');
            else
                return redirect('thank');

        }catch (Exception $e) {
            return view('error');
        }
    
    }
}
