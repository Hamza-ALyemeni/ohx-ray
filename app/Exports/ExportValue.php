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

class exportValue implements   FromArray
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
        }
         
            
    }

    public function array(): array
    {
        $arr = [];
        $arr[3] =  [];

        $Value =Survey::with('questions')->find(4);

        for($i = 1; $i<= $Value->questions->count(); $i++){
            array_push($arr[3] , 'Q'.$i);
        }

            $results = SurveyEmployee::has('solutions')->with(array('solutions.answer' => function($query) {
                $query->orderBy('question_id', 'asc');
            }, 'employee'))->get();
            
            if($this->survey_company_id){
                $results = SurveyEmployee::where('survey_employees.survey_company_id',$this->survey_company_id)->has('solutions')->with(array('solutions.answer' => function($query) {
                    $query->orderBy('question_id', 'asc');
                }, 'employee'))->get();
            }
      
        foreach($results as $key=>$result){
            
                foreach($result->solutions as $ke=>$solution){
                       $arr[4+$key][$ke + 7] = $solution->answer->value;
                }

        }
        
        return $arr;
    }

   
}
