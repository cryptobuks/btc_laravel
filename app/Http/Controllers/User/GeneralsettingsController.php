<?php
namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Auth;
use DB;
class GeneralsettingsController extends Controller
{
    public function index()
    {
		$userid = Auth::user()->id;
		$usersettings = DB::table('user_settings')->where('uid','=',$userid)->get();
		return view('user.generalsettings',compact('usersettings'));
    }
    public function personalinfo(Request $request)
    {    
		$userid = Auth::user()->id;
		$this->validate($request, [
			'fname' => 'required',
			'lname' => 'required',
			'email' => 'required|email',
			'question' => 'required',
			'answer' => 'required'
		]);

		 $data = [
			'fname' => $request->fname,
			'lname' => $request->lname,
			'email' => $request->email,
			'question' => $request->question,
			'answer' => $request->answer
		];
		DB::table('users')->where('id','=',$userid)->update($data);
		return back()->with('success', 'Information Update');
    }
    public function passreset(Request $request)
    {    
		$userid = Auth::user()->id;
		$this->validate($request, [
			'password_old' => 'required',
			'password_new' => 'required|same:password_new2',
			'password_new2' => 'required'
		]);
	 	$data = [
			'password' => Hash::make($request->password_new)
		];
		DB::table('users')->where('id','=',$userid)->update($data);
		return back()->with('success', 'Information Update');
    }
    public function othersettings(Request $request)
    {    
		$userid = Auth::user()->id;
		$this->validate($request, [
			'ip_change' => 'required',
			'low_credit' => 'required',
			'new_ref' => 'required',
			'commisions' => 'required',
			'payment_method' => 'required',
			'my_earning' => 'required'
		]);

		 $data = [
			'ip_change' => $request->ip_change,
			'low_credit' => $request->low_credit,
			'new_ref' => $request->new_ref,
			'commisions' => $request->commisions,
			'payment_method' => $request->payment_method,
			'my_earning' => $request->my_earning
		];
		DB::table('user_settings')->where('uid','=',$userid)->update($data);
		return back()->with('success', 'Information Update');
    }
}
