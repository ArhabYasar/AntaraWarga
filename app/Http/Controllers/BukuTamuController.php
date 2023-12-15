<?php

namespace App\Http\Controllers;

use App\Models\BukuTamu;
use Illuminate\Http\Request;

class BukuTamuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $cari = $request->cari;
        $jumlahbaris = 5;

        $query = BukuTamu::query();

        if ($cari) {
            $query->where('nama', 'LIKE', '%' . $cari . '%')
                ->orWhere('gender', 'LIKE', '%' . $cari . '%')
                ->orWhere('lapor', 'LIKE', '%' . $cari . '%')
                ->orWhere('status_kawin', 'LIKE', '%' . $cari . '%')
                ->orWhere('lain_lain', 'LIKE', '%' . $cari . '%')
                ->orWhere('usia', 'LIKE', '%' . $cari . '%')
                ->orWhere('kunjungan', 'LIKE', '%' . $cari . '%');
        }

        $data = $query->paginate($jumlahbaris);

        return view('Dashboard.dashboard-petugas.BukuTamu', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Dashboard.dashboard-petugas.crud.CreateBukuTamu');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'gender' => 'required',
            'lapor' => 'required',
            'status_kawin' => 'required',
            'usia' => 'required|numeric',
            'kunjungan' => 'required|numeric',
            'lain_lain' => 'nullable',
        ]);

        BukuTamu::create([
            'nama' => $request->nama,
            'gender' => $request->gender,
            'lapor' => $request->lapor,
            'status_kawin' => $request->status_kawin,
            'usia' => $request->usia,
            'kunjungan' => $request->kunjungan,
            'lain_lain' => $request->lain_lain,
        ]);

        return redirect('/dashboardPetugas/BukuTamu')->with('success', 'Data Buku Tamu berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Implementasi tampilan detail jika diperlukan
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = BukuTamu::findOrFail($id);

        return view('Dashboard.dashboard-petugas.crud.EditBukuTamu', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama' => 'required',
            'gender' => 'required',
            'lapor' => 'required',
            'status_kawin' => 'required',
            'usia' => 'required|numeric',
            'kunjungan' => 'required|numeric',
            'lain_lain' => 'nullable',
        ]);

        $bukuTamu = BukuTamu::findOrFail($id);

        $bukuTamu->update([
            'nama' => $request->nama,
            'gender' => $request->gender,
            'lapor' => $request->lapor,
            'status_kawin' => $request->status_kawin,
            'usia' => $request->usia,
            'kunjungan' => $request->kunjungan,
            'lain_lain' => $request->lain_lain,
        ]);

        return redirect('/dashboardPetugas/BukuTamu')->with('success', 'Data Buku Tamu berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        BukuTamu::findOrFail($id)->delete();

        return redirect('/dashboardPetugas/BukuTamu')->with('success', 'Data Buku Tamu berhasil dihapus');
    }
}
