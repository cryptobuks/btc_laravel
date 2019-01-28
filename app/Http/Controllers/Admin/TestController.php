<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class TestController extends Controller
{
    public function index()
    {
		$tests = DB::table('testimonies')->get();
		//print_r($tests);
		return view('admin.testlist',compact('tests'));
    }
    public function create()
    {
		 return view('admin.testadd');
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
			'name' => $request->name,
			'timage' => $filename,
			'testimonial' => $request->testimonial,
			'created_at' => date("Y-m-d H:m:s")
		];
		DB::table('testimonies')->insert($data);
		return redirect('admin/testlist');
    }
    public function show($id)
    {
		$tests = DB::table('testimonies')->where('id','=',$id)->get();
		return view("admin.testview", compact("tests"));        //
    }
    public function edit($id)
    {
		$tests = DB::table('testimonies')->where('id','=',$id)->get();
		return view("admin.testedit", compact("tests"));        //
    }
    public function update(Request $request, $id)
    {
		$data = [
			'name' => $request->name,
			'testimonial' => $request->testimonial,
			'created_at' => date("Y-m-d H:m:s")
		];
		if( $request->hasFile('timage')) {
			echo "ddd";
			$image = $request->file('timage');
			$path = public_path(). '/timages/';
			$filename = time() . '.' . $image->getClientOriginalExtension();
			$image->move($path, $filename);
			$data['timage']  = $filename ;
			//array_push($data, array('timage' => $filename));
		}	
		//print_r($data);
		//print_r($_FILES);
		//exit;
		DB::table('testimonies')->where('id','=',$id)->update($data);
		return redirect('admin/testlist');
        
    }
    public function destroy($id)
    {
		DB::table('testimonies')->where('id','=',$id)->delete();
		return redirect('admin/testlist');
    }
}