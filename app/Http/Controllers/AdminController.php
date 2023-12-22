<?php

namespace App\Http\Controllers;

use App\Models\Tamu;
use App\Models\Iuran;
use App\Models\Berita;
use App\Models\Hunian;
use App\Models\Profile;
use App\Models\Keluarga;
use App\Models\Pengingat;
use App\Models\Pembayaran;
use App\Models\Pengumuman;
use App\Models\RumahKosong;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    function Pengurus(){
        $pengumuman = Pengumuman::all();
        
        $berita = Berita::all();

        $keluarga = Keluarga::distinct('nkk')->count();

        $hunian = Hunian::count();

        $rumahkosong = RumahKosong::count();
        
        $iuran = Iuran::count();

        return view('Dashboard.dashboard-pengurus.DashboardPengurus', compact('iuran', 'rumahkosong', 'hunian', 'keluarga', 'pengumuman', 'berita'));
    }
    function Warga(){
        $pengumuman = Pengumuman::all();

        $berita = Berita::all();

        $tagihan = Pengingat::all();

        $pembayaran = Pembayaran::count();

        $jumlahData = Tamu::count();

        $data = Profile::find(1);

        return view('Dashboard.dashboard-warga.DashboardWarga', compact('data', 'jumlahData', 'tagihan', 'pembayaran', 'berita', 'pengumuman'));
    }
    function Petugas(){
        $berita = Berita::all();

        $pengumuman = Pengumuman::all();

        $pembayaran = Pembayaran::count();

        $tagihan = Pengingat::all();

        $jumlahData = Tamu::count();

        return view('Dashboard.dashboard-petugas.DashboardPetugas', compact('jumlahData', 'tagihan', 'pembayaran', 'pengumuman', 'berita'));
    }
    function UMKM(){
        $berita = Berita::all();

        $pengumuman = Pengumuman::all();

        $pembayaran = Pembayaran::count();

        $tagihan = Pengingat::all();

        $jumlahData = Tamu::count();

        return view('Dashboard.dashboard-umkm.DashboardUMKM', compact('jumlahData', 'tagihan', 'pembayaran', 'pengumuman', 'berita'));
    }
}
