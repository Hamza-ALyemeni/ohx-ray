<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Demographic extends Model
{
    protected $fillable = [
        'demographic','demographic_ar', 'company_id'
    ];

    protected $hidden = [
     'created_at', 'updated_at'
    ];

    public function demographic_detail()
    {
        return $this->belongsToMany('App\Model\DemographicDetail');
    }


    public function company()
    {
        return $this->belongsTo('App\Model\Company','company_id');
    }
}
