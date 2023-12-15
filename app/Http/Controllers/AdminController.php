<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    function Pengurus(){
        return view('Dashboard.dashboard-pengurus.DashboardPengurus');
    }
    function Warga(){
        $data = Profile::find(1);
        return view('Dashboard.dashboard-warga.DashboardWarga', compact('data'));
    }
            function Petugas(){
        return view('Dashboard.dashboard-petugas.DashboardPetugas');
    }
    function UMKM(){
        return view('Dashboard.dashboard-umkm.DashboardUMKM');
    }
}
