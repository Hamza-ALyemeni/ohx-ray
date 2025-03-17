<?php

namespace App\Http\Controllers;

use App\Model\CompanyEmployee;
use App\Model\LiveDuration;
use App\Model\Survey;
use App\Model\Company;
use App\Model\SurveyEmployee;
use App\Model\SurveyCompany;
use App\Model\User;
use Auth;
use Illuminate\Support\Facades\DB as FacadesDB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth as FacadesAuth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $query['survey'] = Survey::find(1);
        $query['total_finished_survey'] = SurveyEmployee::has('solutions')->count();
        $query['total_survey_employee'] = SurveyEmployee::count();
        $query['companies'] = Company::orderBy('id', 'desc')->get();
        foreach($query['companies'] as $company){
            $company->no_surveys_done = SurveyEmployee::has('solutions')
                ->join('company_employees','company_employees.employee_id','survey_employees.employee_id')
                ->where('company_employees.company_id',$company->id)->count();
        }
        $query['live_durations'] = LiveDuration::with('survey_company')->whereDate('start_date','<=',date('Y-m-d'))->whereDate('end_date','>=',date('Y-m-d'))->get();
       // dd($query['live_durations']);
        foreach($query['live_durations'] as $live){
            $begin = new \DateTime($live->start_date);
            $end = new \DateTime($live->end_date);
            $lperiod = [];
            for($i = $begin; $i <= $end; $i->modify('+1 day')){
                $object = new \stdClass();
                $object->date = $i->format("Y-m-d");
                $object->number = SurveyEmployee::join('company_employees','company_employees.employee_id','survey_employees.employee_id')
                ->where('company_employees.company_id',$live->company_id)
                ->whereDate('survey_employees.created_at', $i->format("Y-m-d"))->count();
                array_push($lperiod , $object);
            }
            $live->period = $lperiod;
        }

        $query['live_durations2'] = LiveDuration::with('survey_company')->whereDate('start_date','<=',date('Y-m-d'))->whereDate('end_date','>=',date('Y-m-d'))->get();

        $durations = [];
        foreach($query['live_durations2'] as $live){

            $company= Company::where('id',$live->survey_company->company_id)->first();
            $live->company_name=$company->name;
            $live->Total_emplpoyee= CompanyEmployee::where('company_id',$live->survey_company->company_id)->count();

            $live->finished_survey = FacadesDB::table('survey_employees')->select('survey_employees.*')->join('survey_solutions','survey_solutions.survey_employee_id','=','survey_employees.id')->where('survey_company_id',$live->survey_company->id)->groupBy('survey_employees.id')->get();
           
            $live->finished_survey=$live->finished_survey->count();

            $live->Not_finished_survey = $live->Total_emplpoyee - $live->finished_survey;
        }
        

        return view('dashboard',$query);
    }

    public function verify(Request $request)
    {
        $this->validate($request, [
            'verify1' => 'required',
            'verify2' => 'required',
            'verify3' => 'required',
            'verify4' => 'required',
        ]);

        $code = join('', $request->except('_token'));
        //$user = FacadesAuth::user()->where('verification_code', $code)->first();
        $user =  FacadesAuth::viaRequest('custom-token', function (Request $request) {
            return User::where('token', $request->token)->first();
        });
        if ($user) {
            $user['is_verified'] = 1;
            $user->save();
            return  redirect('/verify')->with('success','Verified Successfully');
        } else {
            return redirect('verify')->withErrors([
                'error' => 'Invalid Code',
            ]);
        }
    }
}
