<?php

namespace App\Http\Controllers;

use App\Models\Iuran;
use Illuminate\Http\Request;

class IuranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $cari = $request->cari;
        $jumlahbaris = 5;

        $query = Iuran::query();

        if (strlen($cari)) {
            $query->where(function ($q) use ($cari) {
                $q->where('tipe', 'LIKE', '%' . $cari . '%');
                $q->orWhere('nama', 'LIKE', '%' . $cari . '%');
                $q->orWhere('nominal', 'LIKE', '%' . $cari . '%');
                $q->orWhere('keterangan', 'LIKE', '%' . $cari . '%');
            });
        }

        $data = $query->paginate($jumlahbaris);

        return view('Dashboard.dashboard-pengurus.iuran-warga.DataIuran')->with('data', $data);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Dashboard.dashboard-pengurus.iuran-warga.crud.CreateIuran');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'tipe' => 'required',
            'nama' => 'required',
            'nominal' => 'required',
            'keterangan' => 'required',
        ]);

         // Membuat instance model Rekening dengan data yang diterima dari formulir
         $iuran = new Iuran([
            'tipe' => $request->input('tipe'),
            'nama' => $request->input('nama'),
            'nominal' => $request->input('nominal'),
            'keterangan' => $request->input('keterangan'),
            'user_id' => $request->input('user_id'), // Tetap memasukkan user_id dari form
        ]);

        // Menyimpan data Rekening ke dalam database
        $iuran->save();

        return redirect('/dashboardPengurus/Iuran')->with('success','Data Berhasil Dibuat!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = Iuran::paginate(10); // Ganti 10 dengan jumlah item per halaman yang Anda inginkan

        return view('Dashboard.dashboard-petugas.iuran-warga.IuranWarga', compact('data'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Iuran::find($id);
        return view('Dashboard.dashboard-pengurus.iuran-warga.crud.EditIuran')->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'tipe' => 'required',
            'nama' => 'required',
            'nominal' => 'required',
            'keterangan' => 'required',
        ]);

        $iuran = Iuran::findOrFail($id);

        $iuran->user_id = $request->input('user_id');
        $iuran->tipe = $request->input('tipe');
        $iuran->nama = $request->input('nama');
        $iuran->nominal = $request->input('nominal');
        $iuran->keterangan = $request->input('keterangan');

        $iuran->save();

        return redirect('/dashboardPengurus/Iuran')->with('success', 'Data berhasil diperbarui');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Iuran::where('id',$id)->delete();
        return redirect()->to('/dashboardPengurus/Iuran')->with('success','Data Berhasil Dihapus!');
    }
}
