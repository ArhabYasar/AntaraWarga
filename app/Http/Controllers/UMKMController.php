<?php

namespace App\Http\Controllers;

use App\Models\UMKM;
use Illuminate\Http\Request;

class UMKMCOntroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $cari = $request->cari;
        $jumlahbaris = 5;

        $query = UMKM::query();

        if ($cari) {
            $query->where('kategori', 'LIKE', '%' . $cari . '%')
                ->orWhere('nama', 'LIKE', '%' . $cari . '%')
                ->orWhere('deskripsi', 'LIKE', '%' . $cari . '%');
        }

        $data = $query->paginate($jumlahbaris);

        return view('Dashboard.dashboard-pengurus.pengumuman.UMKM', compact('data'));


    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Dashboard.dashboard-pengurus.pengumuman.crud.CreateUMKM');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'kategori' => 'required',
            'nama' => 'required',
            'deskripsi' => 'required',
            'foto' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $umkm = new UMKM([
            'kategori' => $request->input('kategori'),
            'nama' => $request->input('nama'),
            'deskripsi' => $request->input('deskripsi'),
        ]);

        if ($request->hasFile('foto')) {
            $image = $request->file('foto');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('path-to-your-image-directory'), $imageName);
            $umkm->foto = $imageName;
        }

        $umkm->save();

        return redirect('/dashboardPengurus/UMKM')->with('success', 'Data berhasil disimpan.');

    }

    /**
     * Display the specified resource.
     */
    public function showAll()
    {
        $umkms = UMKM::all();
        return view('Dashboard.dashboard-pengurus.pengumuman.UMKMCatalog', compact('umkms'));
    }
    public function showCatalog()
    {
        $umkms = UMKM::all();
        return view('Dashboard.dashboard-warga.UMKMCatalog', compact('umkms'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = UMKM::find($id);
        return view('Dashboard.dashboard-pengurus.pengumuman.crud.EditUMKM')->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validasi input
         $request->validate([
            'kategori' => 'required|string',
            'nama' => 'required|string',
            'deskripsi' => 'required|string',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Cari berita yang akan diperbarui
        $umkm = UMKM::findOrFail($id);

         // Simpan data input ke dalam variabel
        $data = [
            'kategori' => $request->input('kategori'),
            'nama' => $request->input('nama'),
            'deskripsi' => $request->input('deskripsi'),
        ];

        // Handle gambar yang diunggah (jika ada)
        if ($request->hasFile('foto')) {
            $image = $request->file('foto');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('path-to-your-image-directory'), $imageName);
            $data['foto'] = $imageName;

            // Hapus foto lama jika ada
            if ($umkm->foto) {
                unlink(public_path('path-to-your-image-directory/' . $umkm->foto));
            }
        }

        // Update data berita
        $umkm->update($data);

        // Redirect atau kembalikan respons sesuai kebutuhan Anda
        return redirect('/dashboardPengurus/UMKM')->with('success','Data Berhasil Diupdate!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        UMKM::where('id',$id)->delete();
        return redirect()->to('/dashboardPengurus/UMKM')->with('success','Data Berhasil Dihapus');
    }
}
