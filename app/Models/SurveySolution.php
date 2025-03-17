<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Builder;
class SurveySolution extends Model
{
    protected $fillable = [
        'survey_employee_id', 'question_id','answer_id'
    ];

    public function question()
    {
        return $this->belongsTo('App\Model\SurveyQuestion','question_id');
    }
    public function answer()
    {
        return $this->belongsTo('App\Model\Answer');
    }
    public function survey_employee()
    {
        return $this->belongsTo('App\Model\SurveyEmployee');
    }

    protected static function boot()
    {
        parent::boot();
        static::addGlobalScope('SurveySolution', function (Builder $builder) {
            $builder->orderBy('question_id','asc');
        });
    }
}
