<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;
use App\Models\Majalah;

class DashboardController extends Controller
{
    public function index(){
        
        return view('perpus.page.dashboard', [
            'title' => 'Dashboard',
            'active' => 'Dashboard'
        ]);
    }

    public function listBuku(){
        $buku = Buku::paginate(10);
        return view('perpus.page.listBuku',compact('buku'), [
            'title' => 'List Buku',
            'active' => 'List Buku'
        ]);
    }
    public function listPeminjam(){
        
        return view('perpus.page.listPeminjam', [
            'title' => 'List Peminjam',
            'active' => 'List Peminjam'
        ]);
    }
    public function listPembeli(){
        
        return view('perpus.page.listPembeli', [
            'title' => 'List Pembeli',
            'active' => 'List Pembeli'
        ]);
    }

    public function listPeminjaman(){
        
        return view('perpus.page.listPeminjaman', [
            'title' => 'List Peminjaman',
            'active' => 'List Peminjaman'
        ]);
    }

    public function listPembelianMajalah(){
        
        return view('perpus.page.listPembelianMajalah', [
            'title' => 'List Pembelian Majalah',
            'active' => 'List Pembelian Majalah'
        ]);
    }

    public function listMajalah(){
        $majalah = Majalah::paginate(10);

        return view('perpus.page.listMajalah', compact('majalah'), [
            'title' => 'List Majalah',
            'active' => 'List Majalah'
        ]);
    }

}
