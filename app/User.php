<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;
use DB;

class User extends Authenticatable
{
    use Notifiable, HasApiTokens;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 'last_name', 'name', 'email', 'mobile', 'password', 'company_id'
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

    protected static function boot()
    {
        parent::boot();

        static::created(function ($user) {
            // Mail::to($user->email)->send(new NewUserWelcomeMail());
        });
    }
    
    /**
    * The roles that belong to the user.
    *
    * @return mixed
    */
    public function roles()
    {
        return $this->belongsToMany('App\Role', 'user_roles', 'user_id', 'role_id');
    }

    /**
    * The companies that belong to the user.
    *
    * @return mixed
    */

    public function company()
    {
        return $this->belongsTo('App\Company');
    }

    /**
    * Check if the user has a specific role.
    *
    * @param mixed $roles The roles to ckeck on.
    * @return boolean
    */
    public function hasRole($roles = [])
    {
        $roles = (array) $roles;

        foreach ($this->roles as $role) {
            if (in_array($role->key, $roles)) {
                return true;
            }
        }

        return false;
    }

    public function answers()
    {
        return $this->hasMany('App\Answer');
    }

    public function firstSubject() {
        $company = $this->company;

        return Subject::where('is_public', $company->is_public)->orderBy('id')->first();
    }
}
