<?php

namespace App\Http\Controllers;

use App\Models\Bank;
use Illuminate\Http\Request;

class BankController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $cari = $request->cari;
        $jumlahbaris = 5;

        $query = Bank::query();

        if ($cari) {
            $query->where('nama', 'LIKE', '%' . $cari . '%')
                ->orWhere('singkatan', 'LIKE', '%' . $cari . '%');
        }

        $data = $query->paginate($jumlahbaris);

        return view('Dashboard.dashboard-pengurus.keuangan.DataBank', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Dashboard.dashboard-pengurus.keuangan.crud.CreateBank');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
        ]);

        $data = [
            'nama' => $request->nama,
            'singkatan' => $request->singkatan,
        ];

        Bank::create($data);
        return redirect()->to('/dashboardPengurus/DataBank')->with('success', 'Data Berhasil Dibuat!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Bank::find($id);
        return view('Dashboard.dashboard-pengurus.keuangan.crud.EditBank')->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama' => 'required',
        ]);

        $data = [
            'nama' => $request->nama,
            'singkatan' => $request->singkatan,
        ];

        Bank::find($id)->update($data);
        return redirect()->to('/dashboardPengurus/DataBank')->with('success','Data Berhasil Diubah!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Bank::where('id',$id)->delete();
        return redirect()->to('/dashboardPengurus/DataBank')->with('success','Data Berhasil Dihapus');
    }
}
