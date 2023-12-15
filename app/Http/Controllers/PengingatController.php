<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Iuran;
use App\Models\Warga;
use App\Models\Pengingat;
use Illuminate\Http\Request;

class PengingatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $cari = $request->cari;
        $jumlahbaris = 5;

        $query = Pengingat::query();

        if (strlen($cari)) {
            $query->where(function ($q) use ($cari) {
                $q->where('tanggal', 'LIKE', '%' . $cari . '%')
                  ->orWhere('nominal', 'LIKE', '%' . $cari . '%')
                  ->orWhere('nama', 'LIKE', '%' . $cari . '%')
                  ->orWhereHas('user', function ($wargaQuery) use ($cari) {
                      $wargaQuery->where('name', 'LIKE', '%' . $cari . '%');
                  });
            });
        }

        $data = $query->with('user')->paginate($jumlahbaris);

        return view('Dashboard.dashboard-pengurus.iuran-warga.Pengingat')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = User::where('role', 'Warga')->get();
        return view('Dashboard.dashboard-pengurus.iuran-warga.crud.CreatePengingat', compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'nama' => 'required',
            'tanggal' => 'required',
            'nominal' => 'required',
        ]);

        $pengingat = new Pengingat([
            'user_id' => $request->input('user_id'),
            'nama' => $request->input('nama'),
            'tanggal' => $request->input('tanggal'),
            'nominal' => $request->input('nominal'),
        ]);

        $pengingat->save();

        return redirect('/dashboardPengurus/PengingatPembayaran')->with('success', 'Data berhasil ditambahkan');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $jumlahbaris = 5;

        $data = Pengingat::paginate($jumlahbaris);

        // Tambahkan perhitungan sisa hari sebelum tanggal jatuh tempo
        foreach ($data as $item) {
            $tanggalJatuhTempo = Carbon::parse($item->tanggal);
            $now = Carbon::now();
            $item->sisaHari = $now->diffInDays($tanggalJatuhTempo);
        }

        return view('Dashboard.dashboard-warga.iuran-warga.Tagihan', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Pengingat::findOrFail($id);
        $user = User::where('role', 'Warga')->get();

        return view('Dashboard.dashboard-pengurus.iuran-warga.crud.EditPengingat', compact('data', 'user'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'nama' => 'required',
            'tanggal' => 'required',
            'nominal' => 'required',
        ]);

        // Temukan rekaman Rekening yang akan diperbarui berdasarkan $id
        $pengingat = Pengingat::findOrFail($id);

        // Perbarui data Rekening dengan data yang dipengingat dari formulir
        $pengingat->user_id = $request->input('user_id');
        $pengingat->nama = $request->input('nama');
        $pengingat->tanggal = $request->input('tanggal');
        $pengingat->nominal = $request->input('nominal');

        // Simpan perubahan ke dalam database
        $pengingat->save();

        // Redirect ke halaman yang sesuai setelah pembaruan berhasil
        return redirect('/dashboardPengurus/PengingatPembayaran')->with('success', 'Data berhasil diperbarui');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Pengingat::where('id',$id)->delete();
        return redirect()->to('/dashboardPengurus/PengingatPembayaran')->with('success','Data Berhasil Dihapus!');
    }
}
