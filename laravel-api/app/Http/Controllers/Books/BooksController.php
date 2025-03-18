<?php

namespace App\Http\Controllers\Books;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Books;
use Carbon\Carbon;

class BooksController extends Controller
{
    public function index(Request $req) {
        $books = Books::get();
        return $books;
    }
    public function show($search) {
        $books = Books::where('book_name', 'LIKE', '%'.$search.'%')
        ->orWhere('author_name', 'LIKE', '%'.$search.'%')
        ->first();
        if($books) {
            return response()->json($books);
        }else {
            return response()->json(["msg" => "Book not Found"],404);
        }
    }
    public function store(Request $req) {
        Books::insert([
            'book_name' => $req->book_name,
            'author_name' => $req->author_name,
            'created_at' => Carbon::now('UTC'),
            'updated_at' => Carbon::now('UTC'),
        ]);
        return response()->json(["msg" => "Book was added"],201);
    }
    public function update(Request $req,$id) {
        $books = Books::where('id','=',$id)
        ->first();
        if($books) {
            $books->book_name = $req->book_name;
            $books->author_name = $req->author_name;
            $books->updated_at = Carbon::now('UTC');
            $books->save();
            return response()->json(["msg" => "Book was Updated"],201);
        }else {
            return response()->json(["msg" => "Book not Found"],404);
        }
    }
    public function destroy($id) {
        $books = Books::where('id','=',$id)->first();
        if($books){
            $books->delete();
            return response()->json(["msg" => "Book was deleted."],201);
        }
        else {
            return response()->json(["msg" => "Book not Found"],404);
        }
    }
}
