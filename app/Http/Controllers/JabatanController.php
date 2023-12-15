<?php

namespace App\Http\Controllers;

use App\Models\Jabatan;
use App\Models\Periode;
use Illuminate\Http\Request;

class JabatanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(request $request)
    {
        $cari = $request->cari;
        $jumlahbaris = 5;

        $query = Jabatan::query();

        if (strlen($cari)) {
            $query->where(function ($q) use ($cari) {
                $q->where('nama', 'LIKE', '%' . $cari . '%')
                  ->orWhereHas('getPeriode', function ($periodeQuery) use ($cari) {
                      $periodeQuery->where('periode_awal', 'LIKE', '%' . $cari . '%')
                                 ->orWhere('periode_akhir', 'LIKE', '%' . $cari . '%');
                  });
            });
        }

        $data = $query->with('getPeriode')->paginate($jumlahbaris);

        return view('Dashboard.dashboard-pengurus.kepengurusan.Jabatan')->with('data', $data);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $periode = Periode::all();
        return view('Dashboard.dashboard-pengurus.kepengurusan.crud.CreateJabatan', compact('periode'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
                // Validasi data yang dikirimkan oleh pengguna
        $request->validate([
            'periode_id' => 'required|exists:periode,id',
            'nama' => 'required',
        ]);

         // Membuat instance model Rekening dengan data yang diterima dari formulir
        $jabatan = new Jabatan([
            'periode_id' => $request->input('periode_id'),
            'nama' => $request->input('nama'),
        ]);

        // Mennyimpan data Rekening ke dalam database
        $jabatan->save();

        // Redirect ke halaman yang sesuai setelah penyimpanan berhasil
        return redirect('/dashboardPengurus/Jabatan')->with('success', 'Data berhasil ditambahkan');

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
        $data = Jabatan::findOrFail($id); // Mengambil data Rekening berdasarkan $id
        $periode = Periode::all();

        return view('Dashboard.dashboard-pengurus.kepengurusan.crud.EditJabatan', compact('data', 'periode'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'periode_id' => 'required|exists:periode,id',
            'nama' => 'required',
        ]);

        $jabatan = Jabatan::findOrFail($id);

        // Perbarui data Rekening dengan data yang diterima dari formulir
        $jabatan->periode_id = $request->input('periode_id');
        $jabatan->nama = $request->input('nama');

        // Simpan perubahan ke dalam database
        $jabatan->save();

        // Redirect ke halaman yang sesuai setelah pembaruan berhasil
        return redirect('/dashboardPengurus/Jabatan')->with('success', 'Data berhasil diperbarui');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Jabatan::where('id',$id)->delete();
        return redirect()->to('/dashboardPengurus/Jabatan')->with('success','Data Berhasil Dihapus!');

    }
}
