<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Manager extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'nickname', 'email', 'password', 'is_verify', 'verify_str','role_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    const IS_DELETE = 1;
    const UN_DELETE = 0;

    const IS_VERIFY = 1;
    const UN_VERIFY = 0;

    public function role (  )
    {
        return $this->hasOne(Role::class);
    }
}
