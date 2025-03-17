<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;


class SubSection extends Model
{
    protected $fillable = [
        'id','name','section_id'
    ];

    protected $hidden = [
        'created_at', 'updated_at',
    ];
}
