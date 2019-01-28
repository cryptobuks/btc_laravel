<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    use AuthenticatesUsers;

	protected function authenticated($request, $user) {	
		if($user->isRole('1')) {
			return redirect('/admin/home');
		} else {
			return redirect('/');
		}
	}
//   protected $redirectTo = '/accountoverview';
 
    public function __construct()
    {
//	echo $user->id;exit;
		//echo Auth::user()->id;exit;
        $this->middleware('guest')->except('logout');
		
    }
}
