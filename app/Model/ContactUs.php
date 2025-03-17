<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ContactUs extends Model
{
    protected $hidden = [
        'created_at', 'updated_at',
    ];
    protected $fillable = [
        'f_name', 'l_name', 'email', 'message'
    ];
}
