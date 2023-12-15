<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $cari = $request->cari;
        $jumlahbaris = 5;

        $query = Berita::query();

        if ($cari) {
            $query->where('kategori', 'LIKE', '%' . $cari . '%')
                ->orWhere('judul', 'LIKE', '%' . $cari . '%')
                ->orWhere('isi', 'LIKE', '%' . $cari . '%');
        }

        $data = $query->paginate($jumlahbaris);

        return view('Dashboard.dashboard-pengurus.pengumuman.Berita', compact('data'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Dashboard.dashboard-pengurus.pengumuman.crud.CreateBerita');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'kategori' => 'required',
            'judul' => 'required',
            'isi' => 'required',
            'foto' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $berita = new Berita([
            'kategori' => $request->input('kategori'),
            'judul' => $request->input('judul'),
            'isi' => $request->input('isi'),
        ]);

        if ($request->hasFile('foto')) {
            $image = $request->file('foto');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('path-to-your-image-directory'), $imageName);
            $berita->foto = $imageName;
        }

        $berita->save();

        return redirect('/dashboardPengurus/Berita')->with('success', 'Data berhasil disimpan.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Berita::find($id);
        return view('Dashboard.dashboard-pengurus.pengumuman.crud.EditBerita')->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validasi input
        $request->validate([
            'kategori' => 'required|string',
            'judul' => 'required|string',
            'isi' => 'required|string',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Cari berita yang akan diperbarui
        $berita = Berita::findOrFail($id);

        // Simpan data input ke dalam variabel
        $data = [
            'kategori' => $request->input('kategori'),
            'judul' => $request->input('judul'),
            'isi' => $request->input('isi'),
        ];

        // Handle gambar yang diunggah (jika ada)
        if ($request->hasFile('foto')) {
            $image = $request->file('foto');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('path-to-your-image-directory'), $imageName);
            $data['foto'] = $imageName;

            // Hapus foto lama jika ada
            if ($berita->foto) {
                unlink(public_path('path-to-your-image-directory/' . $berita->foto));
            }
        }

        // Update data berita
        $berita->update($data);

        // Redirect atau kembalikan respons sesuai kebutuhan Anda
        return redirect('/dashboardPengurus/Berita')->with('success','Data Berhasil Diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Berita::where('id',$id)->delete();
        return redirect()->to('/dashboardPengurus/Berita')->with('success','Data Berhasil Dihapus');
    }
}
