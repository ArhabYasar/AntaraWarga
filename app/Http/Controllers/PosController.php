<?php

namespace App\Http\Controllers;

use App\Models\PosBiaya;
use Illuminate\Http\Request;

class PosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $cari = $request->cari;
        $jumlahbaris = 5;

        $query = PosBiaya::query();

        if($cari){
            $query->where('nama', 'LIKE', '%' . $cari . '%')
                  ->orWhere('keterangan', 'LIKE', '%' . $cari . '%');
        }

        $data = $query->paginate($jumlahbaris);

        return view('Dashboard.dashboard-pengurus.keuangan.PosBiaya', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Dashboard.dashboard-pengurus.keuangan.crud.CreatePos');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama'=>'required',
            'keterangan'=>'required',
        ]);
        $data = [
            'nama'=>$request->nama,
            'keterangan'=>$request->keterangan,
        ];

        PosBiaya::create($data);
        return redirect()->to('/dashboardPengurus/PosBiaya')->with('success','Data Berhasil Dibuat!');
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
        $data = PosBiaya::find($id);
        return view('Dashboard.dashboard-pengurus.keuangan.crud.EditPos')->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama'=>'required',
            'keterangan'=>'required',
        ]);
        $data = [
            'nama'=>$request->nama,
            'keterangan'=>$request->keterangan,
        ];

        PosBiaya::find($id)->update($data);
        return redirect()->to('/dashboardPengurus/PosBiaya')->with('Data Berhasil Dubah!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        PosBiaya::where('id', $id)->delete();
        return redirect()->to('/dashboardPengurus/PosBiaya')->with('Data Berhasil Dihapus');
    }
}
