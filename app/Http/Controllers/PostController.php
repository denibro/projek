<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PostController extends Controller
{
    public function create ()
    {
    	return view('posts.create');
    }

    public function store(Request $request)
    {

    	//pake validasi error
    	$validatedData = $request->validate([
	        'title' => 'required|unique:posts|max:255',
	        'body' => 'required',
    	]);

    	// pake query builder
    	$query = DB::table('posts')->insert([
    		"title" => $request["title"],
    		"body" => $request["body"]
    		
    	]);
    	return redirect('/posts')->with('success', 'data berhasil disimpan');
    }

    public function index(){
    	$posts = DB::table('posts')->get(); // select * from posts
    	return view('posts.index', compact('posts'));
    }


    public function show($id){
    	$post = DB::table('posts')->where('id', $id)->first();
    	return view('posts.show', compact('post'));

    }

    public function edit($id){
    	$post = DB::table('posts')->where('id', $id)->first();
    	return view('posts.edit', compact('post'));

    }

    public function update($id, Request $request){

    	//pake validasi error
    	$validatedData = $request->validate([
	        'title' => 'required|unique:posts|max:255',
	        'body' => 'required',
    	]);

    	$query = DB::table('posts')
    			->where('id', $id)
    			->update([
    				 "title" => $request["title"],
    				 "body" => $request["body"]
    			]);
    	return redirect('/posts')->with('success', 'data berhasil diupdate');

    }

    public function destroy($id){
    	$query = DB::table('posts')->where('id', $id)->delete();
    	return redirect('/posts')->with('success', 'data berhasil didelete');
    }







}
