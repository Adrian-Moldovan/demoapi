<?php

namespace App\Http\Controllers;

use App\Models\Books;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(){
        $books = Books::all();
        return response()->json($books);
    }
    

    /**
     * 
     */
    public function show($id){
        $book = Books::find($id);
        if(empty($book)){
            return response()->json(["message" => "Book not found"], 404);    
        }

        return response()->json($book);
    }


    /**
     * 
     */
    public function store(Request $request){
        $book = new Books;
        $book->name = $request->name;
        $book->publish_date = $request->publish_date;
        $book->save();

        return response()->json([
            "message" => "Book added",
            "book" => $book
        ], 201);
    }


    /**
     * 
     */
    public function update(Request $request, $id){
        $book = Books::find($id);
        if(empty($book)){
            return response()->json(["message" => "Book not found"], 404);    
        }

        $book->name = is_null($request->name) ? $book->name : $request->name;
        $book->publish_date = is_null($request->publish_date) ? $book->publish_date : $request->publish_date;
        $book->save();

        return response()->json([
            "message" => "Book updated",
            "book" => $book
        ], 200);
    }


    /**
     * 
     */
    public function destroy($id){
        $book = Books::find($id);
        if(empty($book)){
            return response()->json(["message" => "Book not found"], 404);    
        }

        $book->delete();

        return response()->json(["message" => "Book deleted"], 204);
    }
}
