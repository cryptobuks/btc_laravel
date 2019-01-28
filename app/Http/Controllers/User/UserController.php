<?php
namespace App\Http\Controllers\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Session;
use App\User; 

class UserController extends Controller
{
	public function getSignup()
	{
		 return view('user.signup');
	}
	public function postSignup(Request $request)
	{
		 $this->validate($request, [
			'email' => 'email|required|unique:users',
			'password' => 'required|min:4'
	  	 ]);
	  	$user = new User([
			'email' => $request->input('email'),
			'password' => bcrypt($request->input('password'))
	  	]);
	  	$user->save();
		Auth::login($user);
	  	return redirect()->route('user.accountoverview');
	}
	public function getSignin()
	{
		 return view('user.signin');
	}
	public function postSignin(Request $request)
	{
	
		$this->validate($request, [
			'email' => 'email|required',
			'password' => 'required|min:4'
	  	]);
		//echo $request->input('password');
		if(Auth::attempt([
			 'email'=>$request->input('email'),
			 'password'=>$request->input('password')
		])) {
		
			if(Session::has('oldUrl')) {
				$oldUrl = Session::get('oldUrl');
				Session::forget('oldUrl');
				return redirect()->to($oldUrl);
			}
			  return redirect()->route('user.accountoverview');
		}
		return redirect()->back();
	}
	public function getProfile() {
		//return view('user.profile');
		//$orders = Auth::user()->orders;
		//$orders->transform(function($order, $key) {
			//$order->cart = unserialize($order->cart);
			//return $order;
		//});
		//print_r($orders);
		return view('user.accountoverview');
	}
	public function getLogout() {
		Auth::logout();
		return view('user.signin');
		//return redirect()->back();
	}
	
}
