<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class TestimoniesController extends Controller
{
    public function index()
    {
		$tests = DB::table('testimonies')->get();
 		return view('testimonies',compact('tests'));
    }
}
