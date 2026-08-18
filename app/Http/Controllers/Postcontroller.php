<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class Postcontroller extends Controller
{
    function index()
    {
       $data = Post::paginate(10);

       return view('post.index',['posts' => $data,"pageTitle" => "Blog"]);
    }

    function show($id)
    {
        $post = Post::findorfail($id);

        return view('post.show',['post' => $post,"pageTitle" => $post->title]);
    }

    function create()
    {
        Post::create([
             'title' => 'My find uniqe post',
             'body' => 'This is to test find',
             'published' => true
        ]);

        Post::factory(100)->create();

        return redirect('/blog');
    }

    function delete()
    {
        Post::destroy('9da6a415-0002-4789-9cbc-0aabe77b44f2');
    }
}
