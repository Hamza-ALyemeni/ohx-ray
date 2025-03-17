<?php

namespace App\Http\Controllers;
use App\Exports\exportValue;
use App\Exports\SurveysExport;
use App\Jobs\SendEmailJob;
use App\Model\Answer;
use App\Model\Company;
use App\Model\CompanyType;
use App\Model\Level;
use App\Model\Employee;
use App\Model\Industry;
use App\Model\Survey;
use App\Model\SurveyCompany;
use App\Model\SurveyPhase;
use Illuminate\Support\Str;
use App\Model\SurveyQuestion;
use App\Model\SurveySolution;
use App\Model\SurveyEmployee;
use Auth;
use Excel;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth as FacadesAuth;
use Illuminate\Support\Facades\DB as FacadesDB;
use Maatwebsite\Excel\Facades\Excel as FacadesExcel;
use Validator;
use SendGrid\Mail\Mail;
use App\Imports\ConvertDate;
use Carbon\Carbon;
//use Hijrian;
use MohamedSabil83\LaravelHijrian\Facades\Hijrian;
use Exception;

class SurveyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $query['companies'] = Company::all();

        $user = FacadesAuth::user();
        
        if ($user->role == 0){
            $query['data'] =Survey::all();// FacadesDB::table('surveys')->get();//where('type','!=',1)->
      // dd($query['data'] );
        }else if ($user->role == 1)
            $query['data'] = Survey::whereHas('companies', function ($query) use ($user) {
                $query->where('companies.id', $user->company->id);
            })->paginate(10);
        return view('surveys', $query);
    }

    public function create()
    {
        $query['companies'] = Company::all();
        return view('create-surveys', $query);

    }

    

    public function assign_companies(Request $request)
    {
        set_time_limit(1000000000);

        $survey = Survey::find($request->survey_id);
        //$survey->companies()->sync($request->company_id);
        $company = Company::with('employees')->where('id', $request->company_id)->first();
        //dd($survey);
        $send_to = $survey->send_to;

        $surveycompany = SurveyCompany::create([
            'company_id' => $company->id,
            'survey_id' => $survey->id,
        ]);
        
            $employees = $company->employees;
          
            foreach ($employees as $employee) {

                if(!$employee->token){
                    $token = Str::random(25);
                    $employee->token = $token;
                    $employee->save();
                }else{
                    $token = $employee->token;
                }
                // $email['company_name'] = $company->name;
                // $email['company_name_ar'] = $company->name_ar;
                // $email['survey_company_id'] = $surveycompany->id;
                // $email['survey'] = $survey;
                // $email['to'] = $employee->email;
                // $email['token'] = $token;
                
                //dispatch(new SendEmailJob($email));
                // send_email($email);
                // $send_to++;
            }
        // $survey->update(['send_to' => $send_to]);
        return redirect('survey');
    }
    
    // public function assign_companies(Request $request)
    // {
    //     set_time_limit(1000000000);

    //     // Validate input
    //     $request->validate([
    //         'survey_id' => 'required|exists:surveys,id',
    //         'company_id' => 'required|exists:companies,id',
    //     ]);

    //     // Find survey and company
    //     $survey = Survey::findOrFail($request->survey_id);
    //     $company = Company::with('employees')->findOrFail($request->company_id);

    //     // Calculate the next phase for the company
    //     $latestPhase = SurveyCompany::where('company_id', $company->id)->max('phase');
    //     $newPhase = $latestPhase ? $latestPhase + 1 : 1;

    //     // Create survey-company relationship with phase
    //     $surveycompany = SurveyCompany::create([
    //         'company_id' => $company->id,
    //         'survey_id' => $survey->id,
    //         'phase' => $newPhase, // Add the phase here
    //     ]);

    //     // Process employees
    //     /*$send_to = $survey->send_to;
    //     foreach ($company->employees as $employee) {
    //         $token = $employee->token ?? Str::random(25);
    //         $employee->update(['token' => $token]);

    //         $email = [
    //             'company_name' => $company->name,
    //             'company_name_ar' => $company->name_ar,
    //             'survey' => $survey,
    //             'to' => $employee->email,
    //             'token' => $token,
    //         ];

    //         dispatch(new SendEmailJob($email));
    //         $send_to++;
    //     }

    //     // Update survey
    //     $survey->update(['send_to' => $send_to]);*/

    //     return redirect('survey')->with('success', 'Companies assigned and emails sent successfully.');
    // }

    public function send_specific_mails()
    {
        $survey = Survey::find(1);
        $send_to = $survey->send_to;
        $employees = Employee::whereIn('email',['galtheyabi@moe.gov.sa','Aaljamal@moe.gov.sa','mohamedismaiel12224@gmail.com'])->get();

            foreach ($employees as $employee) {
                $token = Str::random(25);
                $employee->token = $token;
                $employee->save();

                $email['survey'] = $survey;
                $email['to'] = $employee->email;
                $email['token'] = $token;
                dispatch(new SendEmailJob($email));
//                send_email($email);
                $send_to++;
            }
        $survey->update(['send_to' => $send_to]);
        return redirect('survey');
    }

    public function getCompanyPhases(Company $company)
    {
        // Fetch distinct phases for the company
        $phases = $company->survey_company()
                          ->select('id', 'created_at')
                          ->distinct()
                          ->get()
                          ->map(function ($item) use ($company) {
                              return [
                                  'id' => $item->id,
                                  'text' => "{$company->name} -  ({$item->created_at})"
                              ];
                          });

        return response()->json($phases);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
//            'date'=>'required',
            'status' => 'required|in:0,1',
//            'company_id' => 'required|array',
//            'company_id.*' => 'required|exists:companies,id',
            'questions' => 'required|array',
            'questions.*' => 'required',
            'questions_ar' => 'required|array',
            'questions_ar.*' => 'required',
        ], [
            'questions.*.required' => 'All Questions Appear is required',
            'questions_ar.*.required' => 'All Questions Appear is required',
            'company_id.*.required' => 'Select at least One Company'
        ]);
        try {
            FacadesDB::beginTransaction();


            $data = $request->all();
            $data['date'] = date('Y-m-d');
            $survey = Survey::create($data);
            if ($request->company_id && count($request->company_id) > 0)
                $survey->companies()->sync($request->company_id);
            foreach ($request->questions as $key => $question) {
                $q['survey_id'] = $survey->id;
                $q['question'] = $question;
                $q['question_ar'] = $request->questions_ar[$key];
                $q['type'] = $request->type[$key];
                $survey_question = SurveyQuestion::create($q);

                if ($survey_question->type != 2) {
                    if (@$request->answers[$key] && count($request->answers[$key]) > 0) {
                        foreach ($request->answers[$key] as $key_ans => $answer) {
                            if ($answer) {
                                $ans['answer'] = $answer;
                                $ans['answer_ar'] = $request->answers_ar[$key][$key_ans];
                                $ans['question_id'] = $survey_question->id;
                                Answer::create($ans);
                            } else {
                                return redirect()->back()->withInput($request->input())->withErrors([
                                    'answers' => 'Answer is required'
                                ]);
                            }
                        }
                    } else {
                        return redirect()->back()->withInput($request->input())->withErrors([
                            'answers' => 'Answer is required'
                        ]);

                    }

                }
            }
            FacadesDB::commit();

            return redirect('survey')->with(['success', 'The Survey has been added successfully']);
            // all good
        } catch (\Exception $e) {
            FacadesDB::rollback();
            return redirect()->back();

            // something went wrong
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Survey $survey)
    {
        $query['data'] = Survey::with('questions.answers')->find($survey->id);
        foreach ($query['data']->questions as $question) {
            foreach ($question->answers as $answer) {
                $answer->total_answer = SurveySolution::where('question_id', $question->id)->where('answer_id', $answer->id)->count();
            }
        }
        $query['levels'] = Level::all();
        $query['companies'] = Company::all();

        $query['focus_result'] = $query['data']->focus_results([]);
        $query['sort_results'] = [];
        $v = [];
        foreach($query['focus_result'] as $focus){
            foreach($focus['dimensional_results'] as $dimensional){
                foreach($dimensional['dimensional_results'] as $val){
                    array_push($query['sort_results'] , $val);
                    array_push($v , $val['value']);
                }
            }
        }
        array_multisort($v, SORT_DESC, $query['sort_results']);

        $obj = new \stdClass();
        $obj->gender = 1;
        $query['focus_result_male'] = $query['data']->focus_results($obj);
        $query['sort_results_male'] = [];
        $v = [];
        foreach($query['focus_result_male'] as $focus){
            foreach($focus['dimensional_results'] as $dimensional){
                foreach($dimensional['dimensional_results'] as $val){
                    array_push($query['sort_results_male'] , $val);
                    array_push($v , $val['value']);
                }
            }
        }
        array_multisort($v, SORT_DESC, $query['sort_results_male']);


        $obj = new \stdClass();
        $obj->gender = 2;
        $query['focus_result_female'] = $query['data']->focus_results($obj);
        $query['sort_results_female'] = [];
        $v = [];
        foreach($query['focus_result_female'] as $focus){
            foreach($focus['dimensional_results'] as $dimensional){
                foreach($dimensional['dimensional_results'] as $val){
                    array_push($query['sort_results_female'] , $val);
                    array_push($v , $val['value']);
                }
            }
        }
        array_multisort($v, SORT_DESC, $query['sort_results_female']);


        $obj = new \stdClass();
        $obj->level = 1;
        $query['focus_result_top'] = $query['data']->focus_results($obj);
        $query['sort_results_top'] = [];
        $v = [];
        foreach($query['focus_result_top'] as $focus){
            foreach($focus['dimensional_results'] as $dimensional){
                foreach($dimensional['dimensional_results'] as $val){
                    array_push($query['sort_results_top'] , $val);
                    array_push($v , $val['value']);
                }
            }
        }
        array_multisort($v, SORT_DESC, $query['sort_results_top']);

        $obj = new \stdClass();
        $obj->level = 2;
        $query['focus_result_middle'] = $query['data']->focus_results($obj);
        $query['sort_results_middle'] = [];
        $v = [];
        foreach($query['focus_result_middle'] as $focus){
            foreach($focus['dimensional_results'] as $dimensional){
                foreach($dimensional['dimensional_results'] as $val){
                    array_push($query['sort_results_middle'] , $val);
                    array_push($v , $val['value']);
                }
            }
        }
        array_multisort($v, SORT_DESC, $query['sort_results_middle']);

        $obj = new \stdClass();
        $obj->level = 3;
        $query['focus_result_employee'] = $query['data']->focus_results($obj);
        $query['sort_results_employee'] = [];
        $v = [];
        foreach($query['focus_result_employee'] as $focus){
            foreach($focus['dimensional_results'] as $dimensional){
                foreach($dimensional['dimensional_results'] as $val){
                    array_push($query['sort_results_employee'] , $val);
                    array_push($v , $val['value']);
                }
            }
        }
        array_multisort($v, SORT_DESC, $query['sort_results_employee']);



        $obj = new \stdClass();
        $obj->age_range = 1;
        $query['focus_result_25'] = $query['data']->focus_results($obj);
        $query['sort_results_25'] = [];
        $v = [];
        foreach($query['focus_result_25'] as $focus){
            foreach($focus['dimensional_results'] as $dimensional){
                foreach($dimensional['dimensional_results'] as $val){
                    array_push($query['sort_results_25'] , $val);
                    array_push($v , $val['value']);
                }
            }
        }
        array_multisort($v, SORT_DESC, $query['sort_results_25']);

        $obj = new \stdClass();
        $obj->age_range = 2;
        $query['focus_result_26_34'] = $query['data']->focus_results($obj);
        $query['sort_results_26_34'] = [];
        $v = [];
        foreach($query['focus_result_26_34'] as $focus){
            foreach($focus['dimensional_results'] as $dimensional){
                foreach($dimensional['dimensional_results'] as $val){
                    array_push($query['sort_results_26_34'] , $val);
                    array_push($v , $val['value']);
                }
            }
        }
        array_multisort($v, SORT_DESC, $query['sort_results_26_34']);

        $obj = new \stdClass();
        $obj->age_range = 3;
        $query['focus_result_35_44'] = $query['data']->focus_results($obj);
        $query['sort_results_35_44'] = [];
        $v = [];
        foreach($query['focus_result_35_44'] as $focus){
            foreach($focus['dimensional_results'] as $dimensional){
                foreach($dimensional['dimensional_results'] as $val){
                    array_push($query['sort_results_35_44'] , $val);
                    array_push($v , $val['value']);
                }
            }
        }
        array_multisort($v, SORT_DESC, $query['sort_results_35_44']);

        $obj = new \stdClass();
        $obj->age_range = 4;
        $query['focus_result_45'] = $query['data']->focus_results($obj);
        $query['sort_results_45'] = [];
        $v = [];
        foreach($query['focus_result_45'] as $focus){
            foreach($focus['dimensional_results'] as $dimensional){
                foreach($dimensional['dimensional_results'] as $val){
                    array_push($query['sort_results_45'] , $val);
                    array_push($v , $val['value']);
                }
            }
        }
        array_multisort($v, SORT_DESC, $query['sort_results_45']);



        $obj = new \stdClass();
        $obj->nationality = 1;
        $query['focus_result_local'] = $query['data']->focus_results($obj);
        $query['sort_results_local'] = [];
        $v = [];
        foreach($query['focus_result_local'] as $focus){
            foreach($focus['dimensional_results'] as $dimensional){
                foreach($dimensional['dimensional_results'] as $val){
                    array_push($query['sort_results_local'] , $val);
                    array_push($v , $val['value']);
                }
            }
        }
        array_multisort($v, SORT_DESC, $query['sort_results_local']);

        $obj = new \stdClass();
        $obj->nationality = 2;
        $query['focus_result_expat'] = $query['data']->focus_results($obj);
        $query['sort_results_expat'] = [];
        $v = [];
        foreach($query['focus_result_expat'] as $focus){
            foreach($focus['dimensional_results'] as $dimensional){
                foreach($dimensional['dimensional_results'] as $val){
                    array_push($query['sort_results_expat'] , $val);
                    array_push($v , $val['value']);
                }
            }
        }
        array_multisort($v, SORT_DESC, $query['sort_results_expat']);


        return view('new-report', $query);

    }
    public function reportCompany($survey_company_id,$type =null)
    {

        $query['survey_company']=SurveyCompany::find($survey_company_id);
        $company=$query['survey_company']->company_id;
        $survey_id=$query['survey_company']->survey_id;
        $query['company'] = Company::find($company);
        $query['data'] = Survey::with('questions.answers')->find($survey_id);
        foreach ($query['data']->questions as $question) {
            foreach ($question->answers as $answer) {
                $answer->total_answer = SurveySolution::where('question_id', $question->id)->where('answer_id', $answer->id)->count();
            }
        }
        $obj = new \stdClass();
        $obj->company_id[0] = $company;
        $obj->survey_company_id[0] = $survey_company_id;
        $query['focus_result'] = $query['data']->focus_results($obj);
        $query['sort_results'] = [];
        $v = [];
        foreach($query['focus_result'] as $focus){
            foreach($focus['dimensional_results'] as $dimensional){
                foreach($dimensional['dimensional_results'] as $val){
                    array_push($query['sort_results'] , $val);
                    array_push($v , $val['value']);
                }
            }
        }
        array_multisort($v, SORT_DESC, $query['sort_results']);

        $obj = new \stdClass();
        $obj->gender = 1;
        $obj->company_id[0] = $company;
        $obj->survey_company_id[0] = $survey_company_id;

        $query['focus_result_male'] = $query['data']->focus_results($obj);
        $query['sort_results_male'] = [];
        $v = [];
        foreach($query['focus_result_male'] as $focus){
            foreach($focus['dimensional_results'] as $dimensional){
                foreach($dimensional['dimensional_results'] as $val){
                    array_push($query['sort_results_male'] , $val);
                    array_push($v , $val['value']);
                }
            }
        }
        array_multisort($v, SORT_DESC, $query['sort_results_male']);


        $obj = new \stdClass();
        $obj->gender = 2;
        $obj->company_id[0] = $company;
        $obj->survey_company_id[0] = $survey_company_id;

        $query['focus_result_female'] = $query['data']->focus_results($obj);
        $query['sort_results_female'] = [];
        $v = [];
        foreach($query['focus_result_female'] as $focus){
            foreach($focus['dimensional_results'] as $dimensional){
                foreach($dimensional['dimensional_results'] as $val){
                    array_push($query['sort_results_female'] , $val);
                    array_push($v , $val['value']);
                }
            }
        }
        array_multisort($v, SORT_DESC, $query['sort_results_female']);


        $obj = new \stdClass();
        $obj->level = 1;
        $obj->company_id[0] = $company;
        $obj->survey_company_id[0] = $survey_company_id;

        $query['focus_result_top'] = $query['data']->focus_results($obj);
        $query['sort_results_top'] = [];
        $v = [];
        foreach($query['focus_result_top'] as $focus){
            foreach($focus['dimensional_results'] as $dimensional){
                foreach($dimensional['dimensional_results'] as $val){
                    array_push($query['sort_results_top'] , $val);
                    array_push($v , $val['value']);
                }
            }
        }
        array_multisort($v, SORT_DESC, $query['sort_results_top']);

        $obj = new \stdClass();
        $obj->level = 2;
        $obj->company_id[0] = $company;
        $obj->survey_company_id[0] = $survey_company_id;

        $query['focus_result_middle'] = $query['data']->focus_results($obj);
        $query['sort_results_middle'] = [];
        $v = [];
        foreach($query['focus_result_middle'] as $focus){
            foreach($focus['dimensional_results'] as $dimensional){
                foreach($dimensional['dimensional_results'] as $val){
                    array_push($query['sort_results_middle'] , $val);
                    array_push($v , $val['value']);
                }
            }
        }
        array_multisort($v, SORT_DESC, $query['sort_results_middle']);

        $obj = new \stdClass();
        $obj->level = 3;
        $obj->company_id[0] = $company;
        $obj->survey_company_id[0] = $survey_company_id;

        $query['focus_result_employee'] = $query['data']->focus_results($obj);
        $query['sort_results_employee'] = [];
        $v = [];
        foreach($query['focus_result_employee'] as $focus){
            foreach($focus['dimensional_results'] as $dimensional){
                foreach($dimensional['dimensional_results'] as $val){
                    array_push($query['sort_results_employee'] , $val);
                    array_push($v , $val['value']);
                }
            }
        }
        array_multisort($v, SORT_DESC, $query['sort_results_employee']);



        $obj = new \stdClass();
        $obj->age_range = 1;
        $obj->company_id[0] = $company;
        $obj->survey_company_id[0] = $survey_company_id;

        $query['focus_result_25'] = $query['data']->focus_results($obj);
        //dd($query['focus_result_25']);
        $query['sort_results_25'] = [];
        $v = [];
        foreach($query['focus_result_25'] as $focus){
            foreach($focus['dimensional_results'] as $dimensional){
                foreach($dimensional['dimensional_results'] as $val){
                    array_push($query['sort_results_25'] , $val);
                    array_push($v , $val['value']);
                }
            }
        }
        array_multisort($v, SORT_DESC, $query['sort_results_25']);

        $obj = new \stdClass();
        $obj->age_range = 2;
        $obj->company_id[0] = $company;
        $obj->survey_company_id[0] = $survey_company_id;

        $query['focus_result_26_34'] = $query['data']->focus_results($obj);
        $query['sort_results_26_34'] = [];
        $v = [];
        foreach($query['focus_result_26_34'] as $focus){
            foreach($focus['dimensional_results'] as $dimensional){
                foreach($dimensional['dimensional_results'] as $val){
                    array_push($query['sort_results_26_34'] , $val);
                    array_push($v , $val['value']);
                }
            }
        }
        array_multisort($v, SORT_DESC, $query['sort_results_26_34']);

        $obj = new \stdClass();
        $obj->age_range = 3;
        $obj->company_id[0] = $company;
        $obj->survey_company_id[0] = $survey_company_id;

        $query['focus_result_35_44'] = $query['data']->focus_results($obj);
        $query['sort_results_35_44'] = [];
        $v = [];
        foreach($query['focus_result_35_44'] as $focus){
            foreach($focus['dimensional_results'] as $dimensional){
                foreach($dimensional['dimensional_results'] as $val){
                    array_push($query['sort_results_35_44'] , $val);
                    array_push($v , $val['value']);
                }
            }
        }
        array_multisort($v, SORT_DESC, $query['sort_results_35_44']);

        $obj = new \stdClass();
        $obj->age_range = 4;
        $obj->company_id[0] = $company;
        $obj->survey_company_id[0] = $survey_company_id;

        $query['focus_result_45'] = $query['data']->focus_results($obj);
        $query['sort_results_45'] = [];
        $v = [];
        foreach($query['focus_result_45'] as $focus){
            foreach($focus['dimensional_results'] as $dimensional){
                foreach($dimensional['dimensional_results'] as $val){
                    array_push($query['sort_results_45'] , $val);
                    array_push($v , $val['value']);
                }
            }
        }
        array_multisort($v, SORT_DESC, $query['sort_results_45']);



        $obj = new \stdClass();
        $obj->nationality = 1;
        $obj->company_id[0] = $company;
        $obj->survey_company_id[0] = $survey_company_id;

        $query['focus_result_local'] = $query['data']->focus_results($obj);
        $query['sort_results_local'] = [];
        $v = [];
        foreach($query['focus_result_local'] as $focus){
            foreach($focus['dimensional_results'] as $dimensional){
                foreach($dimensional['dimensional_results'] as $val){
                    array_push($query['sort_results_local'] , $val);
                    array_push($v , $val['value']);
                }
            }
        }
        array_multisort($v, SORT_DESC, $query['sort_results_local']);
        //dd($query['sort_results_local']);
        $obj = new \stdClass();
        $obj->nationality = 2;
        $obj->company_id[0] = $company;
        $obj->survey_company_id[0] = $survey_company_id;

        $query['focus_result_expat'] = $query['data']->focus_results($obj);
        $query['sort_results_expat'] = [];
        $v = [];
        foreach($query['focus_result_expat'] as $focus){
            foreach($focus['dimensional_results'] as $dimensional){
                foreach($dimensional['dimensional_results'] as $val){
                    array_push($query['sort_results_expat'] , $val);
                    array_push($v , $val['value']);
                }
            }
        }
        array_multisort($v, SORT_DESC, $query['sort_results_expat']);

        ///////////////////
        $obj = new \stdClass();
        $obj->section = 1;
        $obj->company_id[0] = $company;
        $obj->survey_company_id[0] = $survey_company_id;

        $query['focus_result_support_service'] = $query['data']->focus_results($obj);
        $query['sort_results_support_service'] = [];
        $v = [];
        foreach($query['focus_result_support_service'] as $focus){
            foreach($focus['dimensional_results'] as $dimensional){
                foreach($dimensional['dimensional_results'] as $val){
                    array_push($query['sort_results_support_service'] , $val);
                    array_push($v , $val['value']);
                }
            }
        }
        array_multisort($v, SORT_DESC, $query['sort_results_support_service']);

        $obj = new \stdClass();
        $obj->section = 2;
        $obj->company_id[0] = $company;
        $obj->survey_company_id[0] = $survey_company_id;

        $query['focus_result_general_supervisor'] = $query['data']->focus_results($obj);
        $query['sort_results_general_supervisor'] = [];
        $v = [];
        foreach($query['focus_result_general_supervisor'] as $focus){
            foreach($focus['dimensional_results'] as $dimensional){
                foreach($dimensional['dimensional_results'] as $val){
                    array_push($query['sort_results_general_supervisor'] , $val);
                    array_push($v , $val['value']);
                }
            }
        }
        array_multisort($v, SORT_DESC, $query['sort_results_general_supervisor']);


        $obj = new \stdClass();
        $obj->section = 3;
        $obj->company_id[0] = $company;
        $obj->survey_company_id[0] = $survey_company_id;

        $query['focus_result_projects_change'] = $query['data']->focus_results($obj);
        $query['sort_results_projects_change'] = [];
        $v = [];
        foreach($query['focus_result_projects_change'] as $focus){
            foreach($focus['dimensional_results'] as $dimensional){
                foreach($dimensional['dimensional_results'] as $val){
                    array_push($query['sort_results_projects_change'] , $val);
                    array_push($v , $val['value']);
                }
            }
        }
        array_multisort($v, SORT_DESC, $query['sort_results_projects_change']);


        $obj = new \stdClass();
        $obj->section = 4;
        $obj->company_id[0] = $company;
        $obj->survey_company_id[0] = $survey_company_id;

        $query['focus_result_planning_performance'] = $query['data']->focus_results($obj);
        $query['sort_results_planning_performance'] = [];
        $v = [];
        foreach($query['focus_result_planning_performance'] as $focus){
            foreach($focus['dimensional_results'] as $dimensional){
                foreach($dimensional['dimensional_results'] as $val){
                    array_push($query['sort_results_planning_performance'] , $val);
                    array_push($v , $val['value']);
                }
            }
        }
        array_multisort($v, SORT_DESC, $query['sort_results_planning_performance']);


      if($type ==Null)
        return view('new-report', $query);
      else
        return view('dashboard-report', $query);

    }

    public function exportComparison1(Request $request)
    {
        
        $request_1=new Request;
        $request_1['from']=$request->from;
        $request_1['company_types_1']=$request->company_types_1;
        $request_1['industry_1']=$request->industry_1;
        $request_1['phase_1']=$request->phase_1;

           ini_set('memory_limit', '1000M');
           
         return  FacadesExcel::download(new SurveysExport($request_1,'from'), 'surveys.xlsx');
                 
    }

    public function exportComparison2(Request $request)
    {
        $request_2=new Request;
        $request_2['to']=$request->to;
        $request_2['company_types_2']=$request->company_types_2;
        $request_2['industry_2']=$request->industry_2;
        $request_2['phase_2']=$request->phase_2;

           ini_set('memory_limit', '1000M');

         return  FacadesExcel::download(new SurveysExport($request_2,'to'), 'surveys.xlsx');
                 
    }
    
    // public function exportReport(Request $request,$company_id = false)
    // {
    //     ini_set('memory_limit', '1000M');
    //     return FacadesExcel::download(new SurveysExport($request,$company_id), 'surveys.xlsx');
    // }

    public function exportReport(Request $request, $company_id = false)
    {
        $export = new SurveysExport($request, $company_id);
        return $export->exportPdf2($request, $company_id);
    }

    public function testPdfView(){
        return view('test_surveys_pdf');
    }

    public function exportValue(Request $request,$company_id = false)
    {
        ini_set('memory_limit', '1000M');
        return FacadesExcel::download(new exportValue($request,$company_id), 'values.xlsx');
    }
    public function comparison(Request $request, Survey $survey)
    {
        
        $query['data'] = Survey::with('questions.answers')->find($survey->id);
        foreach ($query['data']->questions as $question) {
            foreach ($question->answers as $answer) {
                $answer->total_answer = SurveySolution::where('question_id', $question->id)->where('answer_id', $answer->id)->count();
            }
        }
        $query['levels'] = Level::all();
        $query['companies'] = Company::all();
        $query['company_types'] = CompanyType::all();
        $query['industries'] = Industry::all();
        $query['survey_phases'] = SurveyPhase::all();

        $query['focus_result_1'] = $query['data']->focus_results($request,'from');
        $query['focus_result_2'] = $query['data']->focus_results($request, 'to');
         //dd($query['focus_result_2']);
        if($query['focus_result_1'] == 0 || $query['focus_result_2'] == 0)
            return redirect('survey')->with('error','The report shows no less than 5 surveys');
        return view('comparison', $query);

    }
    public function edit(Survey $survey)
    {
        $query['companies'] = Company::all();
        $query['survey'] = Survey::with('questions.answers', 'companies')->find($survey->id);;
        return view('edit-surveys', $query);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Survey $survey)
    {
        
        $this->validate($request, [
            'title' => 'required',
//            'date'=>'required',
//            'status' => 'required|in:0,1',
//            'company_id' => 'required|array',
//            'company_id.*' => 'required|exists:companies,id',
            'questions' => 'required|array',
            'questions.*' => 'required',
            'questions_ar' => 'required|array',
            'questions_ar.*' => 'required',
        ], [
            'questions.*.required' => 'All Questions Appear is required',
            'questions_ar.*.required' => 'All Questions Appear is required',
            'company_id.*.required' => 'Select at least One Company'
        ]);
              
        try {
            FacadesDB::beginTransaction();


            $data = $request->all();
            $data['date'] = date('Y-m-d');
            $survey->update($data);
          //  $survey->questions()->delete();
            $q_arr = [];

           
            if ($request->company_id && count($request->company_id) > 0)
                $survey->companies()->sync($request->company_id);

            
            foreach ($request->questions as $key => $question) {
                if (@$request->questions_id[$key] && $request->questions_id[$key]) {
                    $survey_question = SurveyQuestion::find($request->questions_id[$key]);
                    $survey_question->update([
                        'question' => $question,
                        'question_ar' => $request->questions_ar[$key],
                        'type' => $request->type[$key]
                    ]);
                    array_push($q_arr, $request->questions_id[$key]);
                } else {
                    $q['survey_id'] = $survey->id;
                    $q['question'] = $question;
                    $q['question_ar'] = $request->questions_ar[$key];
                    $q['type'] = $request->type[$key];

                    $survey_question = SurveyQuestion::create($q);
                    array_push($q_arr, $survey_question->id);
                }
                $a_arr = [];
                if ($survey_question->type != 2) {
                    if (@$request->answers[$key] && count($request->answers[$key]) > 0) {
                        foreach ($request->answers[$key] as $key_ans => $answer) {
                             
                            if (@$request->answers_id[$key][$key_ans] && $request->answers_id[$key][$key_ans]) {
                                $answ = Answer::find($request->answers_id[$key][$key_ans]);
                                $answ->update([
                                    'answer' => $answer,
                                    'answer_ar' => $request->answers_ar[$key][$key_ans]
                                ]);
                                array_push($a_arr, $request->answers_id[$key][$key_ans]);

                            } else {
                                if ($answer) {
                                    
                                    $ans['answer'] = $answer;
                                    $ans['answer_ar'] = $request->answers_ar[$key][$key_ans];
                                    $ans['question_id'] = $survey_question->id;
                                    $ans['value'] =100;
                                    $x = Answer::create($ans);
                                    array_push($a_arr, $x->id);

                                } else {
                                    return redirect()->back()->withInput($request->input())->withErrors([
                                        'answers' => 'Answer is required'
                                    ]);
                                }
                            }

                        }
                    } else {
                        return redirect()->back()->withInput($request->input())->withErrors([
                            'answers' => 'Answer is required'
                        ]);

                    }

                }
                $survey_question->answers()->whereNotIn('id', $a_arr)->delete();

            }
            $survey->questions()->whereNotIn('id', $q_arr)->delete();

            FacadesDB::commit();

            return redirect('survey')->with(['success', 'The Survey has been added successfully']);
            // all good
        } catch (\Exception $e) {
            FacadesDB::rollback();
            return redirect()->back();

            // something went wrong
        }
    }

    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
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
