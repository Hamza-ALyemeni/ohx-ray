<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserDemographic extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'demographic_detail_id',
    ];

     /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'created_at', 'updated_at',
    ];

    public function employee()
    {
        return $this->belongsTo('App\Model\User');
    }

    public function demographic_detail()
    {
        return $this->belongsTo('App\Model\DemographicDetail','demographic_detail_id');
    }
}
