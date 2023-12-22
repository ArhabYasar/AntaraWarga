<?php

namespace App\Http\Controllers;

use App\Models\Hunian;
use App\Models\Tamu;
use Illuminate\Http\Request;

class TamuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $cari = $request->cari;
        $jumlahbaris = 5;

        $query = Tamu::query();

        if (strlen($cari)) {
            $query->where(function ($q) use ($cari) {
                $q->where('tanggal', 'LIKE', '%' . $cari . '%')
                  ->orWhere('nama', 'LIKE', '%' . $cari . '%')
                  ->orWhere('status', 'LIKE', '%' . $cari . '%')
                  ->orWhere('keperluan', 'LIKE', '%' . $cari . '%')
                  ->orWhereHas('getHunian', function ($bankQuery) use ($cari) {
                      $bankQuery->where('alamat', 'LIKE', '%' . $cari . '%');
                  });
            });
        }

        $data = $query->with('getHunian')->paginate($jumlahbaris);

        return view('Dashboard.dashboard-pengurus.keamanan.TamuMenginap')->with('data', $data);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $hunian = Hunian::all();
        return view('Dashboard.dashboard-pengurus.keamanan.crud.CreateTamu', compact('hunian'));


    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi data yang dikirimkan oleh pengguna
        $request->validate([
            'tanggal' => 'required',
            'nama' => 'required',
            'status' => 'required',
            'keperluan' => 'required',
            'hunian_id' => 'required|exists:hunian,id',
        ]);

        $tamu = new Tamu([
            'tanggal' => $request->input('tanggal'),
            'nama' => $request->input('nama'),
            'status' => $request->input('status'),
            'keperluan' => $request->input('keperluan'),
            'hunian_id' => $request->input('hunian_id'),
        ]);

        $tamu->save();

        return redirect('/dashboardPengurus/TamuMenginap')->with('success', 'Data berhasil ditambahkan');

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
        $data = Tamu::findOrFail($id); // Mengambil data Rekening berdasarkan $id
        $hunian = Hunian::all();

        return view('Dashboard.dashboard-pengurus.keamanan.crud.EditTamu', compact('data', 'hunian'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'tanggal' => 'required',
            'nama' => 'required',
            'status' => 'required',
            'keperluan' => 'required',
            'hunian_id' => 'required|exists:hunian,id',
        ]);

        $tamu = Tamu::findOrFail($id);

        $tamu->tanggal = $request->input('tanggal');
        $tamu->nama = $request->input('nama');
        $tamu->status = $request->input('status');
        $tamu->keperluan = $request->input('keperluan');
        $tamu->hunian_id = $request->input('hunian_id');

        // Simpan perubahan ke dalam database
        $tamu->save();

        // Redirect ke halaman yang sesuai setelah pembaruan berhasil
        return redirect('/dashboardPengurus/TamuMenginap')->with('success', 'Data berhasil diperbarui');


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Tamu::where('id',$id)->delete();
        return redirect()->to('/dashboardPengurus/TamuMenginap')->with('success','Data Berhasil Dihapus!');
    }
}
