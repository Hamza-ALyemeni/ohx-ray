<?php

namespace App\Http\Controllers;

use App\Helpers\ImageHelper;
use App\Http\Requests\EmolyeeRequest;
use App\Http\Resources\Employee\EmployeeCollection;
use App\Http\Resources\Employee\EmployeeResource;
use App\Model\Company;
use App\Model\Country;
use App\Model\Employee;
use App\Model\SubLevel;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\EmployeesImport;
use App\Model\CompanyEmployee;
//use Auth;
use Illuminate\Support\Facades\Auth as FacadesAuth;
use Illuminate\Support\Facades\Session as FacadesSession;
use Session;
use Illuminate\Support\Facades\DB as FacadesDB;


class EmployeeController extends Controller
{
    public function index()
    {
        $user = FacadesAuth::user();
        if ($user->role == 0)
            $query['data'] = Employee::withCount('surveys')->paginate(10);
        else if ($user->role == 1) {
            $query['data'] = Employee::whereHas('companies', function ($query) use ($user) {
                $query->where('companies.id', $user->company->id);
            })->withCount('surveys')->paginate(10);
        }
        return view('employees', $query);
    }
    public function importEmployee(Request $request)
    {
        session()->flash('tab', 'second');
        
        Excel::import(new EmployeesImport( $request->company_id),  $request->file('file'));

        return redirect('employee')->with('success', 'The Employee has been added successfully');
    }
    public function create($id = false)
    {
        if ($id) {
            $query['company_id'] = $id;
        } else {
            if (FacadesAuth::user()->role == 1) {
                $query['company_id'] = FacadesAuth::user()->company->id;
            } else {
                return redirect('403');
            }
        }
        $query['countries'] = Country::all();
        $query['levels'] = SubLevel::all();
        return view('create-employee', $query);
    }
    public function store(Request $request)
    {

       /* $this->validate($request, [
            'f_name' => 'required',
            'l_name' => 'required',
            //'logo' => 'required|mimes:jpeg,jpg,png,gif',
            'country_id' => 'required|exists:countries,id',
            'sub_level_id' => 'required|exists:sub_levels,id',
            'location' => 'required',
            'address' => 'required',
            'email' => 'required|email|max:255|unique:users,email',
            'phone' => 'required|max:255|unique:users,phone',
            'password' => 'required|max:50|confirmed',
            'gender' => 'required|in:1,2',
            'date_of_birth' => 'required|date',
        ]);*/
        //dd($request->all());
        $data = $request->all();
        //$data['logo'] = ImageHelper::save($request->logo, Employee::$logo_folder);
        $data['verification_code'] = 1234;
        $data['level_id'] = SubLevel::find($request->sub_level_id)->level_id;
        $employee = Employee::create($data);
        $employee->companies()->sync($request->company_id);
        if (FacadesAuth::user()->role == 1)
            return redirect('employee')->with('success', 'The Employee has been added successfully');
        else
            return redirect('company/' . $request->company_id)->with('success', 'The Employee has been added successfully');
    }
    public function show(Employee $employee)
    {
        return response()->json([
            'success' => 1,
            'data' => new EmployeeResource($employee),
        ], 200);
    }

    public function edit(Employee $employee)
    {
        $query['countries'] = Country::all();
        $query['single'] = $employee;
        $query['levels'] = SubLevel::all();
        $query['demographics'] = FacadesDB::table('user_demographics')
        ->join('demographic_details', 'user_demographics.demographic_detail_id', '=', 'demographic_details.id')
        ->join('demographics', 'demographics.id', '=', 'demographic_details.demographic_id')
        ->where('user_demographics.user_id','=',$employee->id)
        ->get();

        return view('edit-employee', $query);
    }
    public function update(Request $request, Employee $employee)
    {
        $this->validate($request, [
            'f_name' => 'required',
            'l_name' => 'required',
            'logo' => 'nullable|mimes:jpeg,jpg,png,gif',
            'country_id' => 'required|exists:countries,id',
            'sub_level_id' => 'required|exists:sub_levels,id',
            'location' => 'required',
            'address' => 'required',
            'email' =>  'required|email|max:255|unique:users,email,' . $employee->id,
            'phone' => 'required|max:255|unique:users,phone,' . $employee->id,
            'password' => 'nullable',
            'gender' => 'required|in:1,2',
            'date_of_birth' => 'required|date',
        ]);
        $data = $request->all();
        if ($request->logo) {
            ImageHelper::delete($employee->getAttributes()['logo'], Employee::$logo_folder);
            $data['logo'] = ImageHelper::save($request->logo, Employee::$logo_folder);
        }
        if (@$data['password'] && $data['password'])
            unset($data['password']);

        $data['level_id'] = SubLevel::find($request->sub_level_id)->level_id;
        $employee->update($data);

        $company =CompanyEmployee::where('employee_id', $employee->id)->first();
        return redirect('company/' . $company->company_id)->with('success', 'The Employee has been Edit successfully');

        //return redirect('employee')->with('success', 'The Employee has been Updated successfully');
    }
    public function destroy(Employee $employee)
    {
        $company =CompanyEmployee::where('employee_id', $employee->id)->first();

        $employee->delete();
        $employee->companies()->detach();


        return redirect('company/' . $company->company_id)->with('success', 'The Employee has been Edit successfully');

        //return redirect('employee')->with('success', 'The Employee has been deleted successfully');
    }
}
