<?php

namespace App\Http\Controllers;

use App\Model\Company;
use App\Model\SurveyCompany;
use App\Models\SurveyEmployee;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\Empty_;


class CheckQualityController extends Controller
{

   /**
     * Display the specified resource.
     * @return \Illuminate\Contracts\Support\Renderable
     * @param  int $company
     * */
    public function QualityCheck($company )
    {
        $obj = new \stdClass();
        $obj->Check_by_time =$this->Check_By_Time($company);
        $obj->Check_by_value=$this->Check_By_Value($obj->Check_by_time->in_survey);
        $obj->Check_by_Question=$this->Check_By_Question($obj->Check_by_value->in_survey);
        
        //dd($obj->Check_by_Question);
        
        $obj->total_employee=$obj->Check_by_time->total_employee;
        $obj->out_survey=count($obj->Check_by_time->out_survey) + count($obj->Check_by_value->out_survey)+count($obj->Check_by_Question->out_survey);
        $obj->out_survey_percent =round($obj->out_survey/$obj->total_employee *100);
        $obj->quality_check_percent =$this->Quality_Check_Percent($obj->out_survey_percent);
     
        $query['obj'] =$obj;
       //dd($query);
        return view('check-quality',$query);
    }

     /**
     * Display the specified resource.
     * @return \Illuminate\Contracts\Support\Renderable
     * @param  int $company
     * */
    public function Check_By_Time($survey_company_id)
    {
      $obj = new \stdClass();
      $out_survey=[];
      $in_survey=[];
      
      $query['survey']  =DB::select("SELECT SS.survey_employee_id  as employee_id, min(SE.survey_time_at) as min_created,max(SS.updated_at) as max_updated ,TIMESTAMPDIFF(SECOND, max(SE.survey_time_at) ,min( SS.updated_at) )/60 as time
      FROM survey_solutions as SS
      INNER JOIN answers as A ON SS.answer_id = A.id
      INNER JOIN survey_employees as SE ON SS.survey_employee_id = SE.id
      INNER JOIN company_employees as CE ON CE.employee_id = SE.employee_id
      INNER JOIN survey_companies as SC ON SC.id = SE.survey_company_id 
      where SC.id  =  $survey_company_id AND SE.employee_id 
      GROUP BY employee_id");

       $obj->total_employee= count($query['survey']);
      
      foreach($query['survey'] as $survey){
        if($survey->time < 5){
          array_push($out_survey, $survey);
        }else{
          array_push($in_survey , $survey);
        }
      }

      $obj->out_survey=$out_survey;
      $obj->in_survey= $in_survey;
      return $obj;
    }

    /**
     * Display the specified resource.
     * @return \Illuminate\Contracts\Support\Renderable
     * @param  [] $employee_in_survey
     * */
    public function Check_By_Value($employee_in_survey){
      $obj = new \stdClass();
      $out_survey=[];
      $in_survey=[];
      foreach($employee_in_survey as $emp){
        $query  =DB::select("SELECT survey_employee_id,max(answers.VALUE) as Max,MIN(answers.VALUE) as Min FROM `survey_solutions` join answers on `survey_solutions`.`answer_id` = answers.id 
         where `survey_solutions`.question_id !=49 and `survey_solutions`.survey_employee_id=$emp->employee_id
        GROUP BY survey_employee_id");
        if($query[0]->Max ==$query[0]->Min){
            array_push($out_survey , $emp);
        }else{
            array_push($in_survey , $emp);
        }
      }
      $obj->out_survey=$out_survey;
      $obj->in_survey= $in_survey;
      return $obj;
    }

    
    /**
     * Display the specified resource.
     * @return \Illuminate\Contracts\Support\Renderable
     * @param  [] $employee
     * */
    public function Check_By_Question($employee){

      $obj = new \stdClass();
      $out_survey=[];
      $in_survey=[];
      foreach($employee as $emp){
        $query  =DB::select("SELECT answers.VALUE  as value FROM `survey_solutions` join answers on `survey_solutions`.`answer_id` = answers.id 
         where  `survey_solutions`.survey_employee_id=$emp->employee_id and (`survey_solutions`.question_id =3 or `survey_solutions`.question_id =29 )");
        if($query[0]->value !=$query[1]->value){
          array_push($out_survey , $emp);
        }else{
          array_push($in_survey , $emp);
        }
      }

      $obj->out_survey=$out_survey;
      $obj->in_survey= $in_survey;
      return $obj;
    }

     /**
     * Display the specified resource.
     * @param  float $out_survey_percent
     * */
    public function Quality_Check_Percent($out_survey_percent)
    {
      if($out_survey_percent <=5)
       return  "100";
      else if($out_survey_percent <=10)
      return  "80";
      else if($out_survey_percent <=15)
      return  "50";
      else
      return  "0";
    }
}
