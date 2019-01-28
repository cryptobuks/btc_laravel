<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller 
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */ 

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/accountoverview';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
           'sponsor' => 'required',
			'fname' => 'required',
			'lname' => 'required',
			'email' => 'required|string|email|max:255|unique:users',
			'email2' => 'required|string|email|max:255',
			'username' => 'required|string|max:255|unique:users',
			'password' => 'required|string|min:6|same:password2',
			'password2' => 'required|string|min:6',
			'question' => 'required',
			'answer' => 'required',
			'agree' => 'required',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
		return User::create([
			'sponsor' => $data['sponsor'],
			'fname' => $data['fname'],
			'lname' => $data['lname'],
			'email' => $data['email'],
			'username' => $data['username'],
			'password' => Hash::make($data['password']),
			'timage' => 'na.jpg',
			'question' => $data['username'],
			'answer' => $data['answer'],
        ]);
		/*$dataddd = [
			'name' => 'dddddd'
		];
		
		return Mail::send('regemailtemp', array('sid'=>'1'), function($message) use ($dataddd){
			$message->to('webguru003@gmail.com', '1551515')->subject('Wellwishers Reg!');
		});*/
		
    }
}
