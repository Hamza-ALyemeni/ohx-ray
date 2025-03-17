<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class SurveyCompany extends Model
{
    protected $fillable = [
        'company_id', 'survey_id'
    ];


    public function getCreatedAtAttribute($value)
    {
        return date('d M Y', strtotime($value));
    }
    
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function company()
    {
        return $this->belongsTo('App\Model\Company','company_id');
    }

    public function employees()
    {
        return $this->belongsToMany('App\Model\Employee','company_employees','company_id','employee_id');
    }

    public function surveys()
    {
        return $this->belongsTo('App\Model\Survey','survey_id');
    }

    public function survey_employee()
    {
        return $this->hasMany('App\Model\SurveyEmployee');
    }

    public function liveDurations()
    {
        return $this->hasMany('App\Model\LiveDuration');
    }
}
