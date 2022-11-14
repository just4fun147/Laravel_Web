<?php

namespace App\Http\Controllers;
use App\Models\Buku;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Exception;

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
      
      try{
         $temp = Buku::find($id);
         Storage::delete($temp->gambar);
         Buku::destroy($id);
         return redirect('/listBuku')->with('info','Berhasil Menghapus Buku');
      }catch(Exception $e){
         return redirect('/listBuku')->with('error','Gagal Menghapus Buku');
      }
        
     } 

     public function store(Request $request) { 
      $request->file('gambar')->store('buku-images', 'public');
      try{
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
         return redirect('/listBuku')->with('message','Berhasil Menambahkan Buku');
      }catch(Exception $e){ 
         return redirect('/listBuku')->with('error','Gagal Menambahkan Buku');
        } 
        
     }

     public function update(Request $request, $id){
      try{
         if($request->file('gambar')){
            if($request->oldImage){
               Storage::delete($request->oldImage);
            }
            $request->file('gambar')->store('buku-images', 'public');
         }
         
         $this->validate($request, [ 
            'judul' => 'required',
            'jumlah' => 'required',
            'gambar' => 'image|file|max:2048|mimes:jpg,png,jpeg',
         ]); 
           
         $temp = Buku::find($id);
         $temp->judul = $request->judul;
         $temp->jumlah = $request->jumlah;
         if( $request->hasFile('gambar')) {
            $path = $request->file('gambar')->store('buku-images');
            $temp->gambar = $path;
         }
           
         $temp->save();
         return redirect('/listBuku')->with('message','Berhasil Mengedit Buku');
      }catch(Exception $e){
         return redirect('/listBuku')->with('error','Gagal Mengedit Buku');
      }
     }

     
}
