<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;
use App\Models\Majalah;
use App\Models\Pembelian;
use App\Models\Peminjaman;
use App\Models\User;
class DashboardController extends Controller
{
    public function index(){
        $user = auth()->user();
        $totalDataBuku = Buku::count();
        $totalDataPeminjaman = Peminjaman::where('status','Dipinjam')->count();
        $totalMajalah = Majalah::count();
        $totalPembelian = Pembelian::where('status','Lunas')->count();

        if($totalDataBuku!=0 && $totalDataPeminjaman!=0){
            $tempCommon= Peminjaman::select('buku_id')->groupBy('buku_id')->orderByRaw('COUNT(*) DESC')->limit(1)->pluck('buku_id');
            $buku = Buku::find($tempCommon);
        }else{
            $buku=null;
        }
        return view('perpus.page.dashboard', compact('user','totalDataPeminjaman','totalDataBuku','totalMajalah','totalPembelian','buku'),[
            'title' => 'Dashboard',
            'active' => 'Dashboard'
        ]);
    }

    public function listBuku(){
        $buku = Buku::paginate(10);
        $user = auth()->user();
        $no = 1;
        return view('perpus.page.listBuku',compact('buku','user','no'), [
            'title' => 'List Buku',
            'active' => 'List Buku'
        ]);
    }
    public function listPeminjam(){
        $peminjaman = Peminjaman::paginate(10);
        $user = auth()->user();
        $no = 1;
        $buku = Buku::all();
        $peminjams = User::all(); 
        return view('perpus.page.listPeminjam', compact('peminjaman','user','no','buku','peminjams'), [
            'title' => 'List Peminjam',
            'active' => 'List Peminjam'
        ]);
    }
    public function listPembeli(){
        $pembelian = Pembelian::paginate(10);
        $name = auth()->user()->name;
        $no=1;
        return view('perpus.page.listPembeli',compact('pembelian','user','no'), [
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
        $user = auth()->user();
        return view('perpus.page.profile', compact('user'), [
            'title' => 'Profile',
            'active' => 'Profile'
        ]);
    }

}
