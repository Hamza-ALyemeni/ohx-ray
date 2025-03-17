<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class LiveDuration extends Model
{
    protected $fillable = [
        'company_id', 'start_date', 'end_date'
    ];
    protected $appends = [
        'no_employees'
    ];

    public function getNoEmployeesAttribute()
    {
        return SurveyEmployee::where('survey_company_id','=',$this->attributes['survey_company_id'])->count();
    }

    public function survey_company()
    {
        return $this->belongsTo('App\Model\SurveyCompany');
    }
}
