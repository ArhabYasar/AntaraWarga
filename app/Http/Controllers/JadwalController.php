<?php

namespace App\Http\Controllers;

use App\Models\JadwalJaga;
use Illuminate\Http\Request;

class JadwalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $cari = $request->cari;
        $jumlahbaris = 5;

        $query = JadwalJaga::query();

        if ($cari) {
            $query->where('hari', 'LIKE', '%' . $cari . '%')
                  ->orWhere('petugas', 'LIKE', '%' . $cari . '%')
                  ->orWhere('jam_mulai', 'LIKE', '%' . $cari . '%')
                  ->orWhere('jam_selesai', 'LIKE', '%' . $cari . '%');
        }

        $data = $query->paginate($jumlahbaris);

        return view('Dashboard.dashboard-pengurus.keamanan.DataJadwal', compact('data'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('Dashboard.dashboard-pengurus.keamanan.crud.CreateJadwal');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'hari' => 'required',
            'petugas' => 'required',
            'jam_mulai' => 'required|date_format:H:i',
            'jam_selesai' => 'required|date_format:H:i|after:jam_mulai',
        ], [
            'hari.required' => 'Hari wajib diisi.',
            'petugas.required' => 'Petugas wajib diisi.',
            'jam_mulai.required' => 'Jam mulai wajib diisi.',
            'jam_mulai.date_format' => 'Format jam mulai tidak valid.',
            'jam_selesai.required' => 'Jam selesai wajib diisi.',
            'jam_selesai.date_format' => 'Format jam selesai tidak valid.',
            'jam_selesai.after' => 'Jam selesai harus setelah jam mulai.',
        ]);

        $data = $request->only(['hari', 'petugas', 'jam_mulai', 'jam_selesai']);
        JadwalJaga::create($data);

        return redirect()->to('/dashboardPengurus/DataJadwal')->with('success','Berhasil Menambah Data Jadwal Jaga!');
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
        $data = JadwalJaga::find($id);
        return view('Dashboard.dashboard-pengurus.keamanan.crud.EditJadwal')->with('data', $data);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Validasi data yang dikirimkan oleh pengguna
        $request->validate([
            'hari' => 'required',
            'petugas' => 'required',
            'jam_mulai' => 'required',
            'jam_selesai' => 'required',
        ]);

        // Temukan data Jadwal berdasarkan ID
        $jadwal = JadwalJaga::findOrFail($id);

        // Update data Jadwal
        $jadwal->update([
            'hari' => $request->input('hari'),
            'petugas' => $request->input('petugas'),
            'jam_mulai' => $request->input('jam_mulai'),
            'jam_selesai' => $request->input('jam_selesai'),
        ]);

        // Redirect ke halaman yang sesuai setelah penyimpanan berhasil
        return redirect('/dashboardPengurus/DataJadwal')->with('success', 'Jadwal berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        JadwalJaga::where('id',$id)->delete();
        return redirect()->to('/dashboardPengurus/DataJadwal')->with('success','Data Berhasil Dihapus!');

    }
}
