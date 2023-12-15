<?php

namespace App\Http\Controllers;

use App\Models\Periode;
use Illuminate\Http\Request;

class PeriodeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $cari = $request->cari;
        $jumlahbaris = 5;

        $query = Periode::query();

        if (strlen($cari)) {
            $query->where(function ($q) use ($cari) {
                $q->where('periode_awal', 'LIKE', '%' . $cari . '%');
                $q->orWhere('periode_akhir', 'LIKE', '%' . $cari . '%');

            });
        }

        $data = $query->paginate($jumlahbaris);

        return view('Dashboard.dashboard-pengurus.kepengurusan.Periode')->with('data', $data);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Dashboard.dashboard-pengurus.kepengurusan.crud.CreatePeriode');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
                // Validasi data yang dikirimkan oleh pengguna
        $request->validate([
            'periode_awal' => 'required',
            'periode_akhir' => 'required',
        ]);

         // Membuat instance model Rekening dengan data yang diterima dari formulir
        $periode = new Periode([
            'periode_awal' => $request->input('periode_awal'),
            'periode_akhir' => $request->input('periode_akhir'),
        ]);

        // Menyimpan data Rekening ke dalam database
        $periode->save();

        // Redirect ke halaman yang sesuai setelah penyimpanan berhasil
        return redirect('/dashboardPengurus/PeriodeKepengurusan')->with('success', 'Data berhasil ditambahkan');

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
        $data = Periode::findOrFail($id);
        return view('Dashboard.dashboard-pengurus.kepengurusan.crud.EditPeriode', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'periode_awal' => 'required',
            'periode_akhir' => 'required',
        ]);

        $periode = Periode::findOrFail($id);

        // Perbarui data Rekening dengan data yang diterima dari formulir
        $periode->periode_awal = $request->input('periode_awal');
        $periode->periode_akhir = $request->input('periode_akhir');

        // Simpan perubahan ke dalam database
        $periode->save();

        // Redirect ke halaman yang sesuai setelah pembaruan berhasil
        return redirect('/dashboardPengurus/PeriodeKepengurusan')->with('success', 'Data berhasil diperbarui');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Periode::where('id',$id)->delete();
        return redirect()->to('/dashboardPengurus/PeriodeKepengurusan')->with('success','Data Berhasil Dihapus!');
    }
}
