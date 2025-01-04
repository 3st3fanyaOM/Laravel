<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//importar clases
use App\Http\Controllers\Controller;
use App\Models\Books;

class ApiController extends Controller
{
public function index(){
    //consulta a BD al modelo libros y que nos traiga los autores
    $libros = Books::with('author')->get();
    return response()->json($libros);
}

public function store(Request $request){
    //guarda un libro en BD, recibe el objeto REQUEST
        try{

            $request->validate([
                'title' => 'required|string',
                'author_id' => 'required|integer',
                'published_year' => 'required|integer',
            ]);

            //nuevo libro
            $libro = new Books();
            $book->title = $request->input('title');
            $book->author_id = $request->input('author_id');
            $book->published_year = $request->input('published_year');
            $book->save();


        }catch(\Exception $e){
            //controlar errores
            return response()->json(['error' => 'Error'],500);
        }
    }

    //el parámetro tiene que llamarse IGUAL que lo hayamos definido en /routes/api.php
    public function destroy($id){
        //comprobamos que el libro existe
        $book = Books::find($id);

        //ctrl d errores
        if(!$libro){
            return response()->json(['message' =>'El libro no está'],404);
        }else{
            //borramos el libro
            $book->delete();
        }
        return response()->json(['message' => 'Libro eliminado'],200);

    }
}
