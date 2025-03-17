<?php

namespace App\Http\Controllers\api;

use App\Helpers\ImageHelper;
use App\Http\Controllers\Controller;
use App\Http\Requests\CompanyRequest;
use App\Http\Resources\Company\CompanyCollection;
use App\Http\Resources\Company\CompanyResource;
use App\Model\Company;
use App\User;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Company::with('user.country')->withCount('employees','surveys')->paginate(10);
        return response()->json(new CompanyCollection($data), 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CompanyRequest $request)
    {
        $logo = ImageHelper::save_api($request->logo, Company::$logo_folder);
        $data = $request->all();
        $data['f_name'] = $request->name;
        $data['role'] = 1;
        $data['verification_code'] = 1234;
        $data['logo'] =$logo;
        $user = User::create($data);
        $data['user_id'] = $user->id;
        $data['logo'] = $logo;
        $company = Company::create($data);

        return response()->json([
            'success' => 1,
            'data' => new CompanyResource($company),
            'msg' => 'The company has been added successfully'
        ], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Company $company)
    {
        $data = Company::with('user.country','employees','surveys')->find($company->id);
        return response()->json([
            'success' => 1,
            'data' => new CompanyResource($data),
        ], 200);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CompanyRequest $request, Company $company)
    {
        $data = $request->all();
        if($request->logo) {
            ImageHelper::delete($company->getAttributes()['logo'], Company::$logo_folder);
            $data['logo'] = ImageHelper::save_api($request->logo, Company::$logo_folder);
        }
        $company->update($data);
        if($data['password'])
            unset($data['password']);
        $company->user->update($data);

        return response()->json([
            'success' => 1,
            'data' => new CompanyResource($company),
            'msg' => 'The company has been Updated successfully'
        ], 200);

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
        return response()->json([
            'success' => 1,
            'msg' => 'The company has been deleted successfully'
        ], 200);
    }
}
