<?php

namespace App\Http\Controllers;
use App\Models\Buku;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    public function index(){
      $buku = Buku::paginate(10);
      return view('perpus.page.listBuku',compact('buku'), [
          'title' => 'List Buku',
          'active' => 'List Buku'
      ]);
     }

     public function create() { 
        return view('perpus.page.addBuku',[
         "title" => "Add Buku"
        ]); 
     }

     public function edit($id) { 
      $buku = Buku::find($id);
        return view('perpus.page.editBuku', [
         'buku' => $buku,
         'title' => "Edit Buku"
        ]);
     } 

     public function destroy($id) { 
        Buku::destroy($id);
        return redirect('/listBuku')->with('message','Delete Buku success');
     } 

     public function store(Request $request) { 
      $request->file('gambar')->store('buku-images', 'public');
        $validatedData = $request->validate([
               'judul' => 'required',
               'jumlah' => 'required',
               'gambar' => 'required|image|file|max:2048|mimes:jpg,png,jpeg',
         ]);

         // ensure the request has a file before we attempt anything else.
         if( $request->hasFile('gambar')) {
            $path = $request->file('gambar')->store('buku-images');
            $validatedData['gambar'] =$path;
        }
         Buku::create($validatedData);
        return redirect('/listBuku');
     }

     public function update(Request $request, $id){
      $request->file('gambar')->store('buku-images', 'public');
        $this->validate($request, [ 
         'judul' => 'required',
         'jumlah' => 'required',
         'gambar' => 'required|image|file|max:2048|mimes:jpg,png,jpeg',
        ]); 
        
        $temp = Buku::find($id);
        $temp->judul = $request->judul;
        $temp->jumlah = $request->jumlah;
        if( $request->hasFile('gambar')) {
         $path = $request->file('gambar')->store('buku-images');
            $temp->gambar = $path;
         }
        
        $temp->save();
        return redirect('/listBuku')->with('message','Edit Buku success');
     }
}
