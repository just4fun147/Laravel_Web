<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pembelian;
use App\Models\majalah;

class PembelianController extends Controller
{
    public function beli(Request $request){
        $id = auth()->user()->id;
        Pembelian::create([ 
            'majalah_id' => $request->id,
            'status' => 'Dipesan',
            'pembeli_id' => $id
         ]); 
        return redirect('/listMajalah');
    }
}
