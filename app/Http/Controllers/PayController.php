<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class PayController extends Controller
{
    public function payIndex()
    {
    	return view('profiles.pay');
    	//$req = Http::post('');
    }

    public function proccessing()
    {
    		
    }
}
