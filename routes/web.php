<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/tambah/{angka1}/+/{angka2}/+/{angka3}', function ($angka1, $angka2, $angka3) {
// 	$a = $angka1 + $angka2 + $angka3;
// 	// return view('tes', compact('a'));
//     return view('tes', ["angka" => $a]);

// });

// Route::get('/kurang/{angka1}/-/{angka2}/-/{angka3}', function ($angka1, $angka2, $angka3) {
// 	$a = $angka1 - $angka2 - $angka3;
//     return view('tes', ["angka" => $a]);

// });

// Route::get('/kali/{angka1}/*/{angka2}/*/{angka3}', function ($angka1, $angka2, $angka3) {
// 	$a = $angka1 * $angka2 * $angka3;
//     return view('tes', ["angka" => $a]);

// });

// Route::get('/nama/{nama_depan}/dan/{nama_tengah}/dan/{nama_belakang}', function ($nama_depan, $nama_tengah, $nama_belakang) {
// 	$a = $nama_depan;
// 	$b = $nama_tengah;
// 	$c = $nama_belakang;
//     return "saya adalah $a $b $c";
// });


// Route::get('/perkenalan/{nama_depan}/dan/{nama_belakang}', 'PerkenalanController@hallo');
// Route::get('/angka/{a}/dan/{b}', 'PerkenalanController@angka');

// Route::get('/formulir', 'PerkenalanController@form');
// Route::post('/selamatdatang', 'PerkenalanController@selamat_datang');


// Route::get('/master', function (){
//     return view('adminlte.master');
// });

Route::get('/posts/create', 'PostController@create');
Route::post('/posts', 'PostController@store');
Route::get('/posts', 'PostController@index')->name('posts.index');
Route::get('/posts/{id}', 'PostController@show');
Route::get('/posts/{id}/edit', 'PostController@edit');
Route::put('/posts/{id}', 'PostController@update');
Route::delete('/posts/{id}', 'PostController@destroy');

// Route::resource('posts', 'PostController');


// sampai disini















