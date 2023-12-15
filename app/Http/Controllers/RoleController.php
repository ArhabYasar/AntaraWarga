<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $cari = $request->cari;
        $jumlahbaris = 5;

        $query = User::query();

        if ($cari) {
            $query->where('name', 'LIKE', '%' . $cari . '%')
                ->orWhere('username', 'LIKE', '%' . $cari . '%')
                ->orWhere('role', 'LIKE', '%' . $cari . '%');
        }

        $data = $query->paginate($jumlahbaris);

        return view('Dashboard.dashboard-pengurus.user-manage.Role', compact('data'));
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
        $data = User::find($id);
        return view('Dashboard.dashboard-pengurus.user-manage.crud.EditRole')->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'username' => 'required',
            'role' => 'required',
        ], [
            'username.required' => 'Username Wajib Diiisi!',
            'role.required' => 'Role Lahir Wajib Diiisi!',
        ]);

        $data = [
            'username' => $request->username,
            'role' => $request->role,
        ];

        User::find($id)->update($data);
        return redirect()->to('/dashboardPengurus/Role')->with('success', 'Data Berhasil Diubah!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        User::where('id',$id)->delete();
        return redirect()->to('/dashboardPengurus/Role')->with('success','Data Berhasil Dihapus!');
    }
}
