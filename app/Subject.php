<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function next() {
    	$subject = Subject::find($this->id + 1);

    	return $subject;
    }

    public function answers() {
    	return $this->hasMany('App\Answer');
    }
}
