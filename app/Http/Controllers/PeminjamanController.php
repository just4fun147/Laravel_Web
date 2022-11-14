<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\peminjaman;
use App\Models\buku;
use Exception;

class PeminjamanController extends Controller
{
    public function index(){
        $peminjaman = Peminjaman::paginate(10);
        return view('perpus.page.listPeminjaman',compact('peminjaman'), [
            'title' => 'List Peminjaman',
            'active' => 'List Peminjaman'
        ]);
    }

    public function pinjam(Request $request) { 
        try{
            $date = date('Y-m-d',strtotime("+7 days"));
            $id = auth()->user()->id;
            Peminjaman::create([ 
                'buku_id' => $request->id,
                'status' => 'Dipinjam',
                'pengembalian' => $date,
                'peminjam_id' => $id
            ]); 
            $temp = Buku::find($request->id);
            $temp->jumlah--;
            $temp->save();
            return redirect('/listBuku')->with('message','Peminjaman Sukses');
        }catch(Exception $e){
            return redirect('/listBuku')->with('error','Peminjaman Gagal');
        }
        
    }

    public function balik(Request $request) { 
        try{
            $date = date('Y-m-d');
            $temp = Peminjaman::find($request->id);
            $buku = Buku::find($temp->buku_id);
            $temp->status = 'Dikembalikan';
            $temp->pengembalian = $date;
            $temp->save();

            $buku->jumlah++;
            $buku->save();
            return redirect('/listPeminjaman')->with('message','Pengembalian Sukses');
        }catch(Exception $e){
            return redirect('/listPeminjaman')->with('error','Pengembalian Gagal');
        }
        
    }
}
