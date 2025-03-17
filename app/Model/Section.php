<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    protected $fillable = [
        'id','name'
    ];

    protected $hidden = [
        'created_at', 'updated_at',
    ];
}
