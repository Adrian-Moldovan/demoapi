<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthorRequest;
use App\Models\Author;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $authors = Author::all();
        return response()->json($authors);
    }

    /**
     * Display the specified resource.
     */
    public function show(Author $author){
        return response()->json($author);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AuthorRequest $request)
    {
        $author = new Author($request->validated());
        $author->save();

        return response()->json([
            "message" => "Author added",
            "author" => $author
        ], 201);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AuthorRequest $request, Author $author){
        $author->update($request->validated());

        return response()->json([
            "message" => "Author updated",
            "author" => $author
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Author $author){
        $author->delete();
        return response()->json(["message" => "Author deleted"], 204);
    }
}
