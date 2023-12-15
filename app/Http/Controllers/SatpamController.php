<?php

namespace App\Http\Controllers;

use App\Models\Warga;
use App\Models\Hunian;
use App\Models\Satpam;
use Illuminate\Http\Request;

class SatpamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $cari = $request->cari;
        $jumlahbaris = 5;

        $query = Satpam::query();

        if (strlen($cari)) {
            $query->where(function ($q) use ($cari) {
                $q->where('tanggal', 'LIKE', '%' . $cari . '%')
                  ->orWhereHas('getWarga', function ($wargaQuery) use ($cari) {
                      $wargaQuery->where('nama', 'LIKE', '%' . $cari . '%')
                                 ->orWhere('tanggal_lahir', 'LIKE', '%' . $cari . '%');
                  })
                  ->orWhereHas('getHunian', function ($bankQuery) use ($cari) {
                      $bankQuery->where('alamat', 'LIKE', '%' . $cari . '%');
                  });
            });
        }

        $data = $query->with('getWarga', 'getHunian')->paginate($jumlahbaris);

        return view('Dashboard.dashboard-pengurus.keamanan.DataSatpam')->with('data', $data);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $warga = Warga::all();
        $hunian = Hunian::all();
        return view('Dashboard.dashboard-pengurus.keamanan.crud.CreateSatpam', compact('warga','hunian'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi data yang dikirimkan oleh pengguna
        $request->validate([
            'warga_id' => 'required|exists:warga,id',
            'hunian_id' => 'required|exists:hunian,id',
            'tanggal' => 'required',
        ]);

         // Membuat instance model Rekening dengan data yang diterima dari formulir
        $satpam = new Satpam([
            'warga_id' => $request->input('warga_id'),
            'hunian_id' => $request->input('hunian_id'),
            'tanggal' => $request->input('tanggal'),
        ]);

        // Menyimpan data Rekening ke dalam database
        $satpam->save();

        // Redirect ke halaman yang sesuai setelah penyimpanan berhasil
        return redirect('/dashboardPengurus/DataSatpam')->with('success', 'Data berhasil ditambahkan');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

        $data = Satpam::findOrFail($id); // Mengambil data Rekening berdasarkan $id
        $warga = Warga::all();
        $hunian = Hunian::all();

        return view('Dashboard.dashboard-pengurus.keamanan.crud.EditSatpam', compact('data', 'warga', 'hunian'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'warga_id' => 'required|exists:warga,id',
            'hunian_id' => 'required|exists:hunian,id',
            'tanggal' => 'required',
        ]);

        $satpam = Satpam::findOrFail($id);

        // Perbarui data Rekening dengan data yang diterima dari formulir
        $satpam->warga_id = $request->input('warga_id');
        $satpam->hunian_id = $request->input('hunian_id');
        $satpam->tanggal = $request->input('tanggal');

        // Simpan perubahan ke dalam database
        $satpam->save();

        // Redirect ke halaman yang sesuai setelah pembaruan berhasil
        return redirect('/dashboardPengurus/DataSatpam')->with('success', 'Data berhasil diperbarui');


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Satpam::where('id',$id)->delete();
        return redirect()->to('/dashboardPengurus/DataSatpam')->with('success','Data Berhasil Dihapus!');
    }
}
