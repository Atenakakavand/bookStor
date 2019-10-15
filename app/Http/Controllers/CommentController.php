<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Mail\CommentMail;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class CommentController extends Controller
{
    public function save(request $request){
        $record = new Comment($request->all());
        $user = Auth::user();
        $record->user_id = $user->id;
        $record->save();

        Mail::to($user->email)->send(new CommentMail($user));

        return redirect()->back();
    }
}
