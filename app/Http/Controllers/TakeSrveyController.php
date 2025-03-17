<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Model\Employee;
use App\Model\SurveyCompany;
use App\Model\CompanyEmployee;

class TakeSrveyController extends Controller
{
    //
    public function index()
    {
         return view('take-survey');
    }

    public function to_TakeSrvey(Request $request)
    {

        $email = $request->email;
        //dd($email );
        // Retrieve the employee with the specified email
        $employee = Employee::where('email', $email)->first();
        
        if ($employee) {
            // Employee found
            $company_employee = CompanyEmployee::where('employee_id', $employee->id)->first();
            $survey = SurveyCompany::where('company_id', $company_employee->company_id)->orderBy('id', 'desc')->first();
            //dd($employee->token);
            return redirect('landingPage/1/'.$survey->id.'/'.$employee->token );
        } else {
            // Employee not found
            return redirect('take_survey2')->with('Error','Employee not found');

        }

    }
}
