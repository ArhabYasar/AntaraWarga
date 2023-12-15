<?php

namespace App\Http\Controllers;

use App\Models\Pengumuman;
use Illuminate\Http\Request;

class PengumumanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $cari = $request->cari;
        $jumlahbaris = 5;

        $query = Pengumuman::query();

        if (strlen($cari)) {
            $query->where(function ($q) use ($cari) {
                $q->where('kategori', 'LIKE', '%' . $cari . '%');
                $q->orWhere('isi', 'LIKE', '%' . $cari . '%');

            });
        }

        $data = $query->paginate($jumlahbaris);

        return view('Dashboard.dashboard-pengurus.pengumuman.Pengumuman')->with('data', $data);

    }
    public function index1(Request $request)
    {
        $cari = $request->cari;
        $jumlahbaris = 5;

        $query = Pengumuman::query();

        if (strlen($cari)) {
            $query->where(function ($q) use ($cari) {
                $q->where('kategori', 'LIKE', '%' . $cari . '%');
                $q->orWhere('isi', 'LIKE', '%' . $cari . '%');

            });
        }

        $data = $query->paginate($jumlahbaris);

        return view('Dashboard.dashboard-warga.Pengumuman')->with('data', $data);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Dashboard.dashboard-pengurus.pengumuman.crud.CreatePengumuman');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
                // Validasi data yang dikirimkan oleh pengguna
        $request->validate([
            'kategori' => 'required',
            'isi' => 'required',
        ]);

         // Membuat instance model Rekening dengan data yang diterima dari formulir
        $pe = new Pengumuman([
            'kategori' => $request->input('kategori'),
            'isi' => $request->input('isi'),
        ]);

        // Menyimpan data Rekening ke dalam database
        $pe->save();

        return redirect('/dashboardPengurus/Pengumuman')->with('success','Data Berhasil Dibuat!');
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
        $data = Pengumuman::find($id);
        return view('Dashboard.dashboard-pengurus.pengumuman.crud.EditPengumuman')->with('data', $data);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'kategori' => 'required',
            'isi' => 'required',
        ]);

        $pe = Pengumuman::findOrFail($id);

        // Perbarui data Rekening dengan data yang diterima dari formulir
        $pe->kategori = $request->input('kategori');
        $pe->isi = $request->input('isi');

        // Simpan perubahan ke dalam database
        $pe->save();

        // Redirect ke halaman yang sesuai setelah pembaruan berhasil
        return redirect('/dashboardPengurus/Pengumuman')->with('success', 'Data berhasil diperbarui');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Pengumuman::where('id',$id)->delete();
        return redirect()->to('/dashboardPengurus/Pengumuman')->with('success','Data Berhasil Dihapus!');

    }
}
