<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Carbon\Carbon;

class Employee extends Model
{
    protected $table = 'users';
    protected $appends = [
        'employee_id', 'age'
    ];
    protected $fillable = [
        'f_name', 'l_name', 'logo', 'country_id', 'level_id','sub_level_id', 'location', 'gender', 'date_of_birth', 'address', 'phone', 'email', 'password' , 'token' , 'section','sub_section_id','send_email_num','last_email_send_date','role','is_verified'
    ];
    protected $hidden = [
        'password', 'remember_token', 'created_at', 'updated_at',
    ];
    public static $logo_folder = "uploads/users/";
    public static $default_logo_image = "default-company.jpg";
    public function getLogoAttribute($value)
    {
        if ($value)
            return url('/') . '/' . $this::$logo_folder . $value;
        else
            return url('/') . '/' . $this::$logo_folder . $this::$default_logo_image;
    }
    public function setDateOfBirthAttribute($value)
    {
        if($value != null)
            $this->attributes['date_of_birth'] = date('Y-m-d', strtotime($value));
    }
    public function getDateOfBirthAttribute($value)
    {
        return date('d-m-Y', strtotime($value));
    }
    public function getAgeAttribute()
    {
        // return $this->date_of_birth->diffInYears(\Carbon::now());
        return Carbon::parse($this->date_of_birth)->diff(Carbon::now())->format('%y');

        // return Carbon::parse($this->attributes['date_of_birth'])->age;
    }
    public function setPasswordAttribute($value)
    {

        $this->attributes['password'] = bcrypt($value);
    }
    public function getEmployeeIdAttribute()
    {
        return substr(Str::slug($this->f_name), 0, 1) . substr(Str::slug($this->l_name), 0, 1) . ($this->id * 5067);
    }

    public function surveys()
    {
        return $this->belongsToMany('App\Model\Survey', 'survey_employees', 'employee_id', 'survey_id');
    }
    public function level()
    {
        return $this->belongsTo('App\Model\Level');
    }
    public function country()
    {
        return $this->belongsTo('App\Model\Country');
    }
    public function sub_level()
    {
        return $this->belongsTo('App\Model\SubLevel');
    }
    public function sec()
    {
        return $this->belongsTo('App\Model\Section','section');
    }

    public function sub_section()
    {
        return $this->belongsTo('App\Model\SubSection');
    }
    public function companies()
    {
        return $this->belongsToMany('App\Model\Company', 'company_employees', 'employee_id', 'company_id');
    }

    protected static function boot()
    {
        parent::boot();
        static::addGlobalScope('employee', function (Builder $builder) {
           // $builder->where('role', 2);
        });
    }
}