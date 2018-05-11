<?php

namespace App\Http\Controllers\Account;

use App\File;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\File\StoreFileRequest;
use App\Http\Requests\File\UpdateFileRequest;

class FileController extends Controller
{
    public function index()
    {
        $files = auth()->user()->files()->latest()->finished()->get();
        
        return view('account.files.index',[
            'files' => $files
        ]);
    }

    public function edit(File $file)
    {
        $this->authorize('touch', $file);
        
        return view('account.files.edit',[
            'file' => $file,
            'approval' => $file->approvals()->first(),
        ]);
    }

    public function create(File $file)
    {
    	if (!$file->exists) {
    		$file = $this->createAndReturnSkeletonFile();

    		return redirect()->route('account.files.create',$file);
    	}

    	$this->authorize('touch', $file);

    	return view('account.files.create',
        [
            'file'=>$file
        ]);
    }

    public function store(File $file, StoreFileRequest $request)
    {
        $this->authorize('touch', $file);

        
        $file->fill($request->only(['title','overview', 'overview_short', 'price']));
        $file->finished = true;
        $file->save();

        return redirect()->route('account.files.index')->withSuccess('Thanks, your files are successfully submitted');
    }

    public function update(File $file, UpdateFileRequest $request)
    {
        $this->authorize('touch', $file); // проврерка что пользователь владеет этим файлом 

        $approvalProperties = $request->only(File::APPROVAL_PROPERTIES);

        if ($file->needsApproval($approvalProperties)) 
        {
            $file->createApproval($approvalProperties);
            return back()->withSuccess('Thank you! We will review changes soon.');
        }
        
        $live = $request['live'] === "on" ? true : false;

        $file->update([
            'live' => $live,
            'price' => $request->get('price')
        ]);


        return back()->withSuccess('File Updated!');
    }

    protected function createAndReturnSkeletonFile()
    {
    	return auth()->user()->files()->create([
    		'title'=>'Untitled',
    		'overview' => 'None',
    		'overview_short' => 'None',
    		'price' => 0,
    		'finished' => false,
    	]);
    }


}
