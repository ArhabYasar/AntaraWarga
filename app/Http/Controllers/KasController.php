<?php

namespace App\Http\Controllers;

use App\Models\Kas;
use App\Models\Warga;
use Illuminate\Http\Request;

class KasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $cari = $request->cari;
        $jumlahbaris = 5;

        $query = Kas::query();

        if (strlen($cari)) {
            $query->where(function ($q) use ($cari) {
                $q->where('kas', 'LIKE', '%' . $cari . '%')
                  ->orWhereHas('getWarga', function ($wargaQuery) use ($cari) {
                      $wargaQuery->where('nama', 'LIKE', '%' . $cari . '%');
                  });
            });
        }

        $data = $query->with('getWarga')->paginate($jumlahbaris);

        return view('Dashboard.dashboard-pengurus.keuangan.DataKas')->with('data', $data);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $warga = Warga::all();
        return view('Dashboard.dashboard-pengurus.keuangan.crud.CreateKas', compact('warga'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi data yang dikirimkan oleh pengguna
        $request->validate([
            'warga_id' => 'required|exists:warga,id',
            'kas' => 'required|unique:kas,kas',
        ]);

        // Membuat instance model Rekening dengan data yang diterima dari formulir
        $rekening = new Kas([
            'warga_id' => $request->input('warga_id'),
            'kas' => $request->input('kas'),
        ]);

        // Menyimpan data Rekening ke dalam database
        $rekening->save();

        // Redirect ke halaman yang sesuai setelah penyimpanan berhasil
        return redirect('/dashboardPengurus/DataKas')->with('success', 'Rekening berhasil ditambahkan');
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
        $data = Kas::findOrFail($id); // Mengambil data Rekening berdasarkan $id
        $warga = Warga::all();

        return view('Dashboard.dashboard-pengurus.keuangan.crud.EditKas', compact('data', 'warga'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
         // Validasi data yang dikirimkan oleh pengguna
    $request->validate([
        'warga_id' => 'required|exists:warga,id',
        'kas' => 'required|unique:kas,kas,' . $id, // Mengecualikan rekening saat ini dari validasi unik
    ]);

    // Temukan rekaman Rekening yang akan diperbarui berdasarkan $id
    $rekening = Kas::findOrFail($id);

    // Perbarui data Rekening dengan data yang diterima dari formulir
    $rekening->warga_id = $request->input('warga_id');
    $rekening->kas = $request->input('kas');

    // Simpan perubahan ke dalam database
    $rekening->save();

    // Redirect ke halaman yang sesuai setelah pembaruan berhasil
    return redirect('/dashboardPengurus/DataKas')->with('success', 'Rekening berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Kas::where('id',$id)->delete();
        return redirect()->to('/dashboardPengurus/DataKas')->with('success','Data Berhasil Dihapus!');

    }
}
