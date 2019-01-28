<?php
namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Session;
use App\User; 

class HomeController extends Controller
{
	public function index()
	{
		 return view('admin.home');
	}	
}
