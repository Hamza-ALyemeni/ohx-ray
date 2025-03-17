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


class DemographicImport implements ToModel, WithStartRow
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function startRow(): int
    {
        return 1;
    }
    private $company_id;
    private $counter;
    private $i;
    private $demographic_array=[1,2,3,4,5,6,7,8,9,10,11];

    public function __construct($company_id)
    {
        
        $this->company_id = $company_id;
        $this->counter=0;
        $demographic_array=[1,2,3,4,5,6,7,8,9,10,11];
    }
    public function model(array $row)
    {
        $demographics=null;
         if($this->counter ==0)
        {
            //$demographics=$this->demographics($row);
        }else{
            $this->demographics_detail($row);
        }
        ++$this->counter; 
        return $demographics;
    }
    



    public function demographics($row)
    {
        $length=count($row);
        $i=0;
        while ($i!=$length)
        {
            if($row[$i]!=null){
            $demographic=Demographic::create(['demographic'=>$row[$i],'demographic_ar'=>$row[$i],'company_id'=>$this->company_id]);
            array_push($this->demographic_array, $demographic->id);
            ++$i;
            }
          
        }
        return $demographic;
    }
    public function demographics_detail($Rows)
    {
        $this->i=0;
        set_time_limit(1000000000);
        foreach($Rows as $Row){
           
            $demographic_detail = FacadesDB::table('demographic_details')
            ->join('demographics', 'demographics.id', '=', 'demographic_details.demographic_id')
            ->where('demographic_detail', 'like', '%' .$Row. '%')
            ->where('company_id', '=', $this->company_id)
            ->get();

            if($demographic_detail && $demographic_detail->count()>0){
            }else if($Row !=null){
              $demographic_detail=DemographicDetail::create(['demographic_detail'=>$Row,'demographic_detail_ar'=>$Row,'demographic_id'=>$this->demographic_array[$this->i]]);
            }else{
            }

            ++$this->i;
        }  
       // dd($this->i);
        return  $demographic_detail;
    }
}
