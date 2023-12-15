<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $cari = $request->cari;
        $data = Transaksi::orderBy('id', 'asc');

        if ($cari) {
            $data->where('nama', 'LIKE', '%' . $cari . '%');
        }

        $data = $data->paginate(10);

        return view('Dashboard.dashboard-umkm.Transaksi', compact('data', 'cari'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Dashboard.dashboard-umkm.crud.CreateTransaksi');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'metode' => 'required',
        ]);

        $transaksi = new Transaksi([
            'nama' => $request->nama,
            'metode' => $request->metode,
            'tanggal' => now(), // Set tanggal sesuai dengan saat data disimpan
            'status' => 'Berhasil',
            'nominal' => $request->nominal, // Pastikan ada input field dengan name="nominal" pada form
        ]);

        $transaksi->save();

        return redirect()->to('/dashboardUMKM/Transaksi')->with('success', 'Data berhasil disimpan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
    }
}
