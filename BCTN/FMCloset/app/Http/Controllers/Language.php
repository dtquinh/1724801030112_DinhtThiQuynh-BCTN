<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class Language extends Controller
{
    public function language(Request $request,$language){
    	//kiem tra luu session
    	if($language){
    		Session::put('language',$language);
    		

    	}
    	return redirect()->back();
    }
}
