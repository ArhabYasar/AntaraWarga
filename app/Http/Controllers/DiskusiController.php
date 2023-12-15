<?php

namespace App\Http\Controllers;

use App\Models\Diskusi;
use Illuminate\Http\Request;

class DiskusiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $cari = $request->cari;
        $jumlahbaris = 5;

        $query = Diskusi::query();

        if ($cari) {
            $query->where('topik', 'LIKE', '%' . $cari . '%')
                  ->orWhere('isi', 'LIKE', '%' . $cari . '%');
        }

        $data = $query->paginate($jumlahbaris);

        return view('Dashboard.dashboard-pengurus.pengumuman.Diskusi', compact('data'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Dashboard.dashboard-pengurus.pengumuman.crud.CreateDiskusi');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'topik' => 'required',
            'isi' => 'required',
        ]);

        $data = [
            'topik' => $request->topik,
            'isi' => $request->isi,
        ];

        Diskusi::create($data);
        return redirect()->to('/dashboardPengurus/Diskusi')->with('success', 'Data Berhasil Dibuat!');

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
        $data = Diskusi::find($id);
        return view('Dashboard.dashboard-pengurus.pengumuman.crud.EditDiskusi')->with('data', $data);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'topik' => 'required',
            'isi' => 'required',
        ]);

        $data = [
            'topik' => $request->topik,
            'isi' => $request->isi,
        ];

        Diskusi::find($id)->update($data);
        return redirect()->to('/dashboardPengurus/Diskusi')->with('success','Data Berhasil Diubah!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Diskusi::where('id',$id)->delete();
        return redirect()->to('/dashboardPengurus/Diskusi')->with('success','Data Berhasil Dihapus');
    }

    public function showChat($id)
{
    $diskusi = Diskusi::findOrFail($id);
    return view('Dashboard.dashboard-pengurus.pengumuman.Chat', compact('diskusi'));
}

}
