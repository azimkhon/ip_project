<?php

namespace App\Http\Controllers\Account;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MyDetailsController extends Controller
{
    
    public function index() 
    {
    	return view('admin.index');
    }
}
