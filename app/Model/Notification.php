<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    protected $fillable = [
        'company_id', 'notification', 'is_read'
    ];

    public function company()
    {
        return $this->belongsTo('App\Model\Company');
    }

    public function scopeFilter($query, $request)
    {
        if($request->date){
            $query->whereDate('created_at', $request->date);
        }
        return $query;
    }
}
