<?php

namespace App\Models;

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
        return SurveyEmployee::join('company_employees','company_employees.employee_id','survey_employees.employee_id')
        ->where('company_employees.company_id',$this->attributes['company_id'])
        ->whereDate('survey_employees.created_at', '>=',$this->attributes['start_date'])
        ->whereDate('survey_employees.created_at', '<=', $this->attributes['end_date'])->count();
    }

    public function company()
    {
        return $this->belongsTo('App\Model\Company');
    }
}
