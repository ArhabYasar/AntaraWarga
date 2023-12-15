<?php

namespace App\Http\Controllers;

use App\Models\Hunian;
use App\Models\RumahKosong;
use App\Models\Warga;
use Illuminate\Http\Request;

class RumahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $cari = $request->cari;
        $jumlahbaris = 5;

        $query = RumahKosong::query();

        if (strlen($cari)) {
            $query->where(function ($q) use ($cari) {
                $q->where('tanggal', 'LIKE', '%' . $cari . '%')
                  ->orWhere('keterangan', 'LIKE', '%' . $cari . '%')
                  ->orWhereHas('getWarga', function ($wargaQuery) use ($cari) {
                      $wargaQuery->where('nama', 'LIKE', '%' . $cari . '%');
                  })
                  ->orWhereHas('getHunian', function ($bankQuery) use ($cari) {
                      $bankQuery->where('alamat', 'LIKE', '%' . $cari . '%');
                  });
            });
        }

        $data = $query->with('getWarga', 'getHunian')->paginate($jumlahbaris);

        return view('Dashboard.dashboard-pengurus.keamanan.RumahKosong')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $warga = Warga::all();
        $hunian = Hunian::all();
        return view('Dashboard.dashboard-pengurus.keamanan.crud.CreateRumah', compact('warga','hunian'));

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
                    'keterangan' => 'required'
                ]);

                // Membuat instance model Rekening dengan data yang diterima dari formulir
                $rumah = new RumahKosong([
                    'warga_id' => $request->input('warga_id'),
                    'hunian_id' => $request->input('hunian_id'),
                    'tanggal' => $request->input('tanggal'),
                    'keterangan' => $request->input('keterangan'),
                ]);

                // Menyimpan data Rekening ke dalam database
                $rumah->save();

                // Redirect ke halaman yang sesuai setelah penyimpanan berhasil
                return redirect('/dashboardPengurus/RumahKosong')->with('success', 'Rekening berhasil ditambahkan');

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
        $data = RumahKosong::findOrFail($id); // Mengambil data Rekening berdasarkan $id
        $warga = Warga::all();
        $hunian = Hunian::all();

        return view('Dashboard.dashboard-pengurus.keamanan.crud.EditRumah', compact('data', 'warga', 'hunian'));

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
            'keterangan' => 'required'
        ]);

        $rekening = RumahKosong::findOrFail($id);

        // Perbarui data Rekening dengan data yang diterima dari formulir
        $rekening->warga_id = $request->input('warga_id');
        $rekening->hunian_id = $request->input('hunian_id');
        $rekening->tanggal = $request->input('tanggal');
        $rekening->keterangan = $request->input('keterangan');

        // Simpan perubahan ke dalam database
        $rekening->save();

        // Redirect ke halaman yang sesuai setelah pembaruan berhasil
        return redirect('/dashboardPengurus/RumahKosong')->with('success', 'Rekening berhasil diperbarui');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        RumahKosong::where('id',$id)->delete();
        return redirect()->to('/dashboardPengurus/RumahKosong')->with('success','Data Berhasil Dihapus!');

    }
}
