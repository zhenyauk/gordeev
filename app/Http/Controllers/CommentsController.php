<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function add(Request $request)
    {
       // dd( $request->all() );

        $comment = new Comment;
        $comment->article_id = $request->post_id;
        $comment->user_id = $request->user_id;
        $comment->username = $request->name;
        $comment->body = strip_tags( $request->message ) ;

        if($request->capt == 5){
            $comment->save();
            return back();
        } else {
            dd('Неправильная Капча | Wrong BOT Test');
        }

    }
}
