<?php

namespace App\Http\Controllers;

use App\Models\Bank;
use App\Models\Warga;
use App\Models\Rekening;
use Illuminate\Http\Request;

class RekeningController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $cari = $request->cari;
        $jumlahbaris = 5;

        $query = Rekening::query();

        if (strlen($cari)) {
            $query->where(function ($q) use ($cari) {
                $q->where('rekening', 'LIKE', '%' . $cari . '%')
                  ->orWhereHas('getWarga', function ($wargaQuery) use ($cari) {
                      $wargaQuery->where('nama', 'LIKE', '%' . $cari . '%');
                  })
                  ->orWhereHas('getBank', function ($bankQuery) use ($cari) {
                      $bankQuery->where('nama', 'LIKE', '%' . $cari . '%');
                  });
            });
        }

        $data = $query->with('getWarga', 'getBank')->paginate($jumlahbaris);

        return view('Dashboard.dashboard-pengurus.keuangan.Rekening')->with('data', $data);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $warga = Warga::all();
        $bank = Bank::all();
        return view('Dashboard.dashboard-pengurus.keuangan.crud.CreateRekening', compact('warga','bank'));
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request)
    {
        // Validasi data yang dikirimkan oleh pengguna
        $request->validate([
            'warga_id' => 'required|exists:warga,id',
            'bank_id' => 'required|exists:bank,id',
            'rekening' => 'required|unique:rekening,rekening',
        ]);

        // Membuat instance model Rekening dengan data yang diterima dari formulir
        $rekening = new Rekening([
            'warga_id' => $request->input('warga_id'),
            'bank_id' => $request->input('bank_id'),
            'rekening' => $request->input('rekening'),
        ]);

        // Menyimpan data Rekening ke dalam database
        $rekening->save();

        // Redirect ke halaman yang sesuai setelah penyimpanan berhasil
        return redirect('/dashboardPengurus/RekeningBank')->with('success', 'Rekening berhasil ditambahkan');
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
        $data = Rekening::findOrFail($id); // Mengambil data Rekening berdasarkan $id
        $warga = Warga::all();
        $bank = Bank::all();

        return view('Dashboard.dashboard-pengurus.keuangan.crud.EditRekening', compact('data', 'warga', 'bank'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
         // Validasi data yang dikirimkan oleh pengguna
    $request->validate([
        'warga_id' => 'required|exists:warga,id',
        'bank_id' => 'required|exists:bank,id',
        'rekening' => 'required|unique:rekening,rekening,' . $id, // Mengecualikan rekening saat ini dari validasi unik
    ]);

    // Temukan rekaman Rekening yang akan diperbarui berdasarkan $id
    $rekening = Rekening::findOrFail($id);

    // Perbarui data Rekening dengan data yang diterima dari formulir
    $rekening->warga_id = $request->input('warga_id');
    $rekening->bank_id = $request->input('bank_id');
    $rekening->rekening = $request->input('rekening');

    // Simpan perubahan ke dalam database
    $rekening->save();

    // Redirect ke halaman yang sesuai setelah pembaruan berhasil
    return redirect('/dashboardPengurus/RekeningBank')->with('success', 'Rekening berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Rekening::where('id',$id)->delete();
        return redirect()->to('/dashboardPengurus/RekeningBank')->with('success','Data Berhasil Dihapus!');
    }
}
