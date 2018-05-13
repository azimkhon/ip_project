<?php

namespace App\Http\Controllers\Checkout;

use App\File;
use Illuminate\Http\Request;
use App\Http\Requests\Checkout\FreeCheckoutRequest;
use App\Jobs\Checkout\CreateSale;
use App\Http\Controllers\Controller;

class CheckoutController extends Controller
{
    public function free(FreeCheckoutRequest $request, File $file) 
    {
    //	if (!$file->isFree()) 
    //	{
    //		return back();
    //	}

    	dispatch(new CreateSale($file, $request->email));

    	return back()->withSuccess('We\'ve sent download link to your email address');
    }


}
