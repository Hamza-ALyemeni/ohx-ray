<?php

namespace App\Model;

use App\Model\Company;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens,Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'f_name', 'l_name', 'email', 'password', 'verification_code', 'is_verified', 'role', 'logo', 'gender', 'country_id', 'location', 'address', 'phone', 'date_of_birth','send_email_num','last_email_send_date'
    ];
    public static $logo_folder = "uploads/users/";
    public static $default_logo_image = "default-user.jpg";
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token','created_at', 'updated_at',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function setPasswordAttribute($value){

        $this->attributes['password'] = bcrypt($value);
    }

    public function country()
    {
        return $this->belongsTo('App\Model\Country');
    }
    public function company()
    {
        return $this->hasOne('App\Model\Company');
    }
    public function getLogoAttribute( $value ) {
        if($this->role == 1){
            $path = Company::$logo_folder;
        }else{
            $path = $this::$logo_folder;
        }
        if($value)
            return url('/').'/'.$path. $value;
        else
            return url('/').'/'.$path. $this::$default_logo_image;
    }
}
