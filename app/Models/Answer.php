<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    protected $fillable = [
        'question_id', 'answer','answer_ar'
    ];
    protected $hidden = [
        'created_at', 'updated_at',
    ];
}
