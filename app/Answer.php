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
}