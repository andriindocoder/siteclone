<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PresonusController extends Controller
{
    public function index(){
    	return view('presonus.index');
    }
}
