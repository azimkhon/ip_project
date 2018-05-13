<?php

namespace App\Http\Controllers\Account;

use GuzzleHttp\Client as Guzzle;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MarketplaceConnectController extends Controller
{
	public function __construct()
	{
		$this->middleware(['auth']);
	}

    public function index() 
    {
    	return view('account.marketplace.index');
    }                                                                  
 
    public function store(Request $request, Guzzle $guzzle)
    {
    	if(!$request->code) {
    		return redirect()->route('account.connect');
    	}

    	$stripeRequest = $guzzle->request('POST' , 'https://connect.stripe.com/oauth/token', [
    		'form_params' => [ 
    			'client_secret' => config('services.stripe.secret'),
    			'code' => $request->code,
    			'grant_type' => 'authorization_code'
    		]
    	]);

    	 $stripeResponse = json_decode($stripeRequest->getBody());

    	 $request->user()->update([
    	 	'stripe_id' => $stripeResponse->stripe_user_id,
    	 	'stripe_key' => $stripeResponse->stripe_publishable_key,
    	 ]);

    	 return redirect()->route('account')->withSuccess('You have connected your Stripe account.');
    }
}
