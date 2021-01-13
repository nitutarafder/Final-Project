<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class paymentController extends Controller
{
    

    public function nexusPay(){

    	// return 'data';
    	return view('payment/mastercard');
    }
}
