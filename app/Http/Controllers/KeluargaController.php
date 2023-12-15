<?php

namespace App\Http\Controllers;

use App\Models\Hunian;
use App\Models\Warga;
use App\Models\Keluarga;
use Illuminate\Http\Request;

class KeluargaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $cari = $request->cari;
        $jumlahbaris = 5;

        $query = Keluarga::where('status', 'Suami');

        if (strlen($cari)) {
            $query->where(function ($q) use ($cari) {
                $q->where('nkk', 'LIKE', '%' . $cari . '%')
                  ->orWhere('status', 'LIKE', '%' . $cari . '%')
                  ->orWhereHas('getWarga', function ($wargaQuery) use ($cari) {
                      $wargaQuery->where('nik', 'LIKE', '%' . $cari . '%')
                                 ->orWhere('nama', 'LIKE', '%' . $cari . '%');
                  })
                  ->orWhereHas('getHunian', function ($hunianQuery) use ($cari) {
                      $hunianQuery->where('alamat', 'LIKE', '%' . $cari . '%')
                                  ->orWhere('status_kepemilikan', 'LIKE', '%' . $cari . '%');
                  });
            });
        }

        $data = $query->with('getWarga', 'getHunian')->paginate($jumlahbaris);

        return view('Dashboard.dashboard-pengurus.hunian-warga.DataKeluarga')->with('data', $data);
    }


    public function create()
    {
        $warga = Warga::all();
        $hunian = Hunian::all();
        return view('Dashboard.dashboard-pengurus.hunian-warga.crud.CreateKeluarga', compact('warga', 'hunian'));
    }
    public function store(Request $request)
    {

        $request->validate([
            'nkk' => 'required|numeric',
            'status' => 'required|string',
            'nama' => 'required|exists:warga,id',
            'hunian_id' => 'required|exists:hunian,id',
            'status_kepemilikan' => 'required|in:Milik Sendiri,Sewa',
        ]);

        // Buat objek Keluarga baru dengan data yang diterima dari formulir
        $keluarga = new Keluarga([
            'nkk' => $request->input('nkk'),
            'status' => $request->input('status'),
            'hunian_id' => $request->input('hunian_id'),
        ]);

        // Simpan data Keluarga ke dalam database
        $keluarga->save();

        // Dapatkan objek Warga yang sesuai dengan ID yang dipilih
        $warga = Warga::find($request->input('nama'));

        // Periksa apakah objek Warga ditemukan
        if ($warga) {
            // Perbarui kolom keluarga_id pada objek Warga
            $warga->update([
                'keluarga_id' => $keluarga->id,
            ]);
        }

        return redirect()->to('/dashboardPengurus/DataKeluarga')->with('success', 'Data Berhasil Dibuat!');
    }

    public function showKeluarga($id)
    {
        $data = Keluarga::findOrFail($id);
        $dataWithSameNKK = Keluarga::where('nkk', $data->nkk)->get();

        $warga = Warga::all();
        $hunian = Hunian::all();

        return view('Dashboard.dashboard-pengurus.hunian-warga.KeluargaDetail', compact('data', 'dataWithSameNKK', 'hunian', 'warga'));
    }
    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $wargaOptions = Warga::all(); // Mengambil semua data warga
        $data = Keluarga::findOrFail($id);
        $dataWithSameNKK = Keluarga::where('nkk', $data->nkk)->get();
        // $dataWithSameAlamat = Keluarga::where('hunian_id', $data->hunian_id)->get();
        $warga = Warga::all();
        $hunian = Hunian::all();

        return view('Dashboard.dashboard-pengurus.hunian-warga.crud.EditKeluarga', compact('data', 'dataWithSameNKK', 'wargaOptions', 'warga', 'hunian'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'nkk' => 'required',
            'status' => 'required',
        ], [
            'nkk.required' => 'Nomor Kartu Keluarga wajib diisi!',
            'status.required' => 'Status wajib diisi!',
        ]);

        // Data keluarga yang sedang diedit
        $keluarga = Keluarga::findOrFail($id);

        // Update status keluarga
        $keluarga->update([
            'nkk' => $request->nkk,
            'status' => $request->status,
        ]);

        // Update alamat dan status kepemilikan hunian jika ada perubahan
        if ($request->has('alamat') && $request->has('status_kepemilikan')) {
            $hunian = Hunian::where('id', $request->alamat)->first();

            if ($hunian && $hunian->id != $keluarga->hunian_id) {
                // Cek apakah ada warga lain dengan keluarga_id yang sama
                $existingHunianWithSameHunian = Keluarga::where('hunian_id', $hunian->id)->first();

                if ($existingHunianWithSameHunian) {
                    // Hapus relasi keluarga_id pada warga tersebut
                    $existingHunianWithSameHunian->update([
                        'hunian_id' => null,
                    ]);
                }

                // Update hunian_id pada keluarga yang baru
                $keluarga->update([
                    'hunian_id' => $hunian->id,
                ]);
            }
        }

        // Update nama warga jika ada perubahan
        if ($request->has('nama')) {
            $warga = Warga::where('id', $request->nama)->first();

            if ($warga && $warga->keluarga_id != $keluarga->id) {
                // Cek apakah ada warga lain dengan keluarga_id yang sama
                $existingWargaWithSameKeluarga = Warga::where('keluarga_id', $keluarga->id)->first();

                if ($existingWargaWithSameKeluarga) {
                    // Hapus relasi keluarga_id pada warga tersebut
                    $existingWargaWithSameKeluarga->update([
                        'keluarga_id' => null,
                    ]);
                }

                // Update keluarga_id pada warga yang baru
                $warga->update([
                    'keluarga_id' => $keluarga->id,
                ]);
            }
        }

        // Update nama warga jika ada perubahan
        if ($request->has('nik') && $request->has('nama')) {
            $warga = Warga::where('nama', $request->nama)->where('nik',$request->nik)->first();

            if ($warga && $warga->keluarga_id != $keluarga->id) {
                // Cek apakah ada warga lain dengan keluarga_id yang sama
                $existingWargaWithSameKeluarga = Warga::where('keluarga_id', $keluarga->id)->first();

                if ($existingWargaWithSameKeluarga) {
                    // Hapus relasi keluarga_id pada warga tersebut
                    $existingWargaWithSameKeluarga->update([
                        'keluarga_id' => null,
                    ]);
                }

                // Update keluarga_id pada warga yang baru
                $warga->update([
                    'keluarga_id' => $keluarga->id,
                ]);
            }
        }

        return redirect()->to('/dashboardPengurus/DataKeluarga')->with('success', 'Data Berhasil Diubah!');
    }


    public function destroyByNKK(string $nkk)
    {
        $keluargas = Keluarga::where('nkk', $nkk)->get();

        foreach ($keluargas as $keluarga) {
            // Hapus relasi pada tabel warga
            $keluarga->getWarga()->update(['keluarga_id' => null]);

            // Hapus data keluarga
            $keluarga->delete();
        }

        return redirect()->to('/dashboardPengurus/DataKeluarga')->with('success', 'Data Berhasil Dihapus!');
    }

    public function destroy(string $id)
    {
    $keluarga = Keluarga::findOrFail($id);

    // Hapus relasi pada tabel warga
    $keluarga->getWarga()->update(['keluarga_id' => null]);

    // Hapus data keluarga
    $keluarga->delete();

    return redirect()->to('/dashboardPengurus/DataKeluarga/')->with('success', 'Data Berhasil Dihapus!');
    }

}
