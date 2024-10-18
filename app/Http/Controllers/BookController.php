<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Http\Requests\BookRequest;

class BookController extends Controller
{
    public function index(){
        $books = Book::all();
        return response()->json($books);
    }
    

    /**
     * 
     */
    public function show($id){
        $book = Book::find($id);
        if(empty($book)){
            return response()->json(["message" => "Book not found"], 404);    
        }

        return response()->json($book);
    }


    /**
     * 
     */
    public function store(BookRequest $request){
        $book = new Book($request->validated());
        $book->save();

        return response()->json([
            "message" => "Book added",
            "book" => $book
        ], 201);
    }


    /**
     * 
     */
    public function update(BookRequest $request, $id){

        $book = Book::find($id);
        if(empty($book)){
            return response()->json(["message" => "Book not found"], 404);    
        }

        $book->update($request->validated());

        return response()->json([
            "message" => "Book updated",
            "book" => $book
        ], 200);
    }


    /**
     * 
     */
    public function destroy($id){
        $book = Book::find($id);
        if(empty($book)){
            return response()->json(["message" => "Book not found"], 404);    
        }

        $book->delete();

        return response()->json(["message" => "Book deleted"], 204);
    }
}
