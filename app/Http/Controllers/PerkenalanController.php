<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PerkenalanController extends Controller
{
    public function hallo($nama_depan, $nama_belakang){
    	$nama_lengkap = "$nama_depan $nama_belakang";
    	return view('perkenalan', compact('nama_lengkap'));
    }

    public function angka($a, $b){
    	$c = $a + $b;
    	return view('hitung_angka', compact('c'));
    }

    public function form(){
        return view('formulir');
    }

    public function selamat_datang(Request $Request){
        // dd($Request->all());
        $email = $Request['email'];
        // return view('selamat', compact('email'));
        return view('selamat', ['surat' => $email]);
    }    

}
