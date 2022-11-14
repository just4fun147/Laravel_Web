<?php

namespace App\Http\Controllers;
use App\Models\Majalah;
use Illuminate\Http\Request;
use Exception;
class MajalahController extends Controller
{
    public function index(){
        $majalah = Majalah::paginate(10);

        return view('perpus.page.listMajalah',compact('majalah'),[
            "title" => "Majalah"
        ]);
     }

     public function create() { 
        return view('perpus.page.addMajalah',[
         "title" => "Add Majalah"
        ]); 
     }

     public function edit($id) { 
      $majalah = Majalah::find($id);
        return view('perpus.page.editMajalah ', [
         'majalah' => $majalah,
         'title' => "Edit Majalah"
        ]);
     } 

     public function destroy($id) { 
      try{
         Majalah::destroy($id);
         return redirect('/listMajalah')->with('info','Berhasil Menghapus Majalah');
      }catch(Exception $e){
         return redirect('/listMajalah')->with('error','Gagal Menghapus Majalah');
      }
     } 

     public function store(Request $request) { 
        //Validasi Formulir 
        try{
         $this->validate($request, [ 
            'judul' => 'required', 
            'topik' => 'required|regex:/^[\pL\s\-]+$/u',
            'jumlah_halaman' => 'required:digits',
            'harga' => 'required'
        ]); 
        //Fungsi Simpan Data ke dalam Database 
        Majalah::create([ 
            'judul' => $request->judul, 
            'topik' => $request->topik, 
            'jumlah_halaman' => $request->jumlah_halaman, 
            'harga' => $request->harga
         ]); 
            
         return redirect('/listMajalah')->with('message','Berhasil Menambahkan Majalah');
        }catch(Exception $e){ 
         return redirect('/listMajalah')->with('error','Gagal Menambahkan Majalah');
        } 
     }

     public function update(Request $request, $id){
      try{
         $this->validate($request, [ 
            'judul' => 'required', 
            'topik' => 'required|regex:/^[\pL\s\-]+$/u',
            'jumlah_halaman' => 'required:digits',
            'harga' => 'required'
           ]); 
           $temp = Majalah::find($id);
           $temp->judul = $request->judul;
           $temp->topik = $request->topik;
           $temp->jumlah_halaman = $request->jumlah_halaman;
           $temp->harga = $request->harga;
           $temp->save();
           return redirect('/listMajalah')->with('message','Berhasil Mengedit Majalah');
      }catch(Exception $e){ 
         return redirect('/listMajalah')->with('error','Gagal Mengedit Majalah');
        } 
        
     }
}
