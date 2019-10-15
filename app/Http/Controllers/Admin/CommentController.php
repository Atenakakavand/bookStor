<?php

namespace App\Http\Controllers\Admin;

use App\Comment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CommentController extends Controller
{
    public function show()
    {
        $comments = Comment::all();
        return view('admin.panel.comment',compact('comments'));
    }

    public function agree(request $request,Comment $comment)
    {
        $comment = Comment::FindOrFail($request->comment_id);
        $comment->update(['accept'=>1]);
        alert()->success('با تشکر', 'نظر  به درستی اضافه شد')->persistent('پایان');
        return redirect()->back();
    }

    public function remove(request $request)
    {
        $comment = Comment::findOrFail($request->comment_id);
        $comment->delete();
        return redirect()->back();
    }
}
