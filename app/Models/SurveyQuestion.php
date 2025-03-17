<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SurveyQuestion extends Model
{
    protected $fillable = [
        'survey_id', 'question','question_ar', 'type'
    ];

    public function answers()
    {
        return $this->hasMany('App\Model\Answer','question_id');
    }
}
