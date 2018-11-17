<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class TestController extends Controller
{
    public function index(){
    	$result = DB::table('user')->get();
    }
   	return view('welcome');
}
