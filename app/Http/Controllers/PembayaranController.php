<?php

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Carbon;
use App\Models\Pengingat;
use App\Models\Pembayaran;
use Illuminate\Http\Request;

class PembayaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $cari = $request->cari;
        $jumlahbaris = 5;

        $query = Pembayaran::query();

        if (strlen($cari)) {
            $query->where(function ($q) use ($cari) {
                $q->where('tanggal', 'LIKE', '%' . $cari . '%')
                  ->orWhereHas('user', function ($userQuery) use ($cari) {
                      $userQuery->where('name', 'LIKE', '%' . $cari . '%');
                  })
                  ->orWhereHas('pengingat', function ($wargaQuery) use ($cari) {
                      $wargaQuery->where('name', 'LIKE', '%' . $cari . '%');
                  });
            });
        }

        $data = $query->with('user','pengingat')->paginate($jumlahbaris);

        return view('Dashboard.dashboard-warga.iuran-warga.Pembayaran')->with('data', $data);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $ingat = Pengingat::all();
        $user = User::all();
        return view('Dashboard.dashboard-warga.iuran-warga.CreatePembayaran', compact('ingat','user'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'pengingat_id' => 'required|exists:pengingat,id',
            'tanggal' => 'required',
            'nominal' => 'required',
            'foto' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $pembayaran = new Pembayaran([
            'user_id' => $request->input('user_id'),
            'pengingat_id' => $request->input('pengingat_id'),
            'tanggal' => $request->input('tanggal'),
            'nominal' => $request->input('nominal'),
        ]);


        if ($request->hasFile('foto')) {
            $image = $request->file('foto');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('path-to-your-image-directory'), $imageName);
            $pembayaran->foto = $imageName;
        }

        $pembayaran->save();

        $pembayaran->updatePengingat();

        return redirect()->to('/dashboardWarga/Pembayaran')->with('success', 'Pembayaran berhasil disimpan!');
    }
    /**
     * Display the specified resource.
     */
    public function show()
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
