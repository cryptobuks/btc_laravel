<?php
namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Hash;
use DB;
use Session;
use App\User; 

class FauserController extends Controller
{
    public function index()
    {
		$users = DB::table('users')->get();
		return view('admin.userlist',compact('users'));
    }
    public function create()
    {
		 return view('admin.useradd');
    }
    public function store(Request $request)
    {    
		if( $request->hasFile('timage')) {
			$image = $request->file('timage');
			$path = public_path(). '/timages/';
			$filename = time() . '.' . $image->getClientOriginalExtension();
			$image->move($path, $filename);
		}	
		 $data = [
			'sponsor' => $request->sponsor,
			'fname' => $request->fname,
			'lname' => $request->lname,
			'email' => $request->email,
			'username' => $request->username,
			'password' => Hash::make($request->password),		 
			'timage' => $filename		 
		];
		DB::table('users')->insert($data);
		return redirect('admin/userlist');
    }
    public function show($id)
    {
		$users = DB::table('users')->where('id','=',$id)->get();
		return view("admin.userview", compact("users"));        //
    }
    public function edit($id)
    {
		$users = DB::table('users')->where('id','=',$id)->get();
		return view("admin.useredit", compact("users"));        //
    }
    public function update(Request $request, $id)
    {
		 $data = [
			'sponsor' => $request->sponsor,
			'fname' => $request->fname,
			'lname' => $request->lname,
			'email' => $request->email,
		];
		if( $request->password != '') {
			$data['password']  = Hash::make($request->password);
		}
		if( $request->hasFile('timage')) {
			$image = $request->file('timage');
			$path = public_path(). '/timages/';
			$filename = time() . '.' . $image->getClientOriginalExtension();
			$image->move($path, $filename);
			$data['timage']  = $filename ;
		}	
		DB::table('users')->where('id','=',$id)->update($data);
		return redirect('admin/userlist');
        
    }
    public function destroy($id)
    {
		DB::table('users')->where('id','=',$id)->delete();
		return redirect('admin/userlist');
    }
}