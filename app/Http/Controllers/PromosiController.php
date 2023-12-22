<?php

namespace App\Http\Controllers;

use App\Models\Promosi;
use Illuminate\Http\Request;

class PromosiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $cari = $request->cari;
        $jumlahbaris = 5;

        $query = Promosi::query();

        if ($cari) {
            $query->where('nama', 'LIKE', '%' . $cari . '%');
        }

        $data = $query->paginate($jumlahbaris);

        return view('Dashboard.dashboard-umkm.Promosi', compact('data'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Dashboard.dashboard-umkm.crud.CreatePromosi');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'foto' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $promosi = new Promosi([
            'nama' => $request->input('nama'),
        ]);

        if ($request->hasFile('foto')) {
            $image = $request->file('foto');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('path-to-your-image-directory'), $imageName);
            $promosi->foto = $imageName;
        }

        $promosi->save();

        return redirect('/dashboardUMKM/Promosi')->with('success', 'Data berhasil disimpan.');

    }

    /**
     * Display the specified resource.
     */
    public function showDetailPromosi(string $id)
    {
        $data = Promosi::find($id);

        // Periksa apakah data ditemukan
        if ($data) {
            return view('Dashboard.dashboard-umkm.DetailPromosi', compact('data'));
        } else {
            // Tampilkan pesan atau lakukan sesuatu jika data tidak ditemukan
            return redirect()->route('/dashboardUMKM/Promosi')->with('error', 'Data Pasar tidak ditemukan');
        }


    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Promosi::find($id);
        return view('Dashboard.dashboard-umkm.crud.EditPromosi')->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama' => 'required|string',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Cari berita yang akan diperbarui
        $promosi = Promosi::findOrFail($id);

         // Simpan data input ke dalam variabel
        $data = [
            'nama' => $request->input('nama'),
        ];

        // Handle gambar yang diunggah (jika ada)
        if ($request->hasFile('foto')) {
            $image = $request->file('foto');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('path-to-your-image-directory'), $imageName);
            $data['foto'] = $imageName;

            // Hapus foto lama jika ada
            if ($promosi->foto) {
                unlink(public_path('path-to-your-image-directory/' . $promosi->foto));
            }
        }

        // Update data berita
        $promosi->update($data);

        // Redirect atau kembalikan respons sesuai kebutuhan Anda
        return redirect('/dashboardUMKM/Promosi')->with('success','Data Berhasil Diupdate!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Promosi::where('id',$id)->delete();
        return redirect()->to('/dashboardUMKM/Promosi')->with('success','Data Berhasil Dihapus');
    }
}
