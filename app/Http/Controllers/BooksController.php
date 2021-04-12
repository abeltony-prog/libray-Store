<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\books;

class BooksController extends Controller
{
    //
    public function storeBooks(Request $request){
        $request->validate([
            'name'=>"required|unique:books",
            'code'=>'required|max:5',
            'number'=>'required'
        ]);

        $books = New books;
        $books->name=$request->name;
        $books->code=$request->code;
        $books->number=$request->number;
        $books->save();
        return redirect('/home')->with('success', 'New Book added Successfully!!');
    }
}
