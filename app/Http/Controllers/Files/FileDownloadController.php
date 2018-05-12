<?php

namespace App\Http\Controllers\Files;

use App\File;
use App\Sale;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Chumper\Zipper\Zipper;

class FileDownloadController extends Controller
{
	protected $zipper;
	public function __construct(Zipper $zipper) 
	{
		$this->zipper = $zipper;
	}

    public function show(File $file, Sale $sale) 
    {
    	if(!$file->visible()) {
    		return abort(403);
    }

/*
     	if($file->matchesSale($sale))
    	{
    		return abort(403);
    	}
 */   	
     $this->zipper->make()->add(['a','b','c'])->close();

    }
}
