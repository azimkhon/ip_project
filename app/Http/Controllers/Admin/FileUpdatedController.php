<?php

namespace App\Http\Controllers\Admin;

use App\File;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FileUpdatedController extends Controller
{
    //
    public function index() 
    {
    	$files = File::whereHas('approvals')->oldest()->get();

    	return view('admin.files.updated.index', [
    		'files' => $files
    	]);
    }

    public function update(File $file)
    {
    	$file->mergeApprovalProperties();
    	$file->approveAllUploads();
    	$file->deleteAllApprovals();
    	    	
    	return back()->withSuccess("{$file->title} changes have been approved");
    }
}
