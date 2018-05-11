<?php

namespace App\Http\Controllers\Admin;

use Mail;
use App\File;
use Illuminate\Http\Request;
use App\Mail\Files\FileUpdatesApproved;
use App\Mail\Files\FileUpdatesRejected;
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

    	Mail::to($file->user)->send(new FileUpdatesApproved($file));

    	return back()->withSuccess("{$file->title} changes have been approved.");
    }

    public function destroy(File $file) 
    {
    	$file->deleteAllApprovals();
    	$file->deleteUnapprovedUploads();

    	Mail::to($file->user)->send(new FileUpdatesRejected($file));

    	return back()->withSuccess("{$file->title} changes have been rejected.");
    }
}
