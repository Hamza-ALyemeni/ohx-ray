<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DemographicDetail extends Model
{
    protected $fillable = [
        'demographic_detail','demographic_detail_ar', 'demographic_id'
    ];

    protected $hidden = [
     'created_at', 'updated_at'
    ];

    public function demographic()
    {
        return $this->belongsTo('App\Model\Demographic','demographic_id');
    }

    public function user_demographic()
    {
        return $this->belongsToMany('App\Model\UserDemographic');
    }
}
