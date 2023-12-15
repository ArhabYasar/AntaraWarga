<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
{
    $cari = $request->cari;
    $data = User::orderBy('id', 'asc');

    if ($cari) {
        $data->where('name', 'LIKE', '%' . $cari . '%')
             ->orWhere('username', 'LIKE', '%' . $cari . '%')
             ->orWhere('email', 'LIKE', '%' . $cari . '%')
             ->orWhere('role', 'LIKE', '%' . $cari . '%');
    }

    $data = $data->get();

    return view('Dashboard.dashboard-pengurus.user-manage.Users')->with('data', $data)->with('cari', $cari);
}


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = new User();
        return view('Dashboard.dashboard-pengurus.user-manage.crud.CreateUsers', compact('data','data'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string:users,name',
            'username' => 'required',
            'email' => 'required',
            'password' => 'required',
        ],[
            'name.required' => 'Nama Wajib Diisi!',
            'name.string' => 'Nama Hanya Berupa Huruf!',
            'username.required' => 'Username Wajib Diisi!',
            'email.required' => 'Email Wajib Diisi!',
            'password.required' => 'Password Wajib Diisi!',
        ]);

        $data = [
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => $request->password,
            'role' => $request->role,
        ];
        User::create($data);
        return redirect()->to('/dashboardPengurus/Users')->with('success','Data Berhasil Diubah!');

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
    public function edit($id)
    {
        $data = User::findOrFail($id);
        return view('Dashboard.dashboard-pengurus.user-manage.crud.EditUsers', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string:users,name',
            'username' => 'required',
            'email' => 'required',
        ], [
            'name.required' => 'Nama Wajib Diisi!',
            'name.string' => 'Nama Hanya Berupa Huruf!',
            'username.required' => 'Username Wajib Diisi!',
            'email.required' => 'Email Wajib Diisi!',
        ]);

        $data = [
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
        ];

        User::where('id', $id)->update($data);

        return redirect()->to('/dashboardPengurus/Users')->with('success', 'Data Berhasil Diperbarui!');
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->to('/dashboardPengurus/Users')->with('success', 'Data Berhasil Dihapus!');
    }}
