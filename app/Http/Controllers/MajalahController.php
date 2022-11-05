<?php

namespace App\Http\Controllers;
use App\Models\Majalah;
use Illuminate\Http\Request;

class MajalahController extends Controller
{
    public function index(){
        $majalah = Majalah::paginate(10);

        return view('majalah.index',compact('majalah'),[
            "title" => "Books"
        ]);
     }

     public function create() { 
        return view('majalah.create',[
         "title" => "Add Majalah"
        ]); 
     }

     public function edit($id) { 
        return view('majalah.edit', [
         'id' => $id,
         'title' => "Edit Majalah"
        ]);
     } 

     public function destroy($id) { 
        Majalah::destroy($id);
        return redirect()->route('majalah.index')->with('message','Delete Majalah success');
     } 

     public function store(Request $request) { 
        //Validasi Formulir 
        try{
         $this->validate($request, [ 
            'judul' => 'required', 
            'topik' => 'required|regex:/^[\pL\s\-]+$/u',
            'jumlah_halaman' => 'required:digits',
            'harga' => 'required|numeric'
        ]); 
        //Fungsi Simpan Data ke dalam Database 
        Majalah::create([ 'judul' => $request->judul, 'topik' => $request->topik, 'jumlah_halaman' => $request->jumlah_halaman ]); 
            
        return redirect()->route('majalah.index')->with('message','Add Majalah success');
        }catch(Exception $e){ 
        return redirect('/')->with('error','Add Majalah Fail');
        } 
     }

     public function update(Request $request, $id){
        $this->validate($request, [ 
            'judul' => 'required|regex:/^[\pL\s\-]+$/u', 
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
