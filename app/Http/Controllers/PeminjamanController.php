<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\peminjaman;
use App\Models\buku;

class PeminjamanController extends Controller
{
    public function index(){
        $peminjaman = Peminjaman::paginate(10);
        return view('perpus.page.listPeminjaman}',compact('peminjaman'), [
            'title' => 'List Peminjaman',
            'active' => 'List Peminjaman'
        ]);
    }

    public function store(Request $request) { 

}
