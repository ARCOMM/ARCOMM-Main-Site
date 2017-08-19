<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class MainController extends Controller
{

	public function index() {
		return view('landing');
	}

	public function sendApplication(Request $request) {
		if($request->ajax()) {
			// send the application mail to ARCOMM
			$mail_to = 'arcommdrive@gmail.com';
			$subject = 'ARCOMM APPLICATION';

			$application_message = 
				"Name: " . $request->input('name') .
				"\nHow did I find out about you: " . $request->input('find_out') .
				"\nE-Mail: " . $request->input('email') .
				"\nAge: " . $request->input('age') . 
				"\nLocation: " . $request->input('loc') .
				"\nSteam URL: " . $request->input('steam') .
				"\nAm I available Saturdays at 1700 ZULU: " . $request->input('time_available') .
				"\nDo I own Apex expansion: " . $request->input('apex') . 
				"\nI'm interested in joining ARCOMM because: " . $request->input('reason');

			$result = mail($mail_to, $subject, $application_message);


			// also send the confirmation mail to the applicant
			$confirmation_subject = "[ARCOMM] THANK YOU FOR YOUR APPLICATION";
			$confirmation_message = "THANK YOU FOR YOUR APPLICATION\n\nThank you for taking an interest in ARCOMM. We will read through your application and get back to you as soon as possible. If approved you will recieve an email from us with further information on joining us.";

			mail($request->input('email'), $confirmation_subject, $confirmation_message);


			return response()->json([
				"result" => $result
			], ($result ? 200 : 500));
		}
	}
}
