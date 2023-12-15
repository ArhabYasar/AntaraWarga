<?php

namespace App\Http\Controllers;

use App\Models\Hunian;
use Illuminate\Http\Request;

class HunianController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
{
    $cari = $request->cari;
    $jumlahbaris = 5;

    $query = Hunian::query();

    if ($cari) {
        $query->where('alamat', 'LIKE', '%' . $cari . '%')
              ->orWhere('tipe', 'LIKE', '%' . $cari . '%')
              ->orWhere('luas_tanah', 'LIKE', '%' . $cari . '%')
              ->orWhere('luas_bangunan', 'LIKE', '%' . $cari . '%')
              ->orWhere('status_kepemilikan', 'LIKE', '%' . $cari . '%');
    }

    $data = $query->paginate($jumlahbaris);

    return view('Dashboard.dashboard-pengurus.hunian-warga.DataHunian', compact('data'));
}


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('Dashboard.dashboard-pengurus.hunian-warga.crud.CreateHunian');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $request->validate([
        'alamat' => 'required',
        'tipe' => 'required',
        'luas_tanah' => 'required',
        'luas_bangunan' => 'required',
        'status_kepemilikan' => 'required',
    ],[
        'alamat.required' => 'Alamat Wajib Diiisi!',
        'tipe.required' => 'Tipe Bangunan Wajib Diiisi!',
        'luas_tanah.required' => 'Luas Tanah Wajib Diiisi!',
        'luas_bangunan.required' => 'Luas Bangunan Lahir Wajib Diiisi!',
        'status_kepemilikan.required' => 'Status Kepemilikan Wajib Diiisi!',
    ]);

    $data = [
        'alamat' => $request->alamat,
        'tipe' => $request->tipe,
        'luas_tanah' => $request->luas_tanah,
        'luas_bangunan' => $request->luas_bangunan,
        'status_kepemilikan' => $request->status_kepemilikan,
    ];

    Hunian::create($data);
    return redirect()->to('/dashboardPengurus/DataHunian')->with('success', 'Data Berhasil Dibuat!');
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
        $data = Hunian::find($id);
        return view('Dashboard.dashboard-pengurus.hunian-warga.crud.EditHunian')->with('data', $data);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'alamat' => 'required',
            'tipe' => 'required',
            'luas_tanah' => 'required',
            'luas_bangunan' => 'required',
            'status_kepemilikan' => 'required',
        ],[
            'alamat.required' => 'Alamat Wajib Diiisi!',
            'tipe.required' => 'Tipe Bangunan Wajib Diiisi!',
            'luas_tanah.required' => 'Luas Tanah Wajib Diiisi!',
            'luas_bangunan.required' => 'Luas BAngunan Lahir Wajib Diiisi!',
            'ststus_kepemilikan.required' => 'status_kepemilikan Lahir Wajib Diiisi!',
        ]);

        $data = [
            'alamat' => $request->alamat,
            'tipe' => $request->tipe,
            'luas_tanah' => $request->luas_tanah,
            'luas_bangunan' => $request->luas_bangunan,
            'status_kepemilikan' => $request->status_kepemilikan,
        ];

        Hunian::find($id)->update($data);
        return redirect()->to('/dashboardPengurus/DataHunian')->with('success', 'Data Berhasil Diubah!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Hunian::where('id',$id)->delete();
        return redirect()->to('/dashboardPengurus/DataHunian')->with('success','Data Berhasil Dihapus!');
    }
}
