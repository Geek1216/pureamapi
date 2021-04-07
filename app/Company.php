<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = [
        'name', 'is_public', 'is_completed'
    ];

    protected $casts = [
        'is_public' => 'integer',
        'is_completed' => 'integer'
    ];

    public function users()
    {
        return $this->hasMany('App\User', 'company_id');
    }

    public static function submitAnswers($id)
    {
        Company::find($id)->update(['is_completed' => 1]);
    }
}
