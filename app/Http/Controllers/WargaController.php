<?php

namespace App\Http\Controllers;

use App\Models\Warga;
use App\Models\Keluarga;
use Illuminate\Http\Request;

class WargaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
{
    $cari = $request->cari;
    $jumlahbaris = 5;

    $query = Warga::query();

    if ($cari) {
        $query->where('nik', 'LIKE', '%' . $cari . '%')
              ->orWhere('nama', 'LIKE', '%' . $cari . '%')
              ->orWhere('pekerjaan', 'LIKE', '%' . $cari . '%')
              ->orWhere('tanggal_lahir', 'LIKE', '%' . $cari . '%')
              ->orWhere('tempat_lahir', 'LIKE', '%' . $cari . '%');
    }

    $data = $query->paginate($jumlahbaris);

    return view('Dashboard.dashboard-pengurus.hunian-warga.DataWarga', compact('data'));
}


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Dashboard.dashboard-pengurus.hunian-warga.crud.CreateWarga');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nik' => 'required|numeric|unique:warga,nik',
            'nama' => 'required|string:warga,nama',
            'pekerjaan' => 'required',
            'tanggal_lahir' => 'required|date:warga,tanggal_lahir',
            'tempat_lahir' => 'required',
        ]);

        $data = [
            'nik' => $request->nik,
            'nama' => $request->nama,
            'pekerjaan' => $request->pekerjaan,
            'tanggal_lahir' => $request->tanggal_lahir,
            'tempat_lahir' => $request->tempat_lahir,
        ];

        // Cari keluarga berdasarkan nik dan nama
        $existingKeluarga = Keluarga::where('nkk', $request->nkk)
            ->where('status', $request->status)
            ->first();

            if ($request->has('nkk') && $request->has('status')) {
                $newKeluarga = Keluarga::create([
                    'nkk' => $request->nkk,
                    'status' => $request->status,
                ]);

                $data['keluarga_id'] = $newKeluarga->id;
            }


        Warga::create($data);
        return redirect()->to('/dashboardPengurus/DataWarga')->with('success', 'Data Berhasil Dibuat!');
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
        $data = Warga::find($id);
        return view('Dashboard.dashboard-pengurus.hunian-warga.crud.EditWarga')->with('data', $data);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nik' => 'required',
            'nama' => 'required',
            'pekerjaan' => 'required',
            'tanggal_lahir' => 'required',
            'tempat_lahir' => 'required',
        ], [
            'nik.required' => 'NIK Wajib Diiisi!',
            'nama.required' => 'Nama Wajib Diiisi!',
            'pekerjaan.required' => 'Pekerjaan Wajib Diiisi!',
            'tanggal_lahir.required' => 'Tanggal Lahir Wajib Diiisi!',
            'tempat_lahir.required' => 'Tempat Lahir Wajib Diiisi!',
        ]);

        $data = [
            'nik' => $request->nik,
            'nama' => $request->nama,
            'pekerjaan' => $request->pekerjaan,
            'tanggal_lahir' => $request->tanggal_lahir,
            'tempat_lahir' => $request->tempat_lahir,
        ];

        Warga::find($id)->update($data);
        return redirect()->to('/dashboardPengurus/DataWarga')->with('success', 'Data Berhasil Diubah!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Warga::where('id',$id)->delete();
        return redirect()->to('/dashboardPengurus/DataWarga')->with('success','Data Berhasil Dihapus!');
    }
}
