<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function form (){
    	return view('form');
    }

    public function sapa (){
    	return "hallo";
    }

    public function sapa_post(Request $Request){
    	// dd($Request->all());

    		$nama = $Request ["nama"];
    		return "hallo nama saya adalah $nama";
    }



}
