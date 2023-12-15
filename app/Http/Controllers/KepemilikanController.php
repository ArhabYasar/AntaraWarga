<?php

namespace App\Http\Controllers;

use App\Models\Warga;
use App\Models\Hunian;
use Illuminate\Http\Request;
use App\Models\KepemilikanHunian;

class KepemilikanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $cari = $request->cari;
        $jumlahbaris = 5;

        $query = KepemilikanHunian::query();

        if (strlen($cari)) {
            $query->where(function ($q) use ($cari) {
                $q->where('tanggal_kepemilikan', 'LIKE', '%' . $cari . '%')
                  ->orWhereHas('warga', function ($wargaQuery) use ($cari) {
                      $wargaQuery->where('nama', 'LIKE', '%' . $cari . '%');
                  })
                  ->orWhereHas('hunian', function ($hunianQuery) use ($cari) {
                      $hunianQuery->where('alamat', 'LIKE', '%' . $cari . '%');
                  });
            });
        }

        $data = $query->with('warga', 'hunian')->paginate($jumlahbaris);

        return view('Dashboard.dashboard-pengurus.hunian-warga.KepemilikanHunian')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $warga = Warga::all();
        $hunian = Hunian::all();
        $data = new KepemilikanHunian();
        return view('Dashboard.dashboard-pengurus.hunian-warga.crud.CreateKepemilikan', compact('data', 'warga', 'hunian'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'warga_id' => 'required|exists:warga,id',
            'hunian_id' => 'required|exists:hunian,id',
            'tanggal_kepemilikan' => 'required',
        ]);
    
        $kepemilikan = new kepemilikanHunian([
            'warga_id' => $request->input('warga_id'),
            'hunian_id' => $request->input('hunian_id'),
            'tanggal_kepemilikan' => $request->input('tanggal_kepemilikan'),
        ]);
    
        $kepemilikan->save();
    
        return redirect()->to('/dashboardPengurus/KepemilikanHunian')->with('success', 'Data Berhasil Dibuat!');
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
    public function edit(Request $request, string $id)
    {
        $warga = Warga::all();
        $hunian = Hunian::all();
        $data = KepemilikanHunian::find($id);
        return view('Dashboard.dashboard-pengurus.hunian-warga.crud.EditKepemilikan', compact('data', 'hunian', 'warga'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
    $request->validate([
        'warga_id' => 'required|exists:warga,id',
        'hunian_id' => 'required|exists:hunian,id',
        'tanggal_kepemilikan' => 'required',
    ]);

    $kepemilikan = KepemilikanHunian::findOrFail($id);

    $kepemilikan->warga_id = $request->input('warga_id');
    $kepemilikan->hunian_id = $request->input('hunian_id');
    $kepemilikan->tanggal_kepemilikan = $request->input('tanggal_kepemilikan');

    $kepemilikan->save();
    
    return redirect()->to('/dashboardPengurus/KepemilikanHunian')->with('success', 'Data Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        KepemilikanHunian::where('id', $id)->delete();
        return redirect('/dashboardPengurus/KepemilikanHunian')->with('success','Data Berhasil Dihapus!');
    }
}
