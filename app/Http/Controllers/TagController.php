<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    function index()
    {
       $data = Tag::all();

       return view('tag.index',['tags' => $data,"pageTitle" => "Tags"]);
    }

    function create()
    {
        Tag::create([
             'title' => 'Author: Mohamed Abdo',
        ]);

        return redirect('/tags');
    }

    function testManyToMany()
    {
        // $post9 = Post::find(9);
        // $post10 = Post::find(10);

        // $post9->tags()->attach([1, 2]);
        // $post10->tags()->attach([1]);

        // return response()->json(([
        //     'post9' => $post9->tags,
        //     'post10' =>$post10->tags

        $tag = Tag::find(1);

        $tag->posts()->attach([2]);

        return response()->json([
            'tag' => $tag->title,
            'posts' => $tag->posts
        ]);
    }
}
