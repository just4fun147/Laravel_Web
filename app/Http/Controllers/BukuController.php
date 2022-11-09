<?php

namespace App\Http\Controllers;
use App\Models\Buku;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    public function index(){
        $buku = Buku::paginate(10);

        return view('buku.index',compact('buku'),[
            "title" => "Books"
        ]);
     }

     public function create() { 
        return view('perpus.page.addBuku',[
         "title" => "Add Buku"
        ]); 
     }

     public function edit($id) { 
        return view('buku.edit', [
         'id' => $id,
         'title' => "Edit Buku"
        ]);
     } 

     public function destroy($id) { 
        Buku::destroy($id);
        return redirect()->route('buku.index')->with('message','Delete Buku success');
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
        $this->validate($request, [ 
            'judul' => 'required', 
            'jumlah' => 'required|digits', 
            'gambar' => 'required' 
        ]); 
        $temp = Buku::find($id);
        $temp->judul = $request->judul;
        $temp->jumlah = $request->jumlah;
        $temp->gambar = $request->gambar;
        $temp->save();
        return redirect()->route('buku.index')->with('message','Edit Buku success');
     }
}
