<?php

namespace App\Http\Controllers;

use App\Models\Comment;

use Illuminate\Http\Request;

class commentcontroller extends Controller
{
    function index()
    {
        $pageTitle = 'comments';
       $comments = Comment::all();

       return view('comment.index',['comments' => $comments,"pageTitle" => $pageTitle]);
    }

    function create()
    {
        comment::create([
             'author' => 'Mohamed',
             'content' => 'This is a test comment',
             'post_id' => '3708a3f7-d4fa-48c0-8391-8fdc87317f3f'
        ]);

        return redirect('/comments');
    }
}
