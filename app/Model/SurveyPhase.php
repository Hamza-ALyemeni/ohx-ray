<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SurveyPhase extends Model
{
    use HasFactory;
    protected $fillable = [
        'phase'
    ];
    protected $hidden = [
        'created_at', 'updated_at',
    ];
}
