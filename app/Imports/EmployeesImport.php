<?php

namespace App\Imports;

use App\Model\Demographic;
use App\Model\DemographicDetail;
use App\Model\Employee;
use App\Model\Section;
use App\Model\SubSection;
use App\Model\UserDemographic;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;
use Maatwebsite\Excel\Concerns\WithValidation;
use Illuminate\Support\Facades\DB as FacadesDB;


class EmployeesImport implements ToModel, WithStartRow
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function startRow(): int
    {
        return 2;
    }
    private $company_id;
    public function __construct($company_id)
    {
        
        $this->company_id = $company_id;
    }
    public function model(array $row)
    {       
        
        set_time_limit(1000000000);

        $emp =   Employee::create([
            'f_name'     => $row[0],
            'l_name'    => $row[1],
            'email'    => $row[2],
            'phone'    => ($row[3])?$row[3]:null,
            'gender'    => ($row[4] == "Male" ? 1 :  ($row[4] == "Female" ? 2: null)),
            'level_id'    => ($row[5] == "Top Management" ? 1 : ($row[5] == "Middle Management" ? 2:($row[5] == "Employees" ? 3:0))),
            'date_of_birth'    => ($row[6]!=null)?gmdate("Y-m-d", (($row[6] - 25569) * 86400)):null,
            'country_id'    => ($row[7] == "Local" ? 184 : ($row[7] == "Expat" ? 63 : null)),
            'section'     =>$this->Unit($row[8]),
            'sub_section_id' =>$this->Sub_Unit($this->Unit($row[8]),$row[9]),
            //'location'    => $row[9],
            //'address'    => $row[10],
            'password'    => Hash::make('123456')
            // 'logo'    => "",
           
        ]);
        $emp->companies()->sync($this->company_id);
       // $this->employee_demographics($emp,$row);
        return $emp;
    }
    public function customValidationAttributes()
    {
        return [
            '0' => 'First Name',
            '1' => 'Last Name',
            '2' => 'Email',
            '3' => 'Phone',
            '4' => 'Gender',
            '5' => 'Level',
            '6' => 'Date of Birth',
            '7' => 'Nationality',
            '8' => 'Section',
        ];
    }

    public function rules(): array
    {
        return [
            // '0' => 'required',
            // '1' => 'required',
            // '2' => 'required|email|max:255|unique:users,email',
            // '3' => 'required|max:255|unique:users,phone',
            // '4' => 'required|in:Male,Female',
            // '5' => 'required|in:Top Management,Middle Management,Employees',
            // '6' => 'required',
            // '7' => 'required|in:Local,Expat',
            '2' => 'email|max:255|unique:users,email',
        ];
    }

    public function Unit($RowName=null)
    {
        set_time_limit(1000000000);
        $section= Section::where('name', 'like', '%' . $RowName . '%')->get();
        if($section && $section->count()>0){
            return $section[0]->id;
        }else if($RowName !=null){
            $section=Section::create(['name'=>$RowName]);
            return $section->id;
        }else{
            return null;
        }
    }

    public function Sub_Unit($Unit_id=null,$RowName=null)
    {
        set_time_limit(1000000000);

        $sub_section= SubSection::where('name', 'like', '%' . $RowName . '%')->get();
        if($sub_section && $sub_section->count()>0){
            return $sub_section[0]->id;
        }else if($RowName !=null){
            $sub_section=SubSection::create(['name'=>$RowName,'section_id'=>$Unit_id]);
            return $sub_section->id;
        }else{
            return null;
        }
    }

    public function employee_demographics($Emp=null,$Rows)
    {
    
        for ($i = 10; $i <= count($Rows)-1; $i++){
            $demographic_detail = FacadesDB::table('demographic_details')
            ->join('demographics', 'demographics.id', '=', 'demographic_details.demographic_id')
            ->where('demographic_detail', 'like', '%' . $Rows[$i]. '%')
            ->orWhere('demographic_detail_ar', 'like','%' . $Rows[$i]. '%')
            ->where('company_id', '=', $this->company_id)
            ->select('demographic_details.id')
            ->get();

            if($demographic_detail && $demographic_detail->count()>0){
                $emp_dem =   UserDemographic::create([
                    'user_id' => $Emp->id,
                    'demographic_detail_id' => $demographic_detail[0]->id]);
            }else if($Rows[$i] !=null){

            }else{
            }
        }
        
    }
    public function demographics_detail(array $ExcelRow)
    {
        $RowName=null;
        foreach($ExcelRow as $row){
            $demographic_detail= DemographicDetail::where('name', 'like', '%' . $RowName . '%')->get();
            if($demographic_detail && $demographic_detail->count()>0){
                return $demographic_detail[0]->id;
            }else if($RowName !=null){
                $demographic=DemographicDetail::create(['demographic_detail'=>$RowName,'demographic_detail_ar'=>$RowName,'demographic_id'=>$RowName]);
                return $demographic->id;
            }else{
                return null;
            }
        }   
    }
}
