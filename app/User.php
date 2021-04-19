<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table='users';

    protected $fillable = [
        'name', 'email', 'password','nik','password','phone','level'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public static function level()
    {
        return  ['1'=>'User', '99'=>'Administrator'];
    }

    public function info()
    {
        return $this->hasOne(Profile::class, 'nik', 'nik');
    }

    public static function detailUser($id)
    {
        return User::with('info')->where('id', $id)->first();
    }
}
