<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
	public function subjects($is_public) {
		return Subject::where('is_public', $is_public)->where('category_id', $this->id);
	}
}
