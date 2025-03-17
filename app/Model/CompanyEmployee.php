<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class CompanyEmployee extends Model
{
    protected $fillable = [
        'name', 'company_id', 'employee_id'
    ];

    protected $hidden = [
        'created_at', 'updated_at',
    ];
}
