<?php
namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Hash;
use DB;
use Session;
use App\User; 

class UserController extends Controller
{
	public function index()
	{
		 return view('admin.index');
	}	
    public function edit($id)
    {
		$users = DB::table('users')->where('id','=',$id)->get();
		return view("admin.changepass",compact('users'));        //
    }
    public function update(Request $request, $id)
    {
		$data = [
			'password' => Hash::make($request->password)
		];
		if( $request->hasFile('timage')) {
			$image = $request->file('timage');
			$path = public_path(). '/timages/';
			$filename = time() . '.' . $image->getClientOriginalExtension();
			$image->move($path, $filename);
			$data['timage']  = $filename ;
		}	
		DB::table('users')->where('id','=',$id)->update($data);
		return redirect('admin/changepass/'.$id);
    }
}