<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Post;
use Session;
use Mail;
class ContactController extends Controller
{
    
	public function getContact()
	{
		return view('contact');
	}
	public function postContact(Request $request)
	{
		$this->validate($request, [
			'email' => 'required|email',
			'subject' => 'min:3',
			'message' => 'min:3']);
		
		$data = array(
			'email' => $request->email,
			'subject' => $request->subject,
			'bodyMessage' => $request->message,
		);

		Mail::send('emails.contact',$data, function($message) use ($data)
			{
				$message->from($data['email']);
				$message->to('oybeka98@mail.ru');
				$message->subject($data['subject']);
			});

		Session::flash('success', 'Your email was sent on mailtrap inbox' );

		return redirect()->route('contact');
	}

}
