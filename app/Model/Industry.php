<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Industry extends Model
{
    use HasFactory;
    protected $fillable = [
        'industry'
    ];
    protected $hidden = [
        'created_at', 'updated_at',
    ];
}
