<?php
namespace App\Http\Controllers\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class ViewmatrixController extends Controller
{
    public function index()
    {
 		return view('user.viewmatrix');
    }
    public function litecoinmatrix()
    {
 		return view('user.litecoinmatrix');
    }
    public function ethereummatrix()
    {
 		return view('user.ethereummatrix');
    }
    public function bcpopup()
    {
 		return view('user.bcpopup');
    }
    public function lcpopup()
    {
 		return view('user.lcpopup');
    }
    public function empopup()
    {
 		return view('user.empopup');
    }
}
