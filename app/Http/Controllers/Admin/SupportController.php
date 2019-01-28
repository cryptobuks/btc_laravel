<?php
namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class SupportController extends Controller
{
    public function index()
    {
		$supports = DB::table('support')->get();
		//print_r($tests);
		return view('admin.supportlist',compact('supports'));
    }
    public function show($id)
    {
		$supports = DB::table('support')->where('id','=',$id)->get();
		return view("admin.supportview", compact("supports"));        //
    }
    public function destroy($id)
    {
		DB::table('support')->where('id','=',$id)->delete();
		return redirect('admin/supportlist');
    }
}