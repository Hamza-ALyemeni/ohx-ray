<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $hidden = [
        'created_at', 'updated_at',
    ];
}
