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
        return view('movie.create',[
         "title" => "Add Movie"
        ]); 
     }
     
     public function edit($id) { 
        return view('movie.edit', [
         'id' => $id,
         'title' => "Edit Movie"
      ])->with('message','Edit Movie success'); 
     } 

     public function destroy($id) { 
        Movie::destroy($id);
        return redirect()->route('movie.index')->with('message','Delete Movie success');
     } 

     public function store(Request $request) { 
        //Validasi Formulir 
        try{
         $this->validate($request, [ 'judul' => 'required', 'name' => 'required', 'rating' => 'required' ]); 
        //Fungsi Simpan Data ke dalam Database 
        Movie::create([ 'judul' => $request->judul, 'name' => $request->name, 'rating' => $request->rating ]); 
            
        return redirect()->route('movie.index')->with('message','Add Movie success');
        }catch(Exception $e){ 
         return redirect('/')->with('error','Add Movie Fail');
         } 
     }
     
     public function update(Request $request, $id){
      $this->validate($request, [ 'judul' => 'required', 'name' => 'required', 'rating' => 'required' ]);  
      $temp = Movie::find($id);
      $temp->judul = $request->judul;
      $temp->name = $request->name;
      $temp->rating = $request->rating;
      $temp->save();
      return redirect()->route('movie.index')->with('message','Edit Movie success');
   }
}
