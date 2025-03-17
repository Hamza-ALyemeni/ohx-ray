<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SurveyCompany extends Model
{
    protected $fillable = [
        'company_id', 'survey_id'
    ];


    public function company()
    {
        return $this->belongsTo('App\Model\Company','company_id');
    }

    public function survey()
    {
        return $this->belongsTo('App\Model\Survey','survey_id');
    }

    public function survey_employee()
    {
        return $this->hasMany('App\Model\SurveyEmployee');
    }
}
