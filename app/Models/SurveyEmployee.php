<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SurveyEmployee extends Model
{
    protected $fillable = [
        'employee_id', 'survey_id','survey_company_id'
    ];

    public function solutions()
    {
        return $this->hasMany('App\Model\SurveySolution');
    }
    public function employee()
    {
        return $this->belongsTo('App\Model\Employee','employee_id');
    }

    public function survey_company()
    {
        return $this->belongsTo('App\Model\SurveyCompany','survey_company_id');
    }
}
