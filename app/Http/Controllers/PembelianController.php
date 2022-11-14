<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pembelian;
use App\Models\majalah;
use Exception;

class PembelianController extends Controller
{
    public function beli(Request $request){
        try{
            $id = auth()->user()->id;
            Pembelian::create([ 
                'majalah_id' => $request->id,
                'status' => 'Dipesan',
                'pembeli_id' => $id
            ]); 
            return redirect('/listMajalah')->with('message','Pemesanan Sukses');
        }catch(Exception $e){
            return redirect('/listMajalah')->with('error','Pemesanan Gagal');
        }
        
    }
    public function bayar(Request $request) {
        try{
            $temp = Pembelian::find($request->id);
            $temp->status = 'Lunas';
            $temp->save();
            return redirect('/listPembelianMajalah')->with('message','Pembayaran Sukses');
        }catch(Exception $e){
            return redirect('/listPembelianMajalah')->with('error','Pembayaran Gagal');
        }
        
    }
    public function batal(Request $request) {
        try{
            Pembelian::destroy($request->id);
            return redirect('/listPembelianMajalah')->with('message', 'Pembatalan Sukses');
        }catch(Exception $e){
            return redirect('/listPembelianMajalah')->with('message', 'Pembatalan Gagal');
        }
        
    }
}
