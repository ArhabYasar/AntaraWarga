<?php

namespace App\Http\Controllers;

use App\Models\Iuran;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $cari = $request->cari;
        $jumlahbaris = 5;

        $query = Iuran::query();

        if ($cari) {
            $query->where('tipe', 'LIKE', '%' . $cari . '%')
                ->orWhere('nama', 'LIKE', '%' . $cari . '%')
                ->orWhere('keterangan', 'LIKE', '%' . $cari . '%')
                ->orWhere('nominal', 'LIKE', '%' . $cari . '%');
        }

        $iuranData = $query->paginate($jumlahbaris);

        return view('Dashboard.dashboard-pengurus.iuran-warga.Laporan')->with('iuranData', $iuranData);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id, Request $request)
    {
        $cari = $request->cari;
        $jumlahbaris = 5;

        $query = Iuran::query();

        if ($cari) {
            $query->where('tipe', 'LIKE', '%' . $cari . '%')
                ->orWhere('nama', 'LIKE', '%' . $cari . '%')
                ->orWhere('keterangan', 'LIKE', '%' . $cari . '%')
                ->orWhere('nominal', 'LIKE', '%' . $cari . '%');
        }

        $iuranData = $query->paginate($jumlahbaris);

        return view('Dashboard.dashboard-petugas.iuran-warga.LaporanIuran', compact('iuranData'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
