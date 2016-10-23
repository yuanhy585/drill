<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        $inputs = $request->all();

        $comment = new Comment();
        $comment->user_id = $inputs['user_id'];
        $comment->post_id = $inputs['post_id'];
        $comment->comment = $inputs['comment'];

        $comment->save();

        return back();
    }

    public function destroy($id)
    {
        error_log("a");
        $comment = Comment::where('id', $id)->first();
        $comment->delete();

        return back();
}

}
