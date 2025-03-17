<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyType extends Model
{
    use HasFactory;
    protected $fillable = [
        'company_type'
    ];
    protected $hidden = [
        'created_at', 'updated_at',
    ];
}
