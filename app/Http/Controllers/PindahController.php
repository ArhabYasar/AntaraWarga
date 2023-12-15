<?php

namespace App\Http\Controllers;

use App\Models\Warga;
use App\Models\Hunian;
use App\Models\Pindah;
use App\Models\PindahHunian;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PindahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $cari = $request->cari;
        $jumlahbaris = 5;

        $query = Pindah::query();

        if (strlen($cari)) {
            $query->where(function ($q) use ($cari) {
                $q->where('tanggal', 'LIKE', '%' . $cari . '%')
                  ->orWhere('alasan', 'LIKE', '%' . $cari . '%')
                  ->orWhere('hunian_asal', 'LIKE', '%' . $cari . '%')
                  ->orWhereHas('warga', function ($wargaQuery) use ($cari) {
                      $wargaQuery->where('nama', 'LIKE', '%' . $cari . '%');
                  })
                  ->orWhereHas('hunian', function ($hunianQuery) use ($cari) {
                      $hunianQuery->where('alamat', 'LIKE', '%' . $cari . '%');
                  });
            });
        }

        $data = $query->with('warga', 'hunian')->paginate($jumlahbaris);

        return view('Dashboard.dashboard-pengurus.hunian-warga.DataPindah')->with('data', $data);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Ambil semua data Warga dan Hunian untuk dropdown
        $warga = Warga::all();
        $hunian = Hunian::all();

        return view('Dashboard.dashboard-pengurus.hunian-warga.crud.CreatePindah', compact('warga', 'hunian'));
    }

    public function store(Request $request)
{
    // Validasi data yang dikirimkan oleh pengguna
    $request->validate([
        'warga_id' => 'required|exists:warga,id',
        'alasan' => 'required|string',
        'jenis_pindah' => 'required|in:Pindah Dalam Hunian,Pindah Keluar Hunian',
        'hunian_id' => 'required_if:jenis_pindah,Pindah Dalam Hunian|nullable|exists:hunian,id',
    ]);

    // Buat objek Pindah baru dengan data yang diterima dari formulir
    $pindah = new Pindah([
        'warga_id' => $request->input('warga_id'),
        'alasan' => $request->input('alasan'),
        'tanggal' => $request->input('tanggal'),
        'hunian_asal' => $request->input('hunian_asal'),
        'hunian_id' => $request->input('jenis_pindah') === 'Pindah Dalam Hunian' ? $request->input('hunian_id') : null,
    ]);

    // Simpan data Pindah ke dalam database
    $pindah->save();

    // Redirect ke halaman yang sesuai setelah penyimpanan berhasil
    return redirect('/dashboardPengurus/DataPindah')->with('success', 'Data Pindah berhasil ditambahkan');
    }


    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Pindah::findOrFail($id); // Mengambil data Rekening berdasarkan $id
        $warga = Warga::all();
        $hunian = Hunian::all();

        return view('Dashboard.dashboard-pengurus.hunian-warga.crud.EditPindah', compact('data', 'warga', 'hunian'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
    // Validasi data yang dikirimkan oleh pengguna
    $request->validate([
        'warga_id' => 'required|exists:warga,id',
        'alasan' => 'required|string',
        'jenis_pindah' => 'required|in:Pindah Dalam Hunian,Pindah Keluar Hunian',
        'hunian_id' => 'required_if:jenis_pindah,Pindah Dalam Hunian|nullable|exists:hunian,id',
    ]);

    // Temukan data Pindah berdasarkan ID
    $pindah = Pindah::findOrFail($id);

    // Update data Pindah dengan data yang diterima dari formulir
    $pindah->warga_id = $request->input('warga_id');
    $pindah->alasan = $request->input('alasan');
    $pindah->tanggal = $request->input('tanggal');

    // Set nilai 'hunian_asal' berdasarkan jenis pindah
    if ($request->input('jenis_pindah') === 'Pindah Keluar Hunian') {
        $pindah->hunian_asal = $request->input('hunian_asal');
        $pindah->hunian_id = null;
    } else {
        $pindah->hunian_asal = $request->input('hunian_asal');
        $pindah->hunian_id = $request->input('hunian_id');
    }

    // Simpan perubahan data Pindah
    $pindah->save();

    // Redirect ke halaman yang sesuai setelah pembaruan berhasil
    return redirect('/dashboardPengurus/DataPindah')->with('success', 'Data Pindah berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Pindah::where('id',$id)->delete();
        return redirect()->to('/dashboardPengurus/DataPindah')->with('success','Data Berhasil Dihapus!');
    }
}
