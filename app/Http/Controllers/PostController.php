<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Post;
use Auth;

class PostController extends Controller
{

    // memberi auth dengan pengecualian contoh : functions index
    // public function __construct()
    // {
    //     $this->middleware('auth')->except(['index']);
    // }

    public function __construct()
    {
        $this->middleware('auth')->only(['create', 'edit', 'update', 'store', 'index', 'show', 'destroy']);

    }

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
    	// $query = DB::table('posts')->insert([
    	// 	"title" => $request["title"],
    	// 	"body" => $request["body"]
    	// ]);

        // pake elequent
        // $post = new Post;
        // $post->title = $request["title"];
        // $post->body = $request["body"];
        // $post->save();

        // Mass Assignment
        $post = Post::create([
                "title" => $request["title"],
                "body" => $request["body"],
                "user_id" => Auth::id()
        ]);

    	return redirect('/posts')->with('success', 'data berhasil di Simpan');
    }


    public function index()
    {
        // pake query builder        
    	// $posts = DB::table('posts')->get(); // select * from posts

        // pake elequent
        // $posts = Post::all();// menampilkan semua data postingan semua users 

        $user = Auth::user();// menampilkan semua data postingan satu user/user tertentu 
        $posts = $user->posts;// menampilkan semua data postingan satu user/user tertentu
    	return view('posts.index', compact('posts'));
    }


    public function show($id)
    {
        // pake query builder        
    	// $post = DB::table('posts')->where('id', $id)->first();

        // pake elequent
        $post =  Post::find($id);
    	return view('posts.show', compact('post'));

    }


    public function edit($id)
    {
        // pake query builder        
    	// $post = DB::table('posts')->where('id', $id)->first();

        // pake elequent
        $post =  Post::find($id);
    	return view('posts.edit', compact('post'));

    }


    public function update($id, Request $request)
    {

        // pake query builder  
    	// $query = DB::table('posts')
    	// 		->where('id', $id)
    	// 		->update([
    	// 			 "title" => $request["title"],
    	// 			 "body" => $request["body"]
    	// 		]);

        // pake elequent // Mass Assignment
        $update = Post::where('id', $id)->update([
               "title" => $request["title"],
                "body" => $request["body"]
        ]);
    	return redirect('/posts')->with('success', 'data berhasil di Update');

    }


    public function destroy($id)
    {
        // pake query builder          
    	// $query = DB::table('posts')->where('id', $id)->delete();

        // pake elequent cara1
        // $post =  Post::find($id);
        // $post->delete();

        // pake elequent cara2
        Post::destroy($id);
    	return redirect('/posts')->with('berhasil', 'data berhasil di Delete');
    }




}
