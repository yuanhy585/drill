<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index()
    {
        $posts = DB::table('posts')->get();  // Post::all();

        return view('post.index',compact('posts'));
    }



    public function create()
    {
        return view('post.create');
    }

    public function store(Request $request)
    {
        $inputs = $request->all();//这一块是从create界面传过来的所有值

        $post = new Post();
        $post->title = $inputs['title'];
        $post->subtitle = $inputs['subtitle'];
        $post->content = $inputs['content'];
        $post->user_id = $inputs['user_id'];

        $post->save();
        return redirect('/post');
    }

    public function show($id)
    {
        $post = Post::where('id',$id)->first();
        return view('post.show',compact('post'));
    }


}
