<?php
namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
use Auth;
use DB;

class AccountoverviewController extends Controller
{ 
    public function index()
    {
		$luser = DB::table('users')->orderBy('id', 'DESC')->first();
		$usersettings = DB::table('user_settings')->where('uid',$luser->id)->first();
		if (!$usersettings) {
			$data = [
				'uid' => $luser->id,
				'ip_change' => '0',
				'low_credit' => '0',
				'new_ref' => '0',
				'commisions' => '0',
				'payment_method' => '0',
				'my_earning' => '0',
				'created_at' => date("Y-m-d H:i:s")
			];
			DB::table('user_settings')->insert($data);
		}		
			$luser = DB::table('users')->orderBy('id', 'DESC')->first();
			$data2 = [
					'id' => $luser->id,
					'fname' => $luser->fname,
					'lname' => $luser->lname,
					'email' => $luser->email,
				];
			Mail::send('regtemp', array('name'=>$luser->fname,'email'=>$luser->email), function($message) use ($data2){
					$message->to($data2['email'], $data2['fname'])->subject('Thanks for registering');
			});
        return view('user.accountoverview');
		
    }
}