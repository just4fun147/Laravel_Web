<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;
use App\Models\Majalah;
use App\Models\Pembelian;
use App\Models\Peminjaman;
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
        $peminjaman = Peminjaman::paginate(10);
        return view('perpus.page.listPeminjam', compact('peminjaman'), [
            'title' => 'List Peminjam',
            'active' => 'List Peminjam'
        ]);
    }
    public function listPembeli(){
        $pembelian = Pembelian::paginate(10);
        return view('perpus.page.listPembeli',compact('pembelian'), [
            'title' => 'List Pembeli',
            'active' => 'List Pembeli'
        ]);
    }

    public function listPeminjaman(){
        $peminjaman = Peminjaman::paginate(10);
        return view('perpus.page.listPeminjaman', compact('peminjaman'), [
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

    public function profile(){

        return view('perpus.page.profile', [
            'title' => 'Profile',
            'active' => 'Profile'
        ]);
    }

}
