<?php

namespace App\Http\Controllers;

use App\Models\Bank;
use App\Models\Iuran;
use App\Models\Warga;
use App\Models\TerimaIuran;
use Illuminate\Http\Request;

class TerimaIuranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $cari = $request->cari;
        $jumlahbaris = 5;

        $query = TerimaIuran::query();

        if (strlen($cari)) {
            $query->where(function ($q) use ($cari) {
                $q->where('tanggal', 'LIKE', '%' . $cari . '%')
                  ->orWhere('nominal', 'LIKE', '%' . $cari . '%')
                  ->orWhere('penerima', 'LIKE', '%' . $cari . '%')
                  ->orWhereHas('warga', function ($wargaQuery) use ($cari) {
                      $wargaQuery->where('nama', 'LIKE', '%' . $cari . '%');
                  })
                  ->orWhereHas('iuran', function ($iuranQuery) use ($cari) {
                      $iuranQuery->where('nama', 'LIKE', '%' . $cari . '%');
                  });
            });
        }

        $data = $query->with('warga', 'iuran')->paginate($jumlahbaris);

        return view('Dashboard.dashboard-pengurus.iuran-warga.TerimaIuran')->with('data', $data);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $warga = Warga::all();
        $iuran = Iuran::all();
        return view('Dashboard.dashboard-pengurus.iuran-warga.crud.CreateTerimaIuran', compact('warga','iuran'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
                // Validasi data yang dikirimkan oleh pengguna
        $request->validate([
            'warga_id' => 'required|exists:warga,id',
            'iuran_id' => 'required|exists:iuran,id',
            'tanggal' => 'required',
            'nominal' => 'required',
            'penerima' => 'required',
        ]);

        // Membuat instance model Rekening dengan data yang diterima dari formulir
        $terima = new TerimaIuran([
            'warga_id' => $request->input('warga_id'),
            'iuran_id' => $request->input('iuran_id'),
            'tanggal' => $request->input('tanggal'),
            'nominal' => $request->input('nominal'),
            'penerima' => $request->input('penerima'),
        ]);

        // Menyimpan data Rekening ke dalam database
        $terima->save();

        // Redirect ke halaman yang sesuai setelah penyimpanan berhasil
        return redirect('/dashboardPengurus/TerimaIuran')->with('success', 'Data berhasil ditambahkan');

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
        $data = TerimaIuran::findOrFail($id); // Mengambil data Rekening berdasarkan $id
        $warga = Warga::all();
        $iuran = Iuran::all();

        return view('Dashboard.dashboard-pengurus.iuran-warga.crud.EditTerimaIuran', compact('data', 'warga', 'iuran'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'warga_id' => 'required|exists:warga,id',
            'iuran_id' => 'required|exists:iuran,id',
            'tanggal' => 'required',
            'nominal' => 'required',
            'penerima' => 'required',
        ]);

        // Temukan rekaman Rekening yang akan diperbarui berdasarkan $id
        $terima = TerimaIuran::findOrFail($id);

        // Perbarui data Rekening dengan data yang diterima dari formulir
        $terima->warga_id = $request->input('warga_id');
        $terima->iuran_id = $request->input('iuran_id');
        $terima->tanggal = $request->input('tanggal');
        $terima->nominal = $request->input('nominal');
        $terima->penerima = $request->input('penerima');

        // Simpan perubahan ke dalam database
        $terima->save();

        // Redirect ke halaman yang sesuai setelah pembaruan berhasil
        return redirect('/dashboardPengurus/TerimaIuran')->with('success', 'Data berhasil diperbarui');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        TerimaIuran::where('id',$id)->delete();
        return redirect()->to('/dashboardPengurus/TerimaIuran')->with('success','Data Berhasil Dihapus!');
    }
}
