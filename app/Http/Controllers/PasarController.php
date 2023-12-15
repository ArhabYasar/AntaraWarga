<?php

namespace App\Http\Controllers;

use App\Models\Pasar;
use Illuminate\Http\Request;

class PasarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $cari = $request->cari;
        $jumlahbaris = 5;

        $query = Pasar::query();

        if ($cari) {
            $query->where('nama', 'LIKE', '%' . $cari . '%');
        }

        $data = $query->paginate($jumlahbaris);

        return view('Dashboard.dashboard-umkm.Pasar', compact('data'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Dashboard.dashboard-umkm.crud.CreatePasar');
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

        $pasar = new Pasar([
            'nama' => $request->input('nama'),
        ]);

        if ($request->hasFile('foto')) {
            $image = $request->file('foto');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('path-to-your-image-directory'), $imageName);
            $pasar->foto = $imageName;
        }

        $pasar->save();

        return redirect('/dashboardUMKM/Pasar')->with('success', 'Data berhasil disimpan.');

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
        $data = Pasar::find($id);
        return view('Dashboard.dashboard-umkm.crud.EditPasar')->with('data', $data);
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
        $pasar = Pasar::findOrFail($id);

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
            if ($pasar->foto) {
                unlink(public_path('path-to-your-image-directory/' . $pasar->foto));
            }
        }

        // Update data berita
        $pasar->update($data);

        // Redirect atau kembalikan respons sesuai kebutuhan Anda
        return redirect('/dashboardUMKM/Pasar')->with('success','Data Berhasil Diupdate!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Pasar::where('id',$id)->delete();
        return redirect()->to('/dashboardUMKM/Pasar')->with('success','Data Berhasil Dihapus');
    }
}
