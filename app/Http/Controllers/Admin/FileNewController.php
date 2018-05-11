<?php

namespace App\Http\Controllers\Admin;

use App\File;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FileNewController extends Controller
{
    public function index() 
    {
    	$files = File::unapproved()->finished()->oldest()->get();
    	return view('admin.files.new.index', [
    		'files' => $files
    	]);
    }

    public function update(File $file) 
    {
    	$file->approve();
    	return back()->withSuccess("{$file->title}  has been approved");
    }

    public function destroy() 
    {
    	
    }
}
