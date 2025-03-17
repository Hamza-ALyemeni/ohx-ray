<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Model\Survey;
use App\Model\SurveyCompany;
use App\Model\Company;
use App\Model\SurveySolution;

class CompanyReportController extends Controller
{
    
    /**
     * Handles Login Request
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function reportCompany($survey_company_id)
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

        return $query;
   

    }
}
