<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;


class MovieController extends Controller
{
    public function index(){
        $movie = Movie::paginate(10);

        return view('movie.index',compact('movie'),[
            "title" => "Home"
        ]);
     }

     public function create() { 
        return view('movie.create'); 
     }
     
     public function edit($id) { 
        return view('movie.edit', ['id' => $id]); 
     } 

     public function destroy($id) { 
        Movie::destroy($id);
        return redirect()->route('movie.index');
     } 

     public function store(Request $request) { 
        //Validasi Formulir 
        $this->validate($request, [ 'judul' => 'required', 'name' => 'required', 'rating' => 'required' ]); 
        //Fungsi Simpan Data ke dalam Database 
        Movie::create([ 'judul' => $request->judul, 'name' => $request->name, 'content' => $request->rating ]); 
            
        return redirect()->route('movie.index');
     } 
}
