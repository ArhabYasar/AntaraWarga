<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $user = auth()->user();
        $data = Profile::where('user_id', $user->id)->first();
        return view('Dashboard.dashboard-warga.Profile', compact('data'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        $user = auth()->user();

        // Mengasumsikan adanya hubungan langsung antara User dan Profile
        $data = $user->profile;
        return view('Dashboard.dashboard-warga.EditProfile')->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validasi input data
        $request->validate([
            'foto' => 'image|mimes:jpeg,png,jpg,gif|max:5000',
            'nama' => 'required',
            'username' => 'required|unique:profile,username,'.$id,
            'nik' => 'required|unique:profile,nik,'.$id,
            'nkk' => 'required|unique:profile,nkk,'.$id,
            'nomor_hp' => 'required',
            'email' => 'required|email|unique:profile,email,'.$id,
            'alamat' => 'required',
        ]);

$profile = Profile::findOrFail($id);

    // Pastikan hanya user yang memiliki id yang sesuai yang dapat mengedit profil
    if ($profile->user_id == Auth::id()) {
        // Update data profil
        $inputData = [
            'nama' => $request->input('nama'),
            'username' => $request->input('username'),
            'nik' => $request->input('nik'),
            'nkk' => $request->input('nkk'),
            'nomor_hp' => $request->input('nomor_hp'),
            'email' => $request->input('email'),
            'alamat' => $request->input('alamat'),
        ];

        // Handle gambar yang diunggah (jika ada)
        if ($request->hasFile('foto')) {
            $image = $request->file('foto');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('path-to-your-image-directory'), $imageName);
            $inputData['foto'] = $imageName;

            // Hapus foto lama jika ada
            if ($profile->foto) {
                unlink(public_path('path-to-your-image-directory/' . $profile->foto));
            }
        }

        $profile->update($inputData);

        return redirect()->to('/dashboardWarga/Profile')->with('success', 'Profil berhasil diperbarui.');
    }    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

}
