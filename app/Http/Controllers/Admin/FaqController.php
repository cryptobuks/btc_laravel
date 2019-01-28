<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class FaqController extends Controller
{
    public function index()
    {
		$faqs = DB::table('faq')->get();
		//print_r($faqs);
		return view('admin.faqlist',compact('faqs'));
    }
    public function create()
    {
		 return view('admin.faqadd');
    }
    public function store(Request $request)
    {
		$data = [
			'question' => $request->question,
			'answer' => $request->answer,
			'created_at' => date("Y-m-d H:m:s")
		];
		DB::table('faq')->insert($data);
		return redirect('admin/faqlist');
    }
    public function show($id)
    {
		$faqs = DB::table('faq')->where('id','=',$id)->get();
		return view("admin.faqview", compact("faqs"));        //
    }
    public function edit($id)
    {
		$faqs = DB::table('faq')->where('id','=',$id)->get();
		return view("admin.faqedit", compact("faqs"));        //
    }
    public function update(Request $request, $id)
    {
		$data = [
			'question' => $request->question,
			'answer' => $request->answer
					];
		DB::table('faq')->where('id','=',$id)->update($data);
		return redirect('admin/faqlist');
        
    }
    public function destroy($id)
    {
		DB::table('faq')->where('id','=',$id)->delete();
		return redirect('admin/faqlist');
    }
}