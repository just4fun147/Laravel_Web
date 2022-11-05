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
        return view('buku.create',[
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
        //Validasi Formulir 
        try{
         $this->validate($request, [ 
            'judul' => 'required', 
            'jumlah' => 'required|digits', 
            'gambar' => 'required' 
        ]); 
        //Fungsi Simpan Data ke dalam Database 
        Buku::create([ 'judul' => $request->judul, 'jumlah' => $request->jumlah, 'gambar' => $request->gambar ]); 
            
        return redirect()->route('buku.index')->with('message','Add Buku success');
        }catch(Exception $e){ 
        return redirect('/')->with('error','Add Buku Fail');
        } 
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
