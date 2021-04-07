<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    public $fillable = [
    	'user_id',
		'subject_id',
		'yes_no',
		'upload',
		'comment'
    ];

    public $casts = [
        'yes_no' => 'integer'
    ];

    public function subject()
    {
        return $this->belongsTo('App\Subject');
    }
}