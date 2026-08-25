<?php

namespace App\Http\Controllers;

use App\Models\Tag;

use Illuminate\Http\Request;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tags = Tag::paginate(10);

       return view('tag.index',['tags' => $tags,"pageTitle" => "Tags"]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tag.create', ["pageTitle" => "Create New Tag"]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // @TODO: this will be completed in the forms section
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $tags = Tag::findorfail($id);

        return view('tag.show',['tag' => $tags,'pageTitle' => 'View Tag']);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $tags = Tag::findorfail($id);

        return view('tag.edit', ['tag' => $tags, "pageTitle" => "Edit Tag"]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // @TODO: this will be completed in the forms section
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // @TODO: this will be completed in the forms section
    }
}
