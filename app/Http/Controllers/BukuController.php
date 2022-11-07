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
        //Validasi Formulir 
        $validatedData = $request->validate([
               'name' => 'required',
               'jumlah' => 'required',
         ]);

         // ensure the request has a file before we attempt anything else.
         if ($request->hasFile('file')) {

               $request->validate([
                  'image' => 'mimes:jpeg,bmp,png' // Only allow .jpg, .bmp and .png file types.
               ]);

               // Save the file locally in the storage/public/ folder under a new folder named /product
               $request->file->store('product', 'public');

               // Store the record, using the new file hashname which will be it's new filename identity.
               $buku = new Buku([
                  "name" => $request->get('name'),
                  "file_path" => $request->file->hashName(),
                  "jumlah" => $request->get('jumlah')
               ]);
               $buku->save(); // Finally, save the record.
               Buku::create($buku);
         }
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
