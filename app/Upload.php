<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Upload extends Model
{
	use SoftDeletes;

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
