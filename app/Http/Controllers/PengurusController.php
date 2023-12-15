<?php

namespace App\Http\Controllers;

use App\Models\Jabatan;
use App\Models\Periode;
use App\Models\Pengurus;
use Illuminate\Http\Request;

class PengurusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $cari = $request->cari;
        $jumlahbaris = 5;

        $query = Pengurus::query();

        if (strlen($cari)) {
            $query->where(function ($q) use ($cari) {
                $q->where('nama', 'LIKE', '%' . $cari . '%')
                  ->orWhereHas('getPeriode', function ($periodeQuery) use ($cari) {
                      $periodeQuery->where('periode_awal', 'LIKE', '%' . $cari . '%')
                                   ->orWhere('periode_akhir', 'LIKE', '%' . $cari . '%');
                  })
                  ->orWhereHas('getJabatan', function ($jabatanQuery) use ($cari) {
                      $jabatanQuery->where('nama', 'LIKE', '%' . $cari . '%');
                  });
            });
        }

        $data = $query->with('getPeriode', 'getJabatan')->paginate($jumlahbaris);

        return view('Dashboard.dashboard-pengurus.kepengurusan.Pengurus')->with('data', $data);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $periode = Periode::all();
        $jabatan = Jabatan::all();
        return view('Dashboard.dashboard-pengurus.kepengurusan.crud.CreatePengurus', compact('periode','jabatan'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
                // Validasi data yang dikirimkan oleh pengguna
        $request->validate([
            'periode_id' => 'required|exists:periode,id',
            'jabatan_id' => 'required|exists:jabatan,id',
            'nama' => 'required',
        ]);

         // Membuat instance model Rekening dengan data yang diterima dari formulir
        $pengurus = new Pengurus([
            'periode_id' => $request->input('periode_id'),
            'jabatan_id' => $request->input('jabatan_id'),
            'nama' => $request->input('nama'),
        ]);

        // Menyimpan data Rekening ke dalam database
        $pengurus->save();

        // Redirect ke halaman yang sesuai setelah penyimpanan berhasil
        return redirect('/dashboardPengurus/Pengurus')->with('success', 'Data berhasil ditambahkan');

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
        $data = Pengurus::findOrFail($id); // Mengambil data Rekening berdasarkan $id
        $periode = Periode::all();
        $jabatan = Jabatan::all();

        return view('Dashboard.dashboard-pengurus.kepengurusan.crud.EditPengurus', compact('data', 'periode', 'jabatan'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'periode_id' => 'required|exists:periode,id',
            'jabatan_id' => 'required|exists:jabatan,id',
            'nama' => 'required',
        ]);

        $pengurus = Pengurus::findOrFail($id);

        // Perbarui data Rekening dengan data yang diterima dari formulir
        $pengurus->periode_id = $request->input('periode_id');
        $pengurus->jabatan_id = $request->input('jabatan_id');
        $pengurus->nama = $request->input('nama');

        // Simpan perubahan ke dalam database
        $pengurus->save();

        // Redirect ke halaman yang sesuai setelah pembaruan berhasil
        return redirect('/dashboardPengurus/Pengurus')->with('success', 'Data berhasil diperbarui');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Pengurus::where('id',$id)->delete();
        return redirect()->to('/dashboardPengurus/Pengurus')->with('success','Data Berhasil Dihapus!');
    }
}
