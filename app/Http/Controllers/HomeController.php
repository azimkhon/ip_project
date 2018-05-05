<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> ab432e609307192c0b8ea130924a3c319030295b
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
<<<<<<< HEAD
=======
=======
    
>>>>>>> 6633753e290c8a6ce781a5b522f73b8c74a238a7
>>>>>>> ab432e609307192c0b8ea130924a3c319030295b

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
}
