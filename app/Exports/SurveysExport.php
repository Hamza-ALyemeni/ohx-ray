<?php

namespace App\Exports;
use App\Model\CompanyType;
use App\Model\Industry;
use App\Model\Survey;
use App\Model\SurveyEmployee;
use App\Model\SurveyPhase;
use App\Model\SurveySolution;
use App\Model\CompanyEmployee;
use App\Model\SurveyCompany;
use App\Models\Company;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithCustomStartCell;
use Maatwebsite\Excel\Concerns\FromArray;
use Illuminate\Http\Request;
use PhpParser\Node\NullableType;
// use Barryvdh\DomPDF\Facade\Pdf;
use Barryvdh\Snappy\Facades\SnappyPdf;



class SurveysExport implements   FromArray
{
    /**
    * @return \Illuminate\Support\Collection
    */

    protected $company_id;
    protected $survey_company_id;
    protected Request $request;
    protected $type;
    public function __construct(Request $request ,$survey_company_id = false)
    {
        if($survey_company_id && is_numeric($survey_company_id) && $survey_company_id > 0){
            $quray=SurveyCompany::find($survey_company_id);
            $this->company_id = $quray->company_id;
            $this->survey_company_id = $survey_company_id;
        }else{
            $this->type = $survey_company_id;
            $this->request = $request;
        }
            
    }

    public function array(): array
    {
        ini_set('memory_limit', '80000M');
        $arr = [];
        $arr[0] =  [];
        $arr[1] = ['','','','','','','','Direction','','','','','','Agility','','','','','','External Relation','','','','','','Sustainability','','','','','','Accountability','','','','','','Leadership','','','','','','Working Environment','','','','','','Motivation'];
        $arr[2]  = ['','','','','','','','Vision','','Values','','Strategy','','Simplicity','','Flexibility','','Stability','','Customer','','Competitor','','Governor','','Social','','Economy','','Environment','','Responsibility','','Trustworthiness','','Commitment','','Democratic','','Autocratic','','Transformational','','Trusting','','Fairness','','Respect','','Reward' , '' , 'Inspire Leader' , '','Recognition'];
        $arr[3]  = ['Sn','Gender','Age','Nationality','Department','Admin Level','Section'];
        for($i = 1; $i<=48; $i++){
            array_push($arr[3] , 'Q'.$i);
        }
        //array_push($arr[3] , 'Location');

            /*$results = SurveyEmployee::has('solutions')->with(array('solutions.answer' => function($query) {
                $query->orderBy('question_id', 'asc');
            }, 'employee'))->get();*/
            
            if($this->survey_company_id){
                $results = SurveyEmployee::where('survey_employees.survey_company_id',$this->survey_company_id)->has('solutions')->with(array('solutions.answer' => function($query) {
                    $query->orderBy('question_id', 'asc');
                }, 'employee'))->get();
            }elseif($this->request){
                $results=$this->comparison($this->request);
            }

            
      
        foreach($results as $key=>$result){
            
                $arr[4+$key][0] =$result->employee->email; //$key+1;
                $arr[4+$key][1] = ($result->employee->gender==1)?"m":(($result->employee->gender == 2)?"f":"");
                $arr[4+$key][2] = $result->employee->age;
                $arr[4+$key][3] = ($result->employee->country)?$result->employee->country->country_name : "";
                $arr[4+$key][4] = ($result->employee->sec)?$result->employee->sec->name : "";
                $arr[4+$key][5] = ($result->employee->level)?$result->employee->level->level : "";
                
               
                foreach($result->solutions as $ke=>$solution){
                    if($ke < 66){
                        if($solution->answer->value!=Null )
                          $arr[4+$key][$ke + 6] = $solution->answer->value;
                    }
                }
                //dd($ke);
               // $arr[4+$key][75] = $result->employee->f_name;            

        }
        // return $query['data']->focus_results([]);
        //dd($arr);
        
        return $arr;
    }

    public function comparison(Request $request){

            $phase="";
            $company_id =Company::pluck('id')->toArray();
            $company_types=CompanyType::pluck('id')->toArray();
            $industry=Industry::pluck('id')->toArray();
            $phase = SurveyPhase::pluck('id')->toArray();

                if ($request->from && count($request->from ) > 0 && $request->from[0] != 0)
                    $company_id = $request->from;
                    
                if ($request->company_types_1 && count($request->company_types_1 ) > 0  && $request->company_types_1[0] != 0)
                    $company_types =$request->company_types_1;

                if ($request->industry_1 && count($request->industry_1 ) > 0  && $request->industry_1[0] != 0)
                    $industry=$request->industry_1;        

                if ($request->phase_1 && count($request->phase_1 ) > 0  && $request->phase_1[0] != 0)
                    $phase = $request->phase_1;
                if ($request->to && count($request->to ) > 0  && $request->to[0] != 0)
                     $company_id = $request->to;

                if (@$request->company_types_2 && count($request->company_types_2 ) > 0  && $request->company_types_2[0] != 0)
                    $company_types =$request->company_types_2;

                if (@$request->industry_2 && count($request->industry_2 ) > 0  && $request->industry_2[0] != 0)
                    $industry=$request->industry_2;

                if (@$request->phase_2 && count($request->phase_2 ) > 0  && $request->phase_2[0] != 0)
                    $phase = $request->phase_2;
                $query = SurveyEmployee::
                select('survey_employees.*')->
                join('company_employees as CE','CE.employee_id','=','survey_employees.employee_id')->
                join('companies as CO','CO.id','=','CE.company_id')->
                join('survey_solutions as SS','SS.survey_employee_id','=','survey_employees.id')->
               // join(DB::raw("(SELECT * FROM (SELECT `id`, ROW_NUMBER() OVER (PARTITION BY `company_id` ORDER BY `company_id`) AS phase FROM `survey_companies`) AS subquery GROUP BY phase, `id`) AS SC"), 'SC.id', '=', 'survey_employees.survey_company_id') ->  
                join(DB::raw("(SELECT id, phase FROM (
                    SELECT id, @row_number := IF(@prev_company_id = company_id, @row_number + 1, 1) AS phase, @prev_company_id := company_id
                    FROM survey_companies, (SELECT @row_number := 0, @prev_company_id := NULL) AS vars
                    ORDER BY company_id
                  ) AS subquery GROUP BY phase,`id`)AS SC"), 'SC.id', '=', 'survey_employees.survey_company_id') ->  
                has('solutions')->with(array('solutions.answer' => function($query) {
                    $query->orderBy('question_id', 'asc');
                }, 'employee'))->
                whereIn('CE.company_id' ,$company_id) ->
                whereIn('CO.company_type_id', $company_types)->
                whereIn('CO.industry_id', $industry)->
                whereIn('SC.phase', $phase)->
                groupBy('survey_employees.id')->
                get();

              // dd( $query);
            return $query;    
    }


    // public function exportPdf(Request $request, $survey_company_id = false)
    // {
    //     // Fetch survey data
        
    //     if ($survey_company_id) {
            
    //         $results = SurveyEmployee::where('survey_employees.survey_company_id', $survey_company_id)
    //             ->has('solutions')
    //             ->with(['solutions.answer' => function ($query) {
    //                 $query->orderBy('question_id', 'asc');
    //             }, 'employee'])
    //             ->get();

    //         // Fetch company name and survey date
    //         $surveyCompany = SurveyCompany::find($survey_company_id);
    //         $company_name = $surveyCompany->company->name ?? "Default Company Name";
    //         $company_logo = $surveyCompany->company->logo 
    //         ? public_path('uploads/companies/' . basename($surveyCompany->company->logo)) 
    //         : public_path('uploads/companies/default-logo.png');
    //         $survey_date = optional($surveyCompany->created_at ? 
    //         \Carbon\Carbon::parse($surveyCompany->created_at) : 
    //         now())->format('d-F-Y');


    //     $responseStats = DB::table('survey_employees as se')
    //     ->leftJoin('survey_solutions as ss', 'se.id', '=', 'ss.survey_employee_id')
    //     ->selectRaw('COUNT(DISTINCT se.id) as total, COUNT(DISTINCT ss.survey_employee_id) as responded, (COUNT(DISTINCT ss.survey_employee_id)/COUNT(DISTINCT se.id))*100 as response_rate')
    //     ->where('se.survey_company_id', $survey_company_id)
    //     ->first();

    //     // Gender Distribution
    //     $genderStats = DB::table('survey_employees as se')
    //     ->join('users as u', 'se.employee_id', '=', 'u.id')
    //     ->select('u.gender', DB::raw('COUNT(DISTINCT se.employee_id) as count'))
    //     ->where('se.survey_company_id', $survey_company_id)
    //     ->groupBy('u.gender')
    //     ->get();


    //     // Departments Count
    //     $departmentCount = DB::table('survey_employees as se')
    //     ->join('users as u', 'se.employee_id', '=', 'u.id')
    //     ->where('se.survey_company_id', $survey_company_id)
    //     ->distinct()
    //     ->count('u.section');
    //     // dd($departmentCount);

    //     // Admin Levels Count
    //     $adminLevels = DB::table('survey_employees as se')
    //     ->join('users as u', 'se.employee_id', '=', 'u.id')
    //     ->where('se.survey_company_id', $survey_company_id)
    //     ->distinct()
    //     ->count('u.level_id');

    //     // Age Statistics
    //     $ageStats = DB::table('survey_employees as se')
    //     ->join('users as u', 'se.employee_id', '=', 'u.id')
    //     ->selectRaw('AVG(TIMESTAMPDIFF(YEAR, u.date_of_birth, CURDATE())) as avg_age, MIN(TIMESTAMPDIFF(YEAR, u.date_of_birth, CURDATE())) as min_age, MAX(TIMESTAMPDIFF(YEAR, u.date_of_birth, CURDATE())) as max_age')
    //     ->where('se.survey_company_id', $survey_company_id)
    //     ->first();

    //     // 6. Nationality Stats (Locals & Expats)
    //     $nationalityStats = DB::table('survey_employees as se')
    //     ->join('users as u', 'se.employee_id', '=', 'u.id')
    //     ->selectRaw('
    //         COUNT(DISTINCT u.country_id) as total_nationalities,
    //         SUM(CASE WHEN u.country_id = 184 THEN 1 ELSE 0 END) as local_count,
    //         SUM(CASE WHEN u.country_id != 184 THEN 1 ELSE 0 END) as expat_count
    //     ')
    //     ->where('se.survey_company_id', $survey_company_id)
    //     ->first();


    //     $nationalityCount = DB::table('survey_employees as se')
    //     ->join('users as u', 'se.employee_id', '=', 'u.id')
    //     ->selectRaw('
    //         COUNT(DISTINCT u.country_id) as total_nationalities,
    //     ')
    //     ->where('se.survey_company_id', $survey_company_id)
    //     ->get();


                
    //     } elseif ($request) {
    //         $results = $this->comparison($request);
    //         // Set default values if needed
    //         $company_name = "Default Company Name";
    //         $survey_date = now()->format('d-m-Y');
    //     }

    //     // Load the Blade view and pass data to it
    //     $pdf = SnappyPdf::loadView('surveys_pdf', [
    //         'results' => $results,
    //         'company_name' => $company_name,
    //         'survey_date' => $survey_date,
    //         'logo' => $company_logo,
    //         'responseStats' => $responseStats,
    //         'genderStats' => $genderStats,
    //         'departmentCount' => $departmentCount,
    //         'adminLevels' => $adminLevels,
    //         'ageStats' => $ageStats,
    //         'nationalityStats' => $nationalityStats,
    //     ])->setPaper('a3')->setOption('enable-local-file-access', true);
    //     ;
    // //     >setOption('enable-local-file-access', true) // ✅ Allows local files
    // // ->setOption('disable-smart-shrinking', true) // ✅ Prevents layout breaking
    // // ->setOption('no-stop-slow-scripts', true);;

    //     // Download the PDF
    //     return $pdf->stream('surveys.pdf');
    // }

    function exportPdf2(Request $request, $survey_company_id = false){
        $survey_company = SurveyCompany::find($survey_company_id);
        $survey_id = $survey_company->survey_id;
        $survey = Survey::find($survey_id);
        $nationalitiesCount = $survey->getNationalitiesCount($survey_company_id);
        $responseStats = DB::table('survey_employees as se')
        ->leftJoin('survey_solutions as ss', 'se.id', '=', 'ss.survey_employee_id')
        ->selectRaw('COUNT(DISTINCT se.id) as total, COUNT(DISTINCT ss.survey_employee_id) as responded, (COUNT(DISTINCT ss.survey_employee_id)/COUNT(DISTINCT se.id))*100 as response_rate')
        ->where('se.survey_company_id', $survey_company_id)
        ->first();
        
    if ($survey_company_id) {
        // dd($responseStats);
        $query['responseStats'] = $responseStats;
        $query['ageStats'] = DB::table('survey_employees as se')
        ->join('users as u', 'se.employee_id', '=', 'u.id')
        ->selectRaw('
            AVG(TIMESTAMPDIFF(YEAR, u.date_of_birth, CURDATE())) as avg_age,
            MIN(TIMESTAMPDIFF(YEAR, u.date_of_birth, CURDATE())) as min_age,
            MAX(TIMESTAMPDIFF(YEAR, u.date_of_birth, CURDATE())) as max_age
        ')
        ->where('se.survey_company_id', $survey_company_id)
        ->first();
        $query['nationalitiesCount'] = $nationalitiesCount;
        $query['adminLevelCount'] = DB::table('survey_employees as se')
        ->join('users as u', 'se.employee_id', '=', 'u.id')
        ->where('se.survey_company_id', $survey_company_id)
        ->distinct('u.level_id')
        ->count('u.level_id');
        $query['departmentCount'] = DB::table('survey_employees as se')
        ->join('users as u', 'se.employee_id', '=', 'u.id')
        ->where('se.survey_company_id', $survey_company_id)
        ->distinct()
        ->count('u.section');
        // dd($query['departmentCount']);
        $query['survey_company']=SurveyCompany::find($survey_company_id);
        $company=$query['survey_company']->company_id;
        $survey_id=$query['survey_company']->survey_id;
        $query['company'] = Company::find($company);
        // $query['responseStats'] = $survey->getResponseRate($survey_company_id);
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

        }elseif ($request) {
            $results = $this->comparison($request);
                // Set default values if needed
            $company_name = "Default Company Name";
            $survey_date = now()->format('d-m-Y');
        }

        // dd($query);
        // Load the Blade view and pass data to it
        $pdf = SnappyPdf::loadView('surveys_pdf', $query)->setPaper('a3')->setOption('enable-local-file-access', true);

    
        return $pdf->stream('surveys.pdf');

    }
}
