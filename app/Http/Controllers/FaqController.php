<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;

class FaqController extends Controller
{
    public function index()
    {
		$faqs = DB::table('faq')->get();
 		return view('faq',compact('faqs'));
    }
}
