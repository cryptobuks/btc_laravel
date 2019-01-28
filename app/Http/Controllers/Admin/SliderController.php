<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class SliderController extends Controller
{
    public function index()
    {
		$sliders = DB::table('sliders')->get();
		//print_r($sliders);
		return view('admin.sliderlist',compact('sliders'));
    }
    public function create()
    {
		 return view('admin.slideradd');
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
			'timage' => $filename,
			'detail' => $request->detail,
			'buttontext' => $request->buttontext,
			'buttonurl' => $request->buttonurl,
			'created_at' => date("Y-m-d H:m:s")
		];
		DB::table('sliders')->insert($data);
		return redirect('admin/sliderlist');
    }
    public function show($id)
    {
		$sliders = DB::table('sliders')->where('id','=',$id)->get();
		return view("admin.sliderview", compact("sliders"));        //
    }
    public function edit($id)
    {
		$sliders = DB::table('sliders')->where('id','=',$id)->get();
		return view("admin.slideredit", compact("sliders"));        //
    }
    public function update(Request $request, $id)
    {
		$data = [
			'detail' => $request->detail,
			'buttontext' => $request->buttontext,
			'buttonurl' => $request->buttonurl,
			'created_at' => date("Y-m-d H:m:s")
		];
		if( $request->hasFile('timage')) {
			echo "ddd";
			$image = $request->file('timage');
			$path = public_path(). '/timages/';
			$filename = time() . '.' . $image->getClientOriginalExtension();
			$image->move($path, $filename);
			$data['timage']  = $filename ;
		}	
		DB::table('sliders')->where('id','=',$id)->update($data);
		return redirect('admin/sliderlist');
    }
    public function destroy($id)
    {
		DB::table('sliders')->where('id','=',$id)->delete();
		return redirect('admin/sliderlist');
    }
}