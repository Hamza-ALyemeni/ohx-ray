<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    protected $hidden = [
        'created_at', 'updated_at',
    ];
    protected $fillable = [
        'question', 'answer'
    ];
}
