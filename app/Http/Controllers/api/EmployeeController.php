<?php

namespace App\Http\Controllers\api;

use App\Helpers\ImageHelper;
use App\Http\Controllers\Controller;
use App\Http\Requests\EmolyeeRequest;
use App\Http\Resources\Employee\EmployeeCollection;
use App\Http\Resources\Employee\EmployeeResource;
use App\Model\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index(Request $request)
    {
        $user = $request->user();
        if($user->role == 0)
            $data = Employee::withCount('surveys')->paginate(10);
        else if($user->role == 1){
            $data = Employee::whereHas('companies',function ($query) use($user){
                $query->where('companies.id',$user->company->id);
            })->withCount('surveys')->paginate(10);
        }


        return response()->json(new EmployeeCollection($data), 200);
    }

    public function store(EmolyeeRequest $request)
    {
        $data = $request->all();
        $data['logo'] = ImageHelper::save_api($request->logo, Employee::$logo_folder);
        $data['verification_code'] = 1234;
        $employee = Employee::create($data);
        $employee->companies()->sync($request->company_id);
        return response()->json([
            'success' => 1,
            'data' => new EmployeeResource($employee),
            'msg' => 'The Employee has been added successfully'
        ], 200);
    }
    public function show(Employee $employee)
    {
        return response()->json([
            'success' => 1,
            'data' => new EmployeeResource($employee),
        ], 200);
    }
    public function update(EmolyeeRequest $request, Employee $employee)
    {
        $data = $request->all();
        if($request->logo) {
            ImageHelper::delete($employee->getAttributes()['logo'], Employee::$logo_folder);
            $data['logo'] = ImageHelper::save_api($request->logo, Employee::$logo_folder);
        }
        if(@$data['password'] && $data['password'])
            unset($data['password']);
        $employee->update($data);
        $employee->companies()->detach();
        $employee->companies()->sync($request->company_id);

        return response()->json([
            'success' => 1,
            'data' => new  EmployeeResource($employee),
            'msg' => 'The Employee has been Updated successfully'
        ], 200);

    }
    public function destroy(Employee $employee)
    {
        $employee->delete();
        $employee->companies()->detach();
        return response()->json([
            'success' => 1,
            'msg' => 'The Employee has been deleted successfully'
        ], 200);
    }
}
