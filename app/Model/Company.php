<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = [
        'name','name_ar', 'logo', 'user_id','industry_id','company_type_id'
    ];
    protected $hidden = [
        'created_at', 'updated_at',
    ];
    public static $logo_folder = "uploads/companies/";
    public static $default_logo_image = "default-company.jpg";
    public function getLogoAttribute( $value ) {
        if($value)
            return url('/').'/'.$this::$logo_folder. $value;
        else
            return url('/').'/'.$this::$logo_folder. $this::$default_logo_image;
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function company_types()
    {
        return $this->belongsTo('App\CompanyType');
    }

    public function industries()
    {
        return $this->belongsTo('App\Industry');
    }
    public function surveys()
    {
        return $this->belongsToMany('App\Model\Survey','survey_companies','company_id','survey_id');
    }
    public function employees()
    {
        return $this->belongsToMany('App\Model\Employee','company_employees','company_id','employee_id');
    }
   

    public function survey_company()
    {
        return $this->hasMany('App\Model\SurveyCompany');
    }

    public function demographic()
    {
        return $this->belongsToMany('App\Model\Demographic');
    }
}
