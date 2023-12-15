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
        $iuranData = Iuran::paginate(10); // Ganti 10 dengan jumlah item per halaman yang Anda inginkan

        return view('Dashboard.dashboard-pengurus.iuran-warga.Laporan', compact('iuranData'));
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
    public function show(string $id)
    {
        $iuranData = Iuran::paginate(10); // Ganti 10 dengan jumlah item per halaman yang Anda inginkan

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