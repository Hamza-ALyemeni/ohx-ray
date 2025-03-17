<?php

namespace App\Http\Controllers;

use App\Helpers\ImageHelper;
use App\Http\Resources\Company\CompanyCollection;
use App\Http\Resources\Company\CompanyResource;
use App\Imports\CompaniesImport;
use App\Jobs\SendEmailJob;
use App\Model\Company;
use App\Model\Country;
use App\Model\CompanyType;
use App\Model\Employee;
use App\Model\Industry;
use App\Model\SurveyCompany;
use App\Models\Company as ModelsCompany;
use App\Models\Survey;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session as FacadesSession;
use Session;
use Illuminate\Support\Facades\DB as FacadesDB;


class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $query['data'] = Company::with('user.country')->withCount('employees','surveys')->orderBy('id', 'desc')->get();
        return view('companies',$query);
    }

    public function create()
    {
        $query['countries'] = Country::all();
        $query['company_type'] = CompanyType::all();
        $query['industries'] = Industry::all();
        return view('create-company',$query);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function importCompany(Request $request)
    {
        FacadesSession::flash('tab', 'second');
        Excel::import(new CompaniesImport(), $request->file('file'));

        return redirect('company')->with('success', 'The Companies has been added successfully');
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'name'=>'required',
            // 'logo' => 'required|mimes:jpeg,jpg,png,gif',
            'country_id' => 'required|exists:countries,id',
            //'company_id' => 'required|exists:company_types,id',
            //'industry_id' => 'required|exists:industries,id',
            // 'location'=>'required',
            // 'address'=>'required',
            'email' => 'required|email|max:255|unique:users,email',
            'phone' => 'required|max:255|unique:users,phone',
            'password' => 'required|max:50|confirmed',
        ]);
        $logo = Company::$default_logo_image;
        if($request->logo)
            $logo = ImageHelper::save($request->logo, Company::$logo_folder);
        $data = $request->all();
        //dd($data);
        $data['f_name'] = $request->name;
        $data['role'] = 1;
        $data['verification_code'] = 1234;
        $data['logo'] =$logo;
        $user = User::create($data);
        $data['name_ar'] = $request->name_ar;
        $data['user_id'] = $user->id;
        $data['company_type_id'] = $request->company_type_id;
        $data['industry_id'] = $request->industry_id;
        $data['logo'] = $logo;
        
        $company = Company::create($data);

        return redirect('company')->with('success','The company has been added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Company $company)
    {
        
        $query1['data'] = Company::find($company->id);
       $query1['data']['employees'] = FacadesDB::table('companies')
            ->join('company_employees', 'company_employees.company_id', '=', 'companies.id')
            ->join('users', 'company_employees.employee_id', '=', 'users.id')
            ->where('companies.id', '=', $company->id)
            //->where('users.role', '=', 3)
           // ->select('users.id','users.f_name','users.l_name','users.email','users.gender')
            ->take(600)
            ->get();
        //   dd($query['data']);
        $query1['Employee']=Employee ::where('role','=',0)->get();
         
        return view('companies-profile',$query1);
    }

    public function edit(Company $company)
    {
        $query['countries'] = Country::all();
        $query['company_types'] = CompanyType::all();
        $query['industries'] = Industry::all();
        $query['single'] = $company;
        return view('edit-company',$query);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Company $company)
    {
        $this->validate($request, [
            'name'=>'required',
            'logo' => 'nullable|mimes:jpeg,jpg,png,gif',
            'country_id' => 'required|exists:countries,id',
            'location'=>'required',
            'address'=>'required',
            'email' =>  'required|email|max:255|unique:users,email,' . $company->user_id,
            'phone' => 'required|max:255|unique:users,phone,' . $company->user_id,
            'password' => 'nullable',
        ]);
        $data = $request->all();
        if($request->logo) {
            ImageHelper::delete($company->getAttributes()['logo'], Company::$logo_folder);
            $data['logo'] = ImageHelper::save($request->logo, Company::$logo_folder);
        }
        $company->update($data);
        if($data['password'])
            unset($data['password']);
        $company->user->update($data);
        return redirect('company')->with('success','The company has been Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Company $company)
    {
        $company->delete();
        $company->user->delete();
        return redirect('company')->with('success','The company has been deleted successfully');
    }


    public function send_specific_mails(Request $request)
    {
        if($request->survey_id!=null)
            $survey = Survey::find($request->survey_id);
        
        $send_to = $survey->send_to;
        $employees = Employee::find($request->Employees_id);

        if($request->survey_id==1)
        $surveycompany = SurveyCompany::where('company_id','=', $request->company_id)->orderBy('id', 'DESC')->first();
        else
        $surveycompany = SurveyCompany::create([
            'company_id' => $request->company_id,
            'survey_id' => $request->survey_id,
        ]);

       // dd($employees);
            foreach ($employees as $employee) {

                if(!$employee->token){
                    $token = Str::random(25);
                    $employee->token = $token;
                    $employee->save();
                }else{
                    $token = $employee->token;
                }
                if($request->survey_id==4)$email['survey_type'] =1;
                $email['company']=Company::find($request->company_id);
                $email['company_name'] = $email['company']->name;
                $email['company_name_ar'] = $email['company']->name_ar;
                $email['survey_company_id'] = $surveycompany->id;
                $email['survey'] = $survey;
                $email['to'] = $employee->email;
                $email['token'] = $token;
                dispatch(new SendEmailJob($email));
//                send_email($email);
                $send_to++;
            }
        $survey->update(['send_to' => $send_to]);
        return redirect('company/'.$request->company_id);
    }
}
