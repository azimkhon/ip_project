<?php

namespace App\Http\Controllers\Account;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AccountController extends Controller
{
    public function index()
    {
    	return view('account.index');
    }

    public function mydetails(User $user) 
    {
    	return view('account.mydetails');
    }
}
