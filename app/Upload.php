<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Upload extends Model
{
	use SofDeletes;

	protected $fillable = [
		'filename',
		'size',
		'approved'
	];
	
	public function file() 
	{
		return $this->belongsTo(File::class);
	}

	public function user() 
	{
		return $this->belongsTo(User::class);
	}
    //
}
