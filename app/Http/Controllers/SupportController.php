<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
use DB;

class SupportController extends Controller
{
    public function index()
    {
 		return view('support');
    }
    public function store(Request $request)
    {    
		$this->validate($request, [
			'from_name' => 'required',
			'from_email' => 'required|email',
			'message' => 'required'
		]);
		 $data = [
			'name' => $request->from_name,
			'email' => $request->from_email,
			'message' => $request->message,
			'created_at' => date("Y-m-d H:m:s")
		];
		DB::table('support')->insert($data);
		$lsupport = DB::table('support')->orderBy('id', 'DESC')->first();
		Mail::send('emailtemplate', array('sid'=>$lsupport->id), function($message) use ($data){
			$message->to($data['email'], $data['name'])->subject('Wellwishers Support Ticket!');
		});
		return back()->with('success', 'Thanks for contact us!');
    }
}